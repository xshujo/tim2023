<?php

/**
 * Template name: Vie etudiante
 */
?>
<?php get_header(); ?>
<main>
    <?php 
        $category = get_queried_object();
        $args = array(
            'category_name' => 'Evenements',
            'orderby' => 'title',
            'order' => 'ASC'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php get_the_title(); ?>
                <?php the_content(); ?>
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('thumbnail');
                } ?>
            <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata();?>
    ?>
</main>
<?php get_footer(); ?>