<?php get_header(); ?>
	<?php roots_content_before(); ?>
		<div id="content" class="row">
		<?php if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<p id="breadcrumbs" style="margin-left: 15px;">','</p>');
		} ?>
		<?php roots_main_before(); ?>
			<div id="content-left" class="large-8 medium-8 small-12 columns" role="main">

				<?php
					/*$sorting = $_GET['orderby'];
					if ($sorting==="views") {
						$args = array(
	                	'post_type' => 'etv_video',
	                	'meta_key' => 'post_views_count',
	                	'orderby' => 'meta_value_num',
	                	'order' => 'DESC',
	                	'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
	                	'year' => ( get_query_var('year') ? get_query_var('year') : all),
	                	);
					}
					elseif ($orderby==="title") {
						$args = array(
	                	'post_type' => 'etv_video',
	                	'orderby' => 'title',
	                	'order' => 'ASC',
	                	'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
	                	'year' => ( get_query_var('year') ? get_query_var('year') : all),
	                	);
					}
					elseif ($orderby==="comment_count") {
						$args = array(
	                	'post_type' => 'etv_video',
	                	'orderby' => 'comment_count',
	                	'order' => 'DESC',
	                	'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
	                	'year' => ( get_query_var('year') ? get_query_var('year') : all),
	                	);
					}
					elseif ($orderby==="rating") {
						$args = array(
	                	'post_type' => 'etv_video',
	                	'r_sortby' => 'highest_rated',
	                	'r_orderby' => 'DESC',
	                	'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
	                	'year' => ( get_query_var('year') ? get_query_var('year') : all),
	                	);
					}
					else {
						$args = array(
	                	'post_type' => 'etv_video',
	                	'orderby' => 'date',
	                	'order' => 'DESC',
	                	'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
	                	'year' => ( get_query_var('year') ? get_query_var('year') : all),
	                	);
					}
	    			query_posts($args);*/
				?>
				<div class="sort-bar">
					<?php if( single_cat_title("", false) != "" ) { ?><h1 class="cat-title"><?php single_cat_title(); } else { ?><h1>Electric Videos<?php } ?> <?php echo $sorting; ?></h1>
					<div class="PagerControl1">
						<div class="PagerResults">
							<?php echo 'Page '. ( get_query_var('paged') ? get_query_var('paged') : 1 ) . ' of ' . $wp_query->max_num_pages; ?>
						</div>
						<div class="PagerNumberArea">
							<?php
								add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
								add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');
								function posts_link_attributes_1() {
									return 'class="SelectedNext"';
								}
								function posts_link_attributes_2() {
									return 'class="SelectedPrev"';
								}
							?>
							<span>&nbsp; <?php previous_posts_link(__('&lt;', 'roots')); ?></span> <span>&nbsp;<?php next_posts_link(__('&gt;', 'roots')); ?>&nbsp;</span>
						</div>
					</div><!-- /PagerControl1 -->
					<!--<ul class="nav nav-tabs">
						<li<?php //if($sorting==="date" or $sorting=="") { echo ' class="active"'; }?>><a href="/videos">Date Added</a></li>
						<li<?php //if($sorting==="rating") { echo ' class="active"'; }?>><a href="/videos?orderby=rating">Highest Rated</a></li>
						<li<?php //if($sorting==="comment_count") { echo ' class="active"'; }?>><a href="/videos?orderby=comment_count">Most Commented</a></li>
						<li<?php //if($sorting==="views") { echo ' class="active"'; }?>><a href="/videos?orderby=views">Most Viewed</a></li>
						<li<?php //if($sorting==="title") { echo ' class="active"'; }?>><a href="/videos?orderby=title">Alphabetical</a></li>
					</ul>
					<div class="timeLinks">Timeframe:
						<a href="/videos<?php //if($sorting != "") { echo "?orderby=" . $sorting; } ?>">All</a>
						<a href="/videos?<?php //if($sorting != "") { echo "orderby=" . $sorting . "&"; } ?>year=2007">2007</a>
						<a href="/videos?<?php //if($sorting != "") { echo "orderby=" . $sorting . "&"; } ?>year=2008">2008</a>
						<a href="/videos?<?php //if($sorting != "") { echo "orderby=" . $sorting . "&"; } ?>year=2009">2009</a>
						<a href="/videos?<?php //if($sorting != "") { echo "orderby=" . $sorting . "&"; } ?>year=2010">2010</a>
						<a href="/videos?<?php //if($sorting != "") { echo "orderby=" . $sorting . "&"; } ?>year=2011">2011</a>
						<a href="/videos?<?php //if($sorting != "") { echo "orderby=" . $sorting . "&"; } ?>year=2012" }>2012</a>
					</div>-->
				</div>
				
				<div style="clear:both;"></div>

				<?php roots_loop_before(); ?>
				<?php get_template_part('templates/loop', 'video'); ?>
				<?php roots_loop_after(); ?>
				<?php wp_reset_query(); ?>
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
