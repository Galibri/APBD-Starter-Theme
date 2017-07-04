<?php
    /**
     * ThemeOptions Sample Config File
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "apbd_opts";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'submenu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'APBD Theme Option', 'redux-framework-demo' ),
        'page_title'           => __( 'APBD Theme Option', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => false,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => 'apbd_option',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        'forced_dev_mode_off' => true,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'show_options_object' => false,
        //desable options object
        'customizer'           => false,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => 62,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => false,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        'footer_credit'     => 'Powered by <a href="#">APBD Theme Options</a>, All right reserved.',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );


    Redux::setArgs( $opt_name, $args );

/*
* ---> END ARGUMENTS
*/

/*
* Start Section building
*/

/**
*** Main Interface section of Theme Options
**/
    Redux::setSection($opt_name, array(
        'title'         => 'Main Interface',
        'id'               => 'apbd_main',
        'desc'             => 'Set up main interface of APBD theme.',
        'customizer_width' => '400px',
        'icon'             => 'el el-home'

    ));
/**
*** Main Interface section of Theme Options
**/
    Redux::setSection($opt_name, array(
        'title'         => 'General',
        'id'               => 'apbd-general',
        'customizer_width' => '400px',
        'icon'             => 'el el-globe',
        'subsection'       => true,
        'fields'           => array(
            array(
                'title'     => 'Global Layout',
                'id'        => 'apbd-global-layout',
                'type'      => 'radio',
                'options'   => array(
                    '1'     => 'Full Width',
                    '2'     => 'Boxed',
                    '3'     => 'Boxed + Top margin'
                    ),
                'default'   => '1'
            ),
            array(
                'title'     => 'Grid Width',
                'id'        => 'apbd-grid-width',
                'type'      => 'slider',
                'default'   => 1100,
                'min'       => 980,
                'step'      => 1,
                'max'       => 1400,
                'desc'      => 'Set value in px, default is 1100px.',
            ),
            array(
                'title'     => 'Website Background',
                'id'        => 'apbd-website-background',
                'type'      => 'background',
            ),
            array(
                'title'     => 'Favicon',
                'id'        => 'apbd-favicon',
                'type'      => 'media',
                'desc'      => 'Upload a browser icon. 64px X 64px si preferred.'
            ),
        ),

    ));

    Redux::setSection( $opt_name, array(
        'title'         => 'Logo',
        'icon'          => 'el el-leaf',
        'subsection'    => true,
        'fields'        => array(
            array(
                'title'     => 'Logo',
                'id'        => 'apbd_main_logo',
                'type'      => 'media',
                'url'       => true,
                'desc'      => 'Upload a logo of your site',
            ),
            array(
                'title'     => 'Sticky Logo',
                'id'        => 'apbd-sticky-logo',
                'type'      => 'media',
                'url'       => true,
                'desc'      => 'Upload a logo for sticky header of your site',
            ),
            array(
                'title'     => 'Ratina Logo',
                'id'        => 'apbd-ratina-logo',
                'type'      => 'media',
                'url'       => true,
                'desc'      => 'Upload a logo for Retina Display of your site',
            ),
            array(
                'title'     => 'Mobile Logo',
                'id'        => 'apbd-mobile-logo',
                'type'      => 'media',
                'url'       => true,
                'desc'      => 'Upload a logo for Mobile Display of your site',
            ),
            array(
                'title'     => 'Text Logo',
                'id'        => 'apbd-text-logo',
                'type'      => 'text',
                'desc'      => 'If you like to have a text logo, please write it here',
            ),
            array(
                'title'     => 'Extra Features',
                'id'        => 'apbd-extra-features',
                'type'      => 'checkbox',
                'desc'      => 'Tick checkbox if you want to link it to homepage',
                'options'   => array(
                    '1'     => 'Link to Homepage',
                    '2'     => 'Remove Padding',
                    ),
                'default'   => array(
                    '1'     => '1',
                    '2'     => '0'
                ),
            ),
        ),
    ));

