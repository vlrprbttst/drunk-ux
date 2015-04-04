function navHeight() {
	var heights = window.innerHeight;
	var outerHeights = $(".header").outerHeight(true) + $(".footer").outerHeight(true);
	$('iframe').css('height', (heights - outerHeights) + "px");

};

navHeight();

$(window).resize(function() {
	navHeight();
});

$(".drunk").click(function() {
	$("iframe").toggleClass("drunkvision");	

	if ($(this).text() == "stop")
		$(this).text("drunk vision")
	else
		$(this).text("stop");

}); 