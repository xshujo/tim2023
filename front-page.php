<?php

/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>

<main class="contenu_accueil">

    <section class="video-section">
        
        <video autoplay muted loop id="background-video">
            <source src="<?php echo get_template_directory_uri(); ?>/medias/loop.mp4" type="video/mp4">
        
            Your browser does not support the video tag.
        </video>
        
        <div class="contenu">
            <div class="conteneur-titre">
                <h1 class="titre-accueil1">Création</h1>
                <h1 class="titre-accueil2">Intégration</h1>
                <h1 class="titre-accueil3">Programmation</h1>
            </div>
                <div id="ligne" style="line-height: 1; color: white"></div>
                <p id="texteIntro">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo corrupti
                    temporibus quaerat, cumque dignissimos numquam.
                </p>
        </div>
        
    </section>

    <section class="contenu2">
        <blockquote id="citation">Étudier en TIM c'est...</blockquote>
        <p id="auteur"> - Nom,cohorte</p>

        <div class="image_texte">
            
            <img src="wp-content/themes/tim2023/medias/2048/Photo10_2048.jpg" alt="imgFrontPage" width="325" height="200" style="border-radius: 25px" />
            <div class="bordure_image"></div>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur
                iusto assumenda ipsum magni deserunt minima, quo, debitis, voluptates
                impedit illum tenetur voluptas quibusdam distinctio consequatur porro
                cupiditate! Molestias, libero fugiat!Lorem ipsum dolor sit amet
                consectetur, adipisicing elit. Consequuntur iusto assumenda ipsum
                magni deserunt minima!
            </p>
        </div>
        
    </section>

    

    <section class="contenu3">
        <h2>Une équipe de professeurs dévoués</h2>
        
        <div class="image_texte">
            <img src="wp-content/themes/tim2023/medias/2048/ImageEquipeProf1_2048.jpg" alt="image des profs du TIM" width="325" height="200" style="border-radius: 25px" />
            <div class="bordure_image"></div>
            <div class="section_prof">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti
                    pariatur odio exercitationem dolorum quis tenetur laboriosam dolores
                    ipsa, optio numquam nulla iusto repellendus commodi perferendis at
                    dolore sunt, quaerat quae.
                </p>
                <button class="bouton_prof">voir plus</button>
            </div>
            
        </div>
    </section>

    <section class="contenu4">
        <h2>Des cours selon vos intérêts</h2>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque
            dolores dolorum iste fugiat animi modi eos ea repellat at magnam esse
            rem dolore eaque, quibusdam harum, repellendus quis laborum id.
        </p>
        <div class="elmtCours">
            <div id="3d">
                <img src="wp-content/themes/tim2023/medias/SVG/3d.svg" alt="" />
                <h3>3D</h3>
            </div>
            <div id="jeu">
                <img src="wp-content/themes/tim2023/medias/SVG/manette.svg" alt="" />
                <h3>Jeux vidéo</h3>
            </div>
            <div id="web">
                <img src="wp-content/themes/tim2023/medias/SVG/prog.svg" alt="" />
                <h3>Web</h3>
            </div>
            <div id="design">
                <img src="wp-content/themes/tim2023/medias/SVG/illust.svg" alt="" />
                <h3>Design</h3>
            </div>
            <div id="montage">
                <img src="wp-content/themes/tim2023/medias/SVG/video.svg" alt="" />
                <h3>Montage vidéo</h3>
            </div>
            <div id="vr">
                <img src="wp-content/themes/tim2023/medias/SVG/vr.svg" alt="" />
                <h3>Réalité virtuelle</h3>
            </div>
           
        </div>

        <buttonm class="bouton_cours">voir plus</button>
    </section>

    <section class="contenu5">
        <h2>Un apprentissage par projet</h2>
        <div class="image_texte">
            <img src="wp-content/themes/tim2023/medias/2048/Photo8_2048.jpg" alt="Une étudiante TIM qui travaille" width="325" height="200" style="border-radius: 25px" />
            <div class="bordure_image"></div>
            <div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aliquam
                    quibusdam, nulla facere distinctio, nobis asperiores veniam rem iste
                    impedit vel dolor ratione. Corporis quas labore voluptate quibusdam
                    ex tempore?
                </p>
                <button>voir plus</button>
            </div>
        </div>
    </section>

    <section class="contenu6">
        <h1>Envie de venir étudier?</h1>
        <h2>Soummets dès maintenant une demande d'admission</h2>
        <button>soumettre</button>
    </section>


</main>
<?php get_footer(); ?>