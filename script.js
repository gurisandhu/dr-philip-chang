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
  
  document.onreadystatechange = function(){
    var element = document.getElementById('parallax_content');
    var style = window.getComputedStyle(element);
    var top   = parseInt(style.getPropertyValue('top')); 
  
  // Parallax
  function parallax(){
    var layer_1 = document.getElementById('parallax');
    var layer_2 = document.getElementById('parallax_content'); 
    layer_1.style.backgroundPosition = '25%' + (-window.pageYOffset/10) + 'px';
    var scrollPosition = window.pageYOffset/1.5; 
    scrollPosition +=  top;   
    layer_2.style.top = (scrollPosition) + 'px';
    var content_opacity = (1 - window.pageYOffset/700);
    layer_2.style.opacity = content_opacity;
  }

  var element2 = document.getElementById('parallax_content-2');
    var style2 = window.getComputedStyle(element2);
    var top2   = parseInt(style2.getPropertyValue('top'));

  function parallax2(){
    var layer_1 = document.getElementById('parallax-2');
    var layer_2 = document.getElementById('parallax_content-2'); 

    var section_front = $(".section-3").offset().top - 0;
    var sectionNext = $(".section-4").offset().top - 100;

    layer_1.style.backgroundPosition = '25%' + (100 + (-window.pageYOffset/3)) + 'px';

    var scrollPosition = window.pageYOffset/1.5;
    
    top2  += scrollPosition;  

    layer_2.style.top = (top2/20) + 'px';

    var content_opacity = (1 - scrollPosition/
      4000);

     layer_2.style.opacity = content_opacity;

    var $w = $(window).scroll(function(){
      if (($w.scrollTop() > section_front) && ($w.scrollTop() < sectionNext){
        alert("test");
      }
    });
  }
    window.addEventListener("scroll", parallax, false);

    window.addEventListener("scroll", parallax2, false);
    
  }//end of document on readystatechange
  