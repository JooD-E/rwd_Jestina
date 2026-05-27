// $(function (){
//     const swiper = new Swiper('.swiper-container', {
//         slidesPerView: 3,
//         loop:true,
//         spaceBetween: 0,
//         nextButton: '.swiper-button-next',
//         prevButton: '.swiper-button-prev',
//         paginationClickable: true,
//         autoplay: 2000,
//         autoplayDisableOnInteraction: false,
//         //disableOnInteraction : false 최신버전
//         // 사용자가 슬라이드를 건드리면 자동 재생 멈춤 (true일때 멈춤)
//         breakpoints: {
//             1199:{ //까지
//                 slidesPerView: 2,
//                 spaceBetween: 0,
//                 loop : true,
//                 autoplay: 2000,
//                 nextButton: '.swiper-button-next',
//                 prevButton: '.swiper-button-prev',
//             },
//             767: { //까지
//                 slidesPerView: 1,
//                 spaceBetween: 0,
//                 loop: true,
//                 autoplay: 2000,
//                 nextButton: '.swiper-button-next',
//                 prevButton: '.swiper-button-prev',
//             }
//         }
//     });
// });

$(function (){
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        loop: true,
        spaceBetween: 30,
        
        autoplay: 3000,
        autoplayDisableOnInteraction: false, // 사용자가 만져도 자동재생 유지

        breakpoints: {
            1199: { // 1199px 이하 태블릿
                slidesPerView: 2,
                spaceBetween: 20,
            },
            767: { // 767px 이하 모바일
                slidesPerView: 1,
                spaceBetween: 10,
            }
        }
    });

    const swiper01 = new Swiper('.swiper-container01', {
        slidesPerView: 1,
        loop: true,
        spaceBetween: 0,
        autoplay: 3000,
        autoplayDisableOnInteraction: false,

        nextButton: '.right',
        prevButton: '.left',

        pagination: '#roll',
        paginationClickable: true,
        bulletActiveClass: 'active',
        

        paginationBulletRender: function (swiper, index, className) {
            return '<a href="#" class="' + className + '"></a>';
        }
    });

    // const swiper02 = new Swiper('.md_pickSwiper', {
    //     slidesPerView: 1,
    //     loop: true,
    //     spaceBetween: 10,

    //     pagination: {
    //         el: '.md_pagination',
    //         clickable:true
    //     }
    // });
});