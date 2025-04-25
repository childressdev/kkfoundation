const { space } = require("postcss/lib/list");

const testimonialsSlider = new Swiper('#testimonials-slider .swiper', {
  autoplay: false,
  slidesPerView: 1,
  breakpoints: {
    992: {
      slidesPerView: 2
    },
    1200: {
      slidesPerView: 3
    }
  },
  spaceBetween: 20,
  pagination: {
    el: '.testimonials-pagination',
    clickable: true
  }
});