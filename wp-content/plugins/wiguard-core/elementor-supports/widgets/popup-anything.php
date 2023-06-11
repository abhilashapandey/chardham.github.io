<?php
/**
 * Wiguard Elementor Addon Popup Widget
 *
 * @since 1.0.0
 */
class Elementor_Popup_Anything_Widget extends \Elementor\Widget_Base {
	
	private $excerpt_len;
	
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
		return "wiguardpopup-anything";
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
		return __( "Popup Frame", "wiguard-core" );
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
		return "ti-layers-alt";
	}


	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Popup widget belongs to.
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
	public function get_script_depends() {
		if ( is_elementor_editor() ){
			wp_enqueue_style( 'magnific-popup' );
		}
		return [ 'magnific-popup', 'custom-front'  ];
	}
	
	public function get_style_depends() {
		return [ 'magnific-popup'  ];
	}
	/**
	 * Register Popup widget controls.
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
				"description"	=> esc_html__( "Put extra class for some additional styles.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"popup_type",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Popup Anything", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for popup anything.", "wiguard-core" ),
				"default"		=> "icon",
				"options"		=> [
					"icon"	=> esc_html__( "Icon", "wiguard-core" ),
					"btn"	=> esc_html__( "Button", "wiguard-core" ),
					"img"	=> esc_html__( "Image", "wiguard-core" ),
					"txt"	=> esc_html__( "Text", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"popup_url",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Popup URL", "wiguard-core" ),
				"description"	=> esc_html__( "Enter popup url. Example https://www.youtube.com/watch?v=tvDH4JM_gME", "wiguard-core" ),
				"default"		=> ""
			]
		);
		$this->add_control(
			"text_align",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Text Align", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for popup trigger text align.", "wiguard-core" ),
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
				"default"		=> "icon_ti",
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
				"label"			=> esc_html__( "Icon Size", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the icon custom size.", "wiguard-core" ),
				"default" 		=> "30",
				'selectors' => [
					'{{WRAPPER}} .popup-anything-wrapper .popup-trigger-icon' => 'font-size: {{VALUE}}px;',
				],
			]
		);
		$this->add_control(
			"icon_variation",
			[
				"label"			=> esc_html__( "Icon Style", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"description"	=> esc_html__( "This is option for counter icon style.", "wiguard-core" ),
				"default"		=> "theme-color",
				"options"		=> [
					"icon-dark"		=> esc_html__( "Dark", "wiguard-core" ),
					"icon-light"	=> esc_html__( "Light", "wiguard-core" ),
					"theme-color"	=> esc_html__( "Theme Color", "wiguard-core" ),
					"custom"		=> esc_html__( "Custom Color", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"icon_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Icon Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the counter icon color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .popup-anything-wrapper .popup-trigger-icon' => 'color: {{VALUE}};',
				],
				"condition" 	=> [
					"icon_variation"	=> "custom"
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
			"popup_img",
			[
				"type" => \Elementor\Controls_Manager::MEDIA,
				"label" => __( "Popup Trigger Image", "wiguard-core" ),
				"description"	=> esc_html__( "Choose popup trigger image.", "wiguard-core" ),
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
					'{{WRAPPER}} .popup-anything-wrapper .btn' => 'color: {{VALUE}};'
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
					'{{WRAPPER}} .popup-anything-wrapper .btn:hover' => 'color: {{VALUE}};'
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
					'{{WRAPPER}} .popup-anything-wrapper .btn' => 'background-color: {{VALUE}};'
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
					'{{WRAPPER}} .popup-anything-wrapper .btn:hover' => 'background-color: {{VALUE}};'
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
					'{{WRAPPER}} .popup-anything-wrapper .btn' => 'border-color: {{VALUE}};'
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
					'{{WRAPPER}} .popup-anything-wrapper .btn:hover' => 'border-color: {{VALUE}};'
				]
			]
		);
		$this->end_controls_section();
		
		//Text Section
		$this->start_controls_section(
			"text_section",
			[
				"label"			=> esc_html__( "Text", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Text options available here.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"popup_text",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Popup Text", "wiguard-core" ),
				"description"	=> esc_html__( "Choose popup custom text here.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"text_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Popup Text Color", "wiguard-core" ),
				"description"	=> esc_html__( "Choose popup custom text color here.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .popup-anything-wrapper .popup-trigger-txt' => 'color: {{VALUE}};',
				]
			]
		);
		$this->end_controls_section();

	}
	
	/**
	 * Render Popup widget output on the frontend.
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

		$class = isset( $extra_class ) && $extra_class != '' ? ' '. $extra_class : '';
		$class .= isset( $text_align ) && $text_align != 'default' ? ' text-'. $text_align : '';
		?>
		
		<div class="elementor-widget-container popup-anything-wrapper<?php echo esc_attr( $class ); ?>">
		
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

	/**
	 * Render Popup widget output on the frontend.
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
		
		$popup_type = isset( $popup_type ) && !empty( $popup_type ) ? $popup_type : 'btn';
		$popup_url = isset( $popup_url ) && !empty( $popup_url ) ? $popup_url : '';
		
		switch( $popup_type ){
		
			case "img":
				$popup_img = isset( $popup_img ) && !empty( $popup_img ) ? $popup_img : '';
				$img_url = is_array( $popup_img ) && isset( $popup_img['url'] ) ? $popup_img['url'] : '';
				$img_class = isset( $img_style ) && !empty( $img_style ) ? ' '.$img_style : '';
				echo '<a class="popup-video-post popup-trigger-img'. esc_attr( $img_class ) .'" href="'. esc_html( $popup_url ) .'"><img class="img-fulid" src="'. esc_url( $img_url ) .'" alt="'. esc_html__( 'Popup', 'wiguard-core' ) .'" /></a>';
			break;
		
			case "btn":
				$btn_class =  '';
				$btn_class .= isset( $btn_variation ) && $btn_variation != 'c' ? ' '. $btn_variation : '';
				$btn_class .= isset( $btn_hvariation ) && $btn_hvariation != 'c' ? ' '. $btn_hvariation : '';
				$btn_class .= isset( $btn_bg_variation ) && $btn_bg_variation != 'c' ? ' '. $btn_bg_variation : '';
				$btn_class .= isset( $btn_hbg_variation ) && $btn_hbg_variation != 'c' ? ' '. $btn_hbg_variation : '';
				$btn_class .= isset( $btn_type ) && !empty( $btn_type ) ? ' btn-'.$btn_type : '  btn-default';
				$btn_text = isset( $btn_text ) && !empty( $btn_text ) ? $btn_text : esc_html__( 'Popup', 'wiguard-core' );
				echo '<a class="popup-video-post btn'. esc_attr( $btn_class  ) .'" href="'. esc_html( $popup_url ) .'">'. esc_html( $btn_text ) .'</a>';
			break;
			
			case "txt":
				$popup_text = isset( $popup_text ) && $popup_text != '' ? $popup_text : esc_html__( 'Popup', 'wiguard-core' );
				echo '<a class="popup-video-post popup-trigger-txt" href="'. esc_html( $popup_url ) .'">'. esc_html( $popup_text ) .'</a>';
			break;
			
			case "icon":
				$icon_opt = isset( $icon_opt ) && $icon_opt != '' ? $icon_opt : '';
				$icon = isset( $$icon_opt ) && $$icon_opt != '' ? $$icon_opt : '';
				$icon_class = isset( $icon_variation ) && $icon_variation != 'c' ? ' icon-'.$icon_variation : ' icon-dark';
				echo '<a class="popup-video-post popup-trigger-icon'. esc_attr( $icon_class ) .'" href="'. esc_html( $popup_url ) .'"><span class="'. esc_attr( $icon ) .'"></span></a>';
			break;
		}
		
		

	}
	
}