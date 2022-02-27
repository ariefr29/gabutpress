<?php

if (!function_exists('etheme_setup')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function etheme_setup() {
        /**
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         */
        load_theme_textdomain('etheme');

        // Add default posts and comments RSS feed links to head.
	    add_theme_support( 'automatic-feed-links' );


        /**
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /**
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        /**
         * This theme uses wp_nav_menu() in one location.
         */
        // Menu
        register_nav_menus(array(
            'main_menu' => __( 'header menu', 'etheme' ),
            'footer_menu' => __( 'footer menu', 'etheme' ),
        ));

        /**
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
    }
}
add_action('after_setup_theme', 'etheme_setup');

// pingback url auto-discovery header for singularly identifiable articles.
add_action( 'wp_head', 'etheme_pingback_header' );
function etheme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", esc_url(get_bloginfo( 'pingback_url' )) );
	}
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'etheme'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'etheme'),
            'before_widget' => '<section id="%1$s" class="sidbox widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action('widgets_init', 'theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function theme_assets()
{
    ## CSS
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), null);
    wp_enqueue_style('prismjs', 'https://cdn.jsdelivr.net/npm/prismjs@1.27.0/themes/prism-tomorrow.min.css', array(), null);


    ## JS
    wp_enqueue_script('iconify', 'https://code.iconify.design/2/2.1.2/iconify.min.js', array(), null, false);
    wp_enqueue_script('theme-script', get_theme_file_uri('/assets/js/index.js'), array(), null, true);
    wp_enqueue_script('prismjs-core', 'https://cdn.jsdelivr.net/npm/prismjs@1.27.0/components/prism-core.min.js', array(), null, true);
    wp_enqueue_script('prismjs-autoloader', 'https://cdn.jsdelivr.net/npm/prismjs@1.23.0/plugins/autoloader/prism-autoloader.min.js', array(), null, true);


    
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'theme_assets');

/**
 * Additional features to allow styling of the theme.
 */
require get_template_directory() . '/inc/set-functions.php';
