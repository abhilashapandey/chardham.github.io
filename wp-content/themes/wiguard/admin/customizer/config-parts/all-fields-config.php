<?php

//Text
$settings = array(
	'id'			=> 'ajax-trigger-text-test',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Text Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is text field', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 0,
	'instant'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Textarea
$settings = array(
	'id'			=> 'ajax-trigger-textarea-test',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Textarea Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is textarea field', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 0,
	'instant'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Select
$settings = array(
	'id'			=> 'ajax-trigger-select-test',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Select Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is select field', 'wiguard' ),
	'choices'		=> array(
		'boxed'		=> esc_html__( 'Boxed', 'wiguard' ),
		'wide'		=> esc_html__( 'Wide', 'wiguard' )
	),
	'default'		=> 'wide',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Color
$settings = array(
	'id'			=> 'ajax-trigger-color-test',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Color Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is color field', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Image
$settings = array(
	'id'			=> 'ajax-trigger-image-test',
	'type'			=> 'image',
	'title'			=> esc_html__( 'Image Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is image field', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Alpha Color
$settings = array(
	'id'			=> 'ajax-trigger-alpha-test',
	'type'			=> 'alpha',
	'title'			=> esc_html__( 'Alpha Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is alpha field', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Background
$settings = array(
	'id'			=> 'ajax-trigger-bg-test',
	'type'			=> 'background',
	'title'			=> esc_html__( 'Background Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is background field', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Border
$settings = array(
	'id'			=> 'ajax-trigger-border-test',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Border Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is border field', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Dimension
$settings = array(
	'id'			=> 'ajax-trigger-dimension-test',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Dimension Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is dimension field', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Links
$settings = array(
	'id'			=> 'ajax-trigger-link-color-test',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Link Color Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is link color field', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Multi Check
$settings = array(
	'id'			=> 'ajax-trigger-multi-check-test',
	'type'			=> 'multicheck',
	'title'			=> esc_html__( 'Multi Check Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is multi check field', 'wiguard' ),
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

//Radio Image
$settings = array(
	'id'			=> 'ajax-trigger-radio-image-test',
	'type'			=> 'radioimage',
	'title'			=> esc_html__( 'Radio Image Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is radio image field', 'wiguard' ),
	'default'		=> 'no-sidebar',
	'items' 		=> array(
		'no-sidebar'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/page-layouts/1.png',
		'right-sidebar'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/page-layouts/2.png',
		'left-sidebar'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/page-layouts/3.png',
		'both-sidebar'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/page-layouts/4.png'		
	),
	'cols'			=> '4',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Sidebars
$settings = array(
	'id'			=> 'ajax-trigger-sidebars-test',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Sidebar Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is sidebar field', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Toggle Switch
$settings = array(
	'id'			=> 'ajax-trigger-toggle-test',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Toggle Switch Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is toggle switch field', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Pages
$settings = array(
	'id'			=> 'ajax-trigger-pages-test',
	'type'			=> 'pages',
	'title'			=> esc_html__( 'Pages Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is pages field', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Height Width
$settings = array(
	'id'			=> 'ajax-trigger-hw-test',
	'type'			=> 'hw',
	'title'			=> esc_html__( 'Height Width Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is height width field', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Fonts
$settings = array(
	'id'			=> 'ajax-trigger-fonts-test',
	'type'			=> 'fonts',
	'title'			=> esc_html__( 'Google Fonts Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is fonts field', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Drag Drop
$settings = array(
	'id'			=> 'ajax-trigger-dd-test',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Drag Drop Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is drag and drop field.', 'wiguard' ),
	'default' 		=> array(
		'Left' 	=> array(
			'date'		=> esc_html__( 'Date', 'wiguard' ),
			'client'	=> esc_html__( 'Client', 'wiguard' ),
			'duration'	=> esc_html__( 'Duration', 'wiguard' )		
		),
		'Right' 	=> array(
			'category'	=> esc_html__( 'Category', 'wiguard' ),
			'tag'		=> esc_html__( 'Tags', 'wiguard' ),
			'share'		=> esc_html__( 'Share', 'wiguard' )			
		),
		'Disabled' 	=> array(
			'estimation'=> esc_html__( 'Estimation', 'wiguard' ),
			'url'		=> esc_html__( 'Url', 'wiguard' ),
			'place'		=> esc_html__( 'Place', 'wiguard' )
		)
	),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Export
$settings = array(
	'id'			=> 'ajax-trigger-export-test',
	'type'			=> 'export',
	'title'			=> esc_html__( 'Export Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is export field', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Import
$settings = array(
	'id'			=> 'ajax-trigger-import-test',
	'type'			=> 'import',
	'title'			=> esc_html__( 'Import Field', 'wiguard' ),
	'description'	=> esc_html__( 'This is import field', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Section Start
$settings = array(
	'type'			=> 'section',
	'label'			=> esc_html__( 'Options Section Title', 'wiguard' ),
	'description'	=> esc_html__( 'This is inside option section description.', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Section End
$settings = array(
	'type'			=> 'section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Label Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Header Label Settings', 'wiguard' ),
	'description'	=> esc_html__( 'Click to edit address label settings.', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Label End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );