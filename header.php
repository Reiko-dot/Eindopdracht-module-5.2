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
                <img src="<?php echo get_template_directory_uri(); ?>/images/Sanrio-logo.png" alt="Logo" class="header-logo">

            </div>

            <nav class="header-nav">
                <ul>
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Characters</a>
                    <a href="#">Rankings</a>
                </ul>
            </nav>
            <nav>
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

    <div class="main-front-poster">
        <img src="<?php echo get_template_directory_uri(); ?>/images/sanrio poster.png" alt="sanrio" class="header-sanrio-poster">
    </div>

</header>