<?php

//Custom Post Types
$settings = array(
	'id'			=> 'cpt-opts',
	'type'			=> 'multicheck',
	'title'			=> esc_html__( 'Custom Post Types', 'wiguard' ),
	'description'	=> esc_html__( 'Enable the custom post types which are need, once done save theme options button. Then refresh page, you can see the enabled CPT options are showing sub level.', 'wiguard' ),
	'default'		=> '',
	'items' 		=> array(
		'portfolio'	    => esc_html__( 'Portfolio', 'wiguard' ),
		'team'	        => esc_html__( 'Team', 'wiguard' ),
		'testimonial'	=> esc_html__( 'Testimonial', 'wiguard' ),
		'events'	    => esc_html__( 'Events', 'wiguard' ),
		'services'	    => esc_html__( 'Services', 'wiguard' ),
	),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );