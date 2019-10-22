<?php get_header(); ?>


<section id="homeAtf" class="singleAtf">
  <?php if(function_exists('yoast_breadcrumb')){yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
  <h1>Gaea People</h1>
  <?php
  $args=array(
    'post_type'=>'slide',
    'posts_per_page'=>5,
  );$atf=new WP_Query($args);
  while($atf->have_posts()){$atf->the_post(); ?>
    <figure class="slide inactive">
      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      <figcaption>
        <!-- <p id="atfCategory"><?php echo get_the_category_list(', '); ?></p> -->
        <h3 id="atfTitle"><?php the_title(); ?></h3>
        <p id="atfAuthor"><?php the_content(); ?></p>
      </figcaption>
    </figure>
  <?php } wp_reset_query(); ?>
  <button class="slideButton slideLeft" onclick="plusDivs(-1)">&#10094;</button>
  <button class="slideButton slideRight" onclick="plusDivs(+1)">&#10095;</button>
</section>


<div class="bannerContainer">
  <img src="" alt="src="<?php echo get_template_directory_uri(); ?>/img/nuevoEquipo.jpg" alt="Ilustración del equipo de GaeaPeople"">
</div>

<!--
<figure class="banner actua">
  <img class="bannerImg" src="http://localhost/Gaea/wp-content/uploads/2019/10/actua-300x67.png" alt="" />
  <figcaption class="bannerCaption">
    <p class="bannerTxt">Impulsa tu negocio.
Conoce a tu audiencia y <span class="colorText">SOCIALIZA</span> tu web.</p>
    <p class="bannerLink"><a href="">Sí, quiero conseguir mi informe</a></p>
  </figcaption>
</figure>
-->







<?php $j=0;
while($j<=2){ ?>

    <?php if ($j==0) {
      $categorySlug = 'marketing-estrategia';
      $categoryName = get_category_by_slug($categorySlug)->name;
      $args = array(
        'post_type'=>'post',
        'posts_per_page'=>1,
        'category_name' => $categorySlug,
        'tag' => 'featured',
      );
      $blogPosts=new WP_Query($args); ?>


      <section class="categorySection">
        <div class="sectionMarker">
          <p class="superLetter firstLetter"><?php echo $categoryName[0]; ?></p>
          <h3><?php echo $categoryName ?></h3>
          <p class="superLetter secondLetter"><?php echo explode(' ', $categoryName)[1][0]; ?></p>
        </div>
        <div class="mainCorridor corridor">
    <?php } ?>
    <?php if ($j==1) {
      $categorySlug = 'salud-digital';
      $categoryName = get_category_by_slug($categorySlug)->name;
      $args = array(
        'post_type'=>'post',
        'posts_per_page'=>1,
        'category_name' => $categorySlug,
        'tag' => 'featured',
      );

      $blogPosts=new WP_Query($args); ?>
      <section class="categorySection">
        <div class="sectionMarker">
          <p class="superLetter firstLetter"><?php echo $categoryName[0]; ?></p>
          <h3><?php echo $categoryName ?></h3>
          <p class="superLetter secondLetter"><?php echo explode(' ', $categoryName)[1][0]; ?></p>
        </div>
        <div class="mainCorridor corridor">
    <?php } ?>
    <?php if ($j==2) {
      $categorySlug = 'seo-contenidos';
      $categoryName = get_category_by_slug($categorySlug)->name;
      $args = array(
        'post_type'=>'post',
        'posts_per_page'=>1,
        'category_name' => $categorySlug,
        'tag' => 'featured',
      );
      $blogPosts=new WP_Query($args); ?>
      <section id="sec3" class="categorySection">
        <div class="sectionMarker">
          <p class="superLetter firstLetter"><?php echo $categoryName[0]; ?></p>
          <h3><?php echo $categoryName ?></h3>
          <p class="superLetter secondLetter"><?php echo explode(' ', $categoryName)[1][0]; ?></p>
        </div>
        <div class="mainCorridor corridor">
    <?php } ?>

    <?php
    $i=0;
    while($blogPosts->have_posts()) {
      $blogPosts->the_post();$featuredID=get_the_ID(); ?>
      <figure class="post mainPost mainPost1">
        <img class="mainImg" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
        <figcaption class="postFigcaption mainFigcaption mainFigcaption1">
          <a class="mainTxt postTxt" href="<?php the_permalink(); ?>"><h6 class="mainTxt postTxt"><?php the_title(); ?></h6></a>
          <?php if($i==0){ ?><a class="postMainTxt" href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a><?php } ?>
          <!-- <?php if(function_exists('the_views')){ ?><p class="vistoNVeces postTxt">👁 <?php the_views(); ?></p><?php } ?> -->
          <p class="postAuthor postTxt"><strong class="authorColor">Por <?php the_author(); ?></strong> - <?php the_time('M j, Y'); ?></p>
        </figcaption>
      </figure>
    </div>
    <?php } $i=1;
    $args = array(
      'post_type'=>'post',
      'posts_per_page'=>6,
      'category_name' => $categorySlug,
      'post__not_in'  => array( $featuredID, 1 ),
      // 'tag__not_in' => get_term_by('slug', 'featured', 'post_tag')->term_id,
    );
    $blogPosts=new WP_Query($args);
    while($blogPosts->have_posts()){$blogPosts->the_post(); ?>
      <?php if ($i==1) { ?><div class="scndCorridor"><?php } ?>
      <?php if ($i==4) { ?><div class="bottomPostContainer"><?php } ?>


      <figure class="post<?php
        // if($i>0 && $i<=4) {if($i % 2) {echo ' corridorPostSmall';} else {echo ' corridorPostBig';}}
        // if($i>0 && $i<=4) {if($i % 2) {echo ' corridorPostSmall';} else {echo ' corridorPostBig';}}
        if($i<4) {echo ' scndPost';}
        if($i>3) {echo ' bottomPost';}
        ?>">
        <img class="postImg<?php
          // if($i>0 && $i<=4) {if($i % 2) {echo ' scndCorridorImgSmall';} else {echo ' scndCorridorImgBig';}}
          if($i<4) {echo ' scndPostImg';}
          if($i>3) {echo ' bottomPostsImg';}
          ?>" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
        <figcaption class="postFigCaptioncito<?php
          // if($i>0 && $i<=4) {if($i % 2) {echo ' CorridorFigcaptionSmall';} else {echo ' CorridorFigcaptionBig';}}
          if($i<4) {echo ' scndPostFigcaption';}
          if($i>3) {echo ' bottomPostsFigcaption';}
          ?>">
          <a class="postTxt1 postTxt" href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
          <p class="postAuthor postTxt"><strong class="authorColor">Por <?php the_author(); ?></strong> - <?php the_time('M j, Y'); ?></p>
          <!-- <?php if(function_exists('the_views')){ ?><p style="color:black;" class="vistoNVeces postTxt">👁 <?php the_views(); ?></p><?php } ?> -->
        </figcaption>
      </figure>
      <?php if ($i==3) { ?>
        </div>
      <?php }
    $i++;} wp_reset_query(); ?>
  </div>
</section>

<div class="more">
  <a class="leerMas" href="<?php echo get_category_link( get_category_by_slug($categorySlug)->term_id ) ?>">Leer más sobre<br><?php echo $categoryName ?> »</a>
</div>


<banner>

  <?php
    // $categorySlug = 'marketing-strategy';
    // $args = array(
    //   'post_type'=>'banner',
    //   'posts_per_page'=>1,
    // );
    // $blogPosts=new WP_Query($args);
    // while($blogPosts->have_posts()){ $blogPosts->the_post();the_content(); }
  ?>

  <?php
  switch ($j) {
    case 0:
      echo do_shortcode("[the_ad id='233']");
      break;
    case 1:
      echo do_shortcode("[the_ad_group id='1623']");
      break;
    case 2:
      echo do_shortcode("[the_ad_group id='1624']");
      break;

    default:
      echo do_shortcode("[the_ad_group id='']");
      break;
  }
  ?>
</banner>

<?php $j++;} ?>

<?php echo do_shortcode("[mc4wp_form id='190']")   ?>




<?php get_footer(); ?>
