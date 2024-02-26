<?php
    $fixed_buttons = get_field('fixed_buttons', 'option');
?>

<?php if ($fixed_buttons) : ?>
    <div class="fixed-buttons__list">
        <?php
            $phone_button = $fixed_buttons['phone_button'];
            $email_button = $fixed_buttons['email_button'];
        ?>
        
        <?php if ($phone_button) : ?>
            <a href="tel:<?php echo $phone_button['phone'] ?>" class="fixed-button tel--button animate-now fade delay-3">
                <div class="fixed-button__icon">
                    <img src="<?php echo $phone_button['button_icon'] ?>" alt="tel-icon">
                </div>
                <div class="fixed-button__text"><?php echo $phone_button['button_name'] ?></div>
            </a>
        <?php endif; ?>
        
        <?php if ($email_button) : ?>
            <a href="mailto:<?php echo $email_button['email'] ?>" class="fixed-button email--button animate-now fade delay-3">
                <div class="fixed-button__icon">
                    <img src="<?php echo $email_button['button_icon'] ?>" alt="email-icon">
                </div>
                <div class="fixed-button__text"><?php echo $email_button['button_name'] ?></div>
            </a>
        <?php endif; ?>
    </div>
<?php endif; ?>