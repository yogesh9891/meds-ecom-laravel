$(window).scroll(function () {
	if ($(window).scrollTop() >= 200) {
		$('.uppersection').addClass('fixed-nav');
	}
	else {
		$('.uppersection').removeClass('fixed-nav');
	}

});
$(window).scroll(function () {
	if ($(window).scrollTop() >= 200) {
		$('.wsmenucontainer').addClass('fixed-nav');
	}
	else {
		$('.wsmenucontainer').removeClass('fixed-nav');
	}

});
var owl1 = jQuery('.banner-slider');
owl1.owlCarousel({
	items: 1,
	loop: true,
	autoplay: true,
	autoplayTimeout: 3000,
		slideSpeed: 300,
	autoplayHoverPause: true,
	nav: true,
	rewind: true,
	dots: true,
	animateOut: 'fadeOut'
});
var owl2 = jQuery('.textslider');
owl2.owlCarousel({
	items: 1,
	loop: true,
	autoplay: true,
	autoplayTimeout: 3000,
	slideSpeed: 3000,
	autoplayHoverPause: true,
	nav: false,
	rewind: true,
	dots: false
});
var owl3 = jQuery('.storeslider');
owl3.owlCarousel({
	items: 1,
	loop: true,
	autoplay: true,
	autoplayTimeout: 2000,
	slideSpeed: 100,
	autoplayHoverPause: true,
	nav: false,
	rewind: true,
	dots: false
});
var owl4 = jQuery('.logo-slider');
	owl4.owlCarousel({
		loop: true,
		autoplay: true,
		autoplayTimeout: 3000,
		slideSpeed: 300,
		autoplayHoverPause: true,
		nav: true,
		rewind: true,
		margin: 10,
		dots: false,
		navigation: true,
		animateIn: 'fake',
		animateOut: 'fake',
		responsiveClass: true,
		responsive: {
			0: {
				items: 3,
				nav: false,
				dots: false
			},
			600: {
				items: 4,
				nav: false
			},
			1000: {
				items: 6,
				nav: true,
				loop: false
			}
		}
});

var owl5 = jQuery('.approved-drugs');
	owl5.owlCarousel({
		items: 3,
		loop: true,
		autoplay: true,
		autoplayTimeout: 3000,
		slideSpeed: 300,
		autoplayHoverPause: true,
		nav: false,
		rewind: true,
		margin: 3,
		dots: false,
		navigation: false,
		animateIn: 'fake',
		animateOut: 'fake'
});

var owl6 = jQuery('.reviewscroll');
	owl6.owlCarousel({
		loop: true,
		autoplay: true,
		autoplayTimeout: 3000,
		slideSpeed: 300,
		autoHeight: true,
		autoHeightClass: 'owl-height',
		autoplayHoverPause: true,
		nav: true,
		rewind: true,
		margin: 25,
		dots: false,
		navigation: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
				nav: false,
				nav: true
			},
			600: {
				items: 1,
				nav: false,
				nav: true
			},
			1000: {
				items: 1,
				nav: false,
				loop: false,
				nav: true
			}
		}
});
var owl7 = jQuery('.blog-slider');
	owl7.owlCarousel({
		loop: true,
		autoplay: true,
		autoplayTimeout: 3000,
		slideSpeed: 300,
		autoplayHoverPause: true,
		nav: true,
		rewind: true,
		margin: 25,
		dots: false,
		navigation: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
				nav: true
			},
			600: {
				items: 2,
				nav: false
			},
			1000: {
				items: 3,
				nav: true,
				loop: false
			}
		}
});
var owl8 = jQuery('.testimonial-slider');
	owl8.owlCarousel({
		loop:true,
		autoplay:true,
		autoplayTimeout:3000,
		slideSpeed: 300,
		autoplayHoverPause:true,
		nav : false,
		rewind: true,
		margin :25,
		dots : false,
		navigation : true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:2,
				nav:true
			},
			1000:{
				items:3,
				nav:true,
				loop:false
			}
		}
});

var owl9 = jQuery('.orderprocess');
	owl9.owlCarousel({
		autoplayTimeout:3000,
		slideSpeed: 300,
		autoplayHoverPause:true,
		dots : false,
		rewind: false,
		margin :10,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:2,
				nav:true,
				
			},
			1000:{
				items:5,
				nav:false,
				loop:false
			}
		}
});

var owl11 = jQuery('.stock');
        owl11.owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout:3000,
            slideSpeed:100,
            autoplayHoverPause: true,
            nav: false,
            rewind: true,
            margin: 25,
            dots: false,
            navigation: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items:1,
                    nav: false
                }
            }
        });
$('.moreless-button').click(function() {
  $('.moretext').slideToggle();
  if ($('.moreless-button').text() == "Read more") {
    $(this).text("Read less")
  } else {
    $(this).text("Read more")
  }
});



/*$(document).on('click', '.main-tabs .nav-link.active', function() {
  var href = $(this).attr('href').substring(1);
  $(this).removeClass('active');
  $('.tab-pane[id="' + href + '"]').removeClass('active');
  
});
$(document).mouseup(function(e) {
    var container = $("#tablist-home");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        $('.active').removeClass('active');
}
});*/

$('[data-fancybox]').fancybox({
  protect: true,
  buttons : [
    'zoom',
    'thumbs',
    'close'
  ]
});
$("#btnTViewDisclaimer").click(function () {
	$("#divTDisclaimer").toggle();
	if ($("#divTDisclaimer").css('display') == 'block') {
		$("#btnTViewDisclaimer").val('Show Less');
	}
	else {
		$("#btnTViewDisclaimer").val('Show Full');
	}
});
$("#seeBrand").click(function () {
	$("#divseeBrand").toggle();
	if ($("#divseeBrand").css('display') == 'block') {
		$("#seeBrand").val('Show Less');
	}
	else {
		$("#seeBrand").val('Show Full');
	}
});

$("#seeBrand1").click(function () {
	$("#divseeBrand1").toggle();
	if ($("#divseeBrand1").css('display') == 'block') {
		$("#seeBrand1").val('Show Less');
	}
	else {
		$("#seeBrand1").val('Show Full');
	}
});

jQuery(document).ready(function ($) {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 0) {
			$('#backToTop').fadeIn('slow');
		} else {
			$('#backToTop').fadeOut('slow');
		}
	});
	$('#backToTop').click(function () {
		$("html, body").animate({ scrollTop: 0 }, 500);
		return false;
	});
});

$(document).ready(function () {
	$("#showbtn1").click(function () {
		$("#druglist1").toggleClass("showlist");
	});
});
$(function() {
   $("input[name='fillcard']").click(function() {
     if ($("#fillcard").is(":checked")) {
       $("#fillcreditcard").show();
     } else {
       $("#fillcreditcard").hide();
     }
   });
 });
 $(document).ready(function() {
    $('#data_table').DataTable();
});
$(window).resize(function() {
  if ($(window).width() < 960) {
     $(document).on('click', '.seebtn, .50mg, .100mg, .ibrance', function (event) {
		event.preventDefault();

		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top - 50
		}, 500);
		});
		
	$(document).on('click', '.125mg', function (event) {
		event.preventDefault();

		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top - 50
		}, 500);
	});
  }
 else {
    $(document).on('click', '.seebtn, .50mg, .100mg, .ibrance', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 210
    }, 500);
	});
	$(document).on('click', '.125mg', function (event) {
		event.preventDefault();

		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top - 210
		}, 500);
	});
 }
});

$(function() {
  $('.ibranceup').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 200
        }, 1000);
        return false;
      }
    }
  });
});
