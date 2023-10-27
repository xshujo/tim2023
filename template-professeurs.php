<?php

/**
 * Template name: Professeurs
 */
?>
<?php get_header(); ?>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>

<div class="galerie">
    <?php
    $args = array(
        'category_name' => 'professeurs',
        'orderby'        => 'title', // Tri par titre
        'order'          => 'ASC',   // Dans l'ordre alphabétique croissant
    );

    $query = new WP_Query($args);
    //Affichage des articles (descriptions des professeurs)
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            if (has_post_thumbnail()) {
    ?>
                <?php
                $post_id = get_the_ID(); // Obtenez l'ID de l'article 
                echo 'ID de l\'article : ' . $post_id . '<br>';
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
    <?php if (have_posts()) :
        while (have_posts()) : the_post();
            get_template_part("template-parts/professeur");
        endwhile;
    endif; ?>
</main>
<?php get_footer(); ?>