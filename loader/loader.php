
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Site Web Tim</title>
</head>
<body class="fond_loader">
   <header>

   </header>
    <main>
        <style>

            .fond_loader{
            background-color: #051934;
            overflow-y: hidden;

            }
    
            .logo-anim{
                animation: anim_logo_tim_flash 4s infinite ease-in-out;
                position:sticky;
                
                
            }
    
            p{
                color: aliceblue;
                font-size: 1.5em;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                position: sticky;
                bottom:10vh;
                padding-left:5vw;
                
            }
    
            .img_1,.img_2,.img_3,.img_4,.img_5,.img_6{
                display:inline-flex;
            
            }
            
            .img_1{
                animation: anim_img1 1s ease-in-out 1 forwards;
                
                
            }
            
            .img_2{
                animation: anim_img2 1s ease-in-out 1 forwards;
                
            }
            
            .img_3{
                animation: anim_img3 1s ease-in-out 1 forwards;
            }
            
            .img_4{
                animation: anim_img4 1s ease-in-out 1 forwards;
            }
            
            .img_5{
                animation: anim_img5 1s ease-in-out forwards ;
                filter: drop-shadow(0 0 3rem rgb(69, 208, 246));
                
                
            }
            
            .img_6{
                animation: anim_img6 1s ease-in-out 1 forwards;
            }
            
            @keyframes anim_logo_tim_flash {
                from,to{
                    filter: opacity(100%);
                    transform: scale(100%);
                }
            
                50%{
                    filter: opacity(0%);
                    transform: scale(105%);
                }
            }
            
            @keyframes anim_img1 {
                from{
                    transform:translate3d(-1000px,-1000px,-1000px);
                    
                }
            
                to{
                    transform:translate3d(0px,-100px,0px);
                    mix-blend-mode: screen;
                }
            }
            
            @keyframes anim_img2 {
                from{
                    transform:translate3d(-1000px,1000px,-1000px);
                    
                }
            
                to{
                    transform:translate3d(0px,-1110px,0px);
                    mix-blend-mode: screen;
                }
            }
            
            @keyframes anim_img3 {
                from{
                    transform:translate3d(1000px,2000px,1000px);
                    
                }
            
                to{
                    transform:translate3d(0px,-2110px,0px);
                    mix-blend-mode: screen;
                    
                }
            }
            
            @keyframes anim_img5 {
                from{
                    transform:translate3d(1000px,-8000px,1000px) scale(0);
                    
                    
                }
            
                50%{
                    transform:scale(0.5);
                }
            
                to{
                    transform:translate3d(0px,-4110px,0px) scale(1);
                    mix-blend-mode: screen;
                    
                }
            }
      

        </style>
        
        <div class="logo-anim" style="text-align:center">
            <img class="img_1" src="wp-content/themes/tim2023/medias/LogoTIMbleu.png" alt="">
            <img class="img_2" src="wp-content/themes/tim2023/medias/logotimrouge.png" alt="">
            <img class="img_3" src="wp-content/themes/tim2023/medias/logotimvert.png" alt="">
            <img class="img_4" src="wp-content/themes/tim2023/medias/logotimbleu.png" alt="">
            <img class="img_5" src="wp-content/themes/tim2023/medias/logotimrouge.png" alt="">
            <p>CHARGEMENT...</p>
            <img class="img_6" src="wp-content/themes/tim2023/medias/logotimvert.png" alt="">
        </div>

     
    </main>
   
    <footer>
        
    </footer>
</body>
</html>