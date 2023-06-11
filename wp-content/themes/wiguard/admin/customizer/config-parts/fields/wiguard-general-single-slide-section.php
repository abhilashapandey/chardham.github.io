<?php

//Single Post Slide Items to Display
$settings = array(
	'id'			=> 'single-slide-items',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items to Display', 'wiguard' ),
	'description'	=> esc_html__( 'Enter number of slider items to display', 'wiguard' ),
	'default'		=> '3',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Slider Items to Display Tab
$settings = array(
	'id'			=> 'single-slide-tab',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items to Display Tab', 'wiguard' ),
	'description'	=> esc_html__( 'Enter number of slider items to display on tab', 'wiguard' ),
	'default'		=> '1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Slider Items to Display on Mobile
$settings = array(
	'id'			=> 'single-slide-mobile',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items to Display on Mobile', 'wiguard' ),
	'description'	=> esc_html__( 'Enter items to display on mobile view. Example 1', 'wiguard' ),
	'default'		=> '1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Slider Items Scrollby
$settings = array(
	'id'			=> 'single-slide-scrollby',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items Scrollby', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slider items scrollby. Example 1', 'wiguard' ),
	'default'		=> '1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Slider Slide Autoplay
$settings = array(
	'id'			=> 'single-slide-autoplay',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Autoplay', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide autoplay.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Slider Slide Center
$settings = array(
	'id'			=> 'single-slide-center',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Center', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide center.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Slider Slide Duration
$settings = array(
	'id'			=> 'single-slide-duration',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Slide Duration', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slide duration for each (in Milli Seconds). Example 5000', 'wiguard' ),
	'default'		=> '5000',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Slider Slide Smart Speed
$settings = array(
	'id'			=> 'single-slide-smartspeed',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Slide Smart Speed', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slide smart speed for each (in Milli Seconds). Example 250', 'wiguard' ),
	'default'		=> '250',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Slider Infinite Loop
$settings = array(
	'id'			=> 'single-slide-center',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Infinite Loop', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable infinite loop.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Slider Slide Items Margin
$settings = array(
	'id'			=> 'single-slide-margin',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Slide Items Margin', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slide item margin( item spacing ). Example 10', 'wiguard' ),
	'default'		=> '10',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Slider Slide Pagination
$settings = array(
	'id'			=> 'single-slide-pagination',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Pagination', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide pagination.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Slider Slide Navigation
$settings = array(
	'id'			=> 'single-slide-navigation',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Navigation', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide navigation.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Slider Slide Auto Height
$settings = array(
	'id'			=> 'single-slide-autoheight',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Auto Height', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide item auto height.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );