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

	var classes = ['drunkvision1', 'drunkvision2', 'drunkvision3','drunkvision4', 'drunkvision5', 'drunkvision6','drunkvision7', 'drunkvision8', 'drunkvision9', 'drunkvision10'];
	var randomnumber = Math.floor(Math.random() * classes.length); 

    if($(this).text() === "cancel added class")
    {
        $("iframe").removeClass(classes.join(' '));
        $(this).text("add random class");
    }
    else{
    $("iframe").addClass(classes[randomnumber]);
    $(this).text("cancel added class");
}

}); 