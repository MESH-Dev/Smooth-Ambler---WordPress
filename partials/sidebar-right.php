 <?php

/*Should we have the ability to add callout text here?... 

*/

while(has_sub_field('sidebar_content_block')): ?>

    <img src="<?php $image = get_sub_field('image'); echo $image['url']; ?>" />

 <?php endwhile; ?>  