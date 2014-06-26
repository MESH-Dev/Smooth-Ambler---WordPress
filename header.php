<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title( '|', true, 'right' );  ?>   <?php bloginfo('name'); ?></title>
  
  <!-- Meta / og: tags
   ================================================== -->
  <?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>
  <!-- the default values -->
 

  <!-- if page is content page -->
  <?php if (is_single()) { ?>
  <meta property="og:url" content="<?php the_permalink() ?>"/>
  <meta property="og:title" content="<?php single_post_title(''); ?>" />
  <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
  <meta property="og:type" content="article" />
  <meta property="og:image" content="<?php bloginfo('template_url' );?>/assets/img/SA_logo.png" />

  <!-- if page is others -->
  <?php } else { ?>
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
  <meta property="og:description" content="<?php bloginfo('description'); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="<?php bloginfo('template_url' );?>/assets/img/SA_logo.png" /> <?php } ?>

  <!-- CSS 
  ================================================== -->
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/style.css" />


  <!-- Typekit
  ================================================== 
  <script type="text/javascript" src="//use.typekit.net/byu7jsq.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>-->

  <!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="<?php bloginfo('url' );?>/favicon.ico">
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">

  <?php wp_head(); ?>
</head>


<body>

<div id="header-bar"></div>
<header>
  <div class="container">
      
    <div class="six columns offset-by-three logo " >
      <a href="<?php bloginfo( 'url' );?>" title="<?php bloginfo( 'name' );?>"><img src="<?php bloginfo('template_url' );?>/assets/img/SA_logo.png" title="Smooth Ambler Spirits" alt="Smooth Ambler Spirits Logo"></a>
      <div class="tagline">HANDMADE AND HAND-PICKED IN GREENBRIER COUNTY, WEST VIRGINIA</div>
    </div>

    <div class="three columns header-btns" >
        <a href="#" class="button full-width callout-btn"><span class="callout">Find It Now</span> store locator</a>
        <a href="#" class="button full-width ">Sign up for emails</a>
    </div>

    <br class="clear"/>
 
    <div id="mainNav" class="twelve columns">
    
        <?php if(has_nav_menu('main_nav')){
            $defaults = array(
            	'theme_location'  => 'main_nav',
            	'menu'            => 'main_nav',
            	'container'       => false,
            	'container_class' => '',
            	'container_id'    => '',
            	'menu_class'      => 'menu',
            	'menu_id'         => '',
            	'echo'            => true,
            	'fallback_cb'     => 'wp_page_menu',
            	'before'          => '',
            	'after'           => '',
            	'link_before'     => '',
            	'link_after'      => '',
            	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            	'depth'           => 0,
            	'walker'          => ''
            ); wp_nav_menu( $defaults );
          }else{
            echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
          } ?>
      
    </div>
    
  </div> <!-- End Container -->
</header>


