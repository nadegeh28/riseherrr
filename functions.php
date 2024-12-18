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
function custom_user_registration($user_email, $user_pass) {
    // Créer un nom d'utilisateur unique avec "Rose" suivi d'un nombre
    $rose_username = 'Rose' . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);

    // Vérification si le nom est unique
    $rose_username = check_unique_username($rose_username);

    // Créer l'utilisateur
    $userdata = array(
        'user_login' => $rose_username,
        'user_email' => $user_email,
        'user_pass' => $user_pass,
        'display_name' => $rose_username, // Nom d'affichage
    );

    $user_id = wp_insert_user($userdata);

    if (is_wp_error($user_id)) {
        return $user_id;
    }

    return $user_id;
}

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

        // Créer un nom d'utilisateur unique avec "Rose" suivi d'un nombre
        $rose_number = str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);  // Génère un numéro aléatoire entre 001 et 999
        $rose_username = 'Rose' . $rose_number;

        // Convertir le nom d'utilisateur en minuscule
        $rose_username = strtolower($rose_username);

        // Créer l'utilisateur et récupérer l'ID
        $userdata = array(
            'user_login' => $rose_username,   // Nom d'utilisateur unique
            'user_email' => $email,           // Adresse e-mail
            'user_pass' => $motdepasse,       // Mot de passe
            'display_name' => $rose_username, // Nom d'affichage
        );

        $user_id = wp_insert_user($userdata);

        // Si l'insertion échoue, rediriger avec l'erreur
        if (is_wp_error($user_id)) {
            wp_redirect(add_query_arg('error', 'registration_failed', $_SERVER['REQUEST_URI']));
            exit;
        } else {
            // Rediriger vers la page de profil de l'utilisateur (page /author/{rose_username}/)
            wp_redirect(home_url('/index.php/author/' . trim($rose_username))); // Enlever les espaces avant et après
            exit;
        }
    }
}
add_action('init', 'handle_registration_form');



function rediriger_apres_connexion($redirect_to, $request, $user) {
    // Vérifie que l'utilisateur est un utilisateur normal, pas un administrateur
    if (!current_user_can('administrator', $user->ID)) {
        // Redirige vers la page de profil de l'utilisateur (par exemple 'author.php' avec l'ID de l'utilisateur)
        $redirect_to = (home_url('/index.php/author/' . $user->user_login));
    }
    return $redirect_to;
}
add_filter('login_redirect', 'rediriger_apres_connexion', 10, 3);


function afficher_nom_utilisateur() {
    if (is_user_logged_in()) {
        $current_user = wp_get_current_user();
        // Retourne juste le nom d'utilisateur sans balises HTML
        return $current_user->user_login;
    } else {
        return 'Vous devez être connecté pour voir votre profil.';
    }
}
add_shortcode('nom_utilisateur', 'afficher_nom_utilisateur');

function riseher_enqueue_styles() {
    wp_enqueue_style('riseher-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'riseher_enqueue_styles');


function custom_body_classes($classes) {
    if (is_user_logged_in()) {
        $classes[] = 'logged-in';
    } else {
        $classes[] = 'logged-out';
    }
    return $classes;
}
add_filter('body_class', 'custom_body_classes');

function add_auth_links() {
    if (is_user_logged_in()) {
        $logout_url = wp_logout_url(home_url());
        $my_account_url = get_permalink(get_option('woocommerce_myaccount_page_id')); // Remplacez ceci par votre URL de compte utilisateur
        echo '<a href="' . esc_url($my_account_url) . '" class="btn-profile">Mon compte</a>';
        echo '<a href="' . esc_url($logout_url) . '" class="btn-logout">Déconnexion</a>';
    } else {
        $register_url = wp_registration_url();
        $login_url = wp_login_url();
        echo '<a href="' . esc_url($register_url) . '" class="btn-register">S\'inscrire</a>';
        echo '<a href="' . esc_url($login_url) . '" class="btn-login">Se connecter</a>';
    }
}
