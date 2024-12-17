<?php get_header(); ?>
<div class="marge">
    <div class="blog-containerr">
        <!-- Titre principal -->
        <h1 class="blog-container">Blog</h1>
        
        <!-- Introduction -->
        <div class="blog-introduction">
            <h6>Bienvenue dans notre section blog : un espace pour s’informer et agir.</h6>
            <p>Retrouvez ici une sélection d’articles essentiels qui dénoncent les féminicides en Belgique. Ce blog est conçu pour sensibiliser, informer et rendre visibles des drames trop souvent ignorés. Nous rassemblons des analyses, témoignages et actualités pour permettre à chacune de mieux comprendre et participer à la lutte contre ce fléau.</p>
            <p>Parce que chaque histoire mérite d’être entendue, et chaque injustice, combattue.</p>
        </div>

        <!-- Conteneur des articles -->
        <div class="blog-articles-container">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <div class="blog-article-card">
                        <!-- Image mise en avant -->
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()): ?>
                                <div class="blog-article-image">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php endif; ?>
                        </a>

                        <!-- Titre de l'article -->
                        <div class="blog-article-content">
                            <h3 class="article-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Aucun article disponible pour le moment.</p>
            <?php endif; ?>

            <!-- Lien direct vers l'article spécifique que vous avez mentionné -->
            <div class="specific-article-link">
                <a href="http://localhost:8888/riseher/index.php/2024/12/16/feminicides-la-belgique-toujours-a-la-traine-sur-la-collecte-des-donnees/" class="read-more-link">Lire l'article spécifique sur les féminicides en Belgique</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

