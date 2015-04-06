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
	var classes = ['drunkvision1', 'drunkvision2', 'drunkvision3', 'drunkvision4', 'drunkvision5', 'drunkvision6', 'drunkvision7', 'drunkvision8', 'drunkvision9', 'drunkvision10'];
	var randomnumber = Math.floor(Math.random() * classes.length);

	if ($(this).text() === "sober up!") {
		$(".theframe").removeClass(classes.join(' '));
		$(this).html("<i class='fa fa-beer'></i> Drunk Vision");
	} else {
		$(".theframe").addClass(classes[randomnumber]);
		$(this).text("sober up!");
	}

});

			if ($('.center input').val() != 'http://') {
				$(".center").addClass("url-active");
			}

// twitter button

window.twttr = ( function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0], t = window.twttr || {};
		if (d.getElementById(id))
			return;
		js = d.createElement(s);
		js.id = id;
		js.src = "https://platform.twitter.com/widgets.js";
		fjs.parentNode.insertBefore(js, fjs);
		t._e = [];
		t.ready = function(f) {
			t._e.push(f);
		};
		return t;
	}(document, "script", "twitter-wjs"));

//google analytics

(function(i, s, o, g, r, a, m) {
	i['GoogleAnalyticsObject'] = r;
	i[r] = i[r] ||
	function() {
		(i[r].q = i[r].q || []).push(arguments)
	}, i[r].l = 1 * new Date();
	a = s.createElement(o), m = s.getElementsByTagName(o)[0];
	a.async = 1;
	a.src = g;
	m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-42737159-1', 'valeriopierbattista.com');
ga('send', 'pageview');

