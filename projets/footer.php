</main>
<footer>
    <div>
        <a href="../page-credits.php">Credits</a>
    </div>
    <div id="copyright">
        <p>© 2018 Les Marsiens - Tous droits réservés</p>
    </div>
</footer>
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
</body> 
</html>