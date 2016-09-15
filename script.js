//                              NOTE 
// 
//to edit this file, you must run Gulp. Because it will compresses the code into new file in compressed folder called script.js. And this file (compressed/script.js) is linked the site.
// 
// 
$(document).ready(function($){

  //Single page product images Slider
  var swiper = new Swiper('.swiper-container');
  
  var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30
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
    	$(".responsive-menu").toggleClass("show");
    	$("body").toggleClass("toggle-menu");
    	$(".hide-body").toggleClass("toggle-hide-body");
    	$(this).toggleClass("show");
    });
    $(".hide-body").click(function(){
    	$(".responsive-menu").removeClass("show");
    	$("body").removeClass("toggle-menu");
    	$(this).removeClass("toggle-hide-body");
    	$(".menu-button").removeClass("show");
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
      $(".responsive-menu").removeClass("show");
      $("body").removeClass("toggle-menu");
      $(".hide-body").removeClass("toggle-hide-body");
      $(".menu-button").removeClass("show");
    });
});//end of document ready
