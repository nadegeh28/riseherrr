<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">



    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div class="main-content">


<div class="top-bar">
<?php if (is_user_logged_in()) : ?>
    <?php $current_user = wp_get_current_user(); ?>
                <a href="<?php echo 'https://riseher.emu.isfsc.be/author/' . $author->user_login; ?>" class="log">Mon Profil</a>
                <a href="<?php echo wp_logout_url('https://riseher.emu.isfsc.be/'); ?>" class="log">Se déconnecter</a>
            <?php else : ?>
                <a href="https://riseher.emu.isfsc.be/connexion/" class="log">Se connecter</a>
                <a href="https://riseher.emu.isfsc.be/inscription/" class="log">S'inscrire</a>
            <?php endif; ?>
    </div>

    <header>
        <nav class="navbar">
            <ul class="nav-left">
                <li><a href="https://riseher.emu.isfsc.be">Accueil</a></li>
                <li><a href="https://riseher.emu.isfsc.be/a-propos/">À propos</a></li>
                <li><a href="https://riseher.emu.isfsc.be/contact/">Contact</a></li>
            </ul>
            
            <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoclair.png" alt="logo">
            </div>
            
            <ul class="nav-right">
                <li><a href="#">Forum</a></li>
                <li><a href="https://riseher.emu.isfsc.be/blog/">Blog</a></li>
                <li><a href="https://riseher.emu.isfsc.be/formulaire/">Formulaire</a></li>
            </ul>
        </nav>
    </header>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    // Sélectionne les boutons d'authentification
    var profileButton = document.querySelector('.btn-profile');
    var loginButton = document.querySelector('.btn-login');
    var registerButton = document.querySelector('.btn-register');

    // Vérifie si le corps de la page a la classe 'logged-in'
    if (document.body.classList.contains('logged-in')) {
        // Si l'utilisateur est connecté, affiche le bouton "Mon Profil" et masque les autres
        if (profileButton) profileButton.style.display = 'block';
        if (loginButton) loginButton.style.display = 'none';
        if (registerButton) registerButton.style.display = 'none';
    } else {
        // Si l'utilisateur n'est pas connecté, affiche les boutons "Se connecter" et "S'inscrire" et masque le bouton "Mon Profil"
        if (profileButton) profileButton.style.display = 'none';
        if (loginButton) loginButton.style.display = 'block';
        if (registerButton) registerButton.style.display = 'block';
    }
});
</script>
</body>
</html>

