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



function ajouter_scripts() {
    wp_enqueue_script('jquery'); // Charge jQuery
    wp_enqueue_script(
        'custom-script', 
        get_template_directory_uri() . '/assets/js/app.js', 
        array('jquery'),  // Assure que jQuery est chargé avant ton script
        null, 
        true 
    );
}
add_action('wp_enqueue_scripts', 'ajouter_scripts');

// Fonction pour vérifier si le nom d'utilisateur existe déjà
function check_unique_username($username) {
    if (username_exists($username)) {
        // Si le nom existe, rajouter un chiffre aléatoire jusqu'à ce qu'il soit unique
        $username = 'Rose' . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);
        return check_unique_username($username); // Récursion si le nom est déjà pris
    }
    return $username;
}

// Exemple d'utilisation dans la création de l'utilisateur
function custom_user_registration($user_login, $user_email, $user_pass) {
    $rose_number = str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);  // Génère un numéro aléatoire
    $rose_username = 'Rose' . $rose_number;

    // Vérification si le nom est unique
    $rose_username = check_unique_username($rose_username);

    $userdata = array(
        'user_login' => $rose_username,
        'user_email' => $user_email,
        'user_pass' => $user_pass,
        'display_name' => $rose_username, // Nom d'affichage
    );

    // Créer l'utilisateur
    $user_id = wp_insert_user($userdata);
}







