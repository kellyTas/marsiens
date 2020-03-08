<?php

//HEAD
$title = "LesMarsiens | Projet | La Ville en Jeux";
$logoMarsiens = "../assets/img/logo/logo_1616.png";
$liensCss = "../assets/css/style.css";

// HOME PAGE -- LOGO NAV --
$logoFb = "../assets/img/logo/facebook.png";
$logoInsta  = "../assets/img/logo/Instagram.png";
$logoLinkedin = "../assets/img/logo/linkedin.png";
$logoMarsNav = "../assets/img/logo/LesMarsiens_2018_OK.png";
$logoPlus = "../assets/img/logo/plus.png";

$images1 = [
    "../assets/img/projets/8sceno/sceno.gif",
    "../assets/img/projets/8sceno/2sceno.jpg",
    "../assets/img/projets/8sceno/3sceno.jpg",
    "../assets/img/projets/8sceno/4sceno.jpg",
    "../assets/img/projets/8sceno/5sceno.jpg"
];

$images2 = [
    "../assets/img/projets/8sceno/11sceno.jpg",
    "../assets/img/projets/8sceno/12sceno.jpg",
    "../assets/img/projets/8sceno/13sceno.jpg",
    "../assets/img/projets/8sceno/14sceno.jpg"
];

$images3 = [
    "../assets/img/projets/8sceno/16sceno.jpg",
    "../assets/img/projets/8sceno/17sceno.jpg",
    "../assets/img/projets/8sceno/18sceno.jpg"
];

require_once "../private/html/commun/head.php";
require_once "header.php";
?>
 <div class="wrapperProjets"> 
        <div class="blocImgProjetsPPI">
        <?php 
        foreach($images1 as $image){
            echo'
            <a data-fancybox="gallery" href='.$image.'>
                <img class="imgPPI gif" src='.$image.'>
            </a>
            ';
        }
        ?>
            <div class="doubleVerticale">
                <figure class="verticale1">
                <a data-fancybox="gallery" href="../assets/img/projets/8sceno/6_1sceno.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/8sceno/6_1sceno.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/8sceno/6_2sceno.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/8sceno/6_2sceno.jpg">
                </a>
                </figure>
            </div>
            <a data-fancybox="gallery" href="../assets/img/projets/8sceno/7sceno.jpg">
                <img class="imgPPI gif" src="../assets/img/projets/8sceno/7sceno.jpg">
            </a>
            <a data-fancybox="gallery" href="../assets/img/projets/8sceno/8sceno.jpg">
                <img class="imgPPI gif" src="../assets/img/projets/8sceno/8sceno.jpg">
            </a>
            <div class="doubleVerticale">
                <figure class="verticale1">
                <a data-fancybox="gallery" href="../assets/img/projets/8sceno/9_1sceno.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/8sceno/9_1sceno.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/8sceno/9_2sceno.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/8sceno/9_2sceno.jpg">
                </a>
                </figure>
            </div>
            <div class="doubleVerticale">
                <figure class="verticale1">
                <a data-fancybox="gallery" href="../assets/img/projets/8sceno/10_1sceno.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/8sceno/10_1sceno.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/8sceno/10_2sceno.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/8sceno/10_2sceno.jpg">
                </a>
                </figure>
            </div>
        <?php 
        foreach($images2 as $image){
            echo'
            <a data-fancybox="gallery" href='.$image.'>
                <img class="imgPPI gif" src='.$image.'>
            </a>
            ';
        }
        ?>
            <div class="doubleVerticale">
                <figure class="verticale1">
                <a data-fancybox="gallery" href="../assets/img/projets/8sceno/15_1sceno.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/8sceno/15_1sceno.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/8sceno/15_2sceno.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/8sceno/15_2sceno.jpg">
                </a>
                </figure>
            </div>
        <?php 
        foreach($images3 as $image){
            echo'
            <a data-fancybox="gallery" href='.$image.'>
                <img class="imgPPI gif" src='.$image.'>
            </a>
            ';
        }
        ?>
        </div>
        <article class="txtProjets articleProjet">
            <h3>LA VILLE EN JEUX / 12M3</h3>
            <img id="plusProjet" src="<?php echo($logoPlus) ?>" alt="logo plus infos" onclick="displayDescription()">
            <div id="descriptionProjet" >
                <p class="subtitleProjet">07.018 - 08.018</p>
                <p class="subtitleProjet">Scénographie pour l’exposition la ville en jeux porté par la Compagnie des Rêves Urbains</p>
                <p class="subtitleProjet">Conception, prototype, production.</p>
                <p>La Compagnie des Rêves urbains a conçu l’exposition-atelier itinérante «La ville en jeux» pour présenter des jeux de médiation urbaine qui ont pour objectif l’apprentissage de la ville, son architecture, son urbanisme auprès de toutes les tranches d’âge.</p>
                <p>Leur besoin était donc un système de paravents qui puisse se monter et se démonter facilement, pour accueillir en son sein de l’affichage vertical, mais aussi, de monter des étagères en assemblant 4 paravents ensemble.Une des contraintes était de faire rentrer toute l’exposition dans un camion de 12m3 pour son transport d’une ville à l’autre, chose faite !</p>
                <p>Après présentation d’un prototype de trois paravents, nous avons pu re-paramétrer certains points avec La Compagnie des Rêves Urbains afin de convenir parfaitement à leur utilisation, en terme d’ergonomie, de facilité mais aussi d’insertion dans l’identité graphique portée par <a href=""> Super Terrain.</a></p>
            </div>
        </article>
    </div>
    <a href="cafeLevat.php" class="previous">
        <img src="../assets/img/logo/flechehaut.png" alt="fleche"/>
    </a>
    <a href="dubuffet.php" class="next">
        <img src="../assets/img/logo/flechehaut.png" alt="fleche"/>
    </a>     
    </div>
    <div id="flechHaut">
        <a  href="#">
            <img src="../assets/img/logo/flechehaut.png" alt="fleche"/>
        </a>
    </div>
 
<?php
require_once "footer.php";
require_once "script.php";
?>
<script>
    $(document).ready(function() {
    // Le menu est caché au chargement de la page   
    $(".next").hide(); 
      
	// On écoute le scroll sur la page
	$(document).scroll(function() {
		// On récupère la hauteur de la page
        var hautFen = $(window).height() - 100 ;
        var widthFen = $(window).width();
		// On récupère la position du scroll
        var posScroll = $(window).scrollTop();
        
		
		if ((posScroll < hautFen)&&() {
			// On fait apparaître le bouton en fondu sur 0.5s
			$('#headerHome').fadeOut(500);
		} else {
			// On fait disparaitre le bouton en fondu sur 0.5s
            $('#headerHome').fadeIn(500);
            $("#plus").fadeIn(300);
		}
	});
});
</script>    
