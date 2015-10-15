<?php

function dvunda_add_metabox() {
			
			dvunda_meta_box( 
			'dvunda_id', 
			'University List', 
			'dvunda_callback',
			'u_news'
			
		);
}
	
add_action( 'add_meta_boxes', 'dvunda_add_custom_metabox'); 
	
	function dvunda_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'dvunda_u_news_nonce' );
	$dvunda_stored_meta = get_post_meta( $post->ID );
	
	 ?>

	<div class="inside">
			<div>
				<label for="u_news">University News ID</label>
			</div>
		
			<div>
			<input type="text" name="u_news" id="u_news" size="25" value="<?php if ( ! empty ( $dvunda_stored_meta['u_news'] ) ) echo esc_attr( $dvunda_stored_meta['u_news'][0] ); ?>">
			</div>
    		<div>
            	<label for="u_news_rss">RSS Website</label>
            </div>
        	<div>
            <input type="text" name="u_news_rss" id="u_news_rss" size="45" value="">
			</div>        
            
            
	</div>

<?php
	}
	
function dvunda_meta_save( $post_id ) {
		$is_autosave = wp_is_post_autosave( $post_id );
		$is_revision = wp_is_post_revision( $post_id );
		$is_valid_nonce = ( isset( $_POST[ 'dvunda_u_news_nonce' ] ) && wp_verify_nonce( $_POST[ 'dvunda_u_news_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
	
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
			return;
	}
	
	if ( isset( $_POST[ 'u_news' ] ) ) {
			update_post_meta( $post_id, 'u_news', sanitize_text_field( $_POST[ 'u_news' ] ) );
		}
		if ( isset( $_POST[ 'u_news_rss' ] ) ) {
				update_post_meta( $post_id, 'u_news_rss', sanitize_text_field( $_POST[ 'u_news_rss' ] ) );
			}

}

add_action( 'save_post', 'dvunda_meta_save' );


	
	
