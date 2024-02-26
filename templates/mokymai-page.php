<?php
    /*
     * Template Name: Mokymai page
    */
?>

<?php get_header(); ?>

<?php
    $post_type = 'programs';
    
    $args = [
        'post_type' => $post_type,
        'post_status' => 'publish',
        'posts_per_page' => 9,
        'paged' => get_query_var('paged'),
        'order' => 'ASC',
    ];
    
    $query = new WP_Query($args);
?>

<?php if ($query->have_posts()) : ?>
    <section class="archive archive--<?php echo $post_type; ?> animate fade-up">
        <div class="container">
            <div class="archive__wrap">
                <div class="archive__list">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php get_template_part('template-parts/feed/card', $post_type); ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                </div>
                
                <?php if ($query->max_num_pages > 1) : ?>
                    <div class="archive__pagination">
                        <?php get_template_part('template-parts/pagination', '', [
                            'query' => $query
                        ]); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>