<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - Blvck EMEA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.13/dist/css/uikit.min.css" />
<!--    <link rel="stylesheet" href="style.css?v=--><?php //echo(time()) ?><!--">-->

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.13/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.13/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
    <style>
        <?= file_get_contents('style.css'); ?>
    </style>
</head>
<body class="<?= (isset($bodyClass))?$bodyClass:'' ?>">
<?php //require "template-parts/commons/facebook_chat.php"; ?>
<!--Cart-->
<?php require "template-parts/layouts/cart.php"; ?>
<!--/Cart-->

<!--Menu-mobile-->
<?php require "template-parts/layouts/menu-mobile.php"; ?>
<!--/Menu-mobile-->
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<header id="header" class="header <?= (isset($headerTransparent) && $headerTransparent)? 'headerTransparent': 'notTransparent' ?>" uk-sticky="end: !#app; position: top;">
    <div class="header__top">
        <div class="uk-container uk-container-expand">
            <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="nav-overlay uk-navbar-left uk-light">
                    <div class="uk-navbar-item uk-visible@m">
                        <?php require "template-parts/layouts/social.php"; ?>
                    </div>
                    <a class="uk-navbar-toggle uk-hidden@m" uk-navbar-toggle-icon href="#offcanvas-overlay-menu" uk-toggle=""></a>
                    <a class="uk-navbar-toggle uk-hidden@m" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
                </div>
                <div class="nav-overlay uk-navbar-center">
                    <a href="." class="uk-navbar-item uk-logo"><img src="images/Blvck_Paris_White_110x.png.webp" alt=""></a>
                </div>
                <div class="nav-overlay uk-navbar-right uk-light">
                    <a class="uk-navbar-toggle" uk-icon="icon: user" href=""></a>
                    <a class="uk-navbar-toggle uk-visible@m" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
                    <div class="uk-navbar-item">
                        <a class="uk-position-relative" uk-icon="icon: cart" href="#offcanvas-flip-cart" uk-toggle="">
                            <span class="uk-badge uk-position-top-right">9</span>
                        </a>
                    </div>
                </div>
                <div class="header__top__boxSearch nav-overlay uk-navbar-left uk-flex-1" hidden>
                    <div class="uk-navbar-item uk-width-expand">
                        <form class="uk-search uk-search-navbar uk-width-1-1">
                            <input class="header__top__boxSearch__input uk-search-input" type="search" placeholder="Search" aria-label="Search" autofocus>
                        </form>
                    </div>
                    <a class="uk-navbar-toggle btnClose_Search" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
                </div>
            </nav>
        </div>
    </div>
    <nav class="header__bottom uk-visible@m uk-flex-center uk-navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
        <div class="uk-navbar-left uk-light">
            <ul class="uk-navbar-nav">
                <li>
                    <a href="product.php">MEN</a>
                    <div class="uk-navbar-dropdown uk-padding-remove" uk-drop="boundary: !.uk-navbar; stretch: x; flip: false; offset: 0; auto-update: false;">
                        <div class="uk-child-width-1-3 uk-grid-collapse uk-grid-match" uk-grid>
                            <div>
                                <div class="uk-card uk-card-body">
                                    <div class="uk-child-width-1-2" uk-grid>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li class="title"><a href="#">READY-TO-WEAR</a></li>
                                                <li><a href="#">NEW ARRIVALS</a></li>
                                                <li><a href="#">TEES</a></li>
                                                <li><a href="#">HOODIES & SWEATERS</a></li>
                                                <li><a href="#">PANTS</a></li>
                                                <li><a href="#">OUTERWEAR</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li class="title"><a href="#">ACCESSORIES</a></li>
                                                <li><a href="#">NEW ARRIVALS</a></li>
                                                <li><a href="#">BAGS & LEATHER</a></li>
                                                <li><a href="#">HIGH-TECH</a></li>
                                                <li><a href="#">LIFESTYLE</a></li>
                                                <li><a href="#">HEADWARE</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-cover-container header__bottom__cover">
                                    <img src="images/Men-Nav_5aa642b7-259b-4343-bf6e-e062a5e8145b.jpg" alt="" uk-cover="">
                                    <canvas width="573" height="459"></canvas>
                                    <div class="header__bottom__box uk-position-cover uk-padding-small uk-flex uk-flex-column uk-flex-center uk-flex-middle">
                                        <h3 class="uk-h3 header__bottom__box__title">READY-TO-WEAR</h3>
                                        <p class="header__bottom__box__desc">Shop Now</p>
                                    </div>
                                    <a href="" class="uk-position-cover"></a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-cover-container header__bottom__cover">
                                    <img src="images/social_share_900x.jpg" alt="" uk-cover="">
                                    <canvas width="573" height="459"></canvas>
                                    <div class="header__bottom__box uk-position-cover uk-padding-small uk-flex uk-flex-column uk-flex-center uk-flex-middle">
                                        <h3 class="uk-h3 header__bottom__box__title">ACCESSORIES</h3>
                                        <p class="header__bottom__box__desc">Shop Now</p>
                                    </div>
                                    <a href="" class="uk-position-cover"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="product.php">WOMEN</a>
                </li>
                <li><a href="product.php">ACCESSORIES</a></li>
                <li><a href="#">BLVCK HOME</a></li>
                <li><a href="#">DIGITAL</a></li>
                <li><a href="#">WHTE</a></li>
                <li><a href="#">NFT</a></li>
                <li><a href="blog.php">BLOG</a></li>
            </ul>
        </div>
    </nav>
</header>
<div class="uk-overlay uk-overlay-default mask_menu"></div>