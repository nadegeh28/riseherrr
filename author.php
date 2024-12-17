<?php get_header();?>

<div class="marge">

<div class="author-profile">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logowelleness.png" alt="Riseher" class="authorimg">

        <div class="author-info">
        <?php

$author = get_queried_object();
?>
            <h1 class="author-name"><?php echo esc_html($author->user_login); ?></h1>
            <p class="note">
                Pour conserver votre anonymat, votre utilisateur sera sous le nom de <strong><?php echo esc_html($current_user->user_login); ?></strong>.
            </p>
            <p class="author-message">
                « Tu mérites d’être aimée avec respect, douceur et dignité. 
                Ne laisse jamais la violence définir ta valeur, car en toi réside 
                une force immense et une lumière qui mérite tout ce qu’il y a de meilleur. »
            </p>
            
        </div>
    </div>

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
    <p class="question">Comment vous sentez-vous aujourd’hui ?</p>
    <div class="input-area">
        <textarea placeholder="Écrivez ici..." class="text-input"></textarea>
    </div>
    <button class="update-button">Mettre à jour</button>
</div>

<div class="msg">
    <p>Vous n’êtes pas seule. Si vous êtes victime de violences ou connaissez 
    quelqu’un qui a besoin d’aide, voici les ressources disponibles en Belgique :</p>

    <p>0800 30 030 : Écoute violences conjugales <br>
    112 : Numéro d’urgence pour contacter la police, les pompiers <br>
    ou les services médicaux en cas de danger immédiat.</p>

    <p>Vous n’êtes pas seule. Si vous êtes victime de violences ou connaissez 
    quelqu’un qui a besoin d’aide, voici les ressources disponibles en Belgique :</p>

    <p>Pour des informations et ressources complémentaires, consultez notre page 
    dédiée de contact.</p>


    <p>Vous méritez un espace sûr et respectueux. Nous sommes là pour vous. 💜</p>



</div>

<br><br><br><br><br><br>







</div>
<?php get_footer(); ?>