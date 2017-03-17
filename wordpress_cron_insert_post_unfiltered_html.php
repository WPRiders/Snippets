<?php 

$save_post = array(
	'post_author'  => $the_awesome,
	'post_content' => $your_awesome_content,
	'post_title'   => $your_awesome_title,
	'post_status'  => 'publish',
);

/*
 * The CRON doesn't have the capability to save unfiltered HTML content
 * Consequences: It removes the data-original needed for lazy load in my case and some other tags
 * We disable it as it happens for administrator
 */
 kses_remove_filters();
 $id = wp_insert_post( $save_post, true );
 /*
 * Then we enable it back on :)
 */
 kses_init_filters();
 
 if ( ! is_wp_error( $id ) ) {
 	// Your awesome code here :)
 }
 
 // Information about kses_init_filters and kses_remove_filters 
 // are found in the method kses_init, the file is located in wp-includes/kses.php
 // search the file for "function kses_init()"
 
 
/*
This snippet is part of the article published here:
http://www.wpriders.com/snippets/wordpress-cron-s…red-html-content/
In case you want to work with us, please post your task here:
www.wpriders.com/hire-us-ref
*/
