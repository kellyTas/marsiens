<?php

//HEAD
$title = "LesMarsiens | Projet | Places Guichard";
$logoMarsiens = "../assets/img/logo/logo_1616.png";
$liensCss = "../assets/css/style.css";

// HOME PAGE -- LOGO NAV --
$logoFb = "../assets/img/logo/facebook.png";
$logoInsta  = "../assets/img/logo/Instagram.png";
$logoLinkedin = "../assets/img/logo/linkedin.png";
$logoMarsNav = "../assets/img/logo/LesMarsiens_2018_OK.png";
$logoPlus = "../assets/img/logo/plus.png";

$images1 = [
    "../assets/img/projets/6guichard/Gifplace2.gif",
    "../assets/img/projets/6guichard/1placesguichard.jpg",
    "../assets/img/projets/6guichard/2placesguichard.jpg",
    "../assets/img/projets/6guichard/3placesguichard.jpg",
    "../assets/img/projets/6guichard/4placesguichard.jpg",
    "../assets/img/projets/6guichard/5placesguichard.jpg"
];

$images2 = [
    "../assets/img/projets/6guichard/8placesguichard.jpg",
    "../assets/img/projets/6guichard/9placesguichard.jpg"
];

require_once "../private/html/commun/head.php";
require_once "header.php";
?>
<div class="wrapperProjets"> 
    <div class="blocImgProjetsPPI">
        //boucle 1
        <div class="doubleVerticale">
            <figure class="verticale1">
                <img  src="../assets/img/projets/6guichard/6_1placesguichard.jpg" alt="">
            </figure>
            <figure class="verticale2">
                <img  src="../assets/img/projets/6guichard/6_2placesguichard.jpg" alt="">
            </figure>
        </div>
        <div class="mosaique" >
            <figure class="colVerticale">
                <img src="../assets/img/projets/6guichard/7_1placesguichard.jpg" alt="">
            </figure>
            <figure class="colHorizontale" >
                <img src="../assets/img/projets/6guichard/7_2placesguichard.jpg" alt="">
            </figure>
            <figure class="colHorizontale">
                <img src="../assets/img/projets/6guichard/7_3placesguichard.jpg" alt="">
            </figure>
        </div>
        // boucle 2
    </div>
    <article class="txtProjets articleProjet">
        <h3>LES PLACES GUICHARD</h3>
        <img id="plusProjet" src="<?php echo($logoPlus) ?>" alt="logo plus infos" onclick="displayDescription()">
        <div id="descriptionProjet" >
            <p class="subtitleProjet">04.017 - 09.017</p>
            <p class="subtitleProjet">Deux places transitoires dans le quartier de Saint Mauront, pour la Soleam, en collaboration avec le Fil à Initiatives.</p>
            <p class="subtitleProjet">Réponse à consultation, pré-conception, conception avec habitants, production, production avec habitants.</p>
            <p>En 2017, suite à un plan de renouvellement urbain et après démolition de plusieurs logements insalubres sur la rue Guichard, la Soleam, en charge du projet, proposait une consultation pour une installation transitoire sur deux lots déjà démolis. Afin de ne pas laisser deux espaces grillagés pendant 2 ans, temps de transition avant la reconstruction, le projet était donc de proposer des aménagements temporaires aux habitants du quartier.</p>
            <p>Ainsi, nous devions soumettre une proposition sur chacune des deux places du projet, en corrélation avec l’analyse déjà étable par le Fil à Initiatives plusieurs mois auparavant. Ces derniers avaient interrogé les habitants encore présents dans le quartier sur leurs besoins.</p>
            <p>Nous avons proposé de distinguer les deux places: - une spécifiquement pour les enfants avec une plateforme et des petites cabanes. - une autre pour les adultes, avec des tables fixes et des bancs mobiles permettant l’appropriation et la modularité de la place selon l’événement (fête projection plein air, atelier, ...)</p>
            <p>Après une première conception de nos différents éléments, nous avons pu présenter nos propositions sur place aux habitants, grâce à des ateliers du Fil à Initiative. Ce premier échange nous a permis d’écouter leur retour et de les intégrer au projet, afin de leur exposer une proposition adaptée lors d’une seconde présentation. Nous avons ensuite lancé la phase production après validation de la Soleam ainsi que de notre bureau de contrôle.</p>
            <p>Les bancs, les tables, les petites cabanes ainsi que la grande cabane ont été réalisées à notre atelier avant de construire la plateforme sur place. Durant la dernière semaine de chantier les habitants ont pu participer à la personnalisation des mobiliers et autres ateliers proposés par le Fil à Initiatives. Après validation du bureau de contrôle sur site, et suite à la livraison, la gestion des deux places publiques (fermées le soir) a été confiée au Fil à Initiatives.</p>
        </div>
    </article>
</div>
<a href="devanture.php" class="previous">
        <img src="../assets/img/logo/flechehaut.png" alt="fleche"/>
    </a>
    <a href="cafeLevat.php" class="next">
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