<?php

function dvunda_add_metabox() {
			
			dvunda_meta_box( 
			'dvunda_id', 
			'University List', 
			'dvunda_callback',
			'u-news',
			'side'
		);
}
	
add_action( 'add_meta_boxes', 'dvunda_add_custom_metabox'); 
	
	function dvunda_callback() {
	?>
	<div class="inside">
			<div>
				<label for="u_news">University News</label>
			</div>
		
			<div>
			<input type="text" name="u_news" id="u_news" value="">
			</div>
	</div>
		
		 <?php
		
		$content = get_post_meta( $post->ID, 'editing_textarea', true );
		$editor   = 'editing_textarea';
		$settings = array(
					'textarea_rows' => 5,
					'media_buttons' => true,
					);
					
					wp_editor( $content, $editor, $settings);
		?>
        </div>
        
        <?php
		
	}
	
	
		
