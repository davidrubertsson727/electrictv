<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<?php roots_post_before(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<?php roots_post_inside_before(); ?>
		<?php
	    	setPostViews(get_the_ID());
		?>

			<div class="entry-content">
				<?php $youTubeUrl = get_post_meta($post->ID,'_etv_youtube_url','true'); echo $youTubeUrl; ?>
				
				<div id="plc_lt_zoneContent_pageplaceholder_pageplaceholder_lt_zoneLeft_videoViewer_userControlElem_UpdatePanel1">

					<div id="ratingDisplay">
						<b>Rate this video:</b>

						<div id="plc_lt_zoneContent_pageplaceholder_pageplaceholder_lt_zoneLeft_videoViewer_userControlElem_elemRating_pnlRating" class="CntRatingContent">
							<div id="plc_lt_zoneContent_pageplaceholder_pageplaceholder_lt_zoneLeft_videoViewer_userControlElem_elemRating_RatingControl_elemRating">
								<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
							</div>
						</div>
					</div>
				    
				</div>

				<script type="text/javascript">
					$(document).ready(function(){
						$("#BoardPanel").hide();
						$(".button").click(function(){
						  $("#BoardPanel").slideToggle("slow");
						  $(this).toggleClass("active");
						});
					});
				</script>
				<br>
				<?php //the_content(); ?>
				<?php echo apply_filters('the_content', get_post_meta($post->ID,'_etv_below_video_content','true')); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
				<?php $tags = get_the_tags(); if ($tags) { ?><p><?php the_tags(); ?></p><?php } ?>
			</footer>
			<?php comments_template(); ?>
			<?php roots_post_inside_after(); ?>
		</article>
	<?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>
