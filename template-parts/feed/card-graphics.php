<?php
    if (isset($args)) {
        $item = $args['item'];
        
        $date = get_the_date('Ymd');
        $graphics_title = $item['graphics_title'];
        $graphics_text_date = $item['graphics_text_date'];
        $graphics_start_date = DateTime::createFromFormat('Ymd', $item['graphics_start_date']);
        $graphics_end_date = DateTime::createFromFormat('Ymd', $item['graphics_end_date']);
        $graphics_place = $item['graphics_place'];
        $graphics_participants = $item['graphics_participants'];
        $graphics_button = $item['graphics_button'];
    }
?>

<?php if ($graphics_title && $graphics_start_date && $graphics_text_date && $graphics_place && $graphics_participants && $graphics_button) : ?>
    <div class="card-graphics animate fade-up" data-date="<?php echo $formatted_date; ?>">
        <div class="card-graphics__wrap">
            <div class="card-graphics__title">
                <h4>
                    <?php echo $graphics_title; ?>
                </h4>
            </div>
            <div class="card-graphics__info">
                <div class="card-graphics__date">
<!--                    --><?php //_e('Data: ' . $graphics_start_date->format('Y-m-d') . ' '); ?>
<!--                    --><?php //echo $graphics_end_date ? ' to ' . $graphics_end_date->format('Y-m-d') : ''; ?>
                    <?php echo $graphics_text_date;?>
                </div>
                <div class="card-graphics__place">
                    <?php _e('Vieta: '); ?>
                    <?php echo $graphics_place; ?>
                </div>
                <div class="card-graphics__participants">
                    <?php _e('Dalyvių skaičius: '); ?>
                    <?php echo $graphics_participants; ?>
                </div>
            </div>
            <?php if ($graphics_end_date ? $graphics_end_date > $date : $graphics_start_date > $date) : ?>
                <div class="card-graphics__btn">
                    <a href="<?php echo $graphics_button['url']; ?>" class="button button--outline-dark button--lg">
                        <?php echo $graphics_button['title'] ?: 'Registruotis'; ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>