/* Header style select */

    Redux::setSection( $opt_name, array(
        'title'             => 'Header',
        'id'                => 'apbd-header-section',
        'desc'              => 'Main header setup',
        'icon'              => 'el el-lines'
    ));

    Redux::setSection($opt_name, array(
        'title'         => 'Header Style',
        'id'            => 'apbd-header-style',
        'desc'          => 'Select your desired header style',
        'subsection'    => true,
        'fields'        => array(
            array(              
                'id'       => 'apbd-header-layout',
                'type'     => 'image_select',
                'title'    => 'Header Layout', 
                'subtitle' => 'Select Header style.',
                'options'  => array(
                    '1'      => array(
                        'alt'   => '1 Column', 
                        'img'   => ReduxFramework::$_url.'assets/header-style/1.png'
                    ),
                    '2'      => array(
                        'alt'   => '2 Column Left', 
                        'img'   => ReduxFramework::$_url.'assets/header-style/2.png'
                    ),
                    '3'      => array(
                        'alt'   => '2 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/header-style/3.png'
                    ),
                    '4'      => array(
                        'alt'   => '3 Column Middle', 
                        'img'   => ReduxFramework::$_url.'assets/header-style/4.png'
                    ),
                    '5'      => array(
                        'alt'   => '3 Column Left', 
                        'img'   => ReduxFramework::$_url.'assets/header-style/5.png'
                    ),
                    '6'      => array(
                        'alt'  => '3 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/header-style/6.png'
                    ),
                    '7'      => array(
                        'alt'  => '3 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/header-style/7.png'
                    ),
                    '8'      => array(
                        'alt'  => '3 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/header-style/8.png'
                    ),
                    '9'      => array(
                        'alt'  => '3 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/header-style/9.png'
                    ),
                    '10'      => array(
                        'alt'  => '3 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/header-style/10.png'
                    ),
                    '11'      => array(
                        'alt'  => '3 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/header-style/11.png'
                    ),
                    '12'      => array(
                        'alt'  => '3 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/header-style/12.png'
                    ),
                    '13'      => array(
                        'alt'  => '3 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/header-style/13.png'
                    ),
                    '14'      => array(
                        'alt'  => '3 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/header-style/14.png'
                    ),
                    '15'      => array(
                        'alt'  => '3 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/header-style/15.png'
                    ),
                    '16'      => array(
                        'alt'  => '3 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/header-style/16.png'
                    ),
                    '17'      => array(
                        'alt'  => '3 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/header-style/17.png'
                    ),
                    '18'      => array(
                        'alt'  => '3 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/header-style/18.png'
                    ),
                    '19'      => array(
                        'alt'  => '3 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/header-style/19.png'
                    ),
                    '20'      => array(
                        'alt'  => '3 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/header-style/20.png'
                    ),
                ),
                'default' => '2'
            ),
            array(
                'title'     => 'Sticky Header',
                'id'        => 'apbd-sticky-header',
                'type'      => 'checkbox',
                'options'    => array(
                    '1'     => 'Sticky'
                    ),
                'default'   => array(
                    '1'     => '1'
                ),
            ),
        )
    ));


    Redux::setSection($opt_name, array(
        'title'             => 'Sub Header',
        'id'                => 'apbd-sub-header-main',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'     => 'Sub Header',
                'id'        => 'apbd-sub-header',
                'type'      => 'button_set',
                'options'   => array(
                    '1'     => 'On',
                    '2'     => 'Off',
                ),
            ),
            array(
                'title'     => 'BreadCrumb',
                'id'        => 'apbd-breadcrumb',
                'type'      => 'button_set',
                'options'   => array(
                    '1'     => 'On',
                    '2'     => 'Off',
                ),
            ),
            array(
                'title'     => 'Page Title',
                'id'        => 'apbd-page-title',
                'type'      => 'button_set',
                'options'   => array(
                    '1'     => 'On',
                    '2'     => 'Off',
                ),
            ),
        ),
    ));

    Redux::setSection($opt_name, array(
        'title'             => 'Extras',
        'id'                => 'apbd-header-extras-main',
        'subsection'        => true,
        'customizer_width' => '400px',
        'fields'            => array(
            array(
                'title'     => 'Search',
                'id'        => 'apbd-header-extras',
                'type'      => 'button_set',
                'options'   => array(
                    '1'     => 'On',
                    '2'     => 'Off',
                ),
            ),
            array(
                'title'     => 'Search Position',
                'id'        => 'apbd-search-position',
                'type'      => 'select',
                'options'   => array(
                    '1'     => 'Right side of Navigation',
                    '2'    => 'Full Screen',
                    '3'     => 'Slide from Top'
                ),
                'default'   => array(
                    '1'     => '1',
                ),
            ),
            array(
                'title'     => 'Sliding to Top',
                'id'        => 'apbd-sliding-to-top',
                'type'      => 'select',
                'options'   => array(
                    '1'     => 'Always on Bottom Right corner',
                    '2'     => 'Footer Center Top',
                    '3'     => 'Footer Right Bottom',
                    '4'     => 'No Sliding To Top'
                ),
                'default'   => array(
                    '1'     => '1'
                ),
            ),
            
            array(
                'title'     => 'Header Banner Ads',
                'id'        => 'apbd-header-banner-ads',
                'type'      => 'textarea'               
            ),
        ),
    ));


