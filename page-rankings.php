<?php
get_header();
?>

<!-- rankings-container -->
<main class="rankings">
  <div class="sanrio-rankings">

    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        the_content();
      }
    }
    ?>

  </div>


    <!-- TOP 3 RANKS>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
  <div class="rankings-top-grid">

<!-- RANK CARD CINNAMOROLL -->
    <div class="ranking-card">
      <?php
      $rank_number_2 = get_field('rank-number-2');
      if ($rank_number_2) {
        echo '<h3> Rank: ' . $rank_number_2 . '</h3>';
      }
      ?>

      <?php
      $rank_name_2 = get_field('rank-name-2');
      if ($rank_name_2) {
        echo '<h2>' . $rank_name_2 . '</h2>';
      }
      ?>


      <div class="ranking-image">
        <?php
        $rank_image_2 = get_field('rank-image-2');
        if ($rank_image_2) {
          echo '<img src="' . $rank_image_2['url'] . '" alt="' . $rank_image_2['alt'] . '">';
        }
        ?>
      </div>


      <?php
      $voting_2 = get_field('voting-2');
      if ($voting_2) {
        echo '<h3>' . $voting_2 . ' votes</h3>';
      }
      ?>
    </div>

<!-- RANK CARD PURIN -->
    <div class="ranking-card">
      <?php
      $rank_number_1 = get_field('rank-number-1');
      if ($rank_number_1) {
        echo '<h3> Rank: ' . $rank_number_1 . '</h3>';
      }
      ?>

      <?php
      $rank_name_1 = get_field('rank-name-1');
      if ($rank_name_1) {
        echo '<h2>' . $rank_name_1 . '</h2>';
      }
      ?>


      <div class="ranking-image">
        <?php
        $rank_image_1 = get_field('rank-image-1');
        if ($rank_image_1) {
          echo '<img src="' . $rank_image_1['url'] . '" alt="' . $rank_image_1['alt'] . '">';
        }
        ?>
      </div>

      <?php
      $voting_1 = get_field('voting-1');
      if ($voting_1) {
        echo '<h3>' . $voting_1 . ' votes</h3>';
      }
      ?>
    </div>



<!-- RANK CARD POCHACCO -->
    <div class="ranking-card">
      <?php
      $rank_number_3 = get_field('rank-number-3');
      if ($rank_number_3) {
        echo '<h3> Rank: ' . $rank_number_3 . '</h3>';
      }
      ?>

      <?php
      $rank_name_3 = get_field('rank-name-3');
      if ($rank_name_3) {
        echo '<h2>' . $rank_name_3 . '</h2>';
      }
      ?>


      <div class="ranking-image">
        <?php
        $rank_image_3 = get_field('rank-image-3');
        if ($rank_image_3) {
          echo '<img src="' . $rank_image_3['url'] . '" alt="' . $rank_image_3['alt'] . '">';
        }
        ?>
      </div>

      <?php
      $voting_3 = get_field('voting-3');
      if ($voting_3) {
        echo '<h3>' . $voting_3 . ' votes</h3>';
      }
      ?>
    </div>



  </div>
  <!-- END OF ROWS GRID -->




<!-- 
RANKING ROW 2>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
  <div class="rankings-2-row-grid">

<!-- RANK CARD KUROMI -->
    <div class="ranking-card">
      <?php
      $rank_number_4 = get_field('rank-number-4');
      if ($rank_number_4) {
        echo '<h3> Rank: ' . $rank_number_4 . '</h3>';
      }
      ?>

      <?php
      $rank_name_4 = get_field('rank-name-4');
      if ($rank_name_4) {
        echo '<h2>' . $rank_name_4 . '</h2>';
      }
      ?>


      <div class="ranking-image-row-2">
        <?php
        $rank_image_4 = get_field('rank-image-4');
        if ($rank_image_4) {
          echo '<img src="' . $rank_image_4['url'] . '" alt="' . $rank_image_4['alt'] . '">';
        }
        ?>
      </div>


      <?php
      $voting_4 = get_field('voting-4');
      if ($voting_4) {
        echo '<h3>' . $voting_4 . ' votes</h3>';
      }
      ?>
    </div>



<!-- RANK CARD HELLO KITTY -->
    <div class="ranking-card">
      <?php
      $rank_number_5 = get_field('rank-number-5');
      if ($rank_number_5) {
        echo '<h3> Rank: ' . $rank_number_5 . '</h3>';
      }
      ?>

      <?php
      $rank_name_5 = get_field('rank-name-5');
      if ($rank_name_5) {
        echo '<h2>' . $rank_name_5 . '</h2>';
      }
      ?>


      <div class="ranking-image-row-2">
        <?php
        $rank_image_5 = get_field('rank-image-5');
        if ($rank_image_5) {
          echo '<img src="' . $rank_image_5['url'] . '" alt="' . $rank_image_5['alt'] . '">';
        }
        ?>
      </div>

      <?php
      $voting_5 = get_field('voting-5');
      if ($voting_5) {
        echo '<h3>' . $voting_5 . ' votes</h3>';
      }
      ?>
    </div>



