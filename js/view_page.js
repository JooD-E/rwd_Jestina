document.addEventListener("DOMContentLoaded", function(){


    const swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation:{
        nextEl: ".swiper-button-next-custom",
        prevEl: ".swiper-button-prev-custom",
      },
      loop: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
    });

    // AOS 초기화
    AOS.init({
      duration: 1000, 
      once: true,
      offset: 100
    });

    const accordionHeaders = document.querySelectorAll('.accordion-header');

    accordionHeaders.forEach(header => {
        header.addEventListener('click', function(){
            this.classList.toggle('active');

            const body = this.nextElementSibling;

            if(body.style.maxHeight){
                body.style.maxHeight = null;
            } else {
                body.style.maxHeight = body.scrollHeight + "px" ;
            }
        });
    });
})