<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <!-- Loading Bootstrap -->
  <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
  <!-- Loading Flat UI -->
  <link href="assets/css/flat-ui.css" rel="stylesheet">
  <!-- Loading admin ui -->
  <link href="assets/css/admin.css" rel="stylesheet">
  <link href="assets/css/tabs.css" rel="stylesheet">
  <link href="assets/css/tabstyles.css" rel="stylesheet">

</head>
<body>
  <svg class="hidden">
    <defs>
      <path id="tabshape" d="M80,60C34,53.5,64.417,0,0,0v60H80z"/>
    </defs>
  </svg>
<div class="container-fluid">
  <div class="row-fluid" id="content">
    <?php include "login.php"; ?>
    <?php //include "main.php"; ?>
  </div>
</div>

</body>
  <script type="text/javascript" src="assets/js/vendor/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/vendor/cbpFWTabs.js"></script>
  <script type="text/javascript" src="assets/js/vendor/headroom.min.js"></script>
  <script>
    // init nav
    var myElement = document.querySelector("nav");
    var headroom  = new Headroom(myElement);
    headroom.init(); 

    // init tabs
    (function() {
      [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
        new CBPFWTabs( el );
      });
    })();
  </script>



</html>