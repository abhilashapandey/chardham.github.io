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
	'id'			=> 'blog-page-title-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Page Title Option', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable page title.', 'wiguard' ),
	'default'		=> 1,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Items
$settings = array(
	'id'			=> 'template-blog-pagetitle-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Page Title Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed items for page title wrap, drag from disabled and put enabled.', 'wiguard' ),
	'default' 		=> array(
		'disabled' => array(
			'description' => esc_html__( 'Page Title Description', 'wiguard' )
		),
		'Left'  => array(
			'title' => esc_html__( 'Page Title Text', 'wiguard' ),
		),
		'Center' => array(),
		'Right'  => array(
			'breadcrumb'	=> esc_html__( 'Breadcrumb', 'wiguard' )
		)
	),
	'required'		=> array( 'blog-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Blog Settings
$settings = array(
	'type'			=> 'section',
	'label'			=> esc_html__( 'Blog Settings', 'wiguard' ),
	'description'	=> esc_html__( 'This is settings for blog page layout, sidebar sticky and etc.', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Blog Template
$settings = array(
	'id'			=> 'blog-page-template',
	'type'			=> 'radioimage',
	'title'			=> esc_html__( 'Blog Template', 'wiguard' ),
	'description'	=> esc_html__( 'Choose your current blog page template.', 'wiguard' ),
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
	'id'			=> 'blog-left-sidebar',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Left Sidebar', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing on left side.', 'wiguard' ),
	'default'		=> 'sidebar-1',
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Right Sidebar
$settings = array(
	'id'			=> 'blog-right-sidebar',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Right Sidebar', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing on right side.', 'wiguard' ),
	'default'		=> 'sidebar-1',
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Blog Post Template
$settings = array(
	'id'			=> 'blog-post-template',
	'type'			=> 'radioimage',
	'title'			=> esc_html__( 'Blog Post Template', 'wiguard' ),
	'description'	=> esc_html__( 'Choose your current blog post template.', 'wiguard' ),
	'default'		=> 'standard',
	'items' 		=> array(
		'standard'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/post-layouts/1.png',
		'grid'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/post-layouts/2.png',
		'list'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/post-layouts/3.png'		
	),
	'cols'			=> '3',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Top Standard Post
$settings = array(
	'id'			=> 'blog-top-standard-post',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Top Standard Post', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable to show top post layout standard others selected layout.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Grid Columns
$settings = array(
	'id'			=> 'blog-grid-cols',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Grid Columns', 'wiguard' ),
	'description'	=> esc_html__( 'Select grid columns.', 'wiguard' ),
	'choices'		=> array(
		'4'		=> esc_html__( '4 Columns', 'wiguard' ),
		'3'		=> esc_html__( '3 Columns', 'wiguard' ),
		'2'		=> esc_html__( '2 Columns', 'wiguard' ),
	),
	'default'		=> '2',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Blog Post Grid Gutter
$settings = array(
	'id'			=> 'blog-grid-gutter',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Blog Post Grid Gutter', 'wiguard' ),
	'description'	=> esc_html__( 'Enter grid gutter size. Example 20', 'wiguard' ),
	'default'		=> '30',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Grid Type
$settings = array(
	'id'			=> 'blog-grid-type',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Grid Type', 'wiguard' ),
	'description'	=> esc_html__( 'Select grid type normal or isotope.', 'wiguard' ),
	'choices'		=> array(
		'normal'		=> esc_html__( 'Normal Grid', 'wiguard' ),
		'isotope'		=> esc_html__( 'Isotope Grid', 'wiguard' ),
	),
	'default'		=> 'normal',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Infinite Scroll
$settings = array(
	'id'			=> 'blog-infinite-scroll',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Infinite Scroll', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable infinite scroll for blog post.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Post Excerpt Length
$settings = array(
	'id'			=> 'blog-excerpt',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Post Excerpt Length', 'wiguard' ),
	'description'	=> esc_html__( 'Set blog post excerpt length. Example 15', 'wiguard' ),
	'default'		=> '15',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Blog Post Top Meta Items
$settings = array(
	'id'			=> 'blog-topmeta-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Blog Post Top Meta Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed blog post top meta items drag from disabled and put enabled part. ie: Left or Right.', 'wiguard' ),
	'default' 		=> array(
		'Left'  => array(
			'date'		=> esc_html__( 'Date', 'wiguard' )
		),
		'Right'  => array(
			'category'	=> esc_html__( 'Category', 'wiguard' )
		),
		'disabled' => array(
			'social'	=> esc_html__( 'Social Share', 'wiguard' ),
			'comments'	=> esc_html__( 'Comments', 'wiguard' ),
			'likes'		=> esc_html__( 'Likes', 'wiguard' ),
			'author'	=> esc_html__( 'Author', 'wiguard' ),
			'views'		=> esc_html__( 'Views', 'wiguard' ),
			'more'		=> esc_html__( 'Read More', 'wiguard' ),
			'favourite'	=> esc_html__( 'Favourite', 'wiguard' )
		)
	),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Blog Post Bottom Meta Items
$settings = array(
	'id'			=> 'blog-bottommeta-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Blog Post Bottom Meta Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed blog post bottom meta items drag from disabled and put enabled part. ie: Left or Right.', 'wiguard' ),
	'default' 		=> array(
		'Left'  => array(
			'more'		=> esc_html__( 'Read More', 'wiguard' ),
		),
		'Right'  => array(),
		'disabled' => array(
			'comments'	=> esc_html__( 'Comments', 'wiguard' ),
			'category'	=> esc_html__( 'Category', 'wiguard' ),
			'social'	=> esc_html__( 'Social Share', 'wiguard' ),
			'comments'	=> esc_html__( 'Comments', 'wiguard' ),
			'likes'		=> esc_html__( 'Likes', 'wiguard' ),
			'author'	=> esc_html__( 'Author', 'wiguard' ),
			'views'		=> esc_html__( 'Views', 'wiguard' ),
			'date'		=> esc_html__( 'Date', 'wiguard' ),
			'favourite'	=> esc_html__( 'Favourite', 'wiguard' )
		)
	),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Blog Post Items
$settings = array(
	'id'			=> 'blog-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Blog Post Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed blog post items drag from disabled and put enabled part. Thumbnail part covers the post format either image/audio/video/gallery/quote/link.', 'wiguard' ),
	'default' 		=> array(
		'Enabled'  		=> array(
			'title'			=> esc_html__( 'Title', 'wiguard' ),
			'top-meta'		=> esc_html__( 'Top Meta', 'wiguard' ),
			'thumb'			=> esc_html__( 'Thumbnail', 'wiguard' ),
			'content'		=> esc_html__( 'Content', 'wiguard' ),
			'bottom-meta'	=> esc_html__( 'Bottom Meta', 'wiguard' )
		),
		'disabled' => array()
	),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Blog Post Overlay
$settings = array(
	'id'			=> 'blog-overlay-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Blog Post Overlay', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable blog post overlay.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Blog Post Overlay Items
$settings = array(
	'id'			=> 'blog-overlay-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Blog Post Overlay Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed blog post overlay items drag from disabled and put enabled part.', 'wiguard' ),
	'default' 		=> array(
		'Enabled'  	=> array(
			'title'			=> esc_html__( 'Title', 'wiguard' ),
		),
		'disabled' => array(
			'top-meta'		=> esc_html__( 'Top Meta', 'wiguard' ),
			'bottom-meta'	=> esc_html__( 'Bottom Meta', 'wiguard' )
		)
	),
	'required'		=> array( 'blog-overlay-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Blog Settings End
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
	'section_stat'	=> true,
);
WiguardCustomizerConfig::buildFields( $settings );

//Font Color
$settings = array(
	'id'			=> 'template-blog-color',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Font Color', 'wiguard' ),
	'description'	=> esc_html__( 'This is font color for current field.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'blog-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Blog Template Link Color
$settings = array(
	'id'			=> 'template-blog-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Blog Template Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose Blog template color.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'blog-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Blog Template Border
$settings = array(
	'id'			=> 'template-blog-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Blog Template Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'blog-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Blog Template Padding Option
$settings = array(
	'id'			=> 'template-blog-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Blog Template Padding Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'blog-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Blog Template Background
$settings = array(
	'id'			=> 'template-blog-background-all',
	'type'			=> 'background',
	'title'			=> esc_html__( 'Blog Template Background', 'wiguard' ),
	'description'	=> esc_html__( 'This is settings for footer background.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'blog-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Background Parallax
$settings = array(
	'id'			=> 'blog-page-title-parallax',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Background Parallax', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable page title background parallax.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'blog-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Background Video
$settings = array(
	'id'			=> 'blog-page-title-bg',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Background Video', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable page title background video.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'blog-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Background Video
$settings = array(
	'id'			=> 'blog-page-title-video',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Page Title Background Video', 'wiguard' ),
	'description'	=> esc_html__( 'Set page title background video for page. Only allowed youtube video id. Example: UWF7dZTLW4c', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'blog-page-title-bg', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Overlay
$settings = array(
	'id'			=> 'blog-page-title-overlay',
	'type'			=> 'alpha',
	'title'			=> esc_html__( 'Page Title Overlay', 'wiguard' ),
	'description'	=> esc_html__( 'Choose page title overlay rgba color.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'blog-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Settings End
$settings = array(
	'type'			=> 'section',
	'section_stat'	=> false,
	'required'		=> array( 'blog-page-title-opt', '=', 1 )
);
WiguardCustomizerConfig::buildFields( $settings );

//Blog Article Skin Settings
$settings = array(
	'type'			=> 'section',
	'label'			=> esc_html__( 'Blog Article Skin Settings', 'wiguard' ),
	'description'	=> esc_html__( 'This is skin settings for each blog article.', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Article Font Color
$settings = array(
	'id'			=> 'blog-article-color',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Article Font Color', 'wiguard' ),
	'description'	=> esc_html__( 'This is font color for blog article.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Article Link Color
$settings = array(
	'id'			=> 'blog-article-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Article Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose Article Link color for blog article.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Article Border
$settings = array(
	'id'			=> 'blog-article-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Article Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Article Padding Option
$settings = array(
	'id'			=> 'blog-article-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Article Padding Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Article Background Color
$settings = array(
	'id'			=> 'blog-article-background',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Article Background Color', 'wiguard' ),
	'description'	=> esc_html__( 'This is background color for blog article.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Blog Article Skin Settings End
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

//Custom Text Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Custom Text', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Post Read More Text
$settings = array(
	'id'			=> 'blog-more-text',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Post Read More Text', 'wiguard' ),
	'description'	=> esc_html__( 'Set blog post read more text. Example Read More', 'wiguard' ),
	'default'		=> esc_html__( 'Read More', 'wiguard' ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Blog Page Title
$settings = array(
	'id'			=> 'blog-page-title',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Blog Page Title', 'wiguard' ),
	'description'	=> esc_html__( 'This is a title for blog page. HTML code allowed here.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1,
	//'instant'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Blog Page Description
$settings = array(
	'id'			=> 'blog-page-desc',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Blog Page Description', 'wiguard' ),
	'description'	=> esc_html__( 'This is description for blog page. HTML code allowed here.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 0,
	'instant'		=> 1
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

//Post Format Settings
$settings = array(
	'type'			=> 'section',
	'label'			=> esc_html__( 'Post Format Settings', 'wiguard' ),
	'description'	=> esc_html__( 'This is post format settings for blog.', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Video Format
$settings = array(
	'id'			=> 'blog-video-format',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Video Format', 'wiguard' ),
	'description'	=> esc_html__( 'Choose blog page video post format settings.', 'wiguard' ),
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
	'id'			=> 'blog-quote-format',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Quote Format', 'wiguard' ),
	'description'	=> esc_html__( 'Choose blog page quote post format settings.', 'wiguard' ),
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
	'id'			=> 'blog-link-format',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Link Format', 'wiguard' ),
	'description'	=> esc_html__( 'Choose blog page link post format settings.', 'wiguard' ),
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
	'id'			=> 'blog-gallery-format',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Gallery Format', 'wiguard' ),
	'description'	=> esc_html__( 'Choose blog page gallery post format settings.', 'wiguard' ),
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

//Blog Featured Slider
$settings = array(
	'id'			=> 'blog-featured-slider',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Blog Featured Slider', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable blog featured slider.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Sidebar Sticky
$settings = array(
	'id'			=> 'blog-sidebar-sticky',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Sidebar Sticky', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable sidebar sticky.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Sidebar on Mobile
$settings = array(
	'id'			=> 'blog-page-hide-sidebar',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Sidebar on Mobile', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable to show or hide sidebar on mobile.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Advanced End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );