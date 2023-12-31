<?php
function chargementStyle() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',[],null,);
    wp_enqueue_style('style-dawii',get_template_directory_uri().'/style.css',[],null,);
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', [], '5.3.2', false);
}
add_action('wp_enqueue_scripts', 'chargementStyle');

// active des fonctions pour notre theme
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('html5');
add_theme_support('menus');
add_theme_support('widgets');

// ajout de positions des menus
add_action('after_setup_theme', 'menu_asrii');
function menu_asrii() {
    register_nav_menus(array(
        'menu-header' => 'Menu Haut',
        'menu-footer' => 'Menu Du footer',
    ));
}

//Création function encart Pub
function asrii_pub() {
    if(is_user_logged_in()) {
        get_template_part('/template-parts/partners');
    }
}

function widgets_dawii() {
    register_sidebar(array(
        'name' => 'Base de page',
        'id' => 'footer',
        'before_widget' => '<div class="col-md">',
        'after_widget' => '</div>',
    ));
    register_sidebar(array(
        'name' => 'Haut de page',
        'id' => 'sidebar',
        'before_widget' => '',
        'after_widget' => '',
    ));
}
add_action('widgets_init', 'widgets_dawii');

function asrii_error() {
    get_template_part('/template-parts/error');
}

function size_content($id_sidebar) {
    if (is_active_sidebar($id_sidebar)) {
        echo "col-lg-8";
    } else {
        echo "col-lg-10 mx-auto";
    };
}
