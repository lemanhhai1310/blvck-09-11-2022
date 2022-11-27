console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);

const x = document.querySelector.bind(document);
const xx = document.querySelectorAll.bind(document);

const app = {
    render: function () {
        const uk_navbar_dropdown = x('.uk-navbar-dropdown');
        const header = x('.header');
        const btnClose_Search = x('.btnClose_Search');
        const html = x('html');
        const body = x('body');
        const cart__offcanvas = x('.cart__offcanvas');
        const header__top = x('.header__top');
        const headerTransparent = x('.headerTransparent');
        const mask_menu = x('.mask_menu');
        const li = xx('.header__bottom .uk-navbar-dropdown-nav > li');
        const product__offcanvas = x('#offcanvas-overlay-fillter');

        if (product__offcanvas){
            UIkit.offcanvas(product__offcanvas).show();
        }

        let second = 0;
        if (li){
            li.forEach((element,index)=>{
                element.style.transitionDelay = second + 'ms';
                second = second + 20;
            });
        }

        if (headerTransparent){

        }

        // Cart
        if (cart__offcanvas){
            // UIkit.offcanvas(cart__offcanvas).show();
        }
        // End Cart

        // Xử lý lỗi sticky
        document.onscroll = function () {
            let scrollTop = window.scrollY || document.documentElement.scrollTop;
            console.log('scrollTop',scrollTop);

            if (scrollTop > 0){
                // header.classList.add('uk-active');
            }else {
                // header.classList.remove('uk-active');
            }
        }
        // End Xử lý lỗi sticky

        if (uk_navbar_dropdown){
            UIkit.util.on('.uk-navbar-dropdown', 'show', function () {
                // do something
                uk_navbar_dropdown.style.maxWidth = header.offsetWidth + 'px';
                uk_navbar_dropdown.style.width = header.offsetWidth + 'px';
                uk_navbar_dropdown.style.left = 0;
                header.classList.add('hoverMenu');
            });

            UIkit.util.on('.uk-navbar-dropdown', 'hide', function () {
                // do something
                header.classList.remove('hoverMenu');
            });
        }

        // Xử lý khi click button search
        UIkit.util.on('.header__top__boxSearch', 'show', function () {
            console.log('Show activeSearch');
            header.classList.add('activeSearch');
            html.style.overflowY = 'hidden';
            html.style.touchAction = 'none';
            html.style.paddingRight = 0;
            body.style.touchAction = 'pan-y pinch-zoom';
            const uk_sticky_placeholder = x('.uk-sticky-placeholder');
            if (uk_sticky_placeholder){
                uk_sticky_placeholder.style.height = header__top.offsetHeight + 'px';
                console.log('uk_sticky_placeholder',header__top.offsetHeight);
            }
        });
        if (btnClose_Search){
            btnClose_Search.addEventListener('click',()=>{
                console.log('Hide activeSearch');
                header.classList.remove('activeSearch');
                html.style.removeProperty('overflow-y');
                html.style.removeProperty('touch-action');
                html.style.removeProperty('padding-right');
                body.style.removeProperty('touch-action');
                const uk_sticky_placeholder = x('.uk-sticky-placeholder');
                uk_sticky_placeholder.style.height = header.offsetHeight + 'px';
                console.log('uk_sticky_placeholder',header.offsetHeight);
            })
        }
        // .End Xử lý khi click button search
    },
    start: function () {
        this.render();
    }
}

window.addEventListener("load", ()=>{
    console.log("page is fully loaded");
    app.start();
})


$(window).on("load", function (e) {
    UIkit.util.on('.header__top__boxSearch,.uk-navbar-dropdown', 'show', function () {
        // do something
        $('.mask_menu').fadeIn(300);
    });

    $('.btnClose_Search').on('click',()=>{
        $('.mask_menu').stop(true, true).fadeOut(300);
    })

    UIkit.util.on('.uk-navbar-dropdown', 'hide', function () {
        // do something
        $('.mask_menu').stop(true, true).fadeOut(300);
    });
});