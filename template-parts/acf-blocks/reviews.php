<?php
    $reviews_title = get_sub_field('reviews_title');
    $reviews_button = get_sub_field('reviews_button');

    $reviews_list = get_posts([
      'post_type' => 'reviews',
      'posts_per_page' => -1
    ]);
?>

<?php if ($reviews_list) : ?>
    <section class="reviews">
        <?php if ($reviews_title || $reviews_button) : ?>
            <div class="container">
                <div class="reviews__title h4 animate fade-in">

                    <?php echo $reviews_title; ?>

                    <?php if($reviews_button): ?>
                      <a href="<?php echo $reviews_button['url'] ?>" target="<?php echo $reviews_button['target'] ?>" class="reviews__button button button--outline-dark button--lg animate fade-in">
                        <?php echo $reviews_button['title'] ?>
                      </a>
                    <?php endif; ?>

                </div>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="reviews__wrap animate fade-up">
                <div class="reviews__list js-slider">
                    <?php foreach ($reviews_list as $review) : ?>
                        <?php get_template_part('template-parts/feed/card', 'reviews', [
                            'item' => $review
                        ]); ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
