<?php

//HEAD
$title = "LesMarsiens | Projet | Cariole";
$logoMarsiens = "../assets/img/logo/logo_1616.png";
$liensCss = "../assets/css/style.css";

// HOME PAGE -- LOGO NAV --
$logoFb = "../assets/img/logo/facebook.png";
$logoInsta  = "../assets/img/logo/Instagram.png";
$logoLinkedin = "../assets/img/logo/linkedin.png";
$logoMarsNav = "../assets/img/logo/LesMarsiens_2018_OK.png";
$logoPlus = "../assets/img/logo/plus.png";

$images1 = [
    "../assets/img/projets/1cariole/1carriole.gif",
    "../assets/img/projets/1cariole/1carriole.jpg",
    "../assets/img/projets/1cariole/2carriole.jpg"
];

require_once "../private/html/commun/head.php";
require_once "header.php";
?>
<div class="wrapperProjets"> 
    <div class="blocImgProjetsPPI">
        // bouble image1
        <div class="doubleVerticale">
            <figure class="verticale1">
                <img  src="../assets/img/projets/1cariole/3_1carriole.jpg" alt="">
            </figure>
            <figure class="verticale2">
                <img  src="../assets/img/projets/1cariole/3_2carriole.jpg" alt="">
            </figure>
        </div>
        <div class="doubleVerticale">
            <figure class="verticale1">
                <img  src="../assets/img/projets/1cariole/4_1carriole.jpg" alt="">
            </figure>
            <figure class="verticale2">
                <img  src="../assets/img/projets/1cariole/4_2carriole.jpg" alt="">
            </figure>
        </div>
        <img class="imgPPI" src="../assets/img/projets/1cariole/5carriole.jpg" alt="">
        <div class="mosaiquePar4">
            <figure class="col1 mosaique-top">
                <img src="../assets/img/projets/1cariole/6_1carriole.png" alt="">
            </figure>
            <figure class="col2">
                <img src="../assets/img/projets/1cariole/6_2carriole.png" alt="">
            </figure>
            <figure class="col1 mosaique-top">">
                <img src="../assets/img/projets/1cariole/7_1carriole.png" alt="">
            </figure>
            <figure class="col2">
                <img src="../assets/img/projets/1cariole/7_2carriole.png" alt="">
            </figure>
        </div>
    </div>
    <article class="txtProjets articleProjet">
        <h3>La carriole</h3>
        <img id="plusProjet" src="<?php echo($logoPlus) ?>" alt="logo plus infos" onclick="displayDescription()">
        <div id="descriptionProjet" >
            <div id="date">
                <h4  >Dates</h4>
                <p class="contenu"><span>06.014 - 09.014</span></p>
            </div>
            <div id="client">
                <h4>Client</h4>
                <div class="contenu">  
                    <p>Projet d’école </p>
                    <p style="font-style:italic" >Carriole dé-pliable</p>
                </div>
            </div>
            <div id="projet">
                <h4>Type de projet</h4>
                <p class="contenu">Conception, maquette, prototype</p>
            </div>

            <div id="contexte">
                <h4>Contexte</h4>
                <div class="contenu">
                <p class="contenu">A l’occasion d’un <span>repas festif</span> à l’ESADMM, nous avons créé une carriole permettant à plusieurs personnes de préparer et proposer de la nourriture dans un espace linéaire de quelques mètres.</p>
                </div>
            </div>

            <div id="deroule">
                <h4>Déroulé</h4>
                <div class="contenu">
                    <p>La forme de cette carriole a résultée de l’espace dans lequel elle devait pouvoir être <span>déplacée</span> : les Beaux Arts de Marseille. Il fallait ainsi prendre en compte la hauteur des «pas d’ânes» présents dans l’école ainsi que le passage des portes et permettre de la <span>déployer</span> de part et d’autre une fois installée. Imaginée pour l’occasion, il est possible d’imaginer d’autres vies à la carriole : <span>transporter</span> du matériel de projection plein air, dérouler des mètres de guirlandes en un temps record, ou encore <span>stocker</span> en son sein tout le nécessaire au déploiement d’une bulle gonflable géante.</p>
                </div>
            </div>
            <div id="proposition">
                <h4>Proposition</h4>
                <div class="contenu">
                    <p>Utilisée comme <span>prototype</span> plus qu’une production finale, elle nous suivra quelques années sur différents <span>événements</span>, se musclant de petites fonctionnalités supplémentaires à certaines <span>occasions.</span>  </p>
                </div>
            </div>                
        </div>
    </article>
</div>
<a href="module.php" class="next">
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