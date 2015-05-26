<?php get_header(); ?>
	<?php roots_content_before(); ?>
		<div id="content">
		<?php roots_main_before(); ?>
			<div id="content-left" class="large-8 medium-8 small-12 columns" role="main" role="main">
				<div class="page-header">
					<h1><?php _e('Search Results for', 'roots'); ?> <?php echo get_search_query(); ?></h1>
				</div>
				<?php roots_loop_before(); ?>
				<?php get_template_part('loop', 'search'); ?>
				<?php roots_loop_after(); ?>
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
