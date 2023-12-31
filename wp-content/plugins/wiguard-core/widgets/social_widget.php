<?php

add_action( 'widgets_init', 'wiguard_zozo_social_load_widget' );

function wiguard_zozo_social_load_widget() {

	register_widget( 'wiguard_zozo_social_widget' );

}

class wiguard_zozo_social_widget extends WP_Widget {

	/**

	 * Widget setup.

	 */

	function __construct() {

		/* Widget settings. */

		$widget_ops = array( 'classname' => 'zozo_social_widget', 'description' => esc_html__('A widget that displays your social icons', 'wiguard-core') );

		/* Widget control settings. */

		$control_ops = array( 'width' => 250, 'height' => 350, 'id_base' => 'zozo_social_widget' );

		/* Create the widget. */

		parent::__construct( 'zozo_social_widget', esc_html__('Wiguard Social Icons', 'wiguard-core'), $widget_ops, $control_ops );

	}

	/**

	 * How to display the widget on the screen.

	 */

	function widget( $args, $instance ) {

		extract( $args );

		/* Our variables from the widget settings. */

		$title = apply_filters('widget_title', $instance['title'] ); 

		$socialstyle = $instance['socialstyle'];

		$social_icons_fore = $instance['social_icons_fore'];

		$social_icons_hfore = $instance['social_icons_hfore'];

		$social_icons_bg = $instance['social_icons_bg'];  

		$social_icons_hbg = $instance['social_icons_hbg'];

		$facebook = $instance['facebook'];

		$twitter = $instance['twitter'];

		$googleplus = $instance['googleplus'];

		$instagram = $instance['instagram'];

		$bloglovin = $instance['bloglovin'];

		$youtube = $instance['youtube'];

		$tumblr = $instance['tumblr'];

		$pinterest = $instance['pinterest'];

		$dribbble = $instance['dribbble'];

		$soundcloud = $instance['soundcloud'];

		$vimeo = $instance['vimeo'];

		$linkedin = $instance['linkedin'];

		$rss = $instance['rss'];

		

		$class_name = isset( $socialstyle ) && !empty( $socialstyle ) ? ' social-' . $socialstyle : '';

		

		$class_name .= isset( $social_icons_fore ) && !empty( $social_icons_fore ) ? ' social-' . $social_icons_fore : '';

		$class_name .= isset( $social_icons_hfore ) && !empty( $social_icons_hfore ) ? ' social-' . $social_icons_hfore : '';

		$class_name .= isset( $social_icons_bg ) && !empty( $social_icons_bg ) ? ' social-' . $social_icons_bg : '';

		$class_name .= isset( $social_icons_hbg ) && !empty( $social_icons_hbg ) ? ' social-' . $social_icons_hbg : '';

		

		/* Before widget (defined by themes). */

		echo wp_kses_post( $before_widget );

		/* Display the widget title if one was input (before and after defined by themes). */

		if ( $title )

			echo ( $title != '' ? wp_kses_post( $before_title . $title . $after_title ) : '' );

		?>

		

			<ul class="nav social-icons social-widget widget-content<?php echo esc_attr( $class_name ); ?>">

				<?php if($facebook) : ?><li><a href="<?php echo esc_url($facebook); ?>" target="_blank" class="social-fb"><i class="ti-facebook"></i></a></li><?php endif; ?>

				<?php if($twitter) : ?><li><a href="<?php echo esc_url($twitter); ?>" target="_blank" class="social-twitter"><i class="ti-twitter"></i></a></li><?php endif; ?>

				<?php if($instagram) : ?><li><a href="<?php echo esc_url($instagram); ?>" target="_blank" class="social-instagram"><i class="ti-instagram"></i></a></li><?php endif; ?>

				<?php if($pinterest) : ?><li><a href="<?php echo esc_url($pinterest); ?>" target="_blank" class="social-pinterest"><i class="ti-pinterest"></i></a></li><?php endif; ?>

				<?php if($bloglovin) : ?><li><a href="<?php echo esc_url($bloglovin); ?>" target="_blank" class="social-bloglovin"><i class="ti-heart"></i></a></li><?php endif; ?>

				<?php if($tumblr) : ?><li><a href="<?php echo esc_url($tumblr); ?>" target="_blank" class="social-tumblr"><i class="ti-tumblr-alt"></i></a></li><?php endif; ?>

				<?php if($youtube) : ?><li><a href="<?php echo esc_url($youtube); ?>" target="_blank" class="social-youtube"><i class="ti-youtube"></i></a></li><?php endif; ?>

				<?php if($dribbble) : ?><li><a href="<?php echo esc_url($dribbble); ?>" target="_blank" class="social-dribbble"><i class="ti-dribbble"></i></a></li><?php endif; ?>

				<?php if($soundcloud) : ?><li><a href="<?php echo esc_url($soundcloud); ?>" target="_blank" class="social-soundcloud"><i class="ti-soundcloud"></i></a></li><?php endif; ?>

				<?php if($vimeo) : ?><li><a href="<?php echo esc_url($vimeo); ?>" target="_blank" class="social-vimeo"><i class="ti-vimeo"></i></a></li><?php endif; ?>

				<?php if($linkedin) : ?><li><a href="<?php echo esc_url($linkedin); ?>" target="_blank" class="social-linkedin"><i class="ti-linkedin"></i></a></li><?php endif; ?>

				<?php if($rss) : ?><li><a href="<?php echo esc_url($rss); ?>" target="_blank" class="social-rss"><i class="ti-rss"></i></a></li><?php endif; ?>

			</ul>

			

			

		<?php

		/* After widget (defined by themes). */

		echo wp_kses_post( $after_widget );

	}

