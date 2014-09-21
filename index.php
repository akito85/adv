<?php
//lol this not gonna hurt!!
require_once("login.php");

$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (false !== strpos($url,'logout')) {
	header("Location: ../home/");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "system/layout/head.php"; ?>
</head>
<body>
	<?php include "system/layout/nav.php"; ?>
	<div class="content container-fluid">
		<?php
			$id = $_REQUEST['id'];
			switch($id) {
				default: include "system/layout/home.php";
					break;
				case "home": include "system/layout/home.php";
					break;
				case "about": include "system/layout/about.php";
					break;
				case "autoshow": include "system/layout/autoshow.php";
					break;
				case "products": include "system/layout/products.php";
					break;
				case "my-cart": include "system/layout/my-cart.php";
					break;
			}
		?>
	</div> <!-- end container -->
	<?php include "system/layout/overlay-page.php" ?>
	<?php include "system/layout/footer.php"; ?>
	<?php include "system/layout/script.php"; ?>
</body>
</html>
