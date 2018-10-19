<?php $defaults = array(
	'fields'               => array(
		'author' => '<input id="author" placeholder="Name" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . $html_req . ' />',
		'email'  => '<input id="email" placeholder="Email" class="form-control" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req . ' />',
	),
	'comment_field'        => '<textarea id="comment" placeholder="Comment" class="form-control" name="comment" cols="45" rows="8"  aria-required="true" required="required"></textarea>',
	'must_log_in'          => '<p class="must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
	'logged_in_as'         => '<p class="logged-in-as">' . sprintf( __( '<a href="%1$s" aria-label="Logged in as %2$s. Edit your profile.">Logged in as %2$s</a>. <a href="%3$s">Log out?</a>' ), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
	'comment_notes_before' => '<p class="comment-notes d-none"><span id="email-notes">' . __( 'Your email address will not be published.' ) . '</span>' . ( $req ? $required_text : '' ) . '</p>',
	'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title d-none">',
	'title_reply_after'    => '</h3>',
	'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s default-btn" value="%4$s" />',
	'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
);
comment_form( $defaults ); ?>

<div class="commentlist mt-5">
<!--	<h3 class="mb-3"><strong>Recent comments:</strong></h3>-->
	<?php wp_list_comments(array('style' => 'div')); ?>
</div>
