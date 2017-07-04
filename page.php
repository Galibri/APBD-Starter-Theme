<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
			while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

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