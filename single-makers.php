<?php /*
 * Makers Post Template
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

    <div class="three columns">
        <?php
              //get parent title
              global $post;
              if(is_page() && $post->post_parent) {
                $pid = $post->post_parent;
                $parent_link = get_permalink( $pid );
                $parent_title = get_the_title($pid);
              }

            //list parent child pages
            if($post->post_parent)
                $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&depth=1");
             else
               $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&depth=1");
             if ($children) { ?>

              <div class="side-nav">
                <?php echo $parent_title; ?>
                <ul>
                  <?php echo $children; ?>
                </ul>
              </div>

        <?php } ?>
        <?php get_sidebar() ?>
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

    <div class="six columns content">
        <h2><?php single_post_title(); ?></h2>
        <span><?php the_author(); ?></span> <span><?php the_date() ?></span>
        <?php the_content(); ?>
    </div>

  </div><!-- End of Container -->

<?php endwhile; ?>


<?php get_footer(); ?>
