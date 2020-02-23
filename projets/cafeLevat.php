<?php

//HEAD
$title = "LesMarsiens | Projet | Café Levat";
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
            <img class="imgPPI gif" src="../assets/img/projets/7cafeLevat/buvette.gif" alt="">
            <img class="imgPPI" src="../assets/img/projets/7cafeLevat/1buvette.jpg" alt="">
            <img class="imgPPI" src="../assets/img/projets/7cafeLevat/2buvette.jpg" alt="">
            <img class="imgPPI" src="../assets/img/projets/7cafeLevat/3buvette.jpg" alt="">
            <div class="doubleVerticale">
                <figure class="verticale1">
                    <img  src="../assets/img/projets/7cafeLevat/4_1buvette.jpg" alt="">
                </figure>
                <figure class="verticale2">
                    <img  src="../assets/img/projets/7cafeLevat/4_2buvette.jpg" alt="">
                </figure>
            </div>
            <img class="imgPPI" src="../assets/img/projets/7cafeLevat/5buvette.jpg" alt="">
            <img class="imgPPI" src="../assets/img/projets/7cafeLevat/6buvette.jpg" alt="">
            <img class="imgPPI" src="../assets/img/projets/7cafeLevat/7buvette.jpg" alt="">
            <div class="doubleVerticale">
                <figure class="verticale1">
                    <img  src="../assets/img/projets/7cafeLevat/8_1buvette.jpg" alt="">
                </figure>
                <figure class="verticale2">
                    <img  src="../assets/img/projets/7cafeLevat/8_2buvette.jpg" alt="">
                </figure>
            </div>
            <img class="imgPPI" src="../assets/img/projets/7cafeLevat/9buvette.jpg" alt="">
            <img class="imgPPI" src="../assets/img/projets/7cafeLevat/10buvette.jpg" alt="">
            <div class="doubleVerticale">
                <figure class="verticale1">
                    <img  src="../assets/img/projets/7cafeLevat/11_1buvette.jpg" alt="">
                </figure>
                <figure class="verticale2">
                    <img  src="../assets/img/projets/7cafeLevat/11_2buvette.jpg" alt="">
                </figure>
            </div>
            <img class="imgPPI" src="../assets/img/projets/7cafeLevat/12buvette.jpg" alt="">
            <div class="doubleVerticale">
                <figure class="verticale1">
                    <img  src="../assets/img/projets/7cafeLevat/13_1buvette.jpg" alt="">
                </figure>
                <figure class="verticale2">
                    <img  src="../assets/img/projets/7cafeLevat/13_2buvette.jpg" alt="">
                </figure>
            </div>
            <img class="imgPPI" src="../assets/img/projets/7cafeLevat/14buvette.jpg" alt="">
            <img class="imgPPI" src="../assets/img/projets/7cafeLevat/15buvette.jpg" alt="">
        </div>
        <article class="txtProjets articleProjet">
            <h3>Le café Levat</h3>
            <img id="plusProjet" src="<?php echo($logoPlus) ?>" alt="logo plus infos" onclick="displayDescription()">
            <div id="descriptionProjet" >
                <p class="subtitleProjet">02.018 - 06.018</p>
                <p class="subtitleProjet">Café - buvette dans les jardins du couvent Levat pour l’Atelier Juxtapoz dans le cadre de leur exposition «Emancipation»</p>
                <p class="subtitleProjet">Conception, maquette 2D/3D, production.</p>
            
                <p>L’exposition Emancipation, organisée par l’Atelier Juxtapoz, a réunit une vingtaine d’artistes de la scène d’art urbain dans la chapelle et les 1,7 hectares de jardins d’un ancien couvent à Marseille.</p>
                <p>Pour accompagner les évènements réguliers durant l’exposition, l’Atelier Juxtapoz souhaitait disposer d’un espace buvette dans les jardins, pouvant rester sur place plusieurs années. L’espace devait pouvoir accueillir jusqu’à 6 personnes travaillant à l’intérieur, résister à plusieurs étés et hivers tout en restant cohérent esthétiquement avec son environnement.</p>
                <p>Les allers-retours avec l’Atelier Juxtapoz ont été essentiels pour porter la conception étape par étape avec eux. C’est en réunissant les informations concernant leur activité que nous avons pu construire un espace adapté à leurs besoins. La réalisation d’un plan à l’échelle 1 dessiné au sol a permis de fixer les dimensions finales du projet. Nous avons réalisé toutes les étapes de la construction de cet espace de 25m2 avec l’aide de Guillaume Miard (décaissement, plots, ossature bois, étanchéité, ouvrants, toiture, aménagement intérieur).</p>
            </div>
        </article>
    </div>
    <a href="guichard.php" class="previous">
        <img src="../assets/img/logo/flechehaut.png" alt="fleche"/>
    </a>
    <a href="scenarioCru.php" class="next">
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
