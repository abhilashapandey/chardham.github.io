<?php 
add_action( 'admin_menu', 'wiguard_admin_menu' );
function wiguard_admin_menu() {
	add_submenu_page(
		'wiguard',
		esc_html__( 'Elementor Settings', 'wiguard' ),
		esc_html__( 'Elementor Settings', 'wiguard' ),
		'administrator',
		'wiguard-addons',
		'classic_elementor_addon_admin_page'
	);
}

function change_admin_menu_name(){
	global $submenu;
	if(isset($submenu['wiguard-addons'])){
		$submenu['wiguard-addons'][0][0] = esc_html__( 'Widgets Settings', 'wiguard-core' );
	}
}
add_action( 'admin_menu', 'change_admin_menu_name');    

function classic_elementor_addon_admin_page(){
	?>
	<div class="wiguard-admin-wrap">
		<h1><?php esc_html_e( 'Wiguard Elementor Addons', 'wiguard-core' ); ?></h1>
		<p class="pa-title-sub"><?php esc_html_e( 'Thank you for using Wiguard Elementor Addons for Elementor. This plugin has been developed by ', 'wiguard-core' ); ?><strong><?php echo esc_html( 'zozothemes' ); ?></strong></p>
		
		<?php
			$shortcode_stat = array(
				'animated-text' 	=> esc_html__( 'Animated Text', 'wiguard-core' ),
				'circle-progress'	=> esc_html__( 'Circle Progress', 'wiguard-core' ),
				'contact-form' 		=> esc_html__( 'Contact Form', 'wiguard-core' ),
				'contact-info' 		=> esc_html__( 'Contact Info', 'wiguard-core' ),
				'content-carousel' 	=> esc_html__( 'Content Carousel', 'wiguard-core' ),
				'counter' 			=> esc_html__( 'Counter', 'wiguard-core' ),
				'day-counter' 		=> esc_html__( 'Day Counter', 'wiguard-core' ),
				'feature-box' 		=> esc_html__( 'Feature Box', 'wiguard-core' ),
				'flip-box' 			=> esc_html__( 'Flip Box', 'wiguard-core' ),
				'google-map' 		=> esc_html__( 'Google Map', 'wiguard-core' ),
				'icon' 				=> esc_html__( 'Icon', 'wiguard-core' ),
				'icon-list' 		=> esc_html__( 'Icon List', 'wiguard-core' ),
				'image-grid' 		=> esc_html__( 'Image Grid', 'wiguard-core' ),
				'modal-popup' 		=> esc_html__( 'Modal Popup', 'wiguard-core' ),
				'pricing-table' 	=> esc_html__( 'Pricing Table', 'wiguard-core' ),
				'section-title' 	=> esc_html__( 'Section Title', 'wiguard-core' ),
				'social-links' 		=> esc_html__( 'Social Links', 'wiguard-core' ),
				'timeline' 			=> esc_html__( 'Timeline', 'wiguard-core' ),
				'timeline-slide' 	=> esc_html__( 'Timeline Slide', 'wiguard-core' ),
				'chart' 			=> esc_html__( 'Chart', 'wiguard-core' ),
				'recent-popular' 	=> esc_html__( 'Recent/Popular Post', 'wiguard-core' ),
				'blog' 				=> esc_html__( 'Blog', 'wiguard-core' ),
				'portfolio' 		=> esc_html__( 'Portfolio', 'wiguard-core' ),
				'team' 				=> esc_html__( 'Team', 'wiguard-core' ),
				'event' 			=> esc_html__( 'Event', 'wiguard-core' ),
				'service' 			=> esc_html__( 'Service', 'wiguard-core' ),
				'testimonial' 		=> esc_html__( 'Testimonial', 'wiguard-core' ),
				'toggle-content' 	=> esc_html__( 'Toggle Content', 'wiguard-core' ),
				'mailchimp' 		=> esc_html__( 'Mailchimp', 'wiguard-core' ),
				'popup-anything' 	=> esc_html__( 'Popup Anything', 'wiguard-core' ),
				'popover' 			=> esc_html__( 'Popover', 'wiguard-core' ),
				'round-tab' 		=> esc_html__( 'Round Tab', 'wiguard-core' )
			);
			
			if ( isset( $_POST['save_wiguard_shortcodes_options'] ) && wp_verify_nonce( $_POST['save_wiguard_shortcodes_options'], 'wiguard_plugin_shortcodes_options' ) ) {
				update_option( 'wiguard_shortcodes', $_POST['wiguard_shortcodes'] );
			}
			$wiguard_shortcodes = get_option('wiguard_shortcodes');
			
		?>
		
		<div class="wiguard-admin-content-wrap">
			<form method="post" action="#" enctype="multipart/form-data" id="wiguard-plugin-form-wrapper">
				<?php wp_nonce_field( 'wiguard_plugin_shortcodes_options', 'save_wiguard_shortcodes_options' ); ?>
				<input class="wiguard-plugin-submit button button-primary" type="submit" value="<?php echo esc_attr__( 'Save', 'wiguard-core' ); ?>" />
				<div class="wiguard-shortcodes-container">
			<?php
				$row = 1;
				foreach( $shortcode_stat as $key => $value ){
				
					$shortcode_name = str_replace( "-", "_", $key );
					if( !empty( $wiguard_shortcodes ) ){
						if( isset( $wiguard_shortcodes[$shortcode_name] ) ){
							$saved_val = 'on';
						}else{
							$saved_val = 'off';
						}
					}else{
						$saved_val = 'on';
					}
					$checked_stat = $saved_val == 'on' ? 'checked="checked"' : '';
				
					if( $row % 4 == 1 ) echo '<div class="wiguard-row">';
					
						echo '
						<div class="wiguard-col-3">
							<div class="element-group">
								<h4>'. esc_html( $value ) .'</h4>
								<label class="switch">
									<input class="switch-checkbox" type="checkbox" name="wiguard_shortcodes['. esc_attr( $shortcode_name ) .']" '. $checked_stat .'>
									<span class="slider round"></span>
								</label>
							</div><!-- .element-group -->
						</div><!-- .wiguard-col-2 -->';
									
					if( $row % 4 == 0 ) echo '</div><!-- .wiguard-row -->';
					$row++;
				}
				
				if( $row % 4 != 1 ) echo '</div><!-- .wiguard-row unexpceted close -->';
			?>
				</div> <!-- .wiguard-shortcodes-container -->
			</form>
		</div><!-- .wiguard-admin-content-wrap -->
		
		<div class="wiguard-customizer-options-wrap">
			<h2><?php esc_html_e( 'Enable/Disable Customizer Auto Refresh Option', 'wiguard-core' ); ?></h2>
			<?php 
				$customizer_auto_load = get_option( 'wiguard_customizer_auto_load' );;
				$checked_stat = $customizer_auto_load == '1' ? 'checked="checked"' : '';
			?>
			<div class="wiguard-customizer-option">
				<label class="switch">
					<input class="switch-checkbox" type="checkbox" <?php echo ''. $checked_stat ?>>
					<span class="slider round"></span>
				</label>
			</div>
			<p><?php esc_html_e( 'If you want to live editor experience, Just turn on this option. No need to auto load customizer editor for every option change means turn off this option.' ); ?></p>
		</div><!-- .wiguard-customizer-options-wrap -->
		
	</div><!-- .wiguard-admin-wrap -->
	<?php
}

add_action('wp_ajax_wiguard-customizer-auto-load', 'wiguard_customizer_auto_load_option');
function wiguard_customizer_auto_load_option(){
	$nonce = $_POST['nonce'];
  
    if ( ! wp_verify_nonce( $nonce, 'wiguard-customizer-#$%&*(' ) )
        die ( esc_html__( 'Busted!', 'wiguard' ) );
	
	$auto_load = isset( $_POST['auto_load'] ) && $_POST['auto_load'] == '1' ? 1 : 0;
	update_option( 'wiguard_customizer_auto_load', $auto_load );
	echo 'success';
	exit;
}