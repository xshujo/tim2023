<?php get_header(); ?>
    <main>
        
        <div style="text-align:center">
            <img class="img_1" src="./medias/logotimbleu.png" alt="">
            <img class="img_2" src="./medias/logotimrouge.png" alt="">
            <img class="img_3" src="./medias/logotimvert.png" alt="">
            <img class="img_4" src="./medias/logotimbleu.png" alt="">
            <img class="img_5" src="./medias/logotimrouge.png" alt="">
            <p>CHARGEMENT...</p>
            <img class="img_6" src="./medias/logotimvert.png" alt="">
        </div>

     
    </main>
    <script>
        setTimeout(function() {
            window.location.href = "frontpage.php";
        }, 6000); // Délais de 6 seconde pour le changement de page
    </script>
<?php get_footer(); ?>