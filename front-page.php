<?php get_header(); ?>


<link href="https://fonts.googleapis.com/css?family=Lato|Nunito|Roboto&display=swap" rel="stylesheet">

<figure id="atf">
  <?php
  $args=array(
    'post_type'=>'post',
    'posts_per_page'=>1,
    'meta_query'=>array(
       array(
         'key'=>'_featured',
         'value'=>'yes'
       )
    )
  );$atf=new WP_Query($args);
  while($atf->have_posts()){$atf->the_post(); ?>
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
    <figcaption>
      <p id="atfCategory"><?php echo get_the_category_list(', '); ?></p>
      <h3 id="atfTitle"><?php the_title(); ?></h3>
      <p id="atfAuthor">Por <?php the_author(); ?> - <?php the_date(); ?></p>
    </figcaption>
  <?php } wp_reset_query(); ?>
</figure>

<h1>Gaea People</h1>

<section id="sec1">
  <?php
  $args = array(
    // 'post_type' => 'project',
    'post_type'=>'post',
    'posts_per_page'=>8,
    // 'tax_query' => array(
    //   array(
    //     'taxonomy' => 'category',
    //     'field'    => 'term_id',
    //     'terms'    => $cat->cat_ID,
    //   ),
    // ),
  );$blogPosts=new WP_Query($args);$i=0;
  ?>
  <div class="sectionMarker" id="sec1Marker"><img src="<?php echo get_template_directory_uri(); ?>../../../../wp-content/uploads/2019/07/marketing-strategy.png" alt=""></div>
  <div id="sec1Main">
    <?php
    while($blogPosts->have_posts()) {
      $blogPosts->the_post(); ?>
      <a class="<?php
        if($i==0)            {echo 'sectionMainPost';}
        if($i>0 && $i<=5)    {echo 'sectionSecnPost';} //TODO: Hacer responsive con Js que lea margenes
        if($i>5)             {echo 'sectionThrdPost';}
        ?>" href="<?php the_permalink(); ?>">
        <figure>
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
          <figcaption>
          <h3><?php the_title(); ?></h3>
          <p class="sec1MainExcerpt"><?php if($i==0){the_excerpt();} ?></p>
          <!-- <p class="sec1MainExcerpt"><?php if($i==0){wp_trim_words(get_the_excerpt(), 30);$i++;} ?></p> -->
          <p class="sec1MainAuthor">Por <?php the_author(); ?> <span>- <?php the_time('F j, Y'); ?></span></p>
        </figure>
      </a>


    <?php $i++;} wp_reset_query(); ?>
  </div>
</section>

<div class="pagination">
  <?php echo paginate_links(); ?>
</div>



<?php get_footer(); ?>
