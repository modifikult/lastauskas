<?php
    $title = get_the_title(get_the_ID());
    $text = get_the_excerpt(get_the_ID());
    $permalink = get_the_permalink(get_the_ID());
    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID());
    $thumbnail_caption = get_the_post_thumbnail_caption(get_the_ID()) ?: get_the_title(get_the_ID());
    
    $terms = wp_get_post_terms(get_the_ID(), 'category');
    
    $season_link = "";
    if($terms[0]->term_id === 178) {
        $season_link = get_field('season_link') ? get_field('season_link') : '';
    }
?>

<div class="card-post card-post-<?php echo $terms[0]->slug;?>">
    <a href="<?php echo $season_link ? : $permalink; ?>" target="<?php echo $season_link ? '_blank' : '_self';?>">
        <div class="card-post__wrap">
            <?php if($title || $text) :?>
                <div class="card-post__content">
                    <?php if ($title) : ?>
                        <div class="card-post__title">
                            <h4>
                                <?php echo $title; ?>
                            </h4>
                        </div>
                    <?php endif; ?>
                    <?php if ($text) : ?>
                        <div class="card-post__excerpt">
                            <?php echo $text; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            
            <?php if ($thumbnail_url) : ?>
                <div class="card-post__img">
                    <?php if($terms[0]->term_id == 72) :?>
                        <div class="blog--icon">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/play_icon.svg';?>" 
                            alt="play-icon" width="24" height="24">
                        </div>
                    <?php endif; ?>
                    <img src="<?php echo $thumbnail_url; ?>" alt="<?php echo $thumbnail_caption; ?>" class="blog--image">
                </div>
                <?php else :?>
                <div class="card-post__img">
                    <?php if($terms[0]->term_id == 72) :?>
                        <div class="blog--icon">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/play_icon.svg';?>"
                                 alt="play-icon" width="24" height="24">
                        </div>
                    <?php endif; ?>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/card_post_template_img.png'; ?>" alt="<?php echo $thumbnail_caption; ?>" class="blog--image">
                </div>
            <?php endif; ?>
        </div>
    </a>
</div>