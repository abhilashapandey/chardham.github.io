<?php
/* Wiguard Page Options */
$prefix = 'wiguard_post_';
$fields = array(
	array( 
		'label'	=> esc_html__( 'Post General Settings', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are single post general settings.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'General', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Post Layout', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose post layout for current post single view.', 'wiguard-core' ), 
		'id'	=> $prefix.'layout',
		'tab'	=> esc_html__( 'General', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'wide' => esc_html__( 'Wide', 'wiguard-core' ),
			'boxed' => esc_html__( 'Boxed', 'wiguard-core' )			
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Post Content Padding Option', 'wiguard-core' ),
		'id'	=> $prefix.'content_padding_opt',
		'tab'	=> esc_html__( 'General', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'		
	),
	array( 
		'label'	=> esc_html__( 'Post Content Padding', 'wiguard-core' ), 
		'desc'	=> esc_html__( 'Set the top/right/bottom/left padding of post content.', 'wiguard-core' ),
		'id'	=> $prefix.'content_padding',
		'tab'	=> esc_html__( 'General', 'wiguard-core' ),
		'type'	=> 'space',
		'required'	=> array( $prefix.'content_padding_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Post Template Option', 'wiguard-core' ),
		'id'	=> $prefix.'template_opt',
		'tab'	=> esc_html__( 'General', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'		
	),
	array( 
		'label'	=> esc_html__( 'Post Template', 'wiguard-core' ),
		'id'	=> $prefix.'template',
		'tab'	=> esc_html__( 'General', 'wiguard-core' ),
		'type'	=> 'image_select',
		'options' => array(
			'no-sidebar'	=> get_theme_file_uri( '/assets/images/page-layouts/1.png' ), 
			'right-sidebar'	=> get_theme_file_uri( '/assets/images/page-layouts/2.png' ), 
			'left-sidebar'	=> get_theme_file_uri( '/assets/images/page-layouts/3.png' ), 
			'both-sidebar'	=> get_theme_file_uri( '/assets/images/page-layouts/4.png' ), 
		),
		'default'	=> 'right-sidebar',
		'required'	=> array( $prefix.'template_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Left Sidebar', 'wiguard-core' ),
		'id'	=> $prefix.'left_sidebar',
		'tab'	=> esc_html__( 'General', 'wiguard-core' ),
		'type'	=> 'sidebar',
		'required'	=> array( $prefix.'template_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Right Sidebar', 'wiguard-core' ),
		'id'	=> $prefix.'right_sidebar',
		'tab'	=> esc_html__( 'General', 'wiguard-core' ),
		'type'	=> 'sidebar',
		'required'	=> array( $prefix.'template_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Sidebar On Mobile', 'wiguard-core' ),
		'id'	=> $prefix.'sidebar_mobile',
		'tab'	=> esc_html__( 'General', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'1' => esc_html__( 'Show', 'wiguard-core' ),
			'0' => esc_html__( 'Hide', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Featured Slider', 'wiguard-core' ),
		'id'	=> $prefix.'featured_slider',
		'tab'	=> esc_html__( 'General', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'1' => esc_html__( 'Enable', 'wiguard-core' ),
			'0' => esc_html__( 'Disable', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Full Width Wrap', 'wiguard-core' ),
		'id'	=> $prefix.'full_wrap',
		'tab'	=> esc_html__( 'General', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'1' => esc_html__( 'Enable', 'wiguard-core' ),
			'0' => esc_html__( 'Disable', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Post Items Option', 'wiguard-core' ),
		'id'	=> $prefix.'items_opt',
		'tab'	=> esc_html__( 'General', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'		
	),
	array( 
		'label'	=> esc_html__( 'Post Items', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Needed single post items drag from disabled and put enabled part.', 'wiguard-core' ),
		'id'	=> $prefix.'items',
		'tab'	=> esc_html__( 'General', 'wiguard-core' ),
		'type'	=> 'dragdrop_multi',
		'dd_fields' => array ( 
			'Enabled'  => array(
				'title' 	=> esc_html__( 'Title', 'wiguard-core' ),
				'top-meta'	=> esc_html__( 'Top Meta', 'wiguard-core' ),
				'thumb' 	=> esc_html__( 'Thumbnail', 'wiguard-core' ),
				'content' 	=> esc_html__( 'Content', 'wiguard-core' ),
				'bottom-meta'		=> esc_html__( 'Bottom Meta', 'wiguard-core' )
			),
			'disabled' => array()
		),
		'required'	=> array( $prefix.'items_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Post Overlay', 'wiguard-core' ),
		'id'	=> $prefix.'overlay_opt',
		'tab'	=> esc_html__( 'General', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'1' => esc_html__( 'Enable', 'wiguard-core' ),
			'0' => esc_html__( 'Disable', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Post Overlay Items', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Needed overlay post items drag from disabled and put enabled part.', 'wiguard-core' ),
		'id'	=> $prefix.'overlay_items',
		'tab'	=> esc_html__( 'General', 'wiguard-core' ),
		'type'	=> 'dragdrop_multi',
		'dd_fields' => array ( 
			'Enabled'  => array(
				'title' 	=> esc_html__( 'Title', 'wiguard-core' )
			),
			'disabled' => array(
				'top-meta'	=> esc_html__( 'Top Meta', 'wiguard-core' ),
				'bottom-meta'		=> esc_html__( 'Bottom Meta', 'wiguard-core' )
			)
		),
		'required'	=> array( $prefix.'overlay_opt', '1' )
	),
	array( 
		'label'	=> esc_html__( 'Post Page Items Option', 'wiguard-core' ),
		'id'	=> $prefix.'page_items_opt',
		'tab'	=> esc_html__( 'General', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'		
	),
	array( 
		'label'	=> esc_html__( 'Post Page Items', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Needed post page items drag from disabled and put enabled part.', 'wiguard-core' ),
		'id'	=> $prefix.'page_items',
		'tab'	=> esc_html__( 'General', 'wiguard-core' ),
		'type'	=> 'dragdrop_multi',
		'dd_fields' => array ( 
			'Enabled'  => array(
				'post-items' 	=> esc_html__( 'Post Items', 'wiguard-core' ),
				'author-info'	=> esc_html__( 'Author Info', 'wiguard-core' ),
				'related-slider'=> esc_html__( 'Related Slider', 'wiguard-core' ),
				'post-nav' 	=> esc_html__( 'Post Nav', 'wiguard-core' ),
				'comment' 	=> esc_html__( 'Comment', 'wiguard-core' )
			),
			'disabled' => array()
		),
		'default'	=> 'post-items,author-info,related-slider,post-nav,comment',
		'required'	=> array( $prefix.'page_items_opt', 'custom' )
	),
	//Header
	array( 
		'label'	=> esc_html__( 'Header General Settings', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header general settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Header Layout', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose post layout for current post header layout.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_layout',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'wide' => esc_html__( 'Wide', 'wiguard-core' ),
			'boxed' => esc_html__( 'Boxed', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Type', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose post layout for current post header type.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_type',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'default' => esc_html__( 'Default', 'wiguard-core' ),
			'left-sticky' => esc_html__( 'Left Sticky', 'wiguard-core' ),
			'right-sticky' => esc_html__( 'Right Sticky', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Background Image', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header background image for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'image',
		'id'	=> $prefix.'header_bg_img',
		'required'	=> array( $prefix.'header_type', 'default' )
	),
	array( 
		'label'	=> esc_html__( 'Header Items Options', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header items options for enable header drag and drop items.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_items_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Items', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header general items for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'dragdrop_multi',
		'id'	=> $prefix.'header_items',
		'dd_fields' => array ( 
			'Normal' => array( 
				'header-topbar' 	=> esc_html__( 'Topbar', 'wiguard-core' ),
				'header-logo'	=> esc_html__( 'Logo Bar', 'wiguard-core' )
			),
			'Sticky' => array( 
				'header-nav' 	=> esc_html__( 'Navbar', 'wiguard-core' )
			),
			'disabled' => array()
		),
		'required'	=> array( $prefix.'header_items_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Absolute Option', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header absolute to change header look transparent.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_absolute_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'1' => esc_html__( 'Enable', 'wiguard-core' ),
			'0' => esc_html__( 'Disable', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Sticky', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header sticky options.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_sticky_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'sticky' => esc_html__( 'Header Sticky Part', 'wiguard-core' ),
			'sticky-scroll' => esc_html__( 'Sticky Scroll Up', 'wiguard-core' ),
			'none' => esc_html__( 'None', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Top Bar', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header topbar settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Header Top Bar Options', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header items options for enable header drag and drop items.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_topbar_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Top Bar Height', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header topbar height for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'dimension',
		'id'	=> $prefix.'header_topbar_height',
		'property' => 'height',
		'required'	=> array( $prefix.'header_topbar_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Top Bar Sticky Height', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header topbar sticky height for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'dimension',
		'id'	=> $prefix.'header_topbar_sticky_height',
		'property' => 'height',
		'required'	=> array( $prefix.'header_topbar_opt', 'custom' )
	),
	array( 
		'label'	=> '',
		'desc'	=> esc_html__( 'These all are header topbar skin settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Header Top Bar Skin Settings', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header topbar skin settings options.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_topbar_skin_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Top Bar Font Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header topbar font color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'color',
		'id'	=> $prefix.'header_topbar_font',
		'required'	=> array( $prefix.'header_topbar_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Top Bar Background', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header topbar background color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'alpha_color',
		'id'	=> $prefix.'header_topbar_bg',
		'required'	=> array( $prefix.'header_topbar_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Top Bar Link Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header topbar link color settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'link_color',
		'id'	=> $prefix.'header_topbar_link',
		'required'	=> array( $prefix.'header_topbar_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Top Bar Border', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header topbar border settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'space',
		'color' => 1,
		'border_style' => 1,
		'id'	=> $prefix.'header_topbar_border',
		'required'	=> array( $prefix.'header_topbar_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Top Bar Padding', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header topbar padding settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'space',
		'id'	=> $prefix.'header_topbar_padding',
		'required'	=> array( $prefix.'header_topbar_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Top Bar Sticky Skin Settings', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header top bar sticky skin settings options.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_topbar_sticky_skin_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Top Bar Sticky Font Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header top bar sticky font color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'color',
		'id'	=> $prefix.'header_topbar_sticky_font',
		'required'	=> array( $prefix.'header_topbar_sticky_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Top Bar Sticky Background', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header top bar sticky background color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'alpha_color',
		'id'	=> $prefix.'header_topbar_sticky_bg',
		'required'	=> array( $prefix.'header_topbar_sticky_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Top Bar Sticky Link Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header top bar sticky link color settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'link_color',
		'id'	=> $prefix.'header_topbar_sticky_link',
		'required'	=> array( $prefix.'header_topbar_sticky_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Top Bar Sticky Border', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header top bar sticky border settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'space',
		'color' => 1,
		'border_style' => 1,
		'id'	=> $prefix.'header_topbar_sticky_border',
		'required'	=> array( $prefix.'header_topbar_sticky_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Top Bar Sticky Padding', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header top bar sticky padding settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'space',
		'id'	=> $prefix.'header_topbar_sticky_padding',
		'required'	=> array( $prefix.'header_topbar_sticky_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Top Bar Items Option', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header topbar items enable options.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_topbar_items_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Top Bar Items', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header topbar items for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'dragdrop_multi',
		'id'	=> $prefix.'header_topbar_items',
		'dd_fields' => array ( 
			'Left'  => array(
				'header-topbar-date' => esc_html__( 'Date', 'wiguard-core' ),						
			),
			'Center' => array(),
			'Right' => array(),
			'disabled' => array(
				'header-topbar-text-1'	=> esc_html__( 'Custom Text 1', 'wiguard-core' ),
				'header-topbar-text-2'	=> esc_html__( 'Custom Text 2', 'wiguard-core' ),
				'header-topbar-text-3'	=> esc_html__( 'Custom Text 3', 'wiguard-core' ),
				'header-topbar-menu'    => esc_html__( 'Top Bar Menu', 'wiguard-core' ),
				'header-topbar-social'	=> esc_html__( 'Social', 'wiguard-core' ),
				'header-topbar-search'	=> esc_html__( 'Search', 'wiguard-core' )
			)
		),
		'required'	=> array( $prefix.'header_topbar_items_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Logo Bar', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header logo bar settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Header Logo Bar Options', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header items options for enable header drag and drop items.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_logo_bar_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Logo Bar Height', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header logo bar height for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'dimension',
		'id'	=> $prefix.'header_logo_bar_height',
		'property' => 'height',
		'required'	=> array( $prefix.'header_logo_bar_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Logo Bar Sticky Height', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header logo bar sticky height for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'dimension',
		'id'	=> $prefix.'header_logo_bar_sticky_height',
		'property' => 'height',
		'required'	=> array( $prefix.'header_logo_bar_opt', 'custom' )
	),
	array( 
		'label'	=> '',
		'desc'	=> esc_html__( 'These all are header logo bar skin settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Header Logo Bar Skin Settings', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header logo bar skin settings options.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_logo_bar_skin_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Logo Bar Font Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header logo bar font color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'color',
		'id'	=> $prefix.'header_logo_bar_font',
		'required'	=> array( $prefix.'header_logo_bar_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Logo Bar Background', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header logo bar background color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'alpha_color',
		'id'	=> $prefix.'header_logo_bar_bg',
		'required'	=> array( $prefix.'header_logo_bar_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Logo Bar Link Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header logo bar link color settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'link_color',
		'id'	=> $prefix.'header_logo_bar_link',
		'required'	=> array( $prefix.'header_logo_bar_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Logo Bar Border', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header logo bar border settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'space',
		'color' => 1,
		'border_style' => 1,
		'id'	=> $prefix.'header_logo_bar_border',
		'required'	=> array( $prefix.'header_logo_bar_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Logo Bar Padding', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header logo bar padding settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'space',
		'id'	=> $prefix.'header_logo_bar_padding',
		'required'	=> array( $prefix.'header_logo_bar_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Logo Bar Sticky Skin Settings', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header logo bar sticky skin settings options.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_logobar_sticky_skin_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Logo Bar Sticky Font Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header logo bar sticky font color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'color',
		'id'	=> $prefix.'header_logobar_sticky_font',
		'required'	=> array( $prefix.'header_logobar_sticky_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Logo Bar Sticky Background', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header logo bar sticky background color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'alpha_color',
		'id'	=> $prefix.'header_logobar_sticky_bg',
		'required'	=> array( $prefix.'header_logobar_sticky_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Logo Bar Sticky Link Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header logo bar sticky link color settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'link_color',
		'id'	=> $prefix.'header_logobar_sticky_link',
		'required'	=> array( $prefix.'header_logobar_sticky_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Logo Bar Sticky Border', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header logo bar sticky border settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'space',
		'color' => 1,
		'border_style' => 1,
		'id'	=> $prefix.'header_logobar_sticky_border',
		'required'	=> array( $prefix.'header_logobar_sticky_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Logo Bar Sticky Padding', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header logo bar sticky padding settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'space',
		'id'	=> $prefix.'header_logobar_sticky_padding',
		'required'	=> array( $prefix.'header_logobar_sticky_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Logo Bar Items Option', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header logo bar items enable options.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_logo_bar_items_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Logo Bar Items', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header logo bar items for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'dragdrop_multi',
		'id'	=> $prefix.'header_logo_bar_items',
		'dd_fields' => array ( 
			'Left'  => array(
				'header-logobar-logo'		=> esc_html__( 'Logo', 'wiguard-core' ),
				'header-logobar-sticky-logo' => esc_html__( 'Sticky Logo', 'wiguard-core' )											
			),
			'Center' => array(),
			'Right' => array(),
			'disabled' => array(
				'header-logobar-social'		=> esc_html__( 'Social', 'wiguard-core' ),
				'header-logobar-search'		=> esc_html__( 'Search', 'wiguard-core' ),
				'header-logobar-secondary-toggle'	=> esc_html__( 'Secondary Toggle', 'wiguard-core' ),	
				'header-phone'   			=> esc_html__( 'Phone Number', 'wiguard-core' ),
				'header-address'  			=> esc_html__( 'Address Text', 'wiguard-core' ),
				'header-email'   			=> esc_html__( 'Email', 'wiguard-core' ),
				'header-logobar-menu'   	=> esc_html__( 'Main Menu', 'wiguard-core' ),
				'header-logobar-search-toggle'	=> esc_html__( 'Search Toggle', 'wiguard-core' ),
				'header-logobar-text-1'		=> esc_html__( 'Custom Text 1', 'wiguard-core' ),
				'header-logobar-text-2'		=> esc_html__( 'Custom Text 2', 'wiguard-core' ),
				'header-logobar-text-3'		=> esc_html__( 'Custom Text 3', 'wiguard-core' ),	
				'header-cart'   			=> esc_html__( 'Cart', 'wiguard-core' ),
				'header-wishlist'   		=> esc_html__( 'Wishlist', 'wiguard-core' ),
				'multi-info'   				=> esc_html__( 'Address, Phone, Email', 'wiguard-core' )
			)
		),
		'required'	=> array( $prefix.'header_logo_bar_items_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Navbar', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header navbar settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Header Navbar Options', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header items options for enable header drag and drop items.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_navbar_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Navbar Height', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header navbar height for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'dimension',
		'id'	=> $prefix.'header_navbar_height',
		'property' => 'height',
		'required'	=> array( $prefix.'header_navbar_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Navbar Sticky Height', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header navbar sticky height for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'dimension',
		'id'	=> $prefix.'header_navbar_sticky_height',
		'property' => 'height',
		'required'	=> array( $prefix.'header_navbar_opt', 'custom' )
	),
	array( 
		'label'	=> '',
		'desc'	=> esc_html__( 'These all are header navbar skin settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Header Navbar Skin Settings', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header navbar skin settings options.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_navbar_skin_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Navbar Font Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header navbar font color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'color',
		'id'	=> $prefix.'header_navbar_font',
		'required'	=> array( $prefix.'header_navbar_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Navbar Background', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header navbar background color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'alpha_color',
		'id'	=> $prefix.'header_navbar_bg',
		'required'	=> array( $prefix.'header_navbar_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Navbar Link Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header navbar link color settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'link_color',
		'id'	=> $prefix.'header_navbar_link',
		'required'	=> array( $prefix.'header_navbar_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Navbar Border', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header navbar border settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'space',
		'color' => 1,
		'border_style' => 1,
		'id'	=> $prefix.'header_navbar_border',
		'required'	=> array( $prefix.'header_navbar_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Navbar Padding', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header navbar padding settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'space',
		'id'	=> $prefix.'header_navbar_padding',
		'required'	=> array( $prefix.'header_navbar_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Navbar Sticky Skin Settings', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header navbar sticky skin settings options.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_navbar_sticky_skin_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Navbar Sticky Font Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header navbar sticky font color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'color',
		'id'	=> $prefix.'header_navbar_sticky_font',
		'required'	=> array( $prefix.'header_navbar_sticky_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Navbar Sticky Background', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header navbar sticky background color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'alpha_color',
		'id'	=> $prefix.'header_navbar_sticky_bg',
		'required'	=> array( $prefix.'header_navbar_sticky_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Navbar Sticky Link Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header navbar sticky link color settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'link_color',
		'id'	=> $prefix.'header_navbar_sticky_link',
		'required'	=> array( $prefix.'header_navbar_sticky_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Navbar Sticky Border', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header navbar sticky border settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'space',
		'color' => 1,
		'border_style' => 1,
		'id'	=> $prefix.'header_navbar_sticky_border',
		'required'	=> array( $prefix.'header_navbar_sticky_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Navbar Sticky Padding', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header navbar sticky padding settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'space',
		'id'	=> $prefix.'header_navbar_sticky_padding',
		'required'	=> array( $prefix.'header_navbar_sticky_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Navbar Items Option', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header navbar items enable options.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_navbar_items_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Navbar Items', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header navbar items for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'dragdrop_multi',
		'id'	=> $prefix.'header_navbar_items',
		'dd_fields' => array ( 
			'Left'  => array(											
				'header-navbar-menu'    => esc_html__( 'Main Menu', 'wiguard-core' ),
			),
			'Center' => array(
			),
			'Right' => array(
				'header-navbar-search'	=> esc_html__( 'Search', 'wiguard-core' ),
			),
			'disabled' => array(
				'header-navbar-text-1'	=> esc_html__( 'Custom Text 1', 'wiguard-core' ),
				'header-navbar-text-2'	=> esc_html__( 'Custom Text 2', 'wiguard-core' ),
				'header-navbar-text-3'	=> esc_html__( 'Custom Text 3', 'wiguard-core' ),
				'header-navbar-logo'	=> esc_html__( 'Logo', 'wiguard-core' ),
				'header-navbar-social'	=> esc_html__( 'Social', 'wiguard-core' ),
				'header-navbar-secondary-toggle'	=> esc_html__( 'Secondary Toggle', 'wiguard-core' ),
				'header-navbar-search-toggle'	=> esc_html__( 'Search Toggle', 'wiguard-core' ),
				'header-navbar-sticky-logo'	=> esc_html__( 'Stikcy Logo', 'wiguard-core' ),
				'header-cart'   		=> esc_html__( 'Cart', 'wiguard-core' )
			)
		),
		'required'	=> array( $prefix.'header_navbar_items_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Sticky/Fixed Part', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header sticky settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Header Sticky/Fixed Part Options', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header sticky part option.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_stikcy_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Sticky/Fixed Part Width', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header Sticky part width for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'dimension',
		'id'	=> $prefix.'header_stikcy_width',
		'property' => 'width',
		'required'	=> array( $prefix.'header_stikcy_opt', 'custom' )
	),
	array( 
		'label'	=> '',
		'desc'	=> esc_html__( 'These all are header Sticky skin settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Header Sticky/Fixed Part Skin Settings', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header Sticky skin settings options.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_stikcy_skin_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Sticky/Fixed Part Font Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header Sticky font color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'color',
		'id'	=> $prefix.'header_stikcy_font',
		'required'	=> array( $prefix.'header_stikcy_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Sticky/Fixed Part Background', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header Sticky background color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'alpha_color',
		'id'	=> $prefix.'header_stikcy_bg',
		'required'	=> array( $prefix.'header_stikcy_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Sticky/Fixed Part Link Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header Sticky link color settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'link_color',
		'id'	=> $prefix.'header_stikcy_link',
		'required'	=> array( $prefix.'header_stikcy_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Sticky/Fixed Part Border', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header Sticky border settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'space',

		'color' => 1,
		'border_style' => 1,
		'id'	=> $prefix.'header_stikcy_border',
		'required'	=> array( $prefix.'header_stikcy_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Sticky/Fixed Part Padding', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header Sticky padding settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'space',
		'id'	=> $prefix.'header_stikcy_padding',
		'required'	=> array( $prefix.'header_stikcy_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Header Sticky/Fixed Part Items Option', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose header Sticky items enable options.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_stikcy_items_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Header Sticky/Fixed Part Items', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are header Sticky items for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'dragdrop_multi',
		'id'	=> $prefix.'header_stikcy_items',
		'dd_fields' => array ( 
			'Top'  => array(
				'header-fixed-logo' => esc_html__( 'Logo', 'wiguard-core' )
			),
			'Middle'  => array(
				'header-fixed-menu'	=> esc_html__( 'Menu', 'wiguard-core' )					
			),
			'Bottom'  => array(
				'header-fixed-social'	=> esc_html__( 'Social', 'wiguard-core' )					
			),
			'disabled' => array(
				'header-fixed-text-1'	=> esc_html__( 'Custom Text 1', 'wiguard-core' ),
				'header-fixed-text-2'	=> esc_html__( 'Custom Text 2', 'wiguard-core' ),				
				'header-fixed-search'	=> esc_html__( 'Search Form', 'wiguard-core' )
			)
		),
		'required'	=> array( $prefix.'header_stikcy_items_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Post Title Bar', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are post title bar settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Post Title Option', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose post title enable or disable.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_post_title_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'1' => esc_html__( 'Enable', 'wiguard-core' ),
			'0' => esc_html__( 'Disable', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Post Title Text', 'wiguard-core' ),
		'desc'	=> esc_html__( 'If this post title is empty, then showing current post default title.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_post_title_text',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'text',
		'default'	=> '',
		'required'	=> array( $prefix.'header_post_title_opt', '1' )
	),
	array( 
		'label'	=> esc_html__( 'Post Title Description', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Enter post title description.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_post_title_desc',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'textarea',
		'default'	=> '',
		'required'	=> array( $prefix.'header_post_title_opt', '1' )
	),
	array( 
		'label'	=> esc_html__( 'Post Title Background Parallax', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose post title background parallax.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_post_title_parallax',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'1' => esc_html__( 'Enable', 'wiguard-core' ),
			'0' => esc_html__( 'Disable', 'wiguard-core' )
		),
		'default'	=> 'theme-default',
		'required'	=> array( $prefix.'header_post_title_opt', '1' )
	),
	array( 
		'label'	=> esc_html__( 'Post Title Background Video Option', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose post title background video option.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_post_title_video_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'1' => esc_html__( 'Enable', 'wiguard-core' ),
			'0' => esc_html__( 'Disable', 'wiguard-core' )
		),
		'default'	=> 'theme-default',
		'required'	=> array( $prefix.'header_post_title_opt', '1' )
	),
	array( 
		'label'	=> esc_html__( 'Post Title Background Video', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Enter youtube video ID. Example: ZSt9tm3RoUU.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_post_title_video',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'text',
		'default'	=> '',
		'required'	=> array( $prefix.'header_post_title_video_opt', '1' )
	),
	array( 
		'label'	=> esc_html__( 'Post Title Bar Items Option', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose post title bar items option.', 'wiguard-core' ), 
		'id'	=> $prefix.'post_title_items_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default',
		'required'	=> array( $prefix.'header_post_title_opt', '1' )
	),
	array( 
		'label'	=> esc_html__( 'Post Title Bar Items', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are post title bar items for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'dragdrop_multi',
		'id'	=> $prefix.'post_title_items',
		'dd_fields' => array ( 
			'Left'  => array(
				'title' => esc_html__( 'Post Title Text', 'wiguard-core' ),
			),
			'Center'  => array(
				
			),
			'Right'  => array(
				'breadcrumb'	=> esc_html__( 'Breadcrumb', 'wiguard-core' )
			),
			'disabled' => array()
		),
		'required'	=> array( $prefix.'post_title_items_opt', 'custom' )
	),
	array( 
		'label'	=> '',
		'desc'	=> esc_html__( 'These all are post title skin settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'label',
		'required'	=> array( $prefix.'header_post_title_opt', '1' )
	),
	array( 
		'label'	=> esc_html__( 'Post Title Skin Settings', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose post title skin settings options.', 'wiguard-core' ), 
		'id'	=> $prefix.'post_title_skin_opt',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default',
		'required'	=> array( $prefix.'header_post_title_opt', '1' )
	),
	array( 
		'label'	=> esc_html__( 'Post Title Font Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are post title font color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'color',
		'id'	=> $prefix.'post_title_font',
		'required'	=> array( $prefix.'post_title_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Post Title Background Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are post title background color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'alpha_color',
		'id'	=> $prefix.'post_title_bg',
		'required'	=> array( $prefix.'post_title_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Post Title Background Image', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Enter post title background image url.', 'wiguard-core' ), 
		'id'	=> $prefix.'post_title_bg_img',
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'url',
		'default'	=> '',
		'required'	=> array( $prefix.'post_title_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Post Title Link Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are post title link color settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'link_color',
		'id'	=> $prefix.'post_title_link',
		'required'	=> array( $prefix.'post_title_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Post Title Border', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are post title border settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'space',
		'color' => 1,
		'border_style' => 1,
		'id'	=> $prefix.'post_title_border',
		'required'	=> array( $prefix.'post_title_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Post Title Padding', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are post title padding settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'space',
		'id'	=> $prefix.'post_title_padding',
		'required'	=> array( $prefix.'post_title_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Post Title Overlay', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are post title overlay color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
		'type'	=> 'alpha_color',
		'id'	=> $prefix.'post_title_overlay',
		'required'	=> array( $prefix.'post_title_skin_opt', 'custom' )
	),
	//Footer
	array( 
		'label'	=> 'Footer General',
		'desc'	=> esc_html__( 'These all are header footer settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Footer Layout', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose footer layout for current post.', 'wiguard-core' ), 
		'id'	=> $prefix.'footer_layout',
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'wide' => esc_html__( 'Wide', 'wiguard-core' ),
			'boxed' => esc_html__( 'Boxed', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Hidden Footer', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose hidden footer option.', 'wiguard-core' ), 
		'id'	=> $prefix.'hidden_footer',
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'1' => esc_html__( 'Enable', 'wiguard-core' ),
			'0' => esc_html__( 'Disable', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> '',
		'desc'	=> esc_html__( 'These all are footer skin settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Footer Skin Settings', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose footer skin settings options.', 'wiguard-core' ), 
		'id'	=> $prefix.'footer_skin_opt',
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Footer Font Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer font color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'color',
		'id'	=> $prefix.'footer_font',
		'required'	=> array( $prefix.'footer_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Background Image', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose footer background image for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'image',
		'id'	=> $prefix.'footer_bg_img',
		'required'	=> array( $prefix.'footer_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Background Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer background color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'color',
		'id'	=> $prefix.'footer_bg',
		'required'	=> array( $prefix.'footer_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Background Overlay', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer background overlay color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'alpha_color',
		'id'	=> $prefix.'footer_bg_overlay',
		'required'	=> array( $prefix.'footer_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Link Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer link color settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'link_color',
		'id'	=> $prefix.'footer_link',
		'required'	=> array( $prefix.'footer_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Border', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer border settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'space',
		'color' => 1,
		'border_style' => 1,
		'id'	=> $prefix.'footer_border',
		'required'	=> array( $prefix.'footer_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Padding', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer padding settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'space',
		'id'	=> $prefix.'footer_padding',
		'required'	=> array( $prefix.'footer_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Items Option', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose footer items enable options.', 'wiguard-core' ), 
		'id'	=> $prefix.'footer_items_opt',
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Footer Items', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer items for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'dragdrop_multi',
		'id'	=> $prefix.'footer_items',
		'dd_fields' => array ( 
			'Enabled'  => array(
				'footer-bottom'	=> esc_html__( 'Footer Bottom', 'wiguard-core' )
			),
			'disabled' => array(
				'footer-top' => esc_html__( 'Footer Top', 'wiguard-core' ),
				'footer-middle'	=> esc_html__( 'Footer Middle', 'wiguard-core' )
			)
		),
		'required'	=> array( $prefix.'footer_items_opt', 'custom' )
	),
	array( 
		'label'	=> 'Footer Top',
		'desc'	=> esc_html__( 'These all are footer top settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Footer Top Skin', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose footer top skin options.', 'wiguard-core' ), 
		'id'	=> $prefix.'footer_top_skin_opt',
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Footer Top Font Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer top font color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'color',
		'id'	=> $prefix.'footer_top_font',
		'required'	=> array( $prefix.'footer_top_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Top Widget Title color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer top widget title color.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'color',
		'id'	=> $prefix.'footer_top_widget_title_color',
		'required'	=> array( $prefix.'footer_top_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Top Background', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer background color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'alpha_color',
		'id'	=> $prefix.'footer_top_bg',
		'required'	=> array( $prefix.'footer_top_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Top Link Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer top link color settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'link_color',
		'id'	=> $prefix.'footer_top_link',
		'required'	=> array( $prefix.'footer_top_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Top Border', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer top border settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'space',
		'color' => 1,
		'border_style' => 1,
		'id'	=> $prefix.'footer_top_border',
		'required'	=> array( $prefix.'footer_top_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Top Padding', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer top padding settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'space',
		'id'	=> $prefix.'footer_top_padding',
		'required'	=> array( $prefix.'footer_top_skin_opt', 'custom' )
	),
	array( 
		'label'	=> 'Footer Top Columns and Sidebars Settings',
		'desc'	=> esc_html__( 'These all are footer top columns and sidebar settings.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Footer Layout Option', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose footer layout option.', 'wiguard-core' ), 
		'id'	=> $prefix.'footer_top_layout_opt',
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Footer Layout', 'wiguard-core' ),
		'id'	=> $prefix.'footer_top_layout',
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'image_select',
		'options' => array(
			'3-3-3-3'	=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-1.png',
			'4-4-4'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-2.png',
			'3-6-3'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-3.png',
			'6-6'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-4.png',
			'9-3'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-5.png',
			'3-9'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-6.png',
			'4-2-2-2-2'	=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-8.png',
			'6-2-2-2'	=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-9.png',
			'12'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-7.png'
		),
		'default'	=> '4-4-4',
		'required'	=> array( $prefix.'footer_top_layout_opt', 'custom' )
	),
	array( 
		'label'	=> 'Footer First Column',
		'desc'	=> esc_html__( 'Select footer first column widget.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'id'	=> $prefix.'footer_top_sidebar_1',
		'type'	=> 'sidebar',
		'required'	=> array( $prefix.'footer_top_layout_opt', 'custom' )
	),
	array( 
		'label'	=> 'Footer Second Column',
		'desc'	=> esc_html__( 'Select footer second column widget.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'id'	=> $prefix.'footer_top_sidebar_2',
		'type'	=> 'sidebar',
		'required'	=> array( $prefix.'footer_top_layout_opt', 'custom' )
	),
	array( 
		'label'	=> 'Footer Third Column',
		'desc'	=> esc_html__( 'Select footer third column widget.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'id'	=> $prefix.'footer_top_sidebar_3',
		'type'	=> 'sidebar',
		'required'	=> array( $prefix.'footer_top_layout_opt', 'custom' )
	),
	array( 
		'label'	=> 'Footer Fourth Column',
		'desc'	=> esc_html__( 'Select footer fourth column widget.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'id'	=> $prefix.'footer_top_sidebar_4',
		'type'	=> 'sidebar',
		'required'	=> array( $prefix.'footer_top_layout_opt', 'custom' )
	),
	array( 
		'label'	=> 'Footer Middle',
		'desc'	=> esc_html__( 'These all are footer middle settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Footer Middle Skin', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose footer middle skin options.', 'wiguard-core' ), 
		'id'	=> $prefix.'footer_middle_skin_opt',
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Footer Middle Font Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer middle font color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'color',
		'id'	=> $prefix.'footer_middle_font',
		'required'	=> array( $prefix.'footer_middle_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Middle Widget Title Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer middle widget title color.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'color',
		'id'	=> $prefix.'footer_middle_widget_title_color',
		'required'	=> array( $prefix.'footer_middle_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Middle Background', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer background color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'alpha_color',
		'id'	=> $prefix.'footer_middle_bg',
		'required'	=> array( $prefix.'footer_middle_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Middle Link Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer middle link color settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'link_color',
		'id'	=> $prefix.'footer_middle_link',
		'required'	=> array( $prefix.'footer_middle_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Middle Border', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer middle border settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'space',
		'color' => 1,
		'border_style' => 1,
		'id'	=> $prefix.'footer_middle_border',
		'required'	=> array( $prefix.'footer_middle_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Middle Padding', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer middle padding settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'space',
		'id'	=> $prefix.'footer_middle_padding',
		'required'	=> array( $prefix.'footer_middle_skin_opt', 'custom' )
	),
	array( 
		'label'	=> 'Footer Middle Columns and Sidebars Settings',
		'desc'	=> esc_html__( 'These all are footer middle columns and sidebar settings.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Footer Layout Option', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose footer layout option.', 'wiguard-core' ), 
		'id'	=> $prefix.'footer_middle_layout_opt',
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Footer Layout', 'wiguard-core' ),
		'id'	=> $prefix.'footer_middle_layout',
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'image_select',
		'options' => array(
			'3-3-3-3'	=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-1.png',
			'4-4-4'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-2.png',
			'3-6-3'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-3.png',
			'6-6'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-4.png',
			'9-3'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-5.png',
			'3-9'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-6.png',
			'4-2-2-2-2'	=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-8.png',
			'6-2-2-2'	=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-9.png',
			'12'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-7.png'
		),
		'default'	=> '4-4-4',
		'required'	=> array( $prefix.'footer_middle_layout_opt', 'custom' )
	),
	array( 
		'label'	=> 'Footer First Column',
		'desc'	=> esc_html__( 'Select footer first column widget.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'id'	=> $prefix.'footer_middle_sidebar_1',
		'type'	=> 'sidebar',
		'required'	=> array( $prefix.'footer_middle_layout_opt', 'custom' )
	),
	array( 
		'label'	=> 'Footer Second Column',
		'desc'	=> esc_html__( 'Select footer second column widget.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'id'	=> $prefix.'footer_middle_sidebar_2',
		'type'	=> 'sidebar',
		'required'	=> array( $prefix.'footer_middle_layout_opt', 'custom' )
	),
	array( 
		'label'	=> 'Footer Third Column',
		'desc'	=> esc_html__( 'Select footer third column widget.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'id'	=> $prefix.'footer_middle_sidebar_3',
		'type'	=> 'sidebar',
		'required'	=> array( $prefix.'footer_middle_layout_opt', 'custom' )
	),
	array( 
		'label'	=> 'Footer Fourth Column',
		'desc'	=> esc_html__( 'Select footer fourth column widget.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'id'	=> $prefix.'footer_middle_sidebar_4',
		'type'	=> 'sidebar',
		'required'	=> array( $prefix.'footer_middle_layout_opt', 'custom' )
	),
	array( 
		'label'	=> 'Footer Bottom',
		'desc'	=> esc_html__( 'These all are footer bottom settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Footer Bottom Fixed', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose footer bottom fixed option.', 'wiguard-core' ), 
		'id'	=> $prefix.'footer_bottom_fixed',
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'1' => esc_html__( 'Enable', 'wiguard-core' ),
			'0' => esc_html__( 'Disable', 'wiguard-core' )			
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> '',
		'desc'	=> esc_html__( 'These all are footer bottom skin settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Footer Bottom Skin', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose footer bottom skin options.', 'wiguard-core' ), 
		'id'	=> $prefix.'footer_bottom_skin_opt',
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Footer Bottom Font Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer bottom font color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'color',
		'id'	=> $prefix.'footer_bottom_font',
		'required'	=> array( $prefix.'footer_bottom_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Bottom Background', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer bottom background color for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'alpha_color',
		'id'	=> $prefix.'footer_bottom_bg',
		'required'	=> array( $prefix.'footer_bottom_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Bottom Link Color', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer bottom link color settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'link_color',
		'id'	=> $prefix.'footer_bottom_link',
		'required'	=> array( $prefix.'footer_bottom_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Bottom Border', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer bottom border settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'space',
		'color' => 1,
		'border_style' => 1,
		'id'	=> $prefix.'footer_bottom_border',
		'required'	=> array( $prefix.'footer_bottom_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Bottom Padding', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer bottom padding settings for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'space',
		'id'	=> $prefix.'footer_bottom_padding',
		'required'	=> array( $prefix.'footer_bottom_skin_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Bottom Widget Option', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose footer bottom widget options.', 'wiguard-core' ), 
		'id'	=> $prefix.'footer_bottom_widget_opt',
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> 'Footer Bottom Widget',
		'desc'	=> esc_html__( 'Select footer bottom widget.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'id'	=> $prefix.'footer_bottom_widget',
		'type'	=> 'sidebar',
		'required'	=> array( $prefix.'footer_bottom_widget_opt', 'custom' )
	),
	array( 
		'label'	=> esc_html__( 'Footer Bottom Items Option', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose footer bottom items options.', 'wiguard-core' ), 
		'id'	=> $prefix.'footer_bottom_items_opt',
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Footer Bottom Items', 'wiguard-core' ),
		'desc'	=> esc_html__( 'These all are footer bottom items for current post.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
		'type'	=> 'dragdrop_multi',
		'id'	=> $prefix.'footer_bottom_items',
		'dd_fields' => array ( 
			'Left'  => array(
				'copyright' => esc_html__( 'Copyright Text', 'wiguard-core' )
			),
			'Center'  => array(
				'menu'	=> esc_html__( 'Footer Menu', 'wiguard-core' )
			),
			'Right'  => array(),
			'disabled' => array(
				'social'	=> esc_html__( 'Footer Social Links', 'wiguard-core' ),
				'widget'	=> esc_html__( 'Custom Widget', 'wiguard-core' )
			)
		),
		'required'	=> array( $prefix.'footer_bottom_items_opt', 'custom' )
	),
	//Header Slider
	array( 
		'label'	=> esc_html__( 'Slider', 'wiguard-core' ),
		'desc'	=> esc_html__( 'This header slider settings.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Slider', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Slider Option', 'wiguard-core' ),
		'id'	=> $prefix.'header_slider_opt',
		'tab'	=> esc_html__( 'Slider', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'bottom' => esc_html__( 'Below Header', 'wiguard-core' ),
			'top' => esc_html__( 'Above Header', 'wiguard-core' ),
			'none' => esc_html__( 'None', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Slider Shortcode', 'wiguard-core' ),
		'desc'	=> esc_html__( 'This is the place for enter slider shortcode. Example revolution slider shortcodes.', 'wiguard-core' ), 
		'id'	=> $prefix.'header_slider',
		'tab'	=> esc_html__( 'Slider', 'wiguard-core' ),
		'type'	=> 'textarea',
		'default'	=> ''
	),
	//Post Format
	array( 
		'label'	=> esc_html__( 'Video', 'wiguard-core' ),
		'desc'	=> esc_html__( 'This part for if you choosed video format, then you must choose video type and give video id.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Video Modal', 'wiguard-core' ),
		'id'	=> $prefix.'video_modal',
		'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'onclick' => esc_html__( 'On Click Run Video', 'wiguard-core' ),
			'overlay' => esc_html__( 'Modal Box Video', 'wiguard-core' ),
			'direct' => esc_html__( 'Direct Video', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Video Type', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose video type.', 'wiguard-core' ), 
		'id'	=> $prefix.'video_type',
		'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'' => esc_html__( 'None', 'wiguard-core' ),
			'youtube' => esc_html__( 'Youtube', 'wiguard-core' ),
			'vimeo' => esc_html__( 'Vimeo', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom Video', 'wiguard-core' )
		),
		'default'	=> ''
	),
	array( 
		'label'	=> esc_html__( 'Video ID', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Enter Video ID Example: ZSt9tm3RoUU. If you choose custom video type then you enter custom video url and video must be mp4 format.', 'wiguard-core' ), 
		'id'	=> $prefix.'video_id',
		'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
		'type'	=> 'text',
		'default'	=> ''
	),
	array( 
		'type'	=> 'line',
		'tab'	=> esc_html__( 'Format', 'wiguard-core' )
	),
	array( 
		'label'	=> esc_html__( 'Audio', 'wiguard-core' ),
		'desc'	=> esc_html__( 'This part for if you choosed audio format, then you must give audio id.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Audio Type', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Choose audio type.', 'wiguard-core' ), 
		'id'	=> $prefix.'audio_type',
		'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'' => esc_html__( 'None', 'wiguard-core' ),
			'soundcloud' => esc_html__( 'Soundcloud', 'wiguard-core' ),
			'custom' => esc_html__( 'Custom Audio', 'wiguard-core' )
		),
		'default'	=> ''
	),
	array( 
		'label'	=> esc_html__( 'Audio ID', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Enter soundcloud audio ID. Example: 315307209.', 'wiguard-core' ), 
		'id'	=> $prefix.'audio_id',
		'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
		'type'	=> 'text',
		'default'	=> ''
	),
	array( 
		'type'	=> 'line',
		'tab'	=> esc_html__( 'Format', 'wiguard-core' )
	),
	array( 
		'label'	=> esc_html__( 'Gallery', 'wiguard-core' ),
		'desc'	=> esc_html__( 'This part for if you choosed gallery format, then you must choose gallery images here.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Gallery Modal', 'wiguard-core' ),
		'id'	=> $prefix.'gallery_modal',
		'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'default' => esc_html__( 'Default Gallery', 'wiguard-core' ),
			'popup' => esc_html__( 'Popup Gallery', 'wiguard-core' ),
			'grid' => esc_html__( 'Grid Popup Gallery', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Choose Gallery Images', 'wiguard-core' ),
		'id'	=> $prefix.'gallery',
		'type'	=> 'gallery',
		'tab'	=> esc_html__( 'Format', 'wiguard-core' )
	),
	array( 
		'type'	=> 'line',
		'tab'	=> esc_html__( 'Format', 'wiguard-core' )
	),
	array( 
		'label'	=> esc_html__( 'Quote', 'wiguard-core' ),
		'desc'	=> esc_html__( 'This part for if you choosed quote format, then you must fill the quote text and author name box.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Quote Modal', 'wiguard-core' ),
		'id'	=> $prefix.'quote_modal',
		'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'featured' => esc_html__( 'Dark Overlay', 'wiguard-core' ),
			'theme-overlay' => esc_html__( 'Theme Overlay', 'wiguard-core' ),
			'theme' => esc_html__( 'Theme Color Background', 'wiguard-core' ),
			'none' => esc_html__( 'None', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Quote Text', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Enter quote text.', 'wiguard-core' ), 
		'id'	=> $prefix.'quote_text',
		'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
		'type'	=> 'textarea',
		'default'	=> ''
	),
	array( 
		'label'	=> esc_html__( 'Quote Author', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Enter quote author name.', 'wiguard-core' ), 
		'id'	=> $prefix.'quote_author',
		'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
		'type'	=> 'text',
		'default'	=> ''
	),
	array( 
		'type'	=> 'line',
		'tab'	=> esc_html__( 'Format', 'wiguard-core' )
	),
	array( 
		'label'	=> esc_html__( 'Link', 'wiguard-core' ),
		'desc'	=> esc_html__( 'This part for if you choosed link format, then you must fill the external link box.', 'wiguard-core' ), 
		'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
		'type'	=> 'label'
	),
	array( 
		'label'	=> esc_html__( 'Link Modal', 'wiguard-core' ),
		'id'	=> $prefix.'link_modal',
		'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
		'type'	=> 'select',
		'options' => array ( 
			'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
			'featured' => esc_html__( 'Dark Overlay', 'wiguard-core' ),
			'theme-overlay' => esc_html__( 'Theme Overlay', 'wiguard-core' ),
			'theme' => esc_html__( 'Theme Color Background', 'wiguard-core' ),
			'none' => esc_html__( 'None', 'wiguard-core' )
		),
		'default'	=> 'theme-default'
	),
	array( 
		'label'	=> esc_html__( 'Link Text', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Enter link text to show.', 'wiguard-core' ), 
		'id'	=> $prefix.'link_text',
		'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
		'type'	=> 'text',
		'default'	=> ''
	),
	array( 
		'label'	=> esc_html__( 'External Link', 'wiguard-core' ),
		'desc'	=> esc_html__( 'Enter external link.', 'wiguard-core' ), 
		'id'	=> $prefix.'extrenal_link',
		'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
		'type'	=> 'url',
		'default'	=> ''
	),
	array( 
		'type'	=> 'line',
		'tab'	=> esc_html__( 'Format', 'wiguard-core' )
	),
	
);
/**
 * Instantiate the class with all variables to create a meta box
 * var $id string meta box id
 * var $title string title
 * var $fields array fields
 * var $page string|array post type to add meta box to
 * var $js bool including javascript or not
 */
 
$post_box = new Custom_Add_Meta_Box( 'wiguard_post_metabox', esc_html__( 'Wiguard Post Options', 'wiguard-core' ), $fields, 'post', true );

/* Wiguard Page Options */
function wiguard_metabox_fields( $prefix ){
	
	$wiguard_menus = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
	$wiguard_nav_menus = array( "none" => esc_html__( "None", "wiguard" ) );
	foreach( $wiguard_menus as $menu ){
		$wiguard_nav_menus[$menu->slug] = $menu->name;
	}
			
	$fields = array(
		array( 
			'label'	=> esc_html__( 'Page General Settings', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are page general settings.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'General', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Page Layout', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose page layout for current post single view.', 'wiguard-core' ), 
			'id'	=> $prefix.'layout',
			'tab'	=> esc_html__( 'General', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'wide' => esc_html__( 'Wide', 'wiguard-core' ),
				'boxed' => esc_html__( 'Boxed', 'wiguard-core' )			
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Page Content Padding Option', 'wiguard-core' ),
			'id'	=> $prefix.'content_padding_opt',
			'tab'	=> esc_html__( 'General', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'		
		),
		array( 
			'label'	=> esc_html__( 'Page Content Padding', 'wiguard-core' ), 
			'desc'	=> esc_html__( 'Set the top/right/bottom/left padding of page content.', 'wiguard-core' ),
			'id'	=> $prefix.'content_padding',
			'tab'	=> esc_html__( 'General', 'wiguard-core' ),
			'type'	=> 'space',
			'required'	=> array( $prefix.'content_padding_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Page Background Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose color setting for current page background.', 'wiguard-core' ),
			'tab'	=> esc_html__( 'General', 'wiguard-core' ),
			'type'	=> 'alpha_color',
			'id'	=> $prefix.'main_bg_color'
		),
		array( 
				'label'	=> esc_html__( 'Page Background Image', 'wiguard-core' ),
				'desc'	=> esc_html__( 'Choose custom logo image for current page.', 'wiguard-core' ), 
				'tab'	=> esc_html__( 'General', 'wiguard-core' ),
				'type'	=> 'image',
				'id'	=> $prefix.'main_bg_image'
			),
		array( 
			'label'	=> esc_html__( 'Page Margin', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are margin settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'General', 'wiguard-core' ),
			'type'	=> 'space',
			'id'	=> $prefix.'main_margin'
		),
		array( 
			'label'	=> esc_html__( 'Page Template Option', 'wiguard-core' ),
			'id'	=> $prefix.'template_opt',
			'tab'	=> esc_html__( 'General', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'		
		),
		array( 
			'label'	=> esc_html__( 'Page Template', 'wiguard-core' ),
			'id'	=> $prefix.'template',
			'tab'	=> esc_html__( 'General', 'wiguard-core' ),
			'type'	=> 'image_select',
			'options' => array(
				'no-sidebar'	=> get_theme_file_uri( '/assets/images/page-layouts/1.png' ), 
				'right-sidebar'	=> get_theme_file_uri( '/assets/images/page-layouts/2.png' ), 
				'left-sidebar'	=> get_theme_file_uri( '/assets/images/page-layouts/3.png' ), 
				'both-sidebar'	=> get_theme_file_uri( '/assets/images/page-layouts/4.png' ), 
			),
			'default'	=> 'right-sidebar',
			'required'	=> array( $prefix.'template_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Left Sidebar', 'wiguard-core' ),
			'id'	=> $prefix.'left_sidebar',
			'tab'	=> esc_html__( 'General', 'wiguard-core' ),
			'type'	=> 'sidebar',
			'required'	=> array( $prefix.'template_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Right Sidebar', 'wiguard-core' ),
			'id'	=> $prefix.'right_sidebar',
			'tab'	=> esc_html__( 'General', 'wiguard-core' ),
			'type'	=> 'sidebar',
			'required'	=> array( $prefix.'template_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Sidebar On Mobile', 'wiguard-core' ),
			'id'	=> $prefix.'sidebar_mobile',
			'tab'	=> esc_html__( 'General', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'1' => esc_html__( 'Show', 'wiguard-core' ),
				'0' => esc_html__( 'Hide', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header General Settings', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header general settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Header Extra Class', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter extra class name for additional class name for header.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_extra_class',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'One Page Menu Offset', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter one page menu offset for desktop menu.', 'wiguard-core' ), 
			'id'	=> $prefix.'one_page_menu_offset',
			'tab'	=> esc_html__( 'One Page', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> '60'
		),
		array( 
			'label'	=> esc_html__( 'One Page Mobile Menu Offset', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter one page mobile menu offset for desktop menu.', 'wiguard-core' ), 
			'id'	=> $prefix.'one_page_mobmenu_offset',
			'tab'	=> esc_html__( 'One Page', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> '60'
		),
		array( 
			'label'	=> esc_html__( 'Header Layout', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose page layout for current page header layout.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_layout',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'wide' => esc_html__( 'Wide', 'wiguard-core' ),
				'boxed' => esc_html__( 'Boxed', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Type', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose page layout for current page header type.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_type',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'default' => esc_html__( 'Default', 'wiguard-core' ),
				'left-sticky' => esc_html__( 'Left Sticky', 'wiguard-core' ),
				'right-sticky' => esc_html__( 'Right Sticky', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Background Image', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header background image for current post.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'image',
			'id'	=> $prefix.'header_bg_img',
			'required'	=> array( $prefix.'header_type', 'default' )
		),
		array( 
			'label'	=> esc_html__( 'Header Items Options', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header items options for enable header drag and drop items.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_items_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Items', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header general items for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'dragdrop_multi',
			'id'	=> $prefix.'header_items',
			'dd_fields' => array ( 
				'Normal' => array( 
					'header-topbar' 	=> esc_html__( 'Topbar', 'wiguard-core' ),
					'header-logo'	=> esc_html__( 'Logo Bar', 'wiguard-core' )
				),
				'Sticky' => array( 
					'header-nav' 	=> esc_html__( 'Navbar', 'wiguard-core' )
				),
				'disabled' => array()
			),
			'required'	=> array( $prefix.'header_items_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Absolute Option', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header absolute to change header look transparent.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_absolute_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'1' => esc_html__( 'Enable', 'wiguard-core' ),
				'0' => esc_html__( 'Disable', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Sticky', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header sticky options.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_sticky_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'sticky' => esc_html__( 'Header Sticky Part', 'wiguard-core' ),
				'sticky-scroll' => esc_html__( 'Sticky Scroll Up', 'wiguard-core' ),
				'none' => esc_html__( 'None', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Secondary Space Option', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose secondary space option for enable secondary menu space for current page.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_secondary_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'enable' => esc_html__( 'Enable', 'wiguard-core' ),
				'disable' => esc_html__( 'Disable', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Secondary Space Animate Type', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose secondary space option animate type for current page.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_secondary_animate',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array(
				'left-push'		=> esc_html__( 'Left Push', 'wiguard-core' ),
				'left-overlay'	=> esc_html__( 'Left Overlay', 'wiguard-core' ),
				'right-push'	=> esc_html__( 'Right Push', 'wiguard-core' ),
				'right-overlay'	=> esc_html__( 'Right Overlay', 'wiguard-core' ),
				'full-overlay'	=> esc_html__( 'Full Page Overlay', 'wiguard-core' ),
			),
			'default'	=> 'left-push',
			'required'	=> array( $prefix.'header_secondary_opt', 'enable' )
		),
		array( 
			'label'	=> esc_html__( 'Secondary Space Width', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Set secondary space width for current page. Example 300', 'wiguard-core' ), 
			'id'	=> $prefix.'header_secondary_width',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> '',
			'required'	=> array( $prefix.'header_secondary_opt', 'enable' )
		),
		array( 
			'label'	=> esc_html__( 'Custom Logo', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose custom logo image for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'image',
			'id'	=> $prefix.'custom_logo',
		),
		array( 
			'label'	=> esc_html__( 'Custom Sticky Logo', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose custom sticky logo image for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'image',
			'id'	=> $prefix.'custom_sticky_logo',
		),
		array( 
			'label'	=> esc_html__( 'Select Navigation Menu', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose navigation menu for current page.', 'wiguard-core' ), 
			'id'	=> $prefix.'nav_menu',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => $wiguard_nav_menus
		),
		array( 
			'label'	=> esc_html__( 'Header Top Bar', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header topbar settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Header Top Bar Options', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header items options for enable header drag and drop items.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_topbar_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Top Bar Height', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header topbar height for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'dimension',
			'id'	=> $prefix.'header_topbar_height',
			'property' => 'height',
			'required'	=> array( $prefix.'header_topbar_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Top Bar Sticky Height', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header topbar sticky height for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'dimension',
			'id'	=> $prefix.'header_topbar_sticky_height',
			'property' => 'height',
			'required'	=> array( $prefix.'header_topbar_opt', 'custom' )
		),
		array( 
			'label'	=> '',
			'desc'	=> esc_html__( 'These all are header topbar skin settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Header Top Bar Skin Settings', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header topbar skin settings options.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_topbar_skin_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Top Bar Font Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header topbar font color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'color',
			'id'	=> $prefix.'header_topbar_font',
			'required'	=> array( $prefix.'header_topbar_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Top Bar Background', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header topbar background color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'alpha_color',
			'id'	=> $prefix.'header_topbar_bg',
			'required'	=> array( $prefix.'header_topbar_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Top Bar Link Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header topbar link color settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'link_color',
			'id'	=> $prefix.'header_topbar_link',
			'required'	=> array( $prefix.'header_topbar_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Top Bar Border', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header topbar border settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'space',
			'color' => 1,
			'border_style' => 1,
			'id'	=> $prefix.'header_topbar_border',
			'required'	=> array( $prefix.'header_topbar_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Top Bar Padding', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header topbar padding settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'space',
			'id'	=> $prefix.'header_topbar_padding',
			'required'	=> array( $prefix.'header_topbar_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Top Bar Sticky Skin Settings', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header top bar sticky skin settings options.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_topbar_sticky_skin_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Top Bar Sticky Font Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header top bar sticky font color for current post.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'color',
			'id'	=> $prefix.'header_topbar_sticky_font',
			'required'	=> array( $prefix.'header_topbar_sticky_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Top Bar Sticky Background', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header top bar sticky background color for current post.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'alpha_color',
			'id'	=> $prefix.'header_topbar_sticky_bg',
			'required'	=> array( $prefix.'header_topbar_sticky_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Top Bar Sticky Link Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header top bar sticky link color settings for current post.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'link_color',
			'id'	=> $prefix.'header_topbar_sticky_link',
			'required'	=> array( $prefix.'header_topbar_sticky_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Top Bar Sticky Border', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header top bar sticky border settings for current post.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'space',
			'color' => 1,
			'border_style' => 1,
			'id'	=> $prefix.'header_topbar_sticky_border',
			'required'	=> array( $prefix.'header_topbar_sticky_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Top Bar Sticky Padding', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header top bar sticky padding settings for current post.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'space',
			'id'	=> $prefix.'header_topbar_sticky_padding',
			'required'	=> array( $prefix.'header_topbar_sticky_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Top Bar Items Option', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header topbar items enable options.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_topbar_items_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Top Bar Items', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header topbar items for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'dragdrop_multi',
			'id'	=> $prefix.'header_topbar_items',
			'dd_fields' => array ( 
				'Left'  => array(
					'header-topbar-date' => esc_html__( 'Date', 'wiguard-core' ),						
				),
				'Center' => array(),
				'Right' => array(),
				'disabled' => array(
					'header-topbar-text-1'	=> esc_html__( 'Custom Text 1', 'wiguard-core' ),
					'header-topbar-text-2'	=> esc_html__( 'Custom Text 2', 'wiguard-core' ),
					'header-topbar-text-3'	=> esc_html__( 'Custom Text 3', 'wiguard-core' ),
					'header-topbar-menu'    => esc_html__( 'Top Bar Menu', 'wiguard-core' ),
					'header-topbar-social'	=> esc_html__( 'Social', 'wiguard-core' ),
					'header-topbar-search'	=> esc_html__( 'Search', 'wiguard-core' ),
					'header-topbar-search-toggle'	=> esc_html__( 'Search Toggle', 'wiguard-core' ),
					'header-cart'   		=> esc_html__( 'Cart', 'wiguard-core' )
				)
			),
			'required'	=> array( $prefix.'header_topbar_items_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Logo Bar', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header logo bar settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Header Logo Bar Options', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header items options for enable header drag and drop items.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_logo_bar_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Logo Bar Height', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header logo bar height for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'dimension',
			'id'	=> $prefix.'header_logo_bar_height',
			'property' => 'height',
			'required'	=> array( $prefix.'header_logo_bar_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Logo Bar Sticky Height', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header logo bar sticky height for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'dimension',
			'id'	=> $prefix.'header_logo_bar_sticky_height',
			'property' => 'height',
			'required'	=> array( $prefix.'header_logo_bar_opt', 'custom' )
		),
		array( 
			'label'	=> '',
			'desc'	=> esc_html__( 'These all are header logo bar skin settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Header Logo Bar Skin Settings', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header logo bar skin settings options.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_logo_bar_skin_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Logo Bar Font Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header logo bar font color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'color',
			'id'	=> $prefix.'header_logo_bar_font',
			'required'	=> array( $prefix.'header_logo_bar_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Logo Bar Background', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header logo bar background color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'alpha_color',
			'id'	=> $prefix.'header_logo_bar_bg',
			'required'	=> array( $prefix.'header_logo_bar_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Logo Bar Link Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header logo bar link color settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'link_color',
			'id'	=> $prefix.'header_logo_bar_link',
			'required'	=> array( $prefix.'header_logo_bar_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Logo Bar Border', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header logo bar border settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'space',
			'color' => 1,
			'border_style' => 1,
			'id'	=> $prefix.'header_logo_bar_border',
			'required'	=> array( $prefix.'header_logo_bar_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Logo Bar Padding', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header logo bar padding settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'space',
			'id'	=> $prefix.'header_logo_bar_padding',
			'required'	=> array( $prefix.'header_logo_bar_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Logo Bar Sticky Skin Settings', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header logo bar sticky skin settings options.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_logobar_sticky_skin_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Logo Bar Sticky Font Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header logo bar sticky font color for current post.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'color',
			'id'	=> $prefix.'header_logobar_sticky_font',
			'required'	=> array( $prefix.'header_logobar_sticky_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Logo Bar Sticky Background', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header logo bar sticky background color for current post.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'alpha_color',
			'id'	=> $prefix.'header_logobar_sticky_bg',
			'required'	=> array( $prefix.'header_logobar_sticky_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Logo Bar Sticky Link Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header logo bar sticky link color settings for current post.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'link_color',
			'id'	=> $prefix.'header_logobar_sticky_link',
			'required'	=> array( $prefix.'header_logobar_sticky_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Logo Bar Sticky Border', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header logo bar sticky border settings for current post.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'space',
			'color' => 1,
			'border_style' => 1,
			'id'	=> $prefix.'header_logobar_sticky_border',
			'required'	=> array( $prefix.'header_logobar_sticky_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Logo Bar Sticky Padding', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header logo bar sticky padding settings for current post.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'space',
			'id'	=> $prefix.'header_logobar_sticky_padding',
			'required'	=> array( $prefix.'header_logobar_sticky_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Logo Bar Items Option', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header logo bar items enable options.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_logo_bar_items_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Logo Bar Items', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header logo bar items for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'dragdrop_multi',
			'id'	=> $prefix.'header_logo_bar_items',
			'dd_fields' => array ( 
				'Left'  => array(
					'header-logobar-logo'		=> esc_html__( 'Logo', 'wiguard-core' ),
					'header-logobar-sticky-logo' => esc_html__( 'Sticky Logo', 'wiguard-core' )											
				),
				'Center' => array(),
				'Right' => array(),
				'disabled' => array(
					'header-logobar-social'		=> esc_html__( 'Social', 'wiguard-core' ),
					'header-logobar-search'		=> esc_html__( 'Search', 'wiguard-core' ),
					'header-logobar-secondary-toggle'	=> esc_html__( 'Secondary Toggle', 'wiguard-core' ),	
					'header-phone'   			=> esc_html__( 'Phone Number', 'wiguard-core' ),
					'header-address'  			=> esc_html__( 'Address Text', 'wiguard-core' ),
					'header-email'   			=> esc_html__( 'Email', 'wiguard-core' ),
					'header-logobar-menu'   	=> esc_html__( 'Main Menu', 'wiguard-core' ),
					'header-logobar-search-toggle'	=> esc_html__( 'Search Toggle', 'wiguard-core' ),
					'header-logobar-text-1'		=> esc_html__( 'Custom Text 1', 'wiguard-core' ),
					'header-logobar-text-2'		=> esc_html__( 'Custom Text 2', 'wiguard-core' ),
					'header-logobar-text-3'		=> esc_html__( 'Custom Text 3', 'wiguard-core' ),	
					'header-cart'   			=> esc_html__( 'Cart', 'wiguard-core' ),
					'header-wishlist'   		=> esc_html__( 'Wishlist', 'wiguard-core' ),
					'multi-info'   				=> esc_html__( 'Address, Phone, Email', 'wiguard-core' )
				)
			),
			'required'	=> array( $prefix.'header_logo_bar_items_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Navbar', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header navbar settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Header Navbar Options', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header items options for enable header drag and drop items.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_navbar_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Navbar Height', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header navbar height for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'dimension',
			'id'	=> $prefix.'header_navbar_height',
			'property' => 'height',
			'required'	=> array( $prefix.'header_navbar_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Navbar Sticky Height', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header navbar sticky height for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'dimension',
			'id'	=> $prefix.'header_navbar_sticky_height',
			'property' => 'height',
			'required'	=> array( $prefix.'header_navbar_opt', 'custom' )
		),
		array( 
			'label'	=> '',
			'desc'	=> esc_html__( 'These all are header navbar skin settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Header Navbar Skin Settings', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header navbar skin settings options.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_navbar_skin_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Navbar Font Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header navbar font color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'color',
			'id'	=> $prefix.'header_navbar_font',
			'required'	=> array( $prefix.'header_navbar_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Navbar Background', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header navbar background color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'alpha_color',
			'id'	=> $prefix.'header_navbar_bg',
			'required'	=> array( $prefix.'header_navbar_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Navbar Link Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header navbar link color settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'link_color',
			'id'	=> $prefix.'header_navbar_link',
			'required'	=> array( $prefix.'header_navbar_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Navbar Border', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header navbar border settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'space',
			'color' => 1,
			'border_style' => 1,
			'id'	=> $prefix.'header_navbar_border',
			'required'	=> array( $prefix.'header_navbar_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Navbar Padding', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header navbar padding settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'space',
			'id'	=> $prefix.'header_navbar_padding',
			'required'	=> array( $prefix.'header_navbar_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Navbar Sticky Skin Settings', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header navbar sticky skin settings options.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_navbar_sticky_skin_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Navbar Sticky Font Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header navbar sticky font color for current post.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'color',
			'id'	=> $prefix.'header_navbar_sticky_font',
			'required'	=> array( $prefix.'header_navbar_sticky_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Navbar Sticky Background', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header navbar sticky background color for current post.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'alpha_color',
			'id'	=> $prefix.'header_navbar_sticky_bg',
			'required'	=> array( $prefix.'header_navbar_sticky_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Navbar Sticky Link Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header navbar sticky link color settings for current post.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'link_color',
			'id'	=> $prefix.'header_navbar_sticky_link',
			'required'	=> array( $prefix.'header_navbar_sticky_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Navbar Sticky Border', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header navbar sticky border settings for current post.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'space',
			'color' => 1,
			'border_style' => 1,
			'id'	=> $prefix.'header_navbar_sticky_border',
			'required'	=> array( $prefix.'header_navbar_sticky_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Navbar Sticky Padding', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header navbar sticky padding settings for current post.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'space',
			'id'	=> $prefix.'header_navbar_sticky_padding',
			'required'	=> array( $prefix.'header_navbar_sticky_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Navbar Items Option', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header navbar items enable options.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_navbar_items_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Navbar Items', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header navbar items for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'dragdrop_multi',
			'id'	=> $prefix.'header_navbar_items',
			'dd_fields' => array ( 
				'Left'  => array(
					'header-navbar-logo'		=> esc_html__( 'Logo', 'wiguard' ),
					'header-navbar-sticky-logo'	=> esc_html__( 'Stikcy Logo', 'wiguard' ),
					'header-navbar-menu'    	=> esc_html__( 'Main Menu', 'wiguard' )										
				),
				'Center' => array(),
				'Right' => array(),
				'disabled' => array(					
					'header-navbar-text-1'		=> esc_html__( 'Custom Text 1', 'wiguard' ),
					'header-navbar-text-2'		=> esc_html__( 'Custom Text 2', 'wiguard' ),
					'header-navbar-text-3'		=> esc_html__( 'Custom Text 3', 'wiguard' ),					
					'header-navbar-social'		=> esc_html__( 'Social', 'wiguard' ),
					'header-navbar-secondary-toggle'	=> esc_html__( 'Secondary Toggle', 'wiguard' ),					
					'header-navbar-search'		=> esc_html__( 'Search', 'wiguard' ),
					'header-phone'   			=> esc_html__( 'Phone Number', 'wiguard' ),
					'header-address'  			=> esc_html__( 'Address Text', 'wiguard' ),
					'header-email'   			=> esc_html__( 'Email', 'wiguard' ),
					'header-navbar-search-toggle'	=> esc_html__( 'Search Toggle', 'wiguard' ),
					'header-cart'   			=> esc_html__( 'Cart', 'wiguard' ),
					'header-wishlist'   		=> esc_html__( 'Wishlist', 'wiguard' )
				)
			),
			'required'	=> array( $prefix.'header_navbar_items_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Sticky/Fixed Part', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header sticky settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Header Sticky/Fixed Part Options', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header sticky part option.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_stikcy_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Sticky/Fixed Part Width', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header sticky part width for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'dimension',
			'id'	=> $prefix.'header_stikcy_width',
			'property' => 'width',
			'required'	=> array( $prefix.'header_stikcy_opt', 'custom' )
		),
		array( 
			'label'	=> '',
			'desc'	=> esc_html__( 'These all are header sticky skin settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Header Sticky/Fixed Part Skin Settings', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header sticky skin settings options.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_stikcy_skin_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Sticky/Fixed Part Font Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header sticky font color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'color',
			'id'	=> $prefix.'header_stikcy_font',
			'required'	=> array( $prefix.'header_stikcy_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Sticky/Fixed Part Background', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header sticky background color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'alpha_color',
			'id'	=> $prefix.'header_stikcy_bg',
			'required'	=> array( $prefix.'header_stikcy_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Sticky/Fixed Part Link Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header Sticky link color settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'link_color',
			'id'	=> $prefix.'header_stikcy_link',
			'required'	=> array( $prefix.'header_stikcy_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Sticky/Fixed Part Border', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header sticky border settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'space',
			'color' => 1,
			'border_style' => 1,
			'id'	=> $prefix.'header_stikcy_border',
			'required'	=> array( $prefix.'header_stikcy_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Sticky/Fixed Part Padding', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header sticky padding settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'space',
			'id'	=> $prefix.'header_stikcy_padding',
			'required'	=> array( $prefix.'header_stikcy_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Header Sticky/Fixed Part Items Option', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose header sticky items enable options.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_stikcy_items_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Header Sticky/Fixed Part Items', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are header sticky items for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'dragdrop_multi',
			'id'	=> $prefix.'header_stikcy_items',
			'dd_fields' => array ( 
				'Top'  => array(
					'header-fixed-logo' => esc_html__( 'Logo', 'wiguard-core' )
				),
				'Middle'  => array(
					'header-fixed-menu'	=> esc_html__( 'Menu', 'wiguard-core' )					
				),
				'Bottom'  => array(
					'header-fixed-social'	=> esc_html__( 'Social', 'wiguard-core' )					
				),
				'disabled' => array(
					'header-fixed-text-1'	=> esc_html__( 'Custom Text 1', 'wiguard-core' ),
					'header-fixed-text-2'	=> esc_html__( 'Custom Text 2', 'wiguard-core' ),					
					'header-fixed-search'	=> esc_html__( 'Search Form', 'wiguard-core' )
				)
			),
			'required'	=> array( $prefix.'header_stikcy_items_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Page Title Bar', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are page title bar settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Page Title Option', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose page title enable or disable.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_page_title_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'1' => esc_html__( 'Enable', 'wiguard-core' ),
				'0' => esc_html__( 'Disable', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Page Title Text', 'wiguard-core' ),
			'desc'	=> esc_html__( 'If this page title is empty, then showing current page default title.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_page_title_text',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> '',
			'required'	=> array( $prefix.'header_page_title_opt', '1' )
		),
		array( 
			'label'	=> esc_html__( 'Page Title Description', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter page title description.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_page_title_desc',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'textarea',
			'default'	=> '',
			'required'	=> array( $prefix.'header_page_title_opt', '1' )
		),
		array( 
			'label'	=> esc_html__( 'Page Title Background Parallax', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose page title background parallax.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_page_title_parallax',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'1' => esc_html__( 'Enable', 'wiguard-core' ),
				'0' => esc_html__( 'Disable', 'wiguard-core' )
			),
			'default'	=> 'theme-default',
			'required'	=> array( $prefix.'header_page_title_opt', '1' )
		),
		array( 
			'label'	=> esc_html__( 'Page Title Background Video Option', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose page title background video option.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_page_title_video_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'1' => esc_html__( 'Enable', 'wiguard-core' ),
				'0' => esc_html__( 'Disable', 'wiguard-core' )
			),
			'default'	=> 'theme-default',
			'required'	=> array( $prefix.'header_page_title_opt', '1' )
		),
		array( 
			'label'	=> esc_html__( 'Page Title Background Video', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter youtube video ID. Example: ZSt9tm3RoUU.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_page_title_video',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> '',
			'required'	=> array( $prefix.'header_page_title_video_opt', '1' )
		),
		array( 
			'label'	=> esc_html__( 'Page Title Bar Items Option', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose page title bar items option.', 'wiguard-core' ), 
			'id'	=> $prefix.'page_title_items_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default',
			'required'	=> array( $prefix.'header_page_title_opt', '1' )
		),
		array( 
			'label'	=> esc_html__( 'Page Title Bar Items', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are page title bar items for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'dragdrop_multi',
			'id'	=> $prefix.'page_title_items',
			'dd_fields' => array ( 
				'Left'  => array(
					'title' => esc_html__( 'Page Title Text', 'wiguard-core' ),
				),
				'Center'  => array(
					
				),
				'Right'  => array(
					'breadcrumb'	=> esc_html__( 'Breadcrumb', 'wiguard-core' )
				),
				'disabled' => array(
					'description' => esc_html__( 'Page Title Description', 'wiguard-core' )
				)
			),
			'required'	=> array( $prefix.'page_title_items_opt', 'custom' )
		),
		array( 
			'label'	=> '',
			'desc'	=> esc_html__( 'These all are page title skin settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'label',
			'required'	=> array( $prefix.'header_page_title_opt', '1' )
		),
		array( 
			'label'	=> esc_html__( 'Page Title Skin Settings', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose page title skin settings options.', 'wiguard-core' ), 
			'id'	=> $prefix.'page_title_skin_opt',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default',
			'required'	=> array( $prefix.'header_page_title_opt', '1' )
		),
		array( 
			'label'	=> esc_html__( 'Page Title Font Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are page title font color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'color',
			'id'	=> $prefix.'page_title_font',
			'required'	=> array( $prefix.'page_title_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Page Title Description Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'This is page title description color.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'color',
			'id'	=> $prefix.'page_title_desc_color',
			'required'	=> array( $prefix.'page_title_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Page Title Background', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are page title background color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'alpha_color',
			'id'	=> $prefix.'page_title_bg',
			'required'	=> array( $prefix.'page_title_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Page Title Background Image', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter page title background image url.', 'wiguard-core' ), 
			'id'	=> $prefix.'page_title_bg_img',
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'url',
			'default'	=> '',
			'required'	=> array( $prefix.'page_title_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Page Title Link Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are page title link color settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'link_color',
			'id'	=> $prefix.'page_title_link',
			'required'	=> array( $prefix.'page_title_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Page Title Border', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are page title border settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'space',
			'color' => 1,
			'border_style' => 1,
			'id'	=> $prefix.'page_title_border',
			'required'	=> array( $prefix.'page_title_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Page Title Padding', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are page title padding settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'space',
			'id'	=> $prefix.'page_title_padding',
			'required'	=> array( $prefix.'page_title_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Page Title Overlay', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are page title overlay color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Header', 'wiguard-core' ),
			'type'	=> 'alpha_color',
			'id'	=> $prefix.'page_title_overlay',
			'required'	=> array( $prefix.'page_title_skin_opt', 'custom' )
		),
		array( 
			'label'	=> 'Footer General',
			'desc'	=> esc_html__( 'These all are header footer settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Footer Layout', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose footer layout for current page.', 'wiguard-core' ), 
			'id'	=> $prefix.'footer_layout',
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'wide' => esc_html__( 'Wide', 'wiguard-core' ),
				'boxed' => esc_html__( 'Boxed', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Hidden Footer', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose hidden footer option.', 'wiguard-core' ), 
			'id'	=> $prefix.'hidden_footer',
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'1' => esc_html__( 'Enable', 'wiguard-core' ),
				'0' => esc_html__( 'Disable', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> '',
			'desc'	=> esc_html__( 'These all are footer skin settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Footer Skin Settings', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose footer skin settings options.', 'wiguard-core' ), 
			'id'	=> $prefix.'footer_skin_opt',
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Footer Font Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer font color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'color',
			'id'	=> $prefix.'footer_font',
			'required'	=> array( $prefix.'footer_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Background Image', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose footer background image for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'image',
			'id'	=> $prefix.'footer_bg_img',
			'required'	=> array( $prefix.'footer_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Background Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer background color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'color',
			'id'	=> $prefix.'footer_bg',
			'required'	=> array( $prefix.'footer_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Background Overlay', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer background overlay color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'alpha_color',
			'id'	=> $prefix.'footer_bg_overlay',
			'required'	=> array( $prefix.'footer_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Link Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer link color settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'link_color',
			'id'	=> $prefix.'footer_link',
			'required'	=> array( $prefix.'footer_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Border', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer border settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'space',
			'color' => 1,
			'border_style' => 1,
			'id'	=> $prefix.'footer_border',
			'required'	=> array( $prefix.'footer_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Padding', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer padding settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'space',
			'id'	=> $prefix.'footer_padding',
			'required'	=> array( $prefix.'footer_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Items Option', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose footer items enable options.', 'wiguard-core' ), 
			'id'	=> $prefix.'footer_items_opt',
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Footer Items', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer items for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'dragdrop_multi',
			'id'	=> $prefix.'footer_items',
			'dd_fields' => array ( 
				'Enabled'  => array(
					'footer-bottom'	=> esc_html__( 'Footer Bottom', 'wiguard-core' )
				),
				'disabled' => array(
					'footer-top' => esc_html__( 'Footer Top', 'wiguard-core' ),
					'footer-middle'	=> esc_html__( 'Footer Middle', 'wiguard-core' )
				)
			),
			'required'	=> array( $prefix.'footer_items_opt', 'custom' )
		),
		array( 
			'label'	=> 'Footer Top',
			'desc'	=> esc_html__( 'These all are footer top settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Footer Top Skin', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose footer top skin options.', 'wiguard-core' ), 
			'id'	=> $prefix.'footer_top_skin_opt',
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Footer Top Font Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer top font color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'color',
			'id'	=> $prefix.'footer_top_font',
			'required'	=> array( $prefix.'footer_top_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Top Widget Title color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer top widget title color.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'color',
			'id'	=> $prefix.'footer_top_widget_title_color',
			'required'	=> array( $prefix.'footer_top_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Top Background', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer background color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'alpha_color',
			'id'	=> $prefix.'footer_top_bg',
			'required'	=> array( $prefix.'footer_top_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Top Link Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer top link color settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'link_color',
			'id'	=> $prefix.'footer_top_link',
			'required'	=> array( $prefix.'footer_top_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Top Border', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer top border settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'space',
			'color' => 1,
			'border_style' => 1,
			'id'	=> $prefix.'footer_top_border',
			'required'	=> array( $prefix.'footer_top_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Top Padding', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer top padding settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'space',
			'id'	=> $prefix.'footer_top_padding',
			'required'	=> array( $prefix.'footer_top_skin_opt', 'custom' )
		),
		array( 
			'label'	=> 'Footer Top Columns and Sidebars Settings',
			'desc'	=> esc_html__( 'These all are footer top columns and sidebar settings.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Footer Layout Option', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose footer layout option.', 'wiguard-core' ), 
			'id'	=> $prefix.'footer_top_layout_opt',
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Footer Layout', 'wiguard-core' ),
			'id'	=> $prefix.'footer_top_layout',
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'image_select',
			'options' => array(
				'3-3-3-3'	=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-1.png',
				'4-4-4'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-2.png',
				'3-6-3'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-3.png',
				'6-6'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-4.png',
				'9-3'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-5.png',
				'3-9'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-6.png',
				'4-2-2-2-2'	=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-8.png',
				'6-2-2-2'	=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-9.png',
				'12'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-7.png'
			),
			'default'	=> '4-4-4',
			'required'	=> array( $prefix.'footer_top_layout_opt', 'custom' )
		),
		array( 
			'label'	=> 'Footer First Column',
			'desc'	=> esc_html__( 'Select footer first column widget.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'id'	=> $prefix.'footer_top_sidebar_1',
			'type'	=> 'sidebar',
			'required'	=> array( $prefix.'footer_top_layout_opt', 'custom' )
		),
		array( 
			'label'	=> 'Footer Second Column',
			'desc'	=> esc_html__( 'Select footer second column widget.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'id'	=> $prefix.'footer_top_sidebar_2',
			'type'	=> 'sidebar',
			'required'	=> array( $prefix.'footer_top_layout_opt', 'custom' )
		),
		array( 
			'label'	=> 'Footer Third Column',
			'desc'	=> esc_html__( 'Select footer third column widget.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'id'	=> $prefix.'footer_top_sidebar_3',
			'type'	=> 'sidebar',
			'required'	=> array( $prefix.'footer_top_layout_opt', 'custom' )
		),
		array( 
			'label'	=> 'Footer Fourth Column',
			'desc'	=> esc_html__( 'Select footer fourth column widget.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'id'	=> $prefix.'footer_top_sidebar_4',
			'type'	=> 'sidebar',
			'required'	=> array( $prefix.'footer_top_layout_opt', 'custom' )
		),
		array( 
			'label'	=> 'Footer Middle',
			'desc'	=> esc_html__( 'These all are footer middle settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Footer Middle Skin', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose footer middle skin options.', 'wiguard-core' ), 
			'id'	=> $prefix.'footer_middle_skin_opt',
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Footer Middle Font Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer middle font color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'color',
			'id'	=> $prefix.'footer_middle_font',
			'required'	=> array( $prefix.'footer_middle_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Middle Widget Title Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer middle widget title color.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'color',
			'id'	=> $prefix.'footer_middle_widget_title_color',
			'required'	=> array( $prefix.'footer_middle_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Middle Background', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer background color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'alpha_color',
			'id'	=> $prefix.'footer_middle_bg',
			'required'	=> array( $prefix.'footer_middle_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Middle Link Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer middle link color settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'link_color',
			'id'	=> $prefix.'footer_middle_link',
			'required'	=> array( $prefix.'footer_middle_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Middle Border', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer middle border settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'space',
			'color' => 1,
			'border_style' => 1,
			'id'	=> $prefix.'footer_middle_border',
			'required'	=> array( $prefix.'footer_middle_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Middle Padding', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer middle padding settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'space',
			'id'	=> $prefix.'footer_middle_padding',
			'required'	=> array( $prefix.'footer_middle_skin_opt', 'custom' )
		),
		array( 
			'label'	=> 'Footer Middle Columns and Sidebars Settings',
			'desc'	=> esc_html__( 'These all are footer middle columns and sidebar settings.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Footer Layout Option', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose footer layout option.', 'wiguard-core' ), 
			'id'	=> $prefix.'footer_middle_layout_opt',
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Footer Layout', 'wiguard-core' ),
			'id'	=> $prefix.'footer_middle_layout',
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'image_select',
			'options' => array(
				'3-3-3-3'	=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-1.png',
				'4-4-4'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-2.png',
				'3-6-3'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-3.png',
				'6-6'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-4.png',
				'9-3'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-5.png',
				'3-9'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-6.png',
				'4-2-2-2-2'	=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-8.png',
				'6-2-2-2'	=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-9.png',
				'12'		=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/footer/footer-7.png'
			),
			'default'	=> '4-4-4',
			'required'	=> array( $prefix.'footer_middle_layout_opt', 'custom' )
		),
		array( 
			'label'	=> 'Footer First Column',
			'desc'	=> esc_html__( 'Select footer first column widget.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'id'	=> $prefix.'footer_middle_sidebar_1',
			'type'	=> 'sidebar',
			'required'	=> array( $prefix.'footer_middle_layout_opt', 'custom' )
		),
		array( 
			'label'	=> 'Footer Second Column',
			'desc'	=> esc_html__( 'Select footer second column widget.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'id'	=> $prefix.'footer_middle_sidebar_2',
			'type'	=> 'sidebar',
			'required'	=> array( $prefix.'footer_middle_layout_opt', 'custom' )
		),
		array( 
			'label'	=> 'Footer Third Column',
			'desc'	=> esc_html__( 'Select footer third column widget.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'id'	=> $prefix.'footer_middle_sidebar_3',
			'type'	=> 'sidebar',
			'required'	=> array( $prefix.'footer_middle_layout_opt', 'custom' )
		),
		array( 
			'label'	=> 'Footer Fourth Column',
			'desc'	=> esc_html__( 'Select footer fourth column widget.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'id'	=> $prefix.'footer_middle_sidebar_4',
			'type'	=> 'sidebar',
			'required'	=> array( $prefix.'footer_middle_layout_opt', 'custom' )
		),
		array( 
			'label'	=> 'Footer Bottom',
			'desc'	=> esc_html__( 'These all are footer bottom settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Footer Bottom Fixed', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose footer bottom fixed option.', 'wiguard-core' ), 
			'id'	=> $prefix.'footer_bottom_fixed',
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'1' => esc_html__( 'Enable', 'wiguard-core' ),
				'0' => esc_html__( 'Disable', 'wiguard-core' )			
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> '',
			'desc'	=> esc_html__( 'These all are footer bottom skin settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Footer Bottom Skin', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose footer bottom skin options.', 'wiguard-core' ), 
			'id'	=> $prefix.'footer_bottom_skin_opt',
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Footer Bottom Font Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer bottom font color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'color',
			'id'	=> $prefix.'footer_bottom_font',
			'required'	=> array( $prefix.'footer_bottom_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Bottom Background', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer bottom background color for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'alpha_color',
			'id'	=> $prefix.'footer_bottom_bg',
			'required'	=> array( $prefix.'footer_bottom_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Bottom Link Color', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer bottom link color settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'link_color',
			'id'	=> $prefix.'footer_bottom_link',
			'required'	=> array( $prefix.'footer_bottom_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Bottom Border', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer bottom border settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'space',
			'color' => 1,
			'border_style' => 1,
			'id'	=> $prefix.'footer_bottom_border',
			'required'	=> array( $prefix.'footer_bottom_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Bottom Padding', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer bottom padding settings for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'space',
			'id'	=> $prefix.'footer_bottom_padding',
			'required'	=> array( $prefix.'footer_bottom_skin_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Bottom Widget Option', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose footer bottom widget options.', 'wiguard-core' ), 
			'id'	=> $prefix.'footer_bottom_widget_opt',
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> 'Footer Bottom Widget',
			'desc'	=> esc_html__( 'Select footer bottom widget.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'id'	=> $prefix.'footer_bottom_widget',
			'type'	=> 'sidebar',
			'required'	=> array( $prefix.'footer_bottom_widget_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Footer Bottom Items Option', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose footer bottom items options.', 'wiguard-core' ), 
			'id'	=> $prefix.'footer_bottom_items_opt',
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Footer Bottom Items', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are footer bottom items for current page.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Footer', 'wiguard-core' ),
			'type'	=> 'dragdrop_multi',
			'id'	=> $prefix.'footer_bottom_items',
			'dd_fields' => array ( 
				'Left'  => array(
					'copyright' => esc_html__( 'Copyright Text', 'wiguard-core' )
				),
				'Center'  => array(
					'menu'	=> esc_html__( 'Footer Menu', 'wiguard-core' )
				),
				'Right'  => array(),
				'disabled' => array(
					'social'	=> esc_html__( 'Footer Social Links', 'wiguard-core' ),
					'widget'	=> esc_html__( 'Custom Widget', 'wiguard-core' )
				)
			),
			'required'	=> array( $prefix.'footer_bottom_items_opt', 'custom' )
		),
		//Header Slider
		array( 
			'label'	=> esc_html__( 'Slider', 'wiguard-core' ),
			'desc'	=> esc_html__( 'This header slider settings.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Slider', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Slider Option', 'wiguard-core' ),
			'id'	=> $prefix.'header_slider_opt',
			'tab'	=> esc_html__( 'Slider', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'bottom' => esc_html__( 'Below Header', 'wiguard-core' ),
				'top' => esc_html__( 'Above Header', 'wiguard-core' ),
				'none' => esc_html__( 'None', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Slider Shortcode', 'wiguard-core' ),
			'desc'	=> esc_html__( 'This is the place for enter slider shortcode. Example revolution slider shortcodes.', 'wiguard-core' ), 
			'id'	=> $prefix.'header_slider',
			'tab'	=> esc_html__( 'Slider', 'wiguard-core' ),
			'type'	=> 'textarea',
			'default'	=> ''
		),
	);
	return $fields;
}
$page_fields = wiguard_metabox_fields( 'wiguard_page_' );
$page_box = new Custom_Add_Meta_Box( 'wiguard_page_metabox', esc_html__( 'Wiguard Page Options', 'wiguard-core' ), $page_fields, 'page', true );

/* Custom Post Type Options */
$wiguard_cpt = WiguardFamework::wiguard_static_theme_mod( 'cpt-opts' );

// Portfolio Options
if( is_array( $wiguard_cpt ) && in_array( "portfolio", $wiguard_cpt ) ){
	
	// CPT Portfolio Metabox
	$prefix = 'wiguard_portfolio_';
	$portfolio_fields = array(
		array( 
			'label'	=> esc_html__( 'Portfolio General Settings', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are single portfolio general settings.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Portfolio', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Portfolio Layout Option', 'wiguard-core' ),
			'id'	=> $prefix.'layout_opt',
			'tab'	=> esc_html__( 'Portfolio', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'		
		),
		array( 
			'label'	=> esc_html__( 'Portfolio Layout', 'wiguard-core' ),
			'id'	=> $prefix.'layout',
			'tab'	=> esc_html__( 'Portfolio', 'wiguard-core' ),
			'type'	=> 'image_select',
			'options' => array(
				'1'	=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/portfolio-layouts/1.png', 
				'2'	=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/portfolio-layouts/2.png',
				'3'	=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/portfolio-layouts/3.png',
				'4'	=> WIGUARD_THEME_ADMIN_URL . '/customizer/assets/images/portfolio-layouts/4.png'
	
			),
			'default'	=> '1',
			'required'	=> array( $prefix.'layout_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Sticky Column', 'wiguard-core' ),
			'id'	=> $prefix.'sticky',
			'tab'	=> esc_html__( 'Portfolio', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'none' => esc_html__( 'None', 'wiguard-core' ),
				'right' => esc_html__( 'Right Column', 'wiguard-core' ),
				'left' => esc_html__( 'Left Column', 'wiguard-core' )
			),
			'default'	=> 'none'		
		),
		array( 
			'label'	=> esc_html__( 'Portfolio Format', 'wiguard-core' ),
			'id'	=> $prefix.'format',
			'tab'	=> esc_html__( 'Portfolio', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'standard' => esc_html__( 'Standard', 'wiguard-core' ),
				'video' => esc_html__( 'Video', 'wiguard-core' ),
				'audio' => esc_html__( 'Audio', 'wiguard-core' ),
				'gallery' => esc_html__( 'Gallery', 'wiguard-core' ),
				'gmap' => esc_html__( 'Google Map', 'wiguard-core' )
			),
			'default'	=> 'standard'		
		),
		array( 
			'label'	=> esc_html__( 'Portfolio Meta Items Options', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose portfolio meta items option.', 'wiguard-core' ), 
			'id'	=> $prefix.'items_opt',
			'tab'	=> esc_html__( 'Portfolio', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'theme-default' => esc_html__( 'Theme Default', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom', 'wiguard-core' )
			),
			'default'	=> 'theme-default'
		),
		array( 
			'label'	=> esc_html__( 'Portfolio Meta Items', 'wiguard-core' ),
			'desc'	=> esc_html__( 'These all are meta items for portfolio. drag and drop needed items from disabled part to enabled.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Portfolio', 'wiguard-core' ),
			'type'	=> 'dragdrop_multi',
			'id'	=> $prefix.'items',
			'dd_fields' => array ( 
				'Enabled'  => array(
					'date'		=> esc_html__( 'Date', 'wiguard-core' ),
					'client'	=> esc_html__( 'Client', 'wiguard-core' ),
					'category'	=> esc_html__( 'Category', 'wiguard-core' ),
					'share'		=> esc_html__( 'Share', 'wiguard-core' ),
				),
				'disabled' => array(
					'tag'		=> esc_html__( 'Tags', 'wiguard-core' ),
					'duration'	=> esc_html__( 'Duration', 'wiguard-core' ),
					'url'		=> esc_html__( 'URL', 'wiguard-core' ),
					'place'		=> esc_html__( 'Place', 'wiguard-core' ),
					'estimation'=> esc_html__( 'Estimation', 'wiguard-core' ),
				)
			),
			'required'	=> array( $prefix.'items_opt', 'custom' )
		),
		array( 
			'label'	=> esc_html__( 'Custom Redirect URL', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter url for custom webpage redirection. This link only for portfolio archive layout not for single portfolio.', 'wiguard-core' ), 
			'id'	=> $prefix.'custom_url',
			'tab'	=> esc_html__( 'Portfolio', 'wiguard-core' ),
			'type'	=> 'url',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Custom Redirect URL Target', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose custom url page navigate to blank or same page.', 'wiguard-core' ), 
			'id'	=> $prefix.'custom_url_target',
			'tab'	=> esc_html__( 'Portfolio', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'_blank' => esc_html__( 'Blank', 'wiguard-core' ),
				'_self' => esc_html__( 'Self', 'wiguard-core' )
			),
			'default'	=> '_blank'
		),
		array( 
			'label'	=> esc_html__( 'Portfolio Date', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose/Enter portfolio date.', 'wiguard-core' ), 
			'id'	=> $prefix.'date',
			'tab'	=> esc_html__( 'Info', 'wiguard-core' ),
			'type'	=> 'date',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Date Format', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter date format to show selcted portfolio date. Example: F j, Y', 'wiguard-core' ), 
			'id'	=> $prefix.'date_format',
			'tab'	=> esc_html__( 'Info', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> 'F j, Y'
		),
		array( 
			'label'	=> esc_html__( 'Client Name', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter client name.', 'wiguard-core' ), 
			'id'	=> $prefix.'client_name',
			'tab'	=> esc_html__( 'Info', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Duration', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter duration years or months.', 'wiguard-core' ), 
			'id'	=> $prefix.'duration',
			'tab'	=> esc_html__( 'Info', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Estimation', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter project estimation.', 'wiguard-core' ), 
			'id'	=> $prefix.'estimation',
			'tab'	=> esc_html__( 'Info', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Place', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter project place.', 'wiguard-core' ), 
			'id'	=> $prefix.'place',
			'tab'	=> esc_html__( 'Info', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'URL', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter project URL.', 'wiguard-core' ), 
			'id'	=> $prefix.'url',
			'tab'	=> esc_html__( 'Info', 'wiguard-core' ),
			'type'	=> 'url',
			'default'	=> ''
		),
		//Portfolio Format
		array( 
			'label'	=> esc_html__( 'Video', 'wiguard-core' ),
			'desc'	=> esc_html__( 'This part for if you choosed video format, then you must choose video type and give video id.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Video Modal', 'wiguard-core' ),
			'id'	=> $prefix.'video_modal',
			'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'onclick' => esc_html__( 'On Click Run Video', 'wiguard-core' ),
				'overlay' => esc_html__( 'Modal Box Video', 'wiguard-core' ),
				'direct' => esc_html__( 'Direct Video', 'wiguard-core' )
			),
			'default'	=> 'direct'
		),
		array( 
			'label'	=> esc_html__( 'Video Type', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose video type.', 'wiguard-core' ), 
			'id'	=> $prefix.'video_type',
			'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'' => esc_html__( 'None', 'wiguard-core' ),
				'youtube' => esc_html__( 'Youtube', 'wiguard-core' ),
				'vimeo' => esc_html__( 'Vimeo', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom Video', 'wiguard-core' )
			),
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Video ID', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter Video ID Example: ZSt9tm3RoUU. If you choose custom video type then you enter custom video url and video must be mp4 format.', 'wiguard-core' ), 
			'id'	=> $prefix.'video_id',
			'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'type'	=> 'line',
			'tab'	=> esc_html__( 'Format', 'wiguard-core' )
		),
		array( 
			'label'	=> esc_html__( 'Audio', 'wiguard-core' ),
			'desc'	=> esc_html__( 'This part for if you choosed audio format, then you must give audio id.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Audio Type', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose audio type.', 'wiguard-core' ), 
			'id'	=> $prefix.'audio_type',
			'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'' => esc_html__( 'None', 'wiguard-core' ),
				'soundcloud' => esc_html__( 'Soundcloud', 'wiguard-core' ),
				'custom' => esc_html__( 'Custom Audio', 'wiguard-core' )
			),
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Audio ID', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter soundcloud audio ID. Example: 315307209.', 'wiguard-core' ), 
			'id'	=> $prefix.'audio_id',
			'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'type'	=> 'line',
			'tab'	=> esc_html__( 'Format', 'wiguard-core' )
		),
		array( 
			'label'	=> esc_html__( 'Gallery', 'wiguard-core' ),
			'desc'	=> esc_html__( 'This part for if you choosed gallery format, then you must choose gallery images here.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Gallery Modal', 'wiguard-core' ),
			'id'	=> $prefix.'gallery_modal',
			'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'default' => esc_html__( 'Default Gallery', 'wiguard-core' ),
				'normal' => esc_html__( 'Normal Gallery', 'wiguard-core' ),
				'grid' => esc_html__( 'Grid/Masonry Gallery', 'wiguard-core' )
			),
			'default'	=> 'default'
		),
		array( 
			'label'	=> esc_html__( 'Grid Gutter Size', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter gallery grid gutter size. Example 20', 'wiguard-core' ), 
			'id'	=> $prefix.'grid_gutter',
			'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> '',
			'required'	=> array( $prefix.'gallery_modal', 'grid' )
		),
		array( 
			'label'	=> esc_html__( 'Grid Columns', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter gallery grid columns count. Example 2', 'wiguard-core' ), 
			'id'	=> $prefix.'grid_cols',
			'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> '',
			'required'	=> array( $prefix.'gallery_modal', 'grid' )
		),
		array( 
			'label'	=> esc_html__( 'Choose Gallery Images', 'wiguard-core' ),
			'id'	=> $prefix.'gallery',
			'type'	=> 'gallery',
			'tab'	=> esc_html__( 'Format', 'wiguard-core' )
		),
		array( 
			'type'	=> 'line',
			'tab'	=> esc_html__( 'Format', 'wiguard-core' )
		),
		array( 
			'label'	=> esc_html__( 'Google Map', 'wiguard-core' ),
			'desc'	=> esc_html__( 'This part for if you choosed google map format, then you must give google map lat, lang and map style.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
			'type'	=> 'label'
		),
		array( 
			'label'	=> esc_html__( 'Google Map Latitude', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter google latitude.', 'wiguard-core' ), 
			'id'	=> $prefix.'gmap_latitude',
			'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Google Map Longitude', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter google longitude.', 'wiguard-core' ), 
			'id'	=> $prefix.'gmap_longitude',
			'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Google Map Marker URL', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter google map custom marker url.', 'wiguard-core' ), 
			'id'	=> $prefix.'gmap_marker',
			'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
			'type'	=> 'url',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Google Map Style', 'wiguard-core' ),
			'id'	=> $prefix.'gmap_style',
			'tab'	=> esc_html__( 'Format', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'standard' => esc_html__( 'Standard', 'wiguard-core' ),
				'silver' => esc_html__( 'Silver', 'wiguard-core' ),
				'retro' => esc_html__( 'Retro', 'wiguard-core' ),
				'dark' => esc_html__( 'Dark', 'wiguard-core' ),
				'night' => esc_html__( 'Night', 'wiguard-core' ),
				'aubergine' => esc_html__( 'Aubergine', 'wiguard-core' )
			),
			'default'	=> 'standard'
		),
		array( 
			'type'	=> 'line',
			'tab'	=> esc_html__( 'Format', 'wiguard-core' )
		),
	);
	// CPT Portfolio Options
	$portfolio_box = new Custom_Add_Meta_Box( 'wiguard_portfolio_metabox', esc_html__( 'Wiguard Portfolio Options', 'wiguard-core' ), $portfolio_fields, 'wiguard-portfolio', true );
	
	// CPT Portfolio Page Options
	$portfolio_page_box = new Custom_Add_Meta_Box( 'wiguard_portfolio_page_metabox', esc_html__( 'Wiguard Page Options', 'wiguard-core' ), $page_fields, 'wiguard-portfolio', true );
} // In theme option CPT option if portfolio exists
// Testimonial Options
if( is_array( $wiguard_cpt ) && in_array( "testimonial", $wiguard_cpt ) ){
	
	$prefix = 'wiguard_testimonial_';
	$testimonial_fields = array(	
		array( 
			'label'	=> esc_html__( 'Author Designation', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter author designation.', 'wiguard-core' ), 
			'id'	=> $prefix.'designation',
			'tab'	=> esc_html__( 'Testimonial', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Company Name', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter company name.', 'wiguard-core' ), 
			'id'	=> $prefix.'company_name',
			'tab'	=> esc_html__( 'Testimonial', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Company URL', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter company URL.', 'wiguard-core' ), 
			'id'	=> $prefix.'company_url',
			'tab'	=> esc_html__( 'Testimonial', 'wiguard-core' ),
			'type'	=> 'url',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Rating', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Set user rating.', 'wiguard-core' ), 
			'id'	=> $prefix.'rating',
			'tab'	=> esc_html__( 'Testimonial', 'wiguard-core' ),
			'type'	=> 'rating',
			'default'	=> ''
		)
	);
	
	// CPT Testimonial Options
	$testimonial_box = new Custom_Add_Meta_Box( 'wiguard_testimonial_metabox', esc_html__( 'Wiguard Testimonial Options', 'wiguard-core' ), $testimonial_fields, 'wiguard-testimonial', true );
	
	// CPT Testimonial Page Options
	$testimonial_page_box = new Custom_Add_Meta_Box( 'wiguard_testimonial_page_metabox', esc_html__( 'Wiguard Page Options', 'wiguard-core' ), $page_fields, 'wiguard-testimonial', true );
	
} // In theme option CPT option if testimonial exists
// Team Options
if( is_array( $wiguard_cpt ) && in_array( "team", $wiguard_cpt ) ){
	
	$prefix = 'wiguard_team_';
	$team_fields = array(	
		array( 
			'label'	=> esc_html__( 'Member Designation', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter member designation.', 'wiguard-core' ), 
			'id'	=> $prefix.'designation',
			'tab'	=> esc_html__( 'Team', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Member Email', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter member email.', 'wiguard-core' ), 
			'id'	=> $prefix.'email',
			'tab'	=> esc_html__( 'Team', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Link Target', 'wiguard-core' ),
			'id'	=> $prefix.'link_target',
			'tab'	=> esc_html__( 'Social', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'_blank' => esc_html__( 'New Window', 'wiguard-core' ),
				'_self' => esc_html__( 'Self Window', 'wiguard-core' )
			),
			'default'	=> '_blank'
		),
		array( 
			'label'	=> esc_html__( 'Facebook', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Facebook profile link.', 'wiguard-core' ), 
			'id'	=> $prefix.'facebook',
			'tab'	=> esc_html__( 'Social', 'wiguard-core' ),
			'type'	=> 'url',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Twitter', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Twitter profile link.', 'wiguard-core' ), 
			'id'	=> $prefix.'twitter',
			'tab'	=> esc_html__( 'Social', 'wiguard-core' ),
			'type'	=> 'url',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Instagram', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Instagram profile link.', 'wiguard-core' ), 
			'id'	=> $prefix.'instagram',
			'tab'	=> esc_html__( 'Social', 'wiguard-core' ),
			'type'	=> 'url',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Linkedin', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Linkedin profile link.', 'wiguard-core' ), 
			'id'	=> $prefix.'linkedin',
			'tab'	=> esc_html__( 'Social', 'wiguard-core' ),
			'type'	=> 'url',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Pinterest', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Pinterest profile link.', 'wiguard-core' ), 
			'id'	=> $prefix.'pinterest',
			'tab'	=> esc_html__( 'Social', 'wiguard-core' ),
			'type'	=> 'url',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Dribbble', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Dribbble profile link.', 'wiguard-core' ), 
			'id'	=> $prefix.'dribbble',
			'tab'	=> esc_html__( 'Social', 'wiguard-core' ),
			'type'	=> 'url',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Flickr', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Flickr profile link.', 'wiguard-core' ), 
			'id'	=> $prefix.'flickr',
			'tab'	=> esc_html__( 'Social', 'wiguard-core' ),
			'type'	=> 'url',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Youtube', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Youtube profile link.', 'wiguard-core' ), 
			'id'	=> $prefix.'youtube',
			'tab'	=> esc_html__( 'Social', 'wiguard-core' ),
			'type'	=> 'url',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Vimeo', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Vimeo profile link.', 'wiguard-core' ), 
			'id'	=> $prefix.'vimeo',
			'tab'	=> esc_html__( 'Social', 'wiguard-core' ),
			'type'	=> 'url',
			'default'	=> ''
		)
	);
	
	// CPT Team Options
	$team_box = new Custom_Add_Meta_Box( 'wiguard_team_metabox', esc_html__( 'Wiguard Team Options', 'wiguard-core' ), $team_fields, 'wiguard-team', true );
	
	// CPT Team Page Options
	$team_page_box = new Custom_Add_Meta_Box( 'wiguard_team_page_metabox', esc_html__( 'Wiguard Page Options', 'wiguard-core' ), $page_fields, 'wiguard-team', true );
	
} // In theme option CPT option if team exists
// Event Options
if( is_array( $wiguard_cpt ) && in_array( "events", $wiguard_cpt ) ){
	
	$prefix = 'wiguard_event_';
	$event_fields = array(	
		array( 
			'label'	=> esc_html__( 'Event Organiser Name', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter event organiser name.', 'wiguard-core' ), 
			'id'	=> $prefix.'organiser_name',
			'tab'	=> esc_html__( 'Events', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Event Organiser Designation', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter event organiser designation.', 'wiguard-core' ), 
			'id'	=> $prefix.'organiser_designation',
			'tab'	=> esc_html__( 'Events', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Event Start Date', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter event start date.', 'wiguard-core' ), 
			'id'	=> $prefix.'start_date',
			'tab'	=> esc_html__( 'Events', 'wiguard-core' ),
			'type'	=> 'date',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Event End Date', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter event end date.', 'wiguard-core' ), 
			'id'	=> $prefix.'end_date',
			'tab'	=> esc_html__( 'Events', 'wiguard-core' ),
			'type'	=> 'date',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Date Format', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter date format to show selcted event date. Example: F j, Y', 'wiguard-core' ), 
			'id'	=> $prefix.'date_format',
			'tab'	=> esc_html__( 'Events', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> 'F j, Y'
		),
		array( 
			'label'	=> esc_html__( 'Event Start Time', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter event start time.', 'wiguard-core' ), 
			'id'	=> $prefix.'time',
			'tab'	=> esc_html__( 'Events', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Event Cost', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter event cost.', 'wiguard-core' ), 
			'id'	=> $prefix.'cost',
			'tab'	=> esc_html__( 'Events', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Custom Link for Event Item', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter custom link to redirect custom event page.', 'wiguard-core' ), 
			'id'	=> $prefix.'link',
			'tab'	=> esc_html__( 'Events', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Custom Link Target', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose custom link target to new window or self window.', 'wiguard-core' ), 
			'id'	=> $prefix.'link_target',
			'tab'	=> esc_html__( 'Events', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'_blank' => esc_html__( 'New Window', 'wiguard-core' ),
				'_self' => esc_html__( 'Self Window', 'wiguard-core' )
			),
			'default'	=> '_blank'
		),
		array( 
			'label'	=> esc_html__( 'Custom Link Button Text', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter custom link buttom text: Example More About Event.', 'wiguard-core' ), 
			'id'	=> $prefix.'link_text',
			'tab'	=> esc_html__( 'Events', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Event Schedule Content', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter event schedule content. You can place here Shortcodes.', 'wiguard-core' ), 
			'id'	=> $prefix.'schedule_content',
			'tab'	=> esc_html__( 'Events', 'wiguard-core' ),
			'type'	=> 'textarea',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Venue Name', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter event venue name.', 'wiguard-core' ), 
			'id'	=> $prefix.'venue_name',
			'tab'	=> esc_html__( 'Address', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Venue Address', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter event venue address.', 'wiguard-core' ), 
			'id'	=> $prefix.'venue_address',
			'tab'	=> esc_html__( 'Address', 'wiguard-core' ),
			'type'	=> 'textarea',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'E-mail', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter email id for clarification about event.', 'wiguard-core' ), 
			'id'	=> $prefix.'email',
			'tab'	=> esc_html__( 'Address', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Phone', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter phone number for contact about event.', 'wiguard-core' ), 
			'id'	=> $prefix.'phone',
			'tab'	=> esc_html__( 'Address', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Website', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter event website.', 'wiguard-core' ), 
			'id'	=> $prefix.'website',
			'tab'	=> esc_html__( 'Address', 'wiguard-core' ),
			'type'	=> 'url',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Latitude', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter map latitude.', 'wiguard-core' ), 
			'id'	=> $prefix.'gmap_latitude',
			'tab'	=> esc_html__( 'GMap', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Longitude', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter map longitude.', 'wiguard-core' ), 
			'id'	=> $prefix.'gmap_longitude',
			'tab'	=> esc_html__( 'GMap', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Google Map Marker URL', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter google map custom marker url.', 'wiguard-core' ), 
			'id'	=> $prefix.'gmap_marker',
			'tab'	=> esc_html__( 'GMap', 'wiguard-core' ),
			'type'	=> 'url',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Google Map Style', 'wiguard-core' ),
			'id'	=> $prefix.'gmap_style',
			'tab'	=> esc_html__( 'GMap', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'standard' => esc_html__( 'Standard', 'wiguard-core' ),
				'silver' => esc_html__( 'Silver', 'wiguard-core' ),
				'retro' => esc_html__( 'Retro', 'wiguard-core' ),
				'dark' => esc_html__( 'Dark', 'wiguard-core' ),
				'night' => esc_html__( 'Night', 'wiguard-core' ),
				'aubergine' => esc_html__( 'Aubergine', 'wiguard-core' )
			),
			'default'	=> 'standard'
		),
		array( 
			'label'	=> esc_html__( 'Google Map Height', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter map height in values. Example 400', 'wiguard-core' ), 
			'id'	=> $prefix.'gmap_height',
			'tab'	=> esc_html__( 'GMap', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> '400'
		),
		array( 
			'label'	=> esc_html__( 'Contact Form', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Contact form shortcode here.', 'wiguard-core' ), 
			'id'	=> $prefix.'contact_form',
			'tab'	=> esc_html__( 'Contact', 'wiguard-core' ),
			'type'	=> 'textarea',
			'default'	=> ''
		),
		array( 
			'label'	=> esc_html__( 'Event Info Columns', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Enter column division values like given format. Example 3-3-6', 'wiguard-core' ), 
			'id'	=> $prefix.'col_layout',
			'tab'	=> esc_html__( 'Layout', 'wiguard-core' ),
			'type'	=> 'text',
			'default'	=> '3-3-6'
		),
		array( 
			'label'	=> esc_html__( 'Event Detail Items', 'wiguard-core' ),
			'desc'	=> esc_html__( 'This is layout settings for event.', 'wiguard-core' ), 
			'tab'	=> esc_html__( 'Layout', 'wiguard-core' ),
			'type'	=> 'dragdrop_multi',
			'id'	=> $prefix.'event_info_items',
			'dd_fields' => array ( 
				'Enable'  => array(
					'event-details' => esc_html__( 'Event Details', 'wiguard-core' ),
					'event-venue' => esc_html__( 'Event Venue', 'wiguard-core' ),
					'event-map' => esc_html__( 'Event Map', 'wiguard-core' )
				),
				'disabled' => array(
					'event-form'	=> esc_html__( 'Event Form', 'wiguard-core' ),
				)
			),
		),
		array( 
			'label'	=> esc_html__( 'Navigation', 'wiguard-core' ),
			'id'	=> $prefix.'nav_position',
			'tab'	=> esc_html__( 'Layout', 'wiguard-core' ),
			'type'	=> 'select',
			'options' => array ( 
				'top' => esc_html__( 'Top', 'wiguard-core' ),
				'bottom' => esc_html__( 'Bottom', 'wiguard-core' )
			),
			'default'	=> 'top'
		),
	);
	
	// CPT Events Options
	$event_box = new Custom_Add_Meta_Box( 'wiguard_event_metabox', esc_html__( 'Wiguard Event Options', 'wiguard-core' ), $event_fields, 'wiguard-events', true );
	
	// CPT Events Page Options
	$event_page_box = new Custom_Add_Meta_Box( 'wiguard_event_page_metabox', esc_html__( 'Wiguard Page Options', 'wiguard-core' ), $page_fields, 'wiguard-events', true );
	
} // In theme option CPT option if event exists
// Service Options
if( is_array( $wiguard_cpt ) && in_array( "services", $wiguard_cpt ) ){
	 
	$prefix = 'wiguard_service_';
	
	$service_fields = array(	
		array( 
			'label'	=> esc_html__( 'Service Image', 'wiguard-core' ),
			'desc'	=> esc_html__( 'Choose service image for show front.', 'wiguard-core' ), 
			'id'	=> $prefix.'title_img',
			'tab'	=> esc_html__( 'Service', 'wiguard-core' ),
			'type'	=> 'image',
			'default'	=> ''
		)
	);
	
	// CPT Service Options
	$service_box = new Custom_Add_Meta_Box( 'wiguard_service_metabox', esc_html__( 'Wiguard Service Options', 'wiguard-core' ), $service_fields, 'wiguard-services', true );
	
	// CPT Events Page Options
	$service_page_box = new Custom_Add_Meta_Box( 'wiguard_service_page_metabox', esc_html__( 'Wiguard Page Options', 'wiguard-core' ), $page_fields, 'wiguard-services', true );
	
}
