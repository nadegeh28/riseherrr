<?php get_header(); ?>

<div class="marge">
    <h1 class="noustitle">Forum</h1>
    <br><br>
    <div class="forum-text">
        <h6 class="titrecon">Bienvenue dans la communauté spécialement créée pour vous, 
        <br>chères Roses : un espace de partage et de soutien bienveillant.</h6>
        <p class="forum-intro">Nous sommes ravis de vous accueillir sur le forum de Rise Her, un lieu dédié aux femmes ayant traversé des épreuves de violences physiques et psychologiques. Ici, vous trouverez un espace sécurisé où vous pourrez :
        </p>
        <p class="forum-intro">Lire des témoignages inspirants et réconfortants de celles qui, comme vous, ont choisi de se relever.
            <br>
            Partager votre propre histoire, si vous le souhaitez, et contribuer à donner de la force à d'autres.
            <br>
            Échanger avec une communauté bienveillante, solidaire et à l'écoute, où chaque voix compte et est respectée.
            <br>
            La communauté Rose a été créée pour que personne ne se sente seule face à l’épreuve. Nous croyons en la puissance des mots pour soigner, libérer et inspirer. Ensemble, nous avançons pas à pas, dans un environnement d’entraide et de compréhension mutuelle.
        </p>
        <p class="forum-intro">Ici, la bienveillance est notre règle d’or . Vous serez toujours écoutée, jamais jugée. Prenez le temps de lire, d’écrire ou simplement de vous sentir entourée par des femmes courageuses et inspirantes.
        </p>
    </div>
    <br><br><br>

    <section>
        <!-- Témoignages statiques -->
        <hr class="title-underline">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone.png" alt="rosef" class="roseforum">
        <p class="rosenbr">rose002</p>
        <div class="testimony-container">
            <p class="forum-message">Après trois ans dans une relation toxique, je me sentais complètement brisée. 
                Les forums de *Les Roses* ont été mon refuge. J’ai pu partager mes doutes et mes peurs sans jugement. 
                Une membre m’a conseillé de prendre contact avec une psychologue via le site, ce que j’ai fait. 
                Grâce à ce soutien, j’ai trouvé la force de quitter mon compagnon et de commencer une nouvelle vie. 
                Aujourd’hui, je participe régulièrement aux discussions pour soutenir d’autres Roses.
            </p>
        </div>

        <hr class="title-underline">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone.png" alt="rosef" class="roseforum">
        <p class="rosenbr">rose042</p>
        <div class="testimony-container">
            <p class="forum-message">Je suis une retraitée qui, après des décennies de violences verbales et psychologiques, 
                ne savait plus quoi faire ni à qui en parler. Grâce au quizz de RiseHer, 
                j’ai enfin compris que je n’étais pas folle : ce que je vivais était bien de la violence. 
                J’ai osé poser des mots sur mes expériences et trouvé des ressources pour affronter cette situation. 
                Les discussions avec d’autres femmes de ma génération sur le forum m’ont donné une immense force.</p>
        </div>

        <hr class="title-underline">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone.png" alt="rosef" class="roseforum">
        <p class="rosenbr">rose270</p>
        <div class="testimony-container">
            <p class="forum-message">Je me sentais isolée et honteuse après avoir subi des pressions dans une relation. 
                RiseHer m’a ouvert les yeux. Le quiz m’a aidée à reconnaître des schémas de manipulation. 
                Ensuite, partager mon histoire anonymement sur le forum m’a permis de recevoir des conseils bienveillants. 
                Les témoignages d’autres Roses m’ont inspirée à mettre des limites et à me recentrer sur moi-même. Aujourd’hui, 
                je me sens plus forte et moins seule.</p>
        </div>


        <?php
        $comments = get_comments([
            'post_id' => get_the_ID(),
            'status' => 'approve',
            'number' => 50, 
        ]);

        foreach ($comments as $comment) :
        ?>
            <hr class="title-underline">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone.png" alt="rosef" class="roseforum">
            <p class="rosenbr"><?php echo esc_html($comment->comment_author); ?></p>
            <div class="testimony-container">
                <p class="forum-message"><?php echo esc_html($comment->comment_content); ?></p>
            </div>
        <?php endforeach; ?>

        <hr class="title-underline">

        <?php if (is_user_logged_in()) : ?>
            <?php
            $current_user = wp_get_current_user();
            $user_comment_count = get_comments([
                'user_id' => $current_user->ID,
                'post_id' => get_the_ID(),
                'count' => true,
            ]);

            if ($user_comment_count < 5) : ?>
               <div class="forumtext">
        <form method="post" action="">
            <textarea name="user_testimony" placeholder="Écrivez votre témoignage en toute anonymat..."></textarea>
            <button type="submit" name="submit_testimony" class="btn-forum">Envoyer</button>
        </form>
    </div>
                
            <?php else : ?>
                <p class="error-msg">Vous avez atteint la limite de 5 témoignages.</p>
            <?php endif; ?>

            <?php
            if (isset($_POST['submit_testimony']) && !empty($_POST['user_testimony'])) {
                $comment_data = [
                    'comment_post_ID' => get_the_ID(),
                    'comment_content' => sanitize_text_field($_POST['user_testimony']),
                    'user_id' => $current_user->ID,
                    'comment_author' => $current_user->display_name,
                    'comment_approved' => 1,
                ];
                wp_insert_comment($comment_data);
                echo '<p class="success-msg">Votre témoignage a été publié avec succès.</p>';
                echo '<meta http-equiv="refresh" content="0">';
            }
            ?>
        <?php else : ?>
            <p class="error-msg">Veuillez vous connecter pour laisser un témoignage.</p>
        <?php endif; ?>
    </section>
</div>

<?php get_footer(); ?>
