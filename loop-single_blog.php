<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<?php roots_post_before(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<?php roots_post_inside_before(); ?>
		<?php
	    	setPostViews(get_the_ID());
		?>

			<div class="entry-content">
				
				<div id="plc_lt_zoneContent_pageplaceholder_pageplaceholder_lt_zoneLeft_videoViewer_userControlElem_UpdatePanel1">
				    
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

				<div class="page-header"><h1><?php the_title(); ?></h1></div>
				<?php the_post_thumbnail(); ?>				
				<?php the_content(); ?>
				<?php echo apply_filters('the_content', get_post_meta($post->ID,'_etv_below_video_content','true')); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
				<?php $tags = get_the_tags(); if ($tags) { ?><p><?php the_tags(); ?></p><?php } ?>

				  <nav id="post-nav" class="pager">
					<?php
					     $p = get_adjacent_post(false, '', true);
					     if(!empty($p)) echo '<div class="prev"><a href="' . get_permalink($p->ID) . '" title="' . $p->post_title . '">' . $p->post_title . '</a></div>';
					 
					     $n = get_adjacent_post(false, '', false);
					     if(!empty($n)) echo '<div class="next"><a href="' . get_permalink($n->ID) . '" title="' . $n->post_title . '">' . $n->post_title . '</a></div>';
					?>
				  </nav>

			</footer>
			<?php comments_template(); ?>
			<?php roots_post_inside_after(); ?>
		</article>
	<?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>
