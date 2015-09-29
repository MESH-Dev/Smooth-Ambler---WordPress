 <?php /*
 * Makers Post Template
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


<?php get_template_part( 'partials/page', 'banner' ); ?>


  <div class="container page-content">

    <div class="two columns side-nav">
        <?php
          $args = array(
            'post_type'  =>'spirits',
            'title_li'   => '',
            'sort_order' => 'ASC'
          );
          wp_list_pages( $args );
          ?>
    </div>

    <div class="five columns content">

        <?php if( get_field('spirits_image') ): ?>
          <div class="post-image">
              <?php
                $imageArray = get_field('spirits_image');
                $imageAlt = $imageArray['alt'];
                $imageThumbURL = $imageArray['sizes']['five-col-square'];
              ?>
              <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
          </div>
        <?php endif; ?>

        <h2 class="content-mobile"><?php the_title(); ?></h2>

        <?php the_content(); ?>

    </div>

    <div class="five columns makers">
        <h2 class="content-desktop"><?php the_title(); ?></h2>

        <?php the_field('second_column'); ?>
    </div>

  </div><!-- End of Container -->

<?php endwhile; ?>


<?php get_footer(); ?>
