$(document).ready(function() {
	$("#navButton").on('click', function() {
		$(".nav").css({
			opacity: '1',
			transform: 'translateX(0%)'
		});	
		$("#closeMenu").css("width", "100%");
	});
	$(".nav-link").on('click',function() {
		$(".nav").css('transform', 'translateX(-100%)');
		$("#closeMenu").css("width", "0%");
	});
	$("#closeNavButton").on('click', function() {
		$(".nav").css('transform', 'translateX(-100%)');
		$("#closeMenu").css("width", "0%");
	});
	$("#whiteboard h1").mouseover(function() {
		$(this).css('opacity', '1');
	});
	$("#whiteboard h1").mouseout(function() {
		$(this).css('opacity', '0');
	});
	$(window).on('scroll', function() {
		if ($(window).scrollTop() >= $("#aboutMe").position().top) {
			$("#aboutMeDiv").css('width', '100%');
		}
	});
	$(".aboutMe_sections").mouseover(function() {
		$("#Goals").css('transform', 'rotate(45deg)');
		$("#Education").css('transform', 'translateX(-100px) translateY(-10px) rotate(90deg)');
		$("#Hobbies").css('transform', 'translateX(-200px) translateY(-60px) rotate(135deg)');
	});
	$(window).scroll(function() {
		$("#Goals").css('transform', 'rotate(0deg)');
		$("#Education").css('transform', 'translateX(0px) translateY(0px) rotate(0deg)');
		$("#Hobbies").css('transform', 'translateX(0px) translateY(0px) rotate(0deg)');
	});
	$("#Goals").on('click', function() {
		$(this).css('color', 'lightpink');
		$("#Hobbies").css('color', 'black');
		$("#Education").css('color', 'black');
		$("#goals-col").css('opacity', '1');
		$("#education-col").css('opacity', '0');
		$("#hobbies-col").css('opacity', '0');
	});
	$("#Education").on('click', function() {
		$(this).css('color', 'lightpink');
		$("#Goals").css('color', 'black');
		$("#Hobbies").css('color', 'black');
		$("#education-col").css('opacity', '1');
		$("#goals-col").css('opacity', '0');
		$("#hobbies-col").css('opacity', '0');
	});
	$("#Hobbies").on('click', function() {
		$(this).css('color', 'lightpink');
		$("#Goals").css('color', 'black');
		$("#Education").css('color', 'black');
		$("#hobbies-col").css('opacity', '1');
		$("#goals-col").css('opacity', '0');
		$("#education-col").css('opacity', '0');
	});
	var swiper = new Swiper('.swiper-container', {
		effect: 'cube',
		grabCursor: true,
		cubeEffect: {
			shadow: true,
			slideShadows: true,
			shadowOffset: 20,
			shadowScale: 0.94,
		},
		pagination: {
			el: 'swiper-pagination',
		},
	});
	$(window).on('scroll', function() {
		if ($(window).scrollTop() >= $("#projectList").position().top) {
			$("#projectListDiv").css('width', '100%');
		}
	});
		$("#line1").on('click', function() {
		$("#slider").css("transform", "translateX(0)");
		$("#active").css('top', '0');
	});
	$("#line2").on('click', function() {
		$("#slider").css("transform", "translateX(-33.5%)");
		$("#active").css('top', '80px');
	});
	$("#line3").on('click', function() {
		$("#slider").css("transform", "translateX(-67%)");
		$("#active").css('top', '160px');
	});

	$(window).on('scroll', function() {
		if ($(window).scrollTop() >= $("#contactMe").position().top) {
			$("#contactMeDiv").css('width', '100%');
			$("#contactMeDiv2").css('width', '100%');
		}
	});
	$("form").onsubmit(function() {
		$("#loadDiv").css({/*belum fix*/
			cursor: 'progress'
		});
	});
});