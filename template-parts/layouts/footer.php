</div>
<!--/app-->
<script>
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const app = {
        render: function () {
            const uk_navbar_dropdown = $('.uk-navbar-dropdown');
            const header = $('.header');
            let scrollTop = window.scrollY || document.documentElement.scrollTop;

            if (scrollTop > 0){
                UIkit.util.on('.uk-navbar-dropdown', 'show', function () {
                    // do something
                    header.classList.add('hoverMenu');
                });
                UIkit.util.on('.uk-navbar-dropdown', 'hide', function () {
                    // do something
                    header.classList.remove('hoverMenu');
                });
            }else {
                UIkit.util.on('.uk-navbar-dropdown', 'show', function () {
                    // do something
                    header.classList.add('hoverMenu');
                });
                UIkit.util.on('.uk-navbar-dropdown', 'hide', function () {
                    // do something
                    header.classList.remove('hoverMenu');
                });
            }

            document.onscroll = function () {
                scrollTop = window.scrollY || document.documentElement.scrollTop;

                if (scrollTop > 0){
                    UIkit.util.on('.uk-navbar-dropdown', 'show', function () {
                        // do something
                        header.classList.add('hoverMenu');
                    });
                    UIkit.util.on('.uk-navbar-dropdown', 'hide', function () {
                        // do something
                        header.classList.remove('hoverMenu');
                    });
                }else {
                    UIkit.util.on('.uk-navbar-dropdown', 'show', function () {
                        // do something
                        header.classList.add('hoverMenu');
                    });
                    UIkit.util.on('.uk-navbar-dropdown', 'hide', function () {
                        // do something
                        header.classList.remove('hoverMenu');
                    });
                }
            }

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
        },
        start: function () {
            this.render();
        }
    }
    app.start();
</script>
</body>
</html>