/* Menu style select */

    Redux::setSection( $opt_name, array(
        'title'             => 'Menu & Top Bar',
        'id'                => 'apbd-menu-top-bar',
        'desc'              => 'Main Menu Style',
        'icon'              => 'el el-plus-sign'
    ));

    Redux::setSection( $opt_name, array(
        'title'             => 'Menu',
        'id'                => 'apbd-menu-global',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'     => 'Menu Style',
                'id'        => 'apbd-menu-style',
                'type'      => 'select',
                'options'   => array(
                    '1'     => 'Top Line',
                    '2'     => 'Bottom Line',
                    '3'     => 'Active Menu Background',
                ),
                'default'   => array(
                    '3'     => '1',
                ),
            ),
            array(
                'title'     => 'Menu Position',
                'id'        => 'apbd-menu-position',
                'type'      => 'select',
                'options'   => array(
                    '1'     => 'Align Menu to Left',
                    '2'     => 'Align Menu to Right',
                    '3'     => 'Align Menu to Center',
                ),
                'default'   => array(
                    '1'     => '1',
                ),
            ),
            array(
                'title'     => 'Menu Item Border',
                'id'        => 'apbd-menu-item-border',
                'type'      => 'button_set',
                'options'   => array(
                    '1'     => 'On',
                    '2'     => 'Off',
                ),
                'default'   => '1'
            ),
        ),
    ));

    Redux::setSection( $opt_name, array(
        'title'             => 'Top Bar',
        'id'                => 'apbd-top-bar',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'     => 'Top Bar Left',
                'id'        => 'apbd-top-bar-left',
                'type'      => 'button_set',
                'options'   => array(
                    '1'     => 'On',
                    '2'     => 'Off',
                    ),
                'default'   => '1'
            ),
            array(
                'title'     => 'Top Bar Left Title',
                'id'        => 'apbd-top-bar-left-title',
                'type'      => 'text',
            ),
            array(
                'title'     => 'Top Bar Left Phone',
                'id'        => 'apbd-top-bar-left-phone',
                'type'      => 'text',
            ),
            array(
                'title'     => 'Top Bar Left Email',
                'id'        => 'apbd-top-bar-left-email',
                'type'      => 'text',
            ),
            array(
                'title'     => 'Top Bar Right',
                'id'        => 'apbd-top-bar-right',
                'type'      => 'button_set',
                'options'   => array(
                    '1'     => 'On',
                    '2'     => 'Off',
                    ),
                'default'   => '1'
            ),
            array(
                'title'     => 'Top Bar Right Content',
                'id'        => 'apbd-top-bar-right-content',
                'type'      => 'select',
                'options'   => array(
                    '1'     => 'Secondary Menu',
                    '2'     => 'Language Bar',
                    '3'     => 'Cart Icon',
                    '4'     => 'Custom Shortcode'
                ),
                'default'   => array(
                    '1'     => '1',
                ),
            ),
            array(
                'title'     => 'Custom Shortcode',
                'id'        => 'apbd-custom-shortcode-top',
                'type'      => 'text',
                'desc'      => 'Place custom shortcode if you select Custom shortcode in the previous field.'
            ),
        ),
    ));

    
