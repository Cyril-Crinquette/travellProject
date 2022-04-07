<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                <img id="logo" src="/wp-content/themes/mytheme/assets/img/téléchargement.jpg" alt="logo du site, avion tournant autour de la terre">
            </div>
            <div class="col-12 col-md-6">
                <ul class="nav justify-content-end">
                <?php wp_nav_menu( array( 
                    'theme_location' => 'main', 
                    'container' => 'ul', // afin d'éviter d'avoir une div autour 
                    'menu_class' => 'header_menu', // ma classe personnalisée 
                )); 
                ?>
            </div>
        </div>
        <div class="row ">
            <div class="headerImg">
                <div class="col-12 ">
                    <div class="headerTitle">
                        <h1 class="text-center">Simon's trail</h1>
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="headerSlog">
                        <em> Vous ne verrez plus jamais le voyage comme avant </em>
                    </div>
                </div>
            </div>
        </div>
    </div>
