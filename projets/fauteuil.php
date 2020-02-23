<?php

//HEAD
$title = "LesMarsiens | Projet | Fauteuils";
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
        <img class="imgPPI gif" src="../assets/img/projets/3fauteuil/Fauteuil.gif" alt="">
        <img class="imgPPI" src="../assets/img/projets/3fauteuil/1fauteuil.jpg" alt="">
        <div class="doubleVerticale">
            <figure class="verticale1">
                <img  src="../assets/img/projets/3fauteuil/2_1fauteuil.jpg" alt="">
            </figure>
            <figure class="verticale2">
                <img  src="../assets/img/projets/3fauteuil/2_2fauteuil.jpg" alt="">
            </figure>
        </div>
        <img class="imgPPI" src="../assets/img/projets/3fauteuil/3fauteuil.jpg" alt="">
        <img class="imgPPI" src="../assets/img/projets/3fauteuil/4fauteuil.jpg" alt="">
        <img class="imgPPI" src="../assets/img/projets/3fauteuil/5fauteuil.jpg" alt="">
    </div>
    <article class="txtProjets articleProjet">
        <h3>FAUTEUIL DE LECTURE</h3>
        <img id="plusProjet" src="<?php echo($logoPlus) ?>" alt="logo plus infos" onclick="displayDescription()">
        <div id="descriptionProjet" >
            <p class="subtitleProjet">09.015 - xx.xxx</p>
            <p class="subtitleProjet">Fauteuil de lecture.</p>
            <p class="subtitleProjet">Conception, maquette, prototype</p>
            <p>Créée en quelques jour à l’occasion d’un festival dans un parc à Marseille, c’est pour permettre la lecture d’une petite bibliothèque mise à disposition que cette maquette de fauteuil a vu le jour.</p>
            <p>Par la suite, elle a été réutilisée comme «test» pendant un mois à la bibliothèque de l’ESADMM. Ce test, proposant 5 de ces fauteuils au stade de maquette (en terme de matériaux, finitions, assemblages), a permis de comprendre au mieux les attentes des utilisateurs de la bibliothèque pour ce type de mobilier. En effet, grâce à une boîte à idée ainsi qu’une notice affichée dans chacun des fauteuils, nous avons pu recueillir leurs retours.</p>
            <p>A partir de ces informations, nous avons pu réaliser un prototype de ce fauteuil, avec l’ambition par la suite de travailler avec une couturière d’ameublement pour la partie intérieure, projetant l’idée d’un rouleau de tissu que l’utilisateur pourrait dérouler à sa guise.</p>
            <p>Ce mobilier est pour l’instant, faute d’occasion, resté au stade de prototype, dans l’attente de lui trouver ses prochains utilisateurs.</p>
        </div>
    </article>
</div>
<a href="module.php" class="previous">
        <img src="../assets/img/logo/flechehaut.png" alt="fleche"/>
    </a>
    <a href="blitz.php" class="next">
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