<?php
/**
 * Add what action is need(and the function attached) in theme functions.php or in your module file
 */

/**
 * Example how to add your custom tab in BuddyPress profile tab
 */
function wpr_add_profile_tab_custom() {
	// Data for menu to add
	$tab_args = array(
		'name'                    => 'My Custom Tab',
		'slug'                    => 'my_custom_tab_slug',
		'position'                => 15,
		'default_subnav_slug'     => 'my_custom_tab_slug',
		'show_for_displayed_user' => true,
		'item_css_id'             => 'my_custom_tab_id',
	);
	// Add menu function
	bp_core_new_nav_item( $tab_args );
}

add_action( 'bp_setup_nav', 'wpr_add_profile_tab_custom', 999 );


/**
 * Example how to remove any tab in BuddyPress profile tab
 */
function wpr_remove_tab_nav() {
	bp_core_remove_nav_item( 'slug_of_tab_to_remove' );
}

add_action( 'bp_setup_nav', 'wpr_remove_tab_nav', 15 );
