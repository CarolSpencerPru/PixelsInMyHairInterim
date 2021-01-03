
$(document).ready(function() {

//Height & Width
	var heightWindow = $(window).height();
	var widthWindow = $(window).width();

//How far each section is from the top
	var offsetGapSection = $('section.Gap').offset().top;
	var offsetGallerySection = $('#PhotoGallery').offset().top;
	var offsetResourcesSection = $('#ResourcesSection').offset().top;
	var offsetTravelSection = $('#TravelBlog').offset().top;
	var offsetKSUSection = $('#KSU').offset().top;

	var navHeight = $('#LinkContainer').height();

	if (widthWindow >= 651) {

//Red button for Photo Gallery
		$(window).scroll(function() {
			var scrollPos = $(window).scrollTop();

			if (scrollPos >= offsetGallerySection - navHeight && scrollPos <= offsetResourcesSection - navHeight) {

				$('#ButtonGallery').addClass('Red');

			} else {

				$('#ButtonGallery').removeClass('Red');

			}
		});

//Red button for Coding Portfolio
		$(window).scroll(function() {
			var scrollPos = $(window).scrollTop();

			if (scrollPos >= offsetResourcesSection - navHeight && scrollPos <= offsetTravelSection - navHeight) {

				$('#ButtonResources').addClass('Red');

			} else {

				$('#ButtonResources').removeClass('Red');

			}
		});

//Red button for Travel Blog
		$(window).scroll(function() {
			var scrollPos = $(window).scrollTop();

			if (scrollPos >= offsetTravelSection-navHeight && scrollPos <= offsetKSUSection-navHeight) {

				$('#ButtonHair').addClass('Red');

			} else {

				$('#ButtonHair').removeClass('Red');

			}
		});


//Red button for About Section
		$(window).scroll(function() {
			var scrollPos = $(window).scrollTop();

			if (scrollPos >= offsetKSUSection-navHeight) {

				$('#ButtonKSU').addClass('Red');

			} else {

				$('#ButtonKSU').removeClass('Red');

			}
		});

	}// End larger than 651


  $("#MenuCollapse").click(function() {
    $(".navbar-collapse").collapse('hide');
  });


}); //End Document Ready
