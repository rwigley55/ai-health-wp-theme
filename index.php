<?php
get_header();
?>

<div class="blog-index__container">
    <?php

    while (have_posts()) {
        the_post(); ?>

        <div class="blog-index__card">
            <a href="<?php the_permalink(); ?>">
                <h2><?php the_title(); ?></h2>
            </a>
            <div class="blog-index__card-details">
                <h3><?php the_time("n.j.y"); ?></h3>
                <h3><?php echo get_the_category_list(", "); ?></h3>
            </div>
            <p><?php the_excerpt(); ?></p>
        </div>

    <?php } ?>
    <div>
        <?php echo paginate_links(); ?>
    </div>
</div>

<?php
get_footer();
?>