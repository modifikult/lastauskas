<?php
    $post_obj = get_queried_object(get_the_ID());
    $post_type = $post_obj->post_type;
    
    $terms = get_the_terms(get_the_ID(), 'category');
    
    $args = [
        'post_type' => $post_type,
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'post__not_in' => [get_the_ID()],
        'order' => 'ASC',
        'order_by' => 'date',
        'tax_query' => [
            [
                'taxonomy' => $terms[0]->taxonomy,
                'fields' => 'term_id',
                'terms' => $terms[0]->term_id,
            ]
        ]
    ];
    
    $query = new WP_Query($args);
?>

<?php if ($query->have_posts()) : ?>
    <aside class="sidebar animate fade-in">
        <div class="sidebar__title">
            <h4>
                <?php _e('Naujausi įrašai'); ?>
            </h4>
        </div>
        <nav class="sidebar__nav">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>
        </nav>
    </aside>
<?php endif; ?>

