$(document).ready(function(){
	// dropdown account menu if clicked
	$('.account-btn-menu').on('click', 'a', function(){
		$('.account-menu').slideToggle();
	});
	// Close account menu if clicked
	$('.account-btn-menu').on('click', 'a', function(){
		$('.account-menu').fadeOut();
	});
	$('.sign-in-btn').on('click', function(){
		$('.overlay-page').fadeIn();
		$('#sign-up-form').fadeOut();
		$('#sign-in-form').fadeIn();
		$('body').addClass('no-scroll');
		$('.container').addClass('blur');
	});
	$('.sign-up-btn').on('click', function(){
		$('.overlay-page').fadeIn();
		$('#sign-in-form').fadeOut();
		$('#sign-up-form').fadeIn();
		$('body').addClass('no-scroll');
		$('.container').addClass('blur');
	})
	// Close overlay page when overlay background is clicked
	$('.overlay-background').on('click', function(){
		$('.overlay-page').fadeOut();
		$('#sign-in-form').fadeOut();
		$('#sign-up-form').fadeOut();
		$('body').removeClass('no-scroll');
		$('.container').removeClass('blur');
	});
	// Contact us hover
	$('.contact').on( 'mouseover', function(){
		$('.contact').css('margin-bottom', '0')
	});
	$('.contact').on( 'mouseout', function(){
		$('.contact').css('margin-bottom', '-36px');
	});
	// Set background image height
	var $img_height = $(window).height();
	$('.background-img, .prologue-img, .about-img-header, .my-cart-content, .products-content, .news-img').css('height', $img_height);
	// Main Navigation active indicator
	$(function(){
	  var url = window.location.href;
	  var page = url.substr(url.lastIndexOf('/')+1);
	  $('#main-nav a[href*="'+page+'"]').addClass('active');
	});
	// Sidebar menu toggle
	$('#sidebar-btn').on('click', 'a', function(){
		$('#sidebar').slideToggle();
	});
	// Initiate slider
	$('.background-img').flexslider({
    animation: "slide",
    slideshowSpeed: 5000,
    pauseOnAction: false,
    pauseOnHover: false,
    controlNav: true,
    directionNav: false, 
  });
	// Show sidebar when on home content
	var prologue_pos	= $('#prologue').offset().top,
			news_pos			= $('#news').offset().top;
	$(window).scroll(function() {
		var windowHeight = $(window).height()
				scroll = $(window).scrollTop(),
				scrollTrigger = windowHeight - 64;
		if (scroll >= scrollTrigger)  {
			$('#sidebar-btn').fadeIn();
		} 
		else {
			$('#sidebar-btn').fadeOut();
		}
		// Sidebar Scroll Indicator
		/*if (scroll > prologue_pos && scroll < news_pos) {
			$('.sb-current').text('Prologue');
		}
		else if (scroll >= news_pos) {
			$('.sb-current').text('News');
		}*/
		// Sidebar Scroll Indicator
		/*$('.sb-prolog').on('click', function(){
			$('.sb-current').text('Prologue');
			//$('#prologue').animate({'left': '0'});
			//$('#news').animate({'left': '1280px'});
			$('.content-container').animate({'right': '1280'});
		})
		$('.sb-news').on('click', function(){
			$('.sb-current').text('News');
			//$('#prologue').animate({'left': '-1280px'});
			//$('#news').animate({'left': '0'});
			$('.content-container').animate({'left': '-1280'});
		})
	});
	/*$('.sb-prolog').on('click', function(){
		//$('body').animate({scrollTop: prologue_pos});
	})
	$('.sb-news').on('click', function(){
		//$('body').animate({scrollTop: news_pos});
	})*/
	// news width
	/*var window_width = $(window).width();
	$('#news').css({'width': window_width});
	$('#prologue').css({'width': window_width})*/
});