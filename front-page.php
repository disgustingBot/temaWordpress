<?php get_header(); ?>


<link href="https://fonts.googleapis.com/css?family=Lato|Nunito|Roboto&display=swap" rel="stylesheet">
<section id="homeAtf">
  <h1>Gaea People</h1>
  <?php
  $args=array(
    'post_type'=>'post',
    'posts_per_page'=>5,
    'tag' => 'atf',
  );$atf=new WP_Query($args);
  while($atf->have_posts()){$atf->the_post(); ?>
    <figure class="slide inactive">
      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      <figcaption>
        <p id="atfCategory"><?php echo get_the_category_list(', '); ?></p>
        <h3 id="atfTitle"><?php the_title(); ?></h3>
        <p id="atfAuthor">Por <?php the_author(); ?> - <?php the_date(); ?></p>
      </figcaption>
    </figure>
  <?php } wp_reset_query(); ?>
  <button class="slideButton slideLeft" onclick="plusDivs(-1)">&#10094;</button>
  <button class="slideButton slideRight" onclick="plusDivs(+1)">&#10095;</button>
</section>


<section id="sec1">
  <div class="sectionMarker" id="sec1Marker"><img src="<?php echo get_template_directory_uri(); ?>../../../../wp-content/uploads/2019/07/marketing-strategy.png" alt=""></div>
  <div id="sec1Main">
    <?php
    $args = array(
      'post_type'=>'post',
      'posts_per_page'=>1,
      'category_name' => 'marketing-strategy',
      'tag' => 'featured',
    );
    $blogPosts=new WP_Query($args);
    while($blogPosts->have_posts()) {
      $blogPosts->the_post();$featuredID=get_the_ID(); ?>
      <a class="sectionMainPost card" href="<?php the_permalink(); ?>">
        <figure>
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
          <figcaption>
            <h6><?php the_title(); ?></h6>
            <p class="sec1MainExcerpt"><?php if($i==0){the_excerpt();} ?></p>
            <p class="sec1MainAuthor">Por <?php the_author(); ?> <span>- <?php the_time('F j, Y'); ?></span></p>
            <!-- <p><?php echo get_the_category_list(', '); ?></p> -->
          </figcaption>
        </figure>
      </a>
    <?php } // wp_reset_query(); ?>

<!-- echo $featuredID; -->
    <?php $i=1;
    $args = array(
      'post_type'=>'post',
      'posts_per_page'=>7,
      'category_name' => 'marketing-strategy',
      'post_not_in'  => $featuredID,
      // 'tag__not_in' => get_term_by('slug', 'featured', 'post_tag')->term_id,
    );
    $blogPosts=new WP_Query($args);
    while($blogPosts->have_posts()) {
      $blogPosts->the_post(); ?>
      <?php if ($i==1 OR $i==3) { ?>
        <div class="specialCont">
      <?php } ?>
      <a class="<?php
        if($i>0 && $i<=4)    {echo 'sectionSecnPost';} //TODO: Hacer responsive con Js que lea margenes
        if($i>4)             {echo 'sectionThrdPost';}
        ?> card" href="<?php the_permalink(); ?>">
        <figure>
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
          <figcaption>
            <h6><?php the_title(); ?></h6>
            <p class="sec1MainExcerpt"><?php if($i==0){the_excerpt();} ?></p>
            <p class="sec1MainAuthor">Por <?php the_author(); ?> <span>- <?php the_time('F j, Y'); ?></span></p>
            <!-- <p><?php echo get_the_category_list(', '); ?></p> -->
          </figcaption>
        </figure>
      </a>
      <?php if ($i==2 OR $i==4) { ?>
        </div>
      <?php } ?>


    <?php $i++;} wp_reset_query(); ?>






  </div>
</section>


<banner>BANNER</banner>


<section id="sec2">
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
  );$blogPosts=new WP_Query($args);
  ?>
  <div id="sec1Main">
    <?php $i=0;
    while($blogPosts->have_posts()) {
      $blogPosts->the_post(); ?>
      <?php if ($i==1 OR $i==3) { ?>
        <div class="specialCont">
      <?php } ?>
      <a class="<?php
        if($i==0)            {echo 'sectionMainPost';}
        if($i>0 && $i<=4)    {echo 'sectionSecnPost';} //TODO: Hacer responsive con Js que lea margenes
        if($i>4)             {echo 'sectionThrdPost';}
        ?> card" href="<?php the_permalink(); ?>">
        <figure>
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
          <figcaption>
            <h6><?php the_title(); ?></h6>
            <p class="sec1MainExcerpt"><?php if($i==0){the_excerpt();} ?></p>
            <p class="sec1MainAuthor">Por <?php the_author(); ?> <span>- <?php the_time('F j, Y'); ?></span></p>
          </figcaption>
        </figure>
      </a>
      <?php if ($i==2 OR $i==4) { ?>
        </div>
      <?php } ?>


    <?php $i++;} wp_reset_query(); ?>
  </div>
  <div class="sectionMarker" id="sec1Marker"><img src="<?php echo get_template_directory_uri(); ?>../../../../wp-content/uploads/2019/07/marketing-strategy.png" alt=""></div>
</section>


<banner>BANNER</banner>


<section id="sec3">
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
  );$blogPosts=new WP_Query($args);
  ?>
  <div class="sectionMarker" id="sec1Marker"><img src="<?php echo get_template_directory_uri(); ?>../../../../wp-content/uploads/2019/07/marketing-strategy.png" alt=""></div>
  <div id="sec1Main">
    <?php $i=0;
    while($blogPosts->have_posts()) {
      $blogPosts->the_post(); ?>
      <?php if ($i==1 OR $i==3) { ?>
        <div class="specialCont">
      <?php } ?>
      <a class="<?php
        if($i==0)            {echo 'sectionMainPost';}
        if($i>0 && $i<=4)    {echo 'sectionSecnPost';} //TODO: Hacer responsive con Js que lea margenes
        if($i>4)             {echo 'sectionThrdPost';}
        ?> card" href="<?php the_permalink(); ?>">
        <figure>
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
          <figcaption>
            <h6><?php the_title(); ?></h6>
            <p class="sec1MainExcerpt"><?php if($i==0){the_excerpt();} ?></p>
            <p class="sec1MainAuthor">Por <?php the_author(); ?> <span>- <?php the_time('F j, Y'); ?></span></p>
          </figcaption>
        </figure>
      </a>
      <?php if ($i==2 OR $i==4) { ?>
        </div>
      <?php } ?>


    <?php $i++;} wp_reset_query(); ?>
  </div>
</section>


<banner>BANNER</banner>

<!-- <div class="pagination">
  <?php //echo paginate_links(); ?>
</div> -->



<?php get_footer(); ?>
