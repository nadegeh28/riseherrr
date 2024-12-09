<?php get_header(); ?>

<form action="<?php echo esc_url(site_url('wp-login.php', 'login_post')); ?>" method="post" class="login-form fade-in">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logowelleness.png" alt="Riseher" class="logo-con">

    <input type="hidden" name="action" value="login">
    
    <input type="text" name="log" id="email" placeholder="Adresse e-mail" required class="email">
    
    <input type="password" name="pwd" id="password" placeholder="Mot de passe" required class="password">
    
    <input type="submit" value="Se connecter" class="login-button fade-in">
    
    <?php if (isset($_GET['login']) && $_GET['login'] == 'failed') : ?>
        <p class="error-message">Échec de la connexion, veuillez vérifier vos informations d'identification.</p>
    <?php endif; ?>
</form>



<br><br><br><br><br><br><br><br>

<?php get_footer(); ?>


