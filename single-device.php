<?php

get_header();

while (have_posts()) {
    the_post(); ?>
    <section>
        <div class="device__container">
            <?php the_post_thumbnail("deviceLandscape"); ?>
            <div class="device__detail-container">
                <h1><?php the_title(); ?></h1>
                <h2>$<?php the_field("device_price"); ?></h2>
                <?php the_content(); ?>
                <p>
                    <a class="page__parent-return" href="<?php echo get_post_type_archive_link("device") ?>"><i class="fa-solid fa-angles-left" style="margin-right: 1rem;"></i>Back to Devices</a>
                </p>
            </div>
        </div>
    </section>
<?php }

get_footer();

?>