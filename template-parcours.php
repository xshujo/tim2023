<?php

/**
 * Template name: Parcours
 */
?>
<?php get_header(); ?>

<main class="contenu_parcours">
    <?php get_the_title(); ?>
    <?php the_content(); ?>
    <div class="encadre_page"></div>
    <div class="degrades degrade_1"></div>
    <div class="degrades degrade_2"></div>
    <div class="degrades degrade_3"></div>
    <div class="bulle_modele_1 bulle_m1_position_1"></div>
    <div class="bulle_modele_1 bulle_m1_position_2"></div>
    <div class="bulle_modele_2 bulle_m2_position_1"></div>
    <div class="bulle_modele_2 bulle_m2_position_2"></div>
    <div class="bulle_modele_3 bulle_m3_position_1"></div>
    <div class="bulle_modele_3 bulle_m3_position_2"></div>
    <div class="bulle_modele_4 bulle_m4_position_1"></div>
    <div class="bulle_modele_4 bulle_m4_position_2"></div>
    <button id="scroll-to-top" class="scroll-to-top-button" title="Scroll to Top">↑</button>

    <script>
        // Get a reference to the button
        const scrollToTopButton = document.getElementById('scroll-to-top');

        // Show the button when the page is scrolled down
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollToTopButton.style.display = 'block';
            } else {
                scrollToTopButton.style.display = 'none';
            }
        });

        // Scroll to the top when the button is clicked
        scrollToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth', // Smooth scrolling animation
            });
        });
    </script>

</main>

<?php get_footer(); ?>