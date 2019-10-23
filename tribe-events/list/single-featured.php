<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @version 4.6.19
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();

// The address string via tribe_get_venue_details will often be populated even when there's
// no address, so let's get the address string on its own for a couple of checks below.
$venue_address = tribe_get_address();

// Venue
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

// Data
$event_id = get_the_ID();
$event_link = get_the_permalink();
$event_title = get_the_title();
$event_cost = tribe_get_cost( $event_id, true );
$event_thumb = get_the_post_thumbnail_url( $event_id, 'landscape-small');
$event_organizer = tribe_get_organizer();
$event_start_day = tribe_get_start_date( $event_id, false, 'd' );
$event_start_month = substr( tribe_get_start_date( $event_id, false, 'F' ), 0, 3 );
$event_location = tribe_get_venue_details();
$event_location_name = $event_location['linked_name'];
$event_location_address = $event_location['address'];


?>

<div class="a7-event-item a7-event-item--featured">

  <a href="<?php echo $event_link; ?>"><img class="a7-event-item-img" src="<?php echo $event_thumb; ?>" alt="<?php echo $event_title; ?>"></a>

  <div class="a7-event-item-body">

    <div class="a7-event-item-date">

      <span class="a7-event-item-month"><?php echo $event_start_month; ?></span>

      <span class="a7-event-item-day"><?php echo $event_start_day; ?></span>

    </div>

    <div class="a7-event-item-info">

      <h2 class="a7-event-item-title"><a href="<?php echo $event_link; ?>"><?php echo $event_title; ?></a></h2>

      <div class="a7-event-item-details"><?php echo tribe_events_event_schedule_details() . ' / ' . tribe_get_cost( null, true ); ?></div>

      <div class="a7-event-item-venue"><?php echo $event_location_name . ', ' . $event_location_address; ?></div>

    </div>

  </div>

</div>
