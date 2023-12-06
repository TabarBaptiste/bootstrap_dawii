<?php get_header(); ?>
<div class="container-xl">
    <div class="row">
        <div class="col-lg-8">
            <div class="px-4 pt-5 my-5 text-center border-bottom">

                <?php if(have_posts()) {
                    while(have_posts()) {
                        the_post(); ?>

                        <?php the_title('<h1 class="display-1">', '</h1>'); ?>
                        <div class="col-lg-6 mx-auto">
                            <?php the_content(); ?>

                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                                <a href="<?php the_permalink() ?>" class="btn btn-outline-secondary btn-lg px-4">Secondary </a>
                            </div>
                        </div>

                        <?php asrii_pub(); ?>
                        <?php if(has_post_thumbnail()): ?>
                            <div class="overflow-hidden" style="max-height: 30vh;">
                                <div class="container px-5">
                                    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid border rounded-3 shadow-lg mb-4"
                                        alt="Example image" width="700" height="500" loading="lazy">
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php }
                    ; ?>
                    <?php echo paginate_links() ?>
                <?php } else {
                    asrii_error();
                    get_search_form();
                } ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>