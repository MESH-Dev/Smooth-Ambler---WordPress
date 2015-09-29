 <?php get_header(); ?>

    <?php $banner = 0; get_template_part( 'partials/page', 'banner' ); ?>

    <div class="container page-content">

        <div class="two columns">

            <?php get_template_part( 'partials/sidebarNav' ); ?>

        </div>

        <div class="nine columns">

            <div class="row">

                <div class="twelve columns">
                    <h2 class="headline">
                        <?php

                        if(is_category()) {
                            echo 'Category: ';
                        }

                        if(is_tag()) {
                            echo 'Tag: ';
                        }

                        if(is_author()) {
                            echo 'Author: ';
                        }

                        ?>
                        <?php wp_title(''); ?>
                    </h2>
                </div>
            </div>

            <?php if(have_posts()){while(have_posts()){the_post(); ?>

                <div class="row">

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

                            <h2 class="blog-title"><a href="<?php echo get_permalink( get_the_ID() ) ?>"><?php the_title(); ?></a></h2>

                            <!-- Need to come back and make these sit next to each other -->

                            <span class="author"><?php the_author_posts_link() ?></span> &nbsp;<span class="date"><?php the_date('m-d-Y') ?></span>

                            <p><?php the_excerpt(); ?></p>

                            <h4 class="comments"><a href="<?php comments_link(); ?>">Comments (<?php echo get_comments_number(get_the_ID()) ?>)</a></h4>
                            <!--  <span class="categories"><?php echo the_category(', ') ?></span> <span class="tags"><?php the_tags(' ') ?></span>-->

                    

                            <br class="clear" />

                    </div>

                </div>

                <hr/>

            <?php } } ?>

        </div>

    </div>

<?php get_footer(); ?>
