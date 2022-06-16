<?php
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
?>

        <div id="hero">

            <h1 class="text-center my-4"><?php the_title(); ?></h1>
        </div>


        <div class="container">
            <div class="metabox">
                <p>
                    <a class="nav-link" href="<?php echo site_url('/blog'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Blog home </a>
                </p>
                <p>
                    <span>Posté par <?php the_author_posts_link(); ?>, le <?php the_time('j.n.y') ?>, dans la catégorie <?php echo get_the_category_list(', '); ?></span>
                </p>

            </div>

            <div class="content">
                <?php the_content(); ?>

            </div>


    <?php
    } // end while
} // end if

    ?>
        </div>
        <?php
        get_footer();
