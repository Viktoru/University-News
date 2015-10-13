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
	
	add_action( 'dvunda_meta_box', 'dvunda_add_metabox'); 
	
	function dvunda_callback() {
		
	}