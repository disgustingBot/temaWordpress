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


function ejr_jpeg_quality () {return 100;}
add_filter ('jpeg_quality', 'ejr_jpeg_quality');



function gp_get_related_posts( $post_id, $related_count, $args = array() ) {
	$args = wp_parse_args( (array) $args, array(
		'orderby' => 'rand',
		'return'  => 'query', // Valid values are: 'query' (WP_Query object), 'array' (the arguments array)
	) );

	$related_args = array(
		'post_type'      => get_post_type( $post_id ),
		'posts_per_page' => $related_count,
		'post_status'    => 'publish',
		'post__not_in'   => array( $post_id ),
		'orderby'        => $args['orderby'],
		'tax_query'      => array()
	);

	$post       = get_post( $post_id );
	$taxonomies = get_object_taxonomies( $post, 'names' );

	foreach ( $taxonomies as $taxonomy ) {
		$terms = get_the_terms( $post_id, $taxonomy );
		if ( empty( $terms ) ) {
			continue;
		}
		$term_list                   = wp_list_pluck( $terms, 'slug' );
		$related_args['tax_query'][] = array(
			'taxonomy' => $taxonomy,
			'field'    => 'slug',
			'terms'    => $term_list
		);
	}

	if ( count( $related_args['tax_query'] ) > 1 ) {
		$related_args['tax_query']['relation'] = 'OR';
	}

	if ( $args['return'] == 'query' ) {
		return new WP_Query( $related_args );
	} else {
		return $related_args;
	}
}



require_once get_stylesheet_directory() . '/inc/better-comments.php';

function wpb_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}

add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom');






/**
 * Generate breadcrumbs
 * @author CodexWorld and https://github.com/molinerozadkiel
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
    echo '<p>';
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        $category = get_queried_object();
        $currentId = $category->term_id;
        $currentNm = $category->name;

        $categories = get_categories(array('parent'=>0));
        foreach ( $categories as $category ) {
          $cat = get_categories(array('parent'=>$category->term_id));
          $parentId = $category->term_id;
          $parentNm = $category->name;
          if ($category->term_id == $currentId) {
            ?><a href="<?php get_category_link( $parentId ); ?> "><?php echo $parentNm ?></a><?php
          } else {
            foreach ( $cat as $caty ) {
              if ($caty->term_id == $currentId) {
                ?><a href="<?php get_category_link( $parentId ); ?> "><?php echo $parentNm ?></a><?php
                echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
                ?><a href="<?php get_category_link( $currentId ); ?> "><?php echo $currentNm ?></a><?php
              }
            }
          }
        }
    } elseif (is_single()) {
      echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
      the_category(' &bull; ');
      echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
      the_title();
      // $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
      // foreach($crumbs as $crumb){
      //     echo ucfirst(str_replace(array(".php","_"),array(""," "),$crumb) . ' ');
      // }




      // This function will take $_SERVER['REQUEST_URI'] and build a breadcrumb based on the user's current path
      function breadcrumbs($separator = ' &raquo; ', $home = 'Home') {
          // This gets the REQUEST_URI (/path/to/file.php), splits the string (using '/') into an array, and then filters out any empty values
          $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

          // This will build our "base URL" ... Also accounts for HTTPS :)
          $base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

          // Initialize a temporary array with our breadcrumbs. (starting with our home page, which I'm assuming will be the base URL)
          $breadcrumbs = Array("<a href=\"$base\">$home</a>");

          // Find out the index for the last value in our path array
          $last = end(array_keys($path));

          // Build the rest of the breadcrumbs
          foreach ($path AS $x => $crumb) {
              // Our "title" is the text that will be displayed (strip out .php and turn '_' into a space)
              $title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb));

              // If we are not on the last index, then display an <a> tag
              if ($x != $last)
                  $breadcrumbs[] = "<a href=\"$base$crumb\">$title</a>";
              // Otherwise, just display the title (minus)
              else
                  $breadcrumbs[] = $title;
          }

          // Build our temporary array (pieces of bread) into one big string :)
          return implode($separator, $breadcrumbs);
      }

      ?>

      <!-- <p><?= breadcrumbs() ?></p>
      <p><?= breadcrumbs(' > ') ?></p>
      <p><?= breadcrumbs(' ^^ ', 'Index') ?></p> -->

      <?php








    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
    echo '</p>';
}
