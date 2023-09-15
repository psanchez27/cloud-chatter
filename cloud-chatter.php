<?php
/*
  Plugin Name: Cloud Chatter
  Description: A chatbot plugin for WordPress websites
  Version: 1
  Contributors: Pablo Sanchez
  Requires at least: 5.2
  Requires PHP: 7.2
  Author: Pablo Sanchez
  Author URI: https://pablosanchezdeveloper.com/
*/

//If this file is called directly, abort
if ( !defined( 'ABSPATH' ) ) {
  die;
}

define('CLOUD_CHATTER_URL', plugin_dir_url(__FILE__));


class CloudChatter()
{
  __construct() {
    //constructor class
  }

  function register() {
    add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
  }

  //plugin activation code
  function activate() {
    //flush rewrite news
    flush_rewrite_rules();
  }

  //plugin deactivation code
  function deactivate() {
    //flush rewrite news
    flush_rewrite_rules();
  }

  //enqueue scripts and styles
  function enqueue() {
    //admin styles
    wp_enqueue_style( 'cloud_chatter_admin_styles', plugin_url( 'assets/css/cloud-chatter-admin-styles.css' ) );
    //admin scripts
    wp_enqueue_script( 'cloud-_chatter_admin_scripts', plugin_url( 'assets/js/cloud-chatter-admin-scripts.js' ) );
  }
}

if( class_exists( 'CloudChatter' ) ) {
  $ccPlugin = new CloudChatter();
  $ccPlugin->register();
}

//upon plugin activation
register_activation_hook( __FILE__, array( $ccPlugin, 'activate' ) );

//upon plugin deactivation
register_deactivation_hook( __FILE__, array( $ccPlugin, 'deactivate' ) );