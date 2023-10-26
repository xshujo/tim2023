<?php

/**
 * Template name: Professeurs
 */
?>
<?php get_header(); ?>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<main>
    <?php
    $args = array(
        'category_name' => 'professeurs',
        'posts_per_page' => 1,
    );

    $query = new WP_Query($args);
    //Affichage des articles (descriptions des professeurs)
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            the_title();
            the_content();
        endwhile;
        wp_reset_postdata();
    else :
        echo 'Aucun article trouvé dans cette catégorie.';
    endif;
    ?>
</main>
<?php get_footer(); ?>