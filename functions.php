<?php

function immobilier_enqueue_styles(){
    wp_enqueue_style( 'maincss', get_template_directory_uri( ) . '/styles/main.css' );
}

add_action( 'wp_enqueue_scripts', 'immobilier_enqueue_styles' );



function immobilier_add_theme_support(){

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'title-tag' );

}

add_action( 'after_setup_theme', 'immobilier_add_theme_support' );


//declarer les menus
function immobilier_register_menus(){
    register_nav_menus( array(
        'main-menu' => __('Menu principal')
    ));
}

add_action( 'after_setup_theme', 'immobilier_register_menus' );


//Déclarer les widgets

// function immobilier_widgets_init($id){

//     register_sidebar( array(
//         'name' => 'Widget 1',
//         'id' => 'widget-1',
//         'description' => 'Widget affiché en haut du Sidebar',
//         'before_widget' => '<div class="side-widget">',
//         'after_widget' => '</div>'
//     ) );

//     register_sidebar( array(
//         'name' => 'Widget 2',
//         'id' => 'widget-2',
//         'description' => 'Widget affiché en bas du Sidebar',
//         'before_widget' => '<div class="side-widget">',
//         'after_widget' => '</div>'
//     ) );


// }

// add_action( 'widgets_init', 'immobilier_widgets_init' );

?>