<?php

/**
 * Trigger this file on uninstall
 * 
 * @package CloudChatterPlugin
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
  die;
}

//Remove all data from database
global $wpdb;
$wpdb->query( "DELETE FROM wp_posts WHERE post_type = 'book'" );
$wpdb->query( "DELETE FROM wp_post_meta WHERE post_id NOT IN (SELECT id FROM wp_posts)" );
$wpdb->query( "DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)" );