/* Menu style select */

    Redux::setSection( $opt_name, array(
        'title'             => 'Page Layout',
        'id'                => 'apbd-page-layout-global',
        'desc'              => 'Page layout style',
        'icon'              => 'el el-cogs'
    ));

    Redux::setSection($opt_name, array(
        'title'         => 'Page & Blog Layout',
        'id'            => 'apbd-page-layout',
        'desc'          => 'Select your default page layout.',
        'subsection'    => true,
        'fields'        => array(
            array(              
                'id'       => 'apbd-page-layout',
                'type'     => 'image_select',
                'title'    => 'All Page Layout', 
                'subtitle' => 'Select Page style.',
                'options'  => array(
                    '1'      => array(
                        'alt'   => '1 Column', 
                        'img'   => ReduxFramework::$_url.'assets/img/1c.png'
                    ),
                    '2'      => array(
                        'alt'   => '2 Column Left', 
                        'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
                    ),
                    '3'      => array(
                        'alt'   => '2 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/img/2cr.png'
                    ),
                    '4'      => array(
                        'alt'   => '3 Column Middle', 
                        'img'   => ReduxFramework::$_url.'assets/img/3cm.png'
                    ),
                    '5'      => array(
                        'alt'   => '3 Column Left', 
                        'img'   => ReduxFramework::$_url.'assets/img/3cr.png'
                    ),
                ),
                'default' => '1'
            ),
            array(              
                'id'       => 'apbd-blog-layout',
                'type'     => 'image_select',
                'title'    => 'All Blog Layout', 
                'subtitle' => 'Select Blog style.',
                'options'  => array(
                    '1'      => array(
                        'alt'   => '1 Column', 
                        'img'   => ReduxFramework::$_url.'assets/img/2-col-portfolio.png'
                    ),
                    '2'      => array(
                        'alt'   => '2 Column Left', 
                        'img'   => ReduxFramework::$_url.'assets/img/3-col-portfolio.png'
                    ),
                    '3'      => array(
                        'alt'   => '2 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/img/4-col-portfolio.png'
                    ),
                    '4'      => array(
                        'alt'   => '2 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/img/1c.png'
                    ),
                ),
                'default' => '1'
            ),
            array(
                'id'        => 'apbd-blog-pagination',
                'type'      => 'button_set',
                'title'     => 'Blog Pagination',
                'options'   => array(
                    '1'     => 'On',
                    '2'     => 'Off',
                    ),
                'default'   => '1'
            ),
            array(
                'id'        => 'apbd-individual-blog-share',
                'type'      => 'button_set',
                'title'     => 'Individual Blog Share',
                'desc'     => 'Social share buttons on single blog page',
                'options'   => array(
                    '1'     => 'On',
                    '2'     => 'Off',
                    ),
                'default'   => '1'
            ),
            array(
                'id'        => 'apbd-blog-share',
                'type'      => 'button_set',
                'title'     => 'Blog Share',
                'options'   => array(
                    '1'     => 'On',
                    '2'     => 'Off',
                    ),
                'default'   => '1'
            ),
            array(
                'id'        => 'apbd-related-posts',
                'type'      => 'button_set',
                'title'     => 'Related Posts',
                'options'   => array(
                    '1'     => 'On',
                    '2'     => 'Off',
                    ),
                'default'   => '1'
            ),
            array(
                'id'        => 'apbd-featured-images',
                'type'      => 'button_set',
                'title'     => 'Featured Image on Single page',
                'options'   => array(
                    '1'     => 'On',
                    '2'     => 'Off',
                    ),
                'default'   => '1'
            ),
        )
    ));



/* Footer Area Option */

    Redux::setSection( $opt_name, array(
        'title'             => 'Footer',
        'id'                => 'apbd-footer-global',
        'icon'              => 'el el-website'
    ));

    Redux::setSection($opt_name, array(
        'title'             => 'Footer Layout',
        'id'                => 'apbd-footer',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'     => 'Footer Layout',
                'id'        => 'apbd-footer-layout',
                'type'      => 'select',
                'options'   => array(
                    '1'     => '1/4 + 1/4 + 1/4 + 1/4',
                    '2'     => '1/3 + 1/3 + 1/3',
                    '3'     => '1/2 + 1/2',
                    '4'     => 'Full Width',
                    ),
                'default'   => array(
                    '1'     => '1',
                )
            ),
            array(
                'title'     => 'Footer Background',
                'id'        => 'apbd-footer-background',
                'type'      => 'background',
            ),
            array(
                'title'     => 'Footer Copyright Text',
                'id'        => 'apbd-footer-copyright',
                'type'      => 'text',
                'default'   => 'Copyright &copy; APBD | All Rights Reserved.'
            ),
            array(
                'title'     => 'Top of Footer',
                'desc'      => 'This is a global area, you can put any code snippet with shortcode.',
                'id'        => 'apbd-footer-global-text',
                'type'      => 'editor'
            ),
        ),
    ));


