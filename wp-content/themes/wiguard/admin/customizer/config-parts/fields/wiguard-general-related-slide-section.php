<?php

//Related Slide Items to Display
$settings = array(
	'id'			=> 'related-slide-items',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items to Display', 'wiguard' ),
	'description'	=> esc_html__( 'Enter number of slider items to display', 'wiguard' ),
	'default'		=> '3',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Related Slider Items to Display Tab
$settings = array(
	'id'			=> 'related-slide-tab',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items to Display Tab', 'wiguard' ),
	'description'	=> esc_html__( 'Enter number of slider items to display on tab', 'wiguard' ),
	'default'		=> '1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Related Slider Items to Display on Mobile
$settings = array(
	'id'			=> 'related-slide-mobile',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items to Display on Mobile', 'wiguard' ),
	'description'	=> esc_html__( 'Enter items to display on mobile view. Example 1', 'wiguard' ),
	'default'		=> '1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Related Slider Items Scrollby
$settings = array(
	'id'			=> 'related-slide-scrollby',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items Scrollby', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slider items scrollby. Example 1', 'wiguard' ),
	'default'		=> '1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Related Slider Slide Autoplay
$settings = array(
	'id'			=> 'related-slide-autoplay',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Autoplay', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide autoplay.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Related Slider Slide Center
$settings = array(
	'id'			=> 'related-slide-center',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Center', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide center.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Related Slider Slide Duration
$settings = array(
	'id'			=> 'related-slide-duration',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Slide Duration', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slide duration for each (in Milli Seconds). Example 5000', 'wiguard' ),
	'default'		=> '5000',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Related Slider Slide Smart Speed
$settings = array(
	'id'			=> 'related-slide-smartspeed',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Slide Smart Speed', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slide smart speed for each (in Milli Seconds). Example 250', 'wiguard' ),
	'default'		=> '250',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Related Slider Infinite Loop
$settings = array(
	'id'			=> 'related-slide-center',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Infinite Loop', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable infinite loop.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Related Slider Slide Items Margin
$settings = array(
	'id'			=> 'related-slide-margin',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Slide Items Margin', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slide item margin( item spacing ). Example 10', 'wiguard' ),
	'default'		=> '10',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Related Slider Slide Pagination
$settings = array(
	'id'			=> 'related-slide-pagination',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Pagination', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide pagination.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Related Slider Slide Navigation
$settings = array(
	'id'			=> 'related-slide-navigation',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Navigation', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide navigation.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Related Slider Slide Auto Height
$settings = array(
	'id'			=> 'related-slide-autoheight',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Auto Height', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide item auto height.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );