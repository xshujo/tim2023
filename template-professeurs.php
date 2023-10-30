<?php

/**
 * Template name: Professeurs
 */
?>
<?php get_header(); ?>
<main>
    <h1><?php the_title(); ?></h1>

    <div class="galerieContenue">
        <?php
        get_template_part('template-parts/categorie-professeurs');
        ?>

    </div>

</main>
<?php get_footer(); ?>