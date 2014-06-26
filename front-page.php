<?php get_header(); ?>

<?php get_template_part( 'partials/homepage', 'slider' ); ?>


        <?php if(have_posts()){ while(have_posts()){ the_post(); ?>

        <?php } } ?>

        <div class="container">
            <div class="row">
                <div class="six columns">
                    <iframe src="<?php echo '//player.vimeo.com/video/' . substr(get_field('homepage_video_url'), -8) . '?portrait=0&amp;badge=0&amp;color=b6b7a8' ?>" width="450" height="253" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <div class="six columns">
                    <?php
                    $imageArray = get_field('homepage_row_1_image');
                    $imageAlt = $imageArray['alt'];
                    $imageThumbURL = $imageArray['sizes']['homepage-row-1-image'];
                    ?>
                  <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
                </div>
            </div>

            <div class="row">
                <div class="four columns">

                </div>
                <div class="four columns">

                </div>
                <div class="four columns">
                    
                </div>
            </div>

            <div class="row">
                <div class="four columns">
                    <?php
                    $imageArray = get_field('homepage_row_3_image_1');
                    $imageAlt = $imageArray['alt'];
                    $imageThumbURL = $imageArray['sizes']['four-col-square'];
                    ?>
                  <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
                </div>
                <div class="four columns">
                    <?php
                    $imageArray = get_field('homepage_row_3_image_2');
                    $imageAlt = $imageArray['alt'];
                    $imageThumbURL = $imageArray['sizes']['four-col-square'];
                    ?>
                  <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
                </div>
                <div class="four columns">
                </div>
            </div>
        </div>

<?php get_footer(); ?>
