$(document).ready(function(){$(".toggle-button-2").click(function(){$(".toggle-content-2").slideToggle(),$(".hide-body").toggleClass("toggle-hide-body")}),$(".toggle-button").each(function(){$(this).click(function(){$(this).next(".toggle-content").slideToggle(),$(this).toggleClass("show")})});new Swiper(".swiper-container"),new Swiper(".swiper-container",{pagination:".swiper-pagination",paginationClickable:!0,nextButton:".swiper-button-next",prevButton:".swiper-button-prev",spaceBetween:30,loop:!0,effect:"fade"});$(window).scroll(function(){var o=$(window).scrollTop();o>=200?$("body").addClass("on-scrolled"):$("body").removeClass("on-scrolled")}),$("body").append("<span class='hide-body'></span>"),$(".menu-button").click(function(){$(".responsive-menu").slideToggle(),$("body").toggleClass("toggle-menu"),$(".hide-body").toggleClass("toggle-hide-body"),$(this).toggleClass("show")}),$(".hide-body").click(function(){$(".responsive-menu").slideUp(),$("body").removeClass("toggle-menu"),$(this).removeClass("toggle-hide-body"),$(".menu-button").removeClass("show"),$(".toggle-content-2").slideUp()}),$(".responsive-menu .menu-item-has-children").append("<span class='has-details'><i class='fa fa-caret-down'></i></span>"),$(".responsive-menu .sub-menu").slideUp(),$(".responsive-menu .has-details").click(function(){$(this).parent(".menu-item-has-children").find("> .sub-menu").slideToggle(),$(this).toggleClass("show")}),$("nav ul  li a:contains('ontact')").click(function(){$("html, body").animate({scrollTop:$(".contact-form").offset().top},1e3),$(".responsive-menu").slideUp(),$("body").removeClass("toggle-menu"),$(".hide-body").removeClass("toggle-hide-body"),$(".menu-button").removeClass("show")});var o=($("body").height(),$(window).innerHeight());$(".parallax").each(function(){var e=$(this),s=e.find(".parallax-content"),n=e.offset().top,t=(e.height(),e.css("background-position").split(" "));t=parseInt(t[1]),$(window).scroll(function(){var a=$(window).scrollTop()+o/1.1;if(a>n){var l=n-$(window).scrollTop();if(n<200){var i=t-$(window).scrollTop()/10;e.css("background-position","center "+i+"px")}else{l=n-o+88-$(window).scrollTop();var i=t+l/6;e.css("background-position","center "+i+"px")}s.find("h1").addClass("show"),s.find("summary").addClass("show")}})}),$(".slider-parallax").each(function(){var o=$(this);o.offset().top,o.height();$(window).scroll(function(){var e=$(window).scrollTop();o.css({transform:"translateY("+-e/10+"px)",MozTransform:"translateY("+-e/10+"px)",WebkitTransform:"translateY("+-e/10+"px)",msTransform:"translateY("+-e/10+"px)"})})}),setTimeout(function(){$(".parallax-content h1").addClass("show"),$(".parallax-content summary").addClass("show")},1e3),$(".swiper-button-white").each(function(){$(this).click(function(){$(".parallax-content h1").removeClass("show"),$(".parallax-content summary").removeClass("show"),setTimeout(function(){$(".parallax-content h1").addClass("show"),$(".parallax-content summary").addClass("show")},1e3)})})});