 <div class="two columns page-side-nav">
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

          <ul>
            <?php echo $children; ?>
          </ul>

    <?php }
          else{
            echo "&nbsp;";
          } ?>
</div>
