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
if ( !defined( 'ABSPATH' ) ) : exit;

define('CLOUD_CHATTER_URL', plugin_dir_url(__FILE__));

//Include plugin CSS
include(plugin_dir_path(__FILE__) . 'includes/cloud-chatter-styles.php');

//Include plugin JS
include(plugin_dir_path(__FILE__) . 'includes/cloud-chatter-scripts.php');



class CloudChatter()
{
  __construct(){
    //constructor class
  }
}