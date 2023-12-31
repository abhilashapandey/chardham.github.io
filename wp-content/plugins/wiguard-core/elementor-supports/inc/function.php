<?php 


if( ! function_exists('wiguard_star_rating') ) {
	function wiguard_star_rating( $rate ){
		$out = '';
		for( $i=1; $i<=5; $i++ ){
			
			if( $i == round($rate) ){
				if ( $i-0.5 == $rate ) {
					$out .= '<i class="ti-star ti-half-star"></i>';
				}else{
					$out .= '<i class="ti-star"></i>';
				}
			}else{
				if( $i < $rate ){
					$out .= '<i class="ti-star"></i>';
				}else{
					$out .= '<i class="ti-star"></i>';
				}
			}
		}// for end
		
		return $out;
	}
}

// Register CPT
function wiguard_enqueue_custom_admin_style() {
	wp_register_style( 'wiguard_wp_admin_css', WIGUARD_CORE_URL . 'elementor-supports/assets/css/admin-style.css', false, '1.0.0' );
	wp_enqueue_style( 'wiguard_wp_admin_css' );

	wp_register_script( 'jquery-ui', WIGUARD_CORE_URL . 'elementor-supports/assets/js/jquery-ui.min.js',  array( 'jquery' ), '1.11.4', true );
	wp_register_script( 'wiguard_wp_admin_script', WIGUARD_CORE_URL . 'elementor-supports/assets/js/admin-script.js', array( 'jquery', 'jquery-ui' ), '1.0', true );
	
	$translation_array = array(
		'confirm_str' => esc_html__( 'Are you sure wanto to save?', 'wiguard-core' )
	);
	wp_localize_script( 'wiguard_wp_admin_script', 'wiguard_ajax_var', $translation_array );
	
	wp_enqueue_script( 'wiguard_wp_admin_script' );
		
	
}
add_action( 'admin_enqueue_scripts', 'wiguard_enqueue_custom_admin_style' );

/*Custom Shortcodes*/
require_once( WIGUARD_CORE_DIR . 'elementor-supports/inc/shortcodes.php' );

/*Custom Image Size Cropping*/
function wiguard_get_custom_size_image( $custom_size = array(), $hard_crop = false, $img_id = '' ){
	
	$img_sizes = $img_width = $img_height = $src = $img_src = $custom_img_size = '';
	$img_stat = 0;

	$img_id = $img_id != '' ? $img_id : get_post_thumbnail_id( get_the_ID() );

	if( class_exists('Aq_Resize') ) {
		$src = wp_get_attachment_image_src( $img_id, "full", false, '' );
		$img_width = $img_height = '';
		if( !empty( $custom_size ) ){
			$img_width = isset( $custom_size[0] ) ? $custom_size[0] : '';
			$img_height = isset( $custom_size[1] ) ? $custom_size[1] : '';
			
			$cropped_img = aq_resize( $src[0], $img_width, $img_height, $hard_crop, false );
			if( $cropped_img ){
				$img_src = isset( $cropped_img[0] ) ? $cropped_img[0] : '';
				$img_width = isset( $cropped_img[1] ) ? $cropped_img[1] : '';
				$img_height = isset( $cropped_img[2] ) ? $cropped_img[2] : '';
			}else{
				$img_stat = 1;
			}
		}else{
			$img_stat = 1;
		}
		
	}
	if( $img_stat ){
		
		$src = wp_get_attachment_image_src( $img_id, 'large', false, '' );
		$img_src = $src[0];
		$img_width = isset( $src[1] ) ? $src[1] : '';
		$img_height = isset( $src[2] ) ? $src[2] : '';
	}
	
	return array( $img_src, $img_width, $img_height );
}

function wiguard_menuFaIcons(){
	$pattern = '/\.(fa-(?:\w+(?:-)?)+):before\s+{\s*content:\s*"(.+)";\s+}/';
	$fontawesome_path = WIGUARD_CORE_URL . 'elementor-supports/assets/css/font-awesome.css';  
		
	$response = wp_remote_get( $fontawesome_path );
	if( is_array($response) ) {
		$file = $response['body']; // use the content
	}
	preg_match_all($pattern, $file, $str, PREG_SET_ORDER);
	return $str;
}

