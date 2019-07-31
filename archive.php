<?php get_header(); ?>



<section id="archiveAtf">
  <h1 id="archiveTitle"><?php the_archive_title(); ?></h1>
  <nav id="archiveNav">
    <ul>
      <li><a href="">SEO y SEM</a></li>
      <li><a href="">Analitica Web</a></li>
      <li><a href="">Redes Sociales</a></li>
      <li><a href="">Marketing de contenidos</a></li>
    </ul>
  </nav>
  <?php
  $args=array(
    'post_type'=>'post',
    'posts_per_page'=>2,
    'meta_query'=>array(
       array(
         'key'=>'_featured',
         'value'=>'yes'
       )
    )
  );$atf=new WP_Query($args);
  while($atf->have_posts()){$atf->the_post(); ?>
  <a class="archiveAtfCard" href="<?php the_permalink(); ?>">
    <figure>
      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      <figcaption>
        <!-- <p id="archiveAtfCategory"><?php echo get_the_category_list(', '); ?></p> -->
        <h3 id="archiveAtfTitle"><?php the_title(); ?></h3>
        <p id="archiveAtfAuthor">Por <?php the_author(); ?> - <?php the_time('F j, Y'); ?></p>
      </figcaption>
    </figure>
  </a>
  <?php } wp_reset_query(); ?>
</section>




<section class="archiveSection">
    <?php $i=0;
    while(have_posts()){the_post(); ?>
      <a class="card<?php if ($i  % 6==0) {echo " mainCard";} ?>" href="<?php the_permalink(); ?>">
        <figure>
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
          <h3><?php the_title(); ?></h3>
          <p class="sec1MainAuthor">Por <?php the_author(); ?> - <?php the_time('F j, Y'); ?></p>
          <p class="sec1MainExcerpt"><?php if($i==0){the_excerpt();} ?></p>
        </figure>
      </a>


    <?php

    if ($i % 6==5){ ?>
      </section>
      <banner>BANNER</banner>
      <section class="archiveSection">
    <?php }

    $i++;} wp_reset_query(); ?>
</section>

<div class="pagination">
  <?php echo paginate_links(); ?>
</div>



<?php get_footer(); ?>
