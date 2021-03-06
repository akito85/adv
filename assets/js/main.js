$(document).ready(function(){
    // Close overlay page when overlay background is clicked
    $('.overlay-background').on('click', function(){
        $('.overlay-page').fadeOut();
        $('#sign-in-form').fadeOut();
        $('#sign-up-form').fadeOut();
        $('#the-map').fadeOut();
        $('#edit-form').fadeOut();
        $('#edit-password-form').fadeOut();
        $('body').removeClass('no-scroll');
        $('#top-bar, .add-content-margin-top, .content, nav, .adv-footer').removeClass('blur');
    });

    $('#sign-in-btn').on('click', function(){   
        $('.overlay-page').fadeIn();
        $('#sign-up-form').fadeOut();
        $('#sign-in-form').fadeIn();
        $('body').addClass('no-scroll');
        $('#top-bar, .add-content-margin-top, .content, nav, .adv-footer').addClass('blur');
    });
    $('.sign-up-btn').on('click', function(){ 
        $('.overlay-page').fadeIn();
        $('#sign-in-form').fadeOut();
        $('#sign-up-form').fadeIn();
        $('body').addClass('no-scroll');
        $('#top-bar, .add-content-margin-top, .content, nav, .adv-footer').addClass('blur');
    });

    $('#hq').on('click', function(){    
        $('.overlay-page').fadeIn();
        $('#sign-up-form').fadeOut();
        $('#sign-in-form').fadeOut();
        $('#the-map').fadeIn();
        $('body').addClass('no-scroll');
        $('#top-bar, .add-content-margin-top, .content, nav, .adv-footer').addClass('blur');
    });

    $('#edit-clicked').on('click', function(){  
        $('.overlay-page').fadeIn();
        $('#sign-up-form').fadeOut();
        $('#sign-in-form').fadeOut();
        $('#the-map').fadeOut();
        $('#edit-form').fadeIn();
        $('body').addClass('no-scroll');
        $('#top-bar, .add-content-margin-top, .content, nav, .adv-footer').addClass('blur');
    });

    $('#edit-password-clicked').on('click', function(){     
        $('.overlay-page').fadeIn();
        $('#sign-up-form').fadeOut();
        $('#sign-in-form').fadeOut();
        $('#the-map').fadeOut();
        $('#edit-form').fadeOut();
        $('#edit-password-form').fadeIn();
        $('body').addClass('no-scroll');
        $('#top-bar, .add-content-margin-top, .content, nav, .adv-footer').addClass('blur');
    });

    $('.dropdown').hover(function() {
      $('.dropdown-menu').stop(true, true).delay(200).fadeIn();
    }, function() {
      $('.dropdown-menu').stop(true, true).delay(200).fadeOut();
    });       

    // contact footer hover
    $('.adv-footer').on('mouseenter', function () { $('.collapsed-footer').stop(true, true).fadeIn('slow'); $('.adv-contact-right').show(); });
    $('.adv-footer').on('mouseleave', function () { $('.collapsed-footer').stop(true, true).fadeOut('slow'); $('.adv-contact-right').hide(); });

    $('.adv-footer').click(function(){
      $('.collapsed-footer').toggle();
    });


    // video
    $('#lm').bind('ended', function() {
      $('#lm')[0].load();
    });

    $('#wd').bind('ended', function() {
      $('#wd')[0].load();
    });

    $('#rc').bind('ended', function() {
      $('#rc')[0].load();
    });

    $('#adv').bind('ended', function() {
      $('#adv')[0].load();
    });
        
    // start on pace start
    $('.overlay-loading').fadeIn();
    $('html, body').addClass('no-scroll');
    Pace.on("done", function() {
        $('.overlay-loading').delay(500).fadeOut("slow");
        $('html, body').removeClass('no-scroll');
    });

    $("#gals").fancybox({
      openEffect  : 'elastic',
      closeEffect : 'elastic',

      helpers : {
        title : {
          type : 'inside'
        }
      }
    });

    $(window).on('scroll', function(){
      $("#collapsed").removeClass("in");
      $('.collapsed-footer').stop(true, true).fadeOut('slow');
    });

});

// Modal Behaviour
$('#modal-trigger-1').on('click', function(){
    $('#adv-modal-1').fadeIn();
    $('.modal-overlay').fadeIn();
    $('body').addClass('no-scroll');
});
$('#modal-trigger-2').on('click', function(){
    $('#adv-modal-2').fadeIn();
    $('.modal-overlay').fadeIn();
    $('body').addClass('no-scroll');
});
$('.modal-close-btn').on('click', function(){
    $('.modal-overlay').fadeOut();
    $('.modal').fadeOut();
    $('body').removeClass('no-scroll');
    $('video')[0].pause();
    $('video')[1].pause();
});


