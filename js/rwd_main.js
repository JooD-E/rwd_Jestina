document.addEventListener("DOMContentLoaded", function(){
    const fullMenu = document.querySelectorAll('#gnb > li');

    fullMenu.forEach(menu => {
        menu.addEventListener('mouseenter', () => {
            if(window.innerWidth >= 1200){
                const subMenu = menu.querySelector('.t_menu');

                if (subMenu) {
                    subMenu.classList.add('t-on');
                }
            }
        });
        menu.addEventListener('mouseleave',() => {
            if (window.innerWidth >= 1200){
                const subMenu = menu.querySelector('.t_menu');
                if(subMenu){
                    subMenu.classList.remove('t-on');
                }
            }
        });
    });
    window.addEventListener('resize', () => {
        if(window.innerWidth < 1200) {
            this.documentElement.querySelectorAll('.t_menu').forEach(item => {
                item.classList.remove('t-on');
            });
        }
    });

    /*==================
          MENU FIX
    ==================*/
    $('#menu').each(function(){
        const $window = $(window),
        $header = $(this),
        headerOffsetTop = $header.offset().top;

        $window.on('scroll', function(){
            if($window.scrollTop() > headerOffsetTop){
                $header.addClass('fix');
            }else {
                $header.removeClass('fix');
            }
        })
    });


    /*==================
          Search
    ==================*/
    const search = document.querySelector('.search_container');
    const searchBtn = document.querySelector('.search_btn');
    const closeBtn = document.querySelector('.search_closebtn');
    const searchInput = document.getElementById('search_input');

    searchBtn.addEventListener("click", function(){
        search.classList.add('s_active')

        setTimeout(function(){
            searchInput.focus();
        },100);
    })

    closeBtn.addEventListener("click", function(){
        search.classList.remove('s_active')

        searchInput.value = '';
    })



    /*==================
        aside fixed
    ==================*/
    let lastScrollTop = 0;
    const scrollUp = 5;
    const fixBox = document.querySelector('.page_up');
    let didScroll;

    window.onscroll = function(e){
        didScroll = true;
    }

    setInterval(function(){
        if(didScroll){
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled(){
        const nowScrollTop = window.scrollY;
        if(Math.abs(lastScrollTop - nowScrollTop) <= scrollUp){
            return;
        }
        if(nowScrollTop > lastScrollTop || nowScrollTop <= 0){
            fixBox.classList.remove('show');
        }else {
            fixBox.classList.add('show');
        }
        lastScrollTop = nowScrollTop;
    }



});

