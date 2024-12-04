<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?> <!-- Ceci est important pour charger le CSS -->
</head>
<body <?php body_class(); ?>>

    <header>
        <nav class="navbar">
            <ul class="nav-left">
                <li><a href="#" class="active">Accueil</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="#">Contact</a></li>
                <div class="logo">
                <img src="logo.png" alt="Logo">
            </div>
                <li><a href="#">Forum</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Formulaire</a></li>
            </ul>
            
            <ul class="nav-right">
                <li><a href="#">S'inscrire</a></li>
                <li><a href="#">Se connecter</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>

