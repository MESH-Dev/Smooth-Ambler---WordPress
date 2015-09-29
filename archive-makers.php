 <?php get_header(); ?>

  <?php
   $makers_page = 207;
   if( get_field('banner_image',$makers_page) ): ?>
      <div class="rslides page-banner">
          <?php
            $banner = true;
            $imageArray = get_field('banner_image',$makers_page);
            $imageAlt = $imageArray['alt'];
            $imageThumbURL = $imageArray['sizes']['page-banner'];
          ?>
          <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" class="banner-image">
          <div class="container">
            <div class="banner-title">
              <h1><?php echo get_the_title($makers_page); ?></h1>
            </div>
            <div class="banner-arrow"><img src="<?php bloginfo('template_url' );?>/assets/img/SA_headerarrow.png" alt="" title=""></div>
          </div>
      </div>
  <?php endif; ?>

  <div class="container landing-grid">

    <?php if(have_posts()){while(have_posts()){the_post(); ?>

        <div class="four columns maker-block">
            <?php if( get_field('post_image') ): ?>
              <div class="post-image">
                  <?php
                    $imageArray = get_field('post_image');
                    $imageAlt = $imageArray['alt'];
                    $imageThumbURL = $imageArray['sizes']['four-col-square'];
                  ?>
                  <a href="<?php echo get_permalink() ?>"><img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>"></a>
              </div>
            <?php endif; ?>
            <h2><a href="<?php echo get_permalink() ?>"> <?php  the_title(); ?> </a></h2>
            <h3><?php the_field('makers_job_title');?></h3>

        </div>

    <?php } } ?>


  </div>

<?php get_footer(); ?>
