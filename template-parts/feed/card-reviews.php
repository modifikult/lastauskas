<?php
    if (isset($args['item'])) {
        $item = $args['item'];
        
        $text = $item->post_content;
        $author = get_field('reviews_author', $item->ID) ?? 'Unknown';
    }
?>

<div class="card-reviews">
    <div class="card-reviews__wrap">
        <?php if ($text) : ?>
            <div class="card-reviews__text">
                <?php echo $text; ?>
            </div>
        <?php endif; ?>
        <div class="card-reviews__excerpt">
            <?php echo custom_excerpt($text, 134); ?>
        </div>
        <div class="card-reviews__btn">
            <a href="#" class="button button--transparent button--sm read--more" data-read-more="false">
                <?php _e('Plačiau ->'); ?>
            </a>
        </div>
        <?php if ($author) : ?>
            <div class="card-reviews__author"><?php echo $author; ?></div>
        <?php endif; ?>

    </div>
</div>
