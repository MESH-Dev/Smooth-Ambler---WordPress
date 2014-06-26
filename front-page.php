<?php get_header(); ?>

<?php get_template_part( 'partials/homepage', 'slider' ); ?>

 
        <?php if(have_posts()){ while(have_posts()){ the_post(); ?>
      
        <?php } } ?>
      
<?php get_footer(); ?>
