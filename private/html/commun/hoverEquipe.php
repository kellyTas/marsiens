
<script>
    window.onload = function(){
    //
    const livia = document.getElementById("photoLivia") ;

    livia.addEventListener("mouseenter",function(){
        livia.src = "assets/img/photoEquipe/livia_gif.gif"; //chemin de l'img qui s'affiche au survol             
    });
    livia.addEventListener("mouseout",function(){
        livia.src = "assets/img/photoEquipe/LiviaRipamontiofficiel.jpg"; //chemin de l'img qui s'affichait avant le survol             
    });
    const vince = document.getElementById("photoVince") ;

    vince.addEventListener("mouseenter",function(){
        vince.src = "assets/img/photoEquipe/vince_gif.gif"; //chemin de l'img qui s'affiche au survol             
    });
    vince.addEventListener("mouseout",function(){
        vince.src = "assets/img/photoEquipe/VinceMusyoffciel.jpg"; //chemin de l'img qui s'affichait avant le survol             
    });
    const margot = document.getElementById("photoMargot") ;

    margot.addEventListener("mouseenter",function(){
        margot.src = "assets/img/photoEquipe/margot_gif.gif"; //chemin de l'img qui s'affiche au survol             
    });
    margot.addEventListener("mouseout",function(){
        margot.src = "assets/img/photoEquipe/MargotFressardofficiel.jpg"; //chemin de l'img qui s'affichait avant le survol             
    });
}
</script>