/* Responsive Area Option */

    Redux::setSection( $opt_name, array(
        'title'             => 'Responsive',
        'id'                => 'apbd-responsive-global',
        'icon'              => 'el el-website-alt'
    ));

    Redux::setSection($opt_name, array(
        'title'             => 'Responsive',
        'id'                => 'apbd-responsive',
        'subsection'        => true,
        'fields'            => array(
            array(
                'id'        => 'apbd-responsive-style',
                'type'      => 'button_set',
                'title'     => 'Responsive Style',
                'options'   => array(
                    '1'     => 'On',
                    '2'     => 'Off',
                    ),
                'default'   => '1'
            ), 
            array(
                'id'        => 'apbd-mobile-menu',
                'type'      => 'button_set',
                'title'     => 'Mobile Menu',
                'options'   => array(
                    '1'     => 'On',
                    '2'     => 'Off',
                    ),
                'default'   => '1'
            ),     
        ),
    ));



/* Google Codes Option */

    Redux::setSection( $opt_name, array(
        'title'             => 'Google Codes',
        'id'                => 'apbd-google-code',
        'icon'              => 'el el-googleplus',
        'fields'            => array(
            array(
                'title'     => 'Google reCaptcha Site Key',
                'id'        => 'apbd-google-recaptcha-site-key',
                'type'      => 'text',
            ),
            array(
                'title'     => 'Google reCaptcha Secret Key',
                'id'        => 'apbd-google-recaptcha-secret-key',
                'type'      => 'text',
            ),
            array(
                'title'     => 'Google Analytics Code',
                'id'        => 'apbd-google-analytics-code',
                'type'      => 'textarea',
            ),
        ),
    ));


/* Sticky Menu Option */

    Redux::setSection( $opt_name, array(
        'title'             => 'Sticky Menu',
        'id'                => 'apbd-sticky-menu-global',
        'icon'              => 'el el-laptop',
        'fields'            => array(
            array(
                'title'     => 'Sticky Left Menu',
                'id'        => 'apbd-sticky-left-menu',
                'type'      => 'button_set',
                'options'   => array(
                    '1'     => 'On',
                    '2'     => 'Off'
                ),
                'default'   => '2',
            ),
            array(
                'title'     => 'Sticky Right Menu',
                'id'        => 'apbd-sticky-right-menu',
                'type'      => 'button_set',
                'options'   => array(
                    '1'     => 'On',
                    '2'     => 'Off'
                ),
                'default'   => '2',
            ),
            array(
                'title'     => 'Menu Position From Top',
                'id'        => 'apbd-sticky-menu-top',
                'type'      => 'slider',
                'desc'      => 'Set number in percentage.',
                'min'       => '0',
                'max'       => '100',
                'step'      => '1',
                'default'   => '30',
            ),
            array(
                'title'     => 'Enable on Mobile',
                'id'        => 'apbd-sticky-menu-enable',
                'type'      => 'button_set',
                'options'   => array(
                    '1'     => 'On',
                    '2'     => 'Off'
                ),
                'default'   => '2',
            ),
        ),
    ));



