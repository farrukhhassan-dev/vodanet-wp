<?php
/**
 * vodanet-wp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vodanet-wp
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
function vodanet_wp_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on vodanet-wp, use a find and replace
		* to change 'vodanet-wp' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'vodanet-wp', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'vodanet-wp' ),
			'footer'   => esc_html__( 'Footer Menu', 'vodanet-wp' ),
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
			'vodanet_wp_custom_background_args',
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
add_action( 'after_setup_theme', 'vodanet_wp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vodanet_wp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vodanet_wp_content_width', 640 );
}
add_action( 'after_setup_theme', 'vodanet_wp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vodanet_wp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'vodanet-wp' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'vodanet-wp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'vodanet_wp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vodanet_wp_scripts() {
	$theme_uri = get_template_directory_uri();

	// Styles
	wp_enqueue_style('vodanet-wp-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('vodanet-wp-style', 'rtl', 'replace');

	wp_enqueue_style('owl-carousel', $theme_uri . '/assets/plugins/owl-carousel/owl.carousel.minb099.css', [], null);
	wp_enqueue_style('owl-carousel-theme', $theme_uri . '/assets/plugins/owl-carousel/owl.theme.default.minb099.css', [], null);

	wp_enqueue_style('vodanet-icons', $theme_uri . '/assets/css/vodanet-icons/style4963.css', [], null);
	wp_enqueue_style('bootstrap', $theme_uri . '/assets/css/bootstrap.minbb93.css', [], null);
	wp_enqueue_style('bootstrap-icons', $theme_uri . '/assets/css/bootstrap-icons.css', [], null);
	wp_enqueue_style('fontawesome', $theme_uri . '/assets/css/all.min9e0b.css', [], null);
	wp_enqueue_style('dtnorway-style', $theme_uri . '/assets/css/style.css', [], null);

	// Scripts
	wp_enqueue_script('jquery-core', $theme_uri . '/assets/js/jquery-3.6.0.min.js', array(), null, true);
	wp_enqueue_script('bootstrap-js', $theme_uri . '/assets/js/bootstrap.minbb93.js', array('jquery-core'), null, true);
	wp_enqueue_script('owl-carousel-js', $theme_uri . '/assets/plugins/owl-carousel/owl.carousel.minb099.js', array('jquery-core'), null, true);
	wp_enqueue_script('theme-js', $theme_uri . '/assets/js/theme.js', array('jquery-core'), null, true);
	wp_enqueue_script('main-js', $theme_uri . '/assets/js/main.js', array('jquery-core'), null, true);

	// WordPress default script
	wp_enqueue_script('vodanet-wp-navigation', $theme_uri . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'vodanet_wp_scripts');



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

