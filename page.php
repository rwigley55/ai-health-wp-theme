<?php

get_header();

while (have_posts()) {
    the_post(); ?>
    <section>
        <div class="page-container">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </section>
<?php }

get_footer();

?>