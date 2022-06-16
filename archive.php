<?php
get_header();
?>
<div id="hero">
    <h1 class="text-center my-4">
        <?php
        if (is_category()) {
            single_cat_title();
        } elseif (is_author()) {
            echo 'Posts by ';
            the_author();
        } else {
            the_archive_title();
        }
        ?>
    </h1>
    <p><?php the_archive_description(); ?></p>
</div>

<div class="container">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <div class="post-item">
                <h2><a href="<?php the_permalink() ?>" style=" text-decoration: none;"><?php the_title(); ?></a></h2>
            </div>

            <div class="metabox">
                <p>Posté par <?php the_author_posts_link() ?>, le <?php the_time('j.n.y'); ?>, dans la catégorie <?php echo get_the_category_list(', '); ?></p>
            </div>

            <div class="content">
                <?php the_excerpt(); ?>
                <p><a class="btn btn-primary" href="<?php the_permalink(); ?>">Continuer à lire...</a></p>
            </div>


    <?php

        } // end while


    } // end if
    // echo get_the_posts_pagination();
    echo paginate_links();
    ?>
</div>
<?php

get_footer();
