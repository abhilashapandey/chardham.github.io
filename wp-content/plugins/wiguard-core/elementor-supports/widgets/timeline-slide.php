<?php
/**
 * Wiguard Elementor Addon Timeline Slide
 *
 * @since 1.0.0
 */
class Elementor_Timeline_Slide_Widget extends \Elementor\Widget_Base {
	
	/**
	 * Get widget name.
	 *
	 * Retrieve Timeline Slide widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return "wiguardtimelineslide";
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Timeline Slide widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( "Timeline Slide", "wiguard-core" );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Timeline Slide widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return "ti-layout-slider";
	}


	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Timeline Slide widget belongs to.
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
		return [ 'wiguard-timeline', 'custom-front' ];
	}


	/**
	 * Register Timeline Slide widget controls.
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
		$this->add_control(
			"line_distance",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Event Line Distance", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for timeline event line distance. If you use timeline for years make distance volume low.", "wiguard-core" ),
				"default" 		=> "60",
			]
		);	
		$this->end_controls_section();
		
		//Timeline Section
		$this->start_controls_section(
			"timeline_section",
			[
				"label"			=> esc_html__( "Timeline", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Timeline options available here.", "wiguard-core" ),
			]
		);
		
		$repeater = new \Elementor\Repeater();		
		$repeater->add_control(
			"timeline_date",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Timeline Date", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the timeline date. Must follow the date format dd/mm/yyyy. Example 16/01/2014", "wiguard-core" ),
				"default"		=> ""
			]
		);
		$repeater->add_control(
			"timeline_separator",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Timeline Separator Title", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the timeline separator title.", "wiguard-core" ),
				"default"		=> ""
			]
		);
		$repeater->add_control(
			"timeline_title",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Timeline Title", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the timeline title.", "wiguard-core" ),
				"default"		=> ""
			]
		);
		$repeater->add_control(
			"timeline_subtitle",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Timeline Sub Title", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the timeline sub title.", "wiguard-core" ),
				"default"		=> ""
			]
		);
		$repeater->add_control(
			"tl_content",
			[
				"type"			=> \Elementor\Controls_Manager::TEXTAREA,
				"label"			=> esc_html__( "Content", "wiguard-core" ),
				"description"	=> esc_html__( "You can give the feature box content here. HTML allowed here.", "wiguard-core" ),
				"default" 		=> ""
			]
		);
		$this->add_control(
			"timeline_settings",
			[
				"label"			=> esc_html__( "Timeline Setting", "wiguard-core" ),
				"description"	=> esc_html__( "This is options for timeline.", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::REPEATER,
				"fields"		=> $repeater->get_controls(),
				"default"		=> [
					[
						"timeline_title" 	=> esc_html__( "History", "wiguard-core" ),
						"timeline_date"		=> "01/01/2012",
						"timeline_separator"=> esc_html__( "01 Jan", "wiguard-core" ),
						"timeline_subtitle"	=> esc_html__( "1st January, 2012", "wiguard-core" ),
						"tl_content"		=> esc_html__( "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", "wiguard-core" ),
					]
				],
				"title_field"	=> "{{{ timeline_title }}}",
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
		$class = isset( $extra_class ) && $extra_class != '' ? $extra_class : ''; 
		$distance = isset( $line_distance ) && $line_distance != '' ? absint( $line_distance ) : '60'; 
		
		echo '<div class="timeline-wrapper'. esc_attr( $class ) .'">';
		
		// All Timeline Items
		$tl_items =  isset( $timeline_settings ) ? $timeline_settings : array();// $tl_items is timeline items
		if( !empty( $tl_items ) ):
		
			$tl_header = $tl_slide = '';
			$sel_stat = 0;
			foreach( $tl_items as $tlitem ) {
				
				//timeline_separator, timeline_title, timeline_subtitle, tl_content
				$tl_date = isset( $tlitem['timeline_date'] ) ? $tlitem['timeline_date'] : '';
				$tl_separator = isset( $tlitem['timeline_separator'] ) ? $tlitem['timeline_separator'] : '';
				$tl_title = isset( $tlitem['timeline_title'] ) ? $tlitem['timeline_title'] : '';
				$tl_subtitle = isset( $tlitem['timeline_subtitle'] ) ? $tlitem['timeline_subtitle'] : '';
				$tl_content = isset( $tlitem['tl_content'] ) ? $tlitem['tl_content'] : '';
				$sel_class = '';
				if( !$sel_stat ){
					$sel_class = 'selected';
					$sel_stat = 1;
				}
				
				$tl_header .= '<li><a href="#" data-date="'. esc_attr( $tl_date ) .'" class="'. esc_attr( $sel_class ) .'">'. esc_html( $tl_separator ) .'</a></li>';
				$tl_slide .= '<li class="'. esc_attr( $sel_class ) .'" data-date="'. esc_attr( $tl_date ) .'">
					<h2>'. esc_html( $tl_title ) .'</h2>
					<em>'. esc_html( $tl_subtitle ) .'</em>
					<div class="testimoanial-content">'. wp_kses_post( $tl_content ) .'</div>
				</li>';
				
			}
			
			echo '<div class="cd-horizontal-timeline" data-distance="'. esc_attr( $distance ) .'">';
				echo '<div class="timeline">
					<div class="events-wrapper">
						<div class="events">
							<ul>'. $tl_header .'</ul>

							<span class="filling-line" aria-hidden="true"></span>
						</div> <!-- .events -->
					</div> <!-- .events-wrapper -->
						
					<ul class="cd-timeline-navigation">
						<li><a href="#" class="prev inactive"></a></li>
						<li><a href="#" class="next"></a></li>
					</ul> <!-- .cd-timeline-navigation -->
				</div> <!-- .timeline -->

				<div class="events-content">
					<ul>'. $tl_slide .'</ul>
				</div><!-- .events-content -->';				
			echo '</div><!-- .cd-horizontal-timeline -->';
			
		endif;
							
		echo '</div><!-- .timeline-wrapper -->';
		

	}
		
}