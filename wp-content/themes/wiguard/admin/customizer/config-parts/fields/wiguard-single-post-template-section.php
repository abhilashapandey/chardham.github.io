<?php

//Layout Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Layout', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Option
$settings = array(
	'id'			=> 'single-post-page-title-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Page Title Option', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable page title.', 'wiguard' ),
	'default'		=> 1,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Items
$settings = array(
	'id'			=> 'template-single-post-pagetitle-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Page Title Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed items for page title wrap, drag from disabled and put enabled.', 'wiguard' ),
	'default' 		=> array(
		'disabled' => array(),
		'Left'  => array(
			'title' => esc_html__( 'Page Title Text', 'wiguard' ),
		),
		'Center' => array(),
		'Right'  => array(
			'breadcrumb'	=> esc_html__( 'Breadcrumb', 'wiguard' )
		)
	),
	'required'		=> array( 'single-post-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Archive Settings
$settings = array(
	'type'			=> 'section',
	'label'			=> esc_html__( 'Archive Settings', 'wiguard' ),
	'description'	=> esc_html__( 'This is settings for single post page layout, sidebar sticky and etc.', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Archive Template
$settings = array(
	'id'			=> 'single-post-page-template',
	'type'			=> 'radioimage',
	'title'			=> esc_html__( 'Archive Template', 'wiguard' ),
	'description'	=> esc_html__( 'Choose your current single post page template.', 'wiguard' ),
	'default'		=> 'right-sidebar',
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
	'id'			=> 'single-post-left-sidebar',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Left Sidebar', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing on left side.', 'wiguard' ),
	'default'		=> 'sidebar-1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Right Sidebar
$settings = array(
	'id'			=> 'single-post-right-sidebar',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Right Sidebar', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing on right side.', 'wiguard' ),
	'default'		=> 'sidebar-1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Full Width Wrap
$settings = array(
	'id'			=> 'single-post-full-wrap',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Full Width Wrap', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable to show or hide full width post wrapper.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Article Top Meta Items
$settings = array(
	'id'			=> 'single-post-topmeta-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Single Post Article Top Meta Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed single post article top meta items drag from disabled and put enabled part. ie: Left or Right.', 'wiguard' ),
	'default' 		=> array(
		'Left'  => array(
			'author'	=> esc_html__( 'Author', 'wiguard' )						
		),
		'Right'  => array(
			'date'		=> esc_html__( 'Date', 'wiguard' )
		),
		'disabled' => array(
			'social'	=> esc_html__( 'Social Share', 'wiguard' ),						
			'likes'		=> esc_html__( 'Likes', 'wiguard' ),
			'author'	=> esc_html__( 'Author', 'wiguard' ),
			'views'		=> esc_html__( 'Views', 'wiguard' ),
			'tag'		=> esc_html__( 'Tags', 'wiguard' ),
			'favourite'	=> esc_html__( 'Favourite', 'wiguard' ),						
			'comments'	=> esc_html__( 'Comments', 'wiguard' ),
			'category'	=> esc_html__( 'Category', 'wiguard' )
		)
	),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Article Bottom Meta Items
$settings = array(
	'id'			=> 'single-post-bottommeta-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Single Post Article Bottom Meta Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed single post article bottom meta items drag from disabled and put enabled part. ie: Left or Right.', 'wiguard' ),
	'default' 		=> array(
		'Left'  => array(
			'category'	=> esc_html__( 'Category', 'wiguard' ),
		),
		'Right'  => array(),
		'disabled' => array(
			'social'	=> esc_html__( 'Social Share', 'wiguard' ),
			'date'		=> esc_html__( 'Date', 'wiguard' ),						
			'social'	=> esc_html__( 'Social Share', 'wiguard' ),						
			'likes'		=> esc_html__( 'Likes', 'wiguard' ),
			'author'	=> esc_html__( 'Author', 'wiguard' ),
			'views'		=> esc_html__( 'Views', 'wiguard' ),
			'favourite'	=> esc_html__( 'Favourite', 'wiguard' ),
			'comments'	=> esc_html__( 'Comments', 'wiguard' ),
			'tag'		=> esc_html__( 'Tags', 'wiguard' )
		)
	),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Article Items
$settings = array(
	'id'			=> 'single-post-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Single Post Article Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed single post article items drag from disabled and put enabled part. Thumbnail part covers the post format either image/audio/video/gallery/quote/link.', 'wiguard' ),
	'default' 		=> array(
		'Enabled'  => array(
			'title'	=> esc_html__( 'Title', 'wiguard' ),
			'top-meta'	=> esc_html__( 'Top Meta', 'wiguard' ),
			'thumb'	=> esc_html__( 'Thumbnail', 'wiguard' ),
			'content'	=> esc_html__( 'Content', 'wiguard' ),
			'bottom-meta'	=> esc_html__( 'Bottom Meta', 'wiguard' ),
		),
		'disabled' => array()
	),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Article Overlay
$settings = array(
	'id'			=> 'single-post-overlay-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Single Post Article Overlay', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable single post article overlay.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Article Overlay Items
$settings = array(
	'id'			=> 'single-post-overlay-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Single Post Article Overlay Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed single post article overlay items drag from disabled and put enabled part.', 'wiguard' ),
	'default' 		=> array(
		'Enabled'  => array(
			'title'			=> esc_html__( 'Title', 'wiguard' ),
		),
		'disabled' => array(
			'top-meta'		=> esc_html__( 'Top Meta', 'wiguard' ),
			'bottom-meta'	=> esc_html__( 'Bottom Meta', 'wiguard' )
		)
	),
	'required'		=> array( 'single-post-overlay-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Page Items
$settings = array(
	'id'			=> 'single-post-page-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Single Post Page Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed single post items drag from disabled and put enabled part.', 'wiguard' ),
	'default' 		=> array(
		'Enabled'  => array(
			'post-items'	=> esc_html__( 'Post Items', 'wiguard' ),
			'author-info'	=> esc_html__( 'Author Info', 'wiguard' ),
			'post-nav'		=> esc_html__( 'Post Navigation', 'wiguard' ),
			'related-slider'=> esc_html__( 'Related Slider', 'wiguard' ),
			'comment'		=> esc_html__( 'Comment', 'wiguard' )
		),
		'disabled' => array()
	),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Settings End
$settings = array(
	'type'			=> 'section',
	'section_stat'	=> false
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

//Page Title Settings
$settings = array(
	'type'			=> 'section',
	'label'			=> esc_html__( 'Page Title Settings', 'wiguard' ),
	'description'	=> esc_html__( 'This is page title style settings shows only when page title option active.', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Font Color
$settings = array(
	'id'			=> 'template-single-post-color',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Font Color', 'wiguard' ),
	'description'	=> esc_html__( 'This is font color for current field.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'single-post-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Template  Link Color
$settings = array(
	'id'			=> 'template-single-post-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Single Post Template  Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose Single post title bar link color.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'single-post-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Template  Border
$settings = array(
	'id'			=> 'template-single-post-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Single Post Template  Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'single-post-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Template  Padding Option
$settings = array(
	'id'			=> 'template-single-post-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Single Post Template  Padding Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'single-post-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Template  Background
$settings = array(
	'id'			=> 'template-single-post-background-all',
	'type'			=> 'background',
	'title'			=> esc_html__( 'Single Post Template  Background', 'wiguard' ),
	'description'	=> esc_html__( 'This is settings for footer background.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'single-post-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Background Parallax
$settings = array(
	'id'			=> 'single-post-page-title-parallax',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Background Parallax', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable page title background parallax.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'single-post-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Background Video
$settings = array(
	'id'			=> 'single-post-page-title-bg',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Background Video', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable page title background video.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'single-post-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Background Video
$settings = array(
	'id'			=> 'single-post-page-title-video',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Page Title Background Video', 'wiguard' ),
	'description'	=> esc_html__( 'Set page title background video for page. Only allowed youtube video id. Example: UWF7dZTLW4c', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'single-post-page-title-bg', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Overlay
$settings = array(
	'id'			=> 'single-post-page-title-overlay',
	'type'			=> 'alpha',
	'title'			=> esc_html__( 'Page Title Overlay', 'wiguard' ),
	'description'	=> esc_html__( 'Choose page title overlay rgba color.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'single-post-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Items Option
$settings = array(
	'id'			=> 'template-single-post-page-title-items-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Page Title Items Option', 'wiguard' ),
	'description'	=> esc_html__( 'Enable to make page title items custom layout.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'single-post-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Settings End
$settings = array(
	'type'			=> 'section',
	'section_stat'	=> false,
	'required'		=> array( 'single-post-page-title-opt', '=', 1 )
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Article Skin Settings
$settings = array(
	'type'			=> 'section',
	'label'			=> esc_html__( 'Single Post Article Skin Settings', 'wiguard' ),
	'description'	=> esc_html__( 'This is skin settings for each single post article.', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Article Font Color
$settings = array(
	'id'			=> 'single-post-article-color',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Article Font Color', 'wiguard' ),
	'description'	=> esc_html__( 'This is font color for single post article.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Article Link Color
$settings = array(
	'id'			=> 'single-post-article-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Article Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose single post article link color for single post article.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Article Border
$settings = array(
	'id'			=> 'single-post-article-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Article Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Article Padding Option
$settings = array(
	'id'			=> 'single-post-article-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Article Padding Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Article Background
$settings = array(
	'id'			=> 'single-post-article-background',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Article Background Color', 'wiguard' ),
	'description'	=> esc_html__( 'This is background color for single post article.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Article Skin Settings End
$settings = array(
	'type'			=> 'section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Article Overlay Skin Settings
$settings = array(
	'type'			=> 'section',
	'label'			=> esc_html__( 'Single Post Article Overlay Skin Settings', 'wiguard' ),
	'description'	=> esc_html__( 'This is overlay skin settings for each single post article.', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Article Font Color
$settings = array(
	'id'			=> 'single-post-article-overlay-color',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Article Font Color', 'wiguard' ),
	'description'	=> esc_html__( 'This is font color for single post article.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Article Link Color
$settings = array(
	'id'			=> 'single-post-article-overlay-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Article Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose single post article overlay link color for single post article.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Article Border
$settings = array(
	'id'			=> 'single-post-article-overlay-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Article Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Article Padding Option
$settings = array(
	'id'			=> 'single-post-article-overlay-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Article Padding Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Article Background
$settings = array(
	'id'			=> 'single-post-article-overlay-background',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Article Background Color', 'wiguard' ),
	'description'	=> esc_html__( 'This is background color for single post article.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Article Overlay Skin Settings End
$settings = array(
	'type'			=> 'section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );

//Style End
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

//Post Format Settings Start
$settings = array(
	'type'			=> 'section',
	'label'			=> esc_html__( 'Post Format Settings', 'wiguard' ),
	'description'	=> esc_html__( 'This is post format settings for single post.', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Video Format
$settings = array(
	'id'			=> 'single-post-video-format',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Video Format', 'wiguard' ),
	'description'	=> esc_html__( 'Choose single post page video post format settings.', 'wiguard' ),
	'choices'		=> array(
		'onclick' 	=> esc_html__( 'On Click Run Video', 'wiguard' ),
		'overlay' 	=> esc_html__( 'Modal Box Video', 'wiguard' ),
		'direct' 	=> esc_html__( 'Direct Video', 'wiguard' )
	),
	'default'		=> 'onclick',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Quote Format
$settings = array(
	'id'			=> 'single-post-quote-format',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Quote Format', 'wiguard' ),
	'description'	=> esc_html__( 'Choose single post page quote post format settings.', 'wiguard' ),
	'choices'		=> array(
		'featured' 		=> esc_html__( 'Dark Overlay', 'wiguard' ),
		'theme-overlay' => esc_html__( 'Theme Overlay', 'wiguard' ),
		'theme' 		=> esc_html__( 'Theme Color Background', 'wiguard' ),
		'none' 			=> esc_html__( 'None', 'wiguard' )
	),
	'default'		=> 'featured',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Link Format
$settings = array(
	'id'			=> 'single-post-link-format',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Link Format', 'wiguard' ),
	'description'	=> esc_html__( 'Choose single post page link post format settings.', 'wiguard' ),
	'choices'		=> array(
		'featured' 		=> esc_html__( 'Dark Overlay', 'wiguard' ),
		'theme-overlay' => esc_html__( 'Theme Overlay', 'wiguard' ),
		'theme' 		=> esc_html__( 'Theme Color Background', 'wiguard' ),
		'none' 			=> esc_html__( 'None', 'wiguard' )
	),
	'default'		=> 'featured',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Gallery Format
$settings = array(
	'id'			=> 'single-post-gallery-format',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Gallery Format', 'wiguard' ),
	'description'	=> esc_html__( 'Choose single post page gallery post format settings.', 'wiguard' ),
	'choices'		=> array(
		'default'	=> esc_html__( 'Default Gallery', 'wiguard' ),
		'popup' 	=> esc_html__( 'Popup Gallery', 'wiguard' ),
		'grid' 		=> esc_html__( 'Grid Popup Gallery', 'wiguard' )
	),
	'default'		=> 'default',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Post Format Settings End
$settings = array(
	'type'			=> 'section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );

//Single Post Featured Slider
$settings = array(
	'id'			=> 'single-post-featured-slider',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Single Post Featured Slider', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable single post featured slider.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Sidebar Sticky
$settings = array(
	'id'			=> 'single-post-sidebar-sticky',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Sidebar Sticky', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable sidebar sticky.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Sidebar on Mobile
$settings = array(
	'id'			=> 'single-post-page-hide-sidebar',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Sidebar on Mobile', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable to show or hide sidebar on mobile.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Related Post Max Limit
$settings = array(
	'id'			=> 'related-max-posts',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Related Post Max Limit', 'wiguard' ),
	'description'	=> esc_html__( 'Enter related post maximum limit for get from posts query. Example 5', 'wiguard' ),
	'default'		=> '5',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Related Posts From
$settings = array(
	'id'			=> 'related-posts-filter',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Related Posts From', 'wiguard' ),
	'description'	=> esc_html__( 'Select related posts gets from category or tag.', 'wiguard' ),
	'choices'		=> array(
		'category'	=> esc_html__( 'Category', 'wiguard' ),
		'tag'		=> esc_html__( 'Tag', 'wiguard' )
	),
	'default'		=> 'category',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Advanced End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );