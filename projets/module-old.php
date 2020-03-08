<?php

//HEAD
$title = "LesMarsiens | Projet | Modules";
$logoMarsiens = "../assets/img/logo/logo_1616.png";
$liensCss = "../assets/css/style.css";

// HOME PAGE -- LOGO NAV --
$logoFb = "../assets/img/logo/facebook.png";
$logoInsta  = "../assets/img/logo/Instagram.png";
$logoLinkedin = "../assets/img/logo/linkedin.png";
$logoMarsNav = "../assets/img/logo/LesMarsiens_2018_OK.png";
$logoPlus = "../assets/img/logo/plus.png";

$images1 = [
    "../assets/img/projets/2modules/modules.gif",
    "../assets/img/projets/2modules/1modules.jpg",
    "../assets/img/projets/2modules/2modules.jpg"
];

require_once "../private/html/commun/head.php";
require_once "header.php";
?>
 <div class="wrapperProjets"> 
        <div class="blocImgProjetsPPI">
            // boucle 1
            <div class="mosaique">
                <figure class="colVerticale">
                    <img src="../assets/img/projets/2modules/3_1modules.jpg" alt="">
                </figure>
                <figure class="colHorizontale">
                    <img src="../assets/img/projets/2modules/3_2modules.jpg" alt="">
                </figure>
                <figure class="colHorizontale">
                    <img src="../assets/img/projets/2modules/3_3modules.jpg" alt="">
                </figure>
            </div>
            <img class="imgPPI" src="../assets/img/projets/2modules/4modules.jpg" alt="">
            <div class="doubleVerticale">
                <figure class="verticale1">
                    <img  src="../assets/img/projets/2modules/5_1modules.jpg" alt="">
                </figure>
                <figure class="verticale2">
                    <img  src="../assets/img/projets/2modules/5_2modules.jpg" alt="">
                </figure>
            </div>
            <img class="imgPPI" src="../assets/img/projets/2modules/6modules.jpg" alt="">
            <div class="doubleVerticale">
                <figure class="verticale1">
                    <img  src="../assets/img/projets/2modules/7_1modules.jpg" alt="">
                </figure>
                <figure class="verticale2">
                    <img  src="../assets/img/projets/2modules/7_2modules.jpg" alt="">
                </figure>
            </div>
        </div>
        <article class="txtProjets articleProjet">
            <h3>LES MODULES</h3>
            <img id="plusProjet" src="<?php echo($logoPlus) ?>" alt="logo plus infos" onclick="displayDescription()">
            <div id="descriptionProjet" >
                <p class="subtitleProjet">05.015 - 06.015</p>
                <p class="subtitleProjet">Série de modules réalisée dans le cadre du DNSEP de l’ESADMM</p>
                <p class="subtitleProjet">Conception, prototypes</p>
                <p>Dès notre 4e année d’étude à l’ESADMM, nous avions décidés de présenter notre diplôme de 5e année ensemble, sur la création d’un projet professionnel commun. Se rapprochant petit à petit de ce qui nous intéressait, il nous restait à préciser nos premières actions dans l’espace public.</p>
                <p>Durant plusieurs semaines, nous avons établi l’analyse in situ de cet espace grâce à des outils d’analyses fabriqués pour l’occasion : 5 modules en bois sur roulettes. Disposés sur le lieu quelques heures par jour, appropriables par les passants, ils nous ont permis de tester l’espace et d’échanger avec les usagers. Peu à peu, les modules se modifiaient en fonction des derniers retours des citadins : ombrières, couleur, texte, dossier, drapeaux, mange debout...</p>
                <p>Le temps sur place nous a permis l’installation de mobiliers légers, plugués au mobilier existants (signalisation arrêt de tram, bloc de béton travaux) pour expérimenter d’autres usages.</p>
                <p>La finalité de cette analyse : proposer un aménagement répondant aux attentes de ce lieu, modulable, évolutif, mobile, tout en respectant les normes de l’espace public. Une piste évoquée proposait des modules de béton, moulés avec l’empreinte évidée d’un transpalette à la base afin de pouvoir les transporter.</p>
                <p>Les modules en bois ont servi à d’autres occasions, notamment des événements de courtes durées, propices au mobilier mobile.</p>
            </div>
        </article>
    </div>
    <a href="cariole.php" class="previous">
        <img src="../assets/img/logo/flechehaut.png" alt="fleche"/>
    </a>
    <a href="fauteuil.php" class="next">
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