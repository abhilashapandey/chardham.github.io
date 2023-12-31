<?php
/**
 * Wiguard Elementor Addon Modal Popup
 *
 * @since 1.0.0
 */
class Elementor_Modal_Popup_Widget extends \Elementor\Widget_Base {
	
	/**
	 * Get widget name.
	 *
	 * Retrieve Modal Popup widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return "wiguardmodalpopup";
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Modal Popup widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( "Modal Popup", "wiguard-core" );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Modal Popup widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return "ti-layers";
	}


	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Modal Popup widget belongs to.
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
		return [ 'magnific-popup', 'custom-front' ];
	}
	
	public function get_style_depends() {
		return [ 'magnific-popup' ];
	}
	
	/**
	 * Register Modal Popup widget controls.
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
					'{{WRAPPER}} .modal-popup-wrapper' => 'color: {{VALUE}};'
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
			"trigger_type",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Modal Popup Trigger Type", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for modal popup trigger type. If you choose button, then set button style with Button tab.", "wiguard-core" ),
				"default"		=> "btn",
				"options"		=> [
					"btn"	=> esc_html__( "Button", "wiguard-core" ),
					"link"		=> esc_html__( "Link", "wiguard-core" ),
					"image"	=> esc_html__( "Image", "wiguard-core" ),
					"icon"		=> esc_html__( "Icon Class", "wiguard-core" ),
					"load"		=> esc_html__( "On Page Load", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"link_text",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Link Text", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the modal popup trigger link text.", "wiguard-core" ),
				"condition" 	=> [
					"trigger_type" 	=> "link"
				]
			]
		);
		$this->add_control(
			"trigger_img",
			[
				"label" 		=> __( "Image", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the modal popup trigger image.", "wiguard-core" ),
				"type" 			=> \Elementor\Controls_Manager::MEDIA,
				"dynamic" 		=> [
					"active" 		=> true,
				],
				"condition" 	=> [
					"trigger_type" 	=> "image"
				]
			]
		);
		$this->add_control(
			"trigger_icon",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Icon Class Name", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the modal popup trigger custom icon class name. Example ti-control-play", "wiguard-core" ),
				"condition" 	=> [
					"trigger_type" 	=> "icon"
				]
			]
		);
		$this->add_control(
			"btn_text",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Button Text", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the modal popup trigger button text.", "wiguard-core" ),
				"condition" 	=> [
					"trigger_type" 	=> "btn"
				]
			]
		);
		$this->add_control(
			"btn_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Button Font Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the modal popup trigger button color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .modal-popup-wrapper .btn.modal-box-trigger' => 'color: {{VALUE}};'
				],
				"condition" 	=> [
					"trigger_type" 	=> "btn"
				]
			]
		);
		$this->add_control(
			"btn_hcolor",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Modal Popup Button Font Hover Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the modal popup trigger button hover color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .modal-popup-wrapper .btn.modal-box-trigger:hover' => 'color: {{VALUE}};'
				],
				"condition" 	=> [
					"trigger_type" 	=> "btn"
				]
			]
		);
		$this->add_control(
			"btn_bg",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Modal Popup Button Background Color", "wiguard-core" ),
				"description"	=> esc_html__( "This is color option for modal popup trigger button background color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .modal-popup-wrapper .btn.modal-box-trigger' => 'background-color: {{VALUE}};'
				],
				"condition" 	=> [
					"trigger_type" 	=> "btn"
				]
			]
		);
		$this->add_control(
			"btn_hbg",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Modal Popup Button Hover Background Color", "wiguard-core" ),
				"description"	=> esc_html__( "This is color option for modal popup trigger button background hover color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .modal-popup-wrapper .btn.modal-box-trigger:hover' => 'background-color: {{VALUE}};'
				],
				"condition" 	=> [
					"trigger_type" 	=> "btn"
				]
			]
		);
		$this->end_controls_section();
		
		//Modal Section
		$this->start_controls_section(
			"modal_section",
			[
				"label"			=> esc_html__( "Modal", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Modal box options available here.", "wiguard-core" ),
			]
		);
		$this->add_control(
			"title_head",
			[
				"label"			=> esc_html__( "Modal Box Title Heading Tag", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can choose the modal popup box title heading tag.", "wiguard-core" ),
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
			"modal_title",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label" 		=> esc_html__( "Modal Box Title", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the modal popup box title.", "wiguard-core" )
			]
		);
		$this->add_control(
			"modal_title_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Modal Box Title Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the modal popup box title color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .modal-popup-wrapper .modal-title' => 'color: {{VALUE}};'
				]
			]
		);
		$this->add_control(
			"modal_content",
			[
				"label"			=> esc_html__( "Modal Content", "plugin-domain" ),
				"type" 			=> \Elementor\Controls_Manager::WYSIWYG,
				"default" 		=> esc_html__( "You can place here modal popup content.", "plugin-domain" ),
				"placeholder" 	=> esc_html__( "Type modal content here.", "plugin-domain" ),
			]
		);
		$this->add_control(
			"popup_size",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Modal Popup Size", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for modal popup window size.", "wiguard-core" ),
				"default"		=> "md",
				"options"		=> [
					"md"		=> esc_html__( "Medium", "wiguard-core" ),
					"lg"		=> esc_html__( "Large", "wiguard-core" ),
					"sm"		=> esc_html__( "Small", "wiguard-core" )
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
		$class = isset( $extra_class ) && $extra_class != '' ? $extra_class : '';		
		$class .= isset( $text_align ) && $text_align != 'default' ? ' text-' . $text_align : '';	
		
		$popup_size = isset( $popup_size ) ? ' modal-' . $popup_size : '';
		$trigger_type = isset( $trigger_type ) ? $trigger_type : 'btn';
		$title_head = isset( $title_head ) ? $title_head : 'h3';
		$modal_content = isset( $modal_content ) ? $modal_content : '';
		$shortcode_rand_id = wiguard_shortcode_rand_id();
				
		$output = '';
		
		$class .= $trigger_type == 'load' ? ' page-load-modal' : '';
		
		echo '<div class="modal-popup-wrapper'. esc_attr( $class ) .'">';
		
			if( $trigger_type == 'btn' ){
				// Button trigger modal
				echo '<a class="btn btn-default modal-box-trigger" href="#wiguard-modal-'. esc_attr( $shortcode_rand_id ) .'">';
					echo isset( $btn_text ) && $btn_text != '' ? esc_attr( $btn_text ) : esc_html( 'Modal Box', 'wiguard-core' );
				echo '</a>';
			}elseif( $trigger_type == 'link' ){
				// Link trigger modal
				echo '<a class="modal-box-trigger" href="#wiguard-modal-'. esc_attr( $shortcode_rand_id ) .'">';
					echo isset( $link_text ) && $link_text != '' ? esc_attr( $link_text ) : esc_html( 'Modal Box', 'wiguard-core' );
				echo '</a>';
			}elseif( $trigger_type == 'image' ){
				if( isset( $trigger_img['id'] ) && $trigger_img['id'] != '' ):
					$img_attr = wp_get_attachment_image_src( absint( $trigger_img['id'] ), 'full', true );
					$image_alt = get_post_meta( absint( $trigger_img['id'] ), '_wp_attachment_image_alt', true);
					echo isset( $img_attr[0] ) ? '<a class="modal-box-trigger" href="#wiguard-modal-'. esc_attr( $shortcode_rand_id ) .'"><img class="img-fluid modal-box-trigger-img" src="'. esc_url( $img_attr[0] ) .'" width="'. esc_attr( $img_attr[1] ) .'" height="'. esc_attr( $img_attr[2] ) .'" alt="'. esc_attr( $image_alt ) .'" /></a>' : '';
				endif;
			}elseif( $trigger_type == 'icon' ){
				if( isset( $trigger_icon ) && $trigger_icon != '' ):
					echo '<a class="modal-box-trigger modal-trigger-icon" href="#wiguard-modal-'. esc_attr( $shortcode_rand_id ) .'"><span class="' . wp_kses_post( $trigger_icon ) . '"></span></a>';
				endif;
			}
			// Modal 
			echo '<div class="mfp-hide white-popup-block" id="wiguard-modal-'. esc_attr( $shortcode_rand_id ) .'" >';
				echo '<div class="modal-popup-size'. esc_attr( $popup_size ) .'" role="document">';
					echo '<div class="modal-popup-content">';
						echo '<div class="modal-popup-header">';
							if( isset( $modal_title ) && $modal_title != '' ) echo '<'. esc_attr( $title_head ) .' class="modal-popup-title">'. esc_html( $modal_title ) .'</'. esc_attr( $title_head ) .'>';
							echo '<span class="popup-modal-dismiss ti-close"></span>';
						echo '</div>';
						echo '<div class="modal-popup-body">';
							echo do_shortcode( $modal_content );
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		echo '</div><!-- .modal-popup-wrapper -->';
		

	}
		
}