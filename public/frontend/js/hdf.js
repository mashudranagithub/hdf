$(document).ready(function(){
    $(".main-slider").owlCarousel({
      items:1,
      loop: true,
      nav: true,
      smartSpeed:2500,
      autoplay:true,
      navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
    });
    
    
    
    
    
//    var mixer = mixitup(".gallary-rearange");
});

$(document).ready(function(){
    var x = $('.header-main').offset().top; 
    
    $(window).scroll(function(){
        var y = $(window).scrollTop();
        
        if(y>x){
            $('.header-main').addClass('sticky');
           }else{
            $('.header-main').removeClass('sticky');
           }
    });
    
    $('.header-main').wrapAll('<div class="cover">');
    $('.cover').css('height', $('.header-main').outerHeight());
    
    
    
    new WOW().init();
    
    
    // Code for contact address
    
    $(".where").mouseenter(function(){
        $(".address-on-map").show(500);
    });

    $(".where").mouseleave(function(){
        $(".address-on-map").hide(2000);
    });
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
});





// Google Map     

//function googleMapUse() {
//
//    var location = {lat: 23.754352, lng: 90.365949};
//    var locationter = {lat: 23.75411, lng: 90.364608};
//
//    var map = new google.maps.Map(document.getElementById('mapuse'), {
//        zoom: 16,
//        center: locationter
////        right:location
//    });
//
//    var marker = new google.maps.Marker({
//        position: location,
//        animation: google.maps.Animation.BOUNCE,
//        map: map,
//        icon: 'pointer.png'
//    });
//}

            
//Partner slider

$(document).ready(function(){
      $('.partner').owlCarousel({
        center: true,
        items:1,
        autoplay:true,
        dots:true,
        loop:true,
        responsive:{
            600:{
                items:5
            }
        }
    });
    
      
});

$(document).addClass(function(){
    
    $(".active").children(".slide-content").add("animated bounceInDown");
    $(".owl-item").children(".slide-content").removeClass("animated bounceInDown");
    
});


(function(){
    
    var link,
        toggleScrollToTopLink = function(){
            if($("body").scrollTop() > 0 || $("html").scrollTop()>0){
                link.fadeIn(400);
            }
            else{
                link.fadeOut(400);
            }
        };
    $(document).ready(function(){
        link = $(".go-top");
        $(window).scroll(toggleScrollToTopLink);
        toggleScrollToTopLink();
        link.on("click", function(){
            
            $("body").animate({scrollTop:0});
            $("html").animate({scrollTop:0});
            
        });
    });
    
})();



//jQuery Code for back to top
    

$(window).scroll(function(){    
    var wScroll = $(this).scrollTop();

    var showScrollButton = 5;

    if(wScroll > showScrollButton){
        $('#top').fadeIn();  
    }else{
        $('#top').fadeOut();
    }

});


//creating click function
$('#top').click(function(){
    $('body, html').animate({
       scrollTop:0 
    }, 2000);
    return false;
});




//  only for main slider

