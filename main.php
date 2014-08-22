<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADV - Auto De Vie</title>
	<link rel="stylesheet" href="assets/css/default.css">
</head>
<body>
	<?php include('system/layout/top-bar.php'); ?>
	<div class="container">
		<div class="red-line-left"></div>
		<div class="red-line-right"></div>
		<div class="home-gradient"></div>
		<div id="main-nav">
			<div class="logo-copy"></div>
			<ul class="left-menu">
				<li><a href="index.php?id=home">Home</a></li>
				<li><a href="index.php?id=about">About Us</a></li>
			</ul>
			<ul class="right-menu">
				<li><a href="index.php?id=autoshow">Autoshow</a></li>
				<li><a href="index.php?id=products">Products</a></li>
			</ul>
		</div>
		<?php
			$id = $_REQUEST['id'];
			switch($id) {
				default: include('system/layout/home.php');
					break;
				case "home": include('system/layout/home.php');
					break;
				case "about": include('system/layout/about.php');
					break;
				case "autoshow": include('system/layout/autoshow.php');
					break;
				case "products": include('system/layout/products.php');
					break;
				case "my-cart": include('system/layout/my-cart.php');
					break;
			}
		?>
	</div>
	<?php include('system/layout/overlay-page.php') ?>
	<div class="contact">
		<h1>Contact Us</h1>
		<p><a title="Send us an email" href="mailto:autodevie@gmail.com">autodevie@gmail.com</a> | +62.816.899.900</p>
	</div>
	<script src="assets/js/jquery-2.1.1.min.js"></script>
	<script src="assets/js/jquery.flexslider-min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>
