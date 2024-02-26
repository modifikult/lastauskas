<?php
    $background_color = get_sub_field('background_color');
    $text_color = get_sub_field('text_color');
    $image_position = get_sub_field('image_position');
    $image = get_sub_field('image');
    $content = get_sub_field('content');
?>

<?php if ($image && $content) : ?>
    <section class="color-content-image" style="background-color: <?php echo $background_color ? : 'transparent'; ?>">
        <div class="container--full">
            <div class="color-content-image__wrap">
                <div class="color-content-image__img animate fade-up <?php echo $image_position === 'right' ? 'image--right' : 'image--left'; ?>">
                    <div class="color-content-image__img-wrap">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?: $image['title']; ?>" fetchpriority="high" class="no-lazy skip-lazy">
                    </div>
                </div>
                <div class="color-content-image__content content-block animate fade-up <?php echo $image_position === 'right' ? 'content--left' : 'content--right'; ?>" style="color: <?php echo $text_color ? : '#384a4c'; ?>">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>