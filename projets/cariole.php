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


require_once "../private/html/commun/head.php";
require_once "header.php";
?>
<div class="wrapperProjets"> 
    <div class="blocImgProjetsPPI">
        <img class="imgPPI gif" src="../assets/img/projets/1cariole/1carriole.gif" alt="">
        <img class="imgPPI" src="../assets/img/projets/1cariole/1carriole.jpg" alt="">
        <img class="imgPPI" src="../assets/img/projets/1cariole/2carriole.jpg" alt="">
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
            <p class="subtitleProjet">06.014 - 09.014</p>
            <p class="subtitleProjet">Carriole dépliable</p>
            <p class="subtitleProjet">Conception, maquette, prototype.</p>
            <p>A l’occasion d’un repas festif à l’ESADMM, nous avons créé une carriole permettant à plusieurs personnes de préparer et proposer de la nourriture dans un espace linéaire de quelques mètres.</p>
            <p>La forme de cette cariole a résultée de l’espace dans lequel elle devait pouvoir être déplacée : les Beaux Arts de Marseille. Il fallait ainsi prendre en compte la hauteur des «pas d’ânes» présents dans l’école ainsi que le passage des portes et permettre de la déployer de part et d’autre une fois installée. Imaginée pour l’occasion, il est possible d’imaginer d’autres vies à la carriole : transporter du matériel de projection plein air, dérouler des mètres de guirlandes en un temps record, ou encore stocker en son sein tout le nécessaire au déploiement d’une bulle gonflable géante.</p>
            <p>Utilisée comme prototype plus qu’une production finale, elle nous suivra quelques années sur différents événements, se musclant de petites fonctionnalités supplémentaires à certaines occasions.</p>
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