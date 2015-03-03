$(document).ready(function(){

	function scrollY() {
		return window.pageYOffset || document.documentElement.scrollTop;
	}

	jQuery('.slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		fade: true,
		speed: 2000,
		autoplaySpeed: 2500,
		arrows: true,
		dots: true,
	});

});