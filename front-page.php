<?php get_header(); ?>


<section id="homeAtf" class="singleAtf">
  <?php if(function_exists('yoast_breadcrumb')){yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
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




<?php $j=0;
while($j<=2){ ?>

    <?php if ($j==0) {
      $categoryName = 'marketing-strategy';
      $args = array(
        'post_type'=>'post',
        'posts_per_page'=>1,
        'category_name' => $categoryName,
        'tag' => 'featured',
      );
      $blogPosts=new WP_Query($args); ?>
      <section id="sec1" class="section">
        <div class="sectionMarker">
          <svg class="markerLetter markerFirstLetter letterM" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"viewBox="0 0 43.68 25.92" xml:space="preserve">
            <path d="M7.92,0.48l0.432,3.408C8.8,3.473,9.344,3.032,9.984,2.568c0.64-0.463,1.344-0.888,2.112-1.272S13.672,0.6,14.52,0.36C15.368,0.12,16.208,0,17.04,0c3.232,0,5.456,1.376,6.672,4.128c0.576-0.576,1.248-1.111,2.016-1.608c0.768-0.496,1.56-0.936,2.376-1.32c0.816-0.384,1.616-0.679,2.4-0.888C31.288,0.104,32,0,32.64,0c4.959,0,7.44,2.88,7.44,8.64v13.44l3.6,1.2v2.64H32.16v-2.64l3.12-1.2V9.12c0-1.76-0.305-3.04-0.912-3.84c-0.608-0.799-1.601-1.2-2.976-1.2c-0.672,0-1.32,0.088-1.944,0.264C28.824,4.52,28.24,4.752,27.696,5.04c-0.545,0.288-1.025,0.6-1.44,0.936c-0.416,0.336-0.752,0.665-1.008,0.984L24.48,7.92v14.16l3.12,1.2v2.64H16.56v-2.64l3.12-1.2V9.12c0-1.76-0.305-3.04-0.912-3.84c-0.608-0.799-1.601-1.2-2.976-1.2c-0.672,0-1.32,0.088-1.944,0.264C13.224,4.52,12.64,4.752,12.096,5.04c-0.544,0.288-1.024,0.6-1.44,0.936C10.24,6.312,9.904,6.641,9.648,6.96L8.88,7.92v14.16l3.12,1.2v2.64H0v-2.64l4.08-1.2V4.32L0,3.36V0.72L7.92,0.48z"/>
          </svg>
          <h3><?php echo get_category_by_slug($categoryName)->name; ?></h3>
          <svg class="markerLetter markerSecondLetter" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"viewBox="0 0 18.192 26.448" xml:space="preserve">
            <path d="M0,18.24h3.36l0.528,4.128c0.319,0.128,0.823,0.232,1.512,0.312c0.688,0.081,1.368,0.12,2.04,0.12c2.08,0,3.592-0.312,4.536-0.936c0.943-0.624,1.416-1.576,1.416-2.856c0-0.864-0.329-1.552-0.984-2.064c-0.656-0.511-1.48-0.943-2.472-1.296c-0.992-0.352-2.072-0.704-3.24-1.056c-1.168-0.352-2.249-0.808-3.24-1.368c-0.992-0.56-1.816-1.288-2.472-2.184C0.328,10.145,0,8.96,0,7.488c0-2.4,0.799-4.231,2.4-5.496C4,0.728,6.127,0.064,8.784,0c1.12,0.032,2.263,0.12,3.432,0.264c1.168,0.144,2.36,0.408,3.576,0.792l1.2,0.384l-0.144,6.48h-3.12L12.96,4.176c-0.256-0.096-0.752-0.216-1.488-0.36C10.735,3.672,9.952,3.6,9.12,3.6C8.544,3.6,8,3.648,7.488,3.744C6.976,3.84,6.52,4,6.12,4.224c-0.4,0.224-0.72,0.544-0.96,0.96C4.92,5.6,4.8,6.112,4.8,6.72c0,0.929,0.328,1.656,0.984,2.184c0.655,0.528,1.479,0.984,2.472,1.368c0.992,0.384,2.072,0.752,3.24,1.104c1.167,0.353,2.248,0.809,3.24,1.368c0.992,0.56,1.816,1.272,2.472,2.136c0.655,0.864,0.984,2,0.984,3.408c0,1.344-0.288,2.528-0.864,3.552c-0.576,1.024-1.353,1.88-2.328,2.568c-0.977,0.688-2.112,1.2-3.408,1.536c-1.296,0.336-2.68,0.504-4.152,0.504c-0.544,0-1.112-0.024-1.704-0.072c-0.592-0.048-1.176-0.113-1.752-0.192c-0.576-0.081-1.112-0.168-1.608-0.264c-0.497-0.096-0.904-0.192-1.224-0.288l-1.104-0.288L0,18.24z"/>
          </svg>
        </div>
        <div id="sec1Main" class="secMain">
    <?php } ?>
    <?php if ($j==1) {
      $categoryName = 'digital-health';
      $args = array(
        'post_type'=>'post',
        'posts_per_page'=>1,
        'category_name' => $categoryName,
        'tag' => 'featured',
      );
      $blogPosts=new WP_Query($args); ?>
      <section id="sec2" class="section">
        <div class="sectionMarker">
          <svg class="markerLetter markerFirstLetter" version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 26.16 37.44" xml:space="preserve"><path d="M22.08,0v33.12l4.08,0.96v2.64L18,36.96l-0.384-2.736c-2.144,2.144-4.784,3.216-7.92,3.216c-3.104,0-5.496-1.111-7.176-3.336C0.84,31.88,0,28.8,0,24.864c0-4.191,1.072-7.543,3.216-10.056c2.144-2.512,5.312-3.768,9.504-3.768c1.567,0,3.088,0.256,4.56,0.768V3.84L13.2,2.88V0.24L22.08,0z M17.28,30V15.84c-1.121-0.64-2.8-0.96-5.04-0.96c-4.8,0-7.2,3.2-7.2,9.6c0,2.816,0.487,5.04,1.464,6.672C7.479,32.784,8.992,33.6,11.04,33.6c1.567,0,2.896-0.416,3.984-1.248C16.047,31.52,16.8,30.736,17.28,30z"/></svg>
          <h3><?php echo get_category_by_slug($categoryName)->name; ?></h3>
          <svg class="markerLetter markerSecondLetter" version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	         viewBox="0 0 28.56 36.96" xml:space="preserve">
	          <path d="M8.88,0v14.496c2.719-2.304,5.439-3.456,8.16-3.456c2.719,0,4.72,0.76,6,2.28c1.279,1.521,1.92,3.641,1.92,6.36v13.44
		        l3.6,1.2v2.64H17.04v-2.64l3.12-1.152V20.16c0-1.728-0.32-3-0.96-3.816c-0.641-0.816-1.648-1.224-3.024-1.224
		        c-0.672,0-1.328,0.088-1.968,0.264c-0.641,0.176-1.248,0.408-1.824,0.696s-1.088,0.6-1.536,0.936
		        c-0.448,0.336-0.816,0.665-1.104,0.984L8.88,18.96v14.16l3.12,1.2v2.64H0v-2.64l4.08-1.2V3.84L0,2.88V0.24L8.88,0z"/>
          </svg>


        </div>
        <div id="sec2Main" class="secMain">
    <?php } ?>
    <?php if ($j==2) {
      $categoryName = 'cool-reading';
      $args = array(
        'post_type'=>'post',
        'posts_per_page'=>1,
        'category_name' => $categoryName,
        'tag' => 'featured',
      );
      $blogPosts=new WP_Query($args); ?>
      <section id="sec3" class="section">
        <div class="sectionMarker">
          <svg class="markerLetter markerFirstLetter" version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 21.6 26.4" xml:space="preserve">
            <path d="M20.4,8.4h-3.12l-0.72-4.08C15.312,4,13.872,3.84,12.24,3.84c-2.304,0-4.08,0.737-5.328,2.208C5.664,7.52,5.04,9.809,5.04,12.912c0,3.104,0.656,5.488,1.968,7.152c1.312,1.664,3.136,2.496,5.472,2.496c0.672,0,1.336-0.064,1.992-0.192c0.655-0.128,1.279-0.296,1.872-0.504c0.592-0.208,1.128-0.439,1.608-0.696c0.48-0.256,0.864-0.512,1.152-0.768l0.816-0.72l1.68,2.88l-0.528,0.432c-0.384,0.32-0.912,0.681-1.584,1.08c-0.672,0.401-1.416,0.768-2.232,1.104c-0.816,0.336-1.68,0.624-2.592,0.864c-0.912,0.24-1.8,0.36-2.664,0.36c-3.904,0-6.88-1.16-8.928-3.48C1.024,20.6,0,17.424,0,13.392c0-1.984,0.295-3.8,0.888-5.448C1.48,6.296,2.32,4.888,3.408,3.72c1.087-1.167,2.4-2.08,3.936-2.736C8.88,0.329,10.592,0,12.48,0c0.64,0,1.296,0.048,1.968,0.144c0.672,0.096,1.327,0.208,1.968,0.336c0.64,0.128,1.231,0.28,1.776,0.456C18.736,1.112,19.2,1.28,19.584,1.44l1.056,0.48L20.4,8.4z"/>
          </svg>
          <h3><?php echo get_category_by_slug($categoryName)->name; ?></h3>
          <svg class="markerLetter markerSecondLetter" version="1.1" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"x="0px" y="0px" viewBox="0 0 19.92 25.92" xml:space="preserve">
            <path d="M7.92,0.48l0.432,3.504C10.72,1.328,13.136,0,15.601,0c1.312,0,2.576,0.192,3.791,0.576L19.92,0.72l-0.239,6.96H16.56l-0.72-3.6c-2.752,0-5.071,1.248-6.96,3.744V22.08l4.801,1.2v2.64H0v-2.64l4.08-1.2V4.32L0,3.36V0.72L7.92,0.48z"/>
          </svg>
        </div>
        <div id="sec3Main" class="secMain">
    <?php } ?>

    <?php
    while($blogPosts->have_posts()) {
      $blogPosts->the_post();$featuredID=get_the_ID(); ?>
      <figure class="sectionMainPost card">
        <a href="<?php the_permalink(); ?>">
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
        </a>
        <figcaption>
          <a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
          <?php if($i==0){ ?><a href="<?php the_permalink(); ?>"><p class="sec1MainExcerpt"><?php the_excerpt(); ?></p></a><?php } ?>
          <p class="sec1MainAuthor">Por <?php the_author(); ?> <span>- <?php the_time('F j, Y'); ?></span></p>
          <?php if(function_exists('the_views')){ ?>
            <div class="theViews">
              <svg viewBox="0 0 576 512"><path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path></svg>
              <p><?php the_views(); ?></p>
            </div>
          <?php } ?>
          <!-- <p><?php echo get_the_category_list(', '); ?></p> -->
        </figcaption>
      </figure>
    <?php } $i=1;
    $args = array(
      'post_type'=>'post',
      'posts_per_page'=>7,
      'category_name' => $categoryName,
      'post_not_in'  => $featuredID,
      // 'tag__not_in' => get_term_by('slug', 'featured', 'post_tag')->term_id,
    );
    $blogPosts=new WP_Query($args);
    while($blogPosts->have_posts()){$blogPosts->the_post();
      if ($i==1 OR $i==3) { ?>
        <div class="specialCont">
      <?php } ?>
      <figure class="<?php
        if($i>0 && $i<=4)    {echo 'sectionSecnPost';} //TODO: Hacer responsive con Js que lea margenes
        if($i>4)             {echo 'sectionThrdPost';}
        ?> card">
        <a href="<?php the_permalink(); ?>">
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
        </a>
        <figcaption>
          <a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
          <a href="<?php the_permalink(); ?>"><p class="sec1MainExcerpt"><?php if($i==0){the_excerpt();} ?></p></a>
          <p class="sec1MainAuthor">Por <?php the_author(); ?> <span>- <?php the_time('F j, Y'); ?></span></p>
          <?php if(function_exists('the_views')){ ?>
            <div class="theViews">
              <svg viewBox="0 0 576 512"><path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path></svg>
              <p><?php the_views(); ?></p>
            </div>
          <?php } ?>
          <!-- <p><?php echo get_the_category_list(', '); ?></p> -->
        </figcaption>
      </figure>
      <?php if ($i==2 OR $i==4) { ?>
        </div>
      <?php }
    $i++;} wp_reset_query(); ?>
  </div>
</section>

<div class="more">
  <a class="leerMas" href="<?php echo get_category_link( get_category_by_slug($categoryName)->term_id ) ?>">Leer más</a>
</div>


<banner>
  <?php
  switch ($j) {
    case 0:
      echo do_shortcode("[the_ad_group id='1622']");
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



<?php get_footer(); ?>
