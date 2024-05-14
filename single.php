<?php

get_header();

while (have_posts()) {
    the_post(); ?>
    <section>
        <div class="blog__container">
            <h1><?php the_title(); ?></h1>
            <h2 class="blog__author-details"><?php the_author(); ?> on <?php the_time("n.j.y"); ?></h2>
            <?php the_content(); ?>
        </div>
    </section>
<?php }

get_footer();

?>