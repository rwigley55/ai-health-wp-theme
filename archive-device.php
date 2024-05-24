<?php
get_header();
?>

<div class="blog-index__container">
    <?php

    while (have_posts()) {
        the_post(); ?>

        <a class="device-index__card-link" href="<?php the_permalink(); ?>">
            <div class="device-index__card">
                <img src="<?php the_post_thumbnail_url("deviceLandscape") ?>" alt="<?php the_title() ?>">
                <div class="device-index__card-details">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                </div>
            </div>
        </a>

    <?php } ?>
    <div>
        <?php echo paginate_links(); ?>
    </div>
</div>

<?php
get_footer();
?>