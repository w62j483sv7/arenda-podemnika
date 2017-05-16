/* jslint unused:false, browser:true */
/* global $:false, jQuery:false */

$(document).ready(function() {
	var form = $("form");
	var name = $("#name");
	var callModalWindow = ".js-call-modal";
	var modalWindow = ".js-modal";
	var closeModalButton = ".js-modal-close";
	var ModalOverlay = ".js-overlay";
	var fadeSpeedModalOverlay = 300;
	var body = ".body";
	var body_scrolling_yes = "body_scrolling_yes";
	var body_scrolling_no = "body_scrolling_no";
	var sidebar_show = ".js-sidebar_show";
	var sidebar_hide = ".js-sidebar_hide";
	var sidebar = ".sidebar";
	var sidebar_hidden = "sidebar_hidden";
	var sidebar_visible = "sidebar_visible";
// Ресайз шапки
	$(window).scroll(function() {
		if ($(this).scrollTop() > 100) {
			$(".header").removeClass("header_size_large").addClass("header_size_small");
			$(".logo").removeClass("logo_size_large").addClass("logo_size_small");
			$(".call__hours_scrolling_hidden").hide();
		}
		else{
			$(".header").removeClass("header_size_small").addClass("header_size_large");
			$(".logo").removeClass("logo_size_small").addClass("logo_size_large");
			$(".call__hours_scrolling_hidden").show();
		}
	});
// Боковое меню
	$(sidebar_show).on("click", function() {
		$(sidebar).removeClass(sidebar_hidden).addClass(sidebar_visible);
		$(body).removeClass(body_scrolling_yes).addClass(body_scrolling_no);
	});
	$(sidebar_hide).on("click", function() {
		$(sidebar).removeClass(sidebar_visible).addClass(sidebar_hidden);
		$(body).removeClass(body_scrolling_no).addClass(body_scrolling_yes);
	});
// Модальное окно
	$(callModalWindow).on("click", function() {
		$(ModalOverlay).fadeIn(fadeSpeedModalOverlay);
		$(modalWindow).show();
		$(body).removeClass(body_scrolling_yes).addClass(body_scrolling_no);
	});
	$(closeModalButton).on("click", function() {
		$(modalWindow).hide();
		$(ModalOverlay).fadeOut(fadeSpeedModalOverlay);
		$(body).removeClass(body_scrolling_no).addClass(body_scrolling_yes);
		$(form).trigger("reset");
	});
	$(ModalOverlay).on("click", function() {
		$(modalWindow).hide();
		$(ModalOverlay).fadeOut(fadeSpeedModalOverlay);
		$(body).removeClass(body_scrolling_no).addClass(body_scrolling_yes);
		$(form).trigger("reset");
	});
// Отправка почты
	$(form).submit(function(e){
		e.preventDefault();
		var method = $(this).attr("method");
		var action = $(this).attr("action");
		var data = $(this).serialize();
		jQuery.ajax({
			type: method,
			url: action,
			data: data,
			success: function(data){
				$(modalWindow).hide();
				$(ModalOverlay).fadeOut(fadeSpeedModalOverlay);
				$(form).trigger("reset");
			}
		});
	});
// owl carousel settings
	$("#reviews-carousel").owlCarousel({
		singleItem: true,
		autoPlay: 7000,
		stopOnHover: true,
		pagination: false,
		slideSpeed: 300,
		navigation : true,
		navigationText : false,
		rewindNav : true
	});
});
