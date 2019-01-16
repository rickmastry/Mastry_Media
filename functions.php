<?php
function theme_setup(){
    add_theme_support('post-thumbnails');
    add_image_size( 'small-thumb', 125, 125, true );
    add_image_size( 'medium', 425, 425, true );

    add_theme_support('post-formats', array('gallery'));
}

add_action('after_setup_theme', "theme_setup");





function portfolio_files(){
    wp_enqueue_style('portfolio_main_styles', get_stylesheet_uri());
    wp_enqueue_style('animate', get_theme_file_uri('/css/animate.css'));
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Abril+Fatface|Fjalla+One|Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">');
    wp_enqueue_style('font-awesomecdn', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
   
    
}

add_action('wp_enqueue_scripts', 'portfolio_files');


function java_files(){
    wp_enqueue_script('particles-cdn', '//cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js');
    wp_enqueue_script('particles-js', get_stylesheet_directory_uri() .'js/particle.js', array('particles-cdn'));
    wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery-3.3.1.js'), NULL, microtime(), true );
    wp_enqueue_script('lettering', get_theme_file_uri('/js/jquery.lettering.js'), NULL, '1.0', true);
    wp_enqueue_script('textillate', get_theme_file_uri('/js/jquery.textillate.js'), array('jquery','lettering', 'animate'), '1.0', true );
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
    wp_enqueue_script('anime', get_theme_file_uri('/js/anime.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'java_files');


// Add External Link to Featured Image with Custom Field
 
add_filter('post_thumbnail_html','add_external_link_on_page_post_thumbnail',10);
function add_external_link_on_page_post_thumbnail( $html ) {
if( is_singular() ) {
        global $post;
        $name = get_post_meta($post->ID, 'ExternalUrl', true);
        if( $name ) {
                $html = '<a href="' . ( $name ) . '" target="_blank" >' . $html . '</a>';
        }
}
return $html;
}

function portfolio_post_types(){
    register_post_type('work', array(
       "supports" => array('title', 'editor', 'excerpt', 'custom-fields'),
       'rewrite'  => array('slug' => 'works'),
       'has_archive' => true,
       'public' => true,
       'labels' => array(
           'name' => 'Works',
           'add_new_item' => 'Add New Works',
           'edit_item' => 'Edit Work',
           'all_items' => 'All Works',
           'singular_name' => 'Work'
       ),
       'menu_icon' => 'dashicons-calendar'

    ));
}

add_action('init', 'portfolio_post_types');



