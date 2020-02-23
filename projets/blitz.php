<?php

//HEAD
$title = "LesMarsiens | Projet | Blitz";
$logoMarsiens = "../assets/img/logo/logo_1616.png";
$liensCss = "../assets/css/style.css";

// HOME PAGE -- LOGO NAV --
$logoFb = "../assets/img/logo/facebook.png";
$logoInsta  = "../assets/img/logo/Instagram.png";
$logoLinkedin = "../assets/img/logo/linkedin.png";
$logoMarsNav = "../assets/img/logo/LesMarsiens_2018_OK.png";
$logoPlus = "../assets/img/logo/plus.png";


require_once "../private/html/commun/head.php";
require_once "header.php";
?>
<div class="wrapperProjets"> 
        <div class="blocImgProjetsPPI">
            <img class="imgPPI"  src="../assets/img/projets/4blitz/1blitz.jpg" alt="">
            <div class="doubleVerticale">
                <figure class="verticale1">
                    <img  src="../assets/img/projets/4blitz/2_1blitz.jpg" alt="">
                </figure>
                <figure class="verticale2">
                    <img  src="../assets/img/projets/4blitz/2_2blitz.jpg" alt="">
                </figure>
            </div>
        </div>
        <article class="txtProjets articleProjet">
            <h3>Blitz</h3>
            <img id="plusProjet" src="<?php echo($logoPlus) ?>" alt="logo plus infos" onclick="displayDescription()">
            <div id="descriptionProjet" >
                <p class="subtitleProjet">06.017 - 07.017</p>
                <p class="subtitleProjet">Mobilier scénographie pour l’exposition « Images non-contractuelles » d’Olek Do à la Blitz Gallery, Lyon.</p>
                <p class="subtitleProjet">Conception, production.</p>
                <p>Olek Do, designer graphique, a conçu son exposition autour de la question des images non contractuelles, images fantasmes mais que l’on n’obtient jamais.</p>
                <p>Le designer graphique souhaitait deux éléments scénographiques mettant en valeur sa production. Le premier permettant d’afficher verticalement ses productions en série et de mettre à disposition des productions en libre service pour le public. Le second, sous forme de colonne dimensionnée en hauteur entre le sol et le plafond, accueillant de petites impressions livrets.</p>
                <p>Du début à la fin, le travail avec Olek Do a été réalisé à distance. Informés des dimensions de la galerie et des différentes productions graphiques de l’exposition, nous avons pu élaborer des propositions 3D sur mesure.</p>
                <p>L’ensemble de la production, devant parcourir Marseille-Lyon, a été conçue pour être facilement montable et démontable, sans nécessiter notre présence pour le remontage de la structure.</p>
            </div>
        </article>
    </div>
</div>
<a href="fauteuil.php" class="previous">
        <img src="../assets/img/logo/flechehaut.png" alt="fleche"/>
    </a>
    <a href="devanture.php" class="next">
        <img src="../assets/img/logo/flechehaut.png" alt="fleche"/>
    </a> 
<div id="flechHaut">
    <a  href="#">
        <img src="../assets/img/logo/flechehaut.png" alt="fleche"/>
    </a>
</div>

<?php
require_once "footer.php";
require_once "script.php";
?>