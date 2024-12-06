<?php get_header(); ?>

<section class="welcome-section">
  <div class="welcome-container">
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


    <div class="container">
    <div class="outer-circle">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="circle">33%</div>
                <p class="description">Environ 33% des femmes en Europe ont subi des violences physiques. Cela inclut les coups et les agressions de la part de partenaires ou de proches.</p>
            </div>
            <div class="col-md-4 text-center">
                <div class="circle">60%</div>
                <p class="description">Près de 60% des femmes ont été victimes de violences psychologiques, comme le contrôle et l’intimidation.</p>
            </div>
            <div class="col-md-4 text-center">
                <div class="circle">25%</div>
                <p class="description">Environ 25% des femmes ont subi à la fois des violences physiques et psychologiques.</p>
            </div>
        </div>
    </div>
</div>




<?php get_footer(); ?>
