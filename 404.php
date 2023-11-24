<?php

/**
 * Template name: 404
 */
?>
<?php get_header(); ?>
<main>
    <!-- <h1 class="texte__404">La page n'a pas été trouvée</h1> -->
    <?php
    $category = get_queried_object();
    $args = array(
        // Trouver la catégorie jeux et mettre en ordre de titre
        'category_name' => '404'
    );

    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>

            <!-- Si la page a une catégorie, la rajouter -->
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail('thumbnail');
            } ?>
            <!-- Ajouter le contenu des post -->
            <?php the_content() ?>


        <?php endwhile; ?>
    <?php endif;
    wp_reset_postdata(); ?>
</main>
<?php get_footer(); ?>