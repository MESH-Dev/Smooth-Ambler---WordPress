 <?php get_header(); ?>

  <?php
   $cocktails_page = 392;
   if( get_field('banner_image',$cocktails_page) ): ?>
      <div class="rslides page-banner">
          <?php
            $banner = true;
            $imageArray = get_field('banner_image',$cocktails_page);
            $imageAlt = $imageArray['alt'];
            $imageThumbURL = $imageArray['sizes']['page-banner'];
          ?>
          <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
          <div class="container">

                <div class="banner-title">
                  <h1><?php echo get_the_title($cocktails_page); ?></h1>
                </div>

            <div class="banner-arrow"><img src="<?php bloginfo('template_url' );?>/assets/img/SA_headerarrow.png" alt="" title=""></div>
          </div>
      </div>
  <?php endif; ?>

  <div class="container landing-grid">
      <div class="twelve columns filter-links">
          <?php
          //GET Spirit types and generate links w/ data-filter attr
          $terms = get_terms("spirittype");
           if ( !empty( $terms ) && !is_wp_error( $terms ) ){
               echo "<ul>";
               foreach ( $terms as $term ) {
                 echo '<li><a href="#" data-filter="'. $term->name  .'">' . $term->name . '</a></li>';

               }
               echo '<li class="view-all"><a href="#" data-filter="all">View All</a></li>';
               echo "</ul>";
           }
           ?>
      </div>
  </div>

  <div class="container landing-grid" >
    <div id="cocktails">
    <?php if(have_posts()){while(have_posts()){the_post(); ?>

        <?php

          //GET Spirit types for each post and add data-cat to each cocktail post block
          $terms = get_the_terms( $post->ID, 'cocktailtype' );
          if ( $terms && ! is_wp_error( $terms ) ) :
            $spirits = '';

            foreach ( $terms as $term ) {
              $spirits  = $spirits . $term->name . ' ';
            }

            endif;
          ?>

          <div class="four columns maker-block <?php echo $spirits; ?>">
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

          </div>


    <?php } } ?>
     </div>


  </div>

<?php get_footer(); ?>
