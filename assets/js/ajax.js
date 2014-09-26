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
      //alert(data);
      $("#login-error-message").html(data);
      $("#login-error-message").delay(0).fadeIn('slow');
      $("#login-error-message").delay(7000).fadeOut('slow');
        if (data === ""){
          //alert(data);
          window.location.replace("index.php");
          location.reload();
        }
    });
    //$('#sign-in-form')[0].reset();
    event.preventDefault();
  });

  // edit
  $("#edit-form").submit(function(event) {
    $.post("login.php", $("#edit-form").serialize() + "&edit-submit=Edit").done(function(data) {
      //alert(data);
      $("#edit-error-message").html(data);
      $("#edit-error-message").addClass("bg-success");
      $("#edit-error-message").delay(0).fadeIn('slow');
      $("#edit-error-message").delay(7000).fadeOut('slow');
        if (data === ""){
          //alert(data);
          window.location.replace("index.php");
          location.reload();
        }
    });
    //$('#sign-in-form')[0].reset();
    event.preventDefault();
  });

  // edit pass
  $("#edit-password-form").submit(function(event) {
    $.post("login.php", $("#edit-password-form").serialize() + "&edit-password-submit=EditPassword").done(function(data) {
      //alert(data);
      $("#edit-password-error-message").html(data);
      $("#edit-password-error-message").addClass("bg-success");
      $("#edit-password-error-message").delay(0).fadeIn('slow');
      $("#edit-password-error-message").delay(7000).fadeOut('slow');
        if (data === ""){
          //alert(data);
          window.location.replace("index.php");
          location.reload();
        }
    });
    //$('#sign-in-form')[0].reset();
    event.preventDefault();
  });

});



