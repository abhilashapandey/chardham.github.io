<?php
/**
 * Wiguard Elementor Addon Recent/Popular Post Widget
 *
 * @since 1.0.0
 */
class Elementor_Recent_Popular_Widget extends \Elementor\Widget_Base {
	
	private $excerpt_len;
	
	/**
	 * Get widget name.
	 *
	 * Retrieve Recent/Popular Post widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return "wiguardrecentpopular";
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Recent/Popular Post widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( "Recent/Popular Post", "wiguard-core" );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Recent/Popular Post widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return "ti-panel";
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
		return [ 'custom-front'  ];
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
			"post_per_page",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Post Per Page", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can define post limits per page. Example 2", "wiguard-core" ),
				"default" 		=> "2",
				"placeholder"	=> "2"
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
			"include_cats",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Include Categories", "wiguard-core" ),
				"description"	=> esc_html__( "This is filter categories. If you don't want portfolio filter, then leave this empty. Example slug: travel, web", "wiguard-core" ),
				"default" 		=> ""
			]
		);
		$this->add_control(
			"exclude_cats",
			[
				"type"			=> \Elementor\Controls_Manager::TEXT,
				"label"			=> esc_html__( "Exclude Categories", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can mention unwanted categories. Example slug: travel, web", "wiguard-core" ),
				"default" 		=> ""
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
		$this->end_controls_section();
		
		//Layouts Section
		$this->start_controls_section(
			"layouts_section",
			[
				"label"			=> esc_html__( "Layouts", "wiguard-core" ),
				"tab"			=> \Elementor\Controls_Manager::TAB_CONTENT,
				"description"	=> esc_html__( "Recent/Popular Post layout options here available.", "wiguard-core" ),
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
					'{{WRAPPER}} .blog-wrapper' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			"link_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Link Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the link color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .blog-wrapper a' => 'color: {{VALUE}};',
					'{{WRAPPER}} .blog-wrapper .post-title-head > a' => 'color: {{VALUE}};'
				],
			]
		);
		$this->add_control(
			"hover_color",
			[
				"type"			=> \Elementor\Controls_Manager::COLOR,
				"label"			=> esc_html__( "Link Hover Color", "wiguard-core" ),
				"description"	=> esc_html__( "Here you can put the link hover color.", "wiguard-core" ),
				"default" 		=> "",
				'selectors' => [
					'{{WRAPPER}} .blog-wrapper a:hover' => 'color: {{VALUE}};',
					'{{WRAPPER}} .blog-wrapper .post-title-head > a:hover' => 'color: {{VALUE}};'
				],
			]
		);
		$this->add_control(
			"post_heading",
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
			"blog_layout",
			[
				"label"			=> esc_html__( "Recent/Popular Post Layout", "wiguard-core" ),
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
			"blog_pagination",
			[
				"label" 		=> esc_html__( "Recent/Popular Post Pagination", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "0",
				"condition" 	=> [
					"blog_masonry" 		=> "0"
				]
			]
		);
		$this->add_control(
			"variation",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Recent/Popular Post Variation", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for blog variatoin either dark or light.", "wiguard-core" ),
				"default"		=> "light",
				"options"		=> [
					"light"			=> esc_html__( "Light", "wiguard-core" ),
					"dark"			=> esc_html__( "Dark", "wiguard-core" )
				]
			]
		);
		$this->add_control(
			"blog_cols",
			[
				"type"			=> \Elementor\Controls_Manager::SELECT,
				"label"			=> esc_html__( "Recent/Popular Post Columns", "wiguard-core" ),
				"description"	=> esc_html__( "This is option for blog columns.", "wiguard-core" ),
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
			"post_items",
			[
				"label"				=> "Post Items",
				"description"		=> esc_html__( "This is settings for blog custom layout. here you can set your own layout. Drag and drop needed blog items to Enabled part.", "wiguard-core" ),
				"type"				=> "dragdrop",
				"ddvalues" 			=> [ 
					"Enabled" 		=> [ 
						"thumb"			=> esc_html__( "Feature Image", "wiguard-core" ),
						"title"			=> esc_html__( "Title", "wiguard-core" ),
						"excerpt"		=> esc_html__( "Excerpt", "wiguard-core" )
					],
					"disabled"		=> [
						"top-meta"		=> esc_html__( "Top Meta", "wiguard-core" ),
						"bottom-meta"	=> esc_html__( "Bottom Meta", "wiguard-core" ),
						"category"		=> esc_html__( "Category", "wiguard-core" ),
						"author"		=> esc_html__( "Author", "wiguard-core" )
					]
				]
			]
		);
		$this->add_control(
			"post_overlay_items_opt",
			[
				"label" 		=> esc_html__( "Post Overlay Items Options", "wiguard-core" ),
				"type" 			=> "toggleswitch",
				"default" 		=> "0"
			]
		);
		$this->add_control(
			"post_overlay_items",
			[
				"label"			=> "Post Overlay Items",
				"description"	=> esc_html__( "This is settings for blog shortcode post overlay items.", "wiguard-core" ),
				"type"			=> "dragdrop",
				"ddvalues"		=> [ 
					esc_html__( "Enabled", "wiguard-core" ) => [],
					esc_html__( "disabled", "wiguard-core" ) => [
						'category'	=> esc_html__( 'Category', 'wiguard-core' ),
						'author'	=> esc_html__( 'Author', 'wiguard-core' ),
						'more'	=> esc_html__( 'Read More', 'wiguard-core' ),
						'date'	=> esc_html__( 'Date', 'wiguard-core' ),
						'comment'	=> esc_html__( 'Comment', 'wiguard-core' ),
						'title'	=> esc_html__( 'Title', 'wiguard-core' ),
						"top-meta"		=> esc_html__( "Top Meta", "wiguard-core" ),
						"bottom-meta"	=> esc_html__( "Bottom Meta", "wiguard-core" )
					]
				],
				"condition" 	=> [
					"post_overlay_items_opt" 		=> "1"
				]
			]
		);
		$this->add_control(
			"top_meta",
			[
				"label"			=> "Post Top Meta",
				"description"	=> esc_html__( "This is settings for blog shortcode post top meta.", "wiguard-core" ),
				"type"			=> "dragdrop",
				"ddvalues"		=> [ 
					esc_html__( "Left", "wiguard-core" ) => [],
					esc_html__( "Right", "wiguard-core" ) => [],
					esc_html__( "disabled", "wiguard-core" ) => [
						'category'	=> esc_html__( 'Category', 'wiguard-core' ),
						'author'	=> esc_html__( 'Author', 'wiguard-core' ),
						'more'	=> esc_html__( 'Read More', 'wiguard-core' ),
						'date'	=> esc_html__( 'Date', 'wiguard-core' ),
						'comment'	=> esc_html__( 'Comment', 'wiguard-core' )
					]
				]
			]
		);
		$this->add_control(
			"bottom_meta",
			[
				"label"			=> "Post Bottom Meta",
				"description"	=> esc_html__( "This is settings for blog shortcode post bottom meta.", "wiguard-core" ),
				"type"			=> "dragdrop",
				"ddvalues"		=> [ 
					esc_html__( "Left", "wiguard-core" ) => [],
					esc_html__( "Right", "wiguard-core" ) => [],
					esc_html__( "disabled", "wiguard-core" ) => [
						'category'	=> esc_html__( 'Category', 'wiguard-core' ),
						'author'	=> esc_html__( 'Author', 'wiguard-core' ),
						'more'	=> esc_html__( 'Read More', 'wiguard-core' ),
						'date'	=> esc_html__( 'Date', 'wiguard-core' ),
						'comment'	=> esc_html__( 'Comment', 'wiguard-core' )
					]
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
		$output = '';
		
		//Defined Variable
		$class_names = isset( $extra_class ) && $extra_class != '' ? ' ' . $extra_class : '';
		$post_per_page = isset( $post_per_page ) && $post_per_page != '' ? $post_per_page : '';
		$excerpt_length = isset( $excerpt_length ) && $excerpt_length != '' ? $excerpt_length : 10;
		$this->excerpt_len = $excerpt_length;

		$include_cats = isset( $include_cats ) ? $include_cats : '';
		$exclude_cats = isset( $exclude_cats ) ? $exclude_cats : '';
		
		$more_text = isset( $more_text ) && $more_text != '' ? $more_text : '';
		$blog_pagination = isset( $blog_pagination ) && $blog_pagination == 'on' ? true : false;
		$post_heading = isset( $post_heading ) && $post_heading != '' ? $post_heading : 'h3';

		$thumb_size = isset( $image_size ) ? $image_size : '';
		$cus_thumb_size = '';
		$hard_crop = false;
		if( $thumb_size == 'custom' ){
			$cus_thumb_size = isset( $custom_image_size ) && $custom_image_size != '' ? $custom_image_size : '';
			$hard_crop = isset( $hard_croping ) && $hard_croping == '1' ? true : false;
		}

		$class_names .= ' blog-normal-model';

		
		$default_items = array( 
			"thumb"			=> esc_html__( "Feature Image", "wiguard-core" ),
			"title"			=> esc_html__( "Title", "wiguard-core" ),
			"excerpt"		=> esc_html__( "Excerpt", "wiguard-core" )
		);
		$elemetns = isset( $post_items ) && !empty( $post_items ) ? json_decode( $post_items, true ) : array( 'Enabled' => $default_items );
		$overlay_opt = isset( $post_overlay_items_opt ) && $post_overlay_items_opt == '1' ? true : false;
		$overlay_items = isset( $post_overlay_items ) && !empty( $post_overlay_items ) ? json_decode( $post_overlay_items, true ) : array( 'Enabled' => '' );
		$top_meta = isset( $top_meta ) && $top_meta != '' ? $top_meta : array( 'Enabled' => '' );
		$bottom_meta = isset( $bottom_meta ) && $bottom_meta != '' ? $bottom_meta : array( 'Enabled' => '' );
		
		$class_names .= isset( $blog_layout ) ? ' blog-style-' . $blog_layout : ' blog-style-1';
		$class_names .= isset( $text_align ) && $text_align != 'default' ? ' text-' . $text_align : '';
		$class_names .= isset( $variation ) ? ' blog-' . $variation : '';
		
		// This is custom css options for main shortcode warpper
		$shortcode_css = '';
		$shortcode_rand_id = $rand_class = 'shortcode-rand-' . wiguard_shortcode_rand_id();
		
		//Spacing
		if( isset( $sc_spacing ) && !empty( $sc_spacing ) ){
			$sc_spacing = preg_replace( '!\s+!', ' ', $sc_spacing );
			$space_arr = explode( " ", $sc_spacing );
			$i = 1;

			$space_class_name = '.' . esc_attr( $rand_class ) . '.blog-wrapper .blog-inner >';
			foreach( $space_arr as $space ){
				$shortcode_css .= $space != '-' ? $space_class_name .' *:nth-child('. esc_attr( $i ) .') { margin-bottom: '. esc_attr( $space ) .'; }' : '';
				$i++;
			}
		}
		
		$cols = isset( $blog_cols ) ? $blog_cols : 12;
		$col_class = "col-lg-". absint( $cols );
		$col_class .= " " . ( $cols == 3 ? "col-md-6" : "col-md-". absint( $cols ) );
		
		$list_layout = isset( $blog_layout ) && $blog_layout == 4 ? 1 : 0;
		
		//Cats In
		$filter_catoutput = '';
		$cats_in = array();
		if( $include_cats ){
			$filter = preg_replace( '/\s+/', '', $include_cats );
			$filter = explode( ',', rtrim( $filter, ',' ) );
			foreach( $filter as $cat ){
				if( term_exists( $cat, 'category' ) ){
					$cat_term = get_term_by( 'slug', $cat, 'category' );	
					//post in array push
					if( isset( $cat_term->term_id ) ){
						array_push( $cats_in, absint( $cat_term->term_id ) );	
					}
				}
			}
		}
		
		//Cats Not In
		$cats_not_in = array();
		if( $exclude_cats ){
			$filter = preg_replace( '/\s+/', '', $exclude_cats );
			$filter = explode( ',', rtrim( $filter, ',' ) );
			foreach( $filter as $cat ){
				if( term_exists( $cat, 'category' ) ){
					$cat_term = get_term_by( 'slug', $cat, 'category' );	
					//post not in array push
					if( isset( $cat_term->term_id ) )
						array_push( $cats_not_in, absint( $cat_term->term_id ) );	
				}
			}
		}
		
		//Query Start
		global $wp_query;
		$paged = 1;
		if( get_query_var('paged') ){
			$paged = get_query_var('paged');
		}elseif( get_query_var('page') ){
			$paged = get_query_var('page');
		}
		
		$ppp = isset( $post_per_page ) && $post_per_page != '' ? $post_per_page : 2;
		$inc_cat_array = $cats_in ? array( 'taxonomy' => 'category', 'field' => 'id', 'terms' => $cats_in ) : '';
		$exc_cat_array = $cats_not_in ? array( 'taxonomy' => 'category', 'field' => 'id', 'terms' => $cats_not_in, 'operator' => 'NOT IN' ) : '';
		
		$post_toggle = array( 'recent_posts', 'popular_posts' );
		
		echo '<div class="wiguard-toggle-post-wrap">';
			foreach( $post_toggle as $post_toggle ){
			
				$order_by = $post_toggle == 'popular_posts' ? 'comment_count' : '';
	
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => absint( $ppp ),
					'paged' => $paged,
					'orderby' => $order_by,
					'ignore_sticky_posts' => 1,
					'tax_query' => array(
						$inc_cat_array,
						$exc_cat_array
					)
					
				);
				$query = new WP_Query( $args );
					
				if ( $query->have_posts() ) {
					
					echo '<div class="wiguard-'. esc_attr( sanitize_title( $post_toggle ) ) .'">';
		
						if( $shortcode_css ) $class_names .= ' ' . $shortcode_rand_id . ' wiguard-inline-css';
						echo '<div class="blog-wrapper'. esc_attr( $class_names ) .'" data-css="'. htmlspecialchars( json_encode( $shortcode_css ), ENT_QUOTES, 'UTF-8' ) .'">';
						
							$row_stat = 0;
						
							// Recent/Popular Post items array
							$blog_array = array(
								'excerpt_length' => $excerpt_length,
								'cols' => $cols,
								'post_heading' => $post_heading,
								'thumb_size' => $thumb_size,
								'cus_thumb_size' => $cus_thumb_size,
								'overlay_opt' => $overlay_opt,
								'overlay_items' => $overlay_items,
								'hard_crop' => $hard_crop,
								'more_text' => $more_text,
								'top_meta' => $top_meta,
								'bottom_meta' => $bottom_meta,
								'list_layout' => 0,
								'list_stat' => $list_layout // set list layout default 0
							);
						
							// Start the Loop
							while ( $query->have_posts() ) : $query->the_post();
								
								$post_id = get_the_ID();
								$blog_array['post_id'] = $post_id;
								
								$cat_class = '';
			
								if( $row_stat == 0 ) :
									echo '<div class="row">';
								endif;
			
								
								echo '<div class="'. esc_attr( $col_class . $cat_class ) .'">';
									echo '<div class="blog-inner">';
										
										if( $list_layout ){
											echo '<div class="media">';
												echo $this->wiguard_blog_shortcode_elements('thumb', $blog_array);
												echo '<div class="media-body">';
										}
			
										if( isset( $elemetns['Enabled'] ) ) :
											foreach( $elemetns['Enabled'] as $element => $value ){
												if( $list_layout ) $blog_array['list_layout'] = 1; // set list layout 1
												echo $this->wiguard_blog_shortcode_elements( $element, $blog_array );
											}
										endif;
										
										if( $list_layout ){
												echo '</div><!-- .media -->';
											echo '</div><!-- .media-body -->';
										}
									echo '</div><!-- .blog-inner -->';
								echo '</div><!-- .col -->';
			
								$row_stat++;
								if( $row_stat == ( 12/ $cols ) ) :
									echo '</div><!-- .row -->';
									$row_stat = 0;
								endif;
			
							endwhile;
							
			
							if( $row_stat != 0 ){
								echo '</div><!-- .row -->'; // Unexpected row close
							}
						
							if( $blog_pagination ):
								require_once WIGUARD_CORE_DIR . 'elementor-supports//inc/wiguard-class.php';
								$wiguard_ele = new CEAPostElements;
								echo $wiguard_ele->wiguard_wp_bootstrap_pagination( $args, $query->max_num_pages, false );
							endif;
							
						echo '</div><!-- .blog-wrapper -->';
						
					echo '</div><!-- .recent/popular-post -->';
					
				}// query exists
				
				// use reset postdata to restore orginal query
				wp_reset_postdata();
			} // recent/popular post foreach
			
			echo '<div class="wiguard-toggle-post-trigger text-center">';
				echo '<ul class="nav">';
					echo '<li>'. esc_html__( 'Recent Posts', 'wiguard-core' ) .'</li>';
					echo '<li><label class="switch">
							<input class="switch-checkbox" type="checkbox">
							<span class="slider round"></span>
						</label></li>';
					echo '<li>'. esc_html__( 'Popular Posts', 'wiguard-core' ) .'</li>';
			echo '</div>';
			
		echo '</div><!-- .wiguard-toggle-post-wrap -->';
		
	}
	
	function wiguard_blog_shortcode_elements( $element, $opts = array() ){
		$output = '';
		switch( $element ){
		
			case "title":
				$head = isset( $opts['post_heading'] ) ? $opts['post_heading'] : 'h3';
				$output .= '<div class="entry-title">';
					$output .= '<'. esc_attr( $head ) .' class="post-title-head"><a href="'. esc_url( get_the_permalink() ) .'" class="post-title">'. esc_html( get_the_title() ) .'</a></'. esc_attr( $head ) .'>';
				$output .= '</div><!-- .entry-title -->';		
			break;
			
			case "thumb":
				if( isset( $opts['list_layout'] ) && $opts['list_layout'] === 0 ){
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
						
						$overlay_opt = isset( $opts['overlay_opt'] ) && $opts['overlay_opt'] == '1' ? true : false;
						$thumb_wrap_class = $overlay_opt ? ' post-overlay-active' : '';
											
						$output .= '<div class="post-thumb'. esc_attr( $thumb_wrap_class ) .'">';
							if( $thumb_cond == 'custom' ){
								$output .= '<img height="'. esc_attr( $img_prop[2] ) .'" width="'. esc_attr( $img_prop[1] ) .'" class="img-fluid" alt="'. esc_attr( get_the_title() ) .'" src="' . esc_url( $img_prop[0] ) . '"/>';
							}else{
								$output .= get_the_post_thumbnail( $opts['post_id'], $thumb_size, array( 'class' => 'img-fluid' ) );
							}
							
							if( $overlay_opt ){
								$post_overlay_items = isset( $opts['overlay_items'] ) ? $opts['overlay_items'] : array( 'Enabled' => '' );
								$output .= '<div class="post-overlay-items">';
									foreach( $post_overlay_items['Enabled'] as $element => $value ){
										$output .= $this->wiguard_blog_shortcode_elements( $element, $opts );
									}
								$output .= '</div>';
	
							}
														
						$output .= '</div><!-- .post-thumb -->';
					}
				}
			break;
			
			case "category":
				$categories = get_the_category(); 
				if ( ! empty( $categories ) ){
					$coutput = '<div class="post-category">';
						$coutput .= '<span class="before-icon ti-folder"></span>';
						foreach ( $categories as $category ) {
							$coutput .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>,';
						}
						$output .= rtrim( $coutput, ',' );
					$output .= '</div>';
				}
			break;
			
			case "author":
				$output .= '<div class="post-author">';
					$output .= '<a href="'. get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) .'">';
						$output .= '<span class="author-img">'. get_avatar( get_the_author_meta('email'), '30', null, null, array( 'class' => 'rounded-circle' ) ) .'</span>';
						$output .= '<span class="author-name">'. get_the_author() .'</span>';
					$output .= '</a>';
				$output .= '</div>';
			break;
			
			case "date":
				$archive_year  = get_the_time('Y');
				$archive_month = get_the_time('m'); 
				$archive_day   = get_the_time('d');
				$output = '<div class="post-date"><a href="'. esc_url( get_day_link( $archive_year, $archive_month, $archive_day ) ) .'" ><i class="icon icon-calendar"></i> '. get_the_time( get_option( 'date_format' ) ) .'</a></div>';
			break;
			
			case "more":
				$read_more_text = isset( $opts['more_text'] ) ? $opts['more_text'] : esc_html__( 'Read more', 'wiguard-core' );
				$output = '<div class="post-more"><a class="read-more" href="'. esc_url( get_permalink( get_the_ID() ) ) . '">'. esc_html( $read_more_text ) .'</a></div>';
			break;
			
			case "comment":
				$comments_count = wp_count_comments(get_the_ID());
				$output = '<div class="post-comment"><a href="'. esc_url( get_comments_link( get_the_ID() ) ) .'" rel="bookmark" class="comments-count"><i class="ti-comment"></i> '. esc_html( $comments_count->total_comments ) .'</a></div>';
			break;
			
			case "excerpt":
				$output = '';
				$excerpt = isset( $opts['excerpt_length'] ) && $opts['excerpt_length'] != '' ? $opts['excerpt_length'] : 20;
				$output .= '<div class="post-excerpt">';
					add_filter( 'excerpt_more', 'wiguard_excerpt_more' );
					add_filter( 'excerpt_length', array( &$this, 'wiguard_excerpt_length' ) );
					ob_start();
					the_excerpt();
					$excerpt_cont = ob_get_clean();
					$output .= $excerpt_cont;
				$output .= '</div><!-- .post-excerpt -->';	
			break;		
			
			case "top-meta":
				$output = '';
				$top_meta = $opts['top_meta'];
				$elemetns = isset( $top_meta ) ? json_decode( $top_meta, true ) : array( 'Left' => '' );
				$output .= '<div class="top-meta clearfix">';
				foreach( $elemetns as $ele_key => $ele_part ){
					if( isset( $ele_part ) && !empty( $ele_part ) && $ele_key != 'disabled' ) :
						$part_class = $ele_key == 'Left' || $ele_key == 'Right' ? ' meta-' . strtolower( $ele_key ) : '';
						$output .= '<ul class="nav top-meta-list'. esc_attr( $part_class ) .'">';
							foreach($ele_part as $element => $value ){
								$blog_array = array( 'more_text' => $opts['more_text'] );
								$output .= '<li>'. $this->wiguard_blog_shortcode_elements( $element, $blog_array ) .'</li>';
							}
						$output .= '</ul>';
					endif;
				}
				$output .= '</div>';
			break;
			
			case "bottom-meta":
				$output = '';
				$bottom_meta = $opts['bottom_meta'];
				$elemetns = isset( $bottom_meta ) ? json_decode( $bottom_meta, true ) : array( 'Left' => '' );
				$output .= '<div class="bottom-meta clearfix">';
				foreach( $elemetns as $ele_key => $ele_part ){
					if( isset( $ele_part ) && !empty( $ele_part ) && $ele_key != 'disabled' ) :
						$part_class = $ele_key == 'Left' || $ele_key == 'Right' ? ' meta-' . strtolower( $ele_key ) : '';
						$output .= '<ul class="nav bottom-meta-list'. esc_attr( $part_class ) .'">';
							foreach($ele_part as $element => $value ){
								$blog_array = array( 'more_text' => $opts['more_text'] );
								$output .= '<li>'. $this->wiguard_blog_shortcode_elements( $element, $blog_array ) .'</li>';
							}
						$output .= '</ul>';
					endif;
				}
				$output .= '</div>';
			break;
		}
		return $output; 
	}
	
	function wiguard_excerpt_length( $length ) {
		return $this->excerpt_len;
	}

}
