<?php

//Layout Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Layout', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Layout
$settings = array(
	'id'			=> 'footer-layout',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Footer Layout', 'wiguard' ),
	'description'	=> esc_html__( 'Choose footer layout boxed or wide.', 'wiguard' ),
	'choices'		=> array(
		'boxed'		=> esc_html__( 'Boxed', 'wiguard' ),
		'wide'		=> esc_html__( 'Wide', 'wiguard' )
	),
	'default'		=> 'wide',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Template
$settings = array(
	'id'			=> 'footer-template',
	'type'			=> 'radioimage',
	'title'			=> esc_html__( 'Footer Template', 'wiguard' ),
	'description'	=> esc_html__( 'Choose footer template. Current footer layout needed option values you can see after refresh this customizer page.', 'wiguard' ),
	'default'		=> '1',
	'items' 		=> array(
		'1'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/footer-layouts/1.jpg',
		'2'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/footer-layouts/2.jpg',
		'3'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/footer-layouts/3.jpg',
		'4'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/footer-layouts/4.jpg',
		'5'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/footer-layouts/5.jpg',
		'6'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/footer-layouts/6.jpg',
		'7'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/footer-layouts/7.jpg',
		'8'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/footer-layouts/8.jpg',
		'custom'=> WIGUARD_ADMIN_URL . '/customizer/assets/images/footer-layouts/custom.jpg'
	),
	'cols'			=> '1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Items
$settings = array(
	'id'			=> 'footer-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Footer Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed footer items drag from disabled and put enabled.', 'wiguard' ),
	'default' 		=> array(
		'Enabled'  => array(
			'footer-middle'	=> esc_html__( 'Footer Middle', 'wiguard' ),
			'footer-bottom'	=> esc_html__( 'Footer Bottom', 'wiguard' )
		),
		'disabled' => array(
			'footer-top' 	=> esc_html__( 'Footer Top', 'wiguard' )
		)
	),
	'required'		=> array( 'footer-template', '=', 'custom' ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Layout End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );

//Style Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Style', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Back to Top
$settings = array(
	'id'			=> 'back-to-top',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Back to Top', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable back to top icon.', 'wiguard' ),
	'default'		=> 1,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Back to Top Button Position
$settings = array(
	'id'			=> 'back-to-top-position',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Back to Top Button Position', 'wiguard' ),
	'description'	=> esc_html__( 'Choose position right/left for back to top button.', 'wiguard' ),
	'choices'		=> array(
		'right'		=> esc_html__( 'Right', 'wiguard' ),
		'left'		=> esc_html__( 'Left', 'wiguard' )
	),
	'default'		=> 'right',
	'required'		=> array( 'back-to-top', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Hidden Footer
$settings = array(
	'id'			=> 'hidden-footer',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Hidden Footer', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable hidden footer.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Link Color
$settings = array(
	'id'			=> 'footer-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Footer Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose footer general link color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Border
$settings = array(
	'id'			=> 'footer-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Footer Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Padding Option
$settings = array(
	'id'			=> 'footer-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Footer Padding Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Background
$settings = array(
	'id'			=> 'footer-background',
	'type'			=> 'background',
	'title'			=> esc_html__( 'Footer Background', 'wiguard' ),
	'description'	=> esc_html__( 'This is settings for footer background.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Background Overlay
$settings = array(
	'id'			=> 'footer-background-overlay',
	'type'			=> 'alpha',
	'title'			=> esc_html__( 'Footer Background Overlay', 'wiguard' ),
	'description'	=> esc_html__( 'Choose footer background overlay color and opacity.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Style End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );