<?php get_header() ?>

<!-- Boucle Wordpress -->

<?php
/* 
Template Name: Accueil
*/

// if (have_posts()) : while (have_posts()) : the_post();
// ?>
<h1><?php the_title() ?></h1>
<div class="content">
    <?php the_content();?>
</div>
<?php 
//     endwhile; endif;
// ?>

<!-- <div class="container">
    <div class="row mainHomeSpace">
        <div class="col-12 col-md-6">
            <img class="imgHomeHeight" src="/wp-content/themes/mytheme/assets/img/cham.png" alt="Un coucher de soleil sur une plage aux Bahamas">
        </div>
        <div class="col-12 col-md-6">
            <div class="mainHomeCard">
                <h2>Découvrez</h2>
                <h3> Nos plus belles destinations</h3>
                <em class="homeDescription"> Voyez cette merveilleuse île vous submerger, vous ne voudrez plus rentrer chez vous. Dites au revoir au html, css, javascript ou autre php. Ici, que des cocktails, du soleil et du plaisir en tout genre. Par ailleurs, ne vous attendez pas à revenir travailler en métropole suite à votre voyage. Ici, le travail attend quiconque le désir, et des formations sont à votre portée (barman, danseuse, animateurs, maître-nageur), tout est possible et une nouvelle vie vous attend. Oserez-vous franchir le pas? </em>
                <a href=""><button>Lire la suite</button></a>
            </div>
        </div>
    </div>

    <div class="row mainHomeSpace">
        <div class="col-12 col-md-6">
            <div class="mainHomeCard">
                <h2>Découvrez</h2>
                <h3> Nos plus belles destinations</h3>
                <em class="homeDescription"> Voyez cette merveilleuse île vous submerger, vous ne voudrez plus rentrer chez vous. Dites au revoir au html, css, javascript ou autre php. Ici, que des cocktails, du soleil et du plaisir en tout genre. Par ailleurs, ne vous attendez pas à revenir travailler en métropole suite à votre voyage. Ici, le travail attend quiconque le désir, et des formations sont à votre portée (barman, danseuse, animateurs, maître-nageur), tout est possible et une nouvelle vie vous attend. Oserez-vous franchir le pas? </em>
                <a href=""><button>Lire la suite</button></a>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <img class="imgHomeHeight" src="/wp-content/themes/mytheme/assets/img/cham.png" alt="Un coucher de soleil sur une plage aux Bahamas">
        </div>
    </div>
    <div class="row mainHomeSpace">
        <div class="col-12 col-md-6">
            <img class="imgHomeHeight" src="/wp-content/themes/mytheme/assets/img/cham.png" alt="Un coucher de soleil sur une plage aux Bahamas">
        </div>
        <div class="col-12 col-md-6">
            <div class="mainHomeCard">
                <h2>Découvrez</h2>
                <h3> Nos plus belles destinations</h3>
                <em class="homeDescription"> Voyez cette merveilleuse île vous submerger, vous ne voudrez plus rentrer chez vous. Dites au revoir au html, css, javascript ou autre php. Ici, que des cocktails, du soleil et du plaisir en tout genre. Par ailleurs, ne vous attendez pas à revenir travailler en métropole suite à votre voyage. Ici, le travail attend quiconque le désir, et des formations sont à votre portée (barman, danseuse, animateurs, maître-nageur), tout est possible et une nouvelle vie vous attend. Oserez-vous franchir le pas? </em>
                <a href=""><button>Lire la suite</button></a>
            </div>
        </div>
    </div>



</div> -->

<?php get_footer() ?>

