 <div>

    <div class="side-nav">

        <li class="content-desktop"><a href="<?php bloginfo('url') ?>/rickhouse-blog">Blog Menu</a></li>
        <li class="content-mobile"><a id="online-btn">Blog Menu</a></li>

    </div>

    <div class="content-mobile">
        <div id="online-wrap">

            <div class="side-nav">
                <?php dynamic_sidebar( 'blog-sidebar' ); ?>
            </div>

            <div class="inner-side-nav-1">

                <ul>
                    <?php
                    $args = array(
                    'orderby' => 'name',
                    'order' => 'ASC'
                    );
                    $categories = get_categories($args);
                    foreach($categories as $category) {
                        echo '<li><a href="' . get_category_link( $category->term_id ). '">' . $category->name.'</a> </li> ';}
                    ?>
                </ul>

            </div>

            <div class="inner-side-nav-2">

                <ul>
                    <?php
                    $args = array(
                    'orderby' => 'name',
                    'order' => 'ASC'
                    );
                    $tags = get_tags($args);
                    foreach($tags as $tag) {
                        echo '<li><a href="' . get_tag_link( $tag->term_id ). '">' . $tag->name.'</a> </li> ';}
                    ?>
                </ul>

            </div>

        </div>
        <br/>
    </div>

    <div class="content-desktop">

        <div>
            <div class="side-nav">
                <?php dynamic_sidebar( 'blog-sidebar' ); ?>
            </div>

            <div class="inner-side-nav-1">

                <ul>
                    <?php
                    $args = array(
                    'orderby' => 'name',
                    'order' => 'ASC'
                    );
                    $categories = get_categories($args);
                    foreach($categories as $category) {
                        echo '<li><a href="' . get_category_link( $category->term_id ). '">' . $category->name.'</a> </li> ';}
                    ?>
                </ul>

            </div>

            <div class="inner-side-nav-2">

                <ul>
                    <?php
                    $args = array(
                    'orderby' => 'name',
                    'order' => 'ASC'
                    );
                    $tags = get_tags($args);
                    foreach($tags as $tag) {
                        echo '<li><a href="' . get_tag_link( $tag->term_id ). '">' . $tag->name.'</a> </li> ';}
                    ?>
                </ul>

            </div>
        </div>

    </div>

</div>
