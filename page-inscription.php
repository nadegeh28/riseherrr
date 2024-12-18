<?php get_header(); ?>

<div class="container-form fade-in">
    <div id="message-container">
        <?php
        // Affichage des messages d'erreur basés sur les paramètres d'URL
        if (isset($_GET['error'])) {
            $error_code = sanitize_text_field($_GET['error']);
            $error_message = '';

            switch ($error_code) {
                case 'password_mismatch':
                    $error_message = 'Les mots de passe ne correspondent pas. Veuillez réessayer.';
                    break;
                case 'registration_failed':
                    $error_message = 'Une erreur est survenue lors de l\'inscription. Veuillez réessayer.';
                    break;
                default:
                    $error_message = 'Une erreur inconnue est survenue. Veuillez réessayer.';
                    break;
            }

            echo '<div class="error-message">' . esc_html($error_message) . '</div>';
        }
        ?>
    </div>

    <form id="inscription-form" method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" class="formulaire-inscription">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logorempfonce.png" alt="Riseher" class="logo-inscr">
        
        <div class="form-group">
            <input type="email" id="email" name="email" required class="form-input" placeholder="Adresse E-mail">
        </div>

        <div class="form-group">
            <input type="password" id="motdepasse" name="motdepasse" required class="form-input" placeholder="Mot de passe">
        </div>

        <div class="form-group">
            <input type="password" id="motdepasse-confirm" name="motdepasse-confirm" required class="form-input" placeholder="Confirmation du mot de passe">
        </div>

        <input type="hidden" name="submit" value="inscription_form">
        
        <button type="submit" class="btn-inscription fade-in" id="submit-button">S'inscrire</button>
    </form>
</div>

<?php

// Traitement du formulaire d'inscription
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

    // Créer un nouvel utilisateur
    $rose_number = str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);  // Génère un numéro aléatoire entre 001 et 999
    $rose_username = 'Rose' . $rose_number;

    // Créer l'utilisateur avec un mot de passe et un nom d'affichage
    $userdata = array(
        'user_login' => $rose_username,   // Nom d'utilisateur unique
        'user_email' => $email,           // Adresse e-mail
        'user_pass' => $motdepasse,       // Mot de passe
        'display_name' => $rose_username, // Nom d'affichage
    );

    // Insérer l'utilisateur dans la base de données
    $user_id = wp_insert_user($userdata);

    // Vérifier si l'insertion s'est bien passée
    if (is_wp_error($user_id)) {
        // Si une erreur se produit, rediriger avec un message d'erreur
        $error_message = $user_id->get_error_message();
        echo '<div class="error-message">Erreur : ' . $error_message . '</div>';
        wp_redirect(add_query_arg('error', 'registration_failed', $_SERVER['REQUEST_URI']));
        exit;
    } else {
        // Si l'insertion est réussie, rediriger vers la page de l'archive de l'auteur
        wp_redirect(get_author_posts_url($user_id)); // Rediriger vers la page de l'archive de l'auteur
        exit;
    }
}
?>


<?php get_footer(); ?>
