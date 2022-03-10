<?php 

/* 

Template Name: Gabarit accueil

*/

?>

<?php get_header( ) ?>

<?php  


    $args = array(
        'category__not_in' => 1
    );

    $query = new WP_Query($args);


?>

<div>
</div>

<?php get_footer( ) ?>