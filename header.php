<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <?php wp_head(); ?> <!-- Ceci est important pour charger le CSS -->
</head>
<body <?php body_class(); ?>>
<div class="top-bar">
        <a href="#">S'inscrire</a>
        <a href="#">Se connecter</a>
    </div>

    <header>
        <nav class="navbar">
            <ul class="nav-left">
                <li><a href="#" class="active">Accueil</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            
            <div class="logo">
                <img src="logo.png" alt="Logo">
            </div>
            
            <ul class="nav-right">
                <li><a href="#">Forum</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Formulaire</a></li>
            </ul>
        </nav>
    </header>

</body>
</html>

