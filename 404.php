<?php get_header(); ?>

<section class="error-page">
    <div class="container">
        <div class="error-page__wrap">
            <div class="error-page__title text-center">
                <h1>404</h1>
            </div>
            <div class="error-page__subtitle text-center">
                <?php echo _e('Page not found');?>
            </div>
            <div class="error-page__btn d-flex justify-content-center">
                <a href="<?php echo home_url(); ?>" class="button button--dark button--lg"><?php _e('Home'); ?></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>