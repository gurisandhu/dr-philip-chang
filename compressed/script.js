function parallax(){var e=document.getElementById("parallax"),o=document.getElementById("parallax_content"),n=o.style.top;n.replace("%","");e.style.backgroundPosition="25%"+-window.pageYOffset/10+"px";var s=-(window.pageYOffset/30)+40;o.style.top=s+"%",o.style.opacity=1-window.pageYOffset/450}$(document).ready(function(e){new Swiper(".swiper-container"),new Swiper(".swiper-container",{pagination:".swiper-pagination",paginationClickable:!0,nextButton:".swiper-button-next",prevButton:".swiper-button-prev",spaceBetween:30});e(window).scroll(function(){var o=e(window).scrollTop();o>=10?e("body").addClass("on-scrolled"):e("body").removeClass("on-scrolled")}),e("body").append("<span class='hide-body'></span>"),e(".menu-button").click(function(){e(".responsive-menu").slideToggle(),e("body").toggleClass("toggle-menu"),e(".hide-body").toggleClass("toggle-hide-body"),e(this).toggleClass("show")}),e(".hide-body").click(function(){e(".responsive-menu").slideUp(),e("body").removeClass("toggle-menu"),e(this).removeClass("toggle-hide-body"),e(".menu-button").removeClass("show")}),e(".responsive-menu .menu-item-has-children").append("<span class='has-details'><i class='fa fa-caret-down'></i></span>"),e(".responsive-menu .sub-menu").slideUp(),e(".responsive-menu .has-details").click(function(){e(this).parent(".menu-item-has-children").find("> .sub-menu").slideToggle(),e(this).toggleClass("show")}),e("nav ul  li a:contains('ontact')").click(function(){e("html, body").animate({scrollTop:e(".contact-form").offset().top},1e3),e(".responsive-menu").slideUp(),e("body").removeClass("toggle-menu"),e(".hide-body").removeClass("toggle-hide-body"),e(".menu-button").removeClass("show")})}),window.addEventListener("scroll",parallax,!1);