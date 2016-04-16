<?php
/**
 * commodore cruises events functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package commodore_cruises_events
 */

if ( ! function_exists( 'commodore_cruises_events_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function commodore_cruises_events_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on commodore cruises events, use a find and replace
	 * to change 'commodore_cruises_events' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'commodore_cruises_events', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'commodore_cruises_events' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'commodore_cruises_events_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // commodore_cruises_events_setup
add_action( 'after_setup_theme', 'commodore_cruises_events_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function commodore_cruises_events_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'commodore_cruises_events_content_width', 640 );
}
add_action( 'after_setup_theme', 'commodore_cruises_events_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function commodore_cruises_events_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'commodore_cruises_events' ),
		'id'            => 'sidebar-1',
		'description'   => 'Sidebar widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'commodore_cruises_events' ),
		'id'            => 'sidebar-2',
		'description'   => 'Footer widgets', 
		'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'commodore_cruises_events_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function commodore_cruises_events_scripts() {
	wp_enqueue_style( 'colorbox', get_template_directory_uri() . '/colorbox/colorbox.css' );

	wp_enqueue_style( 'commodore_cruises_events-style', get_template_directory_uri() . '/style.css' );

	wp_enqueue_script( 'commodore_cruises_events-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'commodore_cruises_events-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

   wp_enqueue_script( 'commodore_cruises_events-flexibility', get_template_directory_uri() . '/js/flexibility.js', array( 'jquery' ), '', true );
// Radley and Noto Sans fonts from Google
   wp_enqueue_style( 'commodore_cruises_events-google-fonts', 'https://fonts.googleapis.com/css?family=Radley:400,400italic|Noto+Sans:400,400italic,700' );
  		
// Colorbox jQuery plugin js file
   wp_enqueue_script( 'commodore_cruises_events-colorbox', get_template_directory_uri() . '/colorbox/jquery.colorbox-min.js', array( 'jquery' ), '', true );

// Add main.js file
   wp_enqueue_script( 'commodore_cruises_events-scripts', get_template_directory_uri() . '/js/main.js', array(), '20160101', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'commodore_cruises_events_scripts' );

// add ie conditional html5 shim to header
function add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');

/* Add more buttons to Page / Post editor */
function add_more_buttons($buttons) {
 $buttons[] = 'hr';
 $buttons[] = 'del';
 $buttons[] = 'sub';
 $buttons[] = 'sup';
 $buttons[] = 'fontselect';
 $buttons[] = 'fontsizeselect';
 $buttons[] = 'cleanup';
 $buttons[] = 'styleselect';
 return $buttons;
}
add_filter("mce_buttons_3", "add_more_buttons");

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
