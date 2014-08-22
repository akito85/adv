$(document).ready(function(){
  $("#sign-up-submit").on( "click", function() {
    var user_name            = $("#sign-up-name").val();
    var user_phone           = $("#sign-up-phone").val();
    var user_email           = $("#sign-up-email").val();
    var user_password        = $("#sign-up-password").val();
    var user_password_repeat = $("#sign-up-password-confirmation").val();

    window.alert(user_name + " " + user_email + " " + user_phone);
  });
});