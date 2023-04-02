<?php
/**
 * Portfolio_SB functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Portfolio_SB
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function portfolio_sam_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Portfolio_SB, use a find and replace
		* to change 'portfolio_sam' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'portfolio_sam', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'portfolio_sam' ),
		)
	);

	/*
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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'portfolio_sam_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'portfolio_sam_setup' );


add_theme_support( 'post-thumbnails' );

add_image_size( 'sidebar-thumb', 120, 120, true ); // Hard Crop Mode
add_image_size( 'homepage-thumb', 220, 180 ); // Soft Crop Mode
add_image_size( 'high-thumb', 590, 9999 ); // Unlimited Height Mode
add_image_size( 'singlepost-thumb', 608, 342 );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function portfolio_sam_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'portfolio_sam_content_width', 640 );
}
add_action( 'after_setup_theme', 'portfolio_sam_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function portfolio_sam_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'portfolio_sam' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'portfolio_sam' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'portfolio_sam_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function portfolio_sam_scripts() {
	wp_enqueue_style( 'portfolio_sam-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'portfolio_sam-style', 'rtl', 'replace' );

	wp_enqueue_script( 'portfolio_sam-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'portfolio_sam_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Disable Gutenberg on the back end.
add_filter( 'use_block_editor_for_post', '__return_false' );

// Disable Gutenberg for widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

add_action( 'wp_enqueue_scripts', function() {
    // Remove CSS on the front end.
    wp_dequeue_style( 'wp-block-library' );

    // Remove Gutenberg theme.
    wp_dequeue_style( 'wp-block-library-theme' );

    // Remove inline global CSS on the front end.
    wp_dequeue_style( 'global-styles' );
}, 20 );

function create_project_post_type() {

	$labels = array(
	  'name' => __( 'Projects', 'textdomain' ),
	  'singular_name' => __( 'Project', 'textdomain' ),
	  'add_new' => __( 'Add New', 'textdomain' ),
	  'add_new_item' => __( 'Add New Project', 'textdomain' ),
	  'edit_item' => __( 'Edit Project', 'textdomain' ),
	  'new_item' => __( 'New Project', 'textdomain' ),
	  'view_item' => __( 'View Project', 'textdomain' ),
	  'search_items' => __( 'Search Projects', 'textdomain' ),
	  'not_found' => __( 'No projects found', 'textdomain' ),
	  'not_found_in_trash' => __( 'No projects found in trash', 'textdomain' ),
	  'parent_item_colon' => __( 'Parent Project:', 'textdomain' ),
	  'menu_name' => __( 'Projects', 'textdomain' ),
	  
	);
  
	$args = array(
	  'labels' => $labels,
	  'hierarchical' => true,
	  'description' => 'Custom post type for projects.',
	  'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => true,
	  'menu_position' => 5,
	  'menu_icon' => 'dashicons-list-view',
	  'show_in_admin_bar' => true,
	  'show_in_nav_menus' => true,
	  'can_export' => true,
	  'has_archive' => true,
	  'exclude_from_search' => false,
	  'publicly_queryable' => true,
	  'capability_type' => 'post',
	);
  
	register_post_type( 'project', $args );
  
  }
  
  add_action( 'init', 'create_project_post_type' );


  
  

