$(document).ready(function(){
  // signup
  $("#sign-up-form").submit(function(event) {
    $.post("register.php", $("#sign-up-form").serialize() + "&register=Register").done(function(data) {
      alert(data);
      window.location.replace("index.php");
      location.reload();
    });
    $('#sign-up-form')[0].reset();
    event.preventDefault();
  });

  // signin
  $("#sign-in-form").submit(function(event) {
    $.post("index.php", $("#sign-in-form").serialize() + "&login=Login").done(function(data) {
      //alert(data);
      window.location.replace("index.php");
      location.reload();
    });
    //$('#sign-in-form')[0].reset();
    event.preventDefault();
  });
});