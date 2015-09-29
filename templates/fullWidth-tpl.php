 <?php /*
 * Template Name: Full Width
 */
?>



<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <?php $banner = 0; get_template_part( 'partials/page', 'banner' ); ?>


  <div class="container page-content">

    <div class="twelve columns">
      <?php if (!get_field('banner_image') ) { ?>
          <h1 class="page-title"><?php the_title(); ?></h1>
      <?php  } ?>
      <?php the_content(); ?>
    </div>

  </div><!-- End of Container -->

<?php endwhile; ?>

<?php get_footer(); ?>
