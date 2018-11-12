<?php
//Hide admin bar
show_admin_bar( false );

// Load Redux
/*include_once 'inc/loader.php';*/

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'menus' );
}

//register menus
register_nav_menus( array(
	'menu_left'  => 'Menu header left',
	'menu_right' => 'Menu header right'
) );

add_theme_support( 'post-formats', array(
	'aside',
	'image',
	'video',
	'audio',
	'quote',
	'link',
	'gallery',
) );

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
) );

//Load assets
function my_assets() {

	// Add Google Fonts
	wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,900' );

	wp_enqueue_style( 'id-main', get_stylesheet_uri() );

	//	Vendor styles
	wp_enqueue_style( 'id-vendor-styles', get_template_directory_uri() . '/styles/vendor.min.css', '1.0' );
	//Custom styles
	wp_enqueue_style( 'id-styles', get_template_directory_uri() . '/styles/main.min.css', '1.0' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/development/css/fontawesome-free-5.3.1-web/css/all.css', '1.0' );

	//jQuery minified
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/scripts/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );

	//Vendor scripts
	wp_enqueue_script( 'id-vendor-script', get_template_directory_uri() . '/scripts/vendor.min.js', array(), '1.0.0', true );

	//Custom scripts
	wp_enqueue_script( 'matchHeight', get_template_directory_uri() . '/development/scripts/jquery.matchHeight-min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'id-custom-script', get_template_directory_uri() . '/scripts/index.min.js', array(), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'my_assets' );

//Allow post thumbnails
add_theme_support( 'post-thumbnails' );

//====================================================================================================================
//===============================================DIRECTORS CUSTOM POST TYPE===========================================
//====================================================================================================================

function add_directors_posts() {
	register_post_type(
		'directors',
		array(
			'labels'       => array(
				'name'               => 'Directors',
				'singular_name'      => 'Director item',
				'add_new'            => 'Add new',
				'add_new_item'       => 'Add new item',
				'edit'               => 'Edit',
				'edit_item'          => 'Edit item',
				'new_item'           => 'New item',
				'view'               => 'View',
				'view_item'          => 'View item',
				'search_items'       => 'Search item',
				'not_found'          => 'Not found',
				'not_found_in_trash' => 'Not find in trash',
			),
			'public'       => true,
			'hierarchical' => true,
			'has_archive'  => true,
			'menu_icon'    => 'dashicons-businessman',
			'supports'     => array(
				'title',
				'editor',
				'thumbnail',
				//'post-formats',
				'excerpt',
				'directors_category'
			),
			'can_export'   => true,
		)
	);
}

add_action( 'init', 'add_directors_posts' );

// function my_taxonomies_direcrors_artical() {
//     $labels = array(
//         'name'              => _x( 'Category directors', 'taxonomy general name' ),
//         'singular_name'     => _x( 'Singular name', 'taxonomy singular name' ),
//         'search_items'      => __( 'Search items' ),
//         'all_items'         => __( 'All item' ),
//         'parent_item'       => __( 'Parent item' ),
//         'parent_item_colon' => __( 'Parent item colon' ),
//         'edit_item'         => __( 'Edit item' ), 
//         'update_item'       => __( 'Update item' ),
//         'add_new_item'      => __( 'Add new item' ),
//         'new_item_name'     => __( 'New item name' ),
//         'menu_name'         => __( 'Directors Category' ),
//     );
//     $args = array(
//         'labels' => $labels,
//         'hierarchical' => true,
//         'show_ui'           => true,
//         'show_admin_column' => true
//     );
//     register_taxonomy( 'directors_category', 'directors', $args );
// }
// add_action( 'init', 'my_taxonomies_direcrors_artical', 0 );

//====================================================================================================================
//===============================================LEADERSHIP CUSTOM POST TYPE===========================================
//====================================================================================================================

function add_leadership_posts() {
	register_post_type(
		'leadership',
		array(
			'labels'       => array(
				'name'               => 'Leadership',
				'singular_name'      => 'Leadership item',
				'add_new'            => 'Add new',
				'add_new_item'       => 'Add new item',
				'edit'               => 'Edit',
				'edit_item'          => 'Edit item',
				'new_item'           => 'New item',
				'view'               => 'View',
				'view_item'          => 'View item',
				'search_items'       => 'Search item',
				'not_found'          => 'Not found',
				'not_found_in_trash' => 'Not find in trash',
			),
			'public'       => true,
			'hierarchical' => true,
			'has_archive'  => true,
			'menu_icon'    => 'dashicons-groups',
			'supports'     => array(
				'title',
				'editor',
				'thumbnail',
				//'post-formats',
				'excerpt',
				'leadership_category'
			),
			'can_export'   => true,
		)
	);
}

add_action( 'init', 'add_leadership_posts' );

function wpb_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;

	return $fields;
}

add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );