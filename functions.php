<?php

function en_el_init(){
  // wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
  // Register block editor script for backend.
  wp_register_script(
    'bannersbuild-cgb-block-js', // Handle.
    get_theme_file_uri('/js/blocks.build.js', dirname( __FILE__ ) ),
    // plugins_url( '/dist/blocks.build.js', dirname( __FILE__ ) ), // Block.build.js: We register the block here. Built with Webpack.
    array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ), // Dependencies, defined above.
    null, // filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.build.js' ), // Version: filemtime — Gets file modification time.
    true // Enqueue the script in the footer.
  );
	register_block_type(
		'cgb/block-bannersbuild', array( 'editor_script' => 'bannersbuild-cgb-block-js', )
	);
}

add_action( 'init', 'en_el_init' );












require_once 'customPosts.php';

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



function excerpt($charNumber){
  $excerpt = get_the_excerpt();
  $excerpt = substr($excerpt, 0, $charNumber);
  $result = substr($excerpt, 0, strrpos($excerpt, ' '));
  echo $result;
}









// add_filter( 'register_post_type_args', 'dcwd_change_cpt_args', 10, 2 );
// function dcwd_change_cpt_args( $args, $cpt_name ) {
// 	//error_log( "CPT Name: $cpt_name" );
// 	if ( 'advanced_ads' == $cpt_name ) {
// 		$args['show_in_rest'] = true;
// 		$args['supports'] = array( 'title', 'editor' );
// 		//error_log( $cpt_name . ': ' . var_export( $args, true ) );
// 	}
// 	return $args;
// }



// add_filter('advanced-ads-ad-settings-pre-save', 'my_advanced_ads_admin_max_terms', 1);
// function my_advanced_ads_admin_max_terms($args){
//   // var_dump($args);
//   // echo "<script>console.log(".$args.")</script>";
//
//   // $args['output'] = $args['content'];
//   // $args['content'] = 'yo soy el nene';
//   // $args['content'] = json_encode($args);
//
//
//   return $args;
// }






// Function to handle the thumbnail request
function get_the_post_thumbnail_src($img)
{
  return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}
function wpvkp_social_buttons($content) {
    global $post;
    if(is_singular() || is_home()){

        // Get current page URL
        $sb_url = urlencode(get_permalink());

        // Get current page title
        $sb_title = str_replace( ' ', '%20', get_the_title());

        // Get Post Thumbnail for pinterest
        $sb_thumb = get_the_post_thumbnail_src(get_the_post_thumbnail());

        // Construct sharing URL without using any script
        $twitterURL = 'https://twitter.com/intent/tweet?text='.$sb_title.'&amp;url='.$sb_url.'&amp;via=wpvkp';
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$sb_url;
        $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$sb_url.'&amp;title='.$sb_title;


        // Add sharing button at the end of page/page content
        $content .= '<div class="social-box"><div class="social-btn">';
        $content .= '<a class="col-1 sbtn s-twitter" href="'. $twitterURL .'" target="_blank" rel="nofollow"><span>Share on twitter</span></a>';
        $content .= '<a class="col-1 sbtn s-facebook" href="'.$facebookURL.'" target="_blank" rel="nofollow"><span>Share on facebook</span></a>';
        $content .= '<a class="col-2 sbtn s-linkedin" href="'.$linkedInURL.'" target="_blank" rel="nofollow"><span>LinkedIn</span></a>';
        $content .= '</div></div>';

        return $content;
    }else{
        // if not a post/page then don't include sharing button
        return $content;
    }
};
// Enable the_content if you want to automatically show social buttons below your post.

 add_filter( 'the_content', 'wpvkp_social_buttons');

// This will create a wordpress shortcode [social].
// Please it in any widget and social buttons appear their.
// You will need to enabled shortcode execution in widgets.
add_shortcode('social','wpvkp_social_buttons');
