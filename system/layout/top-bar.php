<div id="top-bar">
    <div class="date">
      <?php
        date_default_timezone_set("Asia/Bangkok");
        echo date('l, d F Y');
      ?>
    </div>
      <ul class="nav personal-right-menu">
          <li class="dropdown">
            <a class="greetings dropdown-toggle" data-toggle="dropdown" href="#">
              <p class="greetings-welcome">Welcome, </p>
              <p class="greetings-acc-name"><?php echo $login->getUsername() . " "; ?><span class="caret"></span></p>
            </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#" id="edit-clicked">Edit Profile</a></li>
                <li><a href="#" id="edit-password-clicked">Change Password</a></li>
              </ul>
          </li>
          <li class="xs-navbar-right"><a class="cart" href="#"><span class="badge">3</span><span class="icon-cart"></span><p class="cart-text">My Cart</p></a></li>
    </ul>
</div>