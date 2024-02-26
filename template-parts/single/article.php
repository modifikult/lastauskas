<?php
    $thumbnail_url = get_the_post_thumbnail_url();
    $thumbnail_caption = get_the_post_thumbnail_caption() ? : get_the_title();
    $terms = wp_get_post_terms(get_the_ID(), 'category')
?>

<?php if (get_the_content()) : ?>
    <article class="article animate fade-in">
        <div class="article__wrap content-block">
            <h1>
                <?php the_title();?>
            </h1>
            <?php if($terms[0]->term_id === 17) :?>
                <img src="<?php echo $thumbnail_url;?>" alt="<?php echo $thumbnail_caption;?>">
            <?php endif; ?>
            <?php echo the_content(); ?>
        </div>
    </article>
<?php endif; ?>