/* Typography Option */

    Redux::setSection( $opt_name, array(
        'title'             => 'Typography',
        'id'                => 'apbd-typography-global',
        'icon'              => 'el el-font',
    ));

    Redux::setSection($opt_name, array(
        'title'             => 'General Typography',
        'id'                => 'apbd-general-typography',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'     => 'Body Background',
                'id'        => 'apbd-body-background',
                'type'      => 'background',
            ),
            array(
                'title'     => 'Content Background',
                'id'        => 'apbd-content-background',
                'type'      => 'background',
            ),
            array(
                'title'     => 'Default Content',
                'id'        => 'apbd-default-content',
                'type'      => 'typography',
            ),
        ),
    ));


    Redux::setSection($opt_name, array(
        'title'             => 'Header Typography',
        'id'                => 'apbd-header-typography',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'     => 'Header Background',
                'id'        => 'apbd-header-background',
                'type'      => 'background',
            ),
            array(
                'title'     => 'Header Fonts',
                'id'        => 'apbd-header-fonts',
                'type'      => 'typography',
            ),
            array(
                'title'     => 'Link Color',
                'id'        => 'apbd-header-link-color',
                'type'      => 'color',
            ),
            array(
                'title'     => 'Link Hover Color',
                'id'        => 'apbd-header-link-hover-color',
                'type'      => 'color',
            ),
        ),
    ));

    Redux::setSection($opt_name, array(
        'title'             => 'Menu Typography',
        'id'                => 'apbd-menu-typography',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'     => 'Link Typography',
                'id'        => 'apbd-menu-link-typography',
                'type'      => 'typography',
            ),
            array(
                'title'     => 'Link Hover Color',
                'id'        => 'apbd-menu-link-hover-color',
                'type'      => 'color',
            ),
            array(
                'title'     => 'Active Link Color',
                'id'        => 'apbd-active-menu-link-color',
                'type'      => 'color',
            ),
            array(
                'title'     => 'Active Link Background Color',
                'id'        => 'apbd-active-menu-backgrond-color',
                'type'      => 'color',
            ),
            array(
                'title'     => 'Sub Menu Background',
                'id'        => 'apbd-submenu-background',
                'type'      => 'color',
            ),
            array(
                'title'     => 'Sub Menu Link Color',
                'id'        => 'apbd-submenu-link-color',
                'type'      => 'color',
            ),
            array(
                'title'     => 'Sub Menu Link Hover Color',
                'id'        => 'apbd-submenu-link-hover-color',
                'type'      => 'color',
            ),
        ),
    ));

    Redux::setSection($opt_name, array(
        'title'             => 'Heading Typography',
        'id'                => 'apbd-heading-typography',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'     => 'H1 Typography',
                'id'        => 'apbd-h1-typo',
                'type'      => 'typography',
            ),
            array(
                'title'     => 'H2 Typography',
                'id'        => 'apbd-h2-typo',
                'type'      => 'typography',
            ),
            array(
                'title'     => 'H3 Typography',
                'id'        => 'apbd-h3-typo',
                'type'      => 'typography',
            ),
            array(
                'title'     => 'H4 Typography',
                'id'        => 'apbd-h4-typo',
                'type'      => 'typography',
            ),
            array(
                'title'     => 'H5 Typography',
                'id'        => 'apbd-h5-typo',
                'type'      => 'typography',
            ),
            array(
                'title'     => 'H6 Typography',
                'id'        => 'apbd-h6-typo',
                'type'      => 'typography',
            ),
            array(
                'title'     => 'H1.page-title Typography',
                'id'        => 'apbd-h1-page-title-typo',
                'type'      => 'typography',
            ),
            array(
                'title'     => 'H2.page-title Typography',
                'id'        => 'apbd-h2-page-title-typo',
                'type'      => 'typography',
            ),
            array(
                'title'     => 'Blog Title Typography',
                'id'        => 'apbd-blog-title-typo',
                'type'      => 'typography',
            ),
        ),
    ));

    Redux::setSection($opt_name, array(
        'title'             => 'Content Typography',
        'id'                => 'apbd-content-typography',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'     => 'Page Content Typography',
                'id'        => 'apbd-page-content-typo',
                'type'      => 'typography',
            ),
            array(
                'title'     => 'Blog Content Typography',
                'id'        => 'apbd-blog-content-typo',
                'type'      => 'typography',
            ),
        ),
    ));

    Redux::setSection($opt_name, array(
        'title'             => 'Widget Typography',
        'id'                => 'apbd-widget-typography',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'     => 'Widget Title Typography',
                'id'        => 'apbd-widget-title-typo',
                'type'      => 'typography',
            ),
            array(
                'title'     => 'Widget Content Typography',
                'id'        => 'apbd-widget-content-typo',
                'type'      => 'typography',
            ),
        ),
    ));    

    Redux::setSection($opt_name, array(
        'title'             => 'Footer Typography',
        'id'                => 'apbd-footer-typography',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'     => 'Footer Typography',
                'id'        => 'apbd-footer-typo',
                'type'      => 'typography',
            ),
        ),
    )); 


/* CSS editor */

    Redux::setSection($opt_name, array(
        'title'             => 'Extra CSS/JS',
        'id'                => 'apbd-extra-css-global',
        'icon'              => 'el el-css',
        'fields'            => array(
            array(
                'title'     => 'Extra CSS',
                'subtitle'  => 'Put your Extra CSS here.',
                'id'        => 'apbd-extra-css',
                'type'      => 'ace_editor',
                'mode'      => 'css',
                'theme'     => 'monokai',
            ),
            array(
                'title'     => 'Extra JS',
                'subtitle'  => 'Put your Extra JS here.',
                'id'        => 'apbd-extra-js',
                'type'      => 'ace_editor',
                'mode'      => 'javascript',
                'theme'     => 'monokai',
            ),
        ),
    )); 











