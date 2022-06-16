<!-- calculateur -->
<section>
    <div id="calculateurTitre" class="container-fluid">
        <div class="row py-4">
            <h2 class="text-center">Estimez le coût de votre projet gratuitement et sans engagement en
                seulement 3 étapes.
            </h2>

        </div>
    </div>

    <!-- ************************************************** page 1 -->
    <div id="page1" class="container mb-5">

        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="col-6">
                <p class="text-center my-auto py-2">Etape 1/3</p>
            </div>
            <div class="col-3 my-auto">
                <a class="btn text-decoration-none" href="#" onclick="return show('page2','page1');">Suivant >></a>
            </div>
        </div>

        <div class="row py-4">
            <h2 class="text-center mb-4">Etes-vous déjà présent sur le web (site ou réseaux
                sociaux) ?
            </h2>
        </div>

        <div class="row">
            <p id="oui" class="col-md-6 text-md-end">
                <a href="#" onclick="return show('page2','page1');" class="btn shadow  border-0 mt-3 rounded-5 d-block text-center w-50 m-auto p-4">OUI</a>
            </p>
            <p id="non" class="col-md-6 text-md-start"><a href="#" onclick="return show('page2','page1');" class="btn shadow border-0 rounded-5 mt-3 d-block text-center w-50 m-auto p-4">NON</a>
            </p>
        </div>
    </div>


    <!-- ********************************************************** page 2 -->
    <div id="page2" style="display:none" class="container mb-5">

        <div class="row mt-2">
            <div class="col-3 ">
                <a href="#" onclick="return show('page1','page2');" class="btn  text-decoration-none">
                    << Précédent</a>
            </div>
            <div class="col-6">
                <p class="text-center my-auto py-2">Etape 2/3</p>
            </div>
            <div class="col-3 ">
                <a href="#" onclick="return show('page3','page2');" class="btn text-decoration-none">Suivant >></a>
            </div>
        </div>

        <section class="row py-4">
            <div class="col-12">
                <h2 class="text-center mb-4">Choisissez les prestations dont vous avez besoin</h2>
            </div>
            <!-- ***************************** gestion de projet -->
            <div class="col-6 ">
                <div class="card border-0  mt-2 mt-lg-1">
                    <h3 class="card-title">Gestion de projet</h3>
                    <form action="">
                        <div class="form-group">

                            <div class="form-check">

                                <label for="1" class="form-check-label">produit 1</label>
                            </div>
                            <div class="form-check">

                                <label for="2" class="form-check-label">produit 2</label>
                            </div>
                            <div class="form-check">

                                <label for="3" class="form-check-label">Produit 3</label>
                            </div>
                            <div class="form-check">

                                <label for="4" class="form-check-label">Produit 4</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ********************** design -->
            <div class="col-6 ">
                <div class="card p-lg-5 border-0 mt-2 mt-lg-1">
                    <h3 class="card-title">Design</h3>
                    <form action="">
                        <div class="form-group">

                            <div class="form-check">

                                <label for="5" class="form-check-label">Produit 5</label>
                            </div>
                            <div class="form-check">

                                <label for="6" class="form-check-label">Produit 6</label>
                            </div>
                            <div class="form-check">

                                <label for="7" class="form-check-label">Produit 7</label>
                            </div>
                            <div class="form-check">

                                <label for="8" class="form-check-label">Produit 8</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ******************* visibilité Web -->
            <div class="col-6 ">
                <div class="card p-lg-5 border-0  mt-2 mt-lg-1">
                    <h3 class="card-title">Visibilité Web</h3>
                    <form action="">
                        <div class="form-group">

                            <div class="form-check">
                                <input type="checkbox" name="static" class="checkbox form-check-input" id="static" class="checkbox" value="static">
                                <label for="static" class="form-check-label">Site statique one page</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="wordpress" id="wordpress" value="wordpress" class="checkbox form-check-input">
                                <label for="wordpress" class="form-check-label">Site +
                                    blog</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="specific" id="specific" value="specific" class="checkbox form-check-input">
                                <label for="specific" class="form-check-label">Site spécifique et/ou
                                    e-commerce</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="audit" id="audit" value="audit" class="checkbox form-check-input">
                                <label for="audit" class="form-check-label">Refonte d'un site existant</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ************************* communication -->
            <div class="col-6 ">
                <div class="card p-lg-5 border-0  mt-2 mt-lg-1">
                    <h3 class="card-title">Communication</h3>
                    <form action="">
                        <div class="form-group">

                            <div class="form-check">

                                <label for="SEO" class="form-check-label">Référencement</label>
                            </div>
                            <div class="form-check">

                                <label for="SEA" class="form-check-label">E-publicité</label>
                            </div>
                            <div class="form-check">

                                <label for="RS" class="form-check-label">Réseaux sociaux</label>
                            </div>
                            <div class="form-check">

                                <label for="write" class="form-check-label">Rédaction de contenu</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <!-- ********************************************************* page 3 -->

    <div id="page3" style="display:none" class="container h-75 mb-5">

        <div class="row mt-2 ">
            <div class="col-3 ">
                <a href="#" onclick="return show('page2','page3');" class="btn  text-decoration-none">
                    << Revenir</a>
            </div>
            <div class="col-6">
                <p class="text-center my-auto py-2 ">Etape 3/3</p>
            </div>
            <div class="col-3"></div>
        </div>

        <section class="row py-4">
            <div class="col-6">
                <h3 class=" mb-4">Vos choix</h3>
                <p id="listing"></p>
            </div>

            <div class="col-6">
                <h3 class="text-end mb-4">Votre estimation</h3>
                <p id="prixTotal" class="text-center display-6"></p>
            </div>

        </section>

        <section class="row py-4 ">
            <div class="col-12">
                <form action="">
                    <label for="email" class="form-label">Entrez votre email pour garder votre
                        estimation</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Votre email">
                    <a href="" id="recevoir" class="btn my-2 d-block">Recevoir
                        l'estimation</a>
                </form>
            </div>
            <div class="col-6 text-center">
                <button id="contact" class="btn ">Nous contacter</button>
            </div>
            <div class="col-6 text-center">
                <button id="vider" class="btn " onclick="return show('page1','page3');">Recommencer</button>
            </div>
        </section>
    </div>
</section>

<script src="<?php echo get_theme_file_uri('/assets/js/calculator.js') ?>">

</script>