<?php
// Fonction pour ajouter des styles personnalisés
function ajouter_styles_personnalises() {
    wp_enqueue_style(
        'style-personnalise',
        get_template_directory_uri() . '/assets/css/app.css',
        array(), // Pas de dépendance ici
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'ajouter_styles_personnalises');
