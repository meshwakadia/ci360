<?php
if (!defined('ABSPATH')) exit;

function ci360_setup(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  register_nav_menus(['primary' => __('Primary Menu','ci360-onepage')]);
}
add_action('after_setup_theme','ci360_setup');

function ci360_assets(){
  wp_enqueue_style('ci360-google-fonts','https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap',[],null);
  wp_enqueue_style('ci360-style',get_stylesheet_uri(),[],wp_get_theme()->get('Version'));
  wp_enqueue_script('ci360-script',get_template_directory_uri().'/assets/js/main.js',[],wp_get_theme()->get('Version'),true);
}
add_action('wp_enqueue_scripts','ci360_assets');

function ci360_customize($wp_customize){
  $fields = [
    'hero_title' => ['Hero Title','Stories That Move Brands Forward.'],
    'hero_text' => ['Hero Description','Strategy, creativity, technology and performance—built together to create brands that grow with purpose.'],
    'about_title' => ['About Title','Built for ambitious brands.'],
    'about_text' => ['About Description','CI360 Degrees brings strategy, storytelling, digital performance and technology together to turn business challenges into measurable brand growth.'],
    'contact_email' => ['Contact Email','hello@ci360degrees.com'],
    'contact_phone' => ['Contact Phone','+91 00000 00000']
  ];
  foreach($fields as $key=>$data){
    $wp_customize->add_setting($key,['default'=>$data[1],'sanitize_callback'=>'sanitize_text_field']);
    $wp_customize->add_control($key,['label'=>$data[0],'section'=>'title_tagline','type'=>'text']);
  }
}
add_action('customize_register','ci360_customize');
