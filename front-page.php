<?php get_header(); ?>


<link href="https://fonts.googleapis.com/css?family=Bitter|Raleway:300,400&display=swap" rel="stylesheet">
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
  <div class="sectionMarker">
    <svg class="markerLetter markerFirstLetter2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 x="0px" y="0px" viewBox="0 0 945.531 579.255" xml:space="preserve">
      <g>
	      <path fill="#BC9B51" d="M0,551.755c4.681-1.755,8.776-4.096,12.287-6.436c16.968-12.287,25.744-37.447,25.744-74.309V138.67
		    c0-31.596-4.096-52.659-12.287-62.606c-7.021-7.021-11.702-10.532-25.159-13.458c0-7.021,0-35.691,0-35.691L73.723,0
		    c0,0,62.606,0,67.287,0v79.574C183.723,40.958,220,14.628,250.425,0c32.181,0,149.788,0,176.702,0
	    	c8.777,5.851,16.969,13.458,24.574,22.234c13.458,16.383,25.16,38.617,33.937,66.117c31.596-32.181,59.096-56.17,83.085-71.383
		    C578.67,10.532,588.617,4.681,598.563,0c32.181,0,155.638,0,184.309,0c21.648,14.042,38.032,34.521,49.148,61.436
    		c13.458,31.596,19.894,81.915,19.894,150.373v266.809c0,30.426,7.021,50.904,20.479,62.021
	    	c13.458,11.116,38.032,18.138,73.139,21.648v16.968H655.904v-18.138c37.446-3.511,62.021-11.117,73.723-22.234
	    	c11.702-11.702,17.553-35.106,17.553-70.798v-277.34c0-41.542-4.68-71.968-13.457-91.862
	    	c-15.798-35.106-46.809-52.659-93.031-52.659c-28.086,0-55.586,9.361-83.086,27.5c-15.798,10.532-35.105,28.085-58.51,51.489
	    	v328.829c0,34.521,5.851,60.852,18.138,78.99c12.287,18.138,38.032,27.5,77.234,28.67v16.968H298.989v-16.968
	    	c40.957-5.266,66.702-15.213,77.819-29.841c11.116-14.627,16.968-50.318,16.968-108.244V245.16
	    	c0-66.117-4.096-111.17-12.872-135.745c-14.043-42.128-43.883-63.191-90.106-63.191c-26.33,0-52.075,7.021-77.234,21.648
	    	c-25.159,14.628-47.394,33.352-66.702,56.17v351.649c0,32.766,5.852,55,16.968,67.287c11.117,12.287,36.277,18.724,74.309,19.309
	    	v16.968H0C0,578.67,0,562.287,0,551.755z"/>
      </g>
    </svg>

    <h3>Marketing<br>Strategy</h3>

    <svg class="markerLetter markerSecondLetter2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 viewBox="0 0 424.203 666.437" xml:space="preserve">
      <g>
      	<path fill="#BC9B51" d="M1.756,459.895h23.989c11.117,55.584,26.33,97.713,45.054,127.553c27.5,43.883,64.946,70.798,113.51,78.989
	     	c13.458,0,23.404,0,35.691,0c10.532,0,20.479,0,29.841,0c22.819-4.096,41.543-13.458,56.171-27.5
	     	c21.063-19.894,31.596-46.224,31.596-78.404c0-20.479-5.852-39.787-18.139-59.096c-12.287-18.724-33.352-37.447-64.361-55.585
	     	l-81.33-46.809c-59.682-32.181-103.564-64.361-131.649-97.128C14.043,269.149,0,231.117,0,186.649
	     	C0,132.234,19.309,87.766,58.512,52.66C97.128,17.554,146.277,0,204.788,0c25.744,0,53.829,4.681,84.84,14.628
	     	c31.011,9.946,47.979,14.628,52.075,14.628c8.776,0,15.213-1.171,18.723-3.511c4.096-2.341,7.021-6.437,9.947-11.702h17.553
	     	l5.266,203.031h-22.818c-9.947-47.394-22.819-83.67-39.202-110c-29.841-48.563-73.724-73.138-130.479-73.138
	     	c-33.936,0-60.851,10.532-80.159,31.596s-29.255,45.638-29.255,73.724c0,44.468,33.351,84.255,100.638,119.361l95.958,51.489
	     	c67.287,36.861,112.926,77.234,136.33,121.702c0,31.596,0,49.148,0,74.894c0,31.011,0,54.415,0,84.255
	     	c-10.532,21.064-25.745,39.787-45.639,56.756c-7.606,6.436-15.798,12.287-24.574,17.553c-39.203,0-87.182,0-143.937,0
	     	c-29.255,0-57.926,0-98.883,0c-40.958,0-58.511,0-65.532,0c-5.852,0-9.947,0-15.213,0c-4.681,0-4.681,0-9.946,0H1.756V459.895z"/>
      </g>
    </svg>
  </div>
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
  <div class="sectionMarker">

    <svg class="markerLetter markerFirstLetter2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	   viewBox="0 0 392.606 590.958" xml:space="preserve">
      <g>
	      <path fill="#BC9B51" d="M220,175.532c11.702,6.436,23.404,14.627,34.521,25.745V59.681c0-18.138-1.756-30.426-5.852-37.447
	  	  c-4.096-7.021-13.457-10.532-28.67-10.532c-3.511,0-6.436,0-9.361,0.585c-2.926,0.585-8.777,1.17-17.554,1.756V0h137.5v7.021
	  	  C330,23.989,330,41.543,329.415,59.681s-0.585,35.691-0.585,53.245l-1.17,363.936c0,19.309,2.34,32.767,7.021,40.373
	  	  s17.554,11.702,38.032,11.702c3.511,0,6.437,0,9.947,0c3.51,0,6.436-0.585,9.946-1.17v14.627
  		  c-1.755,0.585-23.404,8.191-64.361,22.234l-70.213,26.33l-2.926-4.096v-55.001c-16.383,18.139-31.011,31.011-43.298,38.617
		    C190.16,583.937,165,590.372,136.33,590.372c-50.319,0-91.276-19.308-122.872-58.511c-4.682-5.851-8.777-11.701-12.873-17.553
	    	C0.585,472.181,0,315.372,0,262.713c6.437-11.117,14.043-22.234,22.819-32.766c37.446-46.224,83.67-69.043,138.085-69.043
	  	  C181.969,160.904,201.861,166.17,220,175.532z M232.873,521.915c14.042-13.457,21.648-26.33,21.648-38.617v-191.33
	    	c0-38.617-10.532-66.117-31.011-81.915s-40.957-23.989-60.266-23.989c-37.447,0-66.702,16.383-87.181,49.734
	    	C55,269.149,45.054,309.521,45.054,358.085c0,47.979,11.116,90.691,33.351,128.139c22.234,37.446,55,56.17,98.883,56.17
	    	C200.106,542.979,218.83,535.958,232.873,521.915z"/>
      </g>
    </svg>

    <h3>Digital<br>Health</h3>

    <svg class="markerLetter markerSecondLetter2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 viewBox="0 0 438.245 665.266" xml:space="preserve">
      <g>
	      <path fill="#BC9B51" d="M0,664.681c26.33-3.511,43.883-10.531,52.074-19.894c8.191-9.361,12.287-32.181,12.287-67.872v-466.33
		    c0-18.138-2.34-31.596-7.021-39.787c-4.681-8.776-16.383-12.872-34.521-12.872c-3.511,0-7.021,0-10.532,0.585
		    c-3.51,0.585-7.021,1.17-11.701,1.755V42.713c14.042-4.096,31.596-9.362,52.659-15.213s35.106-10.532,43.298-12.872L143.352,0
		    l1.17,3.511v298.404c20.479-23.404,38.617-40.372,54.415-51.489c28.67-19.309,59.096-29.256,92.446-29.256
		    c52.66,0,88.352,22.234,107.075,66.117c10.532,23.404,15.798,53.83,15.798,91.862V577.5c0,34.521,4.096,56.755,11.702,67.287
		    c2.925,3.511,7.021,7.021,12.287,9.947c0,8.191,0,3.511,0,10.531H264.469c28.085-4.096,46.223-10.531,54.414-19.894
		    c8.191-9.361,12.288-32.181,12.288-67.287V381.489c0-31.596-5.267-56.755-15.798-76.063
		    c-10.532-19.309-30.426-29.256-59.682-29.256c-25.159,0-49.733,8.776-73.138,26.915s-35.691,29.841-35.691,35.691v239.309
	    	c0,36.277,4.096,59.096,12.872,67.873c8.191,8.776,26.915,15.797,54.415,19.308H0V664.681z"/>
      </g>
    </svg>




  </div>
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
  <div class="sectionMarker"><img src="<?php echo get_template_directory_uri(); ?>../../../../wp-content/uploads/2019/07/marketing-strategy.png" alt=""></div>
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

<div class="pagination">
  <?php echo paginate_links(); ?>
</div>



<?php get_footer(); ?>
