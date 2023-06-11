<?php
class CEAShortcodes {
	
	public function __construct(){
		add_shortcode( 'videoframe', array( $this, 'wiguard_video_iframe' ) );
		add_shortcode( 'video', array( $this, 'wiguard_video' ) );
		add_shortcode( 'videoframenon', array( $this, 'wiguard_video_iframe_non_param' ) );
		
		//Event Schortcode
		add_shortcode( 'wiguard_tab_events', array( $this, 'wiguardTabEvents' ) );
		add_shortcode( 'wiguard_tab_day_events', array( $this, 'wiguardTabDailyEvents' ) );
		add_shortcode( 'wiguard_tab_event', array( $this, 'wiguardTabEvent' ) );
    }
		
	public function wiguard_video_iframe( $atts ) {
		$atts = shortcode_atts( array(
			'url' => '',
			'height' => '',
			'width' => '',
			'params' => ''
		), $atts );
		return '<iframe width="'. esc_attr( $atts['width'] ) .'" height="'. esc_attr( $atts['height'] ) .'" src="'. esc_url( $atts['url'] ) .'?'. esc_attr( $atts['params'] ) .'" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
	}
	
	
	public function wiguard_video_iframe_non_param( $atts ) {
		$atts = shortcode_atts( array(
			'url' => '',
			'height' => '',
			'width' => '',
			'params' => '',
			'allowfullscreen' => ''
		), $atts );
		return '<iframe width="'. esc_attr( $atts['width'] ) .'" height="'. esc_attr( $atts['height'] ) .'" src="'. esc_url( $atts['url'] ) .'?'. esc_attr( $atts['params'] ) .'" '. esc_attr( $atts['allowfullscreen'] ) .'></iframe>';
	}
	
	public function wiguard_video( $atts ) {
		$atts = shortcode_atts( array(
			'url' => '',
			'height' => '',
			'width' => '',
		), $atts );
		
		return '<video class="wiguard-custom-video" width="'. esc_attr( $atts['width'] ) .'" height="'. esc_attr( $atts['height'] ) .'" preload="true" style="max-width:100%;">
                    <source src="'. esc_url( $atts['url'] ) .'" type="video/mp4">
                </video>';
	}
	
} // Shortcode class end
$wiguardsc = new CEAShortcodes;
