<?php
/**
 * Wiguard Elementor Addon Circle Progress Widget
 *
 * @since 1.0.0
 */
class Elementor_Counter_Widget extends \Elementor\Widget_Base {
	
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
		return "wiguardcounter";
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
		return __( "Counter", "wiguard-core" );
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
		return "ti-time";
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
		return [ 'appear', 'custom-front'  ];
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
				"description"	=> esc_html__( "Put extra class for some additional styles.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"title",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Title", "wiguard-core" ),
				"description"	=> esc_html__( "Here you put the counter title.", "wiguard-core" ),
				"default" 		=> esc_html__( "Counter", "wiguard-core" ),
			]
		);
		$this->add_control(
			"count_val",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Counter Value", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can place counter value. Example 200", "wiguard-core" ),
				"default" 		=> "100"
			]
		);
		$this->add_control(
			"count_suffix_val",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Counter Suffix", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can place counter suffix value. Example +", "wiguard-core" ),
				"default" 		=> ""
			]
		);
		$this->add_control(
			"content",
			[
				"type"			=> \Elementor\Controls_Manager::TEXTAREA,
				"label"			=> esc_html__( "Counter Content", "wiguard-core" ),
				"description"	=> esc_html__( "Here you put the counter content.", "wiguard-core" ),
				"default" 		=> ""
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
			"title_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Title Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the title color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .counter-wrapper .counter-title-head' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			"count_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Count Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the count color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .counter-wrapper .counter-up' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			"counter_layout",
			[
				"label"			=> esc_html__( "Circle Progress Layout", "wiguard-core" ),
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
			"heading_tag",
			[
				"label"			=> esc_html__( "Post Heading Tag", "wiguard-core" ),
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
			"counter_items",
			[
				"label"				=> "Counter Items",
				"description"		=> esc_html__( "This is settings for counter custom layout. here you can set your own layout. Drag and drop needed counter items to Enabled part.", "wiguard-core" ),
				"type"				=> "dragdrop",
				"ddvalues" 			=> [ 
					esc_html__( "Enabled", "wiguard-core" ) => array( 
						"icon"	=> esc_html__( "Icon", "wiguard-core" ),
						"count"	=> esc_html__( "Count Value", "wiguard-core" ),
						"title"	=> esc_html__( "Title", "wiguard-core" )
						
					),
					esc_html__( "disabled", "wiguard-core" ) => array(
						"content"	=> esc_html__( "Content", "wiguard-core" ),
						"image"		=> esc_html__( "Image", "wiguard-core" )
					)
				]
			]
		);
		$this->add_control(
			"icon_size",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Icon Size", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the icon custom size.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .counter-wrapper .counter-icon > span' => 'font-size: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			"icon_variation",
			[
				"label"			=> esc_html__( "Icon Style", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"description"	=> esc_html__( "This is option for counter icon style.", "wiguard-core" ),
				"default"		=> "h3",
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
					'{{WRAPPER}} .counter-wrapper .counter-icon > span' => 'color: {{VALUE}};',
				],
				"condition" 	=> [
					"icon_variation"	=> "custom"
				]
			]
		);
		$this->add_control(
			"counter_image",
			[
				"label" 		=> __( "Counter Image", "wiguard-core" ),
				"description"	=> esc_html__( "Choose section title counter image.", "wiguard-core" ),
				"type" 			=> \Elementor\Controls_Manager::MEDIA,
				"dynamic" 		=> [
					"active" 		=> true,
				]
			]
		);
		$this->add_control(
			"counter_duration",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Counter Duration", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can set counter count duration. Example 2000", "wiguard-core" ),
				"default" 		=> "2000"
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
				"description"	=> esc_html__( "Here you can mention each blog items bottom space if you want to set default space of any item just use hyphen(-). Example 10px 20px - 10px", "wiguard-core" ),
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
	protected function render() {

		$settings = $this->get_settings_for_display();
		extract( $settings );
		
		//Define Variables
		$title = isset( $title ) && $title != '' ? $title : '';
		$content = isset( $content ) && $content != '' ? $content : '';
		$count_val = isset( $count_val ) && $count_val != '' ? $count_val : '';
		$icon_type = isset( $icon_type ) ? $icon_type : '';
		$duration = isset( $counter_duration ) ? $counter_duration : '2000';
		$icon_opt = isset( $icon_opt ) && $icon_opt != '' ? $icon_opt : '';
		$icon = isset( $$icon_opt ) && $$icon_opt != '' ? $$icon_opt : '';
		$icon_variation = isset( $icon_variation ) ? $icon_variation : '';
		$icon_color = isset( $icon_color ) && $icon_variation == 'custom' ? $icon_color : '';
		$heading_tag = isset( $heading_tag ) ? $heading_tag : 'h4';
		$count_suffix_val = isset( $count_suffix_val ) ? $count_suffix_val : '';
		
		$class = isset( $extra_class ) && $extra_class != '' ? $extra_class : '';
		$counter_layout = isset( $counter_layout ) ? $counter_layout : 'default';
		$class .= ' counter-style-' . $counter_layout;
		$class .= isset( $text_align ) && $text_align != 'default' ? ' text-' . $text_align : '';
		$icon_class = $icon_variation != 'custom' ? ' '. $icon_variation : '';
		
		$default_items = array( 
			"icon"	=> esc_html__( "Icon", "wiguard-core" ),
			"count"	=> esc_html__( "Count Value", "wiguard-core" ),
			"title"	=> esc_html__( "Title", "wiguard-core" )
		);
		$elemetns = isset( $counter_items ) && !empty( $counter_items ) ? json_decode( $counter_items, true ) : array( 'Enabled' => $default_items );
		
		// This is custom css options for main shortcode warpper
		$shortcode_css = '';
		$shortcode_rand_id = $rand_class = 'shortcode-rand-' . wiguard_shortcode_rand_id();
		
		//Spacing
		if( isset( $sc_spacing ) && !empty( $sc_spacing ) ){
			$sc_spacing = preg_replace( '!\s+!', ' ', $sc_spacing );
			$space_arr = explode( " ", $sc_spacing );
			$i = 1;

			if( $counter_layout != 'classic-pro' ){
				$space_class_name = '.' . esc_attr( $rand_class ) . '.counter-wrapper >';
			}else{
				$space_class_name = '.' . esc_attr( $rand_class ) . '.counter-wrapper .counter-right >';
			}
			foreach( $space_arr as $space ){
				$shortcode_css .= $space != '-' ? $space_class_name .' *:nth-child('. esc_attr( $i ) .') { margin-bottom: '. esc_attr( $space ) .'; }' : '';
				$i++;
			}
		}
	
		if( isset( $elemetns['Enabled'] ) ) :
		
			if( $shortcode_css ) $class .= ' ' . $shortcode_rand_id . ' wiguard-inline-css';
			echo '<div class="counter-wrapper'. esc_attr( $class ) .'" data-css="'. htmlspecialchars( json_encode( $shortcode_css ), ENT_QUOTES, 'UTF-8' ) .'">';
			
				if( $counter_layout == 'classic-pro' ){
					echo '<div class="media">';
						echo '<div class="counter-left mr-3">';
							if( isset( $elemetns['Enabled']['icon'] ) ){
								echo '<div class="counter-icon'. esc_attr( $icon_class ) .'" data-css="'. htmlspecialchars( json_encode( $shortcode_css ), ENT_QUOTES, 'UTF-8' ) .'">';
									echo '<span class="'. esc_attr( $icon ) .'"></span>';
								echo '</div><!-- .counter-icon -->';
								unset( $elemetns['Enabled']['icon'] );
							}
							if( isset( $elemetns['Enabled']['image'] ) ){
								if( is_array( $counter_image ) && isset( $counter_image['id'] ) ){ 
									$img_attr = wp_get_attachment_image_src( absint( $counter_image['id'] ), 'full', true );
									$image_alt = get_post_meta( absint( $counter_image['id'] ), '_wp_attachment_image_alt', true);
									if( isset( $img_attr[0] ) ){
										echo '<div class="counter-image">';
											echo '<img class="img-fluid" src="'. esc_url( $img_attr[0] ) .'" width="'. esc_attr( $img_attr[1] ) .'" height="'. esc_attr( $img_attr[2] ) .'" alt="'. esc_attr( $image_alt ) .'" />';
										echo '</div><!-- .counter-image -->';
									}
								}		
								unset( $elemetns['Enabled']['image'] );
							}
						echo '</div><!-- .counter-left -->';
						echo '<div class="media-body counter-right">';
				}
		
				foreach( $elemetns['Enabled'] as $element => $value ){
					switch( $element ){
		
						case "title":
							echo '<div class="counter-title">';
								echo '<'. esc_attr( $heading_tag ) .' class="counter-title-head">'. esc_html( $title ) .'</'. esc_attr( $heading_tag ) .'>';
							echo '</div><!-- .counter-title -->';		
						break;
				
						case "icon":
								echo '<div class="counter-icon'. esc_attr( $icon_class ) .'" data-css="'. htmlspecialchars( json_encode( $shortcode_css ), ENT_QUOTES, 'UTF-8' ) .'">';
									echo '<span class="'. esc_attr( $icon ) .'"></span>';
								echo '</div><!-- .counter-icon -->';
						break;
						
						case "count": 
							echo '<div class="counter-value">';
								echo '<h3><span class="counter-up" data-count="'. esc_attr( $count_val ) .'" data-duration="'. esc_attr( $duration ) .'">0</span>';
								if( $count_suffix_val ) echo '<span class="counter-suffix">'. esc_html( $count_suffix_val ) .'</span>';
								echo '</h3>';
							echo '</div><!-- .counter-value -->';	
						break;
						
						case "content":
							echo '<div class="counter-content">';
								echo '<p>'. esc_textarea( $content ) .'</p>';
							echo '</div><!-- .counter-read-more -->';		
						break;
						
						case "image":
							if( is_array( $counter_image ) && isset( $counter_image['id'] ) ){ 
								$img_attr = wp_get_attachment_image_src( absint( $counter_image['id'] ), 'full', true );
								$image_alt = get_post_meta( absint( $counter_image['id'] ), '_wp_attachment_image_alt', true);
								if( isset( $img_attr[0] ) ){
									echo '<div class="counter-image">';
										echo '<img class="img-fluid" src="'. esc_url( $img_attr[0] ) .'" width="'. esc_attr( $img_attr[1] ) .'" height="'. esc_attr( $img_attr[2] ) .'" alt="'. esc_attr( $image_alt ) .'" />';
									echo '</div><!-- .counter-image -->';
								}
							}									
						break;					
						
					}
				} // foreach end
				
				if( $counter_layout == 'classic-pro' ){
						echo '</div><!-- .counter-right -->';
					echo '</div><!-- .media -->';
				}
				
			echo '</div><!-- .counter-wrapper -->';
				
		endif;

	}
	
}