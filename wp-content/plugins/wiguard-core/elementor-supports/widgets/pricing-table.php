<?php
/**
 * Wiguard Elementor Addon Pricing Table
 *
 * @since 1.0.0
 */
class Elementor_Pricing_Table_Widget extends \Elementor\Widget_Base {
	
	/**
	 * Get widget name.
	 *
	 * Retrieve Pricing Table widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return "wiguardpricingtable";
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Pricing Table widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( "Pricing Table", "wiguard-core" );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Pricing Table widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return "ti-layout-column3";
	}


	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Pricing Table widget belongs to.
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
	 * Register Pricing Table widget controls.
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
				"description"	=> esc_html__( "General pricing table options.", "wiguard-core" ),
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
				"description"	=> esc_html__( "Enter pricing table here.", "wiguard-core" )
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
					'{{WRAPPER}} .pricing-table-wrapper' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"pricing_layout",
			[
				"label"			=> esc_html__( "Pricing Table Layout", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can choose the pricing table layout.", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"default"		=> "1",
				"options"		=> [
					"1"		=> esc_html__( "Layout 1", "wiguard-core" ),
					"2"		=> esc_html__( "Layout 2", "wiguard-core" ),
					"3"		=> esc_html__( "Layout 3", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"pricing_items",
			[
				"label"				=> "Pricing Table Items",
				"description"		=> esc_html__( "This is settings for pricing table custom layout. here you can set your own layout. Drag and drop needed pricing items to Enabled part.", "wiguard-core" ),
				"type"				=> "dragdrop",
				"ddvalues" 			=> [ 
					'Enabled' => array( 
						'title'		=> esc_html__( 'Title', 'wiguard-core' ),
						'price'		=> esc_html__( 'Price Info', 'wiguard-core' ),
						'features'	=> esc_html__( 'Features List', 'wiguard-core' ),
						'btn'		=> esc_html__( 'Button', 'wiguard-core' )			
					),
					'disabled' => array(
						'image'		=> esc_html__( 'Image', 'wiguard-core' ),
						'video'		=> esc_html__( 'Video', 'wiguard-core' ),
						'icon'		=> esc_html__( 'Icon', 'wiguard-core' ),
						'content'	=> esc_html__( 'Content', 'wiguard-core' )
					)
				]
			]
		);
		$this->add_control(
			"title_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Title Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you put the title color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .pricing-table-wrapper .pricing-table-head > .pricing-title' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"price_before",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Price Before Text", "wiguard-core" ),
				"description"	=> esc_html__( "This is before text field for price.", "wiguard-core" ),
				"default"		=> esc_html__( "Free member", "wiguard-core" )
			]
		);
		$this->add_control(
			"price",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Price", "wiguard-core" ),
				"description"	=> esc_html__( "This is field for price.", "wiguard-core" ),
				"default"		=> "$100"
			]
		);
		$this->add_control(
			"price_after",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Price After Text", "wiguard-core" ),
				"description"	=> esc_html__( "This is after text field for price.", "wiguard-core" ),
				"default"		=> esc_html__( "per year", "wiguard-core" )
			]
		);
		
		$repeater = new \Elementor\Repeater();
		
		$repeater->add_control(
			"title",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Pricing Feature", "wiguard-core" ),
				"description"	=> esc_html__( "Pricing Features Name", "wiguard-core" ),
				"default" 		=> esc_html__( "Feature", "wiguard-core" )
			]
		);	
		$repeater->add_control(
			"title_stat",
			[
				"label" 		=> esc_html__( "Active/Inactive", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for set title status active or inactive.", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "1"
			]
		);
		$this->add_control(
			"pricing_titles",
			[
				"label"			=> esc_html__( "Price Features List", "wiguard-core" ),
				"description"	=> esc_html__( "This is options for price features list.", "wiguard-core" ),
				"type"			=> \Elementor\Controls_Manager::REPEATER,
				"fields"		=> $repeater->get_controls(),
				"default"		=> [
					[
						"title" 		=> esc_html__( "Feature", "wiguard-core" ),
						"title_stat"	=> "1"
					]
				],
				"title_field"	=> "{{{ title }}}",
			]
		);
		$this->add_control(
			"pricing_image",
			[
				"label" 		=> esc_html__( "Pricing Image", "wiguard-core" ),
				"description"	=> esc_html__( "Choose pricing image.", "wiguard-core" ),
				"type" 			=> \Elementor\Controls_Manager::MEDIA,
				"dynamic" 		=> [
					"active" => true,
				]
			]
		);
		$this->add_control(
			"pricing_video",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Pricing Video", "wiguard-core" ),
				"description"	=> esc_html__( "Choose pricing video. This url maybe youtube or vimeo video. Example https://www.youtube.com/embed/qAHRvrrfGC4", "wiguard-core" ),
				"default"		=> ""
			]
		);
		$this->add_control(
			"pricing_content",
			[
				"type"			=> \Elementor\Controls_Manager::TEXTAREA,
				"label"			=> esc_html__( "Pricing Content", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for pricing content.", "wiguard-core" ),
				"default" 		=> ""
			]
		);
		$this->add_control(
			"btn_text",
			[
				"type"			=> \Elementor\Controls_Manager::TEXTAREA,
				"label"			=> esc_html__( "Button Text", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for pricing button text.", "wiguard-core" ),
				"default" 		=> esc_html__( "Plan", "wiguard-core" ),
			]
		);
		$this->add_control(
			"btn_url",
			[
				"type"			=> \Elementor\Controls_Manager::TEXTAREA,
				"label"			=> esc_html__( "Button URL", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for pricing button url.", "wiguard-core" ),
				"default" 		=> ""
			]
		);
		$this->add_control(
			"text_align",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Text Align", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for blog text align.", "wiguard-core" ),
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
		
		//Ribbon Section
		$this->start_controls_section(
			"ribbon_section",
			[
				"label"			=> esc_html__( "Ribbon", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Ribbon options available here.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"ribbon_opt",
			[
				"label" 		=> esc_html__( "Ribbon Option", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for pricing table ribbon. If you enable this option, then it's showing ribbon settings i.e color, text, etc.", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "0"
			]
		);
		$this->add_control(
			"ribbon_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Ribbon Background Color", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for ribbon background color.", "wiguard-core" ),
				"default" 		=> "",
				"condition" 	=> [
					"ribbon_opt" 	=> "1"
				],
				'selectors' => [
					'{{WRAPPER}} .pricing-table-wrapper .corner-ribbon' => 'background-color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"ribbon_text",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Ribbon Text", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for ribbon text field for price.", "wiguard-core" ),
				"default"		=> "",
				"condition" 	=> [
					"ribbon_opt" 	=> "1"
				]
			]
		);
		$this->add_control(
			"ribbon_position",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Choose Ribbon Position", "wiguard-core" ),
				"description"	=> esc_html__( "Choose ribbon position for change pricing table ribbon layout.", "wiguard-core" ),
				"default"		=> "top-left",
				"options"		=> [
					"top-left"		=> esc_html__( "Top Left", "wiguard-core" ),
					"top-right"		=> esc_html__( "Top Right", "wiguard-core" ),
					"bottom-left"	=> esc_html__( "Bottom Left", "wiguard-core" ),
					"bottom-right"	=> esc_html__( "Bottom Right", "wiguard-core" )
				],
				"condition" 	=> [
					"ribbon_opt" 	=> "1"
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
			"icon_variation",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Choose Icon", "wiguard-core" ),
				"description"	=> esc_html__( "Choose pricing table icon.", "wiguard-core" ),
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
					'{{WRAPPER}} .pricing-table-wrapper .pricing-icon' => 'color: {{VALUE}};'
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
		$class .= isset( $pricing_layout ) ? ' pricing-style-' . $pricing_layout : '';	
		$class .= isset( $text_align ) && $text_align != 'default' ? ' text-' . $text_align : '';
		$ribbon_opt = isset( $ribbon_opt ) && $ribbon_opt == '1' ? true : false;
		$icon_opt = isset( $icon_opt ) && $icon_opt != '' ? $icon_opt : '';
		$icon = isset( $$icon_opt ) && $$icon_opt != '' ? $$icon_opt : '';
		
		$icon_class = '';
		if( isset( $icon_variation ) ){
			if( $icon_variation != 'c' ){
				$icon_class .= ' ' . esc_attr( $icon_variation );
			}
		}
		
		$default_items = array( 
			'title'		=> esc_html__( 'Title', 'wiguard-core' ),
			'price'		=> esc_html__( 'Price Info', 'wiguard-core' ),
			'features'	=> esc_html__( 'Features List', 'wiguard-core' ),
			'btn'		=> esc_html__( 'Button', 'wiguard-core' )			
		);
		$elemetns = isset( $pricing_items ) && !empty( $pricing_items ) ? json_decode( $pricing_items, true ) : array( 'Enabled' => $default_items );
	
		if( isset( $elemetns['Enabled'] ) ) :
		
			echo '<div class="pricing-table-wrapper'. esc_attr( $class ) .'">';
				
				if( $ribbon_opt ) :
					$ribbon_class = isset( $ribbon_position ) ? ' ' . $ribbon_position : '';
					$ribbon_text = isset( $ribbon_text ) && $ribbon_text != '' ? $ribbon_text : '';
					echo '<div class="corner-ribbon'. esc_attr( $ribbon_class ) .'">'. esc_html( $ribbon_text ) .'</div>';
				endif;
				
				echo '<div class="pricing-inner-wrapper">';
				
					foreach( $elemetns['Enabled'] as $element => $value ){
						switch( $element ){
							
							case "title":
								if( isset( $title ) && $title != '' ) : 
									echo '<div class="pricing-table-head">';
										echo '<h3 class="pricing-title">' . esc_html( $title ) . '</h3>';
									echo '</div><!-- .pricing-table-head -->';
								endif;						
							break;
							
							case "icon":
								echo '<div class="pricing-icon'. esc_attr( $icon_class ) .'">';
									echo '<span class="'. esc_attr( $icon ) .'"></span>';
								echo '</div><!-- .pricing-icon -->';
							break;
							
							case "price":
								echo '<div class="pricing-table-info">';
									if( isset( $price_before ) && $price_before != '' ):
										echo '<div class="price-before">';
											echo '<p>' . esc_html( $price_before ) . '</p>';
										echo '</div><!-- .price-before -->';
									endif;
									
									if( isset( $price ) && $price != '' ):
										echo '<div class="price-text">';
											echo '<p>' . esc_html( $price ) . '</p>';
										echo '</div><!-- .price-text -->';
									endif;
									
									if( isset( $price_after ) && $price_after != '' ):
										echo '<div class="price-after">';
											echo '<p>' . esc_html( $price_after ) . '</p>';
										echo '</div><!-- .price-after -->';
									endif;
								echo '</div><!-- .pricing-table-info -->';
							break;
							
							case "features":
								$prc_fetrs =  isset( $pricing_titles ) ? $pricing_titles : ''; // $prc_fetrs is pricing features
								if( $prc_fetrs ):
									echo '<div class="pricing-table-body">';
										echo '<ul class="pricing-features-list list-group">';
										foreach( $prc_fetrs as $feature ) {
											$status = isset( $feature['title_stat'] ) && $feature['title_stat'] != '1' ? ' feature-inactive' : '';
											$p_title = isset( $feature['title'] ) ? $feature['title'] : '';
											echo '<li class="list-group-item'. esc_attr( $status ) .'">'. esc_html( $p_title ) . '</li>';
										}
										echo '</ul>';
									echo '</div><!-- .pricing-table-body -->';
								endif;
							break;
							
							case "image":
								if( isset( $pricing_image ) && !empty( $pricing_image ) ) :
									$img_attr = isset( $pricing_image['id'] ) ? wp_get_attachment_image_src( absint( $pricing_image['id'] ), 'full', true ) : '';
									$image_alt = get_post_meta( absint( $pricing_image ), '_wp_attachment_image_alt', true);
									if( $img_attr ) :
										echo '<div class="pricing-image">';
											echo '<img class="img-fluid m-auto d-block" src="'. esc_url( $img_attr[0] ) .'" width="'. esc_attr( $img_attr[1] ) .'" height="'. esc_attr( $img_attr[2] ) .'" alt="'. esc_attr( $image_alt ) .'" />';
										echo '</div><!-- .pricing-image -->';
									endif;
								endif;
							break;
							
							case "video":
								if( isset( $pricing_video ) && !empty( $pricing_video ) ) :
										echo '<div class="pricing-image">';
											echo do_shortcode( '[videoframe url="'. esc_url( $pricing_video ).'" width="100%" height="100%" params="byline=0&portrait=0&badge=0" /]' );
										echo '</div><!-- .pricing-image -->';
								endif;
							break;
							
							case "btn":
								if( isset( $btn_text ) && $btn_text != '' ) :
									$btn_url = isset( $btn_url ) && $btn_url != '' ? $btn_url : '#';
									echo '<div class="pricing-table-foot">';
										echo '<a href="'. esc_url( $btn_url ) .'" class="btn btn-default mt-2">'. esc_html( $btn_text ) .'</a>';
									echo '</div><!-- .pricing-table-foot -->';
								endif;
							break;
							
							case "content":
								if( isset( $pricing_content ) && $pricing_content != '' ):
									echo '<div class="pricing-content">';
										echo '<p>' . esc_textarea( $pricing_content ) . '</p>'; 
									echo '</div><!-- .pricing-content -->';
								endif;
							break;
	
						}
					} // foreach end
					
				echo '</div><!-- .pricing-inner-wrapper -->';
			
			echo '</div><!-- .pricing-table-wrapper -->';
			
		endif;

	}
		
}