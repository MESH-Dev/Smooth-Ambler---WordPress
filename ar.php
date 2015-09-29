<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title( '|', true, 'right' );  ?>   <?php bloginfo('name'); ?></title>

  <!-- Meta / og: tags
   ================================================== -->


  <meta property="og:site_name" content="Smooth Ambler Spirits" />
  <meta property="og:description" content="Patiently Crafted Appalachian Spirits | Greenbrier County, West Virginia" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="<?php bloginfo('template_url' );?>/assets/img/SA_logo.png" />
  <meta name="description" content="Patiently Crafted Appalachian Spirits | Greenbrier County, West Virginia"/>

  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/arStyle.css" />



  <!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="<?php bloginfo('url' );?>/favicon.ico">
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">

  <?php wp_head(); ?>

<?php

//DISPLAY RANDOM BG IMAGE asdfasdfasdfasdfasdfasdfasdfasdfa
$post_id = 650;
$images = [];

while(has_sub_field('images', $post_id))
{
	$imageArray = get_sub_field('image', $post_id);
	$imageAlt = $imageArray['alt'];
	$imageURL = $imageArray['sizes']['home-banner'];
	$imageURL = $imageArray['url'];
	array_push($images, $imageURL);
}

?>
<style>
html {
  background: url("<?php echo $images[array_rand($images,1)]; ?>") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
body{background:none;}

</style>

</head>
<body >
	<div class="container">

		<div class="six columns ar-callout ">

			 	 <img src="<?php bloginfo('template_url' );?>/assets/img/SA_logo.png" title="Smooth Ambler Spirits" alt="Smooth Ambler Spirits Logo">

				<h2>Age Verification</h2>
				<h4>You must be 21 years of age or older to enter.</h4>


				<div class="four columns header-btns offset-by-one age-btns">
			        <a href="<?php echo $this->modify_url(array('ar'=>'set'));?>" class="button full-width callout-btn"><span class="callout">Over 21</span>  </a>
			        <a class="button callout-btn full-width under21" href="http://www.stopalcoholabuse.gov/"><span class="callout">Under 21</span></a>
			    </div>
			    <div class="clear"> </div>

				<p>Copyright &copy; <?php echo date('Y'); ?> Smooth Ambler Spirits Co Maxwelton, WV</p>


		</div>
		<br class="clear">


	</div>
</body>
</html>
