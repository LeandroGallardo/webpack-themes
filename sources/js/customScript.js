(function($){

    console.log("Cargo custom script");

    $('.sliderhome').owlCarousel({
    loop:true,
    margin:0,
    center:true,
    nav:true,
    dots:true,
    navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:true
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
    }
})

})(jQuery);