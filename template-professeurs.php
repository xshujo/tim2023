<?php

/**
 * Template name: Professeurs
 */
?>
<?php
get_header(); // Inclure l'en-tête du site 
?>
<div class="zoneProfs">
    <button class="precedent"></button>

    <?php
    query_posts('category_name=professeurs'); // Utilisez le nom de la catégorie "professeurs"

    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <figure class="prof__figure" id="fig_<?php the_id() ?>">
                <?php the_post_thumbnail('thumbnail'); ?>
            </figure>
        <?php endwhile; ?>
    <?php endif; ?>
    <button class="suivant"></button>
</div>
<div class="description">
    <?php
    wp_reset_postdata();
    if (have_posts()) :  while (have_posts()) : the_post(); ?>
            <section class="prof__section" id="des_<?php the_id(); ?>">
                <?php the_title(); ?>
                <?php the_content(); ?>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php
get_footer(); // Inclure le pied de page
?>