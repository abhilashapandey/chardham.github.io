<?php
/**
 * Wiguard Elementor Addon Toggle Content 
 *
 * @since 1.0.0
 */
class Elementor_Toggle_Content_Widget extends \Elementor\Widget_Base {
	
	private $excerpt_len;
	
	/**
	 * Get widget name.
	 *
	 * Retrieve Toggle content name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return "togglecontent";
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Toggle content title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( "Toggle Content", "wiguard-core" );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Toggle content icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return "ti-plus";
	}


	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Toggle content widget belongs to.
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
		return [ 'custom-front'  ];
	}

	/**
	 * Register Toggle content widget controls. 
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
				"description"	=> esc_html__( "Default blog options.", "wiguard-core" ),
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
			"tg_height",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Toggle Height", "wiguard-core" ),
				"description"	=> esc_html__( "Here you put the height of toggle window height. It will toggle to given height.", "wiguard-core" ),
				"default" 		=> "200",
				'placeholder' 	=> "200"
			]
		);
		$this->add_control(
			"tg_content",
			[
				"label"			=> esc_html__( "Toggle Content", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::WYSIWYG,
				"default"		=> ""
			]
		);
		$this->add_control(
			"content_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Content Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the content color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .toggle-content' => 'color: {{VALUE}};',
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
				"description"	=> esc_html__( "Enter button text when content short.", "wiguard-core" ),
				"default"		=> esc_html__( "More", "wiguard-core" ),
			]
		);
		$this->add_control(
			"btn_less_text",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Toggle Less Button Text", "wiguard-core" ),
				"description"	=> esc_html__( "Enter button text when content appear full.", "wiguard-core" ),
				"default"		=> esc_html__( "Less", "wiguard-core" ),
			]
		);
		$this->add_control(
			"icon_opt",
			[
				"label" 		=> esc_html__( "Button Icon", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for enable button icon.", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "0",
			]
		);
		$this->add_control(
			"icon_type",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Choose Icon Font", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for select icon font.", "wiguard-core" ),
				"default"		=> "icon_fa",
				"options"		=> [
					"icon_fa"	=> esc_html__( "Font Awesome", "wiguard-core" ),
					"icon_ti"	=> esc_html__( "Themify", "wiguard-core" ),
				],
				"condition" 	=> [
					"icon_opt" 	=> "1"
				],
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
					"icon_type" 	=> "icon_fa",
					"icon_opt" 	=> "1"
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
					"icon_type" 	=> "icon_ti",
					"icon_opt" 	=> "1"
				],
			]
		);
		$this->add_control(
			"icon_position",
			[
				"label"			=> esc_html__( "Icon Position", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"description"	=> esc_html__( "Choose button icon position to place before text or after text.", "wiguard-core" ),
				"default"		=> "before",
				"options"		=> [
					"before"		=> esc_html__( "Before Text", "wiguard-core" ),
					"after"			=> esc_html__( "After Text", "wiguard-core" )
				],
				"condition" 	=> [
					"icon_opt" 	=> "1"
				],
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

	}

	/**
	 * Render Toggle content widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings = $this->get_settings_for_display();
		extract( $settings );
		
		$class = isset( $extra_class ) && $extra_class != '' ? ' ' . $extra_class : '';		
		$tg_content = isset( $tg_content ) && $tg_content != '' ? $tg_content : '';
		$tg_height = isset( $tg_height ) && $tg_height != '' ? $tg_height : '';
		
		
		//Button Setion
		$btn_type = isset( $btn_type ) && !empty( $btn_type ) ? ' btn-'.$btn_type : '  btn-default';
		$btn_text = isset( $btn_text ) && !empty( $btn_text ) ? '<span class="toggle-btn-txt">'. $btn_text .'</span>' : '<span class="toggle-btn-txt">'. esc_html__( 'More', 'wiguard-core' ) .'</span>';
		$btn_less_text = isset( $btn_less_text ) && !empty( $btn_less_text ) ? $btn_less_text : esc_html__( 'Less', 'wiguard-core' );
		
		$btn_before_icon = $btn_after_icon = '';
		$icon_opt = isset( $icon_opt ) && !empty( $icon_opt ) ? $icon_opt : '';
		if( $icon_opt == '1' ){
			//Icon Section
			$icon_position = isset( $icon_position ) && $icon_position != '' ? $icon_position : '';
			$icon_type = isset( $icon_type ) && $icon_type != '' ? $icon_type : '';
			$icon = isset( $$icon_type ) && $$icon_type != '' ? $$icon_type : '';
			$icon_position = isset( $icon_position ) && $icon_position != '' ? $icon_position : '';
			if( $icon_position == '' ){
				$btn_before_icon = '<span class="btn-before-icon '. esc_attr( $icon ) .'"></span>';
			}else{
				$btn_after_icon = '<span class="btn-after-icon '. esc_attr( $icon ) .'"></span>';
			}
		}
		
		echo '<div class="toggle-content-wrapper'. esc_attr( $class ) .'">';
			echo '<div class="toggle-content-inner">';
				
				if( $tg_content ){
					echo '<div class="toggle-content" data-height="'. esc_attr( $tg_height ) .'">'. wp_kses_post( $tg_content ) .'</div><!-- .toggle-content -->';
				}
				
				if( $btn_text ){
					echo '<div class="toggle-btn-wrap"><a class="toggle-content-trigger" href="'. esc_attr( $btn_type ) .'" href="#" data-less="'. esc_attr( $btn_less_text ) .'">'. ( $btn_before_icon . $btn_text . $btn_after_icon ) .'</a></div><!-- .toggle-btn-wrap -->';				
				}
			echo '</div><!-- .toggle-content-inner -->';
		echo '</div><!-- .toggle-content-wrapper -->';

	}
	
}