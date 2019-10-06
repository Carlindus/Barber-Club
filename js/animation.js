$(document).ready(function() {
		new WOW().init();
	
		$('.js-scrollTo').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			console.log("scroll to")
			return false;
		});

  $(window).scroll(function() {
  if ($(this).scrollTop() > 250){
      $('#navbar').addClass("opacity");
    }
    else{
      $('#navbar').removeClass("opacity");
    }
  });

$(window).resize(function(){
			if ($(window).width() <= 768){
	    $('#lesalon').parallax("center", 0.2, 0.1, true);
	    $('#lequipe').parallax("center", -0.2, 2, true);
	    $('#contact').parallax("center", 0.2, 0.1, true);
			console.log("inf 768");
		} else {
			$('#lesalon').parallax("center", 0.4, 0.1, true);
			$('#lequipe').parallax("center", -0.4, 2, true);
			$('#contact').parallax("center", 0.4, 0.1, true);
			console.log("sup 768");
		}
	});
});
