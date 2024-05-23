<?php

get_header();

while (have_posts()) {
    the_post(); ?>
    <section>
        <div class="blog__container">
            <h1><?php the_title(); ?></h1>
            <?php the_content();
            the_field("device_price");
            ?>
        </div>
    </section>
<?php }

get_footer();

?>