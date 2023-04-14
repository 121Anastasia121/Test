
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("burger").addEventListener("click", function() {
    document.querySelector(".header-site").classList.toggle("open")
  })
})

// let element = document.querySelector('.carousel-item');
// element.style.width = '500px';


jQuery('.list-carousel').slick({
  // lazyLoad: 'ondemand',
  slidesToShow:6,
  slidesToScroll:5,
  arrows:true,
  autoplay:true,
  autoplaySpeed: 2000,
  speed:2000,
  centerMode: true,
  variableWidth: true,
  pauseOnHover:true,
  nextArrow:'<div class="sprite-next"><img src="./img/right.png" alt="pointer_right"></div>', 
  prevArrow: '<div class="sprite-prev"><img src="./img/left.png" alt="pointer_left"></div>',

  responsive: [
    {      breakpoint: 1300,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2,
        arrows:false,
        pauseOnHover:false,
      }
    },

    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows:false,
      }
    },

    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,            
        arrows:false,
        adaptiveHeight: true
        }
    }
    ]    
})

