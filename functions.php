<?php
/**
 * Base: Science of Sales functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Base:_Science_of_Sales
 */

if ( ! function_exists( 'base_science_of_sales_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function base_science_of_sales_setup() {
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
        'primary' => esc_html__( 'Primary', 'base-science-of-sales' ),
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
}
endif;
add_action( 'after_setup_theme', 'base_science_of_sales_setup' );

/**
 * Sets up custom post types.
 *
 * Hooked into init.
 * @link https://codex.wordpress.org/Post_Types
 */
function create_post_type() {
  register_post_type( 'lessons',
    array(
      'labels' => array(
        'name' => __( 'Lessons' ),
        'singular_name' => __( 'Lesson' )
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_nav_menus' => true
    )
  );
  flush_rewrite_rules();
}
add_action( 'init', 'create_post_type' );

/**
 * Enqueue scripts and styles.
 */
function base_science_of_sales_scripts() {
    wp_enqueue_style( 'wp-base', get_stylesheet_uri() );
    wp_enqueue_style( 'screen', get_template_directory_uri() . '/stylesheets/screen.css' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'base_science_of_sales_scripts' );

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
