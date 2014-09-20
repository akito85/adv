<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsed">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="../assets/img/logo-copy.png"/></a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="collapsed">
      <ul class="nav navbar-nav">
        <li <?php if ($_REQUEST['id'] =="home"){echo "class='active'";} ?>><a class="right-line" href="../home/">Home</a></li>
        <li <?php if ($_REQUEST['id'] =="about"){echo "class='active'";} ?>><a class="right-line" href="../about/">About Us</a></li>
        <li <?php if ($_REQUEST['id'] =="autoshow"){echo "class='active'";} ?>><a class="right-line" href="../autoshow/">Autoshow</a></li>
        <li <?php if ($_REQUEST['id'] =="products"){echo "class='active'";} ?>><a class="right-line" href="../products/">Products</a></li>
        <li>
          <?php if ($login->isUserLoggedIn() == true) { ?>
            <a style="margin-left: 16px" class="adv-red-btn" href="../logout/" id="logout-btn">Logout</a>
          <?php } else { ?>
            <a style="margin-left: 16px" class="adv-red-btn" href="#" id="sign-in-btn">Sign In</a>
          <?php }?>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <?php if ($login->isUserLoggedIn() == true) { ?>
          <li><a class="greetings right-line" href="#">Welcome, <strong><?php echo $login->getUsername(); ?></strong></a></li>
          <li><a href="#"><span class="badge">0</span><span class="icon-cart"></span>My Cart</a></li>
        <?php
              }
        ?>
      </ul>    
    </div><!-- /.navbar-collapse -->
  </div>
</nav>