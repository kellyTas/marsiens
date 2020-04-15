</main>
<footer>
    <div>
        <a href="../page-credits.php">Credits</a>
        <a href="../page-legales.php">Mentions légales</a>
    </div>
    <div id="copyright">
        <p>© 2018 Les Marsiens - Tous droits réservés</p>
    </div>
</footer>
<script src="affichage-article-projet.js"></script>
<script src="projets/affichage-page-projet.js"></script>
<script type="text/javascript">
    let isActive = false;

    function displayMenu(){
        if(isActive == false){
            document.getElementById("navToggle").style.visibility="visible";
            document.getElementById("navToggle").style.opacity="1";
            document.getElementById("navToggle").style.height="100vh";
            document.getElementById("burgerMenuImg").src="../assets/img/logo/burgerAnimation.gif";
            isActive = true;
        }
        else{
            document.getElementById("navToggle").style.visibility="hidden";
            document.getElementById("navToggle").style.opacity="0";
            document.getElementById("navToggle").style.height="0";
            document.getElementById("burgerMenuImg").src="../assets/img/logo/menu_burger-512.png";
            isActive = false ;
        }
    }
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158985950-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-158985950-1');
</script>

<script>
    // *** apparition et disparition du Header en fonction du scroll ***//
    
    let header = document.querySelector("header");
    let article = document.querySelector(".wrapperProjets article");
    let lastScrollValue = 0;
   
    document.addEventListener('scroll',() => {
        let top  = document.documentElement.scrollTop;
    if(lastScrollValue < top) {
        header.classList.add("hidden");
        article.classList.add("onTop"); // Remonter les articles des ppi en même temps que le menu
    } else {
        header.classList.remove("hidden");
        article.classList.remove("onTop");
    }
    lastScrollValue = top;
    });
</script>

</body> 
</html>