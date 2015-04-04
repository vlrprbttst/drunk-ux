<?php
include 'includes/head.php';
?>
<body>
	<div id="fb-root"></div>
	<script>
		( function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id))
					return;
				js = d.createElement(s);
				js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
	</script>
	<script>
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
	</script>
	<?php $src = (empty($_GET['url'])) ? 'http://onepagelove.com' : addslashes(filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL)); ?>
	<header class="header">
		<div class="left">
			<img src="images/dist/logo.png" class="logo">
			<h1>Drunk UX</h1>
		</div>
		<div class="right">
			<form method="get" action="" id="url-form">

				<input id="url" type="text" name="url" placeholder="Enter any URL" value="<?php echo $src; ?>" />
				<button id="url-submit">
					Go
				</button>
			</form>
		</div>
		<div class="drunk">
			<i class="fa fa-beer"></i> drunk vision
		</div>
	</header>

	<iframe id="sg-viewport" src="<?php echo $src; ?>" sandbox="allow-same-origin allow-scripts allow-forms" class="theframe"></iframe>

	<footer class="footer">
		<div class="cell">
			An <b>incredibly useful tool</b> brought to you by <a href="https://twitter.com/vlrprbttst" target="_blank">Valerio Pierbattista</a>
		</div>
		<div class="cell">
			<i class="fa fa-github fa-lg"></i>&nbsp;<a href="https://github.com/vlrprbttst/drunk-ux" target="_blank">Source & Info</a>
			<div class="fb-share-button" data-href="http://www.valeriopierbattista.com/projects/drunkux" data-layout="button_count"></div>
			<a class="twitter-share-button"
			href="http://valeriopierbattista.com/projects/drunkux/"
			data-url="http://valeriopierbattista.com/projects/drunkux/"
			data-via="vlrprbttst"
			data-text="DrunkUX: Test your website UX behind drunk eyes"
			data-count="horizontal">
			Tweet
			</a>
		</div>
	</footer>

	<?php
	include 'includes/scripts.php';
	?>
</body>
</html>
