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

    <main>

        <section class="about-sanrio">
            <h2>About Sanrio</h2>
            <div class="about-textbox">
                <p>Sanrio is a Japanese company best known for creating cute,<br> friendly characters and turning them into a global cultural phenomenon.<br> Founded in 1960 by Shintaro Tsuji, the company originally sold silk products <br>before shifting its focus to character goods.<br>
                    Sanrio’s most iconic creation is Hello Kitty, introduced in 1974. <br>She quickly became a worldwide symbol of “kawaii” (cute) culture. <br>Since then, Sanrio has created many other beloved characters, including My Melody, <br>Cinnamoroll, Kuromi, Pompompurin, and Badtz-Maru.</p>
            </div>
        </section>

        <section class="sanrio-profiles">
              <h2>Sanrio Profiles</h2>

            <div class="profiles">


            </div>

          

            
        </section>





    </main>

    <footer>


    </footer>



</body>

</html>