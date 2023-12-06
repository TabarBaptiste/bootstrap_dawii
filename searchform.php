<form class="d-flex" role="search" method="get" action="<?= esc_url(home_url('/')); ?>">
    <div class="form-floating mb-3 flex-grow-1">
        <input type="text" class="form-control" value="<?php get_search_query(); ?>" id="floatingInput"
            placeholder="Mot recherché" name="s">
        <label for="floatingInput">Mot recherché...</label>

    </div>
    <input class="btn btn-primary mb-3" type="submit" value="<?= esc_attr_x('Search', 'submit button'); ?>">
</form>