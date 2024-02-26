<?php get_header(); ?>

    <div class="page-content animate fade-up">
        <div class="container--medium">
            <div class="page-content__wrap row">
                <div class="col-12 col-lg-9">
                    <?php get_template_part('template-parts/single/article'); ?>
                </div>
                <div class="col-12 col-lg-3">
                    <?php get_template_part('template-parts/single/sidebar'); ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>