<?php include 'includes/head.php'; ?>
	<body>
	<?php $src = (empty($_GET['url'])) ? 'http://onepagelove.com' : addslashes(filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL));?>
	<header class="header">
		<div class="left">
		<img src="images/dist/logo.png" class="logo">
		<h1>Drunk UX</h1>
		</div>
		<div class="right">
		<form method="get" action="" id="url-form">
			
		     <input id="url" type="text" name="url" placeholder="Enter any URL" value="<?php echo $src; ?>" />
		     <button id="url-submit">Go</button>
		  </form>
		  </div>
		  <div class="drunk"><i class="fa fa-beer"></i> drunk vision</div>
	</header>
	
	<iframe id="sg-viewport" src="<?php echo $src; ?>" sandbox="allow-same-origin allow-scripts allow-forms" class="theframe"></iframe>
	
	<footer class="footer">
		<div class="cell">
			An <b>incredibly useful tool</b> brought to you by <a href="https://twitter.com/vlrprbttst" target="_blank">Valerio Pierbattista </a>
		</div>
	</footer>
	
	<?php include 'includes/scripts.php'; ?>
	</body>
</html>
