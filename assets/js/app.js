jQuery(document).ready(function($) {
    // Quand l'utilisateur clique sur un label
    $(".options label").click(function() {
        // Vérifier si le clic fonctionne
        console.log("Label cliqué : ", $(this).text()); // Affiche le texte du label dans la console

        // Supprimer la classe "active" de tous les labels
        $(".options label").removeClass("active");

        // Ajouter la classe "active" au label cliqué
        $(this).addClass("active");
    });
});

