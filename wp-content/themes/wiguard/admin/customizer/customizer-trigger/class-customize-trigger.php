<?php
/**
 * The trigger customize control extends the WP_Customize_Control class.  This class allows
 */
 
if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return null;
}

/**
 * Trigger customize control.
 */
class Trigger_Custom_control extends WP_Customize_Control{

	public $type = 'trigger';

	public function render_content(){
		?>
		<div class="wiguard-customizer-controls-fetching-fields" id="fetching-fields-<?php echo esc_attr($this->id); ?>">
			<img class="wiguard-customizer-controls-loader" id="<?php echo esc_attr($this->id); ?>" src="<?php echo WIGUARD_ASSETS . '/images/infinite-loder.gif'; ?>" alt="<?php echo esc_attr($this->id); ?>" />
			<p><?php esc_html_e( 'Loading options..', 'wiguard' ); ?><span>.</span></p>
		<?php
	}
}