	/**

	 * Update the widget settings.

	 */

	function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */

		$instance['title'] = strip_tags( $new_instance['title'] );

		$instance['socialstyle'] = strip_tags( $new_instance['socialstyle'] );

		$instance['social_icons_fore'] = strip_tags( $new_instance['social_icons_fore'] );

		$instance['social_icons_hfore'] = strip_tags( $new_instance['social_icons_hfore'] ); 

		$instance['social_icons_bg'] = strip_tags( $new_instance['social_icons_bg'] );

		$instance['social_icons_hbg'] = strip_tags( $new_instance['social_icons_hbg'] );

		$instance['facebook'] = esc_url( $new_instance['facebook'] );

		$instance['twitter'] = esc_url( $new_instance['twitter'] );

		$instance['googleplus'] = esc_url( $new_instance['googleplus'] );

		$instance['instagram'] = esc_url( $new_instance['instagram'] );

		$instance['bloglovin'] = esc_url( $new_instance['bloglovin'] );

		$instance['youtube'] = esc_url( $new_instance['youtube'] );

		$instance['tumblr'] = esc_url( $new_instance['tumblr'] );

		$instance['pinterest'] = esc_url( $new_instance['pinterest'] );

		$instance['dribbble'] = esc_url( $new_instance['dribbble'] );

		$instance['soundcloud'] = esc_url( $new_instance['soundcloud'] );

		$instance['vimeo'] = esc_url( $new_instance['vimeo'] );

		$instance['linkedin'] = esc_url( $new_instance['linkedin'] );

		$instance['rss'] = esc_url( $new_instance['rss'] );

