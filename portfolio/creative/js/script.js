$(document).ready(function() {

	// btn to top

	$(".box_to_top").hide();

	$(window).scroll(function() {
		if($(this).scrollTop()>200) {
			$(".box_to_top").fadeIn();
		} else {
			$(".box_to_top").fadeOut();
		}
	});

	$(".box_to_top").click(function() {
		$("body").animate({
			scrollTop: 0
		}, 3000);
	});

	// Menu hamburger

	$(".icon").click(function() {
		$(".icon").toggleClass("active");
		$(".toggle_menu").slideToggle(400);	
	})
		
});

