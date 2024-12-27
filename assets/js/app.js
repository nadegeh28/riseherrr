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

// Récupérer le bouton et la zone de texte
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


