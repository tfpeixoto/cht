// Navbar Fixed
function navbarFixed() {
  if ($('.header').length) {
    $(window).on('scroll', function () {
      var scroll = $(window).scrollTop();
      if (scroll) {
        $(".header").addClass("fixed");
      } else {
        $(".header").removeClass("fixed");
      }
    });
  };
};
navbarFixed()

// Owl Carousel
$(document).ready(function() {
  $(".owl-carousel").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout:5000,
    autoplayHoverPause: true,
    nav: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      // breakpoint from 480 up
      480: {
        items: 2,
        nav: true
      },
      // breakpoint from 768 up
      768: {
        items: 3,
        nav: true
      }
    }
  });
});