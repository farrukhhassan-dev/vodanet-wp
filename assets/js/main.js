jQuery(document).ready(function () {
	jQuery(".main-slider-two__carousel").owlCarousel({
		loop: true,
		animateOut: "fadeOut",
		animateIn: "fadeIn",
		items: 1,
		autoplay: true,
		autoplayTimeout: 7000,
		smartSpeed: 1000,
		nav: false,
		dots: true,
		margin: 0
	});
	jQuery(".service-three__carousel").owlCarousel({
		loop: false,
		margin: 20,
		items: 1,
		nav: false,
		dots: false,
		smartSpeed: 700,
		autoplay: true,
		autoplayTimeout: 5000,
		animateOut: "",
		animateIn: "",
		autoplayHoverPause: true,
		responsive: {
			0: { margin: 10, items: 1 },
			575: { margin: 10, items: 1 },
			767: { margin: 15, items: 2 },
			992: { margin: 20, items: 2 },
			1200: { margin: 20, items: 3 }
		}
	});

	jQuery(".client-carousel__one").owlCarousel({
		loop: true,
		margin: 0,
		items: 1,
		nav: false,
		dots: false,
		smartSpeed: 700,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		responsive: {
			0: { margin: 0, items: 1 },
			360: { margin: 0, items: 2 },
			574: { margin: 30, items: 3 },
			575: { margin: 30, items: 3 },
			768: { margin: 30, items: 3 },
			992: { margin: 40, items: 4 },
			1200: { margin: 140, items: 5 }
		}
	});

	jQuery(".testimonial-two__carousel").owlCarousel({
		loop: true,
		margin: 0,
		items: 1,
		nav: false,
		dots: false,
		smartSpeed: 700,
		autoplay: true,
		autoplayTimeout: 5000,
		animateOut: "",
		animateIn: "",
		autoplayHoverPause: true,
		responsive: {
			0: { margin: 0, items: 1 },
			1200: { margin: 30, items: 2 }
		}
	});

	function countUp(element) {
		var $el = jQuery(element),
			countTo = $el.attr("data-stop"),
			speed = parseInt($el.attr("data-speed"), 10);

		if (!$el.hasClass("counted")) {
			$el.addClass("counted");
			jQuery({ countNum: 0 }).animate({ countNum: countTo }, {
				duration: speed,
				easing: "linear",
				step: function () {
					$el.text(Math.floor(this.countNum));
				},
				complete: function () {
					$el.text(this.countNum);
				}
			});
		}
	}

	function checkVisibility() {
		jQuery(".count-box .count-text").each(function () {
			var $el = jQuery(this);
			var rect = $el[0].getBoundingClientRect();
			if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
				countUp($el);
			}
		});
	}

	jQuery(window).on("scroll", checkVisibility);
	checkVisibility();

	jQuery(".scroll").click(function () {
		jQuery('html, body').animate({
			scrollTop: jQuery("#contact").offset().top
		}, 100);
	});


});