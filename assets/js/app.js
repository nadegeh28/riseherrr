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

document.addEventListener('DOMContentLoaded', function() {
    // Détecter l'état de connexion via la classe du body
    var profileButton = document.querySelector('.btn-profile');
    var logoutButton = document.querySelector('.btn-logout');
    var loginButton = document.querySelector('.btn-login');
    var registerButton = document.querySelector('.btn-register');

    if (document.body.classList.contains('logged-in')) {
        if (profileButton) profileButton.style.display = 'inline-block';
        if (logoutButton) logoutButton.style.display = 'inline-block';
        if (loginButton) loginButton.style.display = 'none';
        if (registerButton) registerButton.style.display = 'none';
    } else {
        if (profileButton) profileButton.style.display = 'none';
        if (logoutButton) logoutButton.style.display = 'none';
        if (loginButton) loginButton.style.display = 'inline-block';
        if (registerButton) registerButton.style.display = 'inline-block';
    }
});
