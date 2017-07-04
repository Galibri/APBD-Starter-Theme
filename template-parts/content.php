<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package multi-blog
 */
global $apbd;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
            if($apbd['apbd-featured-images'] == '1'){ ?>
                <div class="full-width-post-image"><?php the_post_thumbnail(); ?></div>
           <?php }
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php multi_blog_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
            if(is_single()){
                
			the_content();
                
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'multi-blog' ),
				'after'  => '</div>',
			) );
            } else {
                the_excerpt();
            }
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	    <?php if(! is_single()) { ?>
		  <a href="<?php the_permalink(); ?>">Read More</a>
        <?php } ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
