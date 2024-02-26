<?php
    $title = get_the_title();
    $text = get_the_content();
    $permalink = get_the_permalink();
    $terms = get_the_terms(get_the_ID(), 'program_category');
?>

<div class="card-programs">
    <div class="card-programs__wrap">
        <?php if ($title) : ?>
            <div class="card-programs__title">
                <h3>
                    <?php echo $title; ?>
                </h3>
            </div>
        <?php endif; ?>
        <?php if ($text) : ?>
            <div class="card-programs__text"><?php echo $text; ?></div>
        <?php endif; ?>
        <?php if ($permalink) : ?>
            <div class="card-programs__btn">
                <a href="<?php echo $permalink; ?>" class="button button--outline-dark button--lg"><?php _e('Plačiau'); ?></a>
            </div>
        <?php endif; ?>
        <?php if($terms) :?>
            <div class="card-programs__category">
                <?php if($terms[0]->term_id === 184) :?>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/card_programs_popular.png';?>" alt="popular">
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>