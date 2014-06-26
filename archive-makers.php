<?php get_header(); ?>

    <div class="container page_content">

        <div class="twelve columns">

            <?php if(have_posts()){while(have_posts()){the_post(); ?>

                <div class="four columns">
                    <?php if( get_field('post_image') ): ?>
                      <div class="post-image">
                          <?php
                            $imageArray = get_field('post_image');
                            $imageAlt = $imageArray['alt'];
                            $imageThumbURL = $imageArray['sizes']['page-banner'];
                          ?>
                          <a href="<?php echo get_permalink( get_the_ID() ) ?>"><img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>"></a>
                      </div>
                    <?php endif; ?>
                </div>

            <?php } } ?>

        </div>

    </div>

<?php get_footer(); ?>
