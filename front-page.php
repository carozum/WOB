<?php
get_header('front');
// calculateur
get_template_part('parts/content-calculator'); ?>


<!-- services -->

<section class="album py-5 bg-light">
    <div class="container">
        <h2 class="display-6 text-center mb-4">Nos services</h2>
        <div class="row">
            <!-- service 1 gestion de projet -->
            <div class="col-sm-6 col-md-3">
                <div class="card shadow">
                    <img src="img/project-management.png" class="card-img-top p-5" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title(54) ?> </h5>
                        <p class="card-text"><?php echo get_the_content(get_post(54)); ?>
                        </p>
                        <a href="archive-gestion-projet.html" class="btn btn-primary">Un projet bien défini?</a>
                    </div>
                </div>
            </div>

            <!-- service 2 site internet -->
            <div class="col-sm-6 col-md-3">
                <div class="card shadow">
                    <img src="img/optimization.png" class="card-img-top p-5" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title(33); ?></h5>
                        <p class="card-text">Ce qui revient à choisir le bon outil pour le construire et
                            utiliser les normes W3C pour structurer son contenu.
                        </p>
                        <a href="archive-site-internet.html" class="btn btn-primary">Un site bien
                            construit?</a>
                    </div>
                </div>
            </div>

            <!-- service 3 expérience utilisateur -->
            <div class="col-sm-6 col-md-3">
                <div class="card shadow">
                    <img src="img/user-experience.png" class="card-img-top p-5" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title(35) ?></h5>
                        <p class="card-text">Ce qui correspond à offrir une bonne expérience à l'utilisateur de
                            mon site à la fois plaisante, intuitice et facile.
                        </p>
                        <a href="archive-design.html" class="btn btn-primary">Un design bien pensé?</a>
                    </div>
                </div>
            </div>


            <!-- service 4 expérience utilisateur -->
            <div class="col-sm-6 col-md-3">
                <div class="card shadow">
                    <img src="img/chat.png" class="card-img-top p-5" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title(131) ?></h5>
                        <p class="card-text">
                            Avec un référencement, une e-publicité et une communication sur les réseaux sociaux
                            efficace
                        </p>
                        <a href="archive-communication.html" class="btn btn-primary">Un design bien pensé?</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- blog -->
<div class="container bg-light py-5">
    <h2 class="text-center mb-4">Dernières actualités</h2>
    <div class="row">

        <?php
        $homepagePosts = new WP_Query(array(
            'posts_per_page' => 2,
        ));

        while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); ?>

            <div class="col-12 col-md-6">
                <a class="link" href="<?php the_permalink(); ?>">
                    <span><?php the_time('d.m.Y'); ?></span>


                </a>
                <div>
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p><?php
                        if (has_excerpt()) {
                            the_excerpt();
                        } else {
                            echo wp_trim_words(get_the_content(), 18);
                        }
                        ?> <a href="<?php the_permalink(); ?>">En savoir plus...</a></p>
                </div>
            </div>

        <?php
        }
        wp_reset_postdata();
        ?>

        <p class="text-center"><a href="<?php echo site_url('/blog'); ?>" class="btn btn-warning">Voir tous les articles</a></p>

    </div>
</div>
<?php
get_footer(); ?>