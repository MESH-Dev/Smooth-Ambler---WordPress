<?php /*
 * Default Post Template
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

    <div class="three columns">
        <ul>
            <li><h4>Blog Menu</h4></li>
            <li><h4>Archives</h4></li>
            <li><h4>Search</h4></li>

            <!-- Need to come bck and fix this -->
        </ul>
    </div>

    <div class="six columns content">
        <h2><?php single_post_title(); ?></h2>
        <h3><?php the_author(); ?></h3>
        <h4><?php the_date() ?></h4>
        <p><?php the_content(); ?></p>
    </div>

    <div class="three columns content">

        <?php if( get_field('post_image') ): ?>
          <div class="post-image">
              <?php
                $imageArray = get_field('post_image');
                $imageAlt = $imageArray['alt'];
                $imageThumbURL = $imageArray['sizes']['page-banner'];
              ?>
              <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
          </div>
        <?php endif; ?>

    </div>

  </div><!-- End of Container -->

<?php endwhile; ?>


<?php get_footer(); ?>
