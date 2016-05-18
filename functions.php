<?php
/**
 * framework functions and definitions
 *
 * @package framework
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'framework_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function framework_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on framework, use a find and replace
	 * to change 'framework' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'framework', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'framework' ),
		'secondary' => __( 'Secondary Menu', 'framework')
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'framework_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
}
endif; // framework_setup
add_action( 'after_setup_theme', 'framework_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function framework_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'framework' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'framework_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function framework_scripts() {
	wp_enqueue_style( 'framework-style', get_stylesheet_uri() );

	wp_enqueue_script( 'framework-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'framework-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'framework_scripts' );


/**
 * Customized Jetpack Infinite Scroll.
 */
add_filter( 'infinite_scroll_credit', 'urr_my_footer_text' );
function urr_my_footer_text() {
	$this_year = date('Y');
	$footer_text = 'Copyright &copy; 2003-'.$this_year.'. All rights reserved';
	return $footer_text;
}

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
 * Load Pagination
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Remove ellipses from the_excerpt()
 */
function new_excerpt_more($more) {
	return ' ... ';
}
add_filter('excerpt_more', 'new_excerpt_more');
