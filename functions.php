<?php
  //enqueue scripts and styles *use production assets. Dev assets are located in assets/css and assets/js
  function SmoothAmbler_scripts() {

    wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/libs/font-awesome-4.1.0/css/font-awesome.min.css');
    wp_enqueue_script('slider', get_template_directory_uri() . '/assets/js/responsiveslides.min.js');   //concat this with WPStarter...

    wp_enqueue_script( 'smoothAmbler', get_template_directory_uri().'/assets/js/smoothAmbler.js', array('jquery'), '1.0.0', true );

    wp_deregister_script('jquery');
    wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
    wp_enqueue_script('jquery');

    wp_enqueue_script('jquery-ui',"//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js");

    wp_enqueue_script('instagram', get_template_directory_uri() . '/assets/js/instafeed.min.js');
    wp_enqueue_script('hammerjs', get_template_directory_uri() . '/bower_components/hammerjs/hammer.js');

     }
  add_action( 'wp_enqueue_scripts', 'SmoothAmbler_scripts' );

  //theme supports
  add_theme_support('post-thumbnails');
  add_image_size('page-banner', 1800, 400, true);
  add_image_size('home-banner', 1800, 800, true);

  add_image_size('homepage-row-1-image', 450, 253, true);
  add_image_size('five-col-square', 375, 375, true);
  add_image_size('four-col-square', 290, 290, true);
  add_image_size('three-col-square', 210, 210, true);
    add_image_size('square', 420, 420, true);

  add_theme_support('html5');
  add_theme_support('automatic-feed-links');

  add_post_type_support( 'spirittype', 'page-attributes' );

  //menus
  register_nav_menus(array(
  	'main_nav' => 'Header and breadcrumb trail heirarchy',
  	'social_nav' => 'Social menu used throughout',
    'responsive_nav' => 'Menu on mobile'
  ));

  //widgets
  register_sidebar(array(
	   'name'          => __( 'blog-sidebar' ),
	   'id'            => 'blog-sidebar',
	   'description'   => '',
       'class'         => '',
	   'before_widget' => '',
	   'after_widget'  => '',
	   'before_title'  => '<li>',
	   'after_title'   => '</li>' ));

  register_sidebar(array(
	   'name'          => __( 'constant-contact' ),
	   'id'            => 'constant-contact',
	   'description'   => '',
       'class'         => '',
	   'before_widget' => '<div id="contactContactModal">',
	   'after_widget'  => '</div>',
	   'before_title'  => '<h2>',
	   'after_title'   => '</h2>' ));

  //editor style
  add_editor_style('assets/wp-admin/custom-editor-style.css');

  //shorten the excerpt
  function custom_excerpt_length( $length ) {
  return 25;
  }
  add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

  //read more link on the excerpt
  function new_excerpt_more( $more ) {
  return '<br/><a class="read_more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
  }
  add_filter( 'excerpt_more', 'new_excerpt_more' );

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
