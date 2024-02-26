<?php
    $banner_title = get_sub_field('banner_title');
    $banner_subtitle = get_sub_field('banner_subtitle');
    $banner_image = get_sub_field('banner_image');
?>

<?php if ($banner_image) : ?>
    <section class="banner">
        <div class="container">
            <div class="banner__wrap">
                <?php if ($banner_title || $banner_subtitle) : ?>
                    <div class="banner__col col-left">
                        <?php if ($banner_title) : ?>
                            <div class="banner__title h2">
                                <?php echo $banner_title; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($banner_subtitle) : ?>
                            <div class="banner__subtitle h4">
                                <?php echo $banner_subtitle; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="banner__col col-right">
                    <div class="banner__image"> 
                        <img <?php awesome_acf_responsive_image($banner_image['id'],'thumb-640','618px'); ?>
                             alt="<?php echo $banner_image['alt'] ?: $banner_image['title']; ?>" fetchpriority="high" class="no-lazy skip-lazy" width="618" height="924">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
