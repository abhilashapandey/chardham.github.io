<?php
/**
 * Wiguard Elementor Addon Social Links
 *
 * @since 1.0.0
 */
class Elementor_Social_Links_Widget extends \Elementor\Widget_Base {
	
	/**
	 * Get widget name.
	 *
	 * Retrieve Social Links widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return "wiguardsociallinks";
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Social Links widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( "Social Links", "wiguard-core" );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Social Links widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return "ti-share";
	}


	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Social Links widget belongs to.
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
	 * Register Social Links widget controls.
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
			"title",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Title", "wiguard-core" ),
				"description"	=> esc_html__( "Enter social links here.", "wiguard-core" )
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
					'{{WRAPPER}} .social-icons-wrapper' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"social_icons_type",
			[
				"label"			=> esc_html__( "Social Iocns Type", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can choose the social icons view type.", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"default"		=> "circled",
				"options"		=> [
					"squared"		=> esc_html__( "Squared", "wiguard-core" ),
					"rounded"		=> esc_html__( "Rounded", "wiguard-core" ),
					"circled"		=> esc_html__( "Circled", "wiguard-core" )
				]
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
			"social_icons_fore",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Social Icons Fore", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for day social icons fore color.", "wiguard-core" ),
				"default"		=> "black",
				"options"		=> [
					"black"	=> esc_html__( "Black", "wiguard-core" ),
					"white"		=> esc_html__( "White", "wiguard-core" ),
					"own"	=> esc_html__( "Own Color", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"social_icons_hfore",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Social Icons Fore Hover", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for day social icons fore hover color.", "wiguard-core" ),
				"default"		=> "h-own",
				"options"		=> [
					"h-black"	=> esc_html__( "Black", "wiguard-core" ),
					"h-white"		=> esc_html__( "White", "wiguard-core" ),
					"h-own"	=> esc_html__( "Own Color", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"social_icons_bg",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Social Icons Background", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for day social icons background color.", "wiguard-core" ),
				"default"		=> "bg-transparent",
				"options"		=> [
					"bg-transparent"		=> esc_html__( "Transparent", "wiguard-core" ),
					"bg-white"		=> esc_html__( "White", "wiguard-core" ),
					"bg-black"		=> esc_html__( "Black", "wiguard-core" ),
					"bg-light"		=> esc_html__( "Light", "wiguard-core" ),
					"bg-dark"		=> esc_html__( "Dark", "wiguard-core" ),
					"bg-own"		=> esc_html__( "Own Color", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"social_icons_hbg",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Social Icons Background Hover", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for day social icons background hover color.", "wiguard-core" ),
				"default"		=> "hbg-transparent",
				"options"		=> [
					"hbg-transparent"	=> esc_html__( "Transparent", "wiguard-core" ),
					"hbg-white"			=> esc_html__( "White", "wiguard-core" ),
					"hbg-black"			=> esc_html__( "Black", "wiguard-core" ),
					"hbg-light"			=> esc_html__( "Light", "wiguard-core" ),
					"hbg-dark"			=> esc_html__( "Dark", "wiguard-core" ),
					"hbg-own"			=> esc_html__( "Own Color", "wiguard-core" )
				]
			]
		);
		$this->end_controls_section();
		
		//Links Section
		$this->start_controls_section(
			"links_section",
			[
				"label"			=> esc_html__( "Links", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Social links options available here.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"social_fb",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Facebook", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for facebook social icon.", "wiguard-core" ),
				"default"		=> "#"
			]
		);
		$this->add_control(
			"social_twitter",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Twitter", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for twitter social icon.", "wiguard-core" ),
				"default"		=> "#"
			]
		);
		$this->add_control(
			"social_instagram",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Instagram", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for instagram social icon.", "wiguard-core" ),
				"default"		=> "#"
			]
		);	
		$this->add_control(
			"social_pinterest",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Pinterest", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for pinterest social icon.", "wiguard-core" ),
				"default"		=> "#"
			]
		);
		$this->add_control(
			"social_youtube",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Youtube", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for youtube social icon.", "wiguard-core" )
			]
		);	
		$this->add_control(
			"social_vimeo",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Vimeo", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for vimeo social icon.", "wiguard-core" )
			]
		);	
		$this->add_control(
			"social_soundcloud",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Soundcloud", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for soundcloud social icon.", "wiguard-core" )
			]
		);	
		$this->add_control(
			"social_yahoo",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Yahoo", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for yahoo social icon.", "wiguard-core" )
			]
		);	
		$this->add_control(
			"social_tumblr",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Tumblr", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for tumblr social icon.", "wiguard-core" )
			]
		);
		$this->add_control(
			"social_paypal",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Paypal", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for paypal social icon.", "wiguard-core" )
			]
		);	
		$this->add_control(
			"social_mailto",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Mailto", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for mailto social icon.", "wiguard-core" )
			]
		);	
		$this->add_control(
			"social_flickr",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Flickr", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for flickr social icon.", "wiguard-core" )
			]
		);	
		$this->add_control(
			"social_dribbble",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Dribbble", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for dribbble social icon.", "wiguard-core" )
			]
		);	
		$this->add_control(
			"social_rss",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "RSS", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for rss social icon.", "wiguard-core" )
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
		
		echo '<div class="social-icons-wrapper'. esc_attr( $class ) .'">';
			
			echo isset( $title ) && $title != '' ? '<h3 class="social-icons-title">'. esc_html( $title ) .'</h3>' : '';
			
			$social_media = array( 
				'social-fb' => 'ti-facebook', 
				'social-twitter' => 'ti-twitter', 
				'social-instagram' => 'ti-instagram', 
				'social-linkedin' => 'ti-linkedin', 
				'social-pinterest' => 'ti-pinterest',  
				'social-youtube' => 'ti-youtube', 
				'social-vimeo' => 'ti-vimeo', 
				'social-soundcloud' => 'ti-soundcloud', 
				'social-yahoo' => 'ti-yahoo', 
				'social-tumblr' => 'ti-tumblr-alt',  
				'social-paypal' => 'fa fa-paypal', 
				'social-mailto' => 'ti-email', 
				'social-flickr' => 'ti-flickr-alt', 
				'social-dribbble' => 'ti-dribbble', 
				'social-rss' => 'ti-rss'
			);
			
			//Social icons class
			$social_class = isset( $social_icons_type ) ? 'social-' . $social_icons_type : '';
			$social_class .= isset( $social_icons_fore ) ? ' social-' . $social_icons_fore : '';
			$social_class .= isset( $social_icons_hfore ) ? ' social-' . $social_icons_hfore : '';
			$social_class .= isset( $social_icons_bg ) ? ' social-' . $social_icons_bg : '';
			$social_class .= isset( $social_icons_hbg ) ? ' social-' . $social_icons_hbg : '';
			
			//Actived social icons from theme option output generate via loop
			echo '<ul class="nav social-icons '. esc_attr( $social_class ) .'">';
				foreach( $social_media as $key => $icon_class ){
					$social_field = str_replace( "-", "_", $key );
					if( isset( $$social_field ) && $$social_field != '' ){
						$social_url = $$social_field;
						echo '<li>
							<a href="'. esc_url( $social_url ) .'" class="nav-link '. esc_attr( $key ) .'">
								<i class="'. esc_attr( $icon_class ) .'"></i>
							</a>
						</li>';
					}
				}
			echo '</ul>';

		echo '</div><!-- .social-icons-wrapper -->';
		

	}
		
}