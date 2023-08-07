<?php

//Load Styles
function cloud_chatter_styles(){
  wp_enqueue_style( 'cloud-chatter-frontend-styles', CLOUD_CHATTER_URL , '/css/cloud-chatter-frontend-styles.css', [], time(), 'all' );
}

add_action( 'wp_enqueue_scripts', 'cloud_chatter_styles' );