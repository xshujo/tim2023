<?php
// Référence au fichier de styles
function ajouter_styles()
{
    wp_enqueue_style(
        'style-principal', // Identificateur du link css
        get_template_directory_uri() . '/style.css', // Endroit où se trouve le fichier style.css
        array(), // Les fichiers CSS qui dépendent de style.css
        filemtime(get_template_directory() . '/style.css') // Version de notre style.css
    );
}
add_action('wp_enqueue_scripts', 'ajouter_styles');



// Enregistrement des menus
function enregistrement_nav_menu()
{
    register_nav_menus(array(
        'principal' => 'Menu principal',
        'footer'  => 'Menu pied de page',
    ));
}
add_action('after_setup_theme', 'enregistrement_nav_menu', 0);


// Enregistrement du logo, de post thumbnails, de l'image d'arrière-plan et du titre
add_theme_support('title-tag');
add_theme_support('custom-logo', array(
    'height' => 100,
    'width' => 150
));
add_theme_support('post-thumbnails');
add_image_size('thumbnail', 150, 150, true);
add_theme_support('custom-background');

/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas-ci, nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal($query)
{
    if ($query->is_home() && $query->is_main_query() && !is_admin()) {
        $query->set('category_name', 'accueil');
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'cidweb_modifie_requete_principal');



// Loader
function custom_loading_script()
{
    wp_enqueue_script('loader', get_template_directory_uri() . './loader.js', array('jquery'), '1.0', true);
    wp_enqueue_script('loader', get_template_directory_uri() . './loader.css', array('css'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'custom_loading_script');

// Sidebar pour le footer
function enregistrer_sidebar()
{
    register_sidebar(array(
        'name' => __('Footer 1', 'DiversiTIM'),
        'id' => 'footer_1',
        'description' => __('Une zone qui affiche des widgets dans le footer.', 'DiversiTIM'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 2', 'DiversiTIM'),
        'id' => 'footer_2',
        'description' => __('Une zone qui affiche des widgets dans le footer.', 'DiversiTIM'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 3', 'DiversiTIM'),
        'id' => 'footer_3',
        'description' => __('Une zone qui affiche des widgets dans le footer.', 'DiversiTIM'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'enregistrer_sidebar');
