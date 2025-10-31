<?php
get_header();
?>

<main class="about">

  <div class="what-is-sanrio">


    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        the_content();
      }
    }
    ?>

  </div>

  


</main>

<?php get_footer(); ?>