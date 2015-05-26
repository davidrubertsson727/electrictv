<?php get_header(); ?>
	<?php roots_content_before(); ?>
		<div id="content" class="row">
		<?php roots_main_before(); ?>
			<div id="content-left" class="large-8 medium-8 small-12 columns" role="main">

				<?php
	    			query_posts(array(
	                	'post_type' => 'etv_video',
	                	'posts_per_page' => 1,
	                	'orderby' => 'date',
	                	)
					)
				?>

				<?php /* Start loop */ ?>
				<?php while (have_posts()) : the_post(); ?>

				<?php
							$youtube_url = get_post_meta($post->ID, '_etv_youtube_url', true);
							#var_dump($youtube_url);
							parse_str(parse_url($youtube_url, PHP_URL_QUERY));
						?>

				<?php
					$the_featured_title = get_post_meta($post->ID, '_etv_featured_title', true);
					if ($the_featured_title == '') {
						$featured_title_display = get_the_title();
					} else {
						$featured_title_display = $the_featured_title;
					}
					
					$the_featured_excerpt = get_post_meta($post->ID, '_etv_featured_excerpt', true);
					if ($the_featured_excerpt == '') {
						$featured_excerpt_display = get_the_excerpt();
					} else {
						$featured_excerpt_display = $the_featured_excerpt;
					}

					$the_preview_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 640,385 ), false, '' );
					if ($the_preview_image[0] == '') {
						$preview_image_display = "http://img.youtube.com/vi/" . "$v" . "/0.jpg";
					} else {
						$preview_image_display = $the_preview_image[0];
					}
				?>

					<?php roots_post_before(); ?>

					<div class="featuredVideo">
						<h1>Featured Video</h1>
					</div>
					<div class="videoplayground">
						<div class="YouTubePlaceholder" style="background: url(<?php echo $preview_image_display; ?>) 0 0;">
							<div class="YouTubeLeftPanel">
								<h2><?php echo $featured_title_display; ?></h2>
								<p><?php echo $featured_excerpt_display; ?></p>
								<p class="YouTubeWatchBtn"><a href="javascript:PlayYouTube();"><span>watch video</span></a></p>
							</div>
							<p class="YouTubePlayBtn"><a href="javascript:PlayYouTube();"></a></p>
						</div>
						<iframe id="YouTubeEmbed" class="YouTubeEmbed" width="640" height="385" src="http://www.youtube.com/embed/<?php echo $v; ?>?enablejsapi=1&version=3&rel=0&controls=1&playerapiid=ytplayer&modestbranding=1&autohide=1" frameborder="0" src="" allowfullscreen></iframe>
						<div class="featuredVideoBtn">
							<a href="/"><img alt="" src="/img/featuredVideo.gif" /></a>
						</div>
					</div>

					<div style="clear: both;"></div>
					<div class="recentVideos">
						<h1>Recent Videos</h1>
					    <ul class="rssNewsArchive">
					        <li class="rss"><a href="/feed"><img src="/img/rss.png" alt="RSS" /></a></li>
					        <li class="video_archive"><a href="/videos/">video archive</a></li>
					    </ul>
					</div>


					<?php roots_post_after(); ?>
				<?php endwhile; /* End loop */ ?>
				<?php wp_reset_query(); ?>

				<div class="clear"><!--  --></div>

				<?php
	    			query_posts(array(
	                	'post_type' => 'etv_video',
	                	'orderby' => 'date',
	                	'order' => 'DESC',
	                	'posts_per_page' => 8,
	                	'offset' => 1,
	                	)
					)
				?>

				<ul class="videos row">
					<?php /* Start loop */ ?>
					<?php while (have_posts()) : the_post(); ?>

						<?php roots_post_before(); ?>
						<?php
							$youtube_url = get_post_meta($post->ID, '_etv_youtube_url', true);
							#var_dump($youtube_url);
							parse_str(parse_url($youtube_url, PHP_URL_QUERY));
						?>
						<?php
							$the_featured_title = get_post_meta($post->ID, '_etv_featured_title', true);
							if ($the_featured_title == '') {
								$featured_title_display = get_the_title();
							} else {
								$featured_title_display = $the_featured_title;
							}
							
							$the_featured_excerpt = get_post_meta($post->ID, '_etv_featured_excerpt', true);
							if ($the_featured_excerpt == '') {
								$featured_excerpt_display = get_the_excerpt();
							} else {
								$featured_excerpt_display = wp_trim_words( $the_featured_excerpt, $num_words = 12, $more = null );
							}

							$the_preview_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 145,87 ), false, '' );
							if ($the_preview_image[0] == '') {
								$preview_image_display = "http://img.youtube.com/vi/" . "$v" . "/0.jpg";
							} else {
								$preview_image_display = $the_preview_image[0];
							}
						?>
							<li class="videoRepeater homepage large-3 medium-4 small-6 columns">
								<div class="videoThumb">
									<a href="<?php the_permalink(); ?>">
										<img class="screen" src="<?php echo $preview_image_display; ?>" alt="<?php the_title(); ?>">
										<img class="play" src="/img/playBtn.png" alt="<?php the_title(); ?>">
									</a>
								</div>
								<h2><a href="<?php the_permalink(); ?>"><?php echo $featured_title_display; ?></a></h2>
								<div class="videoDesc">
									<?php echo $featured_excerpt_display; ?>
								</div>
							</li>


						<?php roots_post_after(); ?>
					<?php endwhile; /* End loop */ ?>
					<?php wp_reset_query(); ?>
				</ul>
				<?php //roots_loop_before(); ?>
				<?php //get_template_part('loop', 'page'); ?>
				<?php //roots_loop_after(); ?>
			</div><!-- /#content-left -->
		<?php roots_main_after(); ?>
		<?php roots_sidebar_before(); ?>
			<aside id="content-right" class="large-4 medium-4 small-12 columns" role="complementary">
			<?php roots_sidebar_inside_before(); ?>
				<?php get_sidebar(); ?>
			<?php roots_sidebar_inside_after(); ?>
			</aside><!-- /#content-right -->
		<?php roots_sidebar_after(); ?>
		</div><!-- /#content -->
	<?php roots_content_after(); ?>
<?php get_footer(); ?>
