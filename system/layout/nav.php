<?php 
  if ($login->isUserLoggedIn() == true) {
    echo "<nav class='navbar navbar-inverse navbar-fixed-top add-margin-top' role='navigation'>";
  }
  else {
    echo "<nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>";
  }
?>
  <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsed">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="img-header-logo highres" src="../assets/img/logo/header-logo.png"/>
        <img class="img-footer-logo lowress" src="../assets/img/logo/footer-logo.png"/>
      </a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="collapsed">
      <ul class="nav navbar-nav">
        <li <?php if ($_REQUEST['id'] == "home"){echo "class='active'";} ?>><a href="../home/">Home</a></li>
        <li <?php if ($_REQUEST['id'] == "about"){echo "class='active'";} ?>><a href="../about/">About Us</a></li>
        <li <?php if ($_REQUEST['id'] == "autoshow"){echo "class='active'";} ?>><a href="../autoshow/">Autoshow</a></li>
        <li <?php if ($_REQUEST['id'] == "products"){echo "class='active'";} ?>><a href="../products/">Products</a></li>
        <li <?php if ($_REQUEST['id'] == "artdevie"){echo "class='active'";} ?>><a href="../artdevie/">Art De Vie</a></li>
        <li>
          <?php if ($login->isUserLoggedIn() == true) { ?>
            <a style="margin-left: 16px" class="adv-red-btn" href="../logout/" id="logout-btn">Logout</a>
          <?php } else { ?>
            <a style="margin-left: 16px" class="adv-red-btn" href="#" id="sign-in-btn">Sign In</a>
          <?php }?>
        </li>
      </ul>   
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
