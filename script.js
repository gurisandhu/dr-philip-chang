// 
// to edit this file, you must run Gulp. Because it will compresses the code into new file in compressed folder called script.js. And this file (compressed/script.js) is linked the site. If unable to use gulp or anyother task runner. You can do it manually from online "script minified tools".
//
//                            PLEASE  NOTE  
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
        // autoplay: 3000,
        effect: 'fade'
    });
  // On scroll up header resizes
    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();

      if (scroll >= 200) {
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

    var bodyHeight      = $('body').height();
    var clientHeight    = $(window).innerHeight();
    $('.parallax').each(function(){
      var thisEle = $(this);
      var childEle = thisEle.find('.parallax-content');
      var topPos = thisEle.offset().top;
      var eleHeight = thisEle.height();
      
      var thisPos = thisEle.css('background-position').split(" ");
      thisPos = parseInt(thisPos[1]);      
      $(window).scroll(function(){

        var scrolledHeight  = $(window).scrollTop() + clientHeight/1.1;

        if (scrolledHeight > topPos){
          var resetScroll = topPos - ($(window).scrollTop());
          if (topPos < 200){
            var newPos = thisPos - ($(window).scrollTop()/10);
            thisEle.css('background-position', 'center ' + newPos+'px');
          } else {
            resetScroll = (topPos - clientHeight + 88) - ($(window).scrollTop());
            var newPos = thisPos + (resetScroll/6);
            thisEle.css('background-position', 'center ' + newPos+'px');
          }
          
          childEle.find('h1').addClass('show');
          childEle.find('summary').addClass('show');
        }
      });
    });//parallax

    // Slider parallax
    $('.slider-parallax').each(function(){
      var slider = $(this);
      var topPos = slider.offset().top;
      var eleHeight = slider.height();

      $(window).scroll(function(){
        var scrolledHeight = $(window).scrollTop();
        slider.css({
          transform: 'translateY('+(-scrolledHeight/10)+'px)',
          MozTransform: 'translateY('+(-scrolledHeight/10)+'px)',
          WebkitTransform: 'translateY('+(-scrolledHeight/10)+'px)',
          msTransform: 'translateY('+ (-scrolledHeight/10)+'px)'
        });
      });
    });//slider parallax each

    //parallax-content transition to up and down
    setTimeout(function(){
          $('.parallax-content h1').addClass('show');
          $('.parallax-content summary').addClass('show');
    }, 1000);

    // $('.swiper-slide-active .slider-parallax').css('background-attachment', 'fixed');
    $('.swiper-button-white').each(function(){
      $(this).click(function(){
        $('.parallax-content h1').removeClass('show');
        $('.parallax-content summary').removeClass('show');
        // $('.slider-parallax').css('background-attachment', 'fixed');
         // .swiper-slide-active  
        setTimeout(function(){
          $('.parallax-content h1').addClass('show');
          $('.parallax-content summary').addClass('show');
        }, 1000);
      });
    })///swiper-button-white

  // Google Map
    $('#map').addClass('scrolloff'); // set the pointer events to none on doc ready
    $('.map-wrapper').on('click', function () {
      $('#map').removeClass('scrolloff'); // set the pointer events true on click
    });// you want to disable pointer events when the mouse leave the canvas area;

    $(".map-wrapper").mouseleave(function () {
      $('#map').addClass('scrolloff'); // set the pointer events to none when mouse leaves the map area
    });
  });//end of document ready

// Google Map
var address;

function initMap() {

   var map = new google.maps.Map(document.getElementById('map'), { 
       mapTypeId: google.maps.MapTypeId.TERRAIN,
       zoom: 13
   });

   var geocoder = new google.maps.Geocoder();

   geocoder.geocode({
      'address': address;
   }, 
   function(results, status) {
      if(status == google.maps.GeocoderStatus.OK) {
         new google.maps.Marker({
            position: results[0].geometry.location,
            map: map
         });
         map.setCenter(results[0].geometry.location);
      }
   });
    }



