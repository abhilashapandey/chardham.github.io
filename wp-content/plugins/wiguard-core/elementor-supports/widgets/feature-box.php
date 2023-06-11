<?php
/**
 * Wiguard Elementor Addon Feature Box
 *
 * @since 1.0.0
 */
class Elementor_Feature_Box_Widget extends \Elementor\Widget_Base {
	
	private $excerpt_len;
	private $title_array;
	private $fbox_content;
	private $fbox_icon_array;
	private $fbox_img_array;
	private $fbox_video_array;
	private $fbox_btn_array;
	
	/**
	 * Get widget name.
	 *
	 * Retrieve Blog widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return "wiguardfeaturebox";
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Blog widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( "Feature Box", "wiguard-core" );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Blog widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return "ti-layout-cta-btn-left";
	}


	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Animated Text widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ "wiguard-elements" ];
	}
	
	/**
	 * Retrieve the list of scripts the counter widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.3.0
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */

	/**
	 * Register Animated Text widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {

		//General Section
		$this->start_controls_section(
			"general_section",
			[
				"label"	=> esc_html__( "General", "wiguard-core" ),
				"tab"	=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Default counter options.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"extra_class",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Extra Class", "wiguard-core" ),
				"description"	=> esc_html__( "Put extra class for some additional styles.", "wiguard-core" )
			]
		);
		$this->end_controls_section();
		
		//Title Section
		$this->start_controls_section(
			"title_section",
			[
				"label"			=> esc_html__( "Title", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Title options available here.", "wiguard-core" )
			]
		);
		$this->add_control(
			"title",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Feature Box Title", "wiguard-core" ),
				"description"	=> esc_html__( "Input feature box title here.", "wiguard-core" ),
				"default" 		=>  esc_html__( "Feature Title", "wiguard-core" )
			]
		);
		$this->add_control(
			"title_url_opt",
			[
				"label" 		=> esc_html__( "Set Title as Link", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for feature box title as link. Enable yes to set title url.", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "0"
			]
		);
		$this->add_control(
			"title_url",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Title External Link", "wiguard-core" ),
				"description"	=> esc_html__( "Set title external url.", "wiguard-core" ),
				"condition" 	=> [
					"title_url_opt" 		=> "1"
				]
			]
		);
		$this->add_control(
			"title_external_tab",
			[
				"label"			=> esc_html__( "Title External Target", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"default"		=> "_blank",
				"options"		=> [
					"_blank"		=> esc_html__( "New Tab", "wiguard-core" ),
					"_self"			=> esc_html__( "Self Tab", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"title_head",
			[
				"label"			=> esc_html__( "Title Heading Tag", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"default"		=> "h3",
				"options"		=> [
					"h1"		=> esc_html__( "Heading 1", "wiguard-core" ),
					"h2"		=> esc_html__( "Heading 2", "wiguard-core" ),
					"h3"		=> esc_html__( "Heading 3", "wiguard-core" ),
					"h4"		=> esc_html__( "Heading 4", "wiguard-core" ),
					"h5"		=> esc_html__( "Heading 5", "wiguard-core" ),
					"h6"		=> esc_html__( "Heading 6", "wiguard-core" ),
				]
			]
		);
		$this->add_control(
			"title_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Title Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the font color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper .feature-box-title, {{WRAPPER}} .feature-box-wrapper .feature-box-title > a, {{WRAPPER}} .feature-box-wrapper .feature-box-title > a:hover' => 'color: {{VALUE}};'
				],
			]
		);
		$this->add_control(
			"title_text_trans",
			[
				"label"			=> esc_html__( "Title Transform", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"description"	=> esc_html__( "Set title text-transform property.", "wiguard-core" ),
				"default"		=> "none",
				"options"		=> [
					"none"			=> esc_html__( "Default", "wiguard-core" ),
					"capitalize"	=> esc_html__( "Capitalized", "wiguard-core" ),
					"uppercase"		=> esc_html__( "Upper Case", "wiguard-core" ),
					"lowercase"		=> esc_html__( "Lower Case", "wiguard-core" )
				],
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper .feature-box-title' => 'text-transform: {{VALUE}};'
				],
			]
		);
		$this->end_controls_section();
		
		//Layouts Section
		$this->start_controls_section(
			"layouts_section",
			[
				"label"			=> esc_html__( "Layouts", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Layouts options available here.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"font_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Font Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the font color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"feature_layout",
			[
				"label"			=> esc_html__( "Feature Box Layout", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"default"		=> "default",
				"options"		=> [
					"default"		=> esc_html__( "Default", "wiguard-core" ),
					"classic"		=> esc_html__( "Classic", "wiguard-core" ),
					"modern"		=> esc_html__( "Modern", "wiguard-core" ),
					"classic-pro"	=> esc_html__( "Classic Pro", "wiguard-core" ),
				]
			]
		);
		$this->add_control(
			"text_align",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Text Align", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for Feature box text align.", "wiguard-core" ),
				"default"		=> "center",
				"options"		=> [
					"default"	=> esc_html__( "Default", "wiguard-core" ),
					"left"		=> esc_html__( "Left", "wiguard-core" ),
					"center"	=> esc_html__( "Center", "wiguard-core" ),
					"right"		=> esc_html__( "Right", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"list_style",
			[
				"label" 		=> esc_html__( "Feature Box List Style", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for enable or disable feature box list style.", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "0"
			]
		);
		$this->add_control(
			"list_opps",
			[
				"label" 		=> esc_html__( "List Opposite", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for enable or disable feature list style opposite look.", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "0",
				"condition" 	=> [
					"list_style" 		=> "1"
				]
			]
		);
		$this->add_control(
			"content_full",
			[
				"label" 		=> esc_html__( "Full Width Content", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for enable or disable feature content full width for list style.", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "0",
				"condition" 	=> [
					"list_style" 		=> "1"
				]
			]
		);
		$this->add_control(
			"fbox_items",
			[
				"label"				=> "Feature Box Items",
				"description"		=> esc_html__( "This is settings for feature box custom layout. here you can set your own layout. Drag and drop needed feature items to Enabled part.", "wiguard-core" ),
				"type"				=> "dragdrop",
				"ddvalues" 			=> [ 
					'Enabled' => array( 
						'icon'	=> esc_html__( 'Icon', 'wiguard-core' ),
						'title'	=> esc_html__( 'Title', 'wiguard-core' ),
						'content'	=> esc_html__( 'Content', 'wiguard-core' )					
					),
					'disabled' => array(
						'image'	=> esc_html__( 'Image', 'wiguard-core' ),
						'btn'	=> esc_html__( 'Button', 'wiguard-core' ),
						'video'	=> esc_html__( 'Video', 'wiguard-core' ),
						'number'=> esc_html__( 'Text or Number', 'wiguard-core' )
					)
				],
				"condition" 	=> [
					"list_style" 		=> "0"
				]
			]
		);
		$this->add_control(
			"fbox_list_items",
			[
				"label"				=> "Feature Box List Items",
				"description"		=> esc_html__( "This is settings for feature box custom list layout. here you can set your own layout. Drag and drop needed feature items to Left and Right part.", "wiguard-core" ),
				"type"				=> "dragdrop",
				"ddvalues" 			=> [ 
					esc_html__( "Left", "wiguard-core" ) => array( 
						"icon"	=> esc_html__( "Icon", "wiguard-core" )				
					),
					esc_html__( "Right", "wiguard-core" ) => array( 
						"title"	=> esc_html__( "Title", "wiguard-core" ),
						"content"	=> esc_html__( "Content", "wiguard-core" )					
					),
					esc_html__( "disabled", "wiguard-core" ) => array(
						"image"	=> esc_html__( "Image", "wiguard-core" ),
						"btn"	=> esc_html__( "Button", "wiguard-core" ),
						"video"	=> esc_html__( "Video", "wiguard-core" ),
						"number"	=> esc_html__( "Text or Number", "wiguard-core" )
					)
				],
				"condition" 	=> [
					"list_style" 		=> "1"
				]
			]
		);
		$this->add_control(
			"ribbon_value",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Ribbon Values", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for corner rounded number like ribbon. This option working only when active feature box layout 'Classic Pro'.", "wiguard-core" ),
				"default"		=> "",
				"condition" 	=> [
					"feature_layout" 	=> "classic-pro"
				]
			]
		);
		$this->end_controls_section();
		
		//Icon Section
		$this->start_controls_section(
			"icon_section",
			[
				"label"			=> esc_html__( "Icon", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Icon options available here.", "wiguard-core" ),
			]
		);	
		$this->add_control(
			"icon_opt",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Choose Icon Font", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for select icon font.", "wiguard-core" ),
				"default"		=> "icon_fa",
				"options"		=> [
					"icon_fa"	=> esc_html__( "Font Awesome", "wiguard-core" ),
					"icon_ti"	=> esc_html__( "Themify", "wiguard-core" ),
				]
			]
		);
		$this->add_control(
			"icon_fa",
			[
				"label" => esc_html__( "Fa Icon", "wiguard-core" ),
				"type" 	=> "fontawesomeicon",
				"description"	=> esc_html__( "This is option for select font awesome icons.", "wiguard-core" ),
				"default" => "ti-star",
				"condition" 	=> [
					"icon_opt" 	=> "icon_fa"
				],
			]
		);
		$this->add_control(
			"icon_ti",
			[
				"label" => esc_html__( "Ti Icon", "wiguard-core" ),
				"type" 	=> "themifyicon",
				"description"	=> esc_html__( "This is option for select themify icons.", "wiguard-core" ),
				"default" => "ti-heart",
				"condition" 	=> [
					"icon_opt" 	=> "icon_ti"
				],
			]
		);
		$this->add_control(
			"icon_size",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Icon Size", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for set icon size. Example 30", "wiguard-core" ),
				"default"		=> "24",
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper .feature-box-icon > span' => 'font-size: {{VALUE}}px;'
				]
			]
		);
		$this->add_control(
			"icon_outer_size",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Icon Outer Width and Height", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for set icon outer width and Height. Example 60", "wiguard-core" ),
				"default"		=> "48",
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper .feature-box-icon > span' => 'width: {{VALUE}}px; height: {{VALUE}}px; line-height: {{VALUE}}px;'
				]
			]
		);
		$this->add_control(
			"icon_style",
			[
				"label"			=> esc_html__( "Icon Style", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"description"	=> esc_html__( "Choose icon style.", "wiguard-core" ),
				"default"		=> "rounded-circle",
				"options"		=> [
					"squared"			=> esc_html__( "Squared", "wiguard-core" ),
					"rounded"			=> esc_html__( "Rounded", "wiguard-core" ),
					"rounded-circle"	=> esc_html__( "Circled", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"icon_midd",
			[
				"label" 		=> esc_html__( "Icon Vertical Middle", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for feature box icon set vertically middle from the outer area.", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "1"
			]
		);
		$this->add_control(
			"icon_self_center",
			[
				"label" 		=> esc_html__( "Icon Self Center", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for feature box list style icon set vertically middle.", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "0",
				"condition" 	=> [
					"list_style" 	=> "1"
				],
			]
		);
		$this->add_control(
			"icon_variation",
			[
				"label"			=> esc_html__( "Icon Style", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"description"	=> esc_html__( "This is option for feature box icon style.", "wiguard-core" ),
				"default"		=> "icon-dark",
				"options"		=> [
					"icon-dark"		=> esc_html__( "Dark", "wiguard-core" ),
					"icon-light"	=> esc_html__( "Light", "wiguard-core" ),
					"theme-color"	=> esc_html__( "Theme", "wiguard-core" ),
					"c"				=> esc_html__( "Custom", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"icon_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Icon Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the icon color.", "wiguard-core" ),
				"default" 		=> "",
				"condition" 	=> [
					"icon_variation" 	=> "c"
				],
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper .feature-box-icon > span' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"icon_hcolor",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Icon Hover Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the icon hover color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper:hover .feature-box-icon > span' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"icon_bg",
			[
				"label"			=> esc_html__( "Icon Background", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"description"	=> esc_html__( "Here you can put the icon background.", "wiguard-core" ),
				"default"		=> "none",
				"options"		=> [
					"none"				=> esc_html__( "None", "wiguard-core" ),
					"theme-color-bg"	=> esc_html__( "Theme Color", "wiguard-core" ),
					"c"					=> esc_html__( "Custom Color", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"icon_bg_custom",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Icon Background Custom Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the icon background color.", "wiguard-core" ),
				"default" 		=> "",
				"condition" 	=> [
					"icon_bg" 	=> "c"
				],
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper .feature-box-icon > span' => 'background-color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"icon_hbg",
			[
				"label"			=> esc_html__( "Icon Hover Background", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"description"	=> esc_html__( "Here you can put the icon hover background.", "wiguard-core" ),
				"default"		=> "none",
				"options"		=> [
					"none"				=> esc_html__( "None", "wiguard-core" ),
					"theme-color-hbg"	=> esc_html__( "Theme Color", "wiguard-core" ),
					"c"					=> esc_html__( "Custom Color", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"icon_bg_hcustom",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Icon Hover Background Custom Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the icon background hover custom color.", "wiguard-core" ),
				"default" 		=> "",
				"condition" 	=> [
					"icon_hbg" 	=> "c"
				],
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper:hover .feature-box-icon > span' => 'background-color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"icon_border_size",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Icon Border Size", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the border size. Example 1", "wiguard-core" ),
				"default"		=> "",
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper .feature-box-icon > span' => 'border-width: {{VALUE}}px; border-style: solid;'
				]
			]
		);
		$this->add_control(
			"border_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Border Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the border color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper .feature-box-icon > span' => 'border-color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"border_hcolor",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Hover Border Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the hover border color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper:hover .feature-box-icon > span' => 'border-color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"border_size",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Border Size", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the border size in value. Example 2.", "wiguard-core" ),
				"default"		=> ""
			]
		);
		$this->end_controls_section();	
		
		// Image Section
		$this->start_controls_section(
			"image_section",
			[
				"label"			=> esc_html__( "Image", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Image options available here.", "wiguard-core" ),
			]
		);	
		$this->add_control(
			"fbox_image",
			[
				"type" => \Elementor\Controls_Manager::MEDIA,
				"label" => __( "Feature Box Image", "wiguard-core" ),
				"description"	=> esc_html__( "Choose feature box image.", "wiguard-core" ),
				"dynamic" => [
					"active" => true,
				]
			]
		);
		$this->add_control(
			"img_style",
			[
				"label"			=> esc_html__( "Image Style", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"description"	=> esc_html__( "Choose image style.", "wiguard-core" ),
				"default"		=> "rounded-circle",
				"options"		=> [
					"squared"			=> esc_html__( "Squared", "wiguard-core" ),
					"rounded"			=> esc_html__( "Rounded", "wiguard-core" ),
					"rounded-circle"	=> esc_html__( "Circled", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"img_effects",
			[
				"label"			=> esc_html__( "Image Hover Effects", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"description"	=> esc_html__( "This is effects option for image hover.", "wiguard-core" ),
				"default"		=> "none",
				"options"		=> [
					"none"		=> esc_html__( "None", "wiguard-core" ),
					"overlay"	=> esc_html__( "Overlay", "wiguard-core" ),
					"zoomin"		=> esc_html__( "Zoom In", "wiguard-core" ),
					"grayscale"		=> esc_html__( "Grayscale", "wiguard-core" ),
					"blur"		=> esc_html__( "Blur", "wiguard-core" )
				]
			]
		);
		$this->end_controls_section();		
		
		//Number Section
		$this->start_controls_section(
			"number_section",
			[
				"label"			=> esc_html__( "Number", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Number options available here.", "wiguard-core" ),
			]
		);	
		$this->add_control(
			"fbox_number",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Feature Box Number", "wiguard-core" ),
				"description"	=> esc_html__( "Enter feature box number. Example 01", "wiguard-core" ),
				"default"		=> "01"
			]
		);
		$this->add_control(
			"fbox_number_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Number Color", "wiguard-core" ),
				"description"	=> esc_html__( "Choose feature box number color.", "wiguard-core" ),
				"default" 		=> "01",
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper .fbox-number' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"fbox_number_hcolor",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Hover Number Color", "wiguard-core" ),
				"description"	=> esc_html__( "Choose feature box hover number color.", "wiguard-core" ),
				"default" 		=> "01",
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper:hover .fbox-number' => 'color: {{VALUE}};'
				]
			]
		);
		$this->end_controls_section();		
		
		// Video
		$this->start_controls_section(
			"video_section",
			[
				"label"			=> esc_html__( "Video", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Video options available here.", "wiguard-core" ),
			]
		);	
		$this->add_control(
			"fbox_video",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Feature Box Video", "wiguard-core" ),
				"description"	=> esc_html__( "Choose feature box video. This url maybe youtube or vimeo video. Example https://www.youtube.com/embed/qAHRvrrfGC4", "wiguard-core" ),
				"default"		=> ""
			]
		);
		$this->end_controls_section();	
		
		// Button
		$this->start_controls_section(
			"button_section",
			[
				"label"			=> esc_html__( "Button", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Button options available here.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"btn_text",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Button Text", "wiguard-core" ),
				"description"	=> esc_html__( "Enter section button text here. If no need button, then leave this box blank.", "wiguard-core" ),
				"default"		=> ""
			]
		);
		$this->add_control(
			"btn_url",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Button URL", "wiguard-core" ),
				"description"	=> esc_html__( "Enter section button url here. If no need button url, then leave this box blank.", "wiguard-core" ),
				"default"		=> ""
			]
		);
		$this->add_control(
			"btn_type",
			[
				"label"			=> esc_html__( "Button Type", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"description"	=> esc_html__( "Choose button type.", "wiguard-core" ),
				"default"		=> "default",
				"options"		=> [
					"default"		=> esc_html__( "Default", "wiguard-core" ),
					"link"			=> esc_html__( "Link", "wiguard-core" ),
					"classic"		=> esc_html__( "Classic", "wiguard-core" ),
					"bordered"		=> esc_html__( "Bordered", "wiguard-core" ),
					"inverse"		=> esc_html__( "Inverse", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"btn_variation",
			[
				"label"			=> esc_html__( "Button Color", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"description"	=> esc_html__( "This is option for change button color predefined or custom.", "wiguard-core" ),
				"default"		=> "btn-light",
				"options"		=> [
					"btn-dark"		=> esc_html__( "Dark", "wiguard-core" ),
					"btn-light"		=> esc_html__( "Light", "wiguard-core" ),
					"theme-color"	=> esc_html__( "Theme", "wiguard-core" ),
					"c"				=> esc_html__( "Custom", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"btn_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Button Custom Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the button custom color.", "wiguard-core" ),
				"default" 		=> "",
				"condition" 	=> [
					"btn_variation" 	=> "c"
				],
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper .feature-box-btn > .btn' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"btn_hvariation",
			[
				"label"			=> esc_html__( "Button Hover Color", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"description"	=> esc_html__( "This is option for change button hover color predefined or custom.", "wiguard-core" ),
				"default"		=> "btn-light",
				"options"		=> [
					"btn-dark"		=> esc_html__( "Dark", "wiguard-core" ),
					"btn-light"		=> esc_html__( "Light", "wiguard-core" ),
					"theme-color"	=> esc_html__( "Theme", "wiguard-core" ),
					"c"				=> esc_html__( "Custom", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"btn_hcolor",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Button Custom Hover Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the button custom hover color.", "wiguard-core" ),
				"default" 		=> "",
				"condition" 	=> [
					"btn_hvariation" 	=> "c"
				],
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper .feature-box-btn > .btn:hover' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"btn_bg_variation",
			[
				"label"			=> esc_html__( "Button Bg Color", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"description"	=> esc_html__( "This is option for change button background color predefined or custom.", "wiguard-core" ),
				"default"		=> "btn-bg-dark",
				"options"		=> [
					"btn-bg-dark"		=> esc_html__( "Dark", "wiguard-core" ),
					"btn-bg-light"		=> esc_html__( "Light", "wiguard-core" ),
					"theme-bg-color"	=> esc_html__( "Theme", "wiguard-core" ),
					"c"				=> esc_html__( "Custom", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"btn_bgcolor",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Button Custom Background Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the button custom background color.", "wiguard-core" ),
				"default" 		=> "",
				"condition" 	=> [
					"btn_bg_variation" 	=> "c"
				],
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper .feature-box-btn > .btn' => 'background-color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"btn_hbg_variation",
			[
				"label"			=> esc_html__( "Button Bg Hover Color", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"description"	=> esc_html__( "This is option for change button background hover color predefined or custom.", "wiguard-core" ),
				"default"		=> "theme-hbg-color",
				"options"		=> [
					"btn-hbg-dark"		=> esc_html__( "Dark", "wiguard-core" ),
					"btn-hbg-light"		=> esc_html__( "Light", "wiguard-core" ),
					"theme-hbg-color"	=> esc_html__( "Theme", "wiguard-core" ),
					"c"				=> esc_html__( "Custom", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"btn_hbgcolor",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Button Custom Background Hover Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the button custom background hover color.", "wiguard-core" ),
				"default" 		=> "",
				"condition" 	=> [
					"btn_hbg_variation" 	=> "c"
				],
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper .feature-box-btn > .btn:hover' => 'background-color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"btn_border_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Button Border Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the button custom border color.", "wiguard-core" ),
				"default" 		=> "",
				"condition" 	=> [
					"btn_type" 	=> "bordered"
				],
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper .feature-box-btn > .btn' => 'border-color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"btn_hborder_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Button Hover Border Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the button hover border color.", "wiguard-core" ),
				"default" 		=> "",
				"condition" 	=> [
					"btn_type" 	=> "bordered"
				],
				'selectors' => [
					'{{WRAPPER}} .feature-box-wrapper .feature-box-btn > .btn:hover' => 'border-color: {{VALUE}};'
				]
			]
		);
		$this->end_controls_section();	
		
		// Content
		$this->start_controls_section(
			"content_section",
			[
				"label"			=> esc_html__( "Content", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT
			]
		);
		$this->add_control(
			"content",
			[
				"type"			=> \Elementor\Controls_Manager::TEXTAREA,
				"label"			=> esc_html__( "Content", "wiguard-core" ),
				"description"	=> esc_html__( "You can give the feature box content here. HTML allowed here.", "wiguard-core" ),
				"default" 		=> esc_html__( "Feature box content.", "wiguard-core" ),
			]
		);
		$this->end_controls_section();	
		
		//Spacing Section
		$this->start_controls_section(
			"spacing_section",
			[
				"label"			=> esc_html__( "Spacing", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Each item bottom space options here available.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"sc_spacing",
			[
				"type"			=> 'itemspacing',
				"label"			=> esc_html__( "Items Spacing", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can mention each feature box items bottom space if you want to set default space of any item just use hyphen(-). Example 10px 20px - 10px", "wiguard-core" ),
				"default" 		=> ""
			]
		);
		$this->end_controls_section();
	}

	/**
	 * Render Animated Text widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	 
	public function render_content() {
		/**
		 * Before widget render content.
		 *
		 * Fires before Elementor widget is being rendered.
		 *
		 * @since 1.0.0
		 *
		 * @param Widget_Base $this The current widget.
		 */
		do_action( 'elementor/widget/before_render_content', $this );

