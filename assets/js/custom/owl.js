//http://www.owlcarousel.owlgraphic.com/demos/basic.html


 



$(document).ready(function() {
  
  $(".banner-home-main").owlCarousel({
    //autoPlay : 3000,
    //stopOnHover : true,
    navigation:false,
    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    singleItem : true,
    autoHeight : true,
        dots:true,


   });
 
  



 $("#navigation-profissionais").owlCarousel({
    
     paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    singleItem : true,
    //autoHeight : true,

    addClassActive: true,

     // Navigation
    navigation : false,
    navigationText : ["prev","next"],
    rewindNav : true,
    scrollPerPage : false,

     //Pagination
    pagination : false,
    paginationNumbers: false,

    mouseDrag:false,

   });


 

 $(".profissionais-btn").click(function () {
    $(".profissionais-btn").removeClass("active");
    $(this).addClass("active");   
});


 
 
 $('.profissionais-btn-map').click(function(){
    $("#navigation-profissionais").trigger('owl.goTo', 1)       
  });

$('.profissionais-btn-table').click(function(){
    $("#navigation-profissionais").trigger('owl.goTo', 0)
  });


  

$('.slider-publicacoes-main').owlCarousel({
    loop:true,
    margin:10,
    navigation:false,
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
            items:4
        }
    }
})


});








 