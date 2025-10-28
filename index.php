<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sanrio website</title>
    <link rel="stylesheet" href="<?php
                                    bloginfo('stylesheet_url'); ?>" />
</head>

<body>

    <?php get_header(); ?>

    <main>

        <section class="about-sanrio">
            <h2>About Sanrio</h2>
            <div class="about-textbox">
                <p>Sanrio is a Japanese company best known for creating cute,<br> friendly characters and turning them into a global cultural phenomenon.<br> Founded in 1960 by Shintaro Tsuji, the company originally sold silk products <br>before shifting its focus to character goods.<br>
                    Sanrio’s most iconic creation is Hello Kitty, introduced in 1974. <br>She quickly became a worldwide symbol of “kawaii” (cute) culture. <br>Since then, Sanrio has created many other beloved characters, including My Melody, <br>Cinnamoroll, Kuromi, Pompompurin, and Badtz-Maru.</p>
            </div>
        </section>

        <section class="sanrio-profiles">
            <h2>Sanrio Characters</h2>

            <div class="profiles">

                <div class="profile-card-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/hellokitty.png" alt="Logo" class="character-images">

                </div>


                <div class="profile-card-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mymelody.png" alt="Logo" class="character-images">

                </div>
                <div class="profile-card-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cinnamon.png" alt="Logo" class="character-images">
                </div>
                <div class="profile-card-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tuxedosam.png" alt="Logo" class="character-images">
                </div>

                <div class="profile-card-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/badtzmaru.png" alt="Logo" class="character-images">
                </div>
                <div class="profile-card-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pompompurin.png" alt="Logo" class="character-images">
                </div>
                <div class="profile-card-7">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/chococat.png" alt="Logo" class="character-images">
                </div>
                <div class="profile-card-8">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pochacco-ya.png" alt="Logo" class="character-images">
                </div>

            </div>

        </section>

        <section class="rankings-section">
            <h2>Top 3 Rankings</h2>

            <div class="rankings-container">
                <div class="ranking-card-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cinnamonrank2.png" alt="Logo" class="cinnamon-rank2">
                    
                </div>

                <div class="ranking-card-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/purinrank.png" alt="Logo" class="purin-rank1">
                   
                </div>

                <div class="ranking-card-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pochaccorank3.png" alt="Logo" class="pochacco-rank3">
                   
                </div>


                
            </div>


        </section>

        <footer>
            <p>&copy; 2025 Sanrio Website. All rights reserved.</p>
        </footer>





    </main>

    <footer>


    </footer>



</body>

</html>