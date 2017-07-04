<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package multi-blog
 */

get_header(); ?>

	<div id="primary" class="content-area text-center">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
	
					<img src="<?php echo get_template_directory_uri(); ?> . /img/404.png" alt="">

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
