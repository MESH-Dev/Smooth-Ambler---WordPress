 <?php /*
 * Template Name: Map
 */
?>



<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

   <div class="container page-content">

    <div class="twelve columns">

        <h1 class="page-title"><?php the_title(); ?></h1>

     	<?php the_content(); ?>

    </div>

    <div class="three columns">
    	<a id="online-btn" class="button full-width callout-btn" href="<?php echo get_permalink(get_page_by_title('Buy Online')); ?>">
    		<span class="callout">Buy Online</span>
    		- Can't wait -
    	</a>
    </div>
    <div class="nine columns">
    	<blockquote>
    		<?php the_field('buy_online_callout'); ?>
    	</blockquote>
    </div>

    <div class="clear"></div>

   	<!-- <div id="online-wrap">
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

  			<div class="three columns table-row">
  				<a href="<?php echo $link; ?>" title="<?php echo $name; ?>"> Buy it now!</a>
  			</div>
  			<div class="clear"></div>
  			<div class="six columns table-border loc-separator"></div>
  			<div class="clear"></div>

  		 	<?php

  		    endwhile;

  		endif;

  		?>
  		<div class="clear"></div> -->

 	  </div>



  </div><!-- End of Container -->

<?php endwhile; ?>

<?php get_footer(); ?>
