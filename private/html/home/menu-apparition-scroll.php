<script>

   $(document).ready(function() {
    // Le menu est caché au chargement de la page   
    $("header").hide(); 
	// MOBILE  
	if ( $(window).width() < 900 ){
		$("header").show(); 
	}
	
	
	// TABLETTE
	else if ( ($(window).width() > 900 ) && ($(window).width()<1200)) 	{
		$('#blocVideo').hide(0).delay(3000).fadeIn(500);
		$(document).scroll(function() {
			// On récupère la hauteur de la page
			var hautfen = $(window).height() ;
			// On récupère la position du scroll
			var posScroll = $(window).scrollTop();
			
			if (posScroll < 600) {
				// On fait disparaître en fondu sur 0.5s
				$('header').slideUp(700);
			} else {
				// On fait apparaître le menu en fondu sur 0.5s
				$('header').slideDown(700);
				$("#plus").fadeIn(600);
			}
		});
	}
	// DESKTOP 
	else {
		$('#blocVideo').hide(0).delay(3000).fadeIn(500);
		$("#plus").hide(); 
		$(document).scroll(function() {
			// On récupère la hauteur de la page
			var hautfen = $(window).height() - 100 ;
			// On récupère la position du scroll
			var posScroll = $(window).scrollTop();
			
			if (posScroll < hautfen) {
				// On fait disparaître en fondu sur 0.5s
				$('header').slideUp(700);
			} else {
				// On fait apparaître le menu en fondu sur 0.5s
				$('header').slideDown(700);
				$("#plus").fadeIn(600);
			}
		});
	}
	
});



</script>