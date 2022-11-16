<footer id="footer" class="footer">
    <div class="uk-container uk-container-expand">
        <div class="footer__item-75-25 uk-text-center">
            <img src="images/logo_grey_MEDIUM_db13ddee-d6fd-410a-8f17-39f9c1b31714_85x.png.webp" alt="">
        </div>
        <div class="footer__item-75-25">
            <div class="uk-grid uk-child-width-1-4@m uk-visible@m" uk-grid>
                <div>
                    <h4 class="uk-h4 footer__title uk-margin-remove">COLLECTIONS</h4>
                    <?php require "template-parts/footer/widget_nav_1.php"; ?>
                </div>
                <div>
                    <h4 class="uk-h4 footer__title uk-margin-remove">INFORMATION</h4>
                    <?php require "template-parts/footer/widget_nav_2.php"; ?>
                </div>
                <div>
                    <h4 class="uk-h4 footer__title uk-margin-remove">MORE</h4>
                    <?php require "template-parts/footer/widget_nav_3.php"; ?>
                </div>
                <div>
                    <h4 class="uk-h4 footer__title uk-margin-remove">SOCIAL</h4>
                    <?php require "template-parts/footer/widget_social.php"; ?>
                </div>
            </div>
            <ul class="footer__accordion uk-hidden@m" uk-accordion="multiple: true">
                <li>
                    <a class="uk-accordion-title" href="#">COLLECTIONS</a>
                    <div class="uk-accordion-content">
                        <?php require "template-parts/footer/widget_nav_1.php"; ?>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">INFORMATION</a>
                    <div class="uk-accordion-content">
                        <?php require "template-parts/footer/widget_nav_2.php"; ?>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">MORE</a>
                    <div class="uk-accordion-content">
                        <?php require "template-parts/footer/widget_nav_3.php"; ?>
                    </div>
                </li>
                <li class="uk-open">
                    <a class="uk-accordion-title" href="#">SOCIAL</a>
                    <div class="uk-accordion-content">
                        <?php require "template-parts/footer/widget_social.php"; ?>
                    </div>
                </li>
            </ul>
        </div>
        <div class="footer__item-100-20 uk-text-center uk-text-left@m">
            <div uk-form-custom="target: > * > span:first-child">
                <select aria-label="Custom controls">
                    <option value="1">VND d</option>
                    <option value="2">Option 02</option>
                    <option value="3">Option 03</option>
                    <option value="4">Option 04</option>
                </select>
                <button class="footer__moneySelect uk-button uk-button-default" type="button" tabindex="-1">
                    <span></span>
                    <span uk-icon="icon: chevron-down"></span>
                </button>
            </div>
        </div>
    </div>
</footer>
</div>
<!--/app-->
<script>
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
            const uk_sticky_placeholder = x('.uk-sticky-placeholder');

            // Cart
            if (cart__offcanvas){
                // UIkit.offcanvas(cart__offcanvas).show();
            }
            // End Cart

            // Xử lý lỗi sticky
            document.onscroll = function () {
                let scrollTop = window.scrollY || document.documentElement.scrollTop;

                if (scrollTop > 0){
                    header.classList.add('uk-active');
                }else {
                    header.classList.remove('uk-active');
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
                if (uk_sticky_placeholder){
                    uk_sticky_placeholder.style.height = header.offsetHeight + 'px';
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
                    if (uk_sticky_placeholder){
                        uk_sticky_placeholder.style.height = header.offsetHeight + 'px';
                    }
                })
            }
            // .End Xử lý khi click button search
        },
        start: function () {
            this.render();
        }
    }
    app.start();


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
</script>
</body>
</html>