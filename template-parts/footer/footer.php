<?php
    $footer_title = get_field('footer_title', 'option');
    $footer_contacts = get_field('footer_contacts', 'option');
    $footer_social = get_field('footer_social', 'option');
    
    $date_format = get_option('date_format');
    $current_date = date($date_format);
    $year = date('Y', strtotime($current_date));
?>

<footer class="footer animate-now fade-in">
    <div class="container">
        <div class="footer__wrap">
            <div class="footer__col col--left">
                <?php if ($footer_title) : ?>
                    <div class="footer__title h3">
                        <?php echo $footer_title; ?>
                    </div>
                <?php endif; ?>
                
                <?php if ($footer_contacts) : ?>
                    <div class="footer__contacts h5">
                        <?php
                            $contact_address = $footer_contacts['contact_address'];
                            $contact_phone = $footer_contacts['contact_phone'];
                            $contact_phone_icon = $footer_contacts['contact_phone_icon'];
                            $contact_email = $footer_contacts['contact_email'];
                            $contact_mail_icon = $footer_contacts['contact_mail_icon'];
                        ?>
                        <?php if ($contact_address) : ?>
                            <span class=""><?php echo $contact_address; ?></span>
                        <?php endif; ?>
                        <?php if ($contact_phone) : ?>
                            <a class="footer-tel" href="tel:<?php echo $contact_phone; ?>">
                                <?php if ($contact_phone_icon) : ?>
                                    <img class="footer-icon" src="<?php echo $contact_phone_icon['url'] ?>"
                                         alt="<?php echo $contact_phone_icon['alt'] ?: $contact_phone_icon['title'] ?>"/>
                                <?php endif; ?>
                                <?php echo $contact_phone; ?>
                            </a>
                        <?php endif; ?>
                        <?php if ($contact_email) : ?>
                            <a class="footer-mail" href="mailto:<?php echo $contact_email; ?>">
                                <?php if ($contact_mail_icon) : ?>
                                    <img class="footer-icon" src="<?php echo $contact_mail_icon['url'] ?>"
                                         alt="<?php echo $contact_mail_icon['alt'] ?: $contact_mail_icon['title']; ?>"/>
                                <?php endif; ?>
                                <?php echo $contact_email; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                
                <?php if ($footer_social) : ?>
                    <div class="footer__social">
                        <?php foreach ($footer_social as $social) : ?>
                            <?php
                            $social_icon = $social['social_icon'];
                            $social_link = $social['social_link'];
                            ?>
                            <?php if ($social_icon && $social_link) : ?>
                                <a href="<?php echo $social_link; ?>">
                                    <img src="<?php echo $social_icon['url']; ?>"
                                         alt="<?php echo $social_icon['alt'] ?: $social_icon['title']; ?>">
                                </a>
                            <?php endif; ?>
                        
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <div class="footer__copyright">
                    <span><?php echo $year . ' ';?> <?php _e('lastauskas.lt'); ?></span>
                    <span><?php _e('VISOS TEISĖS SAUGOMOS.'); ?></span>
                </div>
            </div>
            <div class="footer__col col--right">
                <div class="footer__google">
                    <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
                    <a href="" class="button button--dark-hover-outline button--lg google--button" target="_blank">
                        <?php _e('Klientų atsiliepimai '); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px">
                            <path fill="#FFC107"
                                  d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/>
                            <path fill="#FF3D00"
                                  d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/>
                            <path fill="#4CAF50"
                                  d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/>
                            <path fill="#1976D2"
                                  d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
