<?php get_header(); ?>

<?php
    $post_type = 'clients';
    
    $args = [
        'post_type' => $post_type,
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'order' => 'ASC'
    ];
    
    $query = new WP_Query($args);
?>

<?php if ($query->have_posts()) : ?>
    <section class="archive archive--<?php echo $post_type;?>">
        <div class="container--medium">
            <div class="archive__wrap">
                <div class="archive__list">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php get_template_part('template-parts/feed/card', $post_type); ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
