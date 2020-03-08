<?php

//HEAD
$title = "LesMarsiens | Projet | Devanture du Couvent";
$logoMarsiens = "../assets/img/logo/logo_1616.png";
$liensCss = "../assets/css/style.css";

// HOME PAGE -- LOGO NAV --
$logoFb = "../assets/img/logo/facebook.png";
$logoInsta  = "../assets/img/logo/Instagram.png";
$logoLinkedin = "../assets/img/logo/linkedin.png";
$logoMarsNav = "../assets/img/logo/LesMarsiens_2018_OK.png";
$logoPlus = "../assets/img/logo/plus.png";

$images1 = [
    "../assets/img/projets/5devanture/couvent2.gif",
    "../assets/img/projets/5devanture/1devanture.jpg",
    "../assets/img/projets/5devanture/2devanture.jpg"
];

$images2 = [
    "../assets/img/projets/5devanture/4devanture.jpg",
    "../assets/img/projets/5devanture/5devanture.jpg"
];

require_once "../private/html/commun/head.php";
require_once "header.php";
?>
<div class="wrapperProjets"> 
    <div class="blocImgProjetsPPI">
        // boucle image 1
        <div class="doubleVerticale">
            <figure class="verticale1">
                <img  src="../assets/img/projets/5devanture/3_1devanture.jpg" alt="">
            </figure>
            <figure class="verticale2">
                <img  src="../assets/img/projets/5devanture/3_2devanture.jpg" alt="">
            </figure>
        </div>
        //boucle 2
    </div>
    <article class="txtProjets articleProjet">
        <h3>Devanture du couvent</h3>
        <img id="plusProjet" src="<?php echo($logoPlus) ?>" alt="logo plus infos" onclick="displayDescription()">
        <div id="descriptionProjet" >
            <div id="date">
                <h4  >Dates</h4>
                <p class="contenu"><span>06.014 - 09.014</span></p>
            </div>
            <div id="client">
                <h4>Client</h4>
                <div class="contenu">  
                    <h6>Atelier Juxtapoz </h6>
                    <p style="font-style:italic" >Devanture de l’entrée principale d’une cité d’artistes dans un ancien couvent.</p>
                </div>
            </div>
            <div id="projet">
                <h4>Type de projet</h4>
                <div class="contenu">
                    <p>Commande du client </p>
                    <p>Conception, maquette 2D, production.</p>
                </div>
            </div>

            <div id="contexte">
                <h4>Contexte</h4>
                <div class="contenu">
                    <p class="contenu">Après la remise des clefs de l’ancien couvent à l’atelier Juxtapoz en janvier 2017, des travaux ont débuté pour transformer le bâtiment en cité d’artiste, et remettre en état les jardins du couvent pour accueillir le public lors des jours d’ouverture & de l’exposition Emancipation. L’association en charge du lieu souhaitait donc établir le signal de cette cité d’artiste dès l’entrée principale afin d’accueillir les résidents du couvent ainsi que le futur public</p>
                </div>
            </div>

            <div id="deroule">
                <h4>Déroulé</h4>
                <div class="contenu">
                    <p>Dans le but de travailler en adéquation avec l’identité graphique de l’association, les allersretours ont été indispensables. Au cours de ces échanges, nous avons pu réunir et les différentes fonctionnalités que devait présenter la devanture </p>
                </div>
            </div>
            <div id="proposition">
                <h4>Proposition</h4>
                <div class="contenu">
                    <ul class="liste">
                        <li>Un panneau signalisant, visible d’un côté ou de l’autre de la rue</li>
                        <li>Une nouvelle localisation et mise en valeur de la boîte au lettres</li>
                        <li>Un panneau modulable pour y inscrire les heures saisonnières des ouvertures du lieu </li>
                    </ul>
                </div>
            </div>                
        </div>
    </article>
</div>
<a href="blitz.php" class="previous">
        <img src="../assets/img/logo/flechehaut.png" alt="fleche"/>
    </a>
    <a href="guichard.php" class="next">
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