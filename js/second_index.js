jQuery('.list-carousel_block_third').slick({
  // lazyLoad: 'ondemand',
  slidesToShow:6,
  slidesToScroll:5,
  arrows:true,
  autoplay:true,
  autoplaySpeed: 3500,
  speed:2000,
  infinite:true,
  rows:2,
  nextArrow:'<div class="sprite-right"><img src="./img/right.png" alt="pointer_right"></div>', 
  prevArrow: '<div class="sprite-left"><img src="./img/left.png" alt="pointer_left"></div>',

  responsive: [
    {      breakpoint: 1300,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2,
        arrows:false,
        centerMode: true,
        variableWidth: true,      
      }
    },

    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows:false,
        centerMode: true,
        variableWidth: true,   
      }
    },

    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,            
        arrows:false,
        centerMode: true,
        variableWidth: true,      
        }
    }
    ]
})
