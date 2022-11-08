$(document).ready(function(){

	//add jump to section if the menu was clicked
	$('.menu a[href*=\\#]').on('click', function(e) {

		e.preventDefault();
		var target = $(this).attr("href");

			$('html, body').stop().animate({
					scrollTop: $(target).offset().top
				}, 600, function() {
					location.hash = target; 
			});

			return false;
	});
	$('.btn-contact').on('click', function(e) {

		e.preventDefault();
		var target = $(this).attr("href");

			$('html, body').stop().animate({
					scrollTop: $(target).offset().top
				}, 600, function() {
					location.hash = target; 
			});

			return false;
	});

	//add focus on contact input
	$('.contact-holder').find('input, textarea').focus(function(){

		//remove focused class
		$('.contact-input-group').removeClass('focused');

		$(this).parent().addClass('focused');
	});
});

// $(window).scroll(function() {
// 	var scrollDistance = $(window).scrollTop();


// 	// Assign active class to nav links while scolling
// 	$('.page-section').each(function(i) {

// 		if ($(this).position().top <= scrollDistance) {

// 			$('.menu-item a.active').removeClass('active');
// 			$('.menu-item a').eq(i).addClass('active');
// 		}
// 	});
// }).scroll();
// $(window).scroll(function() {
//   var scrollDistance = $(window).scrollTop();


//   // Assign active class to nav links while scolling
//   $('.page-section').each(function(i) {

//     if ($(this).position().top <= scrollDistance) {

//       $('#menu-header-1 .menu-item a.active').removeClass('active');
//       $('#menu-header-1 .menu-item a').eq(i).addClass('active');
//     }
//   });
// }).scroll();
// End Gallery White BG Lightbox
$('.open-new-tab').click(function(e){

	e.preventDefault();

	var win = open(e.target.href);
	event.stopPropagation();
});
$('.open-new-tab-2').click(function(e){

	e.preventDefault();

	var win = open(e.target.href);
	event.stopPropagation();
});

// Gallery White BG Lightbox
$(document).ready(function(){
  $("#carouselGallery .html5lightbox").click(function(){
    $('body').addClass('gallery-full-showing');
  });
});
$(document).ready(function(){
  $("#section-videos .image_tn a.html5lightbox").click(function(){
    $('body').removeClass('gallery-full-showing');
  });
  $("#section-home a.html5lightbox").click(function(){
    $('body').removeClass('gallery-full-showing');
  });
});

$(document).ready(function () {

  $('.first-button').on('click', function () {

    $('.animated-icon1').toggleClass('open');
  });
  $('.second-button').on('click', function () {

    $('.animated-icon2').toggleClass('open');
  });
  $('.third-button').on('click', function () {

    $('.animated-icon3').toggleClass('open');
  });

  $('section#section-home .col-home-right h3').addClass('fadein');
  $('.first-button').on('click', function () {

    $('.animated-icon1').toggleClass('open');
  });

  //movie thumbnails
  $('.row-video-new .image_tn a.html5lightbox').on('click', function () {
    $('boy').toggleClass('vid-thumbnail-active');
  });
});

// TOOGLE SIDEBAR
$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
        $('body').toggleClass('sidebar-active');
  });  
});

// $('body').click(function () {
//     $('#wrapper').removeClass('toggled');
//  });

$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
        $('header').addClass('header-fixed');
    } else {
        $('header').removeClass('header-fixed');
    }
});
$("#wrapper ul li.menu-item a").on("click", function() {
  $("#wrapper").removeClass('toggled');
  $("#wrapper").toggleClass('scroll-class');
  $("#page-content-wrapper .hamburger").removeClass('is-open');
  $("#page-content-wrapper .hamburger").addClass('is-closed');
  $("#wrapper .overlay").css('display', 'none');
});
$("#wrapper.scroll-class.toggled .hamburger.is-closed").on("click", function() {
  $(this).removeClass('is-closed');
  $(this).addClass('is-open');
  // alert('ddd');
});
$('#carouselVideo').bcSwipe({threshold: 50 });
// $('#carouselGallery .carousel-inner').bcSwipe({threshold: 50 });

$('.owl-carousel').owlCarousel({
      loop:true,
      margin:5,
      responsive:{
        0:{
            items:5
        },
        600:{
            items:7
        },
        1000:{
            items:18
        }
    }
});
// Contact Form 7 mail sent...
document.addEventListener('wpcf7mailsent', function(event) {

  setTimeout(function() {
    $('.wpcf7-mail-sent-ok').delay(3000).fadeOut('slow').hide(0);
  }, 5000);

}, false);

$('iframe').attr('allowFullScreen', 'webkitallowfullscreen', 'mozallowfullscreen', '');


