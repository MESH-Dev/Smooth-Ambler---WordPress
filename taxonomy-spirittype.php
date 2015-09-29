 <?php get_header(); ?>

  <?php
   $spirits_page = 205;
   if( get_field('banner_image',$spirits_page) ): ?>
      <div class="rslides page-banner">
          <?php
            $banner = true;
            $imageArray = get_field('banner_image',$spirits_page);
            $imageAlt = $imageArray['alt'];
            $imageThumbURL = $imageArray['sizes']['page-banner'];
          ?>
          <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
          <div class="container">
            <div class="banner-title">
              <h3><?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?></h3>
              <h1><?php echo get_the_title($spirits_page); ?></h1>
            </div>
            <div class="banner-arrow"><img src="<?php bloginfo('template_url' );?>/assets/img/SA_headerarrow.png" alt="" title=""></div>
          </div>
      </div>
  <?php endif; ?>

  <div class="container landing-grid">

    <?php $i = 0 ?>

    <?php if(have_posts()){while(have_posts()){the_post(); ?>

        <div class="four columns maker-block">
            <?php if( get_field('spirits_image') ): ?>
              <div class="post-image">
                  <?php
                    $imageArray = get_field('spirits_image');
                    $imageAlt = $imageArray['alt'];
                    $imageThumbURL = $imageArray['sizes']['four-col-square'];
                  ?>
                  <a href="<?php echo get_permalink() ?>"><img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>"></a>
              </div>
            <?php endif; ?>
            <h2><a href="<?php echo get_permalink() ?>"> <?php  the_title(); ?> </a></h2>

        </div>

    <?php } } ?>


  </div>

<?php get_footer(); ?>
