</main>
<footer>
    <div>
        <a href="page-credits.php">Credits</a>
        <a href="page-legales.php">Mentions légales</a>
    </div>
    <div id="copyright">
        <p>© 2018 Les Marsiens - Tous droits réservés</p>
    </div>
</footer>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script src="projets/affichage-page-projet.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158985950-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());

 

  gtag('config', 'UA-158985950-1');

</script>
<script>
    // apparition et disparition du Header en fonction du scroll
    let header = document.querySelector("header");
    let lastScrollValue = 0;

   
    document.addEventListener('scroll',() => {
        let top  = document.documentElement.scrollTop;
    if(lastScrollValue < top) {
        header.classList.add("hidden");
    } else {
        header.classList.remove("hidden");
    }
    lastScrollValue = top;
    });
</script>
</body> 
</html>