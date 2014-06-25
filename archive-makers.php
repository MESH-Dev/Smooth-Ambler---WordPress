<?php get_header(); ?>

    <div class="container">

        <div class="three columns">
            <?php get_sidebar() ?>
        </div>

        <div class="nine columns">

            <?php if(have_posts()){while(have_posts()){the_post(); ?>

                <div class="three columns">
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

                <div class="five columns">
                    <div class="post-entry">
                        <div class="gutter">
                          <h3><?php the_title(); ?></h3>
                          <div class="post-meta">

                          </div>
                          <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                          </div>
                        </div>
                    </div>
                </div>

                <br class="clear" />

            <?php } } ?>

        </div>

    </div>

<?php get_footer(); ?>
