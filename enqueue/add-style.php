<?php

function multi_blog_external_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );

}
add_action( 'wp_enqueue_scripts', 'multi_blog_external_scripts' );