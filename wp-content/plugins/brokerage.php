<?php
/*
Plugin Name: Brokerage
Plugin URI: http://www.indigo-river.com
Description: Brokerage
Version: 1.0
Author: Michael Rennison
Author URI: http://www.indigo-river.com
License: GPL
*/

	add_action('init', 'build_taxonomies_brokerage');

	function build_taxonomies_brokerage() {
    	$args = array(
        	'label' => __('Brokerage'),
        	'singular_label' => __('Brokerage'),
        	'public' => true,
        	'show_ui' => true,
        	'capability_type' => 'page',
        	'hierarchical' => true,
        	//'rewrite' => array("slug" => "news"),
        	'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),

        );

    	register_post_type( 'Brokerage' , $args );

		register_taxonomy("brokeragecat", array("brokerage"), array("hierarchical" => true, "label" => "Add Brokerage Category", "singular_label" => "Add Category", "rewrite" => true, "show_ui" => true));
	}






?>
