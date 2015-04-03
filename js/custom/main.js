function navHeight() {
	var heights = window.innerHeight;
	var outerHeights = $(".header").outerHeight(true) + $(".footer").outerHeight(true);
	$('iframe').css('height', (heights - outerHeights) + "px");

};

navHeight();

$(window).resize(function() {
	navHeight();
}); 

jQuery(window).load(function () {
$("iframe").contents().find("body").addClass("myClass");
});