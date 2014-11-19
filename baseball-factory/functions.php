<?php

//watson needs this stuff
  require_once("custom/common/constants.php");
  require_once("custom/classes/class_factorydb.php");
  require_once("custom/classes/class_factory_events.php");
//end watson needs this stuff

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'=>'Page Sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
	));
}


// Add Menu Support
add_theme_support( 'menus' );


// Add Page Excerpt
add_post_type_support('page', 'excerpt');


// Add Post Thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 105, 105, true );
add_image_size( 'example-size', 200, 400, true );


// Login Logo
function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_bloginfo('template_directory').'/assets/images/custom-login-logo.png) !important; background-size:274px 63px !important; width:274px!important; height:63px!important; }
    </style>';
}

add_action('login_head', 'my_custom_login_logo');


//Nofollow Links
add_filter('the_content', 'my_nofollow');
add_filter('the_excerpt', 'my_nofollow');
function my_nofollow($content) {
    return preg_replace_callback('/<a[^>]+/', 'my_nofollow_callback', $content);
}
function my_nofollow_callback($matches) {
    $link = $matches[0];
    $site_link = get_bloginfo('url');
    if (strpos($link, 'rel') === false) {
        $link = preg_replace("%(href=\S(?!$site_link))%i", 'rel="nofollow" $1', $link);
    } elseif (preg_match("%href=\S(?!$site_link)%i", $link)) {
        $link = preg_replace('/rel=\S(?!nofollow)\S*/i', 'rel="nofollow"', $link);
    }
    return $link;
}


//Remove Version
function remove_version() {
return '';
}
add_filter('the_generator', 'remove_version');

add_action( 'wp_enqueue_scripts', 'themename_scripts' );
function themename_scripts() {
    wp_enqueue_style( 'themename-style', get_stylesheet_uri(), array( 'dashicons' ), '1.0' );
}


//Tree Conditional
function is_tree( $pid ) {
    global $post;              

    if ( is_page($pid) )
        return true;    

    $anc = get_post_ancestors( $post->ID );
    foreach ( $anc as $ancestor ) {
        if( is_page() && $ancestor == $pid ) {
            return true;
        }
    }
    return false;
}


//Events CPT
add_action('init', 'post_type_event');

function post_type_event() {
register_post_type('event', 
array('labels' => array('name' => __( 'Events' ),'singular_name' => __( 'Event' ),'add_new' => _x('Add New', 'Event'),'add_new_item' => __('Add New Event'), 'edit_item' => __('Edit Event'),'new_item' => __('New Event'),'view_item' => __('View Event'),),
'public' => true,
'show_ui' => true,
'menu_icon' => 'dashicons-calendar',
'supports' => array('title','editor','thumbnail', 'excerpt'),
'rewrite' => array('slug' => '')
));
}


?>