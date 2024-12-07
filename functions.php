<?php

function ajouter_styles_personnalises() {
    // Charger Bootstrap en premier (si ce n'est pas déjà fait dans ton thème)
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

    // Charger ton CSS personnalisé après Bootstrap
    wp_enqueue_style(
        'style-personnalise', 
        get_template_directory_uri() . '/assets/css/app.css', 
        array('bootstrap-css'), // Assure-toi que bootstrap est chargé avant
        null, // Pour la version, tu peux laisser null ou ajouter une version dynamique
        'all'
    );
}
add_action('wp_enqueue_scripts', 'ajouter_styles_personnalises');

function enqueue_bootstrap() {
    // Charger Bootstrap JS, il faut s'assurer qu'il soit chargé après jQuery
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');

function my_custom_scripts() {
    // Charger ton script JS après jQuery
    wp_enqueue_script(
        'custom-script', 
        get_template_directory_uri() . '/assets/js/app.js', 
        array('jquery'), // Assure-toi que jQuery est chargé avant
        null, 
        true
    );
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');





