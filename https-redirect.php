<?php
/*
Plugin Name: HTTPS Redirect
Description: Each Request will be redirected to https automatically
Version:     1.0
Author:      Vindecodex
*/
add_action('template_redirect', 'redirect_core', 50);
add_action('init', 'redirect_core', 50);
add_action('wp_loaded', 'redirect_core', 50);
function redirect_core(){
  if (!is_ssl()) {
    wp_redirect('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301);
    exit();
  }
}
