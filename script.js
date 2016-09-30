//                            PLEASE  NOTE 
// 
//to edit this file, you must run Gulp. Because it will compresses the code into new file in compressed folder called script.js. And this file (compressed/script.js) is linked the site. If unable to use gulp or anyother task runner. You can do it manually from online "script minified tools".
// 
// 
$(document).ready(function(){

// Search toggle
  $(".toggle-button-2").click(function(){
    $(".toggle-content-2").slideToggle();
    $(".hide-body").toggleClass("toggle-hide-body");
  });

  // toggle show and hide
  $(".toggle-button").each(function(){
      $(this).click(function(){
        $(this).next(".toggle-content").slideToggle();
        $(this).toggleClass("show");
      })
    // $(this).find('.toggle-content').slideToggle();
  });

  //Single page product images Slider
  var swiper = new Swiper('.swiper-container');
  
  var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30,
        loop: true,
        autoplay: 3500,
        autoplayDisableOnInteraction: false
    });
  // On scroll up header resizes
    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();

      if (scroll >= 10) {
          $("body").addClass("on-scrolled");
      } else {
          $("body").removeClass("on-scrolled");
      }
    });

    //Responsive Menu
    $('body').append("<span class='hide-body'></span>");
    
    $(".menu-button").click(function(){
      $(".responsive-menu").slideToggle();
      $("body").toggleClass("toggle-menu");
      $(".hide-body").toggleClass("toggle-hide-body");
      $(this).toggleClass("show");
    });
    $(".hide-body").click(function(){
      $(".responsive-menu").slideUp();
      $("body").removeClass("toggle-menu");
      $(this).removeClass("toggle-hide-body");
      $(".menu-button").removeClass("show");
      $(".toggle-content-2").slideUp();
    });
    $(".responsive-menu .menu-item-has-children").append("<span class='has-details'><i class='fa fa-caret-down'></i></span>");
    $(".responsive-menu .sub-menu").slideUp();

    $(".responsive-menu .has-details").click(function(){
      $(this).parent(".menu-item-has-children").find("> .sub-menu").slideToggle();
      $(this).toggleClass("show");
    });

    // On click contact, go to contact form

    $("nav ul  li a:contains('ontact')").click(function(){
      $('html, body').animate({
        scrollTop: $(".contact-form").offset().top
      }, 1000);
      $(".responsive-menu").slideUp();
      $("body").removeClass("toggle-menu");
      $(".hide-body").removeClass("toggle-hide-body");
      $(".menu-button").removeClass("show");
    });   
  });//end of document ready

function $$(selector, context) {
    context = context || document;
    var elements = context.querySelectorAll(selector);
    return Array.prototype.slice.call(elements);
}

window.addEventListener("scroll", function() {
    var scrolledHeight  = window.pageYOffset;
    var bodyHeight      = document.body.offsetHeight;
    var clientHeight    = window.innerHeight;
    
    $$(".parallax").forEach(function(el,index,array) {
        
        var limit         =   scrolledHeight + el.offsetHeight;
        var limitTop      =   el.offsetTop + el.offsetHeight;
        var limitBottom   =   el.offsetTop - scrolledHeight;
        var limitOpacityBottom  =   limitBottom + (bodyHeight/3);
        var parallaxContent   =   el.querySelector('.parallax-content');
      
        // var parallaxContent   =   el.querySelector('.parallax-content-banner');
        // var pcTop             =   window.getComputedStyle(parallaxContent).getPropertyValue('top');
        //     pcTop = parseInt(pcTop.replace('px', ""));


        if(scrolledHeight <= limitTop && scrolledHeight >= limitBottom) {
          var resetScrolled = window.pageYOffset;
          var contentTopPositionBanner  =   (resetScrolled - limitBottom)/100;
          var contentTopPosition        = (resetScrolled - limitBottom)/300;
          var bgPostionY = (scrolledHeight - el.offsetTop) /5;

          if (bgPostionY >= 0){
            el.style.backgroundPositionY= (scrolledHeight - el.offsetTop) /7 + "px";
          }
            
            if(el.querySelector('.parallax-content') !== null){
              if (el.offsetTop < 100){
                parallaxContent.style.top = contentTopPositionBanner + 'em';
              } else {
                parallaxContent.style.top = contentTopPosition + 'em';
              }
            }
        }// Parallax Background Image
        
        if(el.querySelector('.parallax-content') !== null){
          if (scrolledHeight <= limitTop && scrolledHeight >= limitOpacityBottom){

            var resetScroll = scrolledHeight - limitOpacityBottom;
            var setOpacity = 1 - resetScroll/700;
            var zeroOpacity = 0.;
              el.querySelector('.parallax-content').style.opacity  = setOpacity;
            } else {
              el.querySelector('.parallax-content').style.opacity  = 1;
          }// Change Opacity while scroll
        }

    });//parallax forEach
});


