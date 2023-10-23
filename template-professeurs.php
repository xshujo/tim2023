<?php

/**
 * Template name: Professeurs
 */
?>
<?php get_header(); ?>
<main>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <article>
        <?php
        $post = get_post(13); // l'ID de l'article
        echo $post->post_content; // Affiche le contenu de l'article
        ?>
    </article>
</main>
<?php get_footer(); ?>