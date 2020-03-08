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


$images1 = [
    "../assets/img/projets/3fauteuil/Fauteuil.gif",
    "../assets/img/projets/3fauteuil/1fauteuil.jpg"
];

$images2 = [
    "../assets/img/projets/3fauteuil/3fauteuil.jpg",
    "../assets/img/projets/3fauteuil/4fauteuil.jpg",
    "../assets/img/projets/3fauteuil/5fauteuil.jpg"
];

require_once "../private/html/commun/head.php";
require_once "header.php";
?>
<div class="wrapperProjets"> 
    <!-- <div class="blocImgProjetsPPI">
        //bloucle image 1
        <div class="doubleVerticale">
            <figure class="verticale1">
                <img  src="../assets/img/projets/3fauteuil/2_1fauteuil.jpg" alt="">
            </figure>
            <figure class="verticale2">
                <img  src="../assets/img/projets/3fauteuil/2_2fauteuil.jpg" alt="">
            </figure>
        </div>
        // boucle 2
    </div> -->
    <div class="blocImgProjetsPPI">
        <img class="imgPPI gif" src="../assets/img/projets/3fauteuil/Fauteuil.gif" alt="">
        <img class="imgPPI" src="../assets/img/projets/3fauteuil/1fauteuil.jpg" alt="">
        <div class="doubleVerticale">
            <figure class="verticale1">
                <img src="../assets/img/projets/3fauteuil/2_1fauteuil.jpg" alt="">
            </figure>
            <figure class="verticale2">
                <img src="../assets/img/projets/3fauteuil/2_2fauteuil.jpg" alt="">
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
            <div id="date">
                <h4  >Dates</h4>
                <p class="contenu"><span>09.015</span></p>
            </div>
            <div id="client">
                <h4>Client</h4>
                <div class="contenu">
                    <h6>Association étudiante de Luminy</h6>   
                </div>
            </div>
            <div id="projet">
                <h4>Type de projet</h4>
                <div class="contenu">
                    <p >Conception, maquette, prototype</p>
                </div>
            </div>

            <div id="contexte">
                <h4>Contexte</h4>
                <div class="contenu">
                    <p >Créée en quelques jour à l’occasion d’un <span>festival</span> dans un parc à Marseille, c’est pour permettre la lecture d’une petite bibliothèque mise à disposition, que cette maquette de fauteuil a vu le jour. </p>
                    <p>Par la suite, elle a été réutilisée comme «test» pendant un mois à la <span>bibliothèque</span> de l’ESADMM</p>
                </div>
            </div>

            <div id="deroule">
                <h4>Déroulé</h4>
                <div class="contenu">
                    <p>Le test, proposant 5 de ces fauteuils au stade de maquette (en terme de matériaux, finitions, assemblages), a permis de <span>comprendre</span> au mieux les <span>attentes des utilisateurs</span> de la bibliothèque pour ce type de mobilier. En effet, grâce à une <span>boîte à idée</span> ainsi qu’une <span>notice</span> affichée dans chacun des fauteuils, nous avons pu recueillir leurs retours.
                    </p>
                    <p> A partir de ces informations, nous avons pu réaliser un <span>prototype</span> de ce fauteuil, avec l’ambition par la suite de travailler avec une couturière d’ameublement pour la partie intérieure, projetant l’idée d’un rouleau de tissu que l’utilisateur pourrait dérouler à sa guise. Ce mobilier est pour l’instant, faute d’occasion, resté au stade de prototype, dans l’attente de lui trouver ses prochains utilisateurs</p>                        
                </div>
            </div>
            <div id="proposition">
                <h4>Proposition</h4>
                <div class="contenu">
                    <p> Prototypage de 5 Fauteuils individuels de lecture.  </p>                   
            </div>
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