<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package multi-blog
 */
global $apbd;
get_header(); ?>
    
    <?php if($apbd['apbd-page-layout'] == '2'){ ?>  
        <div class="col-md-3">
            <?php dynamic_sidebar('right-sidebar'); ?>
        </div>
    <?php }
    if($apbd['apbd-page-layout'] == '4'){ ?>  
        <div class="col-md-2">
            <?php dynamic_sidebar('small-sidebar'); ?>
        </div>
    <?php } ?>
	<div id="primary" class="<?php if($apbd['apbd-page-layout'] == '1') {echo 'col-md-12';} elseif($apbd['apbd-page-layout'] == '2' || $apbd['apbd-page-layout'] == '3') {echo 'col-md-9';} elseif($apbd['apbd-page-layout'] == '4' || $apbd['apbd-page-layout'] == '5') {echo 'col-md-7';} ?>">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) {

			if ( is_home() && ! is_front_page() ) { ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
                }

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );
                if($apbd['apbd-blog-share'] == '1'){
                    echo do_shortcode('[apbd_social_share]');
                } 

			endwhile;
            
            if($apbd['apbd-blog-pagination'] == '1'){
                the_posts_pagination( array(
                    'mid_size' => 2,
                    'prev_text'          => __( 'Prev', 'multi-blog' ),
                    'next_text'          => __( 'Next', 'multi-blog' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'multi-blog' ) . ' </span>',
                ) );   
            }
        }

		else {

			get_template_part( 'template-parts/content', 'none' );

        } ?>

		</main><!-- #main -->
	</div><!-- #primary -->
    <?php if($apbd['apbd-page-layout'] == '5'){ ?>  
        <div class="col-md-2">
            <?php dynamic_sidebar('small-sidebar'); ?>
        </div>
    <?php } ?>
    <?php if($apbd['apbd-page-layout'] == '3' || $apbd['apbd-page-layout'] == '4' || $apbd['apbd-page-layout'] == '5'){ ?>  
        <div class="col-md-3">
            <?php dynamic_sidebar('right-sidebar'); ?>
        </div>
<?php
}
get_footer();