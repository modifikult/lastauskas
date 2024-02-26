<?php
    $image_position = get_sub_field('image_position');
    $image = get_sub_field('image');
    $content = get_sub_field('content');
    $author = get_sub_field('author');
?>

<?php if ($image && $content) : ?>
    <section class="image-content">
        <div class="container">
            <div class="image-content__wrap">
                <div class="image-content__img animate fade-up <?php echo $image_position === 'right' ? 'image--right' : 'image--left'; ?>">
                    <div class="image-content__img-wrap">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?: $image['title']; ?>" fetchpriority="high" class="no-lazy skip-lazy">
                    </div>
                </div>
                <div class="image-content__text content-block animate fade-up <?php echo $image_position === 'right' ? 'text--left' : 'text--right'; ?>">
                    <?php echo $content; ?>
                </div>

                <?php if($author) :?>
                    <div class="image-content__author">
                        <h3><?php echo $author;?></h3>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
