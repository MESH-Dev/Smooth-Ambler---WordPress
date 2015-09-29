 <?php get_header(); ?>

    <div class="container page-content">

        <div class="two columns">

            <?php get_template_part( 'partials/sidebarNav' ); ?>

        </div>

        <div class="nine columns">

            <div class="row">
                <div class="twelve columns">
                    <h2 class="headline">Search Results: "<?php if ( is_search() ) { echo the_search_query(); } ?>" </h2>
                </div>
            </div>

            <?php if(have_posts()){while(have_posts()){the_post(); ?>

                <div class="row">

                    <div class="nine columns">

                            <h2 class="blog-title"><a href="<?php echo get_permalink( get_the_ID() ) ?>"><?php the_title(); ?></a></h2>

                            <!-- Need to come back and make these sit next to each other -->



                            <!-- Need to add the categories here -->

                            <br class="clear" />

                    </div>

                </div>

                <hr/>

            <?php } } ?>

            <?php
            global $wp_query;

            $big = 999999999; // need an unlikely integer

            echo paginate_links( array(
            	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            	'format' => '?paged=%#%',
            	'current' => max( 1, get_query_var('paged') ),
            	'total' => $wp_query->max_num_pages
            ) );
            ?>

        </div>

    </div>

<?php get_footer(); ?>
