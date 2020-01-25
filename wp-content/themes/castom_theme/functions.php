<?php
/**
 * castom-theme functions and definitions
 *
 * @package castom-theme
 */

if ( ! function_exists( 'castom_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function castom_theme_setup() {

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Меню в шапке', 'castom-theme' ),
			'menu-2' => esc_html__( 'Меню в подвале', 'castom-theme' ),
			'menu-3' => esc_html__( 'Меню в шапке на страницах', 'castom-theme' ),
			
		) );

		/*
		* Change <title> meta tag
		*/
		add_theme_support( 'title-tag' );

		/*
		* Set post thumbnail
		*/
		add_theme_support( 'post-thumbnails', array( 'post' ) );

		/*
		* register size image
		*/
		add_image_size( 'post_thumb', 1300, 500, true );


		/*
		* Create a link "Read more ..." at the end
		*/
		function new_excerpt_more( $more ){
			global $post;
			return '<a href="'. get_permalink($post) . '"> Читать дальше...</a>';
		}
		add_filter( 'excerpt_more', 'new_excerpt_more' );

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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'castom_theme_setup' );

/**
 * Register widget area.
 */
function castom_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'castom-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'castom-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar on page', 'castom-theme' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets on page.', 'castom-theme' ),
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => "</h5>\n",
	) );
}
add_action( 'widgets_init', 'castom_theme_widgets_init' );

/*
* Widget settings
*/
require get_template_directory() . '/widgets/widgets.php'; 
require get_template_directory() . '/widgets/widget_custom.php';

/*
* taxonomy
*/
add_filter( 'pre_option_link_manager_enabled', '__return_true' );

/**
 * Enqueue scripts and styles.
 */
function castom_theme_scripts() {
	wp_enqueue_style( 'castom-theme-style', get_stylesheet_uri() );

	wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css');

	wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css');

	wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'castom_theme_scripts' );

function castom_theme_scripts_footer() {
	wp_enqueue_script( 'castom-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'castom-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'init', get_template_directory_uri() . '/assets/js/init.js');

	wp_enqueue_script( 'jquery.flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js');

	wp_enqueue_script( 'doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js');

	wp_enqueue_script( 'jquery-migrate-1.2.1.min', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js');

	wp_deregister_script( 'jquery-core' );

	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');

	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_footer', 'castom_theme_scripts_footer');

function my_title_seporator($sep) {
	$sep = ' | ';
	return $sep;
};
add_filter('document_title_separator', 'my_title_seporator');

function shortcode_function () {
	return 'это мой шоркод, а дальше сам пост: ';
}
add_shortcode( 'my_shortcode', 'shortcode_function' );