		ob_start();

		$skin = $this->get_current_skin();
		if ( $skin ) {
			$skin->set_parent( $this );
			$skin->render();
		} else {
			$this->render();
		}

		$widget_content = ob_get_clean();
		
		$settings = $this->get_settings_for_display();
		extract( $settings );
		$shortcode_css = '';
		$shortcode_rand_id = $rand_class = 'shortcode-rand-'. wiguard_shortcode_rand_id();
		$class = isset( $extra_class ) && $extra_class != '' ? ' ' . $extra_class : '';		
		$class .= isset( $text_align ) && $text_align != 'default' ? ' text-' . $text_align : '';	
		$class .= isset( $feature_layout ) && $feature_layout != 'default' ? ' feature-box-'. $feature_layout : '';
		//Spacing
		if( isset( $sc_spacing ) && !empty( $sc_spacing ) ){
			$sc_spacing = preg_replace( '!\s+!', ' ', $sc_spacing );
			$space_arr = explode( " ", $sc_spacing );
			$i = 1;

			$space_class_name = '.' . esc_attr( $rand_class ) . '.feature-box-wrapper .feature-box-inner >';
			$content_full = isset( $content_full ) && $content_full == '1' ? true : false;
			if( !$content_full ) {
				$space_list_class_name = '.' . esc_attr( $rand_class ) . '.feature-box-wrapper > .media > .media-body >';
			}else {
				$space_list_class_name = '.' . esc_attr( $rand_class ) . '.feature-box-wrapper > .feature-box-fullwidth-info >';
				$class .= ' list-fullwidth-active'; 
			}
			foreach( $space_arr as $space ){
				$shortcode_css .= $space != '-' ? $space_class_name .' *:nth-child('. esc_attr( $i ) .'), '. $space_list_class_name .' *:nth-child('. esc_attr( $i ) .') { margin-bottom: '. esc_attr( $space ) .'; }' : '';
				$i++;
			}
		}
	
