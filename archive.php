<?php
	#FIXME
	global $post;
	if ('etv_video' == $post->post_type) {
		return require_once("archive-videos.php");
	}
	
	
?>
<?php get_header(); ?>
	<?php roots_content_before(); ?>
		<div id="content" class="row">
		<?php roots_main_before(); ?>
			<div id="content-left" class="large-8 medium-8 small-12 columns" role="main" role="main">
				<div class="page-header">
					<h1>
						<?php
							$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
							if ($term) {
								echo $term->name;
							} elseif (is_post_type_archive()) {
								echo get_queried_object()->labels->name;
							} elseif (is_day()) {
								printf(__('Daily Archives: %s', 'roots'), get_the_date());
							} elseif (is_month()) {
								printf(__('Monthly Archives: %s', 'roots'), get_the_date('F Y'));
							} elseif (is_year()) {
								printf(__('Yearly Archives: %s', 'roots'), get_the_date('Y'));
							} elseif (is_author()) {
								global $post;
								$author_id = $post->post_author;
								printf(__('Author Archives: %s', 'roots'), get_the_author_meta('user_nicename', $author_id));
							} else {
								single_cat_title();
							}
						?>
					</h1>
				</div>
				<?php roots_loop_before(); ?>
				<?php get_template_part('loop', 'category'); ?>
				<?php roots_loop_after(); ?>
			</div><!-- /#content-left -->
		<?php roots_main_after(); ?>
		<?php roots_sidebar_before(); ?>
			<aside id="content-right" class="large-4 medium-4 small-12 columns" role="complementary">
			<?php roots_sidebar_inside_before(); ?>
				<?php #get_sidebar(); ?>
			<?php roots_sidebar_inside_after(); ?>
			</aside><!-- /#content-right -->
		<?php roots_sidebar_after(); ?>
		</div><!-- /#content -->
	<?php roots_content_after(); ?>
<?php get_footer(); ?>
