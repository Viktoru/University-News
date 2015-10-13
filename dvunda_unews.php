<?php

function wpdocs_create_post_type() {
    register_post_type( 'u_news',
        array(
            'labels' => array(
                'name'          => __( 'University News', 'textdomain' ),
                'singular_name' => __( 'U-News', 'textdomain' )
            ),
            'public'      => true,
            'has_archive' => true,
            'menu_icon'   => 'dashicons-welcome-learn-more',
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_in_nav_menus' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_admin_bar' => true,
			'menu_position' => 6,
			'can_export' => true,
			'delete_with_user' => true,
			'hierarchical' => false,
			'has_archive' => false,
			'query_var' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
		
		
		'rewrite' => array (
				'slug' => 'u_news',
				'with_front' => true,
				'pages' => true,
				'feeds' => true,
		),
		
		'supports'  => array( 'title', 'editor', 'author', 'thumbnail' )
			
        		
)
		
    );
}
add_action( 'init', 'wpdocs_create_post_type', 0 );
 
 
 function dvunda_register_taxonomy() {
	 	
		$plural = 'Locations';
		$singular = 'Location';
		
		
		$labels = array(
			'name' => $plural,
			'singular_name' => $singular,
			'search_item' => 'Search ' . $plural,
			'popular_items' => 'Popular ' . $plural,
			'all_items'	=> 'All' . $plural,
			'parent_item' => null,
			'parent_item_colon' => null,
			'edit_item' => 'Edit ' . $singular,
			'update_item'	=> 'Update ' . $singular,
			'add_new_item'	=> 'Add New ' . $singular,
			'new_item_name'	=> 'New ' . $singular,
			'separate_items_with_commas'	=> 'Separate ' . $plural . ' with commas',
			'add_or_remove_items'		=> 'Add or remove ' . $plural,
			'choose_from_most_user'	=>	'Choose from the most used ' . $plural,
			'not_found'	=> 'No ' . $plural . ' found.',
			'menu_name'	=>	$plural,
		
		); 
	 
	 	$args = array(
	 		'hierarchical'	=> true,
			'labels'	=> $labels,
			'show_ui'	=> true,
			'show_admin_column'	=> true,
			'update_count_callback' => '_update_post_term_count',
			'query_var'	=>true,
			'rewrite'		=> array( 'slug' => 'Location' ),
			
			);
			register_taxonomy( 'Location', 'u_news', $args );
	 }
  add_action( 'init', 'dvunda_register_taxonomy' );
 
 
 
 
 
 
 
 
 
 
 
 
 
 
//Extra

function dvunda_list_schools() {
	remove_meta_box( 'dashboard_primary', 'dashboard', 'post_container_1' );
}

add_action( 'wp_dashboard_setup', 'dvunda_list_schools' );

function dvunda_add_google_link() {
	
	global $wp_admin_bar;
	
	$wp_admin_bar->add_menu( array(
	'id' 	 => 'google_analytics',
	'title'  => 'Google Analytics',
	'href'  => 'http://www.google.com/analytics'
	));
}
add_action( 'wp_before_admin_bar_render',  'dvunda_add_google_link' );
