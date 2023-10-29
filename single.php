<?php

/**
 * single.php est le modèle par défaut qui affiche un article
 */
?>
<!----------------------------------HEADER----------------------------------->
<?php get_header(); ?>

<!------------------------------------MAIN----------------------------------->
<main class="single">
    <h1>HOLA</h1>
    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article>
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </article>
            <hr>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<!----------------------------------FOOTER----------------------------------->
<?php get_footer(); ?>
</body>

</html>