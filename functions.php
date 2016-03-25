<?php
/**
 * gold-parent_s functions and definitions
 *
 * @package gold-parent_s
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'gold_parent_s_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gold_parent_s_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'gold-parent_s' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'video', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'gold_parent_s_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
}
endif; // gold_parent_s_setup
add_action( 'after_setup_theme', 'gold_parent_s_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function gold_parent_s_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Widgets', 'gold-parent_s' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widgets 1', 'gold-parent_s' ),
		'id'            => 'footer-widgets-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widgets 2', 'gold-parent_s' ),
		'id'            => 'footer-widgets-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'gold-parent_s' ),
		'id'            => 'footer-widgets-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Extra Widgets', 'gold-parent_s' ),
		'id'            => 'extra-widgets',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gold_parent_s_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ticketfly_s_scripts() {
	wp_enqueue_style( 'ticketfly-site-style', get_stylesheet_uri() );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), '', true );
	wp_enqueue_script( 'ticketfly-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'ticketfly-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ticketfly_s_scripts' );

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
 * Adds Blog ID to the array of body classes.
 */
function contractor_body_class( $classes ) {
	$blog_id = get_current_blog_id();
	$classes[] = 'site-id-' . $blog_id;
	return $classes;
}
add_filter( 'body_class', 'contractor_body_class' );


/* keep galleries and FAQs out of the blog */
function be_exclude_post_formats_from_blog( $query ) {
	if( $query->is_main_query() && $query->is_home() ) {
		$tax_query = array( array(
			'taxonomy' => 'post_format',
			'field' => 'slug',
			'terms' => array( 'post-format-gallery','post-format-aside' ),
			'operator' => 'NOT IN',
		) );
		$query->set( 'tax_query', $tax_query );
	}
}
add_action( 'pre_get_posts', 'be_exclude_post_formats_from_blog' );

/* featured image support */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(150,150,true); // Normal post thumbnails
add_image_size('gallery-format-thumbnail',110,85,true); // Photo gallery thumbnail size