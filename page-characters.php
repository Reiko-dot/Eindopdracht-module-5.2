<?php
get_header();
?>

<main class="characters">

  <div class="sanrio-characters">
    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        the_content();
      }
    }
    ?>
  </div>

  <div class="characters-grid">
    <div class="character-card">
      <div class="character-image">
        <?php
        $character_photo = get_field('character-photo');
        if ($character_photo) {
          echo '<img src="' . $character_photo['url'] . '" alt="' . $character_photo['alt'] . '" class="character-toggle">';
        }
        ?>
      </div>

      <div class="character-modal">
        <div class="character-modal-content">
          <?php
          $name = get_field('name');
          $character_description = get_field('character-description');

          if ($name) {
            echo '<h2>' . $name . '</h2>';
          }
          if ($character_description) {
            echo '<p>' . $character_description . '</p>';
          }
          ?>
        </div>
      </div>
    </div>


    <div class="character-card">
      <div class="character-image">
        <?php
        $character_photo_2 = get_field('character-photo-2');
        if ($character_photo_2) {
          echo '<img src="' . $character_photo_2['url'] . '" alt="' . $character_photo_2['alt'] . '" class="character-toggle">';
        }
        ?>
      </div>

      <div class="character-modal">
        <div class="character-modal-content">
          <?php
          $name_2 = get_field('name-2');
          $character_description_2 = get_field('character-description-2');

          if ($name_2) {
            echo '<h2>' . $name_2 . '</h2>';
          }
          if ($character_description_2) {
            echo '<p>' . $character_description_2 . '</p>';
          }
          ?>
        </div>
      </div>
    </div>



    <div class="character-card">
      <div class="character-image">
        <?php
        $character_photo_3 = get_field('character-photo-3');
        if ($character_photo_3) {
          echo '<img src="' . $character_photo_3['url'] . '" alt="' . $character_photo_3['alt'] . '" class="character-toggle">';
        }
        ?>
      </div>

      <div class="character-modal">
        <div class="character-modal-content">
          <?php
          $name_3 = get_field('name-3');
          $character_description_3 = get_field('character-description-3');

          if ($name_3) {
            echo '<h2>' . $name_3 . '</h2>';
          }
          if ($character_description_3) {
            echo '<p>' . $character_description_3 . '</p>';
          }
          ?>
        </div>
      </div>
    </div>


    <div class="character-card">
      <div class="character-image">
        <?php
        $character_photo_4 = get_field('character-photo-4');
        if ($character_photo_4) {
          echo '<img src="' . $character_photo_4['url'] . '" alt="' . $character_photo_4['alt'] . '" class="character-toggle">';
        }
        ?>
      </div>

      <div class="character-modal">
        <div class="character-modal-content">
          <?php
          $name_4 = get_field('name-4');
          $character_description_4 = get_field('character-description-4');

          if ($name_4) {
            echo '<h2>' . $name_4 . '</h2>';
          }
          if ($character_description_4) {
            echo '<p>' . $character_description_4 . '</p>';
          }
          ?>
        </div>
      </div>
    </div>









  </div>





  <div class="characters-grid">
    <div class="character-card">
      <div class="character-image">
        <?php
        $character_photo_5 = get_field('character-photo-5');
        if ($character_photo_5) {
          echo '<img src="' . $character_photo_5['url'] . '" alt="' . $character_photo_5['alt'] . '" class="character-toggle">';
        }
        ?>
      </div>

      
      <div class="character-modal">
        <div class="character-modal-content">
          <?php
          $name_5 = get_field('name-5');
          $character_description_5 = get_field('character-description-5');

          if ($name_5) {
            echo '<h2>' . $name_5 . '</h2>';
          }
          if ($character_description_5) {
            echo '<p>' . $character_description_5 . '</p>';
          }
          ?>
        </div>
      </div>
    </div>


    <div class="character-card">
      <div class="character-image">
        <?php
        $character_photo_6 = get_field('character-photo-6');
        if ($character_photo_6) {
          echo '<img src="' . $character_photo_6['url'] . '" alt="' . $character_photo_6['alt'] . '" class="character-toggle">';
        }
        ?>
      </div>

      
      <div class="character-modal">
        <div class="character-modal-content">
          <?php
          $name_6 = get_field('name-6');
          $character_description_6 = get_field('character-description-6');

          if ($name_6) {
            echo '<h2>' . $name_6 . '</h2>';
          }
          if ($character_description_6) {
            echo '<p>' . $character_description_6 . '</p>';
          }
          ?>
        </div>
      </div>
    </div>


    <div class="character-card">
      <div class="character-image">
        <?php
        $character_photo_7 = get_field('character-photo-7');
        if ($character_photo_7) {
          echo '<img src="' . $character_photo_7['url'] . '" alt="' . $character_photo_7['alt'] . '" class="character-toggle">';
        }
        ?>
      </div>

      
      <div class="character-modal">
        <div class="character-modal-content">
          <?php
          $name_7 = get_field('name-7');
          $character_description_7 = get_field('character-description-7');

          if ($name_7) {
            echo '<h2>' . $name_7 . '</h2>';
          }
          if ($character_description_7) {
            echo '<p>' . $character_description_7 . '</p>';
          }
          ?>
        </div>
      </div>
    </div>

    <div class="character-card">
      <div class="character-image">
        <?php
        $character_photo_8 = get_field('character-photo-8');
        if ($character_photo_8) {
          echo '<img src="' . $character_photo_8['url'] . '" alt="' . $character_photo_8['alt'] . '" class="character-toggle">';
        }
        ?>
      </div>

      
      <div class="character-modal">
        <div class="character-modal-content">
          <?php
          $name_8 = get_field('name-6');
          $character_description_8 = get_field('character-description-8');

          if ($name_8) {
            echo '<h2>' . $name_8 . '</h2>';
          }
          if ($character_description_8) {
            echo '<p>' . $character_description_8 . '</p>';
          }
          ?>
        </div>
      </div>
    </div>


  </div>




   <div class="characters-grid">
    <div class="character-card">
      <div class="character-image">
        <?php
        $character_photo_9 = get_field('character-photo-9');
        if ($character_photo_9) {
          echo '<img src="' . $character_photo_9['url'] . '" alt="' . $character_photo_9['alt'] . '" class="character-toggle">';
        }
        ?>
      </div>

      
      <div class="character-modal">
        <div class="character-modal-content">
          <?php
          $name_9 = get_field('name-9');
          $character_description_9 = get_field('character-description-9');

          if ($name_9) {
            echo '<h2>' . $name_9 . '</h2>';
          }
          if ($character_description_9) {
            echo '<p>' . $character_description_9 . '</p>';
          }
          ?>
        </div>
      </div>
    </div>


    <div class="character-card">
      <div class="character-image">
        <?php
        $character_photo_10 = get_field('character-photo-10');
        if ($character_photo_10) {
          echo '<img src="' . $character_photo_10['url'] . '" alt="' . $character_photo_10['alt'] . '" class="character-toggle">';
        }
        ?>
      </div>

      
      <div class="character-modal">
        <div class="character-modal-content">
          <?php
          $name_10 = get_field('name-10');
          $character_description_10 = get_field('character-description-10');

          if ($name_10) {
            echo '<h2>' . $name_10 . '</h2>';
          }
          if ($character_description_10) {
            echo '<p>' . $character_description_10 . '</p>';
          }
          ?>
        </div>
      </div>
    </div>


    

    

  </div>











































































  </div>


</main>

<?php get_footer(); ?>