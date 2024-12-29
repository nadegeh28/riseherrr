<?php get_header(); ?>
<div class="marge">
    <div class="blog-containerr">
        <h1 class="blog-container text-center">Blog</h1>
    
        <div class="blog-introduction text-center">
            <h6>Bienvenue dans notre section blog : un espace pour s’informer et agir.</h6>
            <p>Retrouvez ici une sélection d’articles essentiels qui dénoncent les féminicides en Belgique. Ce blog est conçu pour sensibiliser, informer et rendre visibles des drames trop souvent ignorés. Nous rassemblons des analyses, témoignages et actualités pour permettre à chacune de mieux comprendre et participer à la lutte contre ce fléau.</p>
            <p>Parce que chaque histoire mérite d’être entendue, et chaque injustice, combattue.</p>
        </div>
        <br>

        <!-- Blog Cards Section -->
        <div class="blog-containerr">
            <div class="row justify-content-center">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="custom-card card h-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog1.png" alt="blog" class="card-img-top blog-image">
                        <div class="card-body">
                            <p class="blog-titre">Féminicides : la Belgique toujours à la traine sur la collecte des données</p>
                            <a href="#" class="btn btn-primary">Lire l'article</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="custom-card card h-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog2.jpg" alt="blog" class="card-img-top blog-image">
                        <div class="card-body">
                            <p class="blog-titre">Les violences psychologiques : l'arme invisible de la domination</p>
                            <a href="#" class="btn btn-primary">Lire l'article</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="custom-card card h-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog3.jpg" alt="blog" class="card-img-top blog-image">
                        <div class="card-body">
                            <p class="blog-titre">La reconstruction après les violences : Un chemin vers soi</p>
                            <a href="#" class="btn btn-primary">Lire l'article</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>


