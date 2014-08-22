<div id="top-bar">
	<div class="date">
		<?php
			date_default_timezone_set("Asia/Bangkok");
			echo date('l, d F Y');
		?>
	</div>
	<div class="personal-info">
		
		<div class="account-btn">
			<a class="sign-in-btn" href="javascript:void(0)">Sign in</a>
			<!--<a class="account-btn-menu" href="javascript:void(0)">Account &#9662;</a>-->
		</div>
		<div class="cart">
			<a href="index.php?id=my-cart"><span class="badge">0</span><span class="icon-cart"></span>My Cart</a>
		</div>
	</div>
	<div class="account-menu">
		<ul>
			<li><a class="sign-in-btn" href="javascript:void(0)">Sign in</a></li>
			<li><a class="sign-up-btn" href="javascript:void(0)">Sign up</a></li>
			<li><a href="#">Profile</a></li>
			<li><a href="#">History</a></li>
			<li><a href="#">Log out</a></li>
		</ul>
	</div>
</div>