<?php


function load_scripts() {


   wp_enqueue_style('style',get_template_directory_uri()."/style.css", false,'1.1','all');
   wp_enqueue_script('main',get_template_directory_uri()."/js/main.js",array(),'1.0',true);



}


add_action('wp_enqueue_scripts','load_scripts');


function config(){


   register_nav_menus(
   array(
      'wp_devs_main_menu' => 'Main Menu',
      'wp_devs_footer_menu' => 'Footer Menu'

   ));}

   $args=array(
      'height' => 225,
      'width' => 1920
   );

   add_theme_support('custom-header',$args);
   add_theme_support('post-thumbnails');
   add_theme_support('custom-logo', array(   
      'height'      => 100,
      'width'       => 200,
      'flex-height' => true,
      'flex-width'  => true));


   add_theme_support('automatic-feed-links');
   add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption', 
      'style','script'));
   add_theme_support('title-tag');



add_action('after_setup_theme','config');

function wpdevs_sidebar(){
   register_sidebar(
      array(
         'name' => 'Blog Sidebar',
         'id' => 'sidebar-blog',
         'description' => 'This is the Blog Sidebar. You can add widgets here.',
         'before_widget' => '<div class="widget-wrapper">',
         'after_widget' => '</div>',
         'before_title' => '<h4 class="widget-title">',
         'after_title' => '</h4>'
      )
      );

      register_sidebar(
      array(
         'name' => 'Service 1',
         'id' => 'service-1',
         'description' => 'First Service Section',
         'before_widget' => '<div class="widget-wrapper">',
         'after_widget' => '</div>',
         'before_title' => '<h4 class="widget-title">',
         'after_title' => '</h4>'
      )
      );

      register_sidebar(
      array(
         'name' => 'Service 2',
         'id' => 'service-2',
         'description' => 'Second Service Section',
         'before_widget' => '<div class="widget-wrapper">',
         'after_widget' => '</div>',
         'before_title' => '<h4 class="widget-title">',
         'after_title' => '</h4>'
      )
      );

        register_sidebar(
      array(
         'name' => 'Service 3',
         'id' => 'service-3',
         'description' => 'Third Service Section',
         'before_widget' => '<div class="widget-wrapper">',
         'after_widget' => '</div>',
         'before_title' => '<h4 class="widget-title">',
         'after_title' => '</h4>'
      )
      );

}

add_action('widgets_init', 'wpdevs_sidebar');


?>