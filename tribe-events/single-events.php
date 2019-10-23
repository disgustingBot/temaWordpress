<?php

/**
 * Single Event Template
 */

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

// Data
$event_id = get_the_ID();
$events_page = tribe_get_events_link();
$event_title = get_the_title();
$event_cost = tribe_get_cost( $event_id, true );
$event_thumb = get_the_post_thumbnail_url( $event_id, 'event_thumb');
$event_bg = get_the_post_thumbnail_url( $event_id, 'thumbnail' );
$event_category = get_the_terms( $event_id, 'tribe_events_cat' )[0];
$event_web = tribe_get_event_website_url();

$event_organizer = tribe_get_organizer();
$event_organizer_url = tribe_get_organizer_website_url();

$event_submitter_name = get_the_author_meta('display_name');
$event_submitter_avatar = get_wp_user_avatar_src(get_the_author_meta('ID'));

$event_submitter_id = get_the_author_meta('ID');
$event_submitter_slug = get_user_meta($author_ID,'profile_slug',true);
$event_submitter_url = home_url('el-club/protagonistas/'.$slug);

$event_location = tribe_get_venue_details();
$event_location_name = $event_location['linked_name'];
$event_location_address = $event_location['address'];

$event_start_day = tribe_get_start_date( $event_id, false, 'd' );
$event_start_month = tribe_get_start_date( $event_id, false, 'F' );
$event_start_year = tribe_get_start_date( $event_id, false, 'Y' );
$event_end_day = tribe_get_end_date( $event_id, false, 'd' );
$event_end_month = tribe_get_end_date( $event_id, false, 'F' );
$event_end_year = tribe_get_end_date( $event_id, false, 'Y' );

$event_start_date = $event_start_day . ' ' . $event_start_month . ' ' . $event_start_year;
$event_end_date = $event_end_day . ' ' . $event_end_month . ' ' . $event_end_year;


$event_start_time = tribe_get_start_time();
$event_end_time = tribe_get_end_time();

?>


<div class="a7-event-bg"><img src="<?php echo $event_bg; ?>" alt="<?php echo $event_title; ?>"></div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="container">

    <div class="a7-event-container">

      <div class="a7-event-header">

        <div class="row">

          <div class="col-12 col-lg-8">
            <img class="a7-event-header-img" src="<?php echo $event_thumb; ?>" alt="<?php echo $event_title; ?>">
          </div>

          <div class="col-12 col-lg-4">

            <div class="a7-event-header-info">

              <div class="a7-event-header-info--top">

                <span class="a7-event-header-date"><?php echo $event_start_day . ' ' . $event_start_month; ?></span>
                <h1 class="a7-event-header-title"><?php echo $event_title; ?></h1>
                <span class="a7-event-header-organizer"><?php echo $event_organizer; ?></span>

              </div>

              <div class="a7-event-header-info--bottom">

                <?php if ( ! empty( $event_cost ) )  { ?>

                  <span class="a7-event-header-cost"><?php echo $event_cost; ?></span>

                <?php } ?>

              </div>

            </div>

          </div>

        </div>

      </div>

      <div class="a7-event-subheader">

        <div class="row align-items-center">

          <div class="col-12 col-md-6 col-lg-8 my-2">

            <div class="a7-event-submitter">

              <div class="a7-event-submitter-avatar">
                <img src="<?php echo $event_submitter_avatar; ?>" alt="<?php echo $event_submitter_name; ?>">
              </div>

              <div class="a7-event-submitter-name">
                <span>Evento subido por</span><br>
                <span><a href="<?php echo $event_submitter_url; ?>"><b><?php echo $event_submitter_name; ?></b></a></span>
              </div>

            </div>


          </div>

          <div class="col-12 col-md-6 col-lg-4 my-2 text-center text-md-right">

            <a class="btn btn-primary disabled">Entradas no disponibles</a>

          </div>

        </div>

      </div>

      <div class="a7-event-body">

        <div class="row">

          <div class="col-12 col-md-6 col-lg-8">

            <?php the_content(); ?>

          </div>

          <div class="col-12 col-md-6 col-lg-4">

            <div class="a7-event-sidebar-block">
              <h4 class="a7-event-sidetitle">Fecha y hora</h4>

              <?php if ( $event_start_date == $event_end_date ) { ?>

                <?php echo $event_start_date; if ( ! empty( $event_start_time ) ) { echo  ' - ' . $event_start_time; } ?>

              <?php } else { ?>

              <dl class="row no-gutters">
                <dt class="col-4">Empieza</dt>
                <dd class="col-8 mb-0"><?php echo $event_start_date; if ( ! empty( $event_start_time ) ) { echo  ' - ' . $event_start_time; } ?></dd>
              </dl>
              <dl class="row no-gutters">
                <dt class="col-4">Acaba</dt>
                <dd class="col-8 mb-0"><?php echo $event_end_date; if ( ! empty( $event_end_time ) ) { echo  ' - ' . $event_end_time; } ?></dd>
              </dl>

              <?php } ?>

            </div>

            <?php if ( ! empty( $event_organizer ) ) { ?>
              <div class="a7-event-sidebar-block">
                <h4 class="a7-event-sidetitle">Organizador</h4>
                <?php echo $event_organizer; ?><br>
                <a href="<?php echo $event_organizer_url; ?>" target="_blank">Visitar web</a>
              </div>
            <?php } ?>

            <div class="a7-event-sidebar-block">
              <h4 class="a7-event-sidetitle">Ubicación</h4>
              <?php echo '<u>' . $event_location_name . '</u><br>' . $event_location_address; ?>
            </div>

            <?php if ( ! empty( $event_web ) ) { ?>
              <a target="_blank" class="btn btn-gold" href="<?php echo $event_web; ?>">Web del evento</a>
            <?php } ?>

          </div>

        </div>

      </div>


