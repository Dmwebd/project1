$(document).ready(function($) {
  var item = '.test-item';
  var itemCol = $(item).length;
  var $element = $(item).find("input, select, textarea");
  var btnNext = $('.test-next');
  var btnPrev = $('.test-prev');




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

    // логика кнопок
    if(numInput > 0){
      $(this).parents(item).find('.test-next').removeAttr('disabled').removeClass('dark');
    }

  });




  // взаимодействие с анимацией
  $(item).eq(0).find('.t-item').addClass('active');
  var ns = 0;
  var ns2 = itemCol;

  var testdDelays = 1;
  function testItem(num){
    $(item).find('.t-item').removeClass('active');
    testdDelays = 1;
    $(item).eq(num).find('.t-item').each(function(index, el) {
      var tbi = $(this);
      setTimeout(function(){
        tbi.addClass('active');
      }, testdDelays);
      testdDelays += 200;
    });
  }

$('.test-item').eq(5)
  // клики
  btnNext.on('click', function(event) {
    event.preventDefault();
      
      $(item).hide();
      $(item).eq(ns + 1).fadeIn();
      testItem(ns + 1);
      ++ns;

      var qwOne = '';
      function valQw(num, text){
         $(item).eq(num).find('.t-item input').each(function(index, el) {
           if($(this).prop('checked')){
            qwOne += $(this).val() + ' ,';
           }
         });
         qwOne = qwOne.substring(0, qwOne.length - 1);
         console.log(qwOne)
         $(text).text(qwOne);
         if(num === 3){
           qwOne = 'Дизайн: ';
         }else if(num === 4){
           qwOne = 'ТЗ: ';
         }else{
           qwOne = '';
         }

      }

      if(ns === itemCol - 2){
         $('.final').addClass('active');
         $('.test__block').addClass('active');
         if(!$('body').find('.final-mobile').length > 0){
           valQw(0 , '.text-qw-1');
           valQw(1 , '.text-qw-2');
           valQw(2 , '.text-qw-3');
           valQw(3 , '.text-qw-4');
           valQw(4 , '.text-qw-5');
           valQw(5 , '.text-qw-6');
         }
      }
      if($(item).eq(ns).hasClass('final-mobile')){
        
        valQw(0 , '.text-qw-1');
        valQw(1 , '.text-qw-2');
        valQw(2 , '.text-qw-3');
        valQw(3 , '.text-qw-4');
        valQw(4 , '.text-qw-5');
        valQw(5 , '.text-qw-6');
        
      }
      animateTop ();
    
  });


  btnPrev.on('click', function(event) {
    event.preventDefault();

      --ns;

      $(item).hide();
      $(item).eq(ns).fadeIn();
      testItem(ns);
      animateTop ();
  });

});

// скролл на верх
function animateTop (eq){
  var elem = $('.test-scroll-js');
  var top = elem.offset().top - 15;
  $('body,html').animate({scrollTop: top}, 400);
}



