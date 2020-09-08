
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

	if (widthWindow >= 651) {

//Red button for Photo Gallery
		$(window).scroll(function() {
			var scrollPos = $(window).scrollTop();

			if (scrollPos >= offsetGallerySection-20 && scrollPos <= offsetResourcesSection-20) {

				$('#ButtonGallery').addClass('Red');

			} else {

				$('#ButtonGallery').removeClass('Red');

			}
		});

//Red button for Coding Portfolio
		$(window).scroll(function() {
			var scrollPos = $(window).scrollTop();

			if (scrollPos >= offsetResourcesSection-20 && scrollPos <= offsetTravelSection-20) {

				$('#ButtonResources').addClass('Red');

			} else {

				$('#ButtonResources').removeClass('Red');

			}
		});

//Red button for Travel Blog
		$(window).scroll(function() {
			var scrollPos = $(window).scrollTop();

			if (scrollPos >= offsetTravelSection && scrollPos <= offsetKSUSection-20) {

				$('#ButtonHair').addClass('Red');

			} else {

				$('#ButtonHair').removeClass('Red');

			}
		});


//Red button for About Section
		$(window).scroll(function() {
			var scrollPos = $(window).scrollTop();

			if (scrollPos >= offsetKSUSection-20) {

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
