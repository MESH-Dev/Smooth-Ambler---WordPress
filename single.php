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


  <div class="container page-content">

    <div class="row">

        <div class="three columns">

            <?php get_template_part( 'partials/sidebarNav' ); ?>

        </div>

        <div class="six columns content">
            <h2><?php single_post_title(); ?></h2>
            <span class="author"><?php the_author_posts_link() ?></span> &nbsp;<span class="date"><?php the_time('m-d-Y') ?></span>
            <p><?php the_content(); ?></p>
        </div>

        <div class="three columns">
          <?php if( get_field('post_image') ): ?>
          <div class="post-image">
            <?php
              $imageArray = get_field('post_image');
              $imageAlt = $imageArray['alt'];
              $imageThumbURL = $imageArray['sizes']['four-col-square'];
            ?>
            <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
          </div>
          <?php endif; ?>
        </div>

    </div>

    <div class="row">
        <div class="three columns">
            <br/>
        </div>
        <div class="six columns">
        <?php if ( comments_open() || get_comments_number() ) {
				comments_template();
			} ?>
        </div>
    </div>

  </div><!-- End of Container -->

<?php endwhile; ?>


<?php get_footer(); ?>
