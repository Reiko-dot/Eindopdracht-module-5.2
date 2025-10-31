<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>




<header>
    <section class="container-header">

        <section class="header-left">
            <div class="logo-section-left">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pompompurin.png" alt="Logo" class="header-logo-purin">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tuxedosam.png" alt="Logo" class="header-logo-tuxedosam">
                <img src="<?php echo get_template_directory_uri(); ?>/images/badtzmaru.png" alt="Logo" class="header-logo-badtzmaru">

            </div>
        </section>


        <section class="header-middle">
            <div class="header-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/sanrio-logo.png" alt="Logo" class="header-logo-sanrio">



            </div>

            <nav class="header-nav">
                <?php wp_nav_menu(array('theme_location' => 'hoofdmenu')); ?>
            </nav>
           


        </section>



        <section class="header-right">
            <div class="logo-section-right">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pochacco-ya.png" alt="Logo" class="header-logo-pochacco">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cinnamon.png" alt="Logo" class="header-logo-cinnamon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/chococat.png" alt="Logo" class="header-logo-chococat">

            </div>
        </section>


    </section>

    
</header>