$(document).ready(function(){
    // dropdown account menu if clicked
    $('.account-btn-menu').on('click', 'a', function(){
        $('.account-menu').slideToggle();
    });
    // Close account menu if clicked
    $('.account-btn-menu').on('click', 'a', function(){
        $('.account-menu').fadeOut();
    });
    $('#sign-in-btn').on('click', function(){
        $('nav').addClass('send-to-back');
        $('.adv-footer').addClass('send-to-back');    	
        $('.overlay-page').fadeIn();
        $('#sign-up-form').fadeOut();
        $('#sign-in-form').fadeIn();
        $('body').addClass('no-scroll');
        //$('nav').removeClass('navbar-fixed-top');
        $('.content').addClass('blur');
    });
    $('.sign-up-btn').on('click', function(){
        $('nav').addClass('send-to-back');
        $('.adv-footer').addClass('send-to-back');    	
        $('.overlay-page').fadeIn();
        $('#sign-in-form').fadeOut();
        $('#sign-up-form').fadeIn();
        $('body').addClass('no-scroll');
        //$('nav').removeClass('navbar-fixed-top');
        $('.content').addClass('blur');
    });
    // Close overlay page when overlay background is clicked
    $('.overlay-background').on('click', function(){
        $('.overlay-page').fadeOut();
        $('#sign-in-form').fadeOut();
        $('#sign-up-form').fadeOut();
        $('#the-map').fadeOut();
        $('body').removeClass('no-scroll');
        //$('nav').addClass('navbar-fixed-top');
        $('nav').removeClass('send-to-back');
        $('.adv-footer').removeClass('send-to-back')
        $('.content').removeClass('blur');
    });

    $('#hq').on('click', function(){
        $('nav').addClass('send-to-back');
        $('.adv-footer').addClass('send-to-back');    	
        $('.overlay-page').fadeIn();
        $('#sign-up-form').fadeOut();
        $('#sign-in-form').fadeOut();
        $('.the-map').fadeIn();
        $('body').addClass('no-scroll');
        //$('nav').removeClass('navbar-fixed-top');
        $('.content').addClass('blur');
    });


    // contact footer hover
    $('.adv-footer').on('mouseenter', function () {$('.collapsed-footer').delay(0).fadeIn('slow')});
    $('.adv-footer').on('mouseleave', function () {$('.collapsed-footer').delay(0).fadeOut('slow')});
  
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


