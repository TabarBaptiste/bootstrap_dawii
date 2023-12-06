<?php if(is_active_sidebar('footer')) { ?>
    <div class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar('footer'); ?>
            </div>
        </div>
    </div>
<?php } ?>
</body>
<?php wp_footer(); ?>

</html>