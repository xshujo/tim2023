<div class="test">
    <?php
    $args = array(
        'category_name' => 'professeurs',
        'orderby'        => 'title', // Tri par titre
        'order'          => 'ASC',   // Dans l'ordre alphabétique croissant
    );

    $query = new WP_Query($args);

    $is_first_post = true;

    //Affichage des articles (descriptions des professeurs)
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            if (has_post_thumbnail()) {
                //$post_id = get_the_ID();
                // echo 'ID de l\'article : ' . $post_id . '<br>';
                if ($is_first_post) {
                    echo '<h1>' . get_the_title() . '</h1>';
                    echo '<div>' . get_the_post_thumbnail(null, 'thumbnail') . '</div>';
                    echo '<p>' . get_the_content() . '</p>';
                    $is_first_post = false;
                }
            }
        endwhile;
        wp_reset_postdata();
    else :
        echo 'Aucun article trouvé dans cette catégorie.';
    endif;
    ?>
</div>