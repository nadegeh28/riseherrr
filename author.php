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



    <div class="container">
    <p class="question">Écrivez tout ce que vous désirez, <br>
    Ceci est votre jardin secret. 💜
    </p>
    <form id="secretForm">
        <div class="input-area">
            <textarea class="text-input" placeholder="Écrivez ici..." id="secretTextarea"></textarea>
            <button type="button" class="update-button" id="saveButton">Mettre à jour</button>
        </div>
    </form>
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


<script>
    const saveButton = document.getElementById('saveButton');
const secretTextarea = document.getElementById('secretTextarea');

// Vérifier si le texte est déjà stocké dans localStorage
if (localStorage.getItem('secretText')) {
    secretTextarea.value = localStorage.getItem('secretText'); // Remplir le textarea avec le texte stocké
}

// Ajouter un événement au bouton "Mettre à jour"
saveButton.addEventListener('click', () => {
    const userText = secretTextarea.value; // Récupérer le texte de la zone de texte

    // Sauvegarder le texte dans localStorage sans vérifier si le champ est vide
    localStorage.setItem('secretText', userText); // Sauvegarder dans localStorage
    alert("Votre jardin secret a été mis à jour !"); // Alerte de confirmation
});

</script>






</div>
<?php get_footer(); ?>