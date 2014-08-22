$(document).ready(function(){
  $("#sign-up-form").submit(function(event) {
    $.post("register.php", $("#sign-up-form").serialize() + "&register=Register").done(function(data) {
      alert(data);
    });
    $('#sign-up-form')[0].reset();
    event.preventDefault();
  });
});