<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package multi-blog
 */
global $apbd;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
            if($apbd['apbd-featured-images'] == '1'){ ?>
                    <div class="full-width-post-image text-center"><?php the_post_thumbnail(); ?></div>
             <?php }
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'multi-blog' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

		<footer class="entry-footer">

		</footer><!-- .entry-footer -->
</article><!-- #post-## -->
