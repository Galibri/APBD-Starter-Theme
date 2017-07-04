<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package multi-blog
 */
global $apbd; 

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="shortcut icon" href="<?php echo $apbd['apbd-favicon']['url']; ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if($apbd['apbd-social-comment'] == '1') { ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php } ?>
<div id="page" class="site">
	
    <div class="header <?php if($apbd['apbd-sticky-header']['1'] == '1') { echo 'sticky-on';} ?>">
        <?php if($apbd['apbd-header-layout'] != '1' && $apbd['apbd-header-layout'] != '9' && $apbd['apbd-header-layout'] != '10'){
                echo get_template_part('inc/top-bar');
            } ?>
        <div class="header-main">
           <div class="<?php if($apbd['apbd-fullwidth-header'] == '1'){echo 'container-fluid';} else{echo 'container';} ?>">
            <?php
                if($apbd['apbd-header-layout'] == '2'){
                    echo get_template_part('inc/header', 'general');
                } elseif($apbd['apbd-header-layout'] == '1'){
                    echo get_template_part('inc/header', 'general');
                } elseif($apbd['apbd-header-layout'] == '3'){
                    echo get_template_part('inc/header', 'general');
                } elseif($apbd['apbd-header-layout'] == '4'){
                    echo get_template_part('inc/header', '4');
                } elseif($apbd['apbd-header-layout'] == '5'){
                    echo get_template_part('inc/header', '5');
                } elseif($apbd['apbd-header-layout'] == '6'){
                    echo get_template_part('inc/header', '6');
                } elseif($apbd['apbd-header-layout'] == '7'){
                    echo get_template_part('inc/header', '7');
                } elseif($apbd['apbd-header-layout'] == '8'){
                    echo get_template_part('inc/header', '8');
                } elseif($apbd['apbd-header-layout'] == '9'){
                    echo get_template_part('inc/header', '9');
                } elseif($apbd['apbd-header-layout'] == '10'){
                    echo get_template_part('inc/header', '10');
                }  
            ?>
        </div>
    </div>
    <?php get_template_part('inc/mobile', 'header'); ?>
    <?php require_once('sub-header.php'); ?>
    

	<div id="content" class="<?php if($apbd['apbd-global-layout'] == '1' || $apbd['apbd-global-layout'] == '2' || $apbd['apbd-global-layout'] == '3'){ echo 'container'; } elseif($apbd['apbd-global-layout'] == '4'){ echo 'container-fluid'; } ?>">
	    <div class="row">
	        <?php 
                $sliderShortcode = get_post_meta(get_the_ID(), 'apbd-slider-shortcode', true);
                echo do_shortcode($sliderShortcode);
            ?>
