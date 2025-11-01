<body>

    <?php get_header(); ?>

    <div class="main-front-poster">
        <?php
        $home_image = get_field('home-image');
        if ($home_image) {
            echo '<img src="' . $home_image['url'] . '" alt="' . $home_image['alt'] . '">';
        }
        ?>

    </div>


    <main>

        <section class="about-sanrio">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            }
            ?>

        </section>

        <section class="sanrio-profiles">
            <h2>Sanrio Characters</h2>

            <div class="profiles">

                <div class="profile-card-1">
                    <?php
                    $character_kitty = get_field('character-kitty');
                    if ($character_kitty) {
                        echo '<img src="' . $character_kitty['url'] . '" alt="' . $character_kitty['alt'] . '">';
                    }
                    ?>

                </div>


                <div class="profile-card-2">
                    <?php
                    $character_melody = get_field('character-melody');
                    if ($character_melody) {
                        echo '<img src="' . $character_melody['url'] . '" alt="' . $character_melody['alt'] . '">';
                    }
                    ?>

                </div>
                <div class="profile-card-3">
                    <?php
                    $character_cinnamon = get_field('character-cinnamon');
                    if ($character_cinnamon) {
                        echo '<img src="' . $character_cinnamon['url'] . '" alt="' . $character_cinnamon['alt'] . '">';
                    }
                    ?>

                </div>
                <div class="profile-card-4">
                    <?php
                    $character_tuxedosam = get_field('character-tuxedosam');
                    if ($character_tuxedosam) {
                        echo '<img src="' . $character_tuxedosam['url'] . '" alt="' . $character_tuxedosam['alt'] . '">';
                    }
                    ?>
                </div>

                <div class="profile-card-5">
                    <?php
                    $character_badtzmaru = get_field('character-badtzmaru');
                    if ($character_badtzmaru) {
                        echo '<img src="' . $character_badtzmaru['url'] . '" alt="' . $character_badtzmaru['alt'] . '">';
                    }
                    ?>
                </div>
                <div class="profile-card-6">
                    <?php
                    $character_pompompurin = get_field('character-pompompurin');
                    if ($character_pompompurin) {
                        echo '<img src="' . $character_pompompurin['url'] . '" alt="' . $character_pompompurin['alt'] . '">';
                    }
                    ?>
                </div>
                <div class="profile-card-7">
                    <?php
                    $character_chococat = get_field('character-chococat');
                    if ($character_chococat) {
                        echo '<img src="' . $character_chococat['url'] . '" alt="' . $character_chococat['alt'] . '">';
                    }
                    ?>
                </div>
                <div class="profile-card-8">
                    <?php
                    $character_pochacco = get_field('character-pochacco');
                    if ($character_pochacco) {
                        echo '<img src="' . $character_pochacco['url'] . '" alt="' . $character_pochacco['alt'] . '">';
                    }
                    ?>
                </div>

            </div>

        </section>

        <section class="rankings-section">
    <h2>Top 3 Rankings</h2>

    <div class="rankings-container">
        <div class="ranking-card-1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/cinnamonrank2.png" alt="Cinnamon Roll" class="ranking-img cinnamon">
        </div>

        <div class="ranking-card-1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/purinrank.png" alt="Purin" class="ranking-img purin">
        </div>

        <div class="ranking-card-1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pochaccorank3.png" alt="Pochacco" class="ranking-img pochacco">
        </div>
    </div>
</section>


        <?php get_footer(); ?>





    </main>





</body>

</html>