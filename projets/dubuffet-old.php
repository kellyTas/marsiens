<?php

//HEAD
$title = "LesMarsiens | Projet | La petite fabrique de Dubufet";
$logoMarsiens = "../assets/img/logo/logo_1616.png";
$liensCss = "../assets/css/style.css";


// HOME PAGE -- LOGO NAV --
$logoFb = "../assets/img/logo/facebook.png";
$logoInsta  = "../assets/img/logo/Instagram.png";
$logoLinkedin = "../assets/img/logo/linkedin.png";
$logoMarsNav = "../assets/img/logo/LesMarsiens_2018_OK.png";
$logoPlus = "../assets/img/logo/plus.png";

$images1 = [
    "../assets/img/projets/9dubuffet/1a_premier.gif",
    "../assets/img/projets/9dubuffet/2.jpg",
    "../assets/img/projets/9dubuffet/3.gif"
];

$images2 = [
    "../assets/img/projets/9dubuffet/5.jpg",
    "../assets/img/projets/9dubuffet/6.jpg",
    "../assets/img/projets/9dubuffet/7.gif"
];

$images3 = [
    "../assets/img/projets/9dubuffet/9a.jpg",
    "../assets/img/projets/9dubuffet/10.jpg",
    "../assets/img/projets/9dubuffet/11.gif"
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
                <a data-fancybox="gallery" href="../assets/img/projets/9dubuffet/4a.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/9dubuffet/4a.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/9dubuffet/4b.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/9dubuffet/4b.jpg">
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
                <a data-fancybox="gallery" href="../assets/img/projets/9dubuffet/8a.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/9dubuffet/8a.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/9dubuffet/8b.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/9dubuffet/8b.jpg">
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
            <div class="doubleVerticale">
                <figure class="verticale1">
                <a data-fancybox="gallery" href="../assets/img/projets/9dubuffet/14a.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/9dubuffet/14a.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/9dubuffet/14b.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/9dubuffet/14b.jpg">
                </a>
                </figure>
            </div>
            <a data-fancybox="gallery" href="../assets/img/projets/9dubuffet/15.jpg">
                <img class="imgPPI gif" src="../assets/img/projets/9dubuffet/15.jpg">
            </a>
            <a data-fancybox="gallery" href="../assets/img/projets/9dubuffet/16.gif">
                <img class="imgPPI gif" src="../assets/img/projets/9dubuffet/16.gif">
            </a>
            <div class="doubleVerticale">
                <figure class="verticale1">
                <a data-fancybox="gallery" href="../assets/img/projets/9dubuffet/17a.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/9dubuffet/17a.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/9dubuffet/17b.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/9dubuffet/17b.jpg">
                </a>
                </figure>
            </div>
            <div class="doubleVerticale">
                <figure class="verticale1">
                <a data-fancybox="gallery" href="../assets/img/projets/9dubuffet/18a.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/9dubuffet/18a.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/9dubuffet/18b.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/9dubuffet/18b.jpg">
                </a>
                </figure>
            </div>
            <a data-fancybox="gallery" href="../assets/img/projets/9dubuffet/19.jpg">
                <img class="imgPPI gif" src="../assets/img/projets/9dubuffet/19.jpg">
            </a>
            <a data-fancybox="gallery" href="../assets/img/projets/9dubuffet/20.gif">
                <img class="imgPPI gif" src="../assets/img/projets/9dubuffet/20.gif">
            </a>
            <div class="doubleVerticale">
                <figure class="verticale1">
                <a data-fancybox="gallery" href="../assets/img/projets/9dubuffet/21a.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/9dubuffet/21a.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/9dubuffet/21b.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/9dubuffet/21b.jpg">
                </a>
                </figure>
            </div>
            <a data-fancybox="gallery" href="../assets/img/projets/9dubuffet/22.jpg">
                <img class="imgPPI gif" src="../assets/img/projets/9dubuffet/22.jpg">
            </a>
            <a data-fancybox="gallery" href="../assets/img/projets/9dubuffet/23.jpg">
                <img class="imgPPI gif" src="../assets/img/projets/9dubuffet/23.jpg">
            </a>
        </div>
        <article class="txtProjets articleProjet">
            <h3>LA PETITE FABRIQUE DE DUBUFFET</h3>
            <img id="plusProjet" src="<?php echo($logoPlus) ?>" alt="logo plus infos" onclick="displayDescription()">
            <div id="descriptionProjet" >
                <p class="subtitleProjet">04.019 - 07.019</p>
                <p class="subtitleProjet">Création d’un espace de jeux pour enfant « 
                    <a href="http://www.mucem.org/programme/la-petite-fabrique-de-dubuffet">La Petite Fabrique De Dubuffet</a> » en parallèle de l’exposition sur 
                    <a href="http://www.mucem.org/programme/exposition-et-temps-forts/jean-dubuffet-un-barbare-en-europe">Jean Dubuffet</a> au sein du Mucem.
                </p>
                <p class="subtitleProjet">Réponse à appel à projet, co-conception, prototype, production.</p>
            
                <p>En réponse à l’appel à projet lancé par le Mucem pour réaliser un espace jeune public en lien avec leur exposition phare sur Jean Dubuffet, nous avons soumis, avec notre collectif de graphistes préférés 
                    <a href="https://www.jaune-sardine.fr">Jaune Sardine</a>, la proposition de 4 modules de jeux et 1 module de médiation afin de s’approprier certains codes artistiques de l’artiste.
                </p>
                <p>Il nous fallait à la fois réfléchir en permanence à l’utilisation par des enfants de 6 à 12 ans de nos objets, et à l’itinérance de notre proposition, qui voyagera ensuite avec l’exposition sur l’oeuvre de Jean Dubuffet dans différents musées d’Europe.</p>
                <p>Nous avons donc produit une réponse prenant en compte cette mobilité, sans nécessiter de stockage annexe pour les musées. Ainsi, nos modules sont autant les boîtes de transports, modules de jeux, et stocks de nos pièces afin que l’ensemble soit directement installé dans le même espace.</p>
                <p>Des rencontres régulières avec Jaune Sardine et nos différents interlocuteurs du Mucem nous ont permis de présenter et affiner la conception du projet. De plus, grâce à notre nouvelle machine de prototypage nous avons pu fournir en amont de la production un échantillon de chaque module afin d’échanger dessus et pouvoir anticiper la réalisation de l’ensemble des pièces.</p>
                <p>Nos choix de matériaux ont pris en compte les différentes normes régissant cet espace (accueil de groupe d’enfants, réglementation anti-feu, etc.) ainsi que l’usage de nos objets par les enfants (poids et taille des pièces, etc.) les médiateurs (rangement & nettoyage facile), les techniciens (installations & désinstallations facilitées par les roulettes, systèmes de fermetures, cabane démontable par système de paumelles…).</p>
                <p>Notre proposition finale regroupe ainsi  :</p>
                <ul class="liste">
                    <li>“Les Totems”, un module proposant aux enfants de construire différents personnages grâce à des formes à encoches;</li>
                    <li>“La Cabane”, un espace à l’échelle des enfants entièrement coloriable;</li>
                    <li>“Le Tête à Tête”, pour apprendre à réaliser des portraits à l’aide de visages et ses attributs aimantés;</li>
                    <li>“Le Métro”, pour créer des mots en assemblant des lettres dessinées sur des rails;</li>
                    <li>Un module médiation, proposant des tabourets et permettant l’accueil des enfants, la présentation de l’espace et la conclusion des activités;</li>
                </ul>
            </div>
        </article>
    </div>
    <a href="cafetBA.php" class="next"> 
        <img src="../assets/img/logo/flechehaut.png" alt="fleche"/>
    </a>
    <a href="scenarioCru.php" class="previous">
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
