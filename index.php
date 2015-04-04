<?php include 'includes/head.php'; ?>
	<body>
	<?php $src = (empty($_GET['url'])) ? 'http://css-tricks.com/' : addslashes(filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL));?>
	<header class="header">
		<div class="left">
		<img src="images/dist/logo.png" class="logo">
		<h1>Drunk UX</h1>
		</div>
		<div class="right">
		<form method="get" action="" id="url-form">
			<label for="url" id="url-toggle" class="url-toggle">Insert your URL: </label>
		     <input id="url" type="text" name="url" placeholder="Enter any URL" value="<?php echo $src; ?>" />
		     <button id="url-submit">Go</button>
		  </form>
		  </div>
		  <div class="drunk">drunk vision</div>
	</header>
	
	<iframe id="sg-viewport" src="<?php echo $src; ?>" sandbox="allow-same-origin allow-scripts allow-forms" class="theframe"></iframe>
	
	<footer class="footer">
		footer
	</footer>
	
	<?php include 'includes/scripts.php'; ?>
	</body>
</html>
