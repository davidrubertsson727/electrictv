<?php get_header(); ?>
	<?php roots_content_before(); ?>
		<div id="content" class="row">
		<?php if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} ?>
		<?php roots_main_before(); ?>
			<div id="content-left" class="large-8 medium-8 small-12 columns" role="main" role="main">
				<?php roots_loop_before(); ?>
				<?php get_template_part('loop', 'single_blog'); ?>
				<?php roots_loop_after(); ?>
				<div class="share-buttons">
					<span class='st_facebook' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
					<span class='st_twitter' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
					<span class='st_email' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
					<span class='st_sharethis' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
					<span class='st_fblike' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
					<span class='st_plusone' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
				</div>
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