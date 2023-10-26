<?php

/**
 * Template name: Professeurs
 */
?>
<?php get_header(); ?>
<h1><?php the_title(); ?></h1>

<div class="galerie">
    <?php
    $args = array(
        'category_name' => 'professeurs',
        'posts_per_page' => 13,
        'orderby'        => 'title', // Tri par titre
        'order'          => 'ASC',   // Dans l'ordre alphabétique croissant
    );

    $query = new WP_Query($args);
    //Affichage des articles (descriptions des professeurs)
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            if (has_post_thumbnail()) {
    ?>
                <!--affiche images des articles-->
                <div>
                    <?php the_post_thumbnail('thumbnail');
                    ?>
                </div>
    <?php
            }
        endwhile;
        wp_reset_postdata();
    else :
        echo 'Aucun article trouvé dans cette catégorie.';
    endif;
    ?>
</div>

<main>

</main>
<?php get_footer(); ?>