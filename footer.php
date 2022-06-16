<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
        </section>
        <!-- Section: Social media -->

        <!-- Section: Form -->
        <section class="">
            <form action="">
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-12">
                        <p class="pt-2">
                            <strong>Inscrivez vous à notre newsletter</strong>
                        </p>
                    </div>
                    <!--Grid column-->
                    <div class="col-12 col-lg-8 mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustomUsername" placeholder="Entrez votre e-mail" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Entrez votre adresse e-mail
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">Embarquement.
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->

                    <!--Grid column-->

                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </form>
        </section>
        <!-- Section: Form -->

        <!-- Section: Links -->
        <section class="footer-links">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'menu-gestion-projet',
                        'depth'             => 2,
                    )); ?>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'menu-design',
                        'depth'             => 2,
                    )); ?>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'menu-creation-sites',
                        'depth'             => 2,
                    )); ?>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'menu-seo',
                        'depth'             => 2,
                    )); ?>
                </div>
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-white" href="<?php echo site_url(); ?>">Webcome on Board</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

<?php wp_footer(); ?>

</body>

</html>