<?php

function ajouter_styles_personnalises() {
    wp_enqueue_style(
        'style-personnalise',
        get_template_directory_uri() . '/assets/css/app.css',
        array(), 
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'ajouter_styles_personnalises');

function enqueue_bootstrap() {
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');


function ajouter_scripts_personnalises() {
    // Enregistrement du script app.js
    wp_enqueue_script(
        'app-script', // Identifiant unique pour ton script
        get_template_directory_uri() . '/assets/js/app.js', // Chemin vers ton fichier app.js
        array(), // Dépendances (si aucune, laisse un tableau vide)
        null, // Version du fichier (si tu la laisses vide, WordPress utilisera la version du fichier)
        true // Définir "true" permet de charger le script en bas de la page (avant la balise </body>)
    );
}

// Ajoute l'action pour charger le script
add_action('wp_enqueue_scripts', 'ajouter_scripts_personnalises');




