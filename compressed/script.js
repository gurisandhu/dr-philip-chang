function initMap(){geocoder=new google.maps.Geocoder;var e=new google.maps.LatLng((-34.397),150.644),o={zoom:13,center:e,mapTypeControl:!0,mapTypeControlOptions:{style:google.maps.MapTypeControlStyle.DROPDOWN_MENU},navigationControl:!0,mapTypeId:google.maps.MapTypeId.ROADMAP};map=new google.maps.Map(document.getElementById("map"),o),geocoder&&geocoder.geocode({address:address},function(e,o){if(o==google.maps.GeocoderStatus.OK)if(o!=google.maps.GeocoderStatus.ZERO_RESULTS){map.setCenter(e[0].geometry.location);var n=new google.maps.InfoWindow({content:"<b>"+address+"</b>",size:new google.maps.Size(150,50)}),s=new google.maps.Marker({position:e[0].geometry.location,map:map,title:address});google.maps.event.addListener(s,"click",function(){n.open(map,s)})}else alert("No results found");else alert("Geocode was not successful for the following reason: "+o)})}$(document).ready(function(){$(".toggle-button-2").click(function(){$(".toggle-content-2").slideToggle(),$(".hide-body").toggleClass("toggle-hide-body"),$("input.search-input").focus()}),$(".toggle-button").each(function(){$(this).click(function(){$(this).next(".toggle-content").slideToggle(),$(this).toggleClass("show")})});new Swiper(".swiper-container"),new Swiper(".swiper-container",{pagination:".swiper-pagination",paginationClickable:!0,nextButton:".swiper-button-next",prevButton:".swiper-button-prev",spaceBetween:30,loop:!0,effect:"fade"});$(window).scroll(function(){var e=$(window).scrollTop();e>=200?$("body").addClass("on-scrolled"):$("body").removeClass("on-scrolled")}),$("body").append("<span class='hide-body'></span>"),$(".menu-button").click(function(){$(".responsive-menu").slideToggle(),$("body").toggleClass("toggle-menu"),$(".hide-body").toggleClass("toggle-hide-body"),$(this).toggleClass("show")}),$(".hide-body").click(function(){$(".responsive-menu").slideUp(),$("body").removeClass("toggle-menu"),$(this).removeClass("toggle-hide-body"),$(".menu-button").removeClass("show"),$(".toggle-content-2").slideUp()}),$(".responsive-menu .menu-item-has-children").append("<span class='has-details'><i class='fa fa-caret-down'></i></span>"),$(".responsive-menu .sub-menu").slideUp(),$(".responsive-menu .has-details").click(function(){$(this).parent(".menu-item-has-children").find("> .sub-menu").slideToggle(),$(this).toggleClass("show")}),$("nav ul  li a:contains('ontact')").click(function(){$("html, body").animate({scrollTop:$(".contact-form").offset().top},1e3),$(".responsive-menu").slideUp(),$("body").removeClass("toggle-menu"),$(".hide-body").removeClass("toggle-hide-body"),$(".menu-button").removeClass("show")});var e=($("body").height(),$(window).innerHeight());$(".inner-banner-fixed").each(function(){var o=$(this),n=o.find(".parallax-content"),s=o.offset().top,a=(o.height(),o.css("background-position").split(" "));a=parseInt(a[1]),$(window).scroll(function(){var t=$(window).scrollTop()+e/1.1;if(t>s){var l=s-$(window).scrollTop();if(s<200){var i=a+$(window).scrollTop()/22;o.css("background-position","center "+i+"%")}else{l=s-e+88-$(window).scrollTop();var i=a+l/6;o.css("background-position","center "+i+"px")}n.find("h1").addClass("show"),n.find("summary").addClass("show")}})}),$(".slider-parallax").each(function(){var e=$(this);e.offset().top,e.height();$(window).scroll(function(){var o=$(window).scrollTop();e.css({transform:"translateY("+-o/10+"px)",MozTransform:"translateY("+-o/10+"px)",WebkitTransform:"translateY("+-o/10+"px)",msTransform:"translateY("+-o/10+"px)"})})}),setTimeout(function(){$(".parallax-content h1").addClass("show"),$(".parallax-content summary").addClass("show")},1e3),$(".swiper-button-white").each(function(){$(this).click(function(){$(".parallax-content h1").removeClass("show"),$(".parallax-content summary").removeClass("show"),setTimeout(function(){$(".parallax-content h1").addClass("show"),$(".parallax-content summary").addClass("show")},1e3)})}),$("#map").addClass("scrolloff"),$(".map-wrapper").on("click",function(){$("#map").removeClass("scrolloff")}),$(".map-wrapper").mouseleave(function(){$("#map").addClass("scrolloff")}),$(window).bind("load",function(){$(".front-page-intro").removeClass("show-loader"),$(".inner-banner").removeClass("show-loader")})});var geocoder,map,address;google.maps.event.addDomListener(window,"load",initMap);