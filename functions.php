<?php 

function aliTheme_support() {
    //add dynamic title tag support
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'aliTheme_support');

//menu options

function aliTheme_menus(){
    $locations = array(
        'primary' => 'dekstop primary l sidebar',
        'footer' => 'footer menu items'
    );

    register_nav_menus($locations);
}

add_action('init', 'aliTheme_menus');


function aliTheme_registerStyles() {

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('aliTheme_custom', get_template_directory_uri() . '/style.css', array('aliTheme_bootstrap'), $version, 'all');
    wp_enqueue_style('aliTheme_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", 'all');
    wp_enqueue_style('aliTheme_fontAwesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", 'all');
}
add_action('wp_enqueue_scripts', 'aliTheme_registerStyles');


function aliTheme_registerScripts() {

    wp_enqueue_script('aliTheme_script_custom', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
    wp_enqueue_script('aliTheme_script_jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), "3.4.1", true);
    wp_enqueue_script('aliTheme_script_popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array('aliTheme_script_bootstrap'), "1.16.0", true);
    wp_enqueue_script('aliTheme_script_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), "4.4.1", true);

}

add_action('wp_enqueue_scripts', 'aliTheme_registerScripts');

?>