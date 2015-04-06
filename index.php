<!doctype html>
<!--[if IE 9]>
<html lang="en" class="ie ie9">
<![endif]-->
<!--[if lt IE 9]>
<html lang="en" class="ie ie-legacy">
<![endif]-->
<html lang="en">
	<head>

		<meta charset="utf-8">
		<title>DrunkUX</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
		<meta name="description" content="Test your UX behind drunk eyes">
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<!-- facebook -->
		<meta property="og:title" content="DrunkUX"/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="http://valeriopierbattista.com/projects/drunkux/"/>
		<meta property="og:image" content="http://valeriopierbattista.com/projects/drunkux/images/dist/facebook-image.png"/>
		<meta property="og:description" content="Test your UX behind drunk eyes"/>
		<meta property="og:site_name" content="DrunkUX"/>

		<meta http-equiv="content-language" content="EN">
		<!-- viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Windows/IE font smoothing -->
		<meta http-equiv="cleartype" content="on">
		<!-- Use latest IE rendering engine and switch on chrome Frame if available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- CSS -->
		<link rel="stylesheet" href="css/main.css" />

		<meta http-equiv="content-language" content="EN">
		<meta name="revisit-after" content="7 days">

		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<?php $src = (empty($_GET['url'])) ? 'http://bostonglobe.com' : addslashes(filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL)); ?>
		<header class="header">
			<div class="left">
				<img src="images/dist/logo.png" class="logo">
				<h1>Drunk UX<br><span>Is it Drunk Proof?</span></h1>
			</div>
			<div class="center">
				<form method="get" action="" id="url-form">
					<label for="url"><i class="fa fa-arrow-circle-o-down"></i> Insert URL here:</label>

					<input id="url" type="text" name="url" placeholder="Enter any URL" value="<?php echo $src; ?>" />
					<button id="url-submit">
						Go
					</button>
				</form>
			</div>
			<div class="right">
				<div class="drunk">
					<i class="fa fa-beer"></i> drunk vision
				</div>
			</div>
		</header>

		<iframe id="sg-viewport" src="<?php echo $src; ?>" sandbox="allow-same-origin allow-scripts allow-forms" class="theframe">

		</iframe>

		<footer class="footer">
			<div class="cell">
				An <b>incredibly useful tool</b> brought to you by <a href="https://twitter.com/vlrprbttst" target="_blank">Valerio Pierbattista</a> - <i class="fa fa-github fa-lg"></i>&nbsp;<a href="https://github.com/vlrprbttst/drunk-ux" target="_blank">Source & Info</a>
			</div>
			<div class="cell">

				<a class="twitter-share-button"
				href="http://valeriopierbattista.com/projects/drunkux/"
				data-url="http://valeriopierbattista.com/projects/drunkux/"
				data-via="vlrprbttst"
				data-text="DrunkUX: Test your website's UX behind drunk eyes #dontdrinkandbrowse #drunkux #ux - "
				data-count="horizontal"> Tweet </a>

				<span><i class="fa fa-ban"></i> Don't Drink & Browse ;)</span>
			</div>
		</footer>

		<script src="js/build/production.min.js"></script>
	</body>
</html>
