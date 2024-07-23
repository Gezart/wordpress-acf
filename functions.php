<?php
/**
 * greenLofts functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package greenLofts
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
function greenlofts_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on greenLofts, use a find and replace
		* to change 'greenlofts' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'greenlofts', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'greenlofts' ),
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
			'greenlofts_custom_background_args',
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
add_action( 'after_setup_theme', 'greenlofts_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function greenlofts_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'greenlofts_content_width', 640 );
}
add_action( 'after_setup_theme', 'greenlofts_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function greenlofts_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'greenlofts' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'greenlofts' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'greenlofts_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function greenlofts_scripts() {
	wp_enqueue_style( 'greenlofts-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'greenlofts-style', 'rtl', 'replace' );

	wp_enqueue_script( 'greenlofts-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'greenlofts_scripts' );

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

function style_on_load(){
    wp_enqueue_style('main-css', get_template_directory_uri().'/assets/css/main.css', array(), '1.0.0', 'all');
	wp_enqueue_script('script-js', get_template_directory_uri().'/assets/js/script.js', array(), '1.0.0', false);
}
add_action('wp_enqueue_scripts','style_on_load');


if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme options',
        'menu_title'    => 'Theme options',
        'menu_slug'     => 'theme-options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}

function my_load_more_projects_scripts() {
    global $wp_query; 

    // Register the script
    wp_register_script('my_loadmore', get_stylesheet_directory_uri() . '/js/myloadmore.js', array('jquery'));

    // Localize the script with new data
    wp_localize_script('my_loadmore', 'myloadmore_params', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'posts' => json_encode($wp_query->query_vars),
        'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages
    ));

    // Enqueued script with localized data
    wp_enqueue_script('my_loadmore');
}

add_action('wp_enqueue_scripts', 'my_load_more_projects_scripts');

function loadmore_ajax_projects_handler(){

    // Prepare our arguments for the query
    $args = json_decode(stripslashes($_POST['query']), true);
    $args['paged'] = $_POST['page'] + 1; // we need the next page to be loaded
    $args['post_status'] = 'publish';
    $args['post_type'] = 'project'; // change this to your specific custom post type

    // Run a new query
    query_posts($args);

    $custom_post_type_args = array(
        'post_type'      => 'project', // Replace with your custom post type slug
        'posts_per_page' => 9,
        'paged'          => get_query_var('paged') ? get_query_var('paged') : 1
    );

    // Custom query.
    $wp_query = new WP_Query($custom_post_type_args);

    // Check that we have query results.
    if ($wp_query->have_posts()) {

        // Start looping over the query results.
        while ($wp_query->have_posts()) {

            $wp_query->the_post();
            
            // Output the title and content.
           
            ?>
            
            
			 <div class="project">
                    <div class="project-image">
                        <img src="<?php the_post_thumbnail_url();?>" alt="">
                    </div>
                    <div class="project-content">
                        <h3><?= get_the_title(); ?></h3>
                        <a><button>View more</button></a>
                    </div>
                </div>
            <?php

        }

    }

    // Restore original post data. It resets the global $post object
     wp_reset_postdata();
//     die;
}

// add_action('wp_ajax_loadmore', 'loadmore_ajax_projects_handler');
// add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_projects_handler');







// Blog =====================

function load_more_blogs() {
   // Prepare our arguments for the query
   $args = json_decode(stripslashes($_POST['query']), true);
   $args['paged'] = $_POST['page'] + 1; // we need the next page to be loaded
   $args['post_status'] = 'publish';
   $args['post_type'] = 'post'; // change this to your specific custom post type

   // Run a new query
   query_posts($args);

   $custom_post_type_args = array(
       'post_type'      => 'post', // Replace with your custom post type slug
       'posts_per_page' => 12,
       'paged'          => get_query_var('paged') ? get_query_var('paged') : 1
   );

   // Custom query.
   $wp_query = new WP_Query($custom_post_type_args);

   // Check that we have query results.
   if ($wp_query->have_posts()) {

       // Start looping over the query results.
       while ($wp_query->have_posts()) {

           $wp_query->the_post();
           
           // Output the title and content.
          
           ?>
                <div class="blog">
                    <div class="blog-image">
                        <a href="<?= get_permalink(); ?>">
                        <img src="<?php the_post_thumbnail_url();?>" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a>
                            <h3><?= get_the_title(); ?></h3>
                            <p class="blog-date"><?= date_i18n('d/m/Y', strtotime(get_the_date('Y-m-d'))); ?></p>
                            <p><?= wp_trim_words(get_post_field('post_content'), 15); ?></p>
                        </a>
                    </div>
                </div>
            <?php

       }

   }

   // Restore original post data. It resets the global $post object
   wp_reset_postdata();
   die;
}
add_action('wp_ajax_load_more_blogs', 'load_more_blogs');
add_action('wp_ajax_nopriv_load_more_blogs', 'load_more_blogs');


function enqueue_theme_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), null, true);
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');

}

add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');
