<?php
/**
 * Comment layout.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Comments form.
add_filter( 'comment_form_default_fields', 'understrap_bootstrap_comment_form_fields' );

/**
 * Creates the comments form.
 *
 * @param string $fields Form fields.
 *
 * @return array
 */

if ( ! function_exists( 'understrap_bootstrap_comment_form_fields' ) ) {

	function understrap_bootstrap_comment_form_fields( $fields ) {
		$commenter = wp_get_current_commenter();
		$req       = get_option( 'require_name_email' );
		$aria_req  = ( $req ? " aria-required='true'" : '' );
		$html5     = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
		$consent  = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
		$fields    = array(
			'author'  => '<div class="form-group comment-form-author"><label for="author">' . __( 'Name',
					'understrap' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
			            '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . '></div>',
			'email'   => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email',
					'understrap' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
			            '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . '></div>',
			'cookies' => '<div class="form-group form-check comment-form-cookies-consent"><input class="form-check-input" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' /> ' .
			         '<label class="form-check-label" for="wp-comment-cookies-consent">' . __( 'Save my name and email in this browser for the next time I comment', 'understrap' ) . '</label></div>',
		);

		return $fields;
	}
} // endif function_exists( 'understrap_bootstrap_comment_form_fields' )

add_filter( 'comment_form_defaults', 'understrap_bootstrap_comment_form' );

/**
 * Builds the form.
 *
 * @param string $args Arguments for form's fields.
 *
 * @return mixed
 */

if ( ! function_exists( 'understrap_bootstrap_comment_form' ) ) {

	function understrap_bootstrap_comment_form( $args ) {
		$args['comment_field'] = '<div class="form-group comment-form-comment">
	    <textarea class="form-control" id="comment" name="comment" aria-required="true" cols="45" rows="3"></textarea>
	    </div>';
		$args['class_submit']  = 'btn btn-dark'; // since WP 4.1.
		return $args;
	}
} // endif function_exists( 'understrap_bootstrap_comment_form' )
