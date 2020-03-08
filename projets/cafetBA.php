<?php

//HEAD
$title = "LesMarsiens | Projet | La Cafét’ des Beaux-Arts";
$logoMarsiens = "../assets/img/logo/logo_1616.png";
$liensCss = "../assets/css/style.css";


// HOME PAGE -- LOGO NAV --
$logoFb = "../assets/img/logo/facebook.png";
$logoInsta  = "../assets/img/logo/Instagram.png";
$logoLinkedin = "../assets/img/logo/linkedin.png";
$logoMarsNav = "../assets/img/logo/LesMarsiens_2018_OK.png";
$logoPlus = "../assets/img/logo/plus.png";

$images1 = [
    "../assets/img/projets/10BA/Gif1.gif",
    "../assets/img/projets/10BA/image_preview.jpg",
    "../assets/img/projets/10BA/3bis.jpg"
];

$images2 = [
    "../assets/img/projets/10BA/6.jpg",
    "../assets/img/projets/10BA/7.jpg",
    "../assets/img/projets/10BA/8.jpg",
    "../assets/img/projets/10BA/9.jpg"
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
            </a>';
        }
        ?>
            <div class="mosaique mb1">
                <figure class="colVerticale">
                <a data-fancybox="gallery" href="../assets/img/projets/10BA/4a.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/10BA/4a.jpg">
                </a>
                </figure>
                <figure class="colHorizontale">
                <a data-fancybox="gallery" href="../assets/img/projets/10BA/4b.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/10BA/4b.jpg">
                </a>
                </figure>
                <figure class="colHorizontale">
                <a data-fancybox="gallery" href="../assets/img/projets/10BA/4c.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/10BA/4c.jpg">
                </a>
                </figure>
            </div>
            <div class="doubleVerticale">
                <figure class="verticale1">
                <a data-fancybox="gallery" href="../assets/img/projets/10BA/5a.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/10BA/5a.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/10BA/5b.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/10BA/5b.jpg">
                </a>
                </figure>
            </div>
            <div class="doubleVerticale">
                <figure class="verticale1">
                <a data-fancybox="gallery" href="../assets/img/projets/10BA/5c.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/10BA/5c.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/10BA/5d.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/10BA/5d.jpg">
                </a>
                </figure>
            </div>

        <?php 
        foreach($images2 as $image){
            echo'
            <a data-fancybox="gallery" href='.$image.'>
                <img class="imgPPI gif" src='.$image.'>
            </a>';
        }
        ?>
            <div class="doubleVerticale">
                <figure class="verticale1">
                <a data-fancybox="gallery" href="../assets/img/projets/10BA/10a.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/10BA/10a.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/10BA/10b.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/10BA/10b.jpg">
                </a>
                </figure>
            </div>
            <div class="doubleVerticale">
                <figure class="verticale1">
                <a data-fancybox="gallery" href="../assets/img/projets/10BA/11a.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/10BA/11a.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/10BA/11b.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/10BA/11b.jpg">
                </a>
                </figure>
            </div>
        </div>
        <article class="txtProjets articleProjet">
            <h3>La Cafét’ des Beaux-Arts</h3>
            <img id="plusProjet" src="<?php echo($logoPlus) ?>" alt="logo plus infos" onclick="displayDescription()">
            <div id="descriptionProjet" >
                <div id="date">
                    <h4  >Dates</h4>
                    <p class="contenu"> <span> 04.019 - 07.01</span></p>
                </div>
                <div id="client">
                    <h4>Client</h4>
                    <div class="contenu">
                        <h6>ESADMM</h6>   
                        <p style="font-style:italic" >Conception et Réalisation du mobilier pour la Cafétérias des Beaux-Arts de Marseille Conception, prototype, production.</p>
                    </div>
                </div>
                <div id="projet">
                    <h4>Type de projet</h4>
                    <div class="contenu">
                        <p >L’école des Beaux-Arts de Marseille nous a sollicité pour <span>aménager un nouvel espace cafétéria</span> au sein de l’école</p>
                        <p>L’espace de  <span>155m2</span> déjà existant nécessitait d’être repensé et amélioré en fonction de ses usages actuels</p>
                    </div>
                </div>

                <div id="contexte">
                    <h4>Contexte</h4>
                    <div class="contenu">
                        <p >La demande de l’école fut de créer un nouvel espace cafétéria comprenant des <span>tables, bancs et tabourets</span> pouvant accueillir jusqu’a <span>80 personnes</span> (contre 50/60 antérieurement). </p>
                    </div>
                </div>

                <div id="deroule">
                    <h4>Déroulé</h4>
                    <div class="contenu">
                        <p >Après <span>analyse</span> des lieux et plusieurs échanges avec les clients nous avons pu établir les véritables attentes concernant cet espace et revoir de manière plus adaptée et détaillée le cahier des charges. </p>
                        <p>Nous avons également eu des entretiens avec le prestataire actuel de la cafétéria <span>« Gargantuart» par les jnounFactory</span> qui nous ont fait part de leur utilisation des lieux et attentes vis a vis du projet.</p>
                        <p>De plus nous avons fait une <span>enquête</span> auprès des usagés (Professeurs, élèves et administration Art/Archi/design) ce qui nous a permis d’établir un fil directeur : <span>Convivialité, Identité et Mondularité.</span> </p>
                        <p>Après validation des prototypes nous sommes très rapidement passé dans la phase de réalisation dans nos ateliers afin de pouvoir respecter les cours délais de livraison attendus par le client. </p>
                    </div>
                </div>
                <div id="proposition">
                    <h4>Proposition</h4>
                    <div class="contenu">
                        <p> Au total, la proposition regroupe :</p>
                        <ul class="liste">
                            <li>6 tables de 6 personnes avec 9 bancs de 3 personnes </li>
                            <li>3 tables de 4 personnes avec 6 bancs de 2 personnes </li>
                            <li>2 tables de 12 personnes avec 8 bancs de 3 personnes</li>
                            <li>9 tabourets</li>
                            <li>2 claustras «banquettes» </li>
                            <li>1 claustra «tablettes» </li>
                            <li>1 grande banquette de 6,50 mètres</li>
                            <li>1 banque de service </li>
                            <li>1 banque de fin de service et des poubelles</li>
                        </ul>
                        <p>Grace au travail et l’aide de l’équipe technique de l’école pour la rénovation des lieux nous avons pu installer pour la rentée de Janvier 2020 le nouvel espace Cafétéria des Beaux-Arts de Marseille.</p>
                        <p>Fournisseurs: Littoral Bois (Panneaux et Tasseaux) Mousse & Confection (coussins d’assises) EVP (vernis) GLoxy (découpe laser et pliage des tôles d’acier) Themolaquage Provençal ( thermolaquage des pièces métalliques) LM5P (éclairage), Plasticiet (plaques de plastique PUHD recyclé). </p>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <a href="dubuffet.php" class="previous">
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