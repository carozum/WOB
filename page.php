<?php
get_header();
?>
<div class="container">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <div class="container">

                <?php
                $parentID = wp_get_post_parent_id(get_the_ID());
                // la page est une page enfant
                if ($parentID) { ?>
                    <div>
                        <p>
                            <a class="nav-link" href="<?php echo get_the_permalink($parentID); ?>"><i class="fa fa-home" aria-hidden="true"></i> Retour à <?php echo get_the_title(($parentID)); ?></a>
                        </p>
                        <h1 class="text-center my-4"><?php the_title(); ?></h1>

                    </div>
                <?php
                    // la page est une page parent
                } else { ?>
                    <h1 class="text-center my-4"><?php echo get_the_title() ?></h1>
                    <?php
                    $testArray = get_pages(array(
                        'child_of' => get_the_ID()
                    ));
                    if ($parentID or $testArray) {
                    ?>
                        <div class="page-links">
                            <ul class="min-list">
                                <?php
                                if ($parentID) {
                                    $idForMenu = $parentID;
                                } else {
                                    $idForMenu = get_the_ID();
                                }
                                wp_list_pages(array(
                                    'title_li' => NULL,
                                    'child_of' => $idForMenu,
                                    'sort_column' => 'menu-order'
                                ))
                                ?>
                            </ul>
                        </div>
                <?php }
                } ?>



                <div>
                    <?php the_content(); ?>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>

                <div class="text-center mb-5">
                    <?php get_template_part('parts/content-button-contact'); ?>
                </div>
            </div>

    <?php
        } // end while
    } // end if
    ?>
</div>
<?php
get_footer();
