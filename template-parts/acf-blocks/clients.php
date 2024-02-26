<?php
    $clients_title = get_field('clients_title', 'option');
    $clients_posts = get_field('clients_posts', 'option');
?>

<?php if ($clients_posts) : ?>
    <section class="clients">
        <?php if ($clients_title) : ?>
            <div class="clients__title h4 animate fade-in">
                <a href="<?php echo get_post_type_archive_link('clients'); ?>">
                    <?php echo $clients_title; ?>
                </a>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="clients__wrap animate fade-up">
                <div class="clients__list">
                    <?php foreach ($clients_posts as $post) : ?>
                        <?php setup_postdata($post); ?>
                        <?php get_template_part('template-parts/feed/card', 'clients'); ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
