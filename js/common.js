$(function() {

if (window.matchMedia("(min-width: 768px)").matches){
	function heightDetect() {
		$("header").css("height", $(window).height());
	};

	 $('.bxslider').bxSlider({
	 	easing: 'ease',
	 	speed: 1800
	 });
	 $('.bx-next').addClass('animated shake');


}


	 $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,
        
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });

	 
$(".jq_valid").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thanks for the request. We will contact you shortly!");
			
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			$.magnificPopup.close();
						}, 100);

		});
		return false;
	}); 



	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });
	
});

$(window).load(function() {

	$(".loader_inner").fadeOut();
	$(".loader").delay(600).fadeOut("slow");

});
