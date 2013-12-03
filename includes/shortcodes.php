<?php

function sc_events_calendar_shortcode( $atts, $content = null ) {

	return '<div id="sc_calendar_wrap">' . sc_get_events_calendar() . '</div>';
}
add_shortcode( 'sc_events_calendar', 'sc_events_calendar_shortcode' );

function sc_events_list_shortcode( $atts, $content = null ) {
	return '<div id="sc_events_list_wrap">' . sc_get_events_list() . '</div>';
}
add_shortcode( 'sc_events_list', 'sc_events_list_shortcode' );
