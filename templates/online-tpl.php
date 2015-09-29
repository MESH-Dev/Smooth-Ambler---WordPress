<?php /*
 * Template Name: Buy Online
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


<?php $banner = 0; get_template_part( 'partials/page', 'banner' ); ?>


<div class="container page-content">

 <div class="twelve columns">

     <h1 class="page-title"><?php the_title(); ?></h1>

    <?php the_content(); ?>

 </div>

 <div class="nine columns">
   <blockquote>
     <?php the_field('buy_online_callout'); ?>
   </blockquote>
 </div>

 
 <div class="clear"></div>

  <div id="online-wrap"><div class="seven columns">
   <?php
   if( have_rows('online_locations') ): ?>
     <div class="six columns table-border loc-separator"></div><div class="clear"></div>
       <?php
       while ( have_rows('online_locations') ) : the_row();

           $name = get_sub_field('name');
           $link = get_sub_field('link');

     ?>

     <div class="one columns table-row"> <i class="fa fa-shopping-cart"></i></div>

     <div class="three columns table-row">
       <h5><?php echo $name; ?></h5>
     </div>

     <div class="two columns table-row">
       <a href="<?php echo $link; ?>" title="<?php echo $name; ?>" target="_blank"> Buy it now!</a>
     </div>
     <div class="clear"></div>
     <div class="six columns table-border loc-separator"></div>
     <div class="clear"></div>

      <?php

       endwhile;

   endif;

   ?>
 </div>
   <div class="three columns m-o-m">
    <?php
      $rc_link = get_field('rc_link');
      $rc_img = get_field('rc_image');
      $img_url = $rc_img['sizes']['three-col-square']
    ?>
  <a title="Shop for Smooth Ambler Spirits on Master of Malt http://www.masterofmalt.com" href="<?php echo $rc_link ?>" target="_blank">
    <img alt="<?php echo $rc_img['alt']?>" src="<? echo $img_url ?>"></a>

</div>
   <div class="clear"></div>

  </div>



</div><!-- End of Container -->

<?php endwhile; ?>


<?php get_footer(); ?>
