// Ajout de la vérification si le script est bien chargé
console.log('Script chargé');

// Ton code JavaScript ici
jQuery(document).ready(function($) {
    $(".options label").click(function() {
        // Supprimer la classe "active" de tous les labels
        $(".options label").removeClass("active");

        // Ajouter la classe "active" au label cliqué
        $(this).addClass("active");
    });
});




