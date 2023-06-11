<?php

//Featured Slide Items to Display
$settings = array(
	'id'			=> 'featured-slide-items',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items to Display', 'wiguard' ),
	'description'	=> esc_html__( 'Enter number of slider items to display', 'wiguard' ),
	'default'		=> '3',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Featured Slider Items to Display Tab
$settings = array(
	'id'			=> 'featured-slide-tab',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items to Display Tab', 'wiguard' ),
	'description'	=> esc_html__( 'Enter number of slider items to display on tab', 'wiguard' ),
	'default'		=> '1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Featured Slider Items to Display on Mobile
$settings = array(
	'id'			=> 'featured-slide-mobile',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items to Display on Mobile', 'wiguard' ),
	'description'	=> esc_html__( 'Enter items to display on mobile view. Example 1', 'wiguard' ),
	'default'		=> '1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Featured Slider Items Scrollby
$settings = array(
	'id'			=> 'featured-slide-scrollby',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items Scrollby', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slider items scrollby. Example 1', 'wiguard' ),
	'default'		=> '1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Featured Slider Slide Autoplay
$settings = array(
	'id'			=> 'featured-slide-autoplay',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Autoplay', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide autoplay.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Featured Slider Slide Center
$settings = array(
	'id'			=> 'featured-slide-center',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Center', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide center.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Featured Slider Slide Duration
$settings = array(
	'id'			=> 'featured-slide-duration',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Slide Duration', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slide duration for each (in Milli Seconds). Example 5000', 'wiguard' ),
	'default'		=> '5000',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Featured Slider Slide Smart Speed
$settings = array(
	'id'			=> 'featured-slide-smartspeed',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Slide Smart Speed', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slide smart speed for each (in Milli Seconds). Example 250', 'wiguard' ),
	'default'		=> '250',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Featured Slider Infinite Loop
$settings = array(
	'id'			=> 'featured-slide-center',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Infinite Loop', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable infinite loop.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Featured Slider Slide Items Margin
$settings = array(
	'id'			=> 'featured-slide-margin',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Slide Items Margin', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slide item margin( item spacing ). Example 10', 'wiguard' ),
	'default'		=> '10',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Featured Slider Slide Pagination
$settings = array(
	'id'			=> 'featured-slide-pagination',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Pagination', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide pagination.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Featured Slider Slide Navigation
$settings = array(
	'id'			=> 'featured-slide-navigation',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Navigation', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide navigation.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Featured Slider Slide Auto Height
$settings = array(
	'id'			=> 'featured-slide-autoheight',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Auto Height', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide item auto height.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );