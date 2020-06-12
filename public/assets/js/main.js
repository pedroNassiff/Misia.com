'use strict';

$(function() {
  // Slider
  $('.main-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrow: true,
    dots: true,
    nextArrow: '<img class="slider-arrow arrow--right" src="../assets/images/SVG/arrow-right-white.svg" alt="Arrow Right" />',
    prevArrow: '<img class="slider-arrow arrow--left" src="../assets/images/SVG/arrow-right-white.svg" alt="Arrow Right" />',
  });
});