<?php get_header(); ?>

<div class="marge">
    <h1 class="noustitle">Forum</h1>
    <div class="forum-text">
        <h6 class="titrecon">Bienvenue dans la communauté spécialement créée pour vous, 
        <br>chères Roses : un espace de partage et de soutien bienveillant.</h6>
        <p>Nous sommes ravis de vous accueillir sur le forum de Rise Her, un lieu dédié aux femmes ayant traversé des violences physiques et psychologiques.</p>
    </div>

    <section>
        <!-- Témoignages statiques -->
        <hr class="title-underline">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone.png" alt="rosef" class="roseforum">
        <p class="rosenbr">Rose002</p>
        <div class="testimony-container">
            <p>Après trois ans dans une relation toxique, je me sentais complètement brisée. Les forums de *Les Roses* ont été mon refuge. J’ai pu partager mes doutes et mes peurs sans jugement.</p>
        </div>

        <hr class="title-underline">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone.png" alt="rosef" class="roseforum">
        <p class="rosenbr">Rose042</p>
        <div class="testimony-container">
            <p>Je suis une retraitée qui, après des décennies de violences verbales et psychologiques, ne savait plus quoi faire ni à qui en parler.</p>
        </div>

        <hr class="title-underline">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone.png" alt="rosef" class="roseforum">
        <p class="rosenbr">Rose270</p>
        <div class="testimony-container">
            <p>Je me sentais isolée et honteuse après avoir subi des pressions dans une relation. RiseHer m’a ouvert les yeux.</p>
        </div>

        <hr class="title-underline">

        <!-- Témoignages dynamiques depuis WordPress -->
        <?php
        $comments = get_comments([
            'post_id' => get_the_ID(),
            'status' => 'approve',
            'number' => 50, // Nombre maximal de commentaires affichés
        ]);

        foreach ($comments as $comment) :
        ?>
            <hr class="title-underline">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone.png" alt="rosef" class="roseforum">
            <p class="rosenbr"><?php echo esc_html($comment->comment_author); ?></p>
            <div class="testimony-container">
                <p><?php echo esc_html($comment->comment_content); ?></p>
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
