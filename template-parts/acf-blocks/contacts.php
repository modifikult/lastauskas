<?php
    $background_color = get_sub_field('background_color');
    $text_color = get_sub_field('text_color');
    $image_position = get_sub_field('image_position');
    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $phone_number = get_sub_field('phone_number');
    $email = get_sub_field('email');
?>

<?php if ($image) : ?>
    <section class="contacts" style="background-color: <?php echo $background_color; ?>">
        <div class="container--full">
            <div class="contacts__wrap">
                <div class="contacts__img <?php echo $image_position === 'right' ? 'image--right' : 'image--left'; ?>">
                    <div class="contacts__img-wrap">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?: $image['title']; ?>" fetchpriority="high" class="no-lazy skip-lazy">
                    </div>
                </div>
                <?php if ($title || $phone_number || $email) : ?>
                    <div class="h3 contacts__content <?php echo $image_position === 'right' ? 'content--left' : 'content--right'; ?>">
                        <?php if ($title) : ?>
                            <div class="contacts__title" style="color: <?php echo $text_color ?: '#384a4c'; ?>">
                                <?php echo $title; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($phone_number) : ?>
                            <a href="tel:<?php echo $phone_number; ?>" class="contacts__phone"
                               style="color: <?php echo $text_color ?: '#384a4c'; ?>">
                                <?php echo $phone_number; ?>
                            </a>
                        <?php endif; ?>
                        <?php if ($email) : ?>
                            <a href="mailto:<?php echo $email; ?>" class="contacts__email"
                               style="color: <?php echo $text_color ?: '#384a4c'; ?>">
                                <?php echo $email; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>