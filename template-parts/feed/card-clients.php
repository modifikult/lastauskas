<?php
    $permalink = get_the_permalink();
    $thumbnail_url = get_the_post_thumbnail_url();
    $thumbnail_caption = get_the_post_thumbnail_caption() ?: get_the_title();
?>

<div class="card-clients animate fade-up">
    <div class="card-clients__wrap">
        <?php if ($thumbnail_url) : ?>
            <div class="card-clients__img">
                <img src="<?php echo $thumbnail_url; ?>" alt="<?php echo $thumbnail_caption; ?>">
            </div>
        <?php endif; ?>
    </div>
</div>