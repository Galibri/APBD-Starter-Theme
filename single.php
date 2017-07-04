<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );
                if($apbd['apbd-individual-blog-share'] == '1'){
                    echo do_shortcode('[apbd_social_share]');
                }    
            if($apbd['apbd-related-posts'] == '1'){
                include('template-parts/related-posts.php');
            } if($apbd['apbd-social-comment'] == '1' && $apbd['apbd-enable-comment'] == '1'){?>
                <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="10" data-order-by="social" data-colorscheme="light"></div>       
            <?php	} elseif($apbd['apbd-social-comment'] == '2' && $apbd['apbd-enable-comment'] == '1'){		
            // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
            }

		endwhile; // End of the loop.
		?>
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