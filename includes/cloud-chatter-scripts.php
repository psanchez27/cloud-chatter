<?php

//Load JS on the front end
function cloud_chatter_scripts(){
  wp_enqueue_script( 'cloud-chatter-frontend-scripts', CLOUD_CHATTER_URL . '/js/cloud-chatter-frontend-scripts.js', [], time(), true );
}

add_action( 'wp_enqueue_scripts', 'cloud_chatter_scripts' );