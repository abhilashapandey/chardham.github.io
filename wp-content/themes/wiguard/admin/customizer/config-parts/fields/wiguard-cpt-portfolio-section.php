<?php

//Layout Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Layout', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Portfolio Template
$settings = array(
	'id'			=> 'portfolio-page-template',
	'type'			=> 'radioimage',
	'title'			=> esc_html__( 'Portfolio Template', 'wiguard' ),
	'description'	=> esc_html__( 'Choose your current portfolio single outer template.', 'wiguard' ),
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

//Left Sidebar
$settings = array(
	'id'			=> 'portfolio-left-sidebar',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Left Sidebar', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing on left side.', 'wiguard' ),
	'default'		=> 'sidebar-1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Right Sidebar
$settings = array(
	'id'			=> 'portfolio-right-sidebar',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Right Sidebar', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing on right side.', 'wiguard' ),
	'default'		=> 'sidebar-1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Meta Items
$settings = array(
	'id'			=> 'portfolio-meta-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Portfolio Meta Items for single page', 'wiguard' ),
	'description'	=> esc_html__( 'Drag & Drop portfolio meta items which are needed for single portfolio page.', 'wiguard' ),
	'default' 		=> array(
		'Enabled' 	=> array(
			'date'		=> esc_html__( 'Date', 'wiguard' ),
			'client'	=> esc_html__( 'Client', 'wiguard' ),
			'duration'	=> esc_html__( 'Duration', 'wiguard' ),
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

//Custom Post Type Portfolio Single Layouts
$settings = array(
	'id'			=> 'portfolio-layout',
	'type'			=> 'radioimage',
	'title'			=> esc_html__( 'Portfolio Single Layouts', 'wiguard' ),
	'description'	=> esc_html__( 'This is layout settings for portfolio single page.', 'wiguard' ),
	'default'		=> '1',
	'items' 		=> array(
		'1'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/portfolio-layouts/1.png',
		'2'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/portfolio-layouts/2.png',
		'3'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/portfolio-layouts/3.png',
		'4'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/portfolio-layouts/4.png'		
	),
	'cols'			=> '4',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Archive Layout Start
$settings = array(
	'type'			=> 'section',
	'label'			=> esc_html__( 'Portfolio Detail Labels', 'wiguard' ),
	'description'	=> esc_html__( 'This is layout settings for portfolio archive page.', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Archive Layout Grid Columns
$settings = array(
	'id'			=> 'portfolio-grid-cols',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Grid Columns', 'wiguard' ),
	'description'	=> esc_html__( 'Select grid columns for portfolio archive layout.', 'wiguard' ),
	'choices'		=> array(
		'2'	=> esc_html__( '2 Columns', 'wiguard' ),
		'3'	=> esc_html__( '3 Columns', 'wiguard' ),
		'4'	=> esc_html__( '4 Columns', 'wiguard' )
	),
	'default'		=> 'select',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Archive Layout Grid Gutter
$settings = array(
	'id'			=> 'portfolio-grid-gutter',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Portfolio Grid Gutter', 'wiguard' ),
	'description'	=> esc_html__( 'Enter grid gutter size. Example 20.', 'wiguard' ),
	'default'		=> '20',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Archive Layout Grid Type
$settings = array(
	'id'			=> 'portfolio-grid-type',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Grid Columns', 'wiguard' ),
	'description'	=> esc_html__( 'Select grid columns for portfolio archive layout.', 'wiguard' ),
	'choices'		=> array(
			'normal'	=> esc_html__( 'Normal Grid', 'wiguard' ),
			'isotope'	=> esc_html__( 'Isotope Grid', 'wiguard' )
		
	),
	'default'		=> 'isotope',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Archive Layout End
$settings = array(
	'type'			=> 'section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );

//Portfolio Title
$settings = array(
	'id'			=> 'portfolio-title-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Portfolio Title', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable page title on single portfolio page.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Layout End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Text Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Custom Text', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Detail Labels  - Client
$settings = array(
	'id'			=> 'portfolio-client-label',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Client', 'wiguard' ),
	'description'	=> esc_html__( 'Enter portfolio client label.', 'wiguard' ),
	'default'		=> 'Client',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Detail Labels  - Date
$settings = array(
	'id'			=> 'portfolio-date-label',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Date', 'wiguard' ),
	'description'	=> esc_html__( 'Enter portfolio date label.', 'wiguard' ),
	'default'		=> 'Date',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Detail Labels  - Duration
$settings = array(
	'id'			=> 'portfolio-duration-label',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Duration', 'wiguard' ),
	'description'	=> esc_html__( 'Enter portfolio duration label.', 'wiguard' ),
	'default'		=> 'Duration',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Detail Labels  - Estimation
$settings = array(
	'id'			=> 'portfolio-estimation-label',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Estimation', 'wiguard' ),
	'description'	=> esc_html__( 'Enter portfolio estimation label.', 'wiguard' ),
	'default'		=> 'Estimation',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Detail Labels  - Place
$settings = array(
	'id'			=> 'portfolio-place-label',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Place', 'wiguard' ),
	'description'	=> esc_html__( 'Enter portfolio place label.', 'wiguard' ),
	'default'		=> 'Place',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Detail Labels  - URL
$settings = array(
	'id'			=> 'portfolio-url-label',
	'type'			=> 'text',
	'title'			=> esc_html__( 'URL', 'wiguard' ),
	'description'	=> esc_html__( 'Enter portfolio url label.', 'wiguard' ),
	'default'		=> 'URL',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Detail Labels  - Category
$settings = array(
	'id'			=> 'portfolio-category-label',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Category', 'wiguard' ),
	'description'	=> esc_html__( 'Enter portfolio category label.', 'wiguard' ),
	'default'		=> 'Category',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Detail Labels  - Tags
$settings = array(
	'id'			=> 'portfolio-tags-label',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Tags', 'wiguard' ),
	'description'	=> esc_html__( 'Enter portfolio tags label.', 'wiguard' ),
	'default'		=> 'Tags',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Detail Labels  - Share
$settings = array(
	'id'			=> 'portfolio-share-label',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Share', 'wiguard' ),
	'description'	=> esc_html__( 'Enter portfolio share label.', 'wiguard' ),
	'default'		=> 'Share',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Text End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );

//Advanced Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Advanced', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Slug
$settings = array(
	'id'			=> 'cpt-portfolio-slug',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Portfolio Slug', 'wiguard' ),
	'description'	=> esc_html__( 'Enter portfolio slug for register custom post type, after entered new slug click Publish button. Then go to WordPress Settings -> Permalinks -> Click save changes button to regenerate the permalinks.', 'wiguard' ),
	'default'		=> 'portfolio',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Category Slug
$settings = array(
	'id'			=> 'cpt-portfolio-category-slug',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Portfolio Category Slug', 'wiguard' ),
	'description'	=> esc_html__( 'Enter portfolio category slug for register custom post type, after entered new slug click Publish button. Then go to WordPress Settings -> Permalinks -> Click save changes button to regenerate the permalinks.', 'wiguard' ),
	'default'		=> 'portfolio-category',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Tag Slug
$settings = array(
	'id'			=> 'cpt-portfolio-tag-slug',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Portfolio Tag Slug', 'wiguard' ),
	'description'	=> esc_html__( 'Enter portfolio tag slug for register custom post type, after entered new slug click Publish button. Then go to WordPress Settings -> Permalinks -> Click save changes button to regenerate the permalinks.', 'wiguard' ),
	'default'		=> 'portfolio-tag',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Sidebar on Mobile
$settings = array(
	'id'			=> 'portfolio-page-hide-sidebar',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Sidebar on Mobile', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable to show or hide sidebar on mobile.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Related Slider
$settings = array(
	'id'			=> 'portfolio-related-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Related Slider', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable portfolio related slider.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Related Sliders Settings Start
$settings = array(
	'type'			=> 'section',
	'label'			=> esc_html__( 'Related Sliders Settings', 'wiguard' ),
	'description'	=> esc_html__( 'Settings for related sliders in single portfolio page.', 'wiguard' ),
	'section_stat'	=> true,
	'required'		=> array( 'portfolio-related-opt', '=', 1 )
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Related Slider Items to Display
$settings = array(
	'id'			=> 'portfolio-related-slide-items',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items to Display', 'wiguard' ),
	'description'	=> esc_html__( 'Enter number of slider items to display', 'wiguard' ),
	'default'		=> '3',
	'required'		=> array( 'portfolio-related-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Related Slider Items to Display Tab
$settings = array(
	'id'			=> 'portfolio-related-slide-tab',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items to Display Tab', 'wiguard' ),
	'description'	=> esc_html__( 'Enter number of slider items to display on tab', 'wiguard' ),
	'default'		=> '1',
	'required'		=> array( 'portfolio-related-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Related Slider Items to Display on Mobile
$settings = array(
	'id'			=> 'portfolio-related-slide-mobile',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items to Display on Mobile', 'wiguard' ),
	'description'	=> esc_html__( 'Enter items to display on mobile view. Example 1', 'wiguard' ),
	'default'		=> '1',
	'required'		=> array( 'portfolio-related-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Related Slider Items Scrollby
$settings = array(
	'id'			=> 'portfolio-related-slide-scrollby',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items Scrollby', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slider items scrollby. Example 1', 'wiguard' ),
	'default'		=> '1',
	'required'		=> array( 'portfolio-related-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Related Slider Slide Autoplay
$settings = array(
	'id'			=> 'portfolio-related-slide-autoplay',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Autoplay', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide autoplay.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'portfolio-related-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Related Slider Slide Center
$settings = array(
	'id'			=> 'portfolio-related-slide-center',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Center', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide center.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'portfolio-related-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Related Slider Slide Duration
$settings = array(
	'id'			=> 'portfolio-related-slide-duration',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Slide Duration', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slide duration for each (in Milli Seconds). Example 5000', 'wiguard' ),
	'default'		=> '5000',
	'required'		=> array( 'portfolio-related-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Related Slider Slide Smart Speed
$settings = array(
	'id'			=> 'portfolio-related-slide-smartspeed',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Slide Smart Speed', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slide smart speed for each (in Milli Seconds). Example 250', 'wiguard' ),
	'default'		=> '250',
	'required'		=> array( 'portfolio-related-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Related Slider Infinite Loop
$settings = array(
	'id'			=> 'portfolio-related-slide-center',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Infinite Loop', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable infinite loop.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'portfolio-related-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Related Slider Slide Items Margin
$settings = array(
	'id'			=> 'portfolio-related-slide-margin',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Slide Items Margin', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slide item margin( item spacing ). Example 10', 'wiguard' ),
	'default'		=> '10',
	'required'		=> array( 'portfolio-related-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Related Slider Slide Pagination
$settings = array(
	'id'			=> 'portfolio-related-slide-pagination',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Pagination', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide pagination.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'portfolio-related-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Related Slider Slide Navigation
$settings = array(
	'id'			=> 'portfolio-related-slide-navigation',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Navigation', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide navigation.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'portfolio-related-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Related Slider Slide Auto Height
$settings = array(
	'id'			=> 'portfolio-related-slide-autoheight',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Auto Height', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide item auto height.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'portfolio-related-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Related Sliders Settings End
$settings = array(
	'type'			=> 'section',
	'section_stat'	=> false,
	'required'		=> array( 'portfolio-related-opt', '=', 1 )
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Single Page Sliders Option
$settings = array(
	'id'			=> 'portfolio-single-slider-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Portfolio Single Slider Option', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable portfolio single page slider.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Single Page Sliders Settings Start
$settings = array(
	'type'			=> 'section',
	'label'			=> esc_html__( 'Single Page Sliders Settings', 'wiguard' ),
	'description'	=> esc_html__( 'Settings for single page sliders in single portfolio page.', 'wiguard' ),
	'section_stat'	=> true,
	'required'		=> array( 'portfolio-single-slider-opt', '=', 1 )
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Single Page Slider Items to Display
$settings = array(
	'id'			=> 'portfolio-single-slide-items',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items to Display', 'wiguard' ),
	'description'	=> esc_html__( 'Enter number of slider items to display', 'wiguard' ),
	'default'		=> '3',
	'required'		=> array( 'portfolio-single-slider-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Single Page Slider Items to Display Tab
$settings = array(
	'id'			=> 'portfolio-single-slide-tab',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items to Display Tab', 'wiguard' ),
	'description'	=> esc_html__( 'Enter number of slider items to display on tab', 'wiguard' ),
	'default'		=> '1',
	'required'		=> array( 'portfolio-single-slider-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Single Page Slider Items to Display on Mobile
$settings = array(
	'id'			=> 'portfolio-single-slide-mobile',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items to Display on Mobile', 'wiguard' ),
	'description'	=> esc_html__( 'Enter items to display on mobile view. Example 1', 'wiguard' ),
	'default'		=> '1',
	'required'		=> array( 'portfolio-single-slider-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Single Page Slider Items Scrollby
$settings = array(
	'id'			=> 'portfolio-single-slide-scrollby',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Items Scrollby', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slider items scrollby. Example 1', 'wiguard' ),
	'default'		=> '1',
	'required'		=> array( 'portfolio-single-slider-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Single Page Slider Slide Autoplay
$settings = array(
	'id'			=> 'portfolio-single-slide-autoplay',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Autoplay', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide autoplay.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'portfolio-single-slider-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Single Page Slider Slide Center
$settings = array(
	'id'			=> 'portfolio-single-slide-center',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Center', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide center.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'portfolio-single-slider-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Single Page Slider Slide Duration
$settings = array(
	'id'			=> 'portfolio-single-slide-duration',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Slide Duration', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slide duration for each (in Milli Seconds). Example 5000', 'wiguard' ),
	'default'		=> '5000',
	'required'		=> array( 'portfolio-single-slider-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Single Page Slider Slide Smart Speed
$settings = array(
	'id'			=> 'portfolio-single-slide-smartspeed',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Slide Smart Speed', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slide smart speed for each (in Milli Seconds). Example 250', 'wiguard' ),
	'default'		=> '250',
	'required'		=> array( 'portfolio-single-slider-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Single Page Slider Infinite Loop
$settings = array(
	'id'			=> 'portfolio-single-slide-center',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Infinite Loop', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable infinite loop.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'portfolio-single-slider-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Single Page Slider Slide Items Margin
$settings = array(
	'id'			=> 'portfolio-single-slide-margin',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Slide Items Margin', 'wiguard' ),
	'description'	=> esc_html__( 'Enter slide item margin( item spacing ). Example 10', 'wiguard' ),
	'default'		=> '10',
	'required'		=> array( 'portfolio-single-slider-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Single Page Slider Slide Pagination
$settings = array(
	'id'			=> 'portfolio-single-slide-pagination',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Pagination', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide pagination.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'portfolio-single-slider-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Single Page Slider Slide Navigation
$settings = array(
	'id'			=> 'portfolio-single-slide-navigation',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Navigation', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide navigation.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'portfolio-single-slider-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Single Page Slider Slide Auto Height
$settings = array(
	'id'			=> 'portfolio-single-slide-autoheight',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Slide Auto Height', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable slide item auto height.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'portfolio-single-slider-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Portfolio Single Page Sliders Settings End
$settings = array(
	'type'			=> 'section',
	'section_stat'	=> false,
	'required'		=> array( 'portfolio-single-slider-opt', '=', 1 )
);
WiguardCustomizerConfig::buildFields( $settings );

//Advanced End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );