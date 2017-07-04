<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package multi-blog
 */
global $apbd;
?>
        </div> <!-- .row -->
	</div><!-- #content -->
	<div class="footer-top">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
	                <?php echo $apbd['apbd-footer-global-text']; ?>
	            </div>
	        </div>
	    </div>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
        <?php
            if($apbd['apbd-footer-layout'] == '1'){
                include('template-parts/footer-four.php');
            } elseif($apbd['apbd-footer-layout'] == '2'){
                include('template-parts/footer-three.php');
            } elseif($apbd['apbd-footer-layout'] == '3'){
                include('template-parts/footer-two.php');
            } elseif($apbd['apbd-footer-layout'] == '4'){
                include('template-parts/footer-one.php');
            }
        ?>
	</footer><!-- #colophon -->
	<div class="footer-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <?php echo $apbd['apbd-footer-copyright']; ?>
                </div>
            </div>
        </div>
	</div>
</div><!-- #page -->
<?php 
    if($apbd['apbd-sticky-left-menu'] == '1' || $apbd['apbd-sticky-right-menu'] == '1') {
        get_template_part('menu-side');
    }
?>
<?php wp_footer(); ?>

</body>
</html>
