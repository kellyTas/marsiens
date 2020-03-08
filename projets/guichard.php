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
            <div id="date">
                <h4  >Dates</h4>
                <p class="contenu"><span>04.017 - 09.017</span></p>
            </div>
            <div id="client">
                <h4>Client</h4>
                <div class="contenu">  
                    <h6>Soleam</h6>
                    <p style="font-style:italic">Réalisation de <span>deux places transitoires</span> dans le quartier de <span>Saint Mauront</span>, pour la Soleam, en collaboration avec le <a href="https://www.lefilainitiatives.org/">Fil à Initiatives.</a></p>
                </div>
            </div>
            <div id="projet">
                <h4>Type de projet</h4>
                <p class="contenu">Réponse à <span>consultation</span>, pré-conception, conception avec habitants, production, production
avec habitants. </p>
            </div>

            <div id="contexte">
                <h4>Contexte</h4>
                <div class="contenu">
                <p class="contenu">En 2017, suite à un <span>plan de renouvellement urbain</span> et après démolition de plusieurs logements insalubres sur la rue Guichard, la Soleam, en charge du projet, proposait une consultation pour une <span>installation transitoire</span> sur deux lots déjà démolis. Afin de ne pas laisser deux espaces grillagés pendant 2 ans, temps de transition avant la reconstruction, le projet était donc de proposer des <span>aménagements temporaires</span> aux habitants du quartier.</p> 
                <p>Ainsi, nous devions soumettre une proposition sur chacune des deux places du projet, en corrélation avec l’analyse déjà étable par le Fil à Initiatives plusieurs mois auparavant. Ces derniers avaient <span>interrogé les habitants</span>; encore présents dans le quartier; sur leurs besoins.</p>
                </div>
            </div>

            <div id="deroule">
                <h4>Déroulé</h4>
                <div class="contenu">
                    <p>Nous avons proposé de <span>distinguer les deux places</span>: - une spécifiquement pour les <span>enfants</span> avec une plateforme et des petites <span>cabanes</span>. - une autre pour les <span>adultes</span>, avec des <span>tables fixes et des bancs mobiles</span> permettant l’appropriation et la modularité de la place selon l’événement (fête projection plein air, atelier, ...)</p>
                    <p>Après une première conception de nos différents éléments, nous avons pu présenter nos propositions sur place aux habitants, grâce à des <span>ateliers</span> du Fil à Initiative. Ce premier échange nous a permis d’<span>écouter leur retour et de les intégrer au projet</span>, afin de leur exposer une proposition adaptée lors d’une  seconde présentation. Nous avons ensuite lancé la phase production après validation de la Soleam ainsi que de notre bureau de contrôle.</p>
                </div>
            </div>
            <div id="proposition">
                <h4>Proposition</h4>
                <div class="contenu">
                    <p>Au total la proposition regroupe:</span>  </p>
                    <ul>
                        <li>9 bancs mobiles (avec possible parasol) </li>
                        <li>2 grandes tables de pique-nique</li>
                        <li>5 petites cabanes </li>
                        <li>1 grande cabane</li>
                        <li>1 plateforme/terrasse réalisée sur place. </li>
                    </ul>
                </div>
            </div>                
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