<?php
/*
Plugin Name:     Expert Blog Layout
Plugin URI:      http://domain.com
Version:         1.0.0
Description:     Customize your blog in more unique and creative ways.
Author:          Kanwar Fahad
Author URI:      http://domain.com
License:         GPL2


Expert Blog Layout is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Expert Blog Layout is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Expert Blog Layout}. If not, see {URI to Plugin License}.

*/

if ( ! defined( "ABSPATH" ) ) exit; // Exit if accessed directly

// CSS Includes
function blog_enqueue_scripts() {
    wp_enqueue_style('expert-blog-layout-grid-css', plugins_url() .'/expert-blog-layout/assets/css/custom-grid-css.css', array());
    wp_enqueue_style('expert-blog-layout-css', plugins_url() .'/expert-blog-layout/assets/css/blog-css.css', array());   
    wp_enqueue_style('expert-blog-layout-font-awesome', plugins_url() .'/expert-blog-layout/assets/css/fontawesome/all.min.css', array()); 
}
add_action( 'wp_enqueue_scripts', 'blog_enqueue_scripts' );


// Plugin Menu
function blog_layout_function(){
    require_once('admin/expert-blog-admin.php');
}

function blog_documentation(){
    require_once('admin/documentation.php');
}

add_action('admin_menu', 'blog_plugin_menu');

function blog_plugin_menu(){
    add_menu_page('EBL Shortcode Page' , 'EBL Shortcode', 'administrator', 'blog_layout', 'blog_layout_function', 'dashicons-format-gallery', 30);
    add_submenu_page('blog_layout', 'Documentation', 'Documentation', 'administrator', 'blog_documentation', 'blog_documentation');
}


// Include Shortcodes
require_once('shortcodes/shortcode-functions.php');

// Include CSS for admin pages
add_action('ebl_scripts','ebl_admin_styles');
function ebl_admin_styles(){
	 wp_enqueue_style('expert-blog-layout-font-awesome', plugins_url() .'/expert-blog-layout/assets/css/fontawesome/all.min.css', array()); 
	 wp_enqueue_style('ebl-admin-grid-styles', plugins_url() .'/expert-blog-layout/assets/css/custom-grid-css.css', array());
     wp_enqueue_style('ebl-admin-styles', plugins_url() .'/expert-blog-layout/admin/assets/css/admin-styles.css', array());
     wp_enqueue_style('fancy-box-css', plugins_url() .'/expert-blog-layout/admin/assets/css/jquery.fancybox.css', array());
     wp_enqueue_script('fancy-box-pack', plugins_url() .'/expert-blog-layout/admin/assets/js/jquery.fancybox.js', array());
     wp_enqueue_script('fancy-box-js', plugins_url() .'/expert-blog-layout/admin/assets/js/jquery.fancybox.pack.js', array());    
}

?>