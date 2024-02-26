<?php
    $header_logo = get_field('header_logo', 'option');
?>

<header class="header">
    <div class="container--full">
        <div class="header__wrap">
            <?php if ($header_logo) : ?>
                <div class="header__logo">
                    <?php if (!is_home()) : ?>
                        <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php echo $header_logo['url']; ?>"
                                 alt="<?php echo $header_logo['alt'] ?: $header_logo['title']; ?>">
                        </a>
                    <?php else : ?>
                        <img src="<?php echo $header_logo['url']; ?>"
                             alt="<?php echo $header_logo['alt'] ?: $header_logo['title']; ?>">
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="header__nav">
                <?php
                    wp_nav_menu([
                        'theme_location' => 'main-menu',
                        'container' => false,
                    ]);
                ?>
            </div>

            <?php 
            
            if(function_exists('custom_search_shortcode')) :
                 echo do_shortcode('[codelibry_search]');
            endif; ?>


            <div class="header__toggle">
                <span></span>
            </div>

            <div class="header__side-panel">
                <div class="header__nav">
                    <div class="header__close">
                        <span></span>
                        <span></span>
                    </div>
                    <?php
                        wp_nav_menu([
                            'theme_location' => 'main-menu',
                            'container' => false,
                        ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>
