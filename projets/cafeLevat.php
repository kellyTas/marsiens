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

$images1 = [
    "../assets/img/projets/7cafeLevat/buvette.gif",
    "../assets/img/projets/7cafeLevat/1buvette.jpg",
    "../assets/img/projets/7cafeLevat/2buvette.jpg",
    "../assets/img/projets/7cafeLevat/3buvette.jpg"
];

$images2 = [
    "../assets/img/projets/7cafeLevat/5buvette.jpg",
    "../assets/img/projets/7cafeLevat/6buvette.jpg",
    "../assets/img/projets/7cafeLevat/7buvette.jpg"
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
                <a data-fancybox="gallery" href="../assets/img/projets/7cafeLevat/4_1buvette.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/7cafeLevat/4_1buvette.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/7cafeLevat/4_2buvette.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/7cafeLevat/4_2buvette.jpg">
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
                <a data-fancybox="gallery" href="../assets/img/projets/7cafeLevat/8_1buvette.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/7cafeLevat/8_1buvette.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/7cafeLevat/8_2buvette.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/7cafeLevat/8_2buvette.jpg">
                </a>
                </figure>
            </div>
            <a data-fancybox="gallery" href="../assets/img/projets/7cafeLevat/9buvette.jpg">
                <img class="imgPPI gif" src="../assets/img/projets/7cafeLevat/9buvette.jpg">
            </a>
            <a data-fancybox="gallery" href="../assets/img/projets/7cafeLevat/10buvette.jpg">
                <img class="imgPPI gif" src="../assets/img/projets/7cafeLevat/10buvette.jpg">
            </a>
            <div class="doubleVerticale">
                <figure class="verticale1">
                <a data-fancybox="gallery" href="../assets/img/projets/7cafeLevat/11_1buvette.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/7cafeLevat/11_1buvette.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/7cafeLevat/11_2buvette.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/7cafeLevat/11_2buvette.jpg">
                </a>
                </figure>
            </div>
            <a data-fancybox="gallery" href="../assets/img/projets/7cafeLevat/12buvette.jpg">
                <img class="imgPPI gif" src="../assets/img/projets/7cafeLevat/12buvette.jpg">
            </a>
            <div class="doubleVerticale">
                <figure class="verticale1">
                <a data-fancybox="gallery" href="../assets/img/projets/7cafeLevat/13_1buvette.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/7cafeLevat/13_1buvette.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/7cafeLevat/13_2buvette.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/7cafeLevat/13_2buvette.jpg">
                </a>
                </figure>
            </div>
            <a data-fancybox="gallery" href="../assets/img/projets/7cafeLevat/14buvette.jpg">
                <img class="imgPPI gif" src="../assets/img/projets/7cafeLevat/14buvette.jpg">
            </a>
            <a data-fancybox="gallery" href="../assets/img/projets/7cafeLevat/15buvette.jpg">
                <img class="imgPPI gif" src="../assets/img/projets/7cafeLevat/15buvette.jpg">
            </a>
        </div>
        <article class="txtProjets articleProjet">
            <h3>Le café Levat</h3>
            <img id="plusProjet" src="<?php echo($logoPlus) ?>" alt="logo plus infos" onclick="displayDescription()">
            <div id="descriptionProjet" >
                <div id="date">
                    <h4  >Dates</h4>
                    <p class="contenu"><span>02.018 - 06.018</span></p>
                </div>
                <div id="client">
                    <h4>Client</h4>
                    <div class="contenu">
                        <h6>Atelier Juxtapoz</h6>
                        <p><span>Café - buvette</span> dans les jardins du couvent Levat pour l’ <a href="https://www.atelier-juxtapoz.fr/">Atelier Juxtapoz</a> dans le cadre de leur exposition «Emancipation»</p>   
                    </div>
                </div>
                <div id="projet">
                    <h4>Type de projet</h4>
                    <div class="contenu">
                        <p>Commande du client</p>
                        <p>Conception, maquette 2D/3D, production.</p>
                    </div>
                </div>

                <div id="contexte">
                    <h4>Contexte</h4>
                    <div class="contenu">
                        <p >L’<span>exposition</span> Emancipation, organisée par l’Atelier Juxtapoz, a réunit une vingtaine d’artistes de la scène d’<span>art urbain</span> dans la chapelle et les 1,7 hectares de jardins d’un ancien couvent à Marseille.  </p>
                        <p>Pour accompagner les évènements réguliers durant l’exposition, l’Atelier Juxtapoz souhaitait disposer d’un <span>espace buvette dans les jardins</span>, pouvant rester sur place plusieurs années. L’espace devait pouvoir accueillir jusqu’à <span>6 personnes travaillant à l’intérieur</span>, résister à plusieurs étés et hivers tout en restant <span>cohérent esthétiquement avec son environnement.</span></p>
                    </div>
                </div>

                <div id="deroule">
                    <h4>Déroulé</h4>
                    <div class="contenu">
                        <p>Les allers-retours avec l’Atelier Juxtapoz ont été essentiels pour porter la conception étape par étape avec eux. C’est en réunissant les informations concernant leur activité que nous avons pu construire un <span>espace adapté à leurs besoins</span>. La réalisation d’un <span>plan à l’échelle 1</span> dessiné au sol a permis de fixer les dimensions finales du projet. Nous avons réalisé toutes les étapes de la construction de cet espace avec l’aide de Guillaume Miard (décaissement, plots, ossature bois, étanchéité, ouvrants, toiture, aménagement intérieur).</p>                        
                    </div>
                </div>
                <div id="proposition">
                    <h4>Proposition</h4>
                    <div class="contenu">
                        <p> Nous avons réalisé une </span>micro-architecture de 25m2<span> aux formes et aux couleurs à l’image du client.  </p>                   
                </div>
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
