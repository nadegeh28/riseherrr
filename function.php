function my_theme_styles() {
    // Charger la feuille de style principale
    wp_enqueue_style('app-style', get_template_directory_uri() . '/app.css');
}
add_action('wp_enqueue_scripts', 'my_theme_styles');
