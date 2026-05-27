$(function(){
    $('.slider').slick({
        dots: true,
        dotsClass:'md_dots',
        autoplay : false,
        infinite: true,
        slidesToShow:1,
        slidesToScroll:1,
        arrows: false,
        customPaging:function(slider, i){
            return '<img src="img/indi_off.png" class="dot_img">';
        }
    })


    $('.promo_wrapper').slick({
        slidesToShow:1,
        slidesToScroll:1,
        arrows: false,
        dots: false,
        autoplay: true,
        infinite:true
    })


    // const $slider = $('.showroom_slick');

    $('.showroom_slick').slick({
        slidesToShow:4,
        slidesToScroll:4,
        // swipeToSlide: true,
        touchThreshold: 50,
        infinite: true,
        arrows: false,
        dots:false,
        responsive:[
            {
                breakpoint:1201,
                settings:{
                    slidesToShow:2.3,
                    swipeToSlide: true,
                    touchThreshold: 50,
                    
                }
            },{
                breakpoint:580,
                settings:{
                    slidesToShow:1,
                    centerMode:true,
                    centerPadding:'30px',
                    swipeToSlide: true,
                    touchThreshold: 20,
                }
            }
        ]
    });
    
   var $showSlider = $('.showroom_slick');

   $('.show_categoryul li a').on('click', function(e){
    e.preventDefault();

    $('.show_categoryul li').removeClass('show_active');
    $(this).parent('li').addClass('show_active');

    var targetClass = $(this).attr('class');

    $showSlider.slick('slickUnfilter');
    $showSlider.slick('slickFilter', '.' + targetClass);
   })
});