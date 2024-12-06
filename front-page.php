<?php get_header(); ?>

<section class="welcome-section">
  <div class="welcome-container">
    <!-- Image circulaire -->
    <div class="welcome-image">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img1.jpg" alt="image1">
    </div>
    <!-- Texte -->
    <div class="welcome-text">
      <h2>
         Bienvenue sur Rise Her : un espace où chaque Rose retrouve soutien, écoute et espoir.
       
      </h2>
      <p>
        Chaque femme mérite de se sentir en sécurité, écoutée et respectée. Ici, nous vous offrons un espace pour guérir, partager et reprendre le contrôle de votre vie. Ensemble, nous bâtissons un avenir où vous pouvez vous épanouir librement.
      </p>
      <br><br>
      <a href="qui-sommes-nous.php" class="welcome-link">
        <?php echo "Qui sommes nous ?"; ?>
      </a>
    </div>
  </div>
</section>




<?php get_footer(); ?>
