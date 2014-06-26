<?php /*
 * Template Name: Article Sidebar
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <?php if( get_field('banner_image') ): ?>
    <div class="page-banner">
        <?php
          $imageArray = get_field('banner_image');
          $imageAlt = $imageArray['alt'];
          $imageThumbURL = $imageArray['sizes']['page-banner'];
        ?>
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
        <div class=="banner-title"><h2><?php the_title(); ?></h2></div>
    </div>
  <?php endif; ?>


  <div class="container page_content">

    <div class="eight columns">
        <?php the_content(); ?>
    </div>

    <div class="four columns">

        <?php while(has_sub_field('sidebar_content_block')): ?>

            <img src="<?php $image = get_sub_field('image'); echo $image['url']; ?>" />

        <?php endwhile; ?>

    </div>

  </div><!-- End of Container -->

<?php endwhile; ?>


<?php get_footer(); ?>
