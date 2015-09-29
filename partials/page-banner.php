<?php

if( get_field('banner_image') ): ?>
    <div class="rslides page-banner">
        <?php
          $banner = true;
          $imageArray = get_field('banner_image');
          $imageAlt = $imageArray['alt'];
          $imageThumbURL = $imageArray['sizes']['page-banner'];
        ?>

        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
        <div class="container">
          <div class="banner-title">
            <?php
                $pid = $post->post_parent;
                //$this_id = $post->ID;
                $parent_link = get_permalink( $pid );
                $parent_title = get_the_title($pid);

                if($pid !=0){ ?><h3><?php  echo $parent_title ?></h3><?php } ?>
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="banner-arrow"><img src="<?php bloginfo('template_url' );?>/assets/img/SA_headerarrow.png" alt="" title=""></div>
        </div>
    </div>
<?php endif; ?>
