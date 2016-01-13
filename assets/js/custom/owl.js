//http://www.owlcarousel.owlgraphic.com/demos/basic.html


 



$(document).ready(function() {
  
  $(".banner-home-main").owlCarousel({
    autoPlay : 3000,
    stopOnHover : true,
    navigation:false,
    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    singleItem : true,
    autoHeight : true,
        dots:true,


   });
 
  



  

$('.slider-publicacoes-main').owlCarousel({
    loop:true,
    margin:10,
    navigation:true,
    dots:true,
    navigationText: ["anterior","próximo"],
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})


});








 