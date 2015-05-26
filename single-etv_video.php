<?php get_header(); ?>
	<?php roots_content_before(); ?>
		<div id="content" class="row">
		<?php if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} ?>
		<?php roots_main_before(); ?>
			<div id="content-left" class="large-8 medium-8 small-12 columns" role="main" role="main">
				<?php roots_loop_before(); ?>
				<?php get_template_part('loop', 'single'); ?>
				<?php roots_loop_after(); ?>
				<div class="share-buttons">
					<span class='st_facebook' st_title='<?php the_title(); ?>' st_url='<?php echo"http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>'></span>
					<span class='st_twitter' st_title='<?php the_title(); ?>' st_url='<?php echo"http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>'></span>
					<span class='st_email' st_title='<?php the_title(); ?>' st_url='<?php echo"http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>'></span>
					<span class='st_sharethis' st_title='<?php the_title(); ?>' st_url='<?php echo"http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>'></span>
					<span class='st_fblike' st_title='<?php the_title(); ?>' st_url='<?php echo"http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>'></span>
					<span class='st_plusone' st_title='<?php the_title(); ?>' st_url='<?php echo"http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>'>.</span>
				</div>
			</div><!-- /#content-left -->
		<?php roots_main_after(); ?>
		<?php roots_sidebar_before(); ?>
			<aside id="content-right" class="large-4 medium-4 small-12 columns" role="complementary">
			<?php roots_sidebar_inside_before(); ?>
			

				<div id="videoInfoDetail">
					<h2>Now Playing</h2>
					<div class="grnHeader">
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="videoDetailBody">
						<?php the_content(); ?>
						<!--<div class="videoDetailLength">
							<h2>Length:</h2>7:03
						</div>-->
						<div class="videoDetailTags">
							<h2>Tags:&nbsp;</h2>
							<?php
								$taxonomy = 'etv_videotag';
								$tax_terms = get_the_terms( get_the_ID(), $taxonomy );
								foreach ($tax_terms as $tax_term) {
									echo '<span>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts tagged %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a></span>';
								}
							 ?>
						</div>
						<div class="videoDetailTags">
							<h2>Categories:</h2>
							<?php
							    $taxonomy = 'etv_videocategory';
								$tax_terms = get_the_terms( get_the_ID(), $taxonomy );
							    foreach ($tax_terms as $tax_term) {
									echo '<span>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in category %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a></span>';
								}
							 ?>
						</div>
					</div>
				</div>

				<?php //get_sidebar(); ?>
			<?php roots_sidebar_inside_after(); ?>
			</aside><!-- /#content-right -->
		<?php roots_sidebar_after(); ?>
		</div><!-- /#content -->
	<?php roots_content_after(); ?>
<?php get_footer(); ?>