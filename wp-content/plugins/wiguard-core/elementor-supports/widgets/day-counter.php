<?php
/**
 * Wiguard Elementor Addon Day Counter
 *
 * @since 1.0.0
 */
class Elementor_Day_Counter_Widget extends \Elementor\Widget_Base {
	
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
		return "wiguarddaycounter";
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
		return __( "Day Counter", "wiguard-core" );
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
		return "ti-timer";
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
	public function get_script_depends() {
		return [ 'countdown', 'custom-front'  ];
	}

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
		$this->add_control(
			"date",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Date", "wiguard-core" ),
				"description"	=> esc_html__( "Here you put the day counter date. Date format should be yyyy/mm/dd", "wiguard-core" ),
				"default" 		=> ""
			]
		);
		$this->end_controls_section();
		
		//Layouts Section
		$this->start_controls_section(
			"layouts_section",
			[
				"label"			=> esc_html__( "Layouts", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Counter options available here.", "wiguard-core" ),
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
					'{{WRAPPER}} .day-counter-wrapper .counter-item h3' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			"variation",
			[
				"label"			=> esc_html__( "Day Counter Layout", "wiguard-core" ),
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
			"counter_items",
			[
				"label"				=> "Day Counter Items",
				"description"		=> esc_html__( "This is settings for day counter custom layout. here you can set your own layout. Drag and drop needed services items to Enabled part.", "wiguard-core" ),
				"type"				=> "dragdrop",
				"ddvalues" 			=> [ 
					esc_html__( "Enabled", "wiguard-core" ) => [
						"day"	=> esc_html__( "Days", "wiguard-core" ),
						"hour"	=> esc_html__( "Hours", "wiguard-core" ),
						"min"	=> esc_html__( "Minutes", "wiguard-core" ),
						"sec"	=> esc_html__( "Seconds", "wiguard-core" )
					],
					esc_html__( "disabled", "wiguard-core" ) => [
						"week"	=> esc_html__( "Weeks", "wiguard-core" )
					]
				]
			]
		);
		$this->add_control(
			"counter_shape",
			[
				"label"			=> esc_html__( "Day Counter Shape", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"description"		=> esc_html__( "This is option for counter shape.", "wiguard-core" ),
				"default"		=> "default",
				"options"		=> [
					"rounded-0"			=> esc_html__( "Square", "wiguard-core" ),
					"rounded"			=> esc_html__( "Round", "wiguard-core" ),
					"rounded-circle"	=> esc_html__( "Circle", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"text_align",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Text Align", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for circle progress text align.", "wiguard-core" ),
				"default"		=> "center",
				"options"		=> [
					"default"		=> esc_html__( "Default", "wiguard-core" ),
					"left"			=> esc_html__( "Left", "wiguard-core" ),
					"center"		=> esc_html__( "Center", "wiguard-core" ),
					"right"			=> esc_html__( "Right", "wiguard-core" )
				]
			]
		);
		$this->end_controls_section();
		
		//Labels Section
		$this->start_controls_section(
			"labels_section",
			[
				"label"			=> esc_html__( "Labels", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Labels section.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"day_label",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Days Label", "wiguard-core" ),
				"description"	=> esc_html__( "Here you set the days label for counter date.", "wiguard-core" ),
				"default" 		=> esc_html__( "Days", "wiguard-core" )
			]
		);
		$this->add_control(
			"hour_label",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Hours Label", "wiguard-core" ),
				"description"	=> esc_html__( "Here you set the hours label for counter date.", "wiguard-core" ),
				"default" 		=> esc_html__( "Hours", "wiguard-core" )
			]
		);
		$this->add_control(
			"min_label",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Minutes Label", "wiguard-core" ),
				"description"	=> esc_html__( "Here you set the minutes label for counter date.", "wiguard-core" ),
				"default" 		=> esc_html__( "Minutes", "wiguard-core" )
			]
		);
		$this->add_control(
			"sec_label",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Seconds Label", "wiguard-core" ),
				"description"	=> esc_html__( "Here you set the seconds label for counter date.", "wiguard-core" ),
				"default" 		=> esc_html__( "Seconds", "wiguard-core" )
			]
		);
		$this->add_control(
			"week_label",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Weeks Label", "wiguard-core" ),
				"description"	=> esc_html__( "Here you set the weeks label for counter date.", "wiguard-core" ),
				"default" 		=> esc_html__( "Weeks", "wiguard-core" )
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
		$class .= isset( $variation ) ? ' day-counter-' . $variation : '';	
		$shape_class = isset( $counter_shape ) ? ' ' . $counter_shape : '';				
		$class .= isset( $text_align ) && $text_align != 'default' ? ' text-' . $text_align : '';
		$date = isset( $date ) ? $date : '';
		
		$default_items = array( 
			"day"	=> esc_html__( "Days", "wiguard-core" ),
			"hour"	=> esc_html__( "Hours", "wiguard-core" ),
			"min"	=> esc_html__( "Minutes", "wiguard-core" ),
			"sec"	=> esc_html__( "Seconds", "wiguard-core" )
		);
		
		$elements = isset( $counter_items ) && !empty( $counter_items ) ? json_decode( $counter_items, true ) : array( 'Enabled' => $default_items );
		
		$class .= count( $elements['Enabled'] ) ? ' counter-field-' . count( $elements['Enabled'] ) : '';
		
		echo '<div class="day-counter-wrapper'. esc_attr( $class ) .'">';
			echo '<div class="day-counter" data-date="'. esc_attr( $date ) .'">';
			
				if( isset( $elements['Enabled'] ) && !empty( $elements['Enabled'] ) ) :
					foreach( $elements['Enabled'] as $element => $value ){
						
						switch( $element ){
							
							case "day":
								$day_label = isset( $day_label ) ? $day_label : '';
								echo '<div class="counter-day'. esc_attr( $shape_class ) .'">';
									echo '<div class="counter-item">';
										echo '<h3></h3>';
										echo '<span>'. esc_html( $day_label ) .'</span>';
									echo '</div>';
								echo '</div><!-- .counter-day -->';		
							break;
						
							case "hour":
								$hour_label = isset( $hour_label ) ? $hour_label : '';
								echo '<div class="counter-hour'. esc_attr( $shape_class ) .'">';
									echo '<div class="counter-item">';
										echo '<h3></h3>';
										echo '<span>'. esc_html( $hour_label ) .'</span>';
									echo '</div>';
								echo '</div><!-- .counter-hour -->';
							break;
							
							case "min":
								$min_label = isset( $min_label ) ? $min_label : '';
								echo '<div class="counter-min'. esc_attr( $shape_class ) .'">';
									echo '<div class="counter-item">';
										echo '<h3></h3>';
										echo '<span>'. esc_html( $min_label ) .'</span>';
									echo '</div>';
								echo '</div><!-- .counter-min -->';	
							break;
							
							case "sec":
								$sec_label = isset( $sec_label ) ? $sec_label : '';
								echo '<div class="counter-sec'. esc_attr( $shape_class ) .'">';
									echo '<div class="counter-item">';
										echo '<h3></h3>';
										echo '<span>'. esc_html( $sec_label ) .'</span>';
									echo '</div>';
								echo '</div><!-- .counter-sec -->';		
							break;
							
							case "week":
								$week_label = isset( $week_label ) ? $week_label : '';
								echo '<div class="counter-week'. esc_attr( $shape_class ) .'">';
									echo '<div class="counter-item">';
										echo '<h3></h3>';
										echo '<span>'. esc_html( $week_label ) .'</span>';
									echo '</div>';
								echo '</div><!-- .counter-week -->';		
							break;
							
						}
						
					}
				endif;
			
			echo '</div><!-- .day-counter -->';
		echo '</div><!-- .day-counter-wrapper -->';

	}
	
}