<!--      <div id="tribe-events-footer">-->
<!--        <nav class="tribe-events-nav-pagination" aria-label="--><?php //printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?><!--">-->
<!--          <ul class="tribe-events-sub-nav">-->
<!--            <li class="tribe-events-nav-previous">--><?php //tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?><!--</li>-->
<!--            <li class="tribe-events-nav-next">--><?php //tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?><!--</li>-->
<!--          </ul>-->
<!--        </nav>-->
<!--      </div>-->


    </div>

  </div>
</article>


<!--<div class="a7-related-events">-->
<!---->
<!--  --><?php
//
//    $args = [
//      'posts_per_page'  => 3,
//      'tax_query' => array(
//        array(
//          'taxonomy'  => 'tribe_events_cat',
//          'field'     => 'slug',
//          'terms'     => $event_category->slug,
//        )
//      )
//    ];
//    $related_events_cat = tribe_get_events( $args );
//
//
//  ?>

<!--  <div class="row">-->
<!---->
<!--  --><?php //foreach ( $related_events_cat as $event ) { ?>
<!---->
<!--      <div class="col-12 col-md-6 col-lg-4">-->
<!---->
<!--        <div class="a7-event-item">-->
<!---->
<!--          <a href="--><?php //echo $event_link; ?><!--"><img class="a7-event-item-img" src="--><?php //echo $event_thumb; ?><!--" alt="--><?php //echo $event_title; ?><!--"></a>-->
<!---->
<!--          <div class="a7-event-item-body">-->
<!---->
<!--            <div class="a7-event-item-date">-->
<!---->
<!--              <span class="a7-event-item-month">--><?php //echo $event_start_month; ?><!--</span>-->
<!---->
<!--              <span class="a7-event-item-day">--><?php //echo $event_start_day; ?><!--</span>-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="a7-event-item-info">-->
<!---->
<!--              <h2 class="a7-event-item-title"><a href="--><?php //echo $event_link; ?><!--">--><?php //echo $event_title; ?><!--</a></h2>-->
<!---->
<!--              <div class="a7-event-item-details">--><?php //echo tribe_events_event_schedule_details() . ' / ' . tribe_get_cost( null, true ); ?><!--</div>-->
<!---->
<!--              <div class="a7-event-item-venue">--><?php //echo $event_location_name . ', ' . $event_location_address; ?><!--</div>-->
<!---->
<!--            </div>-->
<!---->
<!--          </div>-->
<!---->
<!--        </div>-->
<!---->
<!--      </div>-->
<!---->
<!--    --><?php //} ?>
<!---->
<!--  </div>-->

<!--</div>-->