<!-- RANK CARD MY MELODY  -->
    <div class="ranking-card">
      <?php
      $rank_number_6 = get_field('rank-number-6');
      if ($rank_number_6) {
        echo '<h3> Rank: ' . $rank_number_6 . '</h3>';
      }
      ?>

      <?php
      $rank_name_6 = get_field('rank-name-6');
      if ($rank_name_6) {
        echo '<h2>' . $rank_name_6 . '</h2>';
      }
      ?>


      <div class="ranking-image-row-2">
        <?php
        $rank_image_6 = get_field('rank-image-6');
        if ($rank_image_6) {
          echo '<img src="' . $rank_image_6['url'] . '" alt="' . $rank_image_6['alt'] . '">';
        }
        ?>
      </div>

      <?php
      $voting_6 = get_field('voting-6');
      if ($voting_6) {
        echo '<h3>' . $voting_6 . ' votes</h3>';
      }
      ?>
    </div>


    <!-- RANK CARD LITTLE TWIN STARS -->
    <div class="ranking-card">
      <?php
      $rank_number_7 = get_field('rank-number-7');
      if ($rank_number_7) {
        echo '<h3> Rank: ' . $rank_number_7 . '</h3>';
      }
      ?>

      <?php
      $rank_name_7 = get_field('rank-name-7');
      if ($rank_name_7) {
        echo '<h2>' . $rank_name_7 . '</h2>';
      }
      ?>


      <div class="ranking-image-row-2">
        <?php
        $rank_image_7 = get_field('rank-image-7');
        if ($rank_image_7) {
          echo '<img src="' . $rank_image_7['url'] . '" alt="' . $rank_image_7['alt'] . '">';
        }
        ?>
      </div>


      <?php
      $voting_7 = get_field('voting-7');
      if ($voting_7) {
        echo '<h3>' . $voting_7 . ' votes</h3>';
      }
      ?>
    </div>


  </div>
    <!-- END OF ROWS GRID -->





<!-- ROW RANKS 3>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  -->
  <div class="rankings-row-3-grid">


  <!-- RANK CARD HANGYODON -->
    <div class="ranking-card">
      <?php
      $rank_number_8 = get_field('rank-number-8');
     if ($rank_number_8) {
        echo '<h3> Rank: ' . $rank_number_8 . '</h3>';
      }
      ?>

      <?php
      $rank_name_8 = get_field('rank-name-8');
      if ($rank_name_8) {
        echo '<h2>' . $rank_name_8 . '</h2>';
      }
      ?>


      <div class="ranking-image-row-3">
        <?php
        $rank_image_8 = get_field('rank-image-8');
        if ($rank_image_8) {
          echo '<img src="' . $rank_image_8['url'] . '" alt="' . $rank_image_8['alt'] . '">';
        }
        ?>
      </div>


      <?php
      $voting_8 = get_field('voting-8');
      if ($voting_8) {
        echo '<h3>' . $voting_8 . ' votes</h3>';
      }
      ?>
    </div>


    <!-- RANK CARD TUXEDOSAM -->
    <div class="ranking-card">
      <?php
      $rank_number_9 = get_field('rank-number-9');
      if ($rank_number_9) {
        echo '<h3> Rank: ' . $rank_number_9 . '</h3>';
      }
      ?>


      <?php
      $rank_name_9 = get_field('rank-name-9');
      if ($rank_name_9) {
        echo '<h2>' . $rank_name_9 . '</h2>';
      }
      ?>


      <div class="ranking-image-row-3">
        <?php
        $rank_image_9 = get_field('rank-image-9');
        if ($rank_image_9) {
          echo '<img src="' . $rank_image_9['url'] . '" alt="' . $rank_image_9['alt'] . '">';
        }
        ?>
      </div>

      <?php
      $voting_9 = get_field('voting-9');
      if ($voting_9) {
        echo '<h3>' . $voting_9 . ' votes</h3>';
      }
      ?>
    </div>



<!-- RANK CARD PEKKLE -->
    <div class="ranking-card">
      <?php
      $rank_number_10 = get_field('rank-number-10');
      if ($rank_number_10) {
        echo '<h3> Rank: ' . $rank_number_10 . '</h3>';
      }
      ?>

      <?php
      $rank_name_10 = get_field('rank-name-10');
      if ($rank_name_10) {
        echo '<h2>' . $rank_name_10 . '</h2>';
      }
      ?>


      <div class="ranking-image-row-10">
        <?php
        $rank_image_10 = get_field('rank-image-10');
        if ($rank_image_10) {
          echo '<img src="' . $rank_image_10['url'] . '" alt="' . $rank_image_10['alt'] . '">';
        }
        ?>
      </div>

      <?php
      $voting_10 = get_field('voting-10');
      if ($voting_10) {
        echo '<h3>' . $voting_10 . ' votes</h3>';
      }
      ?>
    </div>

  </div>
  <!-- END OF ROWS GRID -->




  <!-- START OF ROW 4 OF 5>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
  <div class="rankings-4-row-grid">

