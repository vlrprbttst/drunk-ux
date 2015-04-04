function navHeight() {
	var heights = window.innerHeight;
	var outerHeights = $(".header").outerHeight(true) + $(".footer").outerHeight(true);
	$('.theframe').css('height', (heights - outerHeights) + "px");

};

navHeight();

$(window).resize(function() {
	navHeight();
});




$(".drunk").click(function() {
	$(".drunk").toggleClass("active");
	var classes = ['drunkvision1', 'drunkvision2', 'drunkvision3','drunkvision4', 'drunkvision5', 'drunkvision6','drunkvision7', 'drunkvision8', 'drunkvision9', 'drunkvision10'];
	var randomnumber = Math.floor(Math.random() * classes.length); 

    if($(this).text() === "oh my god stop!")
    {
        $(".theframe").removeClass(classes.join(' '));
        $(this).html("<i class='fa fa-beer'></i> Drunk Vision");
    }
    else{
    $(".theframe").addClass(classes[randomnumber]);
    $(this).text("oh my god stop!");
}

}); 

