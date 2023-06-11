<?php
/**
 * Wiguard Elementor Addon Flip Box
 *
 * @since 1.0.0
 */
class Elementor_Flip_Box_Widget extends \Elementor\Widget_Base {

	private $title_array;
	private $flip_content;
	private $flip_icon_array;
	private $flip_img_array;
	private $flip_video_array;
	private $flip_btn_array;
	
	/**
	 * Get widget name.
	 *
	 * Retrieve Flip box widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return "wiguardflipbox";
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Flip box widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( "Flip Box", "wiguard-core" );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Flip box widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return "ti-agenda";
	}


	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Flip box widget belongs to.
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
	 * Register Flip box widget controls.
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
				"description"	=> esc_html__( "Default flip box options.", "wiguard-core" ),
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
		$this->add_control(
			"flip_style",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Flip Box Hover Styles", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for hover animation style flip box.", "wiguard-core" ),
				"default"		=> "imghvr-fade",
				"options"		=> [
					"imghvr-fade" => esc_html__( "Fade", "wiguard-core" ),
					"imghvr-push-up" => esc_html__( "Push Up", "wiguard-core" ), 
					"imghvr-push-down" => esc_html__( "Push Down", "wiguard-core" ), 
					"imghvr-push-left" => esc_html__( "Push Left", "wiguard-core" ), 
					"imghvr-push-right" => esc_html__( "Push Right", "wiguard-core" ), 
					"imghvr-slide-up" => esc_html__( "Slide Up", "wiguard-core" ), 
					"imghvr-slide-down" => esc_html__( "Slide Down", "wiguard-core" ), 
					"imghvr-slide-left" => esc_html__( "Slide Left", "wiguard-core" ), 
					"imghvr-slide-right" => esc_html__( "Slide Right", "wiguard-core" ), 
					"imghvr-reveal-up" => esc_html__( "Reveal Up", "wiguard-core" ), 
					"imghvr-reveal-down" => esc_html__( "Reveal Down", "wiguard-core" ), 
					"imghvr-reveal-left" => esc_html__( "Reveal Left", "wiguard-core" ), 
					"imghvr-reveal-right" => esc_html__( "Reveal Right", "wiguard-core" ), 
					"imghvr-hinge-up" => esc_html__( "Hinge Up", "wiguard-core" ), 
					"imghvr-hinge-down" => esc_html__( "Hinge Down", "wiguard-core" ), 
					"imghvr-hinge-left" => esc_html__( "Hinge Left", "wiguard-core" ), 
					"imghvr-hinge-right" => esc_html__( "Hinge Right", "wiguard-core" ), 
					"imghvr-flip-horiz" => esc_html__( "Flip Horizontal", "wiguard-core" ), 
					"imghvr-flip-vert" => esc_html__( "Flip Vertical", "wiguard-core" ), 
					"imghvr-flip-diag-1" => esc_html__( "Diagonal 1", "wiguard-core" ), 
					"imghvr-flip-diag-2" => esc_html__( "Diagonal 2", "wiguard-core" ), 
					"imghvr-flip-3d-horz" => esc_html__( "Flip 3D Horizontal", "wiguard-core" ),
					"imghvr-flip-3d-vert" => esc_html__( "Flip 3D Vertical", "wiguard-core" ), 
					"imghvr-shutter-out-horiz" => esc_html__( "Shutter Out Horizontal", "wiguard-core" ), 
					"imghvr-shutter-out-vert" => esc_html__( "Shutter Out Vertical", "wiguard-core" ), 
					"imghvr-shutter-out-diag-1" => esc_html__( "Shutter Out Diagonal 1", "wiguard-core" ), 
					"imghvr-shutter-out-diag-2" => esc_html__( "Shutter Out Diagonal 2", "wiguard-core" ), 
					"imghvr-shutter-in-horiz" => esc_html__( "Shutter In Horizontal", "wiguard-core" ), 
					"imghvr-shutter-in-vert" => esc_html__( "Shutter In Vertical", "wiguard-core" ), 
					"imghvr-shutter-in-out-horiz" => esc_html__( "Shutter In Out Horizontal", "wiguard-core" ), 
					"imghvr-shutter-in-out-vert" => esc_html__( "Shutter In Out Vertical", "wiguard-core" ), 
					"imghvr-shutter-in-out-diag-1" => esc_html__( "Shutter In Out Diagonal 1", "wiguard-core" ), 
					"imghvr-shutter-in-out-diag-2" => esc_html__( "Shutter In Out Diagonal 2", "wiguard-core" ), 
					"imghvr-fold-up" => esc_html__( "Fold Up", "wiguard-core" ), 
					"imghvr-fold-down" => esc_html__( "Fold Down", "wiguard-core" ), 
					"imghvr-fold-left" => esc_html__( "Fold Left", "wiguard-core" ), 
					"imghvr-fold-right" => esc_html__( "Fold Right", "wiguard-core" ), 
					"imghvr-zoom-in" => esc_html__( "Zoom In", "wiguard-core" ), 
					"imghvr-zoom-out" => esc_html__( "Zoom Out", "wiguard-core" ), 
					"imghvr-zoom-out-up" => esc_html__( "Zoom Out Up", "wiguard-core" ), 
					"imghvr-zoom-out-down" => esc_html__( "Zoom Out Down", "wiguard-core" ), 
					"imghvr-zoom-out-left" => esc_html__( "Zoom Out Left", "wiguard-core" ), 
					"imghvr-zoom-out-right" => esc_html__( "Zoom Out Right", "wiguard-core" ), 
					"imghvr-zoom-out-flip-horiz" => esc_html__( "Zoom Out Flip Horizontal", "wiguard-core" ), 
					"imghvr-zoom-out-flip-vert" => esc_html__( "Zoom Out Flip Vertical", "wiguard-core" ), 
					"imghvr-blur" => esc_html__( "Blur", "wiguard-core" )
				]
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
			"text_align",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Text Align", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for Flipbox text align.", "wiguard-core" ),
				"default"		=> "center",
				"options"		=> [
					"default"	=> esc_html__( "Default", "wiguard-core" ),
					"left"		=> esc_html__( "Left", "wiguard-core" ),
					"center"	=> esc_html__( "Center", "wiguard-core" ),
					"right"		=> esc_html__( "Right", "wiguard-core" )
				]
			]
		);
		$this->end_controls_section();
		
		//Primary Box Section
		$this->start_controls_section(
			"primary_box_section",
			[
				"label"			=> esc_html__( "Primary Box", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Primary box options available here.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"primary_title_head",
			[
				"label"			=> esc_html__( "Primary Title Heading Tag", "wiguard-core" ),
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
			"font_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Primary Box Font Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the flip primary box font color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .flip-box-wrapper .flip-box-inner .flip-front' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"front_bg",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Primary Box Background Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the flip primary box background color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .flip-box-wrapper .flip-box-inner .flip-front' => 'background-color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"flip_primary_items",
			[
				"label"				=> "Primary Box Items",
				"description"		=> esc_html__( "This is settings for primary box custom layout. here you can set your own layout. Drag and drop needed flip items to enabled part.", "wiguard-core" ),
				"type"				=> "dragdrop",
				"ddvalues" 			=> [ 
					'Enabled' => array( 
						'icon'	=> esc_html__( 'Icon', 'wiguard-core' ),
						'title'	=> esc_html__( 'Title', 'wiguard-core' ),
						'content'	=> esc_html__( 'Content', 'wiguard-core' )					
					),
					'disabled' => array(
						'btn'	=> esc_html__( 'Button', 'wiguard-core' ),
						'image'	=> esc_html__( 'Image', 'wiguard-core' )
					)
				]
			]
		);
		$this->add_control(
			"front_padding",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Flip Box Primary Padding", "wiguard-core" ),
				"description"	=> esc_html__( "This is padding option of primary box. Example 10px", "wiguard-core" ),
				"default"		=> "",
				'selectors' => [
					'{{WRAPPER}} .flip-box-wrapper .flip-box-inner .flip-front' => 'padding-top: {{VALUE}}; padding-bottom: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"primary_spacing",
			[
				"type"			=> 'itemspacing',
				"label"			=> esc_html__( "Primary Items Spacing", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can mention each flip primary box items bottom space if you want to set default space of any item just use hyphen(-). Example 10px 20px - 10px", "wiguard-core" ),
				"default" 		=> ""
			]
		);
		$this->end_controls_section();
		
		//Secondary Box Section
		$this->start_controls_section(
			"secondary_box_section",
			[
				"label"			=> esc_html__( "Secondary Box", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Secondary box options available here.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"secondary_title_head",
			[
				"label"			=> esc_html__( "Secondary Title Heading Tag", "wiguard-core" ),
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
			"font_hcolor",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Secondary Box Font Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the flip secondary box color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .flip-box-wrapper .flip-box-inner .flip-back' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"back_bg",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Secondary Box Background Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the flip primary box secondary color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .flip-box-wrapper .flip-box-inner .flip-back' => 'background-color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"flip_secondary_items",
			[
				"label"				=> "Secondary Box Items",
				"description"		=> esc_html__( "This is settings for secondary box custom layout. here you can set your own layout. Drag and drop needed flip items to enabled part.", "wiguard-core" ),
				"type"				=> "dragdrop",
				"ddvalues" 			=> [ 
					'Enabled' => array( 
						'icon'	=> esc_html__( 'Icon', 'wiguard-core' ),
						'title'	=> esc_html__( 'Title', 'wiguard-core' ),
						'content'	=> esc_html__( 'Content', 'wiguard-core' )					
					),
					'disabled' => array(
						'btn'	=> esc_html__( 'Button', 'wiguard-core' ),
						'image'	=> esc_html__( 'Image', 'wiguard-core' )
					)
				]
			]
		);
		$this->add_control(
			"back_padding",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Flip Box Secondary Padding", "wiguard-core" ),
				"description"	=> esc_html__( "This is padding option of secondary box. Example 10px", "wiguard-core" ),
				"default"		=> "",
				'selectors' => [
					'{{WRAPPER}} .flip-box-wrapper .flip-box-inner .flip-back' => 'padding-top: {{VALUE}}; padding-bottom: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"secondary_spacing",
			[
				"type"			=> 'itemspacing',
				"label"			=> esc_html__( "Secondary Items Spacing", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can mention each flip secondary box items bottom space if you want to set default space of any item just use hyphen(-). Example 10px 20px - 10px", "wiguard-core" ),
				"default" 		=> ""
			]
		);
		$this->end_controls_section();
		
		//Title Section
		$this->start_controls_section(
			"title_section",
			[
				"label"			=> esc_html__( "Title", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Title options available here.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"title",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Flip Box Title", "wiguard-core" ),
				"description"	=> esc_html__( "Input flip box title here.", "wiguard-core" ),
				"default" 		=> esc_html__( "Flip Title", "wiguard-core" )
			]
		);
		$this->add_control(
			"title_url_opt",
			[
				"label" 		=> esc_html__( "Set Title as Link", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for flip box title as link. Enable yes to set title url.", "wiguard-core" ),
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
			"title_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Title Primary Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the flip primary box title color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .flip-box-wrapper .flip-box-inner .flip-front .flip-box-title' => 'color: {{VALUE}};',
					'{{WRAPPER}} .flip-box-wrapper .flip-box-inner .flip-front .flip-box-title:after' => 'background-color: {{VALUE}};'
				],
			]
		);
		$this->add_control(
			"stitle_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Title Secondary Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the flip primary box title color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .flip-box-wrapper .flip-box-inner .flip-back .flip-box-title' => 'color: {{VALUE}};',
					'{{WRAPPER}} .flip-box-wrapper .flip-box-inner .flip-back .flip-box-title:after' => 'background-color: {{VALUE}};'
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
					'{{WRAPPER}} .flip-box-wrapper .flip-box-title' => 'text-transform: {{VALUE}};'
				],
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
					'{{WRAPPER}} .flip-box-wrapper .flip-box-icon > span' => 'font-size: {{VALUE}}px;'
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
					'{{WRAPPER}} .flip-box-wrapper .flip-box-icon > span' => 'width: {{VALUE}}px; height: {{VALUE}}px;'
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
				"description"	=> esc_html__( "This is option for flip box icon set vertically middle from the outer area.", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "1"
			]
		);
		$this->add_control(
			"icon_self_center",
			[
				"label" 		=> esc_html__( "Icon Self Center", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for flip box list style icon set vertically middle.", "wiguard-core" ),
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
				"description"	=> esc_html__( "This is option for flip box icon style.", "wiguard-core" ),
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
					'{{WRAPPER}} .flip-box-wrapper .flip-box-icon > span' => 'color: {{VALUE}};'
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
					'{{WRAPPER}} .flip-box-wrapper:hover .flip-box-icon > span' => 'color: {{VALUE}};'
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
					'{{WRAPPER}} .flip-box-wrapper .flip-box-icon > span' => 'background-color: {{VALUE}};'
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
					"theme-color-bg"	=> esc_html__( "Theme Color", "wiguard-core" ),
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
					'{{WRAPPER}} .flip-box-wrapper:hover .flip-box-icon > span' => 'background-color: {{VALUE}};'
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
					'{{WRAPPER}} .flip-box-wrapper .flip-box-icon > span' => 'border-width: {{VALUE}}px; border-style: solid;'
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
					'{{WRAPPER}} .flip-box-wrapper .flip-box-icon > span' => 'border-color: {{VALUE}};'
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
					'{{WRAPPER}} .flip-box-wrapper:hover .flip-box-icon > span' => 'border-color: {{VALUE}};'
				]
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
			"flip_image",
			[
				"type" => \Elementor\Controls_Manager::MEDIA,
				"label" => __( "Flip Box Image", "wiguard-core" ),
				"description"	=> esc_html__( "Choose flip box image.", "wiguard-core" ),
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
				"description"	=> esc_html__( "You can give the flip box content here. HTML allowed here.", "wiguard-core" ),
				"default" 		=> esc_html__( "Flip box content.", "wiguard-core" )
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
	protected function render() {

		$settings = $this->get_settings_for_display();
		extract( $settings );
		
		//Define Variables
		
		$class = isset( $extra_class ) && $extra_class != '' ? ' ' . $extra_class : '';		
		$class .= isset( $text_align ) && $text_align != 'default' ? ' text-' . $text_align : '';	
		
		$shortcode_css = '';
		$shortcode_rand_id = $rand_class = 'shortcode-rand-'. wiguard_shortcode_rand_id();
		
		//Title section
		$title = isset( $title ) && $title != '' ? $title : '';
		$title_url_opt = isset( $title_url_opt ) && $title_url_opt != '' ? $title_url_opt : '0';
		$title_url = isset( $title_url ) && $title_url != '' ? $title_url : '';
		$primary_title_head = isset( $primary_title_head ) && $primary_title_head != '' ? $primary_title_head : 'h3';
		$secondary_title_head = isset( $secondary_title_head ) && $secondary_title_head != '' ? $secondary_title_head : 'h3';
		$title_redirect = isset( $title_external_tab ) && $title_external_tab != '' ? $title_external_tab : '_blank';
		
		$this->title_array = array(
			'title' => $title,
			'title_url_opt' => $title_url_opt,
			'title_url' => $title_url,
			'title_head' => $primary_title_head,
			'title_redirect' => $title_redirect
		);
		
		//Icon Section
		$icon_class = '';
		$icon_opt = isset( $icon_opt ) && $icon_opt != '' ? $icon_opt : '';
		$icon = isset( $$icon_opt ) && $$icon_opt != '' ? $$icon_opt : '';
		$icon_class .= isset( $icon_variation ) && $icon_variation != 'c' ? ' icon-'.$icon_variation : ' icon-dark';
		$icon_class .= isset( $icon_style ) && $icon_style != '' ? ' '.$icon_style : ' squared';
		$icon_class .= isset( $icon_midd ) && $icon_midd == '1' ? ' flip-icon-middle' : '';
		$this->flip_icon_array = array(
			'icon' => $icon,
			'icon_class' => $icon_class
		);
		
		//Image Section
		$img_class = '';
		$flip_image = isset( $flip_image ) && !empty( $flip_image ) ? $flip_image : '';
		$img_url = is_array( $flip_image ) && isset( $flip_image['url'] ) ? $flip_image['url'] : '';
		$img_class .= isset( $img_style ) && !empty( $img_style ) ? ' '.$img_style : '';
		$img_class .= isset( $img_effects ) && !empty( $img_effects ) ? ' flip-img-overlay-'.$img_effects : '';
		$this->flip_img_array = array(
			'img_url' => $img_url,
			'img_class' => $img_class
		);
		
		//Button Setion
		$btn_type = isset( $btn_type ) && !empty( $btn_type ) ? ' btn-'.$btn_type : '  btn-default';
		$btn_url = isset( $btn_url ) && !empty( $btn_url ) ? $btn_url : '';
		$btn_text = isset( $btn_text ) && !empty( $btn_text ) ? $btn_text : esc_html__( 'More', 'wiguard-core' );
		$this->flip_btn_array = array(
			'btn_type' => $btn_type,
			'btn_url' => $btn_url,
			'btn_text' => $btn_text
		);
		
		//Video Section
		$flip_video = isset( $flip_video ) && !empty( $flip_video ) ? $flip_video : '';
		$this->flip_video_array = array(
			'video' => $flip_video,
		);
		
		//Layout Section
		$default_items = array( 
			'icon'	=> esc_html__( 'Icon', 'wiguard-core' ),
			'title'	=> esc_html__( 'Title', 'wiguard-core' ),
			'content'	=> esc_html__( 'Content', 'wiguard-core' )
		);
		$p_elemetns = isset( $flip_primary_items ) && !empty( $flip_primary_items ) ? json_decode( $flip_primary_items, true ) : array( 'Enabled' => $default_items );
		$s_elemetns = isset( $flip_secondary_items ) && !empty( $flip_secondary_items ) ? json_decode( $flip_secondary_items, true ) : array( 'Enabled' => $default_items );
		
		//Content Section
		$this->flip_content = isset( $content ) && $content != '' ? $content : ''; 
		
		//Primary Spacing
		if( isset( $primary_spacing ) && !empty( $primary_spacing ) ){

			$primary_spacing = preg_replace( '!\s+!', ' ', $primary_spacing );
			$space_arr = explode( " ", $primary_spacing );
			$i = 1;

			$space_class_name = '.' . esc_attr( $rand_class ) . '.flip-box-wrapper .flip-box-inner .flip-front >';
			foreach( $space_arr as $space ){
				$shortcode_css .= $space != '-' ? $space_class_name .' *:nth-child('. esc_attr( $i ) .'), '. $space_list_class_name .' *:nth-child('. esc_attr( $i ) .') { margin-bottom: '. esc_attr( $space ) .'; }' : '';
				$i++;
			}
		}
		
		//Secondary Spacing
		if( isset( $secondary_spacing ) && !empty( $secondary_spacing ) ){

			$secondary_spacing = preg_replace( '!\s+!', ' ', $secondary_spacing );
			$space_arr = explode( " ", $secondary_spacing );
			$i = 1;

			$space_class_name = '.' . esc_attr( $rand_class ) . '.flip-box-wrapper .flip-box-inner .flip-back >';
			foreach( $space_arr as $space ){
				$shortcode_css .= $space != '-' ? $space_class_name .' *:nth-child('. esc_attr( $i ) .'), '. $space_list_class_name .' *:nth-child('. esc_attr( $i ) .') { margin-bottom: '. esc_attr( $space ) .'; }' : '';
				$i++;
			}
		}
			
		$inner_class = isset( $flip_style ) ? ' ' . $flip_style : ' imghvr-push-up';
			
		if( $shortcode_css ) $class .= ' ' . $shortcode_rand_id . ' wiguard-inline-css';
		echo '<div class="flip-box-wrapper'. esc_attr( $class ) .'" data-css="'. htmlspecialchars( json_encode( $shortcode_css ), ENT_QUOTES, 'UTF-8' ) .'">';
				
				echo '<div class="flip-box-inner'. esc_attr( $inner_class ) .'">';
					echo '<div class="flip-front">';
						if( isset( $p_elemetns['Enabled'] ) && !empty( $p_elemetns['Enabled'] ) ) :
							foreach( $p_elemetns['Enabled'] as $element => $value ){
								$this->wiguard_flipbox_shortcode_elements( $element );
							}
						endif;
					echo '</div><!-- .flip-front -->';
					
					echo '<div class="flip-back">';
						$this->title_array['title_head'] = $secondary_title_head;
						if( isset( $s_elemetns['Enabled'] ) && !empty( $s_elemetns['Enabled'] ) ) :
							foreach( $s_elemetns['Enabled'] as $element => $value ){
								$this->wiguard_flipbox_shortcode_elements( $element );
							}
						endif;
					echo '</div><!-- .flip-back -->';
				echo '</div><!-- .flip-inner -->';
	
		echo '</div><!-- .flip-box-wrapper -->';

	}
	
	function wiguard_flipbox_shortcode_elements( $element ){
		switch( $element ){
		
			case "title":
				$title_array = $this->title_array;
				if( $title_array['title'] ){
					if( $title_array['title_url_opt'] == '1' && $title_array['title_url'] != '' )
						echo '<'. esc_attr( $title_array['title_head'] ) .' class="flip-box-title"><a href="'. esc_url( $title_array['title_url'] ) .'" title="'. esc_attr( $title_array['title'] ) .'" target="'. esc_attr( $title_array['title_redirect'] ) .'">'. esc_html( $title_array['title'] ) .'</a></'. esc_attr( $title_array['title_head'] ) .'>';
					else
						echo '<'. esc_attr( $title_array['title_head'] ) .' class="flip-box-title">'. esc_html( $title_array['title'] ) .'</'. esc_attr( $title_array['title_head'] ) .'>';
				}
			break;
			
			case "icon":
				if( $this->flip_icon_array ) echo '<div class="flip-box-icon"><span class="text-center'. esc_attr( $this->flip_icon_array['icon_class'] ) .' '. esc_attr( $this->flip_icon_array['icon'] ) .'"></span></div>';
			break;
			
			case "image":
				if( $this->flip_img_array ) echo '<div class="flip-box-image"><img class="img-fluid'. esc_attr( $this->flip_img_array['img_class'] ) .'" src="'. esc_url( $this->flip_img_array['img_url'] ) .'" alt="'. esc_html__( 'Flip Box Image', 'wiguard-core' ) .'"></div>';
			break;
			
			case "content":
				if( $this->flip_content ) echo '<div class="flip-content">'. $this->flip_content .'</div>';
			break;
			
			case "btn":
				if( $this->flip_btn_array ){
					echo '<div class="flip-box-btn">';
						echo '<a class="btn'. esc_attr( $this->flip_btn_array['btn_type'] ) .'" href="'. esc_html( $this->flip_btn_array['btn_url'] ) .'" title="'. esc_attr( $this->flip_btn_array['btn_text'] ) .'">'. esc_html( $this->flip_btn_array['btn_text'] ) .'</a>';
					echo '</div><!-- .flip-box-btn -->';
				}
			break;			
		
		}
	}
	
	
}