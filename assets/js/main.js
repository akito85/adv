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
		$('.parent-container').addClass('blur');
	});
	$('.sign-up-btn').on('click', function(){
		$('.overlay-page').fadeIn();
		$('#sign-in-form').fadeOut();
		$('#sign-up-form').fadeIn();
		$('body').addClass('no-scroll');
		$('.parent-container').addClass('blur');
	});
	// Close overlay page when overlay background is clicked
	$('.overlay-background').on('click', function(){
		$('.overlay-page').fadeOut();
		$('#sign-in-form').fadeOut();
		$('#sign-up-form').fadeOut();
		$('body').removeClass('no-scroll');
		$('.parent-container').removeClass('blur');
	});
	// Contact us hover
	$('.contact').on( 'mouseover', function(){
		$('.contact').css('margin-bottom', '0');
	});
	$('.contact').on( 'mouseout', function(){
		$('.contact').css('margin-bottom', '-36px');
	});
	// Set background image height
	var $img_height = $(window).height();
	$('.background-img, .prologue-img, .about-img-header, .my-cart-content, .products-content, .news-img').css('height', $img_height);
	// Main Navigation active indicator
	var url = window.location.href;
	var page = url.substr(url.lastIndexOf('/')+1);
	if( !page ) {
		$('#main-nav a[href*="home"]').addClass('active');
	}
	else {
		$('#main-nav a[href*="'+page+'"]').addClass('active');
	}
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
		var windowHeight = $(window).height(),
				scroll = $(window).scrollTop(),
				scrollTrigger = windowHeight - 64;
		if (scroll >= scrollTrigger)  {
			$('#sidebar-btn').fadeIn();
		} 
		else {
			$('#sidebar-btn').fadeOut();
		}
		if (scroll > prologue_pos && scroll < news_pos) {
			$('.sb-current').text('Prologue');
		}
		else if (scroll >= news_pos) {
			$('.sb-current').text('News');
		}
	});
	// Sidebar click trigger
	$('.sb-prolog, .go-down-arrow').on('click', function(){
		$('body, html').animate({'scrollTop': prologue_pos});
	});
	$('.sb-news').on('click', function(){
		$('body, html').animate({'scrollTop': news_pos});
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

$(document).ready(function(){
	var footerHeight = $('.adv-footer').height();
	$('.adv-footer').css({marginBottom: 0 - footerHeight}, 'fast');
	$('.contact-btn').on('click', function(){
		if($('.adv-footer').css('marginBottom') == '0px') {
			$('.adv-footer').animate({marginBottom: 0 - footerHeight}, 'fast');
		}
		else {
			$('.adv-footer').animate({marginBottom: '0px'}, 'fast');
		}
	});
});