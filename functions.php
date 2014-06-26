<?php
  //enqueue scripts and styles *use production assets. Dev assets are located in assets/css and assets/js
  function SmoothAmbler_scripts() {
  	wp_enqueue_script( 'script-name', get_template_directory_uri().'/assets/prod/WPStarter.js', array('jquery'), '1.0.0', true );
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/libs/font-awesome-4.1.0/css/font-awesome.min.css');
     wp_register_script('slider', get_template_directory_uri() . '/assets/js/responsiveslides.min.js');   //concat this with WPStarter...
  }
  add_action( 'wp_enqueue_scripts', 'SmoothAmbler_scripts' );

  //theme supports
  add_theme_support('post-thumbnails');
  add_image_size('page-banner', 1800, 400, true);

  add_image_size('homepage-row-1-image', 450, 253, true);

  add_image_size('four-col-square', 290, 290, true);
  add_image_size('three-col-square', 210, 210, true);

  add_theme_support('html5');
  add_theme_support('automatic-feed-links');

  //menus
  register_nav_menus(array(
  	'main_nav' => 'Header and breadcrumb trail heirarchy',
  	'social_nav' => 'Social menu used throughout'
  ));

  //widgets
  register_sidebar(array(
	   'name'          => __( 'blog-sidebar' ),
	   'id'            => 'blog-sidebar',
	   'description'   => '',
     'class'         => '',
	   'before_widget' => '',
	   'after_widget'  => '',
	   'before_title'  => '<h2>',
	   'after_title'   => '</h2>' ));

  //editor style
  add_editor_style('assets/wp-admin/custom-editor-style.css');

  //login page style
  function WPS_loginCSS() {
	   echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/assets/img/wp-login.css"/>';
  } add_action('login_head', 'WPS_loginCSS');

  //footer attribution
  function WPS_footer_admin () {
	   echo 'Theme developed by <a href="http://meshfresh.com.com">MESH</a>.';
  } add_filter('admin_footer_text', 'WPS_footer_admin');

  //disable code editors
  define('DISALLOW_FILE_EDIT', true);

?>
