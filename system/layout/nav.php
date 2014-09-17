<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li <?php if ($_REQUEST['id'] =="home"){echo "class='active'";} ?>><a href="../home/">Home</a></li>
        <li <?php if ($_REQUEST['id'] =="about"){echo "class='active'";} ?>><a href="../about/">About Us</a></li>
        <li <?php if ($_REQUEST['id'] =="autoshow"){echo "class='active'";} ?>><a href="../autoshow/">Autoshow</a></li>
        <li <?php if ($_REQUEST['id'] =="products"){echo "class='active'";} ?>><a href="../products/">Products</a></li>
        <li>
          <?php if ($login->isUserLoggedIn() == true) { ?>
            <a style="margin-left: 16px" class="adv-red-btn" href="../logout/" id="logout-btn">Logout</a>
          <?php } else { ?>
            <a style="margin-left: 16px" class="adv-red-btn" href="#" id="sign-in-btn">Sign In</a>
          <?php }?>
        </li>
      </ul>
      <?php if ($login->isUserLoggedIn() == true) { ?>
        <div class="cart">
          <div class="greetings">Welcome, <strong><?php echo $login->getUsername(); ?></strong></div>
          <a href="index.php?id=my-cart"><span class="badge">0</span><span class="icon-cart"></span>My Cart</a>
        </div>
      <?php
            }
      ?>     

    </div><!-- /.navbar-collapse -->
  </div>
</nav>