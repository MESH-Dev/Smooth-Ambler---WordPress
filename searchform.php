 <form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo('url')?>">
    <div>
        <input class="search-field" type="text" placeholder="Search..." value="<?php get_search_query(); ?>" name="s" id="s" />
        <button type="submit" class="button full-width" value="Search">Search</button>
    </div>
</form>
