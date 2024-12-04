<?php

// Enqueue les styles personnalisés
function ajouter_styles_personnalises() {
    wp_enqueue_style(
        'style-personnalise', 
        get_template_directory_uri() . '/assets/css/app.css'
    );
}
add_action('wp_enqueue_scripts', 'ajouter_styles_personnalises');

// Enqueue Bootstrap CSS et JS
function enqueue_bootstrap() {
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');

// Enqueue les styles pour les conditions générales
function enqueue_conditions_generales_styles() {
    if (is_page_template('page-conditions-generales.php')) {
        wp_enqueue_style('conditions-generales-styles', get_template_directory_uri() . '/app.css');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_conditions_generales_styles');

?>
