<?php
    $video_blogs_title = get_sub_field('video_blogs_title');
    $what_post_display = get_sub_field('what_post_display');
    $video_blogs_posts = get_sub_field('video_blogs_posts');
    
    $args = [
        'post_type' => 'post',
        'posts_per_page' => 3,
        'order' => 'DESC',
        'order_by' => 'date',
        'tax_query' => [
            [
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => 72,
            ]
        ]
    ];
    
    $query = new WP_Query($args);
?>

<?php if ($what_post_display === 'last_3_posts') : ?>
    <?php if ($query->have_posts()) : ?>
        <section class="video-blogs">
            <?php if ($video_blogs_title) : ?>
                <div class="video-blogs__title h4 animate fade-in">
                    <a href="<?php echo get_term_link(72); ?>">
                        <?php echo $video_blogs_title; ?>
                    </a>
                </div>
            <?php endif; ?>

            <div class="container">
                <div class="video-blogs__wrap animate fade-up">
                    <div class="video-blogs__list">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <?php get_template_part('template-parts/feed/card', 'post'); ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>

<?php if ($what_post_display === 'custom_3_posts') : ?>
    <?php if ($video_blogs_posts) : ?>
        <section class="video-blogs">
            <?php if ($video_blogs_title) : ?>
                <div class="video-blogs__title h4 animate fade-in">
                    <a href="<?php echo get_term_link(72); ?>">
                        <?php echo $video_blogs_title; ?>
                    </a>
                </div>
            <?php endif; ?>

            <div class="container">
                <div class="video-blogs__wrap animate fade-up">
                    <div class="video-blogs__list">
                        <?php foreach ($video_blogs_posts as $post) : ?>
                            <?php setup_postdata($post); ?>
                            <?php get_template_part('template-parts/feed/card', 'post'); ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>