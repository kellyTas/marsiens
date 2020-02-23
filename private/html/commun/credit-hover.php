<script type="text/javascript" >

$(document).ready(function() {
	if ( $(window).width() > 1000 ) {
        $( "#rouge" ).hover(
            function() {
                $("#texte-rouge").fadeIn(500);
            }, 
            function() {
                $("#texte-rouge").fadeOut(500);
            }
        );
        $( "#jaune" ).hover(
            function() {
                $("#texte-jaune").fadeIn(500);
            }, 
            function() {
                $("#texte-jaune").fadeOut(500);
            }
        );
        $( "#gris" ).hover(
            function() {
                $("#texte-gris").fadeIn(500);
            }, 
            function() {
                $("#texte-gris").fadeOut(500);
            }
        );
        $( "#bleu" ).hover(
            function() {
                $("#texte-bleu").fadeIn(500);
            }, 
            function() {
                $("#texte-bleu").fadeOut(500);
            }
        );
    }
});  
</script>

