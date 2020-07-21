// window.smoothScroll();
$( document ).ready(function() {
    /*Smooth Scroll*/
    SmoothScroll({ keyboardSupport: false, stepSize: 50 });
});
$(document).ready(function($) {
 $('body,html').animate({scrollTop: 0}, 200); 
});

// (function ($) {
//       $(window).on("load", function () {
//         $('body').mCustomScrollbar({
//           theme: "dark-thin"
//         });
//       });
//     })(jQuery);

var images = document.querySelectorAll('.px-js');
new simpleParallax(images, {
  delay: .3,
  transition: 'cubic-bezier(0,0,0,1)',
  overflow: true
});


$('#menu-toggle').click(function(){
  $(this).toggleClass('open');
  $('.nav, .nav-overlay').toggleClass('active');
});

$('.burger').click(function(){
  $('.nav, .nav-overlay').toggleClass('active');
});

$('.dev-left__item').on('click', function(event) {
	event.preventDefault();
	if(!$(this).hasClass('active')){
		$('.dev-left__item').removeClass('active');
		$(this).addClass('active');
		$('.dev-right__item').hide().eq($(this).index()).fadeIn();
	}
});

$('.steps-item__head').on('click', function(event) {
	event.preventDefault();
  $(this).find('.steps-item__title').toggleClass('active');
  $(this).next().slideToggle();
});

function getFileName () {

  var file = this.value.replace(/\\/g, '/').replace(/.*\//, '');

  if(file === ''){
    file = "Прикрепить"
  }

  $(this).parents('.file-link').find('.file-text').text(file);


}

$('input[type="file"]').on('change input', getFileName);


$('.team-slider').slick({
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  variableWidth: true,
  arrows: false
});

$('.team-slider__next').on('click', function(event) {
	event.preventDefault();
	$('.team-slider').slick('slickNext');
});

$('.reward-slider').slick({
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  variableWidth: true,
  arrows: false
});

$('.faq-item__head').on('click', function(event) {
	event.preventDefault();
	$(this).toggleClass('active').next().slideToggle();
});

$(".footer-top").on("click", function (event) {
	$('body,html').animate({scrollTop: 0}, 1000);
});

$(".nav-list a").on("click", function (event) {
	var id = $(this).attr('href'), top = $(id).offset().top;
	$('body,html').animate({scrollTop: top}, 1000);
	$('.nav, .nav-overlay').removeClass('active');
	$('#menu-toggle').toggleClass('open');
});
// (function($){
//     $(window).on("load",function(){
//         $("body").mCustomScrollbar();
//     });
// })(jQuery);


$('.close').on('click', function(event) {
	event.preventDefault();
  if($(this).hasClass('nav-close')){
    $('.nav, .nav-overlay').toggleClass('active');
  }else{
    $(".overlay").fadeOut();
    $("html").removeClass('stop');
  }
});

$('.overlay').mouseup(function(e){
  var container = $('.modal-wrap');
  if (container.has(e.target).length === 0 && !container.is(e.target)){
    $('html').removeClass('stop');
    $('.overlay').fadeOut();
  }
});

$(".title, .title-lg, .text44, .text34").not('.title-first').each(anime);
function anime(anim){
  var thisTitle = $(this);
  $(window).scroll(function(event) {
   var offsetTop = thisTitle.offset().top - $(window).height() - 10;
   if($(document).scrollTop() > offsetTop ){
    thisTitle.addClass('fade_in');
  }
});
}

$(".main-circle-dark, .main-circle-tg").not('.sacaleAnim').each(animeCir);
function animeCir(anim){
  var thisTitle = $(this);
  $(window).scroll(function(event) {
   var offsetTop = thisTitle.offset().top - $(window).height() - 10;
   if($(document).scrollTop() > offsetTop ){
    thisTitle.addClass('sacaleAnim');
  }
});
}

$(".link-scr").on("click", function (event) {
  var id = $(this).attr('href'), top = $(id).offset().top;
  $('body,html').animate({scrollTop: top}, 600);
});

$( ".open-js" ).on('click', function(event) {
  event.preventDefault();
  $('.overlay').fadeOut();
  h = $(this).attr('href');
  $(h).fadeIn();
  $('html').addClass('stop');
});



$(function(){
  'use strict';
  var action = './assets/mailer/send.php';
  $('form').on('submit', function(e){
    e.preventDefault();
    var formThis = $(this);
    var fd = new FormData( this );

    formThis.find('.btn').attr({
      'disabled': 'true'
    });



    if(formThis.find('input[name="formname"]').val() === "test"){


      formThis.find('input').attr({
        'disabled': 'true',
      });
      formThis.find('button').attr({
        'disabled': 'true',
      });
      $('.test-item').hide();
      $('.final, .test__block').removeClass('active');
      $('.test-thank').fadeIn().addClass('active');

    }else{
      $(".overlay").fadeOut();
      $('html').addClass('stop');
      $("#modal-thank").fadeIn();
      formThis.find('.btn').removeAttr('disabled');

    }

          // formThis.find('.btn').removeAttr('disabled');
    $('form').trigger('reset');

    $.ajax({
      url: action,
      type: 'POST',
      contentType: false, 
      processData: false, 
      data: fd,
      success: function(msg){



      },

    });
  });
});