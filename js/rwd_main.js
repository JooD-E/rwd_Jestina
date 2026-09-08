document.addEventListener("DOMContentLoaded", function(){
    
    /*==================
        1. GNB FULL MENU
    ==================*/
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
            document.querySelectorAll('.t_menu').forEach(item => {
                item.classList.remove('t-on');
            });
        }
    });

    /*==================
        2. MENU FIX & SCROLL HIDE/SHOW
    ==================*/
    const headerWrap = document.getElementById('header_wrap');
    const headerOffsetTop = headerWrap.offsetTop;
    let headerLastScrollTop = window.scrollY;

    window.addEventListener('scroll', () => {
        const currentScrollTop = window.scrollY;

        const headerHeight = headerWrap.offsetHeight;

        if(currentScrollTop > headerOffsetTop){
            headerWrap.classList.add('fix');
            document.body.style.paddingTop = headerHeight + 'px';
        } else {
            headerWrap.classList.remove('fix');
            document.body.style.paddingTop = '0'; 
        }

        if (currentScrollTop > headerOffsetTop) {
            if (currentScrollTop > headerLastScrollTop) {
                headerWrap.style.transform = 'translateY(-100%)';
                headerWrap.style.transition = 'transform 0.4s ease-in-out';
            } else {
                headerWrap.style.transform = 'translateY(0)';
            }
        } else {
            headerWrap.style.transform = 'translateY(0)';
        }

        headerLastScrollTop = currentScrollTop;
    });

    /*==================
        3. Search
    ==================*/
    const search = document.querySelector('.search_container');
    const searchBtn = document.querySelector('.search_btn_area');
    const closeBtn = document.querySelector('.search_closebtn');
    const searchInput = document.getElementById('search_input');

    searchBtn.addEventListener("click", function(){
        search.classList.add('s_active')

        setTimeout(function(){
            searchInput.focus();
        },100);
    });

    closeBtn.addEventListener("click", function(){
        search.classList.remove('s_active')
        searchInput.value = '';
    });

    /*==================
        4. aside fixed (Page Up)
    ==================*/
    let lastScrollTop = 0;
    const scrollUp = 5;
    const fixBox = document.querySelector('.page_up');
    let didScroll;

    window.addEventListener('scroll', function(e){
        didScroll = true;
    });

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
            if(fixBox) fixBox.classList.remove('show');
        } else {
            if(fixBox) fixBox.classList.add('show');
        }
        lastScrollTop = nowScrollTop;
    }

    const pageUpBtn = document.querySelector('.page_up_btn');

    if(pageUpBtn){
        pageUpBtn.addEventListener('click', function(e){
            e.preventDefault();

            window.scrollTo({
                top:0,
                behavior:'smooth'
            });
        });
    }

});