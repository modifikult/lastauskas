<?php
    $featured_blocks = get_field('featured_blocks');
?>

<?php if ($featured_blocks) : ?>
    <?php foreach ($featured_blocks as $idx => $block) : ?>
        
        <?php
        $background_color = $block['background_color'];
        $text_color = $block['text_color'];
        $image = $block['image'];
        $text = $block['text'];
        ?>

        <section
                class="bg-text-image animate fade-in block--<?php echo $idx + 1;?>">
            <div class="container--full">
                <div class="bg-text-image__wrap">
                    <?php if ($image) : ?>
                        <div class="bg-text-image__img <?php echo $idx % 2 ? 'image--left' : 'image--right'; ?>">
                            <div class="bg-text-image__img-wrap">
                                <img src="<?php echo $image['url']; ?>"
                                     alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($text) : ?>
                        <div class="bg-text-image__text content-block <?php echo $idx % 2 ? 'text--right' : 'text--left'; ?>">
                            <div class="bg-text-image__text-wrapper">
                                <?php echo $text; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>