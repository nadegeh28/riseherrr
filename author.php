<?php get_header();?>

<div class="marge">

<div class="author-container">
    <div class="author-profile d-flex align-items-center gap-3">
        <div class="author-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone.png" alt="rosef" class="rose">
        </div>
        <div class="author-info">
            <?php $author = get_queried_object(); ?>
            <h1 class="author-name"><?php echo esc_html($author->user_login); ?></h1>
            <p class="note">
                Pour conserver votre anonymat, votre utilisateur sera sous le nom de 
                <strong><?php echo esc_html($current_user->user_login); ?></strong>.
            </p>
        </div>
    </div>
</div>


<p class="author-message">
    « Tu mérites d’être aimée avec respect, douceur et dignité. <br>
    Ne laisse jamais la violence définir ta valeur, car en toi réside <br>
    une force immense et une lumière qui mérite tout ce qu’il y a de meilleur. »
</p>


    <?php
if (isset($_POST['update_feelings'])) {
    $user_id = get_current_user_id();
    $feelings = sanitize_text_field($_POST['feelings']);


    update_user_meta($user_id, 'feelings', $feelings);

    $success_message = '<p class="feedback-message fade-in">Journal mis à jour avec succès.</p>';
}

// Récupération des ressentis existants
$user_id = get_current_user_id();
$feelings = get_user_meta($user_id, 'feelings', true);
?>


    <?php if (isset($success_message)) echo $success_message; ?>

    <div class="container">
    <p class="question">Écrivez tout ce que vous désirez, <br>
    Ceci est votre jardin secret. 💜
    </p>
    <div class="input-area">
        <textarea  class="text-input" placeholder="Écrivez ici..."></textarea>
    </div>
    <button class="update-button">Mettre à jour</button>
</div>

<div class="msg">
    <p class="msg-rappel">Vous n’êtes pas seule. Si vous êtes victime de violences ou connaissez 
    quelqu’un qui a besoin d’aide, voici les ressources disponibles en Belgique :</p>

    <p class="msg-rappel">0800 30 030 : Écoute violences conjugales <br>
    112 : Numéro d’urgence pour contacter la police, les pompiers <br>
    ou les services médicaux en cas de danger immédiat.</p>

    <p class="msg-rappel">Vous n’êtes pas seule. Si vous êtes victime de violences ou connaissez 
    quelqu’un qui a besoin d’aide, voici les ressources disponibles en Belgique :</p>

    <p class="msg-rappel">Pour des informations et ressources complémentaires, consultez notre page 
    dédiée de contact.</p>


    <p>Vous méritez un espace sûr et respectueux. Nous sommes là pour vous. 💜</p>



</div>

<br><br><br><br><br><br>







</div>
<?php get_footer(); ?>