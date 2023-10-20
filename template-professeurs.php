<?php
/**
 * Template name: Professeurs
 */
?>

<?php get_header(); ?>

<main>

<?php
      $category = get_queried_object();
      $args = array(
         'category_name' => $category->slug,
         'orderby' => 'title',
         'order' => 'ASC'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post(); ?>
            <!-- $category->slug peut avoir une de ces deux valeurs : "cours" ou "4w4" -->
            <?php get_template_part('template-parts/professeur', $category->slug); ?>
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>

</main>

<?php get_footer(); ?>
