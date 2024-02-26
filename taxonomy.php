<?php get_header(); ?>

<?php
    $post_type = get_post_type(get_the_ID());
    $post_obj = get_queried_object();
    $taxonomy = $post_obj->taxonomy;
    $term_id = $post_obj->term_id;
    
    if ($term_id === 183) {
        $posts_per_page = 6;
    } else {
        $posts_per_page = 9;
    }
    
    $args = [
        'post_type' => $post_type,
        'post_status' => 'publish',
        'posts_per_page' => $posts_per_page,
        'paged' => get_query_var('paged'),
        'order' => 'ASC',
        'tax_query' => [
            [
                'taxonomy' => $taxonomy,
                'field' => 'term_id',
                'terms' => $term_id
            ]
        ]
    ];
    
    $query = new WP_Query($args);
?>

<?php if ($query->have_posts()) : ?>
    <section class="taxonomy taxonomy--<?php echo $taxonomy; ?> animate fade-up">
        <div class="container">
            <div class="taxonomy__wrap">
                <div class="taxonomy__list">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php get_template_part('template-parts/feed/card', $post_type); ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                </div>
                
                <?php if ($query->max_num_pages > 1) : ?>
                    <div class="taxonomy__pagination">
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