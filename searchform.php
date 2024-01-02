<?php

/**
 * Default search form.
 *
 * @package ST
 */
?>

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo get_home_url(); ?>">
    <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="<?php _e('Search …', 'simple-theme') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php _e('Search for:', 'simple-theme') ?>" />
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </div>
        </div>
    </div>
</form>