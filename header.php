<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    

    <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N5ZGDF6J');</script>
    <!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>

    <!-- GA google analytics code -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4GJS5XGHDM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'G-4GJS5XGHDM');


        jQuery(document).ready(function() {

            jQuery('.footer-mail').on("click", function(){

                // Send event
                gtag("event", "click", {
                    "event_category": "Contact",
                    "event_label": "Footer: Mail"
                });

            });
            jQuery('.footer-tel').on("click", function(){

                // Send event
                gtag("event", "click", {
                    "event_category": "Contact",
                    "event_label": "Footer: Phone Number"
                });

            });

            jQuery('.contacts__email').on("click", function(){

                // Send event
                gtag("event", "click", {
                    "event_category": "Contact",
                    "event_label": "ontact Page: Email"
                });

            });
            jQuery('.contacts__phone').on("click", function(){
                
                // Send event
                gtag("event", "click", {
                    "event_category": "Contact",
                    "event_label": "Contact Page: Phone Number"
                });
                
            });

            jQuery('.button--contact-program').each(function(){
                $(this).on("click", function(){
                    let name =  $(this).data('title');
                    
                    // Send event
                    gtag("event", "click", {
                        "event_category": "Program",
                        "event_label": name
                    });
                
                });
            });
            

            
        });
    </script>
    <!-- GA google analytics code -->

</head>

<?php
$body_classes = '';
?>

<body <?php body_class($body_classes); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5ZGDF6J"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php get_template_part('template-parts/header/header'); ?>

    <div id="main">