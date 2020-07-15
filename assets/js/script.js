

// etap__cont

$('.contacts-slider').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	// adaptiveHeight: true,
	prevArrow: '<button class="arrows slidePrev t2"><img src="assets/img/arl.png" alt=""></button>',
	nextArrow: '<button class="arrows slideNext t2"> <img src="assets/img/arr.png" alt=""> </button>',
  // autoplay:true,
  // autoplaySpeed: 5000,
});


$('.fancy-class, .play, .gallery__item').fancybox({
   buttons : [ 
     'slideShow',
     'zoom',
     'fullScreen',
     'close'
   ],
   animationEffect: "zoom-in-out",
   animationDuration: 600,
   transitionEffect: "circular",
   transitionDuration: 420,
  
 });




if($(window).width() < 767){
	$('#contacts').remove();
	$(".links-fast").on("click", function (event) {
		$('.menu').fadeIn();
		$('.mobile-bot').fadeIn();
	});
	var inh = false;
	$('.item-link').on('click', function(event) {
		event.preventDefault();
		var block = $(this).data('class');

		$('.menu').hide();
		$('.'+block).fadeIn();
		$('.contacts-slider').slick('setPosition');
		if(block === 'menu-contacts'){
			if(!inh){
				var urlMap = "https://yandex.ru/map-widget/v1/?um=constructor%3A157db957a15339767266f427490b03c62e4839c0439ce3cdcca07cae551dc3a2&amp;source=constructor";
				$("#map").append('<iframe src="'+ urlMap +'"style="width: 100%; height: 100%;" frameborder="0"></iframe>');
				inh = true;
				console.log('323');
			}
		}
	});

	$(".menu-close").on("click", function (event) {
		$('.menu, .menu-about, .menu-contacts, .price').fadeOut();
		$('.mobile-bot').fadeOut();
	});

	$('.back').on('click', function(event) {
		event.preventDefault();
		$('.menu, .menu-about, .menu-contacts, .price').hide();
		$('.menu').show();
	});
	$('.price-tab__item-1').on('click', function(event) {
		event.preventDefault();
		$('.price-tab__item-1').removeClass('active');
		$(this).addClass('active');
		$('.price__item').hide().eq($(this).index()).fadeIn();
		$('.price').fadeIn();
		
	});	  
	
}else{
	$(".links-fast").on("click", function (event) {
		var id = $(this).attr('href'), top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 1000);
	});

	$('.price-tab__item-1').on('click', function(event) {
		event.preventDefault();
		if(!$(this).hasClass('active')){
			$('.price-tab__item-1').removeClass('active');
			$(this).addClass('active');
			$('.price__item').hide().eq($(this).index()).fadeIn();
		}
	});
	$(document).ready(function($) {
		var offsetHeight = $(".contacts").offset().top - $(window).height() - 300;
		var mapFooter = false;
		var urlMap = "https://yandex.ru/map-widget/v1/?um=constructor%3A157db957a15339767266f427490b03c62e4839c0439ce3cdcca07cae551dc3a2&amp;source=constructor";
		mapActivate ();
		 $(window).scroll(function(event) {
		 	offsetHeight = $(".contacts").offset().top - $(window).height() - 300;
		    mapActivate ();
		  });
		function mapActivate (){
		  if(!mapFooter){
		  if($(document).scrollTop() > offsetHeight){
		    $("#map").append('<iframe src="'+ urlMap +'"style="width: 100%; height: 100%;" frameborder="0"></iframe>');
		    mapFooter = true;
		    }
		  }
		}
	});
}