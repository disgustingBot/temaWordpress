<?php get_header(); ?>



<section id="archiveAtf">
  <h1 id="archiveTitle"><?php the_archive_title(); ?></h1>
  <nav id="archiveNav">
    <ul>
      <li>SEO y SEM</li>
      <li>Analitica Web</li>
      <li>Redes Sociales</li>
      <li>Marketing de contenidos</li>
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
  <figure>
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
    <figcaption>
      <p id="archiveAtfCategory"><?php echo get_the_category_list(', '); ?></p>
      <h3 id="archiveAtfTitle"><?php the_title(); ?></h3>
      <p id="archiveAtfAuthor">Por <?php the_author(); ?> - <?php the_time('F j, Y'); ?></p>
    </figcaption>
  </figure>
  <?php } wp_reset_query(); ?>
</section>




<section id="sec1">
  <div class="sectionMarker" id="sec1Marker"><p>Section 1</p></div>
  <div id="sec1Main">
    <?php
    while(have_posts()) {
      the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <figure>
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
          <h3><?php the_title(); ?></h3>
          <p class="sec1MainExcerpt"><?php if($i==0){the_excerpt();$i++;} ?></p>
          <!-- <p class="sec1MainExcerpt"><?php if($i==0){wp_trim_words(get_the_excerpt(), 30);$i++;} ?></p> -->
          <p class="sec1MainAuthor">Por <?php the_author(); ?> - <?php the_time('F j, Y'); ?></p>
        </figure>
      </a>


    <?php } wp_reset_query(); ?>
  </div>
</section>

<div class="pagination">
  <?php echo paginate_links(); ?>
</div>



<?php get_footer(); ?>
