$(document).ready(function($) {
  var item = '.test-item';
  var itemCol = $(item).length;
  var $element = $(item).find("input, select, textarea");
  var btnNext = $('.test-next');
  var btnPrev = $('.test-prev');


  // высота квиза
  var heightTest = 0;

  // $(item).each(function(index, el) {
  //   if($(this).outerHeight() > heightTest){
  //     heightTest = $(this).outerHeight();
  //   }
  // });

  // $('.test__left-block').css('height', heightTest);

function htest (num){
  heightTest = $(item).eq(num).outerHeight();

  $('.test__left-block').css('height', heightTest);
  console.log(heightTest)
}
htest (0);
  // проверка на инпуты выбора
  var numInput = 0;
  $element.on('change input', function (e) {
    numInput = 0;
    $(this).parents(item).find('input, select, textarea').each(function(index, el) {
      
      if($(this).attr('type') === 'radio' || $(this).attr('type') === 'checkbox'){
        if($(this).prop('checked')){
          ++numInput ;
        }
      }else{
        if($(this).val().length > 5){
          ++numInput ;
        }
      }

    });

    // логика кнопок и появление лейбла
    if(numInput > 0){
      $(this).parents(item).find('.test-next').removeAttr('disabled');
      $(this).parents(item).find('.test-tool').removeClass('active');
      $(this).parents(item).find('.btn-lbs').hide();
    }else{
      $(this).parents(item).find('.test-tool').addClass('active');
      $(this).parents(item).find('.btn-lbs').show();
      setTimeout(function(){
        $(this).parents(item).find('.test-tool').removeClass('active');
      }, 3000);
    }

  });

  // клик по дисейбл кнопке
  var lbs = false;
  $('.btn-lbs').on('click', function(event) {
    event.preventDefault();
    $('.test-tool').addClass('active');
    
    if(!lbs){
      setTimeout(function(){
        $('.test-tool').removeClass('active');
        lbs = false;
      }, 3000);
      lbs = true;
    }

  });



  // взаимодействие с анимацией
  $(item).eq(0).find('.tiem').addClass('active');
  var ns = 0;
  var ns2 = itemCol;

  var testdDelays = 1;
  function testItem(num){
    $(item).find('.tiem, .tiem-wrap').removeClass('active');
    testdDelays = 1;
    $(item).eq(num).find('.tiem, .tiem-wrap').each(function(index, el) {
      var tbi = $(this);
      setTimeout(function(){
        tbi.addClass('active');
      }, testdDelays);
      testdDelays += 240;
    });
  }


  // клики
  btnNext.on('click', function(event) {
    event.preventDefault();
      $('.test-title-block').removeClass('active').eq(ns + 1).addClass('active');
      
      $(item).eq(ns).addClass('end-q').removeClass('active');
      $(item).eq(ns + 1).removeClass('end-q').addClass('active');
      testItem(ns + 1);
      ++ns;
      $('.test__right-head2, .test__right-head').addClass('act');
      if(ns === itemCol - 1){
        $('.test-title').hide();
      }
      htest (ns);
      animateTop ();
    
  });


  btnPrev.on('click', function(event) {
    event.preventDefault();

      --ns;
      $('.test-title-block').removeClass('active').eq(ns).addClass('active');
      
      $(item).eq(ns + 2).addClass('end-q').removeClass('active');
      $(item).eq(ns + 1).addClass('end-q').removeClass('active');
      $(item).eq(ns).removeClass('end-q').addClass('active');
      testItem(ns);
      htest (ns);
      animateTop ();
  });

});

// скролл на верх
function animateTop (eq){
  var elem = $('.test-scroll-js');
  var top = elem.offset().top - 15;
  $('body,html').animate({scrollTop: top}, 400);
}



