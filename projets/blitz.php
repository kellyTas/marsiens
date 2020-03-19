<?php

//HEAD
$title = "LesMarsiens | Projet | Blitz";
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
                <a data-fancybox="gallery" href="../assets/img/projets/4blitz/1blitz.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/4blitz/1blitz.jpg">
                </a>
            <div class="doubleVerticale">
                <figure class="verticale1">
                <a data-fancybox="gallery" href="../assets/img/projets/4blitz/2_1blitz.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/4blitz/2_1blitz.jpg">
                </a>
                </figure>
                <figure class="verticale2">
                <a data-fancybox="gallery" href="../assets/img/projets/4blitz/2_2blitz.jpg">
                    <img class="imgPPI gif" src="../assets/img/projets/4blitz/2_2blitz.jpg">
                </a>
                </figure>
            </div>
        </div>
        <article class="txtProjets articleProjet">
            <h3>Blitz</h3>
            <img id="plusProjet" src="<?php echo($logoPlus) ?>" alt="logo plus infos" onclick="displayDescription()">
            <div id="descriptionProjet" >
                <div id="date">
                    <h4  >Dates</h4>
                    <p class="contenu"> <span> 04.019 - 07.01</span></p>
                </div>
                <div id="client">
                    <h4>Client</h4>
                    <div class="contenu">
                        <h6>Blitz Galery </h6>   
                        <p style="font-style:italic" > 
                         Mobilier scénographie pour l’exposition « Images non-contractuelles » d’Olek Do à la Blitz Gallery, Lyon.</p>
                    </div>
                </div>
                <div id="projet">
                    <h4>Type de projet</h4>
                    <div class="contenu">
                        <p >Commande du client</p>
                        <p>Conception, production</p>
                    </div>
                </div>

                <div id="contexte">
                    <h4>Contexte</h4>
                    <div class="contenu">
                        <p >Olek Do, <span>designer graphique</span>, a conçu son <span>exposition</span> autour de la question des <span>images non contractuelles</span>, images fantasmes mais que l’on n’obtient jamais. </p>
                    </div>
                </div>

                <div id="deroule">
                    <h4>Déroulé</h4>
                    <div class="contenu">
                        <p >Le designer graphique souhaitait <span>deux éléments scénographiques</span> mettant en valeur sa production. Le premier permettant d’<span>afficher verticalement</span> ses productions en série et de mettre à disposition des <span>productions en libre</span> service pour le public. Le second, sous forme de colonne dimensionnée en hauteur entre le sol et le plafond, accueillant de petites impressions livrets.  </p>
                        <p>Du début à la fin, le travail avec Olek Do a été réalisé à distance. Informés des dimensions de la galerie et des différentes productions graphiques de l’exposition, nous avons pu élaborer des propositions 3D sur mesure.</p>                        
                    </div>
                </div>
                <div id="proposition">
                    <h4>Proposition</h4>
                    <div class="contenu">
                        <p> L’ensemble de la production, devant parcourir Marseille-Lyon, a été <span>conçue pour être facilement montable et démontable</span>, sans nécessiter notre présence pour le remontage de la structure. </p>
                        <p>Elle comprend: </p>
                        <ul class="liste">
                            <li>Une table/affiches </li>
                            <li> Une tour de cartes postales </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
<a href="fauteuil.php" class="previous">
        <img src="../assets/img/logo/flechehaut.png" alt="fleche"/>
    </a>
    <a href="devanture.php" class="next">
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