<!-- RANKING CARD BADTZ-MARU -->
    <div class="ranking-card">
      <?php
      $rank_number_11 = get_field('rank-number-11');
      if ($rank_number_11) {
        echo '<h3> Rank: ' . $rank_number_11 . '</h3>';
      }
      ?>

      <?php
      $rank_name_11 = get_field('rank-name-11');
      if ($rank_name_11) {
        echo '<h2>' . $rank_name_11 . '</h2>';
      }
      ?>


      <div class="ranking-image-row-4">
       <?php
        $rank_image_11 = get_field('rank-image-11');
        if ($rank_image_11) {
          echo '<img src="' . $rank_image_11['url'] . '" alt="' . $rank_image_11['alt'] . '">';
        }
        ?>
      </div>


      <?php
      $voting_11 = get_field('voting-11');
      if ($voting_11) {
        echo '<h3>' . $voting_11 . ' votes</h3>';
      }
      ?>
    </div>


    <!-- RANK CARD HANAMARUOBAKE -->
    <div class="ranking-card">
      <?php
      $rank_number_12 = get_field('rank-number-12');
      if ($rank_number_12) {
        echo '<h3> Rank: ' . $rank_number_12 . '</h3>';
      }
      ?>

      <?php
      $rank_name_12 = get_field('rank-name-12');
      if ($rank_name_12) {
        echo '<h2>' . $rank_name_12 . '</h2>';
      }
      ?>


      <div class="ranking-image-row-4">
        <?php
        $rank_image_12 = get_field('rank-image-12');
        if ($rank_image_12) {
          echo '<img src="' . $rank_image_12['url'] . '" alt="' . $rank_image_12['alt'] . '">';
        }
        ?>
      </div>

      <?php
      $voting_12 = get_field('voting-12');
      if ($voting_12) {
        echo '<h3>' . $voting_12 . ' votes</h3>';
      }
      ?>
    </div>




    <!-- RANKING CARD COGIMYUN -->
    <div class="ranking-card">
      <?php
      $rank_number_13 = get_field('rank-number-13');
      if ($rank_number_13) {
        echo '<h3> Rank: ' . $rank_number_13 . '</h3>';
      }
      ?>

      <?php
      $rank_name_13 = get_field('rank-name-13');
      if ($rank_name_13) {
        echo '<h2>' . $rank_name_13 . '</h2>';
      }
      ?>


      <div class="ranking-image-row-4">
        <?php
        $rank_image_13 = get_field('rank-image-13');
        if ($rank_image_13) {
          echo '<img src="' . $rank_image_13['url'] . '" alt="' . $rank_image_13['alt'] . '">';
        }
        ?>
      </div>

      <?php
      $voting_13 = get_field('voting-13');
      if ($voting_13) {
        echo '<h3>' . $voting_13 . ' votes</h3>';
      }
      ?>
    </div>


    <!-- RANKING CARD KEROPPI -->
   <div class="ranking-card">
      <?php
      $rank_number_14 = get_field('rank-number-14');
      if ($rank_number_14) {
        echo '<h3> Rank: ' . $rank_number_14 . '</h3>';
      }
      ?>

      <?php
      $rank_name_14 = get_field('rank-name-14');
      if ($rank_name_14) {
        echo '<h2>' . $rank_name_14 . '</h2>';
      }
      ?>


      <div class="ranking-image-row-4">
        <?php
        $rank_image_14 = get_field('rank-image-14');
        if ($rank_image_14) {
          echo '<img src="' . $rank_image_14['url'] . '" alt="' . $rank_image_14['alt'] . '">';
        }
        ?>
      </div>

      <?php
      $voting_14 = get_field('voting-14');
      if ($voting_14) {
        echo '<h3>' . $voting_14 . ' votes</h3>';
      }
      ?>
    </div>



    <!-- RANKING CARD WISH ME MELL -->
    <div class="ranking-card">
      <?php
      $rank_number_15 = get_field('rank-number-15');
      if ($rank_number_15) {
        echo '<h3> Rank: ' . $rank_number_15 . '</h3>';
      }
      ?>

      <?php
      $rank_name_15 = get_field('rank-name-15');
      if ($rank_name_2) {
        echo '<h2>' . $rank_name_2 . '</h2>';
      }
      ?>


      <div class="ranking-image-row-4">
        <?php
        $rank_image_15 = get_field('rank-image-15');
        if ($rank_image_15) {
          echo '<img src="' . $rank_image_15['url'] . '" alt="' . $rank_image_15['alt'] . '">';
        }
        ?>
      </div>


      <?php
      $voting_15 = get_field('voting-15');
      if ($voting_15) {
        echo '<h3>' . $voting_15 . ' votes</h3>';
      }
      ?>
    </div>


  </div>
<!-- END OF ROWS GRID -->






















</main>

<?php get_footer(); ?>