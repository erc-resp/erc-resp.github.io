$(document).ready(function(){
$('.owl-carousel').owlCarousel({
  loop:true,
  margin:5,
  nav:true,
  center: true,
  autoplay:true,
  autoplayhoverpause:true,
  autoplaytimeout:50,
  items:3,
  nav: true,
  loop: true,
  responsive:{
    0:{
        items: 1
    },
    600:{
        items: 2
    },
    1000:{
        items: 3
    }
}

});
});
