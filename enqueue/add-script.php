<?php
function multi_blog_external_scripts_js() {
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js' );

}
add_action( 'wp_enqueue_scripts', 'multi_blog_external_scripts_js' );