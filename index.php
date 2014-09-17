<?php
//lol this not gonna hurt!!
require_once("login.php");
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
	<script>
		$(document).ready(function(){
			var footerHeight = $('.adv-footer').height();
			$('.adv-footer').css({marginBottom: 0 - footerHeight}, 'fast');
			$('.contact-btn').on('click', function(){
				if($('.adv-footer').css('marginBottom') == '0px') {
					$('.adv-footer').animate({marginBottom: 0 - footerHeight}, 'fast');
				}
				else {
					$('.adv-footer').animate({marginBottom: '0px'}, 'fast');
				}
			});
		});
	</script>
</body>
</html>