(function ($) {
    "use strict";
    $(window).on('load', function () {
        $('.tp-banner').show().revolution({
            dottedOverlay: "none"
            , delay: 9000
            , startwidth: 1170
            , startheight: 672
            , hideThumbs: 200
            , thumbWidth: 80
            , thumbHeight: 50
            , thumbAmount: 5
            , navigationType: "bullet"
            , navigationArrows: "solo"
            , navigationStyle: "preview4"
            , touchenabled: "on"
            , onHoverStop: "on"
            , swipe_velocity: 0.7
            , swipe_min_touches: 1
            , swipe_max_touches: 1
            , drag_block_vertical: false
            , parallax: "mouse"
            , parallaxBgFreeze: "on"
            , parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0]
            , keyboardNavigation: "off"
            , navigationHAlign: "center"
            , navigationVAlign: "bottom"
            , navigationHOffset: 0
            , navigationVOffset: 20
            , soloArrowLeftHalign: "left"
            , soloArrowLeftValign: "center"
            , soloArrowLeftHOffset: 20
            , soloArrowLeftVOffset: 0
            , soloArrowRightHalign: "right"
            , soloArrowRightValign: "center"
            , soloArrowRightHOffset: 20
            , soloArrowRightVOffset: 0
            , shadow: 0
            , fullWidth: "on"
            , fullScreen: "off"
            , spinner: "spinner1"
            , stopLoop: "off"
            , stopAfterLoops: -1
            , stopAtSlide: -1
            , shuffle: "off"
            , autoHeight: "off"
            , forceFullWidth: "off"
            , hideThumbsOnMobile: "off"
            , hideNavDelayOnMobile: 1500
            , hideBulletsOnMobile: "off"
            , hideArrowsOnMobile: "off"
            , hideThumbsUnderResolution: 0
            , hideSliderAtLimit: 0
            , hideCaptionAtLimit: 0
            , hideAllCaptionAtLilmit: 0
            , startWithSlide: 0
            , fullScreenOffsetContainer: ""
        });

    });
    $(".nav > li:has(ul)").addClass("drop");
    $(".nav > li.drop > ul").addClass("dropdown");
    $(".nav > li.drop > ul.dropdown ul").addClass("sup-dropdown");
    var wow = new WOW({
        mobile: false
    });
    wow.init();
    $(window).on('load', function () {
        "use strict";
        $('#loader').fadeOut();
    });
    var owl = $("#clients-scroller");
    owl.owlCarousel({
        navigation: false
        , pagination: false
        , items: 4
        , itemsTablet: 3
        , stagePadding: 90
        , smartSpeed: 450
        , itemsDesktop: [1199, 4]
        , itemsDesktopSmall: [980, 3]
        , itemsTablet: [768, 3]
        , itemsTablet: [767, 2]
        , itemsTabletSmall: [480, 2]
        , itemsMobile: [479, 1]
    , });
    var owl = $(".testimonials-carousel");
    owl.owlCarousel({
        navigation: false
        , pagination: true
        , slideSpeed: 1000
        , stopOnHover: true
        , autoPlay: true
        , items: 2
        , itemsDesktopSmall: [1024, 2]
        , itemsTablet: [600, 1]
        , itemsMobile: [479, 1]
    });
    var owl = $(".content-sliderl");
    owl.owlCarousel({
        navigation: false
        , pagination: true
        , slideSpeed: 1000
        , stopOnHover: true
        , autoPlay: true
        , items: 3
        , itemsDesktop: [1024, 1]
        , itemsDesktopSmall: [768, 2]
        , itemsTablet: [600, 1]
        , itemsMobile: [479, 1]
    });
    var owl = $(".touch-slider");
    owl.owlCarousel({
        navigation: true
        , pagination: false
        , slideSpeed: 1000
        , stopOnHover: true
        , autoPlay: true
        , items: 1
        , itemsDesktopSmall: [1024, 1]
        , itemsTablet: [600, 1]
        , itemsMobile: [479, 1]
    });
    var owl = $("#property-carousel");
    owl.owlCarousel({
        navigation: true
        , pagination: false
        , slideSpeed: 1000
        , stopOnHover: true
        , autoPlay: true
        , items: 1
        , itemsDesktopSmall: [1024, 1]
        , itemsTablet: [600, 1]
        , itemsMobile: [479, 1]
    });
    var owl = $("#latest-property");
    owl.owlCarousel({
        navigation: true
        , pagination: false
        , slideSpeed: 1000
        , stopOnHover: true
        , autoPlay: true
        , items: 3
        , itemsDesktopSmall: [1024, 2]
        , itemsTablet: [600, 1]
        , itemsMobile: [479, 1]
    });
    var owl = $("#post-carousel");
    owl.owlCarousel({
        navigation: false
        , pagination: true
        , slideSpeed: 1000
        , stopOnHover: true
        , autoPlay: true
        , items: 1
        , itemsDesktopSmall: [1024, 2]
        , itemsTablet: [600, 1]
        , itemsMobile: [479, 1]
    });
    $('.touch-slider').find('.owl-prev').html('<i class="fa fa-angle-left"></i>');
    $('.touch-slider').find('.owl-next').html('<i class="fa fa-angle-right"></i>');
    $('#latest-property').find('.owl-prev').html('<i class="fa fa-angle-left"></i>');
    $('#latest-property').find('.owl-next').html('<i class="fa fa-angle-right"></i>');
    $('#property-carousel').find('.owl-prev').html('<i class="fa fa-angle-left"></i>');
    $('#property-carousel').find('.owl-next').html('<i class="fa fa-angle-right"></i>');
    var owl;
    $(window).on('load', function () {
        owl = $("#owl-demo");
        owl.owlCarousel({
            navigation: false
            , slideSpeed: 300
            , paginationSpeed: 400
            , singleItem: true
            , afterInit: afterOWLinit
            , afterUpdate: afterOWLinit
        });

        function afterOWLinit() {
            $('.owl-controls .owl-page').append('<a class="item-link" />');
            var pafinatorsLink = $('.owl-controls .item-link');
            $.each(this.owl.userItems, function (i) {
                $(pafinatorsLink[i]).css({
                    'background': 'url(' + $(this).find('img').attr('src') + ') center center no-repeat'
                    , '-webkit-background-size': 'cover'
                    , '-moz-background-size': 'cover'
                    , '-o-background-size': 'cover'
                    , 'background-size': 'cover'
                }).on('click', function () {
                    owl.trigger('owl.goTo', i);
                });
            });
            $('.owl-pagination').prepend('<a href="#prev" class="prev-owl"/>');
            $('.owl-pagination').append('<a href="#next" class="next-owl"/>');
            $(".next-owl").on('click', function () {
                owl.trigger('owl.next');
            });
            $(".prev-owl").on('click', function () {
                owl.trigger('owl.prev');
            });
        }
    });
}(jQuery));
   
        


    