function wiguard_menuTiIcons(){
	$pattern = '/\.(ti-(?:\w+(?:-)?)+):before\s+{\s*content:\s*"(.+)";\s+}/';
	$fontawesome_path = WIGUARD_CORE_URL . 'elementor-supports/assets/css/themify-icons.css';  
		
	$response = wp_remote_get( $fontawesome_path );
	if( is_array($response) ) {
		$file = $response['body']; // use the content
	}
	preg_match_all($pattern, $file, $str, PREG_SET_ORDER);
	return $str;
}

//Section Rain Drops Code
add_action('elementor/element/section/section_typo/after_section_end', function( $section, $args ) {

	$section->start_controls_section(
		'section_rain_drops',
		[
			'label' => __( 'Rain Drops Settings', 'wiguard-core' ),
			'tab' => \Elementor\Controls_Manager::TAB_STYLE,
		]
	);
	$section->add_control(
		"rd_opt",
		[
			"label" 		=> esc_html__( "Enable/Disable Rain Drops", "wiguard-core" ),
			"type" 			=> "toggleswitch",
			"default" 		=> "0"
		]
	);
	$section->add_control(
		'rd_color',
		[
			'label' => __( 'Canvas Color', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			"description"	=> esc_html__( "Here you can define rain drop canvas color. Example #333333", "wiguard-core" ),
			'placeholder' => "#333333",
			"default" 		=> "#333333"
		]
	);		
	$section->add_control(
		'rd_height',
		[
			'label' => __( 'Canvas Height', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			"description"	=> esc_html__( "Here you can define rain drop canvas height. Example 100", "wiguard-core" ),
			'placeholder' => __( '100', 'wiguard-core' ),
			"default" 		=> "100"
		]
	);		
	$section->add_control(
		'rd_speed',
		[
			'label' => __( 'Rain Drop Speed', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			"description"	=> esc_html__( "Here you can define rain drop speed. Example 0.01", "wiguard-core" ),
			'placeholder' => "0.01",
			"default" 		=> "0.01"
		]
	);
	$section->add_control(
		'rd_frequency',
		[
			'label' => __( 'Rain Drop Frequency', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			"description"	=> esc_html__( "Here you can define rain drop frequency. Example 1", "wiguard-core" ),
			'placeholder' => "1",
			"default" 		=> "1"
		]
	);
	$section->add_control(
		'rd_density',
		[
			'label' => __( 'Rain Drop Density', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			"description"	=> esc_html__( "Here you can define rain drop density. Example 0", "wiguard-core" ),
			'placeholder' => "0",
			"default" 		=> "0"
		]
	);
	$section->add_control(
		'rd_pos',
		[
			'label' => __( 'Rain Drop Canvas Position', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => 'top',
			'options' => [
				'top' 		=> __( 'Top', 'wiguard-core' ),
				'bottom' 	=> __( 'Bottom', 'wiguard-core' )
			]
		]
	);	
	
	$section->end_controls_section();
	
	$section->start_controls_section(
		'section_float_img',
		[
			'label' => __( 'Float Image Settings', 'wiguard-core' ),
			'tab' => \Elementor\Controls_Manager::TAB_STYLE,
		]
	);
	$section->add_control(
		"float_img_opt",
		[
			"label" 		=> esc_html__( "Enable/Disable Float Image Option", "wiguard-core" ),
			"type" 			=> "toggleswitch",
			"default" 		=> "0"
		]
	);
	$repeater = new \Elementor\Repeater();
	
	$repeater->add_control(
		"float_title",
		[
			"type"			=> \Elementor\Controls_Manager::TEXT,
			"label" 		=> esc_html__( "Float Image Title", "wiguard-core" ),
			"description"	=> esc_html__( "Float image title.", "wiguard-core" ),
			"default"		=> "50"
		]
	);
	$repeater->add_control(
		"float_img",
		[
			"type" => \Elementor\Controls_Manager::MEDIA,
			"label" => __( "Floating Image", "wiguard-core" ),
			"description"	=> esc_html__( "Choose float image.", "wiguard-core" ),
			"dynamic" => [
				"active" => true,
			]
		]
	);
	$repeater->add_control(
		"float_width",
		[
			"type"			=> \Elementor\Controls_Manager::TEXT,
			"label" 		=> esc_html__( "Float Width", "wiguard-core" ),
			"description"	=> esc_html__( "Mention here float image width. Example 30", "wiguard-core" ),
			"default"		=> "30"
		]
	);
	$repeater->add_control(
		"float_left",
		[
			"type"			=> \Elementor\Controls_Manager::TEXT,
			"label" 		=> esc_html__( "Left Position", "wiguard-core" ),
			"description"	=> esc_html__( "Float image left position. Example 80", "wiguard-core" ),
			"default"		=> "50"
		]
	);
	$repeater->add_control(
		"float_top",
		[
			"type"			=> \Elementor\Controls_Manager::TEXT,
			"label" 		=> esc_html__( "Top Position", "wiguard-core" ),
			"description"	=> esc_html__( "Float image top position. Example 300", "wiguard-core" ),
			"default"		=> "300"
		]
	);
	$repeater->add_control(
		"float_distance",
		[
			"type"			=> \Elementor\Controls_Manager::TEXT,
			"label" 		=> esc_html__( "Float Distance", "wiguard-core" ),
			"description"	=> esc_html__( "Float image float distance. This option only use for when you active mousemove animation Example 100", "wiguard-core" ),
			"default"		=> "100"
		]
	);
	$repeater->add_control(
		'float_animation',
		[
			'label' => __( 'Float Animation', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => '0',
			'options' => [
				'0'		=> __( 'None', 'wiguard-core' ),
				'1' 	=> __( 'Bounce', 'wiguard-core' ),
				'2' 	=> __( 'Slow Rotate', 'wiguard-core' ),
				'3' 	=> __( 'Speed Rotate', 'wiguard-core' )
			]
		]
	);	
	$repeater->add_control(
		"float_mouse",
		[
			"label" 		=> esc_html__( "Enable/Disable Float Mouse Animation", "wiguard-core" ),
			"type" 			=> "toggleswitch",
			"default" 		=> "0"
		]
	);
	
	$section->add_control(
		"float_details",
		[
			"type"			=> \Elementor\Controls_Manager::REPEATER,
			"label"			=> esc_html__( "Floating Details", "wiguard-core" ),
			"fields"		=> $repeater->get_controls(),
			"default" 		=> [
				[
					"float_title" 		=> esc_html__( "Floating Image", "wiguard-core" ),
					"float_img" 		=> "",
					"float_width"		=> "30",
					"float_left" 		=> "50",
					"float_top" 		=> "300",
					"float_animation" 	=> "0",
					"float_distance" 	=> "100"
				]
			],
			"title_field"	=> "{{{ float_title }}}"
		]
	);
	$section->end_controls_section();
	
}, 10, 2 );

//Section Parallox Code
add_action('elementor/element/section/section_background/before_section_end', function( $section, $args ) {

	$section->add_control(
		"parallax_opt",
		[
			"label" 		=> esc_html__( "Enable/Disable Parallax", "wiguard-core" ),
			"type" 			=> "toggleswitch",
			"default" 		=> "0"
		]
	);
	$section->add_control(
		'parallax_ratio',
		[
			'label' => __( 'Parallax Speed', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			"description"	=> esc_html__( "Here you can define parallax factor ratio. Example 2", "wiguard-core" ),
			'placeholder' => "2",
			"default" 		=> "2",
			"condition" 	=> [
				"parallax_opt" 		=> "1"
			]
		]
	);	

}, 10, 2 );

add_action( 'elementor/frontend/section/before_render', 'wiguard_section_custom_options', 10, 1 );
function wiguard_section_custom_options( \Elementor\Element_Base $element ) {
	
	// Make sure we are in a section element
	if( 'section' !== $element->get_name() ) {
		return;
	}
	
	$rd_opt = $element->get_settings( 'rd_opt' );
	$paroller_opt = $element->get_settings( 'parallax_opt' );
	$float_img_opt = $element->get_settings( 'float_img_opt' );
	
	if( $float_img_opt == '1' ){
		
		wp_enqueue_script('wiguard-float-parallax');
		
		$float_details = $element->get_settings( 'float_details' );
		$float_details = isset( $float_details ) ? $float_details : '';
		
		if( $float_details  ){
			
			$floats_array = array();
			$i = 0;
			
			foreach( $float_details as $float_detail ){
			
				$float_title = isset( $float_detail['float_title'] ) && $float_detail['float_title'] != '' ? $float_detail['float_title'] : '';
				$float_img = isset( $float_detail['float_img'] ) && $float_detail['float_img']['url'] != '' ? $float_detail['float_img']['url'] : '';
				$float_left = isset( $float_detail['float_left'] ) && $float_detail['float_left'] != '' ? $float_detail['float_left'] : '';
				$float_top = isset( $float_detail['float_top'] ) && $float_detail['float_top'] != '' ? $float_detail['float_top'] : '';
				$float_distance = isset( $float_detail['float_distance'] ) && $float_detail['float_distance'] != '' ? $float_detail['float_distance'] : '';
				$float_animation = isset( $float_detail['float_animation'] ) && $float_detail['float_animation'] != '' ? $float_detail['float_animation'] : '';
				$float_mouse = isset( $float_detail['float_mouse'] ) && $float_detail['float_mouse'] != '0' ? '1' : '0';
				$float_width = isset( $float_detail['float_width'] ) && $float_detail['float_width'] != '' ? $float_detail['float_width'] . 'px' : '20px';
				
				$float_array = array(
					'float_title' => $float_title,
					'float_img' => $float_img,
					'float_left' => $float_left,
					'float_top' => $float_top,
					'float_distance' => $float_distance,
					'float_animation' => $float_animation,
					'float_mouse' => $float_mouse,
					'float_width' => $float_width
				);
				if( $float_img ){
					$floats_array[$i++] = $float_array;
				}
				
			}
			$element->add_render_attribute( '_wrapper', 'data-wiguard-float', htmlspecialchars( json_encode( $floats_array ), ENT_QUOTES, 'UTF-8' ) );
		}

	}
	
	if( $rd_opt == '1' ){
	
		wp_enqueue_script('jquery-ui');
		wp_enqueue_script('jquery-ease');
		wp_enqueue_script('raindrops');
		wp_enqueue_script('custom-front');
	
		$id = 'shortcode-rand-' . wiguard_shortcode_rand_id();
		$rd_color = $element->get_settings( 'rd_color' );
		$rd_height = $element->get_settings( 'rd_height' );
		$rd_speed = $element->get_settings( 'rd_speed' );
		$rd_freq = $element->get_settings( 'rd_frequency' );
		$rd_density = $element->get_settings( 'rd_density' );
		$rd_pos = $element->get_settings( 'rd_pos' );
		
		$rd_array = array(
			'id' => $id,
			'rd_color' => $rd_color,
			'rd_height' => $rd_height,
			'rd_speed' => $rd_speed,
			'rd_freq' => $rd_freq,
			'rd_density' => $rd_density,
			'rd_pos' => $rd_pos	
		);
		
		$element->add_render_attribute( '_wrapper', 'data-wiguard-raindrops', htmlspecialchars( json_encode( $rd_array ), ENT_QUOTES, 'UTF-8' ) );
	}

	if( $paroller_opt == '1' ){
		
		wp_enqueue_script('custom-front');
			
		$parallax_ratio = $element->get_settings( 'parallax_ratio' );
		$parallax_image = $element->get_settings( 'background_image' ); // parallax_image
		$img_url = is_array( $parallax_image ) && isset( $parallax_image['url'] ) ? $parallax_image['url'] : '';
		
		$parallax_array = array(
			'parallax_ratio' => $parallax_ratio,
			'parallax_image' => $img_url
		);

		$element->add_render_attribute( '_wrapper', 'data-wiguard-parallax-data', htmlspecialchars( json_encode( $parallax_array ), ENT_QUOTES, 'UTF-8' ) );
	}
	
};

add_action( 'elementor/frontend/column/before_render', 'wiguard_column_custom_options', 10, 1 );
function wiguard_column_custom_options( \Elementor\Element_Base $element ) {

	// Make sure we are in a section element
	if( 'column' != $element->get_name() ) {
		return;
	}
	
	$content_slider_opt = $element->get_settings( 'content_slider_opt' );
	
	if( $content_slider_opt == '1' ){

		wp_enqueue_style( 'owl-carousel' );
		wp_enqueue_script('owl-carousel');
		wp_enqueue_script('custom-front');
			
		$slide_items = $element->get_settings( 'slide_items' );
		$slide_tab_items = $element->get_settings( 'slide_tab_items' );
		$slide_mobile_items = $element->get_settings( 'slide_mobile_items' );
		$slide_scrollby = $element->get_settings( 'slide_scrollby' );
		$slide_autoplay = $element->get_settings( 'slide_autoplay' );
		$slide_center = $element->get_settings( 'slide_center' );
		$slide_duration = $element->get_settings( 'slide_duration' );
		$slide_smart_speed = $element->get_settings( 'slide_smart_speed' );
		$slide_loop = $element->get_settings( 'slide_loop' );
		$slide_margin = $element->get_settings( 'slide_margin' );
		$slide_pagination = $element->get_settings( 'slide_pagination' );
		$slide_navigation = $element->get_settings( 'slide_navigation' );
		$slide_auto_height = $element->get_settings( 'slide_auto_height' );
		
		$slide_array = array(
			'items' 		=> $slide_items,
			'tab_items' 	=> $slide_tab_items,
			'mobile_items' 	=> $slide_mobile_items,
			'scrollby'		=> $slide_scrollby,
			'autoplay' 		=> $slide_autoplay,
			'center' 		=> $slide_center,
			'duration' 		=> $slide_duration,
			'smart_speed' 	=> $slide_smart_speed,
			'loop' 			=> $slide_loop,
			'margin' 		=> $slide_margin,
			'pagination' 	=> $slide_pagination,
			'navigation' 	=> $slide_navigation,
			'auto_height' 	=> $slide_auto_height
		);

		$element->add_render_attribute( '_wrapper', 'data-wiguard-slide', htmlspecialchars( json_encode( $slide_array ), ENT_QUOTES, 'UTF-8' ) );
	}
}

//Column Content Slider Code
add_action('elementor/element/column/section_typo/after_section_end', function( $column, $args ) {

	$column->start_controls_section(
		'section_content_slider',
		[
			'label' => __( 'Content Slider Settings', 'wiguard-core' ),
			'tab' => \Elementor\Controls_Manager::TAB_STYLE,
		]
	);

	$column->add_control(
		"content_slider_opt",
		[
			"label" 		=> esc_html__( "Enable/Disable Content Slider", "wiguard-core" ),
			"type" 			=> "toggleswitch",
			"default" 		=> "0"
		]
	);
	$column->add_control(
		'slide_items',
		[
			'label' => __( 'Slide Items', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			"description"	=> esc_html__( "Here you can set content slide items. Example 3", "wiguard-core" ),
			"default" 		=> "2",
			"condition" 	=> [
				"content_slider_opt" 		=> "1"
			]
		]
	);
	$column->add_control(
		'slide_tab_items',
		[
			'label' => __( 'Items for Tablet', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			"description"	=> esc_html__( "Here you can set content slide items for tablet. Example 3", "wiguard-core" ),
			"default" 		=> "1",
			"condition" 	=> [
				"content_slider_opt" 		=> "1"
			]
		]
	);
	$column->add_control(
		'slide_mobile_items',
		[
			'label' => __( 'Items for Mobile', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			"description"	=> esc_html__( "Here you can set content slide items for mobile. Example 3", "wiguard-core" ),
			"default" 		=> "1",
			"condition" 	=> [
				"content_slider_opt" 		=> "1"
			]
		]
	);
	$column->add_control(
		'slide_scrollby',
		[
			'label' => __( 'Items Scrollby', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			"description"	=> esc_html__( "Here you can set content slide items scrollby. Example 1", "wiguard-core" ),
			"default" 		=> "1",
			"condition" 	=> [
				"content_slider_opt" 		=> "1"
			]
		]
	);
	$column->add_control(
		'slide_autoplay',
		[
			'label' => __( 'Slide Auto Play', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			"description"	=> esc_html__( "Here you can choose content slide autoplay settings.", "wiguard-core" ),
			'default' => '0',
			'options' => [
				'0' 	=> __( 'Off', 'wiguard-core' ),
				'1' 	=> __( 'On', 'wiguard-core' )
			],
			"condition" 	=> [
				"content_slider_opt" 		=> "1"
			]
		]
	);
	$column->add_control(
		'slide_center',
		[
			'label' => __( 'Slide Center', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			"description"	=> esc_html__( "Here you can enable/disable slide center.", "wiguard-core" ),
			'default' => '0',
			'options' => [
				'0' 	=> __( 'Off', 'wiguard-core' ),
				'1' 	=> __( 'On', 'wiguard-core' )
			],
			"condition" 	=> [
				"content_slider_opt" 		=> "1"
			]
		]
	);
	$column->add_control(
		'slide_duration',
		[
			'label' => __( 'Slide Duration', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			"description"	=> esc_html__( "Here you can set slide duration for each (in Milli Seconds). Example 5000", "wiguard-core" ),
			"default" 		=> "5000",
			"condition" 	=> [
				"content_slider_opt" 		=> "1"
			]
		]
	);
	$column->add_control(
		'slide_smart_speed',
		[
			'label' => __( 'Slide Smart Speed', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			"description"	=> esc_html__( "Here you can set slide smart speed for each (in Milli Seconds). Example 250", "wiguard-core" ),
			"default" 		=> "250",
			"condition" 	=> [
				"content_slider_opt" 		=> "1"
			]
		]
	);
	$column->add_control(
		'slide_loop',
		[
			'label' => __( 'Infinite Loop', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			"description"	=> esc_html__( "Here you can enable/disable infinite loop.", "wiguard-core" ),
			'default' => '0',
			'options' => [
				'0' 	=> __( 'Off', 'wiguard-core' ),
				'1' 	=> __( 'On', 'wiguard-core' )
			],
			"condition" 	=> [
				"content_slider_opt" 		=> "1"
			]
		]
	);
	$column->add_control(
		'slide_margin',
		[
			'label' => __( 'Slide Items Margin', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			"description"	=> esc_html__( "Here you can set slide item margin( item spacing ). Example 10", "wiguard-core" ),
			"default" 		=> "10",
			"condition" 	=> [
				"content_slider_opt" 		=> "1"
			]
		]
	);
	$column->add_control(
		'slide_pagination',
		[
			'label' => __( 'Slide Pagination', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			"description"	=> esc_html__( "Here you can enable/disable slide pagination.", "wiguard-core" ),
			'default' => '0',
			'options' => [
				'0' 	=> __( 'Off', 'wiguard-core' ),
				'1' 	=> __( 'On', 'wiguard-core' )
			],
			"condition" 	=> [
				"content_slider_opt" 		=> "1"
			]
		]
	);
	$column->add_control(
		'slide_navigation',
		[
			'label' => __( 'Slide Navigation', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			"description"	=> esc_html__( "Here you can enable/disable slide navigation.", "wiguard-core" ),
			'default' => '0',
			'options' => [
				'0' 	=> __( 'Off', 'wiguard-core' ),
				'1' 	=> __( 'On', 'wiguard-core' )
			],
			"condition" 	=> [
				"content_slider_opt" 		=> "1"
			]
		]
	);
	$column->add_control(
		'slide_auto_height',
		[
			'label' => __( 'Slide Auto Height', 'wiguard-core' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			"description"	=> esc_html__( "Here you can enable/disable slide auto height.", "wiguard-core" ),
			'default' => '0',
			'options' => [
				'0' 	=> __( 'Off', 'wiguard-core' ),
				'1' 	=> __( 'On', 'wiguard-core' )
			],
			"condition" 	=> [
				"content_slider_opt" 		=> "1"
			]
		]
	);
	
	$column->end_controls_section();

}, 10, 2 );