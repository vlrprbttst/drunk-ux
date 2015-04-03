<?php include 'includes/head.php'; ?>
	<body>
	<?php $src = (empty($_GET['url'])) ? 'http://css-tricks.com/' : addslashes(filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL));?>
	<header class="header">
		<form method="get" action="" id="url-form">
			<label for="url" id="url-toggle" class="url-toggle">URL</label>
		     <input id="url" type="text" name="url" placeholder="Enter any URL" value="<?php echo $src; ?>" />
		     <button id="url-submit">Go</button>
		  </form>
	</header>
	
	<iframe id="sg-viewport" src="<?php echo $src; ?>" sandbox="allow-same-origin allow-scripts allow-forms"></iframe>
	
	<footer class="footer">
		footer
	</footer>
	
	<?php include 'includes/scripts.php'; ?>
	</body>
</html>
