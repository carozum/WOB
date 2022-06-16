<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- for responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <header class="container-fluid">
        <div class="row">

            <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
                <div class="container-fluid text-primary">
                    <!-- <a class="navbar-brand" href="<?php site_url(); ?>">NavBar</a> -->
                    <?php echo get_custom_logo();   ?>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="main-menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav  me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                        ?>
                    </div>
                </div>
            </nav>

            <section class="front-header d-flex justify-content-center align-items-center" style="background-image:url('<?php the_post_thumbnail_url() ?>'); height: 80vh; width: 100%;">

                <div class="container">
                    <div class="row text-center">
                        <h1><?php the_title() ?></h1>
                        <p><?php the_content() ?></p>
                        <p><?php get_template_part('parts/content-button-contact') ?></p>
                        <p><?php get_template_part('parts/content-button-calculator') ?></p>
                    </div>



                </div>

            </section>