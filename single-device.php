<?php

get_header();

while (have_posts()) {
    the_post(); ?>
    <section>
        <div class="device__container">
            <?php the_post_thumbnail(); ?>
            <div class="device__detail-container">
                <h1><?php the_title(); ?></h1>
                <h2>$<?php the_field("device_price"); ?></h2>
                <?php the_content(); ?>
            </div>
        </div>
    </section>
<?php }

get_footer();

?>