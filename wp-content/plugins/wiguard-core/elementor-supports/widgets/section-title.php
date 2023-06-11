<?php
/**
 * Wiguard Elementor Addon Section Title
 *
 * @since 1.0.0
 */
class Elementor_Section_Title_Widget extends \Elementor\Widget_Base {
	
	/**
	 * Get widget name.
	 *
	 * Retrieve Section Title widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return "wiguardsectiontitle";
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Section Title widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( "Section Title", "wiguard-core" );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Section Title widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return "ti-text";
	}


	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Section Title widget belongs to.
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
	 * Register Section Title widget controls.
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
				"description"	=> esc_html__( "Default icon list options.", "wiguard-core" ),
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
					'{{WRAPPER}} .section-title-wrapper' => 'color: {{VALUE}};'
				]
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
			"title_head",
			[
				"label"			=> esc_html__( "Modal Box Title Heading Tag", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can choose the section title box title heading tag.", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"default"		=> "h2",
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
			"title",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Title", "wiguard-core" ),
				"description"	=> esc_html__( "Enter section title here.", "wiguard-core" ),
				"default"		=> esc_html__( "Section Title", "wiguard-core" )
			]
		);	
		$this->add_control(
			"title_prefix",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Title Prefix", "wiguard-core" ),
				"description"	=> esc_html__( "Enter section title prefix. If no need title prefix, then leave this box blank.", "wiguard-core" )
			]
		);
		$this->add_control(
			"title_suffix",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Title Suffix", "wiguard-core" ),
				"description"	=> esc_html__( "Enter section title suffix. If no need title suffix, then leave this box blank.", "wiguard-core" )
			]
		);	
		$this->add_control(
			"text_align",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Text Align", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for blog text align.", "wiguard-core" ),
				"default"		=> "default",
				"options"		=> [
					"default"	=> esc_html__( "Default", "wiguard-core" ),
					"left"		=> esc_html__( "Left", "wiguard-core" ),
					"center"	=> esc_html__( "Center", "wiguard-core" ),
					"right"		=> esc_html__( "Right", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"title_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Title Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can set the section title color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .section-title-wrapper .section-title' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"title_prefix_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Title Prefix Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can set the section prefix title color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .section-title-wrapper .section-title .title-prefix' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"title_suffix_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Title Suffix Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can set the section title suffix color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .section-title-wrapper .section-title .title-suffix' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"font_size",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Font Size", "wiguard-core" ),
				"description"	=> esc_html__( "Enter title font size. Example 30.", "wiguard-core" ),
				'selectors' 	=> [
					'{{WRAPPER}} .section-title-wrapper .section-title' => 'font-size: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"line_height",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Line Height", "wiguard-core" ),
				"description"	=> esc_html__( "Enter title line height. Example 30.", "wiguard-core" ),
				'selectors' 	=> [
					'{{WRAPPER}} .section-title-wrapper .section-title' => 'line-height: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"title_trans",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Title Text Transform", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for title transform.", "wiguard-core" ),
				"default"		=> "none",
				"options"		=> [
					"none"			=> esc_html__( "None", "wiguard-core" ),
					"capitalize"	=> esc_html__( "Capitalize", "wiguard-core" ),
					"uppercase"		=> esc_html__( "Upper Case", "wiguard-core" ),
					"lowercase"		=> esc_html__( "Lower Case", "wiguard-core" )
				],
				'selectors' 	=> [
					'{{WRAPPER}} .section-title-wrapper .section-title' => 'text-transform: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"title_margin",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Title Margin", "wiguard-core" ),
				"description"	=> esc_html__( "Enter title margin here. Example 30px 20px 30px 20px.", "wiguard-core" ),
				'selectors' 	=> [
					'{{WRAPPER}} .section-title-wrapper .title-wrap' => 'margin: {{VALUE}};'
				]
			]
		);
		$this->end_controls_section();
		
		//Sub Title Section
		$this->start_controls_section(
			"subtitle_section",
			[
				"label"			=> esc_html__( "Sub Title", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Sub title options available here.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"sub_title",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Sub Title", "wiguard-core" ),
				"description"	=> esc_html__( "Enter section title here. If no need sub title, then leave this box blank.", "wiguard-core" )
			]
		);
		$this->add_control(
			"sub_title_pos",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Sub Title Position", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for positioning sub title.", "wiguard-core" ),
				"default"		=> "bottom",
				"options"		=> [
					"bottom"	=> esc_html__( "Bottom", "wiguard-core" ),
					"top"		=> esc_html__( "Top", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"sub_title_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Sub Title Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can set the section sub title color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .section-title-wrapper .sub-title' => 'color: {{VALUE}};'
				]
			]
		);
		$this->end_controls_section();
		
		//Lead
		$this->start_controls_section(
			"subtitle_lead",
			[
				"label"			=> esc_html__( "Lead", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Lead text options available here.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"lead_text",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Lead Text", "wiguard-core" ),
				"description"	=> esc_html__( "Enter section lead text here.", "wiguard-core" )
			]
		);
		$this->end_controls_section();
		
		//Separator Section
		$this->start_controls_section(
			"separator_section",
			[
				"label"			=> esc_html__( "Separator", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Separator options available here.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"sep_type",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Separator Type", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for positioning sub title.", "wiguard-core" ),
				"default"		=> "none",
				"options"		=> [
					"none"		=> esc_html__( "None", "wiguard-core" ),
					"border"	=> esc_html__( "Border", "wiguard-core" ),
					"image"		=> esc_html__( "Image", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"sep_border_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Title Separator Border Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can set the section title separator border color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .section-title-wrapper .title-separator.separator-border' => 'background-color: {{VALUE}};'
				],
				"condition" 	=> [
					"sep_type" 	=> "border"
				]
			]
		);
		$this->add_control(
			"sep_image",
			[
				"label" 		=> __( "Separator Image", "wiguard-core" ),
				"description"	=> esc_html__( "Choose section title separator image.", "wiguard-core" ),
				"type" 			=> \Elementor\Controls_Manager::MEDIA,
				"dynamic" 		=> [
					"active" 		=> true,
				],
				"condition" 	=> [
					"sep_type" 	=> "image"
				]
			]
		);
		$this->end_controls_section();
		
		//Content Section
		$this->start_controls_section(
			"content_section",
			[
				"label"			=> esc_html__( "Content", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Content options available here.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"sec_tit_content",
			[
				"type"			=> \Elementor\Controls_Manager::TEXTAREA,
				"label"			=> esc_html__( "Content", "wiguard-core" ),
				"description"	=> esc_html__( "Enter section title below content.", "wiguard-core" ),
				"default" 		=> ""
			]
		);
		$this->end_controls_section();
		
		//Button Section
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
				"description"	=> esc_html__( "Enter section button text here. If no need button, then leave this box blank.", "wiguard-core" )
			]
		);
		$this->add_control(
			"btn_url",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Button URL", "wiguard-core" ),
				"description"	=> esc_html__( "Enter section button url here. If no need button url, then leave this box blank.", "wiguard-core" )
			]
		);
		$this->add_control(
			"btn_type",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Button Type", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for positioning sub title.", "wiguard-core" ),
				"default"		=> "none",
				"options"		=> [
					"none"		=> esc_html__( "Default", "wiguard-core" ),
					"border"	=> esc_html__( "Link", "wiguard-core" ),
					"image"		=> esc_html__( "Classic", "wiguard-core" ),
					"border"	=> esc_html__( "Bordered", "wiguard-core" ),
					"image"		=> esc_html__( "Inverse", "wiguard-core" )
				]
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
		
		$title = isset( $title ) ? $title : '';
		$title_head = isset( $title_head ) ? $title_head : 'h2';		
		$sub_title = isset( $sub_title ) && $sub_title != '' ? '<span class="sub-title">'. esc_html( $sub_title ) .'</span>' : '';
		$sub_title_pos = isset( $sub_title_pos ) ? $sub_title_pos : 'bottom';
		$lead_text = isset( $lead_text ) ? $lead_text : '';
		
		echo '<div class="section-title-wrapper'. esc_attr( $class ) .'">';
			
			echo '<div class="title-wrap">';
				// Section title 
				echo $sub_title != '' && $sub_title_pos == 'top' ? $sub_title : '';
				echo '<' . esc_attr( $title_head ) . ' class="section-title">';
					echo isset( $title_prefix ) && $title_prefix != '' ? '<span class="title-prefix theme-color">' . esc_html( $title_prefix ) . '</span> ' : '';
					echo esc_html( $title );
					echo isset( $title_suffix ) && $title_suffix != '' ? ' <span class="title-suffix theme-color">' . esc_html( $title_suffix ) . '</span>' : '';
				echo '</' . esc_attr( $title_head ) . '>';
				echo $sub_title != '' && $sub_title_pos == 'bottom' ? $sub_title : '';
				
				// Section title separator 
				$sep_type = isset( $sep_type ) ? $sep_type : 'border';
				if( $sep_type == 'border' ){
					echo '<span class="title-separator separator-border theme-color-bg"></span>';
				}elseif( $sep_type == 'image' ){
					if( is_array( $sep_image ) && isset( $sep_image['id'] ) ){ 
						$img_attr = wp_get_attachment_image_src( absint( $sep_image['id'] ), 'full', true );
						$image_alt = get_post_meta( absint( $sep_image['id'] ), '_wp_attachment_image_alt', true);
						echo isset( $img_attr[0] ) ? '<span class="title-separator separator-img"><img class="img-fluid" src="'. esc_url( $img_attr[0] ) .'" width="'. esc_attr( $img_attr[1] ) .'" height="'. esc_attr( $img_attr[2] ) .'" alt="'. esc_attr( $image_alt ) .'" /></span>' : '';
					}
				}
			echo '</div><!-- .title-wrap -->';
			
			echo '<div class="section-description">';
				echo !empty( $lead_text ) ? '<span class="lead d-block">'. $lead_text .'</span>' : '';
				echo isset( $sec_tit_content ) && $sec_tit_content != '' ? $sec_tit_content : '';
				$btn_url = isset( $btn_url ) ? $btn_url : '';
				$btn_type = isset( $btn_type ) ? $btn_type : '';
				echo isset( $btn_text ) && $btn_text != '' ? '<p><a class="btn '. esc_attr( $btn_type ) .'" href="'. esc_html( $btn_url ) .'" title="'. esc_attr( $btn_text ) .'">'. esc_html( $btn_text ) .'</a></p>' : '';
			echo '</div><!-- .section-description -->';
			
		echo '</div><!-- .section-title-wrapper -->';
		

	}
		
}