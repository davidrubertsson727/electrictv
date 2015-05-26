<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if (!have_posts()) { ?>
	<div class="alert alert-block fade in">
		<a class="close" data-dismiss="alert">&times;</a>
		<p><?php _e('Sorry, no results were found.', 'roots'); ?></p>
	</div>
	<?php get_search_form(); ?>
<?php } ?>

<!-- Write gets to pull variables from urls, and change args using conditionals? -->
<div class="row">
<?php /* Start loop */ ?>
<ul>
<?php while (have_posts()) : the_post(); ?>

	<?php roots_post_before(); ?>

		<?php
			$youtube_url = get_post_meta($post->ID, '_etv_youtube_url', true);
			#var_dump($youtube_url);
			parse_str(parse_url($youtube_url, PHP_URL_QUERY));
		?>

		<li class="videoRepeater large-3 medium-4 small-6 columns">
			<div class="videoThumb">
				<a href="<?php the_permalink(); ?>">
					<img class="screen" src="http://img.youtube.com/vi/<?php echo $v; ?>/0.jpg" alt="<?php the_title(); ?>">
					<img class="play" src="/img/playBtn.png" alt="<?php the_title(); ?>">
				</a>
			</div>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="videoDesc"><?php the_excerpt(); ?> <br>

				<div class="CntRatingContent">
					<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
				</div>
				<div class="dateAdded">Added <?php the_time('m/d/Y') ?></div>
				<div class="commentCount"><?php comments_number( '0', '1', '% responses' ); ?> Comments</div>
			</div>
		</li>

	<?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>
</ul>

</div>
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ($wp_query->max_num_pages > 1) { ?>
	<!--<nav id="post-nav" class="pager">
		<div class="previous"><?php //next_posts_link(__('&larr; Older posts', 'roots')); ?></div>
		<div class="next"><?php //previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></div>
	</nav>-->
		<?php
		function etv_pagination($pages = '', $range = 2)
		{  
			$showitems = ($range * 2)+1;  
			global $paged;
		    if(empty($paged)) $paged = 1;

		    if($pages == '')
		    {
		        global $wp_query;
		        $pages = $wp_query->max_num_pages;
		        if(!$pages)
		        {
		            $pages = 1;
		        }
		    }   

		    if(1 != $pages)
		    {
		        echo "<div class='pagination' style='text-align:center;margin-top:40px;padding-bottom:10px;'><ul>";
		        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&laquo;</a><li>";
		        if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";

		        for ($i=1; $i <= $pages; $i++)
		        {
		            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
		            {
		                echo ($paged == $i)? "<li><span class='active'><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></span></li>":"<li><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></li>";
		            }
		        }

		        if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";  
		        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
		        echo "</ul></div>\n";
		    }
		}
		etv_pagination();
		?>
<?php } ?>