		if( $shortcode_css ) $class .= ' ' . $shortcode_rand_id . ' wiguard-inline-css';
		?>
		<div class="elementor-widget-container feature-box-wrapper<?php echo esc_attr( $class ); ?>" data-css="<?php echo htmlspecialchars( json_encode( $shortcode_css ), ENT_QUOTES, 'UTF-8' ) ?>">
			<?php

			/**
			 * Render widget content.
			 *
			 * Filters the widget content before it's rendered.
			 *
			 * @since 1.0.0
			 *
			 * @param string      $widget_content The content of the widget.
			 * @param Widget_Base $this           The widget.
			 */
			$widget_content = apply_filters( 'elementor/widget/render_content', $widget_content, $this );

			echo $widget_content; // XSS ok.
			?>
		</div>
		<?php
	}
	 
	protected function render() {

		$settings = $this->get_settings_for_display();
		extract( $settings );
		
		//Define Variables
		
		$class = isset( $extra_class ) && $extra_class != '' ? ' ' . $extra_class : '';		
		$class .= isset( $text_align ) && $text_align != 'default' ? ' text-' . $text_align : '';
		
		//Title section
		$title = isset( $title ) && $title != '' ? $title : '';
		$title_url_opt = isset( $title_url_opt ) && $title_url_opt != '' ? $title_url_opt : '0';
		$title_url = isset( $title_url ) && $title_url != '' ? $title_url : '';
		$title_head = isset( $title_head ) && $title_head != '' ? $title_head : 'h3';
		$title_redirect = isset( $title_external_tab ) && $title_external_tab != '' ? $title_external_tab : '_blank';
		
		$this->title_array = array(
			'title' => $title,
			'title_url_opt' => $title_url_opt,
			'title_url' => $title_url,
			'title_head' => $title_head,
			'title_redirect' => $title_redirect
		);
		
		//Number Section
		$fbox_number = isset( $fbox_number ) && $fbox_number != '' ? $fbox_number : ''; 
		$fbox_arr = array(
			'number_txt' => $fbox_number
		);
		
		//Icon Section
		$icon_class = '';
		$icon_opt = isset( $icon_opt ) && $icon_opt != '' ? $icon_opt : '';
		$icon = isset( $$icon_opt ) && $$icon_opt != '' ? $$icon_opt : '';
		$icon_size = isset( $icon_size ) && $icon_size != '' ? $icon_size : '';
		$icon_class .= isset( $icon_bg ) && $icon_bg != 'c' && $icon_bg != 'none' ? ' '.$icon_bg : '';
		$icon_class .= isset( $icon_hbg ) && $icon_hbg != 'c' && $icon_hbg != 'none' ? ' '.$icon_hbg : '';
		$icon_class .= isset( $icon_variation ) && $icon_variation != 'c' ? ' icon-'.$icon_variation : ' icon-dark';
		$icon_class .= isset( $icon_style ) && $icon_style != '' ? ' '.$icon_style : ' squared';
		$icon_class .= isset( $icon_midd ) && $icon_midd == '1' ? ' fbox-icon-middle' : '';
		$this->fbox_icon_array = array(
			'icon' => $icon,
			'icon_size' => $icon_size,
			'icon_class' => $icon_class
		);
		
		//Image Section
		$img_class = '';
		$fbox_image = isset( $fbox_image ) && !empty( $fbox_image ) ? $fbox_image : '';
		$img_url = is_array( $fbox_image ) && isset( $fbox_image['url'] ) ? $fbox_image['url'] : '';
		$img_class .= isset( $img_style ) && !empty( $img_style ) ? ' '.$img_style : '';
		$img_class .= isset( $img_effects ) && !empty( $img_effects ) ? ' fbox-img-overlay-'.$img_effects : '';
		$this->fbox_img_array = array(
			'img_url' => $img_url,
			'img_class' => $img_class
		);
		
		//Button Setion
		$btn_type = isset( $btn_type ) && !empty( $btn_type ) ? ' btn-'.$btn_type : '  btn-default';
		$btn_url = isset( $btn_url ) && !empty( $btn_url ) ? $btn_url : '';
		$btn_variation = isset( $btn_variation ) && $btn_variation != 'c' ? ' '. $btn_variation : '';
		$btn_hvariation = isset( $btn_hvariation ) && $btn_hvariation != 'c' ? ' '. $btn_hvariation : '';
		$btn_bg_variation = isset( $btn_bg_variation ) && $btn_bg_variation != 'c' ? ' '. $btn_bg_variation : '';
		$btn_hbg_variation = isset( $btn_hbg_variation ) && $btn_hbg_variation != 'c' ? ' '. $btn_hbg_variation : '';
		$btn_text = isset( $btn_text ) && !empty( $btn_text ) ? $btn_text : esc_html__( 'More', 'wiguard-core' );
		$this->fbox_btn_array = array(
			'btn_type' => $btn_type,
			'btn_url' => $btn_url,
			'btn_text' => $btn_text,
			'btn_variation' => $btn_variation,
			'btn_hvariation' => $btn_hvariation,
			'btn_bg_variation' => $btn_bg_variation,
			'btn_hbg_variation' => $btn_hbg_variation
		);
		
		//Video Section
		$fbox_video = isset( $fbox_video ) && !empty( $fbox_video ) ? $fbox_video : '';
		$this->fbox_video_array = array(
			'video' => $fbox_video,
		);
		
		//Layout Section
		$list_style = isset( $list_style ) && $list_style != '' ? $list_style : '0';
		$elemetns = '';
		if( !$list_style ){
			$default_items = array( 
				"icon"	=> esc_html__( "Icon", "wiguard-core" ),
				"title"	=> esc_html__( "Title", "wiguard-core" ),
				"content"	=> esc_html__( "Content", "wiguard-core" )
			);
			$elemetns = isset( $fbox_items ) && !empty( $fbox_items ) ? json_decode( $fbox_items, true ) : array( 'Enabled' => $default_items );
		}else{
			$default_left_items = array( 
				"icon"	=> esc_html__( "Icon", "wiguard-core" )
			);
			$default_right_items = array( 
				"title"	=> esc_html__( "Title", "wiguard-core" ),
				"content"	=> esc_html__( "Content", "wiguard-core" )
			);

			$elemetns = isset( $fbox_list_items ) && !empty( $fbox_list_items ) ? json_decode( $fbox_list_items, true ) : array( 'Left' => $default_left_items, 'Right' => $default_right_items );
		}
		
		//Content Section
		$this->fbox_content = isset( $content ) && $content != '' ? $content : ''; 
		
		//Spacing
			if( $list_style == '1' ){	

				$content_full = isset( $content_full ) && $content_full == '1' ? true : false;
				$list_opps = isset( $list_opps ) && $list_opps == '1' ? true : false;
				
				echo '<div class="media">';
					$midd_class = isset( $icon_self_center ) && $icon_self_center == '1' ? ' align-self-center' : '';
					
					if( !$list_opps ){
						echo '<div class="media-icon-part'. esc_attr( $midd_class ) .'">';
							if( isset( $elemetns['Left'] ) && !empty( $elemetns['Left'] ) ) :
								foreach( $elemetns['Left'] as $element => $value ){
									$this->wiguard_fbox_shortcode_elements( $element, $fbox_arr );
								}
							endif;
						echo '</div>';
					}
					
					echo '<div class="media-body">';
						if( !$content_full && isset( $elemetns['Right'] ) && !empty( $elemetns['Right'] ) ) :
							foreach( $elemetns['Right'] as $element => $value ){
								$this->wiguard_fbox_shortcode_elements( $element, $fbox_arr );
							}
						elseif( isset( $elemetns['Right']['title'] ) ):
							$this->wiguard_fbox_shortcode_elements( 'title', $fbox_arr );
						endif;
						unset( $elemetns['Right']['title'] );
					echo '</div><!-- .media-body -->';
				
					if( $list_opps ){
						echo '<div class="media-icon-part'. esc_attr( $midd_class ) .'">';
							if( isset( $elemetns['Left'] ) && !empty( $elemetns['Left'] ) ) :
								foreach( $elemetns['Left'] as $element => $value ){
									$this->wiguard_fbox_shortcode_elements( $element, $fbox_arr );
								}
							endif;
						echo '</div>';
					}
					
				echo '</div><!-- .media -->';
				
				if( $content_full ) {
					echo '<div class="feature-box-fullwidth-info">';
						foreach( $elemetns['Right'] as $element => $value ){
							$this->wiguard_fbox_shortcode_elements( $element, $fbox_arr );
						}
					echo '</div>';
				}
			}else{
				echo '<div class="feature-box-inner">';
					if( isset( $elemetns['Enabled'] ) && !empty( $elemetns['Enabled'] ) ) :
						foreach( $elemetns['Enabled'] as $element => $value ){
							$this->wiguard_fbox_shortcode_elements( $element, $fbox_arr );
						}
					endif;
				echo '</div>';
			}

	}
	
	function wiguard_fbox_shortcode_elements( $element, $fbox_arr = array() ){
		switch( $element ){
		
			case "title":
				$title_array = $this->title_array;
				if( $title_array['title'] ){
					if( $title_array['title_url_opt'] == '1' && $title_array['title_url'] != '' )
						echo '<'. esc_attr( $title_array['title_head'] ) .' class="feature-box-title"><a href="'. esc_url( $title_array['title_url'] ) .'" title="'. esc_attr( $title_array['title'] ) .'" target="'. esc_attr( $title_array['title_redirect'] ) .'">'. esc_html( $title_array['title'] ) .'</a></'. esc_attr( $title_array['title_head'] ) .'>';
					else
						echo '<'. esc_attr( $title_array['title_head'] ) .' class="feature-box-title">'. esc_html( $title_array['title'] ) .'</'. esc_attr( $title_array['title_head'] ) .'>';
				}
			break;
			
			case "icon":
				if( $this->fbox_icon_array ) echo '<div class="feature-box-icon"><span class="text-center'. esc_attr( $this->fbox_icon_array['icon_class'] ) .' '. esc_attr( $this->fbox_icon_array['icon'] ) .'"></span></div>';
			break;
			
			case "image":
				if( $this->fbox_img_array ) echo '<div class="feature-box-image'. esc_attr( $this->fbox_img_array['img_class'] ) .'"><img class="img-fluid" src="'. esc_url( $this->fbox_img_array['img_url'] ) .'" alt="'. esc_html__( 'Feature Box Image', 'wiguard-core' ) .'"></div>';
			break;
			
			case "content":
				if( $this->fbox_content ) echo '<div class="fbox-content">'. $this->fbox_content .'</div>';
			break;
			
			case "btn":
				if( $this->fbox_btn_array ){
					$btn_class = $this->fbox_btn_array['btn_variation'] != '' ? $this->fbox_btn_array['btn_variation'] : '';
					$btn_class .= $this->fbox_btn_array['btn_hvariation'] != '' ? $this->fbox_btn_array['btn_hvariation'] : '';
					$btn_class .= $this->fbox_btn_array['btn_bg_variation'] != '' ? $this->fbox_btn_array['btn_bg_variation'] : '';
					$btn_class .= $this->fbox_btn_array['btn_hbg_variation'] != '' ? $this->fbox_btn_array['btn_hbg_variation'] : '';
					$btn_class .= $this->fbox_btn_array['btn_type'] != '' ? $this->fbox_btn_array['btn_type'] : '';
					echo '<div class="feature-box-btn">';
						echo '<a class="btn'. esc_attr( $btn_class  ) .'" href="'. esc_html( $this->fbox_btn_array['btn_url'] ) .'" title="'. esc_attr( $this->fbox_btn_array['btn_text'] ) .'">'. esc_html( $this->fbox_btn_array['btn_text'] ) .'</a>';
					echo '</div><!-- .feature-box-btn -->';
				}
			break;
			
			case "video":
				if( $this->fbox_video_array ){
					echo'<div class="feature-box-video">';
						echo do_shortcode( '[videoframe url="'. esc_url( $this->fbox_video_array['video'] ) .'" width="100%" height="100%" params="byline=0&portrait=0&badge=0" /]' );
					echo'</div><!-- .feature-box-video -->';
				}
			break;
			
			case "number":
				$number_txt = isset( $fbox_arr['number_txt'] ) ? $fbox_arr['number_txt'] : '';
				if( $number_txt ) echo '<div class="fbox-number">'. esc_html( $number_txt ) .'</div>';
			break;			
		
		}
	}
	
}