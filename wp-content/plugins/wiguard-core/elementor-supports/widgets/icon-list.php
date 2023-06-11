<?php
/**
 * Wiguard Elementor Addon Icon list
 *
 * @since 1.0.0
 */
class Elementor_Icon_List_Widget extends \Elementor\Widget_Base {
	
	/**
	 * Get widget name.
	 *
	 * Retrieve Icon list widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return "wiguardiconlist";
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Icon list widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( "Icon List", "wiguard-core" );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Icon list widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return "ti-list";
	}


	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Icon list widget belongs to.
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
	 * Register Icon list widget controls.
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
		
		//Icon List Section
		$this->start_controls_section(
			"icon_list_section",
			[
				"label"			=> esc_html__( "Icon List", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Icon list options available here.", "wiguard-core" ),
			]
		);	
		$this->add_control(
			"title_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Title Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the title color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .icon-list-wrapper .icon-parent' => 'color: {{VALUE}};'
				]
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
					'{{WRAPPER}} .icon-list-wrapper .icon-parent > span' => 'font-size: {{VALUE}}px;'
				]
			]
		);
		$this->add_control(
			"icon_variation",
			[
				"label"			=> esc_html__( "Icon Style", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"description"	=> esc_html__( "This is option for icon list icon style.", "wiguard-core" ),
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
					'{{WRAPPER}} .icon-list-wrapper .icon-parent > span' => 'color: {{VALUE}};'
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
					'{{WRAPPER}} .icon-list-wrapper .icon-parent:hover > span' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"icon_bottom_space",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Icon List Bottom Space", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for set icon list bottom space. Example 10", "wiguard-core" ),
				"default"		=> "0",
				'selectors' => [
					'{{WRAPPER}} .icon-list-wrapper .vertical-icon-list > li' => 'margin-bottom: {{VALUE}}px;',
					'{{WRAPPER}} .icon-list-wrapper .vertical-icon-list > li:last-child' => 'margin-bottom: 0;'
				]
			]
		);
		
		$repeater = new \Elementor\Repeater();
		
		$repeater->add_control(
			"list_title",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "List Title", "wiguard-core" ),
				"description"	=> esc_html__( "Put list title here.", "wiguard-core" )
			]
		);
		
		$repeater->add_control(
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
		$repeater->add_control(
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
		$repeater->add_control(
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
			"icon_list",
			[
				"type"			=> \Elementor\Controls_Manager::REPEATER,
				"label"			=> esc_html__( "Icon List", "wiguard-core" ),
				"fields"		=> $repeater->get_controls(),
				"default" 		=> [
					[
						"list_title" 		=> esc_html__( "List Title 1", "wiguard-core" ),
						"icon_fa" 		=> "ti-star",
						"icon_ti" 		=> "ti-heart"
					],
					[
						"list_title" 		=> esc_html__( "List Title 2", "wiguard-core" ),
						"icon_fa" 		=> "ti-star",
						"icon_ti" 		=> "ti-heart"
					],
				],
				"title_field"	=> "{{{ list_title }}}"
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

		//Icon List Section
		$icon_class = '';
		$icon_class .= isset( $icon_variation ) && $icon_variation != 'c' ? ' icon-'.$icon_variation : ' icon-dark';
		$icon_list = isset( $icon_list ) ? $icon_list : '';
		
		echo '<div class="icon-list-wrapper'. esc_attr( $class ) .'">';		
		if( $icon_list  ){
			echo '<ul class="nav flex-column vertical-icon-list">';
				foreach( $icon_list as $icon_item ){
					$icon_opt = isset( $icon_item['icon_opt'] ) && $icon_item['icon_opt'] != '' ? $icon_item['icon_opt'] : '';
					$icon = isset( $icon_item[$icon_opt] ) && $icon_item[$icon_opt] != '' ? $icon_item[$icon_opt] : '';
					echo '<li class="icon-parent"><span class="'. esc_attr( $icon_class ) .' '. esc_attr( $icon ) .'"></span>'. esc_html( $icon_item['list_title'] ) .'</li>';
				}
			echo '</ul>';
		}
		echo '</div><!-- .icon-list-wrapper -->';
		

	}
		
}