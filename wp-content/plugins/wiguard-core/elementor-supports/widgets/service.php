<?php
/**
 * Wiguard Elementor Addon Service Widget
 *
 * @since 1.0.0
 */
class Elementor_Service_Widget extends \Elementor\Widget_Base {
	
	private $excerpt_len;
	
	/**
	 * Get widget name.
	 *
	 * Retrieve Service widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return "wiguardservice";
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Service widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( "Service", "wiguard-core" );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Service widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return "ti-settings";
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
		if ( is_elementor_editor() ){
			wp_enqueue_style( 'owl-carousel' );
			return [ 'owl-carousel', 'custom-front'  ];
		}
		
		return [ 'owl-carousel', 'custom-front'  ];
	}
	
	public function get_style_depends() {
		return [ 'owl-carousel' ];
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
				"description"	=> esc_html__( "Default service options.", "wiguard-core" ),
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
			"post_per_page",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Post Per Page", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can define post limits per page. Example 10", "wiguard-core" ),
				"default" 		=> "10",
				"placeholder"	=> "10"
			]
		);
		$this->add_control(
			"excerpt_length",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Excerpt Length", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can define post excerpt length. Example 10", "wiguard-core" ),
				"default" 		=> "15"
			]
		);
		$this->add_control(
			"more_text",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Read More Text", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can enter read more text instead of default text.", "wiguard-core" ),
				"default" 		=> esc_html__( "Read More", "wiguard-core" )
			]
		);
		$this->add_control(
			"button_type",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Read More Button Style", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for services read more button style.", "wiguard-core" ),
				"default"		=> "button",
				"options"		=> [
					"link"			=> esc_html__( "Link Style", "wiguard-core" ),
					"button"		=> esc_html__( "Button Style", "wiguard-core" )
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
				"description"	=> esc_html__( "Service layout options here available.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"heading_tag",
			[
				"label"			=> esc_html__( "Heading Tag", "wiguard-core" ),
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
				"label"			=> esc_html__( "Font Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the font color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .service-wrapper' => 'color: {{VALUE}};',
					'{{WRAPPER}} .service-wrapper.service-dark .service-inner' => 'color: {{VALUE}};'
				],
			]
		);
		$this->add_control(
			"service_layout",
			[
				"label"			=> esc_html__( "Service Layout", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"default"		=> "default",
				"options"		=> [
					"default"		=> esc_html__( "Default", "wiguard-core" ),
					"classic"		=> esc_html__( "Classic", "wiguard-core" ),
					"modern"		=> esc_html__( "Modern", "wiguard-core" ),
					"list"	=> esc_html__( "List", "wiguard-core" ),
				]
			]
		);
		$this->add_control(
			"variation",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Service Variation", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for service variatoin either dark or light.", "wiguard-core" ),
				"default"		=> "light",
				"options"		=> [
					"light"			=> esc_html__( "Light", "wiguard-core" ),
					"dark"			=> esc_html__( "Dark", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"service_cols",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Service Columns", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for service columns.", "wiguard-core" ),
				"default"		=> "6",
				"options"		=> [
					"3"			=> esc_html__( "4 Columns", "wiguard-core" ),
					"4"			=> esc_html__( "3 Columns", "wiguard-core" ),
					"6"			=> esc_html__( "2 Columns", "wiguard-core" ),
					"12"		=> esc_html__( "1 Column", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"service_items",
			[
				"label"				=> esc_html__( "Post Items", "wiguard-core" ),
				"description"		=> esc_html__( "This is settings for service custom layout. here you can set your own layout. Drag and drop needed service items to Enabled part.", "wiguard-core" ),
				"type"				=> "dragdrop",
				"ddvalues" 			=> [ 
					"Enabled" 		=> [ 
						"thumb"			=> esc_html__( "Feature Image", "wiguard-core" ),
						"title"			=> esc_html__( "Title", "wiguard-core" ),
						"excerpt"		=> esc_html__( "Excerpt", "wiguard-core" ),
						"more"			=> esc_html__( "Read More", "wiguard-core" )
					],
					"disabled"		=> [
						"icon"			=> esc_html__( "Icon Image", "wiguard-core" )
					]
				]
			]
		);
		$this->add_control(
			"text_align",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Text Align", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for service text align.", "wiguard-core" ),
				"default"		=> "default",
				"options"		=> [
					"default"	=> esc_html__( "Default", "wiguard-core" ),
					"left"		=> esc_html__( "Left", "wiguard-core" ),
					"center"	=> esc_html__( "Center", "wiguard-core" ),
					"right"		=> esc_html__( "Right", "wiguard-core" )
				]
			]
		);
		$this->end_controls_section();
		
		//Image Section
		$this->start_controls_section(
			"image_section",
			[
				"label"			=> esc_html__( "Image", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Image options here available.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"image_size",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Image Size", "wiguard-core" ),
				'description'	=> esc_html__( 'Choose thumbnail size for display different size image.', 'wiguard-core' ),
				"default"		=> "large",
				"options"		=> [
					"large"			=> esc_html__( "Large", "wiguard-core" ),
					"medium"		=> esc_html__( "Medium", "wiguard-core" ),
					"thumbnail"		=> esc_html__( "Thumbnail", "wiguard-core" ),
					"custom"		=> esc_html__( "Custom", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"custom_image_size",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Custom Image Size", "wiguard-core" ),
				"description"	=> esc_html__( "Enter custom image size. You must specify the semi colon(;) at last then only it'll crop. eg: 200x200;", "wiguard-core" ),
				"default" 		=> "",
				"condition" 	=> [
					"image_size" 		=> "custom"
				]
			]
		);
		$this->add_control(
			"hard_croping",
			[
				"label" 		=> esc_html__( "Image Hard Crop", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "0",
				"condition" 	=> [
					"image_size" 		=> "custom"
				]
			]
		);
		$this->end_controls_section();
		
		//Slide Section
		$this->start_controls_section(
			"slide_section",
			[
				"label"			=> esc_html__( "Slide", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Service slide options here available.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"slide_opt",
			[
				"label" 		=> esc_html__( "Slide Option", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for service slider option.", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "0"
			]
		);
		$this->add_control(
			"slide_item",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Slide Items", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for service slide items shown on large devices.", "wiguard-core" ),
				"default" 		=> "2",
			]
		);
		$this->add_control(
			"slide_item_tab",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Items on Tab", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for service slide items shown on tab.", "wiguard-core" ),
				"default" 		=> "2",
			]
		);
		$this->add_control(
			"slide_item_mobile",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Items on Mobile", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for service slide items shown on mobile.", "wiguard-core" ),
				"default" 		=> "1",
			]
		);
		$this->add_control(
			"slide_item_autoplay",
			[
				"label" 		=> esc_html__( "Auto Play", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for service slider auto play.", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "0"
			]
		);
		$this->add_control(
			"slide_item_loop",
			[
				"label" 		=> esc_html__( "Loop", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for service slider loop.", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "0"
			]
		);
		$this->add_control(
			"slide_center",
			[
				"label" 		=> esc_html__( "Items Center", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for service slider center, for this option must active loop and minimum items 2.", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "0"
			]
		);
		$this->add_control(
			"slide_nav",
			[
				"label" 		=> esc_html__( "Navigation", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for service slider navigation.", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "0"
			]
		);
		$this->add_control(
			"slide_dots",
			[
				"label" 		=> esc_html__( "Pagination", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for service slider pagination.", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "0"
			]
		);
		$this->add_control(
			"slide_margin",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Items Margin", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for service slider margin space.", "wiguard-core" ),
				"default" 		=> "",
			]
		);
		$this->add_control(
			"slide_duration",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Items Duration", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for service slider duration.", "wiguard-core" ),
				"default" 		=> "5000",
			]
		);
		$this->add_control(
			"slide_smart_speed",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Items Smart Speed", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for service slider smart speed.", "wiguard-core" ),
				"default" 		=> "250",
			]
		);
		$this->add_control(
			"slide_slideby",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Items Slideby", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for service slider scroll by.", "wiguard-core" ),
				"default" 		=> "1",
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
				"description"	=> esc_html__( "Here you can mention each service items bottom space if you want to set default space of any item just use hyphen(-). Example 10px 20px - 10px", "wiguard-core" ),
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
		$output = '';
		
		//Defined Variable
		$class_names = isset( $extra_class ) && $extra_class != '' ? ' ' . $extra_class : '';
		$post_per_page = isset( $post_per_page ) && $post_per_page != '' ? $post_per_page : '';
		$excerpt_length = isset( $excerpt_length ) && $excerpt_length != '' ? $excerpt_length : 0;
		$this->excerpt_len = $excerpt_length;
		$class_names .= isset( $service_layout ) ? ' service-' . $service_layout : ' service-1';
		$class_names .= isset( $text_align ) && $text_align != 'default' ? ' text-' . $text_align : '';
		$class_names .= isset( $variation ) ? ' service-' . $variation : '';
		$cols = isset( $service_cols ) ? $service_cols : 6;
		$more_text = isset( $more_text ) && $more_text != '' ? $more_text : '';
		$slide_opt = isset( $slide_opt ) && $slide_opt == '1' ? true : false;
		$btn_class = isset( $button_type ) && $button_type != 'button' ? ' btn-link' : '';
		$heading_tag = isset( $heading_tag ) ? $heading_tag : 'h3';
		$list_layout = isset( $service_layout ) && $service_layout == 'list' ? 1 : 0;
		
		$thumb_size = isset( $image_size ) ? $image_size : '';
		$cus_thumb_size = '';
		$hard_crop = false;
		if( $thumb_size == 'custom' ){
			$cus_thumb_size = isset( $custom_image_size ) && $custom_image_size != '' ? $custom_image_size : '';
			$hard_crop = isset( $hard_croping ) && $hard_croping == '1' ? true : false;
		}
		
		$default_items = array( 
			'title'			=> esc_html__( 'Title', 'wiguard-core' ),
			'thumb'			=> esc_html__( 'Image', 'wiguard-core' ),
			'excerpt'		=> esc_html__( 'Excerpt', 'wiguard-core' ),
			'more'			=> esc_html__( 'Read More', 'wiguard-core' )
		);
		$elemetns = isset( $service_items ) && !empty( $service_items ) ? json_decode( $service_items, true ) : array( 'Enabled' => $default_items );
		
		// This is custom css options for main shortcode warpper
		$shortcode_css = '';
		$shortcode_rand_id = $rand_class = 'shortcode-rand-'. wiguard_shortcode_rand_id();
		
		//Spacing
		if( isset( $sc_spacing ) && !empty( $sc_spacing ) ){
			$sc_spacing = preg_replace( '!\s+!', ' ', $sc_spacing );
			$space_arr = explode( " ", $sc_spacing );
			$i = 1;
			
			if( !$list_layout ){
				$space_class_name = '.' . esc_attr( $rand_class ) . '.service-wrapper .service-inner >';
			}else{
				$space_class_name = '.' . esc_attr( $rand_class ) . '.service-wrapper .service-list-item .media-body >';
			}
			
			foreach( $space_arr as $space ){
				$shortcode_css .= $space != '-' ? $space_class_name .' *:nth-child('. esc_attr( $i ) .') { margin-bottom: '. esc_attr( $space ) .'; }' : '';
				$i++;
			}
		}
		
		$gal_atts = '';
		if( $slide_opt ){
			$gal_atts = array(
				'data-loop="'. ( isset( $slide_item_loop ) && $slide_item_loop == '1' ? 1 : 0 ) .'"',
				'data-margin="'. ( isset( $slide_margin ) && $slide_margin != '' ? absint( $slide_margin ) : 0 ) .'"',
				'data-center="'. ( isset( $slide_center ) && $slide_center == '1' ? 1 : 0 ) .'"',
				'data-nav="'. ( isset( $slide_nav ) && $slide_nav == '1' ? 1 : 0 ) .'"',
				'data-dots="'. ( isset( $slide_dots ) && $slide_dots == '1' ? 1 : 0 ) .'"',
				'data-autoplay="'. ( isset( $slide_item_autoplay ) && $slide_item_autoplay == '1' ? 1 : 0 ) .'"',
				'data-items="'. ( isset( $slide_item ) && $slide_item != '' ? absint( $slide_item ) : 1 ) .'"',
				'data-items-tab="'. ( isset( $slide_item_tab ) && $slide_item_tab != '' ? absint( $slide_item_tab ) : 1 ) .'"',
				'data-items-mob="'. ( isset( $slide_item_mobile ) && $slide_item_mobile != '' ? absint( $slide_item_mobile ) : 1 ) .'"',
				'data-duration="'. ( isset( $slide_duration ) && $slide_duration != '' ? absint( $slide_duration ) : 5000 ) .'"',
				'data-smartspeed="'. ( isset( $slide_smart_speed ) && $slide_smart_speed != '' ? absint( $slide_smart_speed ) : 250 ) .'"',
				'data-scrollby="'. ( isset( $slide_slideby ) && $slide_slideby != '' ? absint( $slide_slideby ) : 1 ) .'"',
				'data-autoheight="false"',
			);
			$data_atts = implode( " ", $gal_atts );
		}

		$args = array(
			'post_type' => 'wiguard-services',
			'posts_per_page' => absint( $post_per_page ),
			'ignore_sticky_posts' => 1
		);
		
		$query = new WP_Query( $args );
		if ( $query->have_posts() ) {
		
			$service_array = array(
				'thumb_size' => $thumb_size,
				'cus_thumb_size' => $cus_thumb_size,
				'hard_crop' => $hard_crop,
				'excerpt_length' => $excerpt_length,
				'more_text' => $more_text,
				'btn_class' => $btn_class,
				'post_heading' => $heading_tag
			);
		
			if( $shortcode_css ) $class_names .= ' ' . $shortcode_rand_id . ' wiguard-inline-css';
			
			echo '<div class="service-wrapper'. esc_attr( $class_names ) .'" data-css="'. htmlspecialchars( json_encode( $shortcode_css ), ENT_QUOTES, 'UTF-8' ) .'">';
			
				if( !$list_layout ){
					
					$row_stat = 0;
					//echo '<div class="row">';
				
					//Service Slide
					if( $slide_opt ) echo '<div class="owl-carousel" '. ( $data_atts ) .'>';	
					
					// Start the Loop
					while ( $query->have_posts() ) : $query->the_post();
						
						$post_id = get_the_ID();
						$service_array['post_id'] = $post_id;
						
						if( $row_stat == 0 && !$slide_opt ) echo '<div class="row">';
						
						if( $slide_opt ){
							echo '<div class="item">';	//Service Slide Item
						}else{
							$col_class = "col-lg-". absint( $cols );
							$col_class .= " " . ( $cols == 3 ? "col-md-6" : "col-md-". absint( $cols ) );
							echo '<div class="'. esc_attr( $col_class ) .'">';
						}
								echo '<div class="service-inner">';
	
								if( isset( $elemetns['Enabled'] ) ) :
									foreach( $elemetns['Enabled'] as $element => $value ){
										echo $this->wiguard_service_shortcode_elements( $element, $service_array );
									}
								endif;
								
								echo '</div><!-- .service-inner -->';
							
							
						if( $slide_opt ){
							echo '</div><!-- .item -->';
						}else{
							echo '</div><!-- .cols -->';
							$row_stat++;
							if( $row_stat == ( 12/ $cols ) && !$slide_opt ) :
								echo '</div><!-- .row -->';
								$row_stat = 0;
							endif;
						}
						
					endwhile;
					
					if( $row_stat != 0 && !$slide_opt ){
						echo '</div><!-- .row Unexpected row close -->'; // Unexpected row close
					}
					
					//Service Slide End
					if( $slide_opt ) echo '</div><!-- .owl-carousel -->';
					
					//echo '</div><!-- .row -->';
				
				}else{ // list layout
				
					$row_stat = 0;
					
					if( isset( $elemetns['Enabled']['thumb'] ) ) unset( $elemetns['Enabled']['thumb'] );
				
					//Service Slide
					if( $slide_opt ) echo '<div class="owl-carousel" '. ( $data_atts ) .'>';	
					
					// Start the Loop
					while ( $query->have_posts() ) : $query->the_post();
						
						$post_id = get_the_ID();
						$service_array['post_id'] = $post_id;
						
						if( $row_stat == 0 && !$slide_opt ) echo '<div class="row">';
						
						if( $slide_opt ){
							echo '<div class="item">';	//Service Slide Item
						}else{
							$col_class = "col-lg-". absint( $cols );
							$col_class .= " " . ( $cols == 3 ? "col-md-6" : "col-md-". absint( $cols ) );
							echo '<div class="'. esc_attr( $col_class ) .'">';
						}
						
							//Service Slide Item
							echo '<div class="media service-list-item">';		
	
								echo $this->wiguard_service_shortcode_elements( 'thumb', $service_array );
								
								echo '<div class="media-body">';
	
								if( isset( $elemetns['Enabled'] ) ) :
									foreach( $elemetns['Enabled'] as $element => $value ){
										echo $this->wiguard_service_shortcode_elements( $element, $service_array );
									}
								endif;
								
								echo '</div><!-- .media-body -->';
		
							echo '</div><!-- .service-list-item -->';	
							
						if( $slide_opt ){
							echo '</div><!-- .owl-carousel -->';
						}else{
							echo '</div><!-- .cols -->';
							$row_stat++;
							if( $row_stat == ( 12/ $cols ) && !$slide_opt ) :
								echo '</div><!-- .row -->';
								$row_stat = 0;
							endif;
						}
						
					endwhile;
					
					if( $row_stat != 0 && !$slide_opt ){
						echo '</div><!-- .row Unexpected row close -->'; // Unexpected row close
					}
					
					//Service Slide End
					if( $slide_opt ) echo '</div><!-- .owl-carousel -->';

				}
			echo '</div><!-- .service-wrapper -->';
			
		}// query exists
		
		// use reset postdata to restore orginal query
		wp_reset_postdata();

	}
	
	function wiguard_service_shortcode_elements( $element, $opts = array() ){
		$output = '';
		switch( $element ){
		
			case "title":
				$head = isset( $opts['post_heading'] ) ? $opts['post_heading'] : 'h3';
				$output .= '<' . esc_attr( $head ) . ' class="service-title">';
					$output .= '<a href="'. esc_url( get_the_permalink() ) .'">'. esc_html( get_the_title() ) .'</a>';
				$output .= '</' . esc_attr( $head ) . '><!-- .service-title -->';		
			break;
			
			case "thumb":
				if ( has_post_thumbnail() ) {
					
					// Custom Thumb Code
					$thumb_size = $thumb_cond = $opts['thumb_size'];
					$cus_thumb_size = $opts['cus_thumb_size'];
					$hard_crop = $opts['hard_crop'];
					$custom_opt = $img_prop = '';
					if( $thumb_cond == 'custom' ){
						if( strpos( $cus_thumb_size, ";" ) ){
							$custom_opt = $cus_thumb_size != '' ? explode( "x", str_replace( ";", "", $cus_thumb_size ) ) : array();
							$img_prop = wiguard_get_custom_size_image( $custom_opt, $hard_crop );
							$thumb_size = array( $img_prop[1], $img_prop[2] );
						}else{
							$thumb_size = 'large';
							$thumb_cond = '';
						}
						
					}// Custom Thumb Code End
				
					$output .= '<div class="service-thumb">';
						$output .= get_the_post_thumbnail( $opts['post_id'], $thumb_size, array( 'class' => 'img-fluid' ) );
					$output .= '</div><!-- .service-thumb -->';
				}
			break;
			
			case "excerpt":
				$output .= '<div class="service-excerpt">';
					add_filter( 'excerpt_more', 'wiguard_excerpt_more' );
					add_filter( 'excerpt_length', array( &$this, 'wiguard_excerpt_length' ) );
					ob_start();
					the_excerpt();
					$excerpt_cont = ob_get_clean();
					$output .= $excerpt_cont;
				$output .= '</div><!-- .service-excerpt -->';	
			break;
			
			case "more":
				$read_more_text = isset( $opts['more_text'] ) ? $opts['more_text'] : esc_html__( 'Read more', 'wiguard-core' );
				$btn_class = isset( $opts['btn_class'] ) ? $opts['btn_class'] : '';
				$output = '<div class="post-more"><a class="read-more btn'. esc_attr( $btn_class ) .'" href="'. esc_url( get_permalink( get_the_ID() ) ) . '">'. esc_html( $read_more_text ) .'</a></div>';
			break;
			
			case "icon":
				$icon_img_id = get_post_meta( get_the_ID(), 'wiguard_service_title_img', true );
				if( $icon_img_id ){
					$icon_img_url = wp_get_attachment_url( $icon_img_id );
					$output = '<div class="service-icon-img-wrap"><img src="'. esc_url( $icon_img_url ) .'" class="img-fluid service-icon-img" alt="'. esc_attr( get_the_title() ) .'" /></div>';
				}
			break;
			
		}
		return $output; 
	}
	
	function wiguard_excerpt_length( $length ) {
		return $this->excerpt_len;
	}

}