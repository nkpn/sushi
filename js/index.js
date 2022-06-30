console.log(
  "Hi! If you need a website - please contact me : illinmikita@gmail.com , or by telegram : https://t.me/nk_pn"
);

//---------------
//* Init slick slider
$(document).ready(function () {
  $(".burger,.close-btn").click(function (event) {
    $(".mobile-menu").toggleClass("active");
  });

  $('.carousel-list').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    draggable: true,
    speed: 600,
    autoplay: true,
    autoplaySpeed: 3000,
    appendArrows: $(".carousel-buttons"),
    prevArrow: $(".slider-left"),
    nextArrow: $(".slider-right"),
    responsive: [
      {
        breakpoint: 728,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          centerPadding: '0px',
          centerMode: true,
        },
      },
    ],
  });

  $('.food-carousel').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    draggable: true,
    speed: 600,
    autoplay: true,
    autoplaySpeed: 2000,
    variableWidth:true,
    responsive: [
      {
        breakpoint: 728,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          centerPadding: '0px',
          centerMode: true,
        },
      },
    ],
  });

});

function fixedOrderButtons(){
  const orderButton = $('.fixed-main-button');
  const hidedList = $('.hided-buttons');


  function slideDown(){
    console.log(hidedList)
    if (hidedList){
      $(hidedList).slideDown('slow');
    }
  }

  if (orderButton){
    orderButton.on('click', slideDown)
  }
}

fixedOrderButtons()
//---------------------------------------
//* Scroll Reveal
// ScrollReveal().reveal('img');
//-----------------------------------------------