<?php get_header(); ?>
<main>
    <?php
    if (have_posts()) :  while (have_posts()) : the_post(); ?>
            <figure class="prof__figure" id="fig_<?php the_id() ?>">
                <?php the_post_thumbnail('thumbnail'); ?>
            </figure>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php
    wp_reset_postdata();
    if (have_posts()) :  while (have_posts()) : the_post(); ?>
            <section class="prof__section" id="des_<?php the_id(); ?>">
                <?php the_title(); ?>
                <?php the_content(); ?>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php


    ?>
</main>
<?php get_footer(); ?>