		return $instance;

	}

	function form( $instance ) {

		/* Set up some default widget settings. */

		$defaults = array( 'title' => '', 'socialstyle' => '', 'social_icons_fore' => '', 'social_icons_hfore' => '', 'social_icons_bg' => '', 'social_icons_hbg' => '', 'facebook' => '', 'twitter' => '', 'googleplus' => '', 'instagram' => '', 'bloglovin' => '', 'youtube' => '', 'tumblr' => '', 'pinterest' => '', 'dribbble' => '', 'soundcloud' => '', 'vimeo' => '', 'linkedin' => '', 'rss' => '' );

		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->

		<p>

			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'wiguard-core' ); ?></label>

			<input id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr($instance['title']); ?>" class="widefat" type="text" />

		</p>

		

		<!-- Select social icons style -->

		<p>

		<label for="<?php echo esc_attr( $this->get_field_id('socialstyle') ); ?>"><?php esc_html_e('Select Post Type:', 'wiguard-core'); ?></label> 

		<select id="<?php echo esc_attr( $this->get_field_id('socialstyle') ); ?>" name="<?php echo esc_attr( $this->get_field_name('socialstyle') ); ?>" class="widefat" style="width:100%;">

			<?php $social_style = array( "transparent" => esc_html__( 'Transparent', 'wiguard-core' ), "squared" => esc_html__( 'Squared', 'wiguard-core' ), "rounded" => esc_html__( 'Rounded', 'wiguard-core' ), "circled" => esc_html__( 'Circled', 'wiguard-core' ) ); ?>

			<?php foreach($social_style as $skey => $sval) { ?>

				<option value='<?php echo esc_attr( $skey ); ?>' <?php if ($skey == $instance['socialstyle']) echo 'selected="selected"'; ?>><?php echo esc_attr( $sval ); ?></option>

			<?php } ?>

		</select>

		</p>

	

		

		<!-- Social Icons Fore. -->

		<p>

		<label for="<?php echo esc_attr( $this->get_field_id('social_icons_fore') ); ?>"><?php esc_html_e('Social Icons Fore:', 'wiguard-core'); ?></label> 

		<select id="<?php echo esc_attr( $this->get_field_id('social_icons_fore') ); ?>" name="<?php echo esc_attr( $this->get_field_name('social_icons_fore') ); ?>" class="widefat" style="width:100%;">

			<?php $social_icons_fore = array( "black" => esc_html__( 'Black', 'wiguard-core' ), "white" => esc_html__( 'White', 'wiguard-core' ), "own" => esc_html__( 'Own Color', 'wiguard-core' ) ); ?>

			<?php foreach($social_icons_fore as $skey => $sval) { ?>

				<option value='<?php echo esc_attr( $skey ); ?>' <?php if ($skey == $instance['social_icons_fore']) echo 'selected="selected"'; ?>><?php echo esc_attr( $sval ); ?></option>

			<?php } ?>

		</select>

		</p>

		

		

		<!-- Social Icons Fore Hover. -->

		<p>

		<label for="<?php echo esc_attr( $this->get_field_id('social_icons_hfore') ); ?>"><?php esc_html_e('Social Icons Fore Hover:', 'wiguard-core'); ?></label> 

		<select id="<?php echo esc_attr( $this->get_field_id('social_icons_hfore') ); ?>" name="<?php echo esc_attr( $this->get_field_name('social_icons_hfore') ); ?>" class="widefat" style="width:100%;">

			<?php $social_icons_hfore = array( "h-black" => esc_html__( 'Black', 'wiguard-core' ), "h-white" => esc_html__( 'White', 'wiguard-core' ), "h-own" => esc_html__( 'Own Color', 'wiguard-core' ) ); ?>

			<?php foreach($social_icons_hfore as $skey => $sval) { ?>

				<option value='<?php echo esc_attr( $skey ); ?>' <?php if ($skey == $instance['social_icons_hfore']) echo 'selected="selected"'; ?>><?php echo esc_attr( $sval ); ?></option>

			<?php } ?>

		</select>

		</p>

		

		<!-- Social Icons Bg. -->

		<p>

		<label for="<?php echo esc_attr( $this->get_field_id('social_icons_bg') ); ?>"><?php esc_html_e('Social Icons Background:', 'wiguard-core'); ?></label> 

		<select id="<?php echo esc_attr( $this->get_field_id('social_icons_bg') ); ?>" name="<?php echo esc_attr( $this->get_field_name('social_icons_bg') ); ?>" class="widefat" style="width:100%;">

			<?php $social_icons_bg = array( "bg-transparent" => esc_html__( 'Transparent', 'wiguard-core' ), "bg-black" => esc_html__( 'Black', 'wiguard-core' ), "bg-white" => esc_html__( 'White', 'wiguard-core' ), "bg-light" => esc_html__( 'RGBA Light', 'wiguard-core' ), "bg-dark" => esc_html__( 'RGBA Dark', 'wiguard-core' ), "bg-own" => esc_html__( 'Own Color', 'wiguard-core' ) ); ?>

			<?php foreach($social_icons_bg as $skey => $sval) { ?>

				<option value='<?php echo esc_attr( $skey ); ?>' <?php if ($skey == $instance['social_icons_bg']) echo 'selected="selected"'; ?>><?php echo esc_attr( $sval ); ?></option>

			<?php } ?>

		</select>

		</p>



		<!-- Social Icons Background Hover. -->

		<p>

		<label for="<?php echo esc_attr( $this->get_field_id('social_icons_hbg') ); ?>"><?php esc_html_e('Social Icons Background Hover:', 'wiguard-core'); ?></label> 

		<select id="<?php echo esc_attr( $this->get_field_id('social_icons_hbg') ); ?>" name="<?php echo esc_attr( $this->get_field_name('social_icons_hbg') ); ?>" class="widefat" style="width:100%;">

			<?php $social_icons_hbg = array( "hbg-transparent" => esc_html__( 'Transparent', 'wiguard-core' ), "hbg-black" => esc_html__( 'Black', 'wiguard-core' ), "hbg-white" => esc_html__( 'White', 'wiguard-core' ), "hbg-light" => esc_html__( 'RGBA Light', 'wiguard-core' ), "hbg-dark" => esc_html__( 'RGBA Dark', 'wiguard-core' ), "hbg-own" => esc_html__( 'Own Color', 'wiguard-core' ) ); ?>

			<?php foreach($social_icons_hbg as $skey => $sval) { ?>

				<option value='<?php echo esc_attr( $skey ); ?>' <?php if ($skey == $instance['social_icons_hbg']) echo 'selected="selected"'; ?>><?php echo esc_attr( $sval ); ?></option>

			<?php } ?>

		</select>

		</p>

		

		

		<p><?php esc_html_e( 'Note: Set your social links in the Customizer', 'wiguard-core' ); ?></p>

		

		<p>

			<label for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"><?php esc_html_e( 'Show Facebook:', 'wiguard-core' ); ?></label>

			<input id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" value="<?php echo esc_url($instance['facebook']); ?>" class="widefat" type="text" />

		</p>

		

		<p>

			<label for="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>"><?php esc_html_e( 'Show Twitter:', 'wiguard-core' ); ?></label>

			<input id="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twitter' ) ); ?>" value="<?php echo esc_url($instance['twitter']); ?>" class="widefat" type="text" />

		</p>

		

		<p>

			<label for="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>"><?php esc_html_e( 'Show Instagram:', 'wiguard-core' ); ?></label>

			<input id="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'instagram' ) ); ?>" value="<?php echo esc_url($instance['instagram']); ?>" class="widefat" type="text" />

		</p>

		

		<p>

			<label for="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>"><?php esc_html_e( 'Show Pinterest:', 'wiguard-core' ); ?></label>

			<input id="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'pinterest' ) ); ?>" value="<?php echo esc_url($instance['pinterest']); ?>" class="widefat" type="text" />

		</p>

		

		<p>

			<label for="<?php echo esc_attr( $this->get_field_id( 'bloglovin' ) ); ?>"><?php esc_html_e( 'Show Bloglovin:', 'wiguard-core' ); ?></label>

			<input id="<?php echo esc_attr( $this->get_field_id( 'bloglovin' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'bloglovin' ) ); ?>" value="<?php echo esc_url($instance['bloglovin']); ?>" class="widefat" type="text" />

		</p>

		

		<p>

			<label for="<?php echo esc_attr( $this->get_field_id( 'googleplus' ) ); ?>"><?php esc_html_e( 'Show Google Plus:', 'wiguard-core' ); ?></label>

			<input id="<?php echo esc_attr( $this->get_field_id( 'googleplus' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'googleplus' ) ); ?>" value="<?php echo esc_url($instance['googleplus']); ?>" class="widefat" type="text" />

		</p>

		

		<p>

			<label for="<?php echo esc_attr( $this->get_field_id( 'tumblr' ) ); ?>"><?php esc_html_e( 'Show Tumblr:', 'wiguard-core' ); ?></label>

			<input id="<?php echo esc_attr( $this->get_field_id( 'tumblr' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'tumblr' ) ); ?>" value="<?php echo esc_url($instance['tumblr']); ?>" class="widefat" type="text" />

		</p>

		

		<p>

			<label for="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>"><?php esc_html_e( 'Show Youtube:', 'wiguard-core' ); ?></label>

			<input id="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'youtube' ) ); ?>" value="<?php echo esc_url($instance['youtube']); ?>" class="widefat" type="text" />

		</p>

		<p>

			<label for="<?php echo esc_attr( $this->get_field_id( 'dribbble' ) ); ?>"><?php esc_html_e( 'Show Dribbble:', 'wiguard-core' ); ?></label>

			<input id="<?php echo esc_attr( $this->get_field_id( 'dribbble' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'dribbble' ) ); ?>" value="<?php echo esc_url($instance['dribbble']); ?>" class="widefat" type="text" />

		</p>

		<p>

			<label for="<?php echo esc_attr( $this->get_field_id( 'soundcloud' ) ); ?>"><?php esc_html_e( 'Show Soundcloud:', 'wiguard-core' ); ?></label>

			<input id="<?php echo esc_attr( $this->get_field_id( 'soundcloud' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'soundcloud' ) ); ?>" value="<?php echo esc_url($instance['soundcloud']); ?>" class="widefat" type="text" />

		</p>

		<p>

			<label for="<?php echo esc_attr( $this->get_field_id( 'vimeo' ) ); ?>"><?php esc_html_e( 'Show Vimeo:', 'wiguard-core' ); ?></label>

			<input id="<?php echo esc_attr( $this->get_field_id( 'vimeo' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'vimeo' ) ); ?>" value="<?php echo esc_url($instance['vimeo']); ?>" class="widefat" type="text" />

		</p>

		

		<p>

			<label for="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>"><?php esc_html_e( 'Show Linkedin:', 'wiguard-core' ); ?></label>

			<input id="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'linkedin' ) ); ?>" value="<?php echo esc_url($instance['linkedin']); ?>" class="widefat" type="text" />

		</p>

		

		<p>

			<label for="<?php echo esc_attr( $this->get_field_id( 'rss' ) ); ?>"><?php esc_html_e( 'Show RSS:', 'wiguard-core' ); ?></label>

			<input id="<?php echo esc_attr( $this->get_field_id( 'rss' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'rss' ) ); ?>" value="<?php echo esc_url($instance['rss']); ?>" class="widefat" type="text" />

		</p>



		

	<?php

	}

}

?>