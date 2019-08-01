<?php

// database
// user: lattedev_gaea
// name: lattedev_gaea
// pass: mVLx3OAi21PBW6C0
// host: localhost

// wp-admin
// user: Zack
// pass: GF7Fo!M(xggj!%os&n

function gp_setup(){
  wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
  wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}
add_action('wp_enqueue_scripts', 'gp_setup');

// Adding Theme Support

function gp_init() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form')
  );
}
add_action('after_setup_theme', 'gp_init');


add_filter('get_the_archive_title',function($title){
  if(is_category()){
    $title=single_cat_title('',false);
  }elseif(is_tag()){
    $title=single_tag_title('',false);
  }elseif(is_author()) {
    $title='<span class="vcard">'.get_the_author().'</span>';
  }
  return $title;
});


// Custom Post Type

function gp_custom_post_type() {
  register_post_type('project',
    array(
      'rewrite' => array('slug' => 'projects'),
      'labels'  => array(
        'name'          => 'Projects',
        'singular_name' => 'Project',
        'add_new_item'  => 'Add New Project',
        'edit_item'     => 'Edit Project'
      ),
      'menu-icon'   => 'dashicons-clipboard',
      'public'      => true,
      'has_archive' => true,
      'supports'    => array(
        'title', 'thumbnail', 'editor', 'excerpt', 'comments'
      )
    )
  );
}

add_action('init', 'gp_custom_post_type');


function ejr_jpeg_quality () {
	return 100;
	}
add_filter ('jpeg_quality', 'ejr_jpeg_quality');
