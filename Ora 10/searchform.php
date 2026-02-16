<form  action="" role="search" id="searchform" method="get" action="<?php echo esc_url(home_url('/')) ?>" >

    <div>
        <label for="s" class="screen-reader-text">Search for:</label>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s">
        <input type="sumbit" value="<?php echo get_search_query(); ?>" name="s" id="s">
    </div>
</form>