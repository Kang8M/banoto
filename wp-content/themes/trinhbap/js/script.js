
jQuery(function ($) {
	/* owl-carousel
	----------------------------------------- */	
	
	$('.main-slider').owlCarousel({
		singleItem : true,
		
		slideSpeed : 600,
		paginationSpeed : 800,
		rewindSpeed : 1000,
	 
		autoPlay : 6000,
		stopOnHover : true,
	 
		navigation : true,
		navigationText : ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		rewindNav : true,
		scrollPerPage : true,
	 
		pagination : false,
		paginationNumbers: false,
		
		transitionStyle: 'fade',
	});
	$('.single-car-version').owlCarousel({
		items : 2,
		itemsCustom : false,
		itemsDesktop : [1199,2],
		itemsDesktopSmall : [980,2],
		itemsTablet: [768,2],
		itemsTabletSmall: false,
		itemsMobile : [479,1],
		slideSpeed : 600,
		paginationSpeed : 800,
		rewindSpeed : 1000,
		autoPlay : false,	 
		navigation : true,
		navigationText : ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		scrollPerPage : true,
		pagination : false,
	});
	$('.slide-article-home').owlCarousel({
	    items: 4,
	    itemsCustom: false,
	    itemsDesktop: [1199, 2],
	    itemsDesktopSmall: [980, 2],
	    itemsTablet: [768, 2],
	    itemsTabletSmall: false,
	    itemsMobile: [479, 1],
	    slideSpeed: 600,
	    paginationSpeed: 800,
	    rewindSpeed: 1000,
	    autoPlay: true,
	    navigation: true,
	    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
	    scrollPerPage: true,
	    pagination: false,
	});
	/*--------------------
	fancy box
	--------------------*/	
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		$(".fancybox").fancybox({
			openEffect	: 'none',
			closeEffect	: 'none'
		});
	});
	
	/*--------------------
	tab drop
	--------------------*/	
	$('.nav-pills, .nav-tabs').tabdrop({
		text: '<i class="fa fa-bars"></i>'
	});
	$('body').on('click', '.nav-tabs .nav-link', function() {
		$(this).parents('.nav-tabs').find('.nav-link').removeClass('active');
	});
	
	/*--------------------
	bootstrap
	--------------------*/	
	$('[data-toggle="tooltip"]').tooltip();
	$('[href$="#modal-feng-shui"]').on('click', function(e) {
		$('#modal-feng-shui').modal('show');
		return false;
	});
	
	if (!$.cookie("modal_show")) {
		var expire = new Date(Date.now() + 4 * 60 * 60 * 1000);
		$.cookie('modal_show', 'yes', { expires: expire, path: '/' });
		setTimeout(function() {
			$('#modal-quotation-v2').modal();
		}, 1000 * 60 * 2);
	}    
	
	
	/*--------------------
	scroll top
	--------------------*/
	if ($(window).scrollTop() > 200) {
		$('.scroll-top').slideDown(200);
	} else {
		$('.scroll-top').slideUp(200);
	}
	$(window).scroll(function() {
	    if ($(window).scrollTop() > 200) {
			$('.scroll-top').slideDown(200);
	    } else {
			$('.scroll-top').slideUp(200);
		}
	});
	$('.scroll-top').on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({ 
			scrollTop: '0', 
		}, 400);
	});
	
	/* header fixed
	----------------------------------------- */	
	var heightHeader = $('.header').outerHeight();
	$(window).scroll(function() {
		if ( $(this).scrollTop() > $('.header').outerHeight() && $(this).width() > 991 ) {
			$('.header').addClass('header-fixed');
			$('body').css({
				'padding-top' : heightHeader,
			});
		} else {
			$('.header').removeClass('header-fixed');
			$('body').css({
				'padding-top' : 0,
			});
		}
	});
	
	/* sidebar sticky
	----------------------------------------- */	
	$('.sidebar').hcSticky();
	
	/*--------------------
	single car colors
	--------------------*/	
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		$('.single-car-colors .image img').fadeOut(0);
		$('.single-car-colors .image img').eq(0).fadeIn(0);
		$('.single-car-colors .list li').on('click', function() {
			var index = $(this).index();
			$('.single-car-colors .image img').fadeOut(0);
			$('.single-car-colors .image img').eq(index).fadeIn(0);
		});
	});
});

function formatPrice(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

$('input.number').keyup(function(event) {
	if(event.which >= 37 && event.which <= 40) return;

	$(this).val(function(index, value) {
		return value
		.replace(/\D/g, "")
		.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
	});
});

function ShowLoading() {
    var element = $('body');
    if (element.length > 0) {
        element.append("<div class='loading-icon' style='position: fix'></div>");
        element.css("position", "relative");
    }
}

function HideLoading() {
    var element = $('body');
    if (element.length > 0) {
        element.find(".loading-icon").remove();
    }
}
//Phan trang ajax danh muc san pham
function ViewMoreProCategory(urlRequest, url, page) {
    var obj = {
        page: page,
        url: url
    };
    $.ajax({
        url: urlRequest,
        type: 'GET',
        data: obj,
        beforeSend: function () {
            ShowLoading($('body'), 'fixed');
        },
        success: function (data) {
            if (data != null) {
                $('.view-more').replaceWith(data);
            }
        },
        complete: function () {
            setInterval(HideLoading($('body')), 300);
        }
    });
}