<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">




    <?php wp_head(); ?> <!-- Ceci est important pour charger le CSS -->
</head>
<body <?php body_class(); ?>>
<div class="main-content">
<div class="top-bar">
<?php add_auth_links(); ?>
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


</script>
</body>
</html>

