<?php
/**
 * multi-blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package multi-blog
 */

if ( ! function_exists( 'multi_blog_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function multi_blog_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on multi-blog, use a find and replace
	 * to change 'multi-blog' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'multi-blog', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menus() in different locations.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'multi-blog' ),
		'menu-top' => esc_html__( 'Top Menu', 'multi-blog' ),
		'menu-side' => esc_html__( 'Sticky Side Menu', 'multi-blog' ),
		'menu-footer' => esc_html__( 'Footer Menu', 'multi-blog' ),
		'menu-left' => esc_html__( 'Logo Centered Left Menu', 'multi-blog' ),
		'menu-right' => esc_html__( 'Logo Centered Right Menu', 'multi-blog' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'multi_blog_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'multi_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function multi_blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'multi_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'multi_blog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function multi_blog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'multi-blog' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'multi-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'multi-blog' ),
		'id'            => 'left-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'multi-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Small Sidebar', 'multi-blog' ),
		'id'            => 'small-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'multi-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'multi-blog' ),
		'id'            => 'footer-one',
		'description'   => esc_html__( 'Add widgets here.', 'multi-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'multi-blog' ),
		'id'            => 'footer-two',
		'description'   => esc_html__( 'Add widgets here.', 'multi-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'multi-blog' ),
		'id'            => 'footer-three',
		'description'   => esc_html__( 'Add widgets here.', 'multi-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'multi-blog' ),
		'id'            => 'footer-four',
		'description'   => esc_html__( 'Add widgets here.', 'multi-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );  
}
add_action( 'widgets_init', 'multi_blog_widgets_init' );

/**
 * Load theme option files.
 */
require_once('assets/options/ReduxCore/framework.php');
require_once('assets/options/sample/settings.php');

function apbd_add_custom_css(){
    global $apbd;?>
    <style type="text/css"><?php echo $apbd['apbd-extra-css']; ?> </style> <?php
}
add_action('wp_head','apbd_add_custom_css');

add_action( 'admin_menu', 'remove_redux_menu',12 );
function remove_redux_menu() {
    remove_submenu_page('tools.php','redux-about');
}

/**
 * Enqueue scripts and styles.
 */
require_once get_template_directory() . '/enqueue/add-style.php';
function multi_blog_scripts() {
	wp_enqueue_style( 'multi-blog-style', get_stylesheet_uri() );
	wp_enqueue_style( 'responsive-style', get_template_directory_uri() . '/css/responsive.css' );

	wp_enqueue_script( 'multi-blog-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    
	wp_enqueue_script( 'multi-blog-fullpage-nav', get_template_directory_uri() . '/js/fullpage-nav.js', array(), '20151215', true );

	wp_enqueue_script( 'multi-blog-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'multi_blog_scripts' );
require_once get_template_directory() . '/enqueue/add-script.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
*   Load extra css
*/
function apbd_theme_dynamic_css_load() {
    include( 'style-dynamic.php' );
}
add_action('wp_head', 'apbd_theme_dynamic_css_load');

/**
*   Add breadcrumbs
*/
require_once('breadcrumbs.php');

function apbd_custom_excerpt_length( $length ) {
    return 55;
}
add_filter( 'excerpt_length', 'apbd_custom_excerpt_length', 999 );

function apbd_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'apbd_excerpt_more' );

//theme funciton include
require_once('inc/theme-function.php');

//TGM Plugin install
require_once(dirname(__FILE__) . '/include/tgm/add-plugins.php');

/*if ( class_exists( 'RevSlider' ) ) {
    $rev_slider = new RevSlider();
    $sliders = $rev_slider->getAllSliderAliases();
    foreach($sliders as $slide){
        echo $slide . '<br>';
    }
} else {
    $sliders = array();
}*/

//including meta boxes
require_once('include/meta/init.php');
require_once('include/meta/functions.php');