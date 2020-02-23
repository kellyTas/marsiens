<script type="text/javascript" >
    let isDisplayed = false;

    function displayDescription(){
        if(!isDisplayed){
            document.getElementById("descriptionProjet").style.display="block";
            document.getElementById("plusProjet").src="../assets/img/logo/flechehaut.png";
            isDisplayed = true;
        }
        else{
            document.getElementById("descriptionProjet").style.display="none";
            document.getElementById("plusProjet").src="../assets/img/logo/plus.png";
            isDisplayed = false ;
        }
    }
</script>