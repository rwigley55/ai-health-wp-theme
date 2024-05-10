<?php

get_header();

while (have_posts()) {
    the_post(); ?>
    <section>
        <div class="page__container">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>

            <?php
            // get the parent ID of the current page that we're looking at
            $theParent = wp_get_post_parent_id(get_the_ID());
            if ($theParent) { ?>
                <p>
                    <a class="page__parent-return" href="<?php echo get_permalink($theParent); ?>"><i class="fa-solid fa-angles-left" style="margin-right: 1rem;"></i>Back to <?php echo get_the_title($theParent) ?></a>
                </p>
            <?php }
            ?>

        </div>
    </section>
<?php }

get_footer();

?>