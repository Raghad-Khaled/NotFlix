//This is where you can change the settings or add more

$(document).ready(function(){
  $('.multiple-item-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    arrows:true,
    slidesToShow: 5,
    slidesToScroll: 5,
    
      responsive: [
    {
      breakpoint: 1280,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: true,
        arrows:true,
        dots: true,
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows:true,
        
      }
    },
     {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:true,
        
      }
    }
         
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  });