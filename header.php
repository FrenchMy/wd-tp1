<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <title><?php bloginfo( 'title' ); ?></title>
    <?php wp_head(  ); ?>
</head>

<body <?php body_class( ); ?>>

<?php wp_body_open(  ); ?>

    <header>
        <div class="main-container">
            <nav>

<?php 
            
            $args = array(
                'theme_location' => 'main-menu'
            );
            
            wp_nav_menu($args);
?>

                <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ) ?>"><img src="img/logo_va_immo-blanc.png" alt="" class="fluide"></a>
                </div>
                <ul>
                    <li><a href="a-propos.html">À propos</a></li>
                    <li><a href="vendre.html">Vendre</a></li>
                    <li><a href="acheter.html">Acheter</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <div class="reseaux">
                <div class="facebook"><a href="https://www.facebook.com/victorandrea.perego.5"><i class="fa-brands fa-facebook-square"></i></a></div>
                <div class="phone"><a href="tel:1418-429-8746"><i class="fa-solid fa-square-phone"></i> 418 429-8746</a></div>
                <div class="mail"><a href="mailto:va.perego@gmail.com"><i class="fa-solid fa-envelope"></i> va.perego@gmail.com</a></div>
            </div>
        </div>



    </header>

    <main class="main-index">