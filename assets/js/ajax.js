$(document).ready(function(){
  $("#sign-up-form").submit(function(event) {
    $.post("register.php", $("#sign-up-form").serialize() + "&register=Register").done(function(data) {
      alert(data);
    });
    $('#sign-up-form')[0].reset();
    event.preventDefault();
  });

  $("#sign-in-form").submit(function(event) {
    $.post("index.php", $("#sign-in-form").serialize() + "&login=Login").done(function(data) {
      alert(data);
    });
    $('#sign-in-form')[0].reset();
    event.preventDefault();
  });
});