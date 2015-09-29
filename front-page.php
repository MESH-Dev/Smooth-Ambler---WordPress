<?php get_header(); ?>

<?php get_template_part( 'partials/homepage', 'slider' ); ?>

        <?php if(have_posts()){ while(have_posts()){ the_post(); ?>

        <?php } } ?>

        <div class="container home-feeds homepage-content">

            <div class="row homepage-row">

                <div class="six columns">
                    <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src="<?php echo '//player.vimeo.com/video/' . substr(get_field('homepage_video_url'), -9) . '?portrait=0&amp;badge=0&amp;color=b6b7a8' ?>" width="450" height="253" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                </div>

                <?php if (get_field('homepage_row_1_content') == 'video') { ?>

                  <div class="six columns">
                      <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src="<?php echo '//player.vimeo.com/video/' . substr(get_field('homepage_row_1_video_2'), -9) . '?portrait=0&amp;badge=0&amp;color=b6b7a8' ?>" width="450" height="253" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                  </div>

                <?php } ?>

                <?php if (get_field('homepage_row_1_content') == 'image') { ?>

                  <?php
                  $imageArray = get_field('homepage_row_1_image');
                  $link1 = get_field('homepage_row_1_link');
                  $imageAlt = $imageArray['alt'];
                  $imageThumbURL = $imageArray['sizes']['homepage-row-1-image'];
                  ?>

                  <div class="six columns red-box">
                    <a href="<?php echo $link1; ?>"><img src="<?php echo $imageThumbURL;?>" target="_blank"></a>
                  </div>

                <?php } ?>

            </div>

            <div class="row homepage-row">

                <div class="four columns twitter">
                <a href="https://twitter.com/SmoothAmbler" target="_blank">
                    <div id="twitfeed">
                        <div class="tweet">
                            <?php get_template_part( 'partials/twitter' ); ?>
                        </div>
                    </div>
                    <i class="fa fa-twitter-square twit-icon fa-2x"></i>
                </a>
                </div>
                <div class="four columns instagram ">
                    <a href="http://instagram.com/smoothambler" target="_blank">
                    <div id="instafeed"></div>
                    <i class="fa fa-instagram insta-icon fa-2x"></i>
                    </a>
                </div>
                <div class="four columns facebook">
                    <?php
                    $imageArray = get_field('homepage_row_2_image_3_facebook');
                    $imageThumbURL = $imageArray['sizes']['square'];
                    ?>
                    <a href="https://www.facebook.com/SmoothAmbler" target="_blank"><img src="<?php echo $imageThumbURL ?>" /></a>

                    <i class="fa fa-facebook-square face-icon fa-2x"></i>

                    <a href="https://www.facebook.com/SmoothAmbler" target="_blank">
                      <div class="facebook-follow-us">Follow us</div>
                      <div class="facebook-on-facebook">on Facebook</div>
                    </a>

                </div>

            </div>

            <div class="row homepage-row">

                <div class="four columns">
                    <?php
                    $imageArray = get_field('homepage_row_3_image_1');
                    $link2 = get_field('homepage_row_3_link_1');
                    $imageAlt = $imageArray['alt'];
                    $imageThumbURL = $imageArray['sizes']['square'];
                    ?>
                    <a href="<?php echo $link2; ?>"><img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>"></a>
                </div>
                <div class="four columns">
                    <?php
                    $imageArray = get_field('homepage_row_3_image_2');
                    $link3 = get_field('homepage_row_3_link_2');
                    $imageAlt = $imageArray['alt'];
                    $imageThumbURL = $imageArray['sizes']['square'];
                    ?>
                    <a href="<?php echo $link3; ?>"><img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>"></a>
                </div>
                <div class="four columns">

                    <div id="wordfeed">
                        <div id="header-bar-small">
                            <h3 class="blog-box"><a href="<?php echo get_permalink(73); ?>">Rickhouse Blog</a></h3>
                        </div>
                        <?php
                            $args = array( 'numberposts' => '1', 'post_status' => 'publish' );
                            $recent_posts = wp_get_recent_posts( $args );
                            foreach( $recent_posts as $recent ){

                                $imageArray = get_field('post_image', $recent["ID"]);
                                $imageAlt = $imageArray['alt'];
                                $imageThumbURL = $imageArray['sizes']['square'];

                                echo '<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'">';

                                ?>

                                <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">

                                <?php
                                echo '<div class="blog-info">' . get_the_title($recent["ID"]) . '</div></a>';
                            }
                        ?>
                    </div>

                </div>

            </div>

            <div class="clear"></div>

        </div>

        <div class="clear"></div>

<?php get_footer(); ?>
