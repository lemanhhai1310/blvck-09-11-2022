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