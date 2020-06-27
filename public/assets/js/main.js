'use strict';

// Loader 
const placeholder = () => {
  console.log('loader');
  setTimeout(function(){
    setTimeout(function(){
      let spinner = document.querySelector('#placeholder');
      spinner.style.display = 'none';
    }, 1000); 
    let fadeTarget = document.getElementById('placeholder');
    let fadeEffect = setInterval(function () {
        if (!fadeTarget.style.opacity) {
          fadeTarget.style.opacity = 1;
        }
        if (fadeTarget.style.opacity > 0) {
          fadeTarget.style.opacity -= 0.1;
        } else {
          clearInterval(fadeEffect);
        }
      }, 50);
    }, 1000);
  };

$(function() {
  // Loader 
  placeholder();

  // Menú
  $('#botton-menu').on('click', function(){
    document.querySelector('.navbar').classList.toggle('nav-open');
    document.querySelector('#header-item-group').classList.toggle('active');
  })
  
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