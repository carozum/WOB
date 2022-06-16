<?php
get_header('front');
get_template_part('parts/content-calculator'); ?>
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