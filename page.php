<?php /*
 * Default Page Template
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <?php if( get_field('banner_image') ): ?>
    <div class="page-banner">
        <?php 
          $imageArray = get_field('banner_image');
          $imageAlt = $imageArray['alt']; 
          $imageThumbURL = $imageArray['sizes']['page-banner'];  
        ?>
        <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>"> 
        <div class=="banner-title"><h2><?php the_title(); ?></h2></div>
    </div>
  <?php endif; ?>


  <div class="container page-content"> 
  
    <div class="two columns">
        <?php 
              //get parent title
              global $post;
              if(is_page() && $post->post_parent) {
                $pid = $post->post_parent;
                $parent_link = get_permalink( $pid );
                $parent_title = get_the_title($pid);
              } 
   
            //list parent child pages
            if($post->post_parent)
                $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&depth=1");
             else
               $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&depth=1");
             if ($children) { ?>
              
              <div class="side-nav">
                <?php echo $parent_title; ?>
                <ul>
                  <?php echo $children; ?>
                </ul>  
              </div>    
                      
        <?php } ?>
    </div>  

    <?php if( get_field('second_column') ):  //TWO COLUMNS?>
      <div class="five columns content">
        <?php the_content(); ?>
      </div>
      <div class="five columns content">
        <?php the_field('second_column') ?>
      </div>


    <?php else: //ONE COLUMN ONLY?>

      <div class="eight columns content">
        <?php the_content(); ?>
      </div>

    <?php endif; ?> 

  </div><!-- End of Container -->

<?php endwhile; ?>  


<?php get_footer(); ?>