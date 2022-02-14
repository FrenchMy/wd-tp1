<?php 

function immobilier_enqueue_styles(){
    wp_enqueue_style( 'maincss', get_template_directory_url( ) . '/styles/main.css' );
}

add_action( 'wp_enqueue_scripts', 'immobilier_enqueue_styles' );



?>