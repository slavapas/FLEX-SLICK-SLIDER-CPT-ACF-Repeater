jQuery(document).ready(function(){
  jQuery('.your-class').slick({
     slidesToShow: 1,
     slidesToScroll: 1,
     dots: true,
     arrows: false,
     asNavFor: '.slider-for',
     focusOnSelect: true,
     fade: true,
     autoplay: false
     });

  
  jQuery('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    asNavFor: '.slider-for',
    focusOnSelect: true,
    fade: true,
    autoplay: false
    });


});
