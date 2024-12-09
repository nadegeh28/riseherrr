<?php get_header(); ?>

<div class="marge">

<div class="author-profile">
        <div class="author-icon">👩</div>
        <div class="author-info">
            <h1 class="author-name"><?php echo esc_html($current_user->user_login); ?></h1>
            <p class="note">
                Pour conserver votre anonymat, votre utilisateur sera sous le nom de <strong><?php echo esc_html($current_user->user_login); ?></strong>.
            </p>
            <p class="author-message">

                « Tu mérites d’être aimée avec respect, douceur et dignité. 
                Ne laisse jamais la violence définir ta valeur, car en toi réside 
                une force immense et une lumière qui mérite tout ce qu’il y a de meilleur. »
            </p>
            <p class="note">
                Pour conserver votre anonymat, votre utilisateur sera sous le nom de <strong><?php echo esc_html($current_user->user_login); ?></strong>.
            </p>
        </div>
    </div>







</div>
<?php get_footer(); ?>