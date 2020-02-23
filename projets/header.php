<header>
    <div id="menuResponsive">
        <div id="toggleWrapper">
            <a href="../index.php">
                <img id="logoMarsToggle" src="<?php echo($logoMarsNav) ?>" alt="logo LesMarsiens">
            </a>
            <a href="#menu" id="toggle" onclick="displayMenu()">
                <img id="burgerMenuImg" src="../assets/img/logo/menu_burger-512.png" alt="icône du menu" > 
            </a>
        </div>
        <div id="navToggle">
            <a href="../page-infos.php" id="infosToggle">Infos</a>
            <a href="../page-projets.php" >Projets</a>
            <a href="../page-contacts.php" >Contacts</a>
            <div id="toggleSocial">
                <a href="https://www.facebook.com/collectiflesmarsiens/" class="itemToggle" target="_blank"> 
                    <img src="<?php echo($logoFb) ?>" alt="logo facebook">
                </a>
                <a href="https://www.instagram.com/collectiflesmarsiens/" class="itemToggle" target="_blank"> 
                    <img src="<?php echo($logoInsta) ?>" alt="logo instagram">
                </a>
                <a href="https://www.linkedin.com/company/les-marsiens/" class="itemToggle" target="_blank">
                    <img  src="<?php echo($logoLinkedin) ?>" alt="logo linkedin">
                </a>
            </div>
        </div>
    </div>

    <nav id="menuDesktop" class="nav">
        <div>
            <a href="https://www.facebook.com/collectiflesmarsiens/" target="_blank"> 
                <img class="logoSociaux" src="<?php echo($logoFb) ?>" alt="logo facebook">
            </a>
            <a href="https://www.instagram.com/collectiflesmarsiens/" target="_blank"> 
                <img class="logoSociaux" src="<?php echo($logoInsta) ?>" alt="logo instagram">
            </a>
            <a href="https://www.linkedin.com/company/les-marsiens/" target="_blank">
                <img  class="logoSociaux" src="<?php echo($logoLinkedin) ?>" alt="logo linkedin">
            </a>
        </div>
        <div>
            <a href="../index.php" class="logoMarsNav" id="logoMarsNav"></a>
        </div>
        <div>
            <a href="../page-infos.php">Infos</a>
            <a href="../page-projets.php">Projets</a>
            <a href="../page-contacts.php">Contact</a>
        </div>
    </nav>
</header>
<main>
