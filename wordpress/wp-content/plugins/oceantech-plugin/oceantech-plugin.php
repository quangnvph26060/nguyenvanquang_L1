<?php
/*
  Plugin Name: OceanTech Plugin
  Author: Linhdtm
  Description: Plugin Product OceanTech
  Version: 1.0   
 */





function load_css_plugin()
{
  // Đăng ký file CSS
  wp_register_style('style', plugin_dir_url(__FILE__) . '/css/style.css');

  // Thêm file CSS vào trang
  wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_css_plugin');
function load_js_plugin()
{
  // Đăng ký file JavaScript
  wp_register_script('custom-js', plugin_dir_url(__FILE__) . 'js/custom.js');

  // Thêm file JavaScript vào trang
  wp_enqueue_script('custom-js');
}
add_action('wp_enqueue_scripts', 'load_js_plugin');
