<?php get_header(); ?>

<div class="marge">

<section class="welcome-section">
  <div class="welcome-container">
    <div class="welcome-image">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img1.jpg" alt="image1">
    </div>
    <!-- Texte -->
    <div class="welcome-text">
      <h1>
         Bienvenue sur Rise Her : un espace où chaque Rose retrouve soutien, écoute et espoir.
       
      </h1>
      <br>
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


<section class="roses">
    <div class="rosesname">
        <div class="rosesnamess">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/chef2.png" alt="rosef">
            <div>
                <h3 class="rosenbr">Rose001</h3>
                <p class="rosetext">« Le quiz m’a ouvert les yeux sur les violences psychologiques que je vivais et que j’ai normalisé. »</p>
            </div>
        </div>
        <div class="rosesnamess">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/forum2.png" alt="rose">
            <div>
                <h3 class="rosenbr">Rose999</h3>
                <p class="rosetext">« Le forum m’a permis de partager mon histoire et de recevoir un soutien précieux. »</p>
            </div>
        </div>
        <div class="rosesnamess">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quizzic.png" alt="rose" >
            <div>
                <h3 class="rosenbr">Rose26</h3>
                <p class="rosetext">« Les spécialistes de Rise Her, m’ont aidée à comprendre mes émotions et à défendre mes droits, offrant un soutien essentiel à mon rétablissement. »</p>
            </div>
        </div>
        <div class="rosesnamess">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/progricone.png" alt="roses">
            <div>
                <h3 class="rosenbr">Rose640</h3>
                <p class="rosetext">« Les articles du blog m’ont éclairée sur les violences et m’ont fourni des conseils pratiques. »</p>
            </div>
        </div>
    </div>
</section>

<h2 class="title">Nos Spécialités</h2>
<p class="specialites">Nos spécialistes sont là pour vous écouter et vous accompagner avec bienveillance, en offrant un soutien adapté à chaque étape de votre parcours.</p>

</div>


<div class="team-section">
  <div class="team-member">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avocate.jpg" alt="spec">
    <h3>Claire Marchand</h3>
    <p><strong>Avocate</strong> en droit des victimes, est là pour vous accompagner avec bienveillance et défendre vos droits avec force.</p>
  </div>
  <div class="team-member">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/psychologue.jpg" alt="spec">
    <h3>Sophie Dubois</h3>
    <p><strong>Psychologue</strong> douce et à l'écoute, vous aide à retrouver confiance et sérénité dans un espace sûr et rassurant.</p>
  </div>
</div>



<?php get_footer(); ?>
