$(document).ready(function(){
  // signup
  $("#sign-up-form").submit(function(event) {
    $.post("register.php", $("#sign-up-form").serialize() + "&register=Register").done(function(data) {
      //alert(data);
      $("#register-error-message").html(data);
      $("#register-error-message").delay(0).fadeIn('slow');
      $("#register-error-message").delay(7000).fadeOut('slow');
      //window.location.replace("index.php");
      //location.reload();
    });
    $('#sign-up-form')[0].reset();
    event.preventDefault();
  });

  // signin
  $("#sign-in-form").submit(function(event) {
    $.post("login.php", $("#sign-in-form").serialize() + "&login=Login").done(function(data) {
      $("#login-error-message").html(data);
      $("#login-error-message").delay(0).fadeIn('slow');
      $("#login-error-message").delay(7000).fadeOut('slow');
        if (data === ""){
          alert(data);
          window.location.replace("index.php");
          location.reload();
        }
    });
    //$('#sign-in-form')[0].reset();
    event.preventDefault();
  });
});