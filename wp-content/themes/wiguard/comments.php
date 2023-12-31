<?php
/**
 * The template for displaying comments
 *
 */
if ( post_password_required() ) {
	return;
}
if( ! function_exists('wpb_move_comment_field_to_bottom') ) {
	function wpb_move_comment_field_to_bottom( $fields ) {
		$comment_field = $fields['comment'];
		unset( $fields['comment'] ); 
		$fields['comment'] = $comment_field;
		return $fields;
	}
	add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );
}
?>
<div class="post-comments" id="comments">
	
	<?php 
		if ( comments_open() ) :
		echo '<div class="post-box"><h3 class="post-box-title">';
		comments_number( '', esc_html__('Comments (1)','wiguard'), esc_html__('Comments (%)','wiguard') );
		echo '</h3></div>';
		endif;
		if( get_comments_number() ){
		echo "<ul class='comments'>";
		
			wp_list_comments( array(
				'style'			=> 'ul',
				'max_depth'		=> 5,
				'type'  		=> 'all',
				'callback'		=> 'wiguard_post_comments',
				'avatar_size'	=> 50,
			) );
		echo "</ul>";
		echo "<div id='comments_pagination'>";
			paginate_comments_links(array('prev_text' => '&laquo;', 'next_text' => '&raquo;'));
		echo "</div>";
		}
		$commenter = wp_get_current_commenter();
		$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );
		
		$fields =  array(
		
		  'author' =>
			'<div class="row"><div class="comment-form-author col-md-6"><input id="author" class="form-control" placeholder="'. esc_attr__('Name', 'wiguard') .' *"  name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
			'" size="30"' . $aria_req . ' /></div>',
		
		  'email' =>
			'<div class="comment-form-email col-md-6"><input class="form-control" id="email" placeholder="'. esc_attr__('Email', 'wiguard') .' *" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .	'" size="30"' . $aria_req . ' /></div></div>'
		);
		
		$allowed_html = array(
			'a' => array(
				'href' => array(),
				'title' => array()
			)
		);
		
		$args = array(
		  'id_form'           => 'commentform',
		  'class_form'      => 'comment-form',
		  'id_submit'         => 'submit',
		  'class_submit'      => 'submit btn btn-default',
		  'name_submit'       => 'submit',
		  'title_reply'       => esc_html__( 'Leave a Reply', 'wiguard' ),
		  'title_reply_to'    => esc_html__( 'Leave a Reply to %s', 'wiguard' ),
		  'title_reply_before'	=> '<h3 id="reply-title" class="comment-reply-title">',
		  'title_reply_after'	=> '</h3>',
		  'cancel_reply_link' => esc_html__( 'Cancel Reply', 'wiguard' ),
		  'label_submit'      => esc_html__( 'Post', 'wiguard' ),
		  'format'            => 'xhtml',
		  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
		
		 'comment_field' =>  '<div class="row"><div class="comment-form-comment col-md-12"><textarea placeholder="'. esc_attr__('Comment', 'wiguard') .'" class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
			'</textarea></div></div>',
		
		'must_log_in' => '<p class="must-log-in">' .
		sprintf(
		  wp_kses( __( 'You must be <a href="%s">logged in</a> to post a comment.', 'wiguard' ), $allowed_html ),
		  wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
		) . '</p>',
	
	  'logged_in_as' => '<p class="logged-in-as">' .
		sprintf(
		wp_kses( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'wiguard' ), $allowed_html ),
		  admin_url( 'profile.php' ),
		  $user_identity,
		  wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
		) . '</p>',
	
	  'comment_notes_before' => '<p class="comment-notes">' .
		esc_html__( 'Your email address will not be published. Required fields are marked', 'wiguard' ) . ( $req ? '*' : '' ) .
		'</p>',
	  
		);
				
		comment_form($args);
	 ?>
</div> <!-- end comments div -->
