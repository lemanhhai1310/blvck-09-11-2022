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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.12/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.12/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.12/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="<?= (isset($bodyClass))?$bodyClass:'' ?>">
<?php //require "template-parts/commons/facebook_chat.php"; ?>
<!--Cart-->
<div id="offcanvas-flip-cart" class="cart__offcanvas" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar cart__offcanvas__bar uk-flex uk-flex-column">
        <div class="cart__offcanvas__header">
            <h3 class="cart__offcanvas__header__title">YOUR CART</h3>
            <button class="uk-offcanvas-close cart__offcanvas__header__close uk-position-center-right uk-position-small" type="button" uk-close></button>
        </div>
        <div class="cart__offcanvas__body uk-flex-auto uk-overflow-auto cart__offcanvas__overflow">
            <div class="cart__offcanvas__body__box1">
                <?php
                $data = array(
                    array(
                        'img' => 'images/0002_240x240.jpg',
                        'name' => 'Bold Hoodie',
                        'size' => 'M',
                        'price-new' => '326.700.000 ₫',
                        'price-old' => '4.064.000 ₫',
                        'loading' => false,
                    ),
                    array(
                        'img' => 'images/0002_240x240.jpg',
                        'name' => 'Bold Hoodie',
                        'size' => '2XL',
                        'price-new' => '326.700.000 ₫',
                        'price-old' => '4.064.000 ₫',
                        'loading' => false,
                    ),
                    array(
                        'img' => 'images/0002_240x240.jpg',
                        'name' => 'Bold Hoodie',
                        'size' => 'XL',
                        'price-new' => '326.700.000 ₫',
                        'price-old' => '4.064.000 ₫',
                        'loading' => true,
                    ),
                );
                foreach ($data as $k=>$v): ?>
                    <div class="cart__offcanvas__body__item">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-cover-container">
                                    <img src="<?= $v['img'] ?>" alt="" uk-cover="">
                                    <canvas width="90" height="90"></canvas>
                                    <a href="" class="uk-position-cover"></a>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                    <div class="uk-width-expand">
                                        <h4 class="uk-h4 cart__offcanvas__body__name"><a href=""><?= $v['name'] ?></a></h4>
                                    </div>
                                    <div class="uk-width-auto">
                                        <?php if ($v['loading']): ?>
                                            <div uk-spinner="ratio: .6"></div>
                                        <?php else: ?>
                                            <a class="cart__offcanvas__body__trash" href="" uk-icon="icon: trash"></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="cart__offcanvas__body__size"><?= $v['size'] ?></div>
                                <div class="item__10" uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="cart__offcanvas__body__boxCount">
                                            <a href="" class="uk-button uk-button-small uk-button-default" uk-icon="icon: minus; ratio: .6"></a>
                                            <input type="text" class="uk-input uk-form-small uk-form-width-xsmall" value="1" placeholder="">
                                            <a href="" class="uk-button uk-button-small uk-button-default" uk-icon="icon: plus; ratio: .6"></a>
                                        </div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <span class="cart__offcanvas__body__price cart__offcanvas__body__price--new"><?= $v['price-new'] ?></span>
                                        <del class="cart__offcanvas__body__price cart__offcanvas__body__price--old"><?= $v['price-old'] ?></del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="cart__offcanvas__body__box2">
                <div class="uk-text-center cart__offcanvas__body__box2__txt">Customers who bought this item also bought</div>
                <div class="cart__offcanvas__body__box2__item-20-15">
                    <?php
                    $data = array(
                        array(
                            'img' => 'images/00_3bc425e7-f84e-4348-917a-4ad6a58d4493_400x400.jpg.webp',
                            'name' => 'Blvck Tokyo Pants',
                            'size' => 'M',
                            'price-new' => '326.700.000 ₫',
                            'price-old' => '4.064.000 ₫',
                            'txt' => 'Options',
                        ),
                        array(
                            'img' => 'images/01_a8c245b3-1b8a-4b17-b566-aaa904120271_400x400.jpg.webp',
                            'name' => 'Bold Hoodie',
                            'size' => '2XL',
                            'price-new' => '326.700.000 ₫',
                            'price-old' => '4.064.000 ₫',
                            'txt' => 'Size',
                        ),
                        array(
                            'img' => 'images/back_3bf1400e-05a6-4a98-8d7b-89cd86e43d04_400x400.png.webp',
                            'name' => 'Blvck Skull Sweater',
                            'size' => 'XL',
                            'price-new' => '326.700.000 ₫',
                            'price-old' => '4.064.000 ₫',
                            'txt' => 'Size',
                        ),
                    );
                    foreach ($data as $k=>$v): ?>
                        <div class="cart__offcanvas__body__item">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-cover-container">
                                        <img src="<?= $v['img'] ?>" alt="" uk-cover="">
                                        <canvas width="90" height="90"></canvas>
                                        <a href="" class="uk-position-cover"></a>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                        <div class="uk-width-expand">
                                            <h4 class="uk-h4 cart__offcanvas__body__name"><a href=""><?= $v['name'] ?></a></h4>
                                        </div>
                                        <div class="uk-width-auto">

                                        </div>
                                    </div>
                                    <div>
                                        <span class="cart__offcanvas__body__price cart__offcanvas__body__price--new"><?= $v['price-new'] ?></span>
                                        <del class="cart__offcanvas__body__price cart__offcanvas__body__price--old"><?= $v['price-old'] ?></del>
                                    </div>
                                </div>
                                <div class="uk-width-auto">
                                    <a href="" class="cart__offcanvas__body__box2__btn uk-border-rounded uk-button uk-button-secondary uk-button-small"><?= $v['txt'] ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="cart__offcanvas__footer">
            <div class="uk-grid-10 uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <span class="cart__offcanvas__footer__txt">Subtotal (3 items)</span>
                </div>
                <div class="uk-width-auto">
                    <span class="cart__offcanvas__footer__txt">2.778.800.000 ₫</span>
                </div>
            </div>
            <div>
                <button class="cart__offcanvas__footer__btn uk-button uk-button-secondary uk-width-1-1 uk-border-rounded" uk-icon="icon: lock"><span class="uk-text-middle uk-margin-small-left">Checkout</span></button>
            </div>
        </div>
    </div>
</div>
<!--/Cart-->

<!--Menu-mobile-->
<div id="offcanvas-overlay-menu" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>


        <h3>Title</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

    </div>
</div>
<!--/Menu-mobile-->
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<header id="header" class="header" uk-sticky="end: #app">
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
                    <a href="" class="uk-navbar-item uk-logo"><img src="images/Blvck_Paris_White_110x.png.webp" alt=""></a>
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
                    <a href="#">MEN</a>
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
                    <a href="#">WOMEN</a>
                </li>
                <li><a href="#">ACCESSORIES</a></li>
                <li><a href="#">BLVCK HOME</a></li>
                <li><a href="#">DIGITAL</a></li>
                <li><a href="#">WHTE</a></li>
                <li><a href="#">NFT</a></li>
            </ul>
        </div>
    </nav>
</header>
<div class="uk-overlay uk-overlay-primary mask_menu"></div>