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
        get_template_directory_uri() . '/js/app.js', 
        array('jquery'),  // Assure que jQuery est chargé avant ton script
        null, 
        true 
    );
}
add_action('wp_enqueue_scripts', 'ajouter_scripts');

// Fonction pour vérifier si le nom d'utilisateur est unique
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

    if (is_wp_error($user_id)) {
        return $user_id;
    }

    return $user_id;
}

// Ajout de la fonction de création d'utilisateur lors de l'envoi du formulaire d'inscription
function handle_registration_form() {
    if (isset($_POST['submit']) && $_POST['submit'] === 'inscription_form') {
        // Récupérer les données du formulaire
        $email = sanitize_email($_POST['email']);
        $motdepasse = $_POST['motdepasse'];
        $motdepasse_confirm = $_POST['motdepasse-confirm'];

        // Vérification des mots de passe
        if ($motdepasse !== $motdepasse_confirm) {
            wp_redirect(add_query_arg('error', 'password_mismatch', $_SERVER['REQUEST_URI']));
            exit;
        }

        // Créer l'utilisateur et récupérer l'ID
        $user_id = custom_user_registration('', $email, $motdepasse);

        // Si l'insertion échoue, rediriger avec l'erreur
        if (is_wp_error($user_id)) {
            wp_redirect(add_query_arg('error', 'registration_failed', $_SERVER['REQUEST_URI']));
        } else {
            wp_redirect('http://localhost:8888/riseher/index.php/profil/');
        }
        exit;
    }
}
add_action('init', 'handle_registration_form');
