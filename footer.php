    <div class="container-fluid">
        <div class="row">
            <div class="footerImg"> </div>
        </div>
        <div class="row">
            <div class="discover">
                <div class="col-12">
                    <h4 class= "text-center">
                        Découvrez
                    </h4>
                </div>
                <div class="col-12">
                    <h3 class= "text-center popArt">
                        Articles les plus populaires
                    </h3>
                </div>
            </div>
        </div>
        <div class="row space">
            <div class="col-12 col-lg-4">
                <div class="articleCard">
                    <img class="cham" src="/wp-content/themes/mytheme/assets/img/voyages-de-luxe-tahiti.jpg" alt="Cabanes sur l'eau à Tahiti">
                    <h5 class="text-center"> Tahiti</h5>
                    <p class="text-center"> Vous avez toujours rêvé de vous réveiller au bord d'une eau chaude et translucide? 
                        Venez découvrir ce que vous réserve notre espace de Tahiti, avec une vue imprenable depuis votre chambre et bien d'autres surprises.
                    </p>
                </div>
                
            </div>
            <div class="col-12 col-lg-4 ">
                <div class="articleCard">
                    <img class="cham" src="/wp-content/themes/mytheme/assets/img/cham.png" alt="Un coucher de soleil sur une plage aux Bahamas">
                    <h5 class="text-center"> Bahamas</h5>
                    <p class="text-center"> Si vous voulez casser votre routine, on ne saura que trop vous conseiller cette destination.
                        Randonnées, plongée, sorties nocturnes...
                        Oui des séances de bronzage vous attendent, mais pas seulement!
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-4 ">
                <div class="articleCard">
                    <img class="cham" src="/wp-content/themes/mytheme/assets/img/mexique.jpg" alt="Magnifique vue de l'horizon sur une plage de Cancun">
                    <h5 class="text-center"> Cancun</h5>
                    <p class="text-center"> Qui aurait cru que vous pourriez assister à de tels couchers de soleil à Cancun?
                        Pourtant, nous vous proposons un hôtel situé directement en bord de plage.. Dépaysement garanti!
                    </p>
                </div>
            </div>
        </div>
        <div class="row spaceS">
            
                <div class="col-12 col-lg-4">
                    <div class="articleCard d-flex justify-content-center form">
                        <?php wp_nav_menu( array( 
                            'theme_location' => 'main', 
                            'container' => 'ul', // afin d'éviter d'avoir une div autour 
                            'menu_class' => 'header_menu', // ma classe personnalisée 
                        ) ); 
                        ?>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="articleCard text-center form">
                        <h5 class="colorTitle"> Contactez-nous</h5> <br>
                        <p> 
                            70 rue des jacobins <br> <br>
                            80000 Amiens <br> <br>
                            contactus@lamanu.fr <br> <br>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="articleCard text-center align-middle">
                        <div class="formS">
                            <label for="mail">Inscrivez-vous à notre newsletter</label>
                        </div>
                        <div class="formT">
                            <input type="email" name="mail" placeholder="Entrez votre email">
                            <button type="submit">
                                Envoyer
                            </button>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>


    <?php wp_footer() ?>
</body>
</html>