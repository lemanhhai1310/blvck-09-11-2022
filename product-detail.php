<?php $data["title"] = "Product Detail"; ?>
<?php $bodyClass = '' ?>
<?php $headerTransparent = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-height-min-small uk-section-small productDetail__section">
    <div class="uk-container uk-container-expand">
        <div class="uk-grid uk-grid-small uk-grid-40-m" uk-grid>
            <div class="uk-width-expand">
                <?php $data = array(
                    'images/DSC08260_3000x.jpg',
                    'images/DSC08249_3000x.jpg',
                    'images/DSC08236_3000x.jpg',
                ); ?>
                <div class="productDetail__boxSpace uk-position-relative uk-light" uk-slideshow="ratio: 7:7; animation: fade;">
                    <div class="uk-grid-small uk-grid-20-m" uk-grid>
                        <div class="uk-width-expand">
                            <div class="uk-position-relative">
                                <ul class="uk-slideshow-items">
                                    <?php foreach ($data as $k=>$v): ?>
                                    <li>
                                        <img src="<?= $v ?>" alt="" uk-cover>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                            </div>
                        </div>
                        <div uk-toggle="cls: uk-position-bottom-center uk-position-small; mode: media; media: (max-width: 959.8px)" class="uk-width-auto@m uk-flex-first@m">
                            <div class="uk-flex-center uk-flex">
                                <ul class="uk-thumbnav productDetail__thumbnav" uk-toggle="cls: uk-thumbnav-vertical; mode: media; media: @m" uk-margin>
                                    <?php foreach ($data as $k=>$v): ?>
                                        <li uk-slideshow-item="<?= $k ?>" class="<?= ($k==0)? 'uk-active' : '' ?>"><a href="#"><img src="<?= $v ?>" width="75" height="75" alt=""></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-2@m">
                <div class="productDetail__widthLeft uk-margin-auto">
                    <ul class="uk-breadcrumb productDetail__breadcrumb">
                        <li><a href="">Home</a></li>
                        <li><span>Blvck Bold Nylon Jacket</span></li>
                    </ul>
                    <h1 class="uk-h1 productDetail__contentLeft__title">Blvck Bold Nylon Jacket</h1>
                    <div>
                        <span class="productDetail__contentLeft__price productDetail__contentLeft__price--new">6.322.000₫</span>
                        <del class="productDetail__contentLeft__price productDetail__contentLeft__price--old">7.903.000₫</del>
                    </div>
                    <div class="uk-margin-top uk-grid-small uk-child-width-auto uk-grid" uk-grid>
                        <label><input class="uk-radio productDetail__contentLeft__radio" type="radio" name="radio2" checked> <span class="productDetail__contentLeft__label">XS</span></label>
                        <label><input class="uk-radio productDetail__contentLeft__radio" type="radio" name="radio2"> <span class="productDetail__contentLeft__label">S</span></label>
                        <label><input class="uk-radio productDetail__contentLeft__radio" type="radio" name="radio2"> <span class="productDetail__contentLeft__label">M</span></label>
                        <label><input class="uk-radio productDetail__contentLeft__radio" type="radio" name="radio2"> <span class="productDetail__contentLeft__label">L</span></label>
                        <label><input class="uk-radio productDetail__contentLeft__radio" type="radio" name="radio2"> <span class="productDetail__contentLeft__label">XL</span></label>
                    </div>
                    <div class="uk-margin" uk-form-custom="target: > * > span:first-child">
                        <select aria-label="Custom controls">
                            <option value="">Please select...</option>
                            <option value="1">Option 01</option>
                            <option value="2">Option 02</option>
                            <option value="3">Option 03</option>
                            <option value="4">Option 04</option>
                        </select>
                        <button class="uk-button uk-button-default" type="button" tabindex="-1">
                            <span></span>
                            <span uk-icon="icon: chevron-down"></span>
                        </button>
                    </div>
                    <div class="uk-child-width-expand uk-grid-10" uk-grid>
                        <div>
                            <button class="productDetail__contentLeft__btn productDetail__contentLeft__btn--addCart uk-button uk-button-large uk-background-secondary uk-width-1-1@l">ADD TO CART</button>
                        </div>
                        <div>
                            <button class="productDetail__contentLeft__btn productDetail__contentLeft__btn--buy uk-button uk-button-large uk-background-secondary uk-width-1-1@l">
                                Buy with
                            </button>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <button class="productDetail__contentLeft__btn productDetail__contentLeft__btn--find uk-button uk-button-large uk-button-default uk-width-1-1@l">Find my size</button>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-child-width-auto uk-flex-middle uk-flex-center uk-grid-8" uk-grid>
                            <div>
                                <span>Earn 6% rebate with</span>
                            </div>
                            <div>
                                <img style="max-width: 161px" src="images/crypto-pay-logo.svg" alt="">
                            </div>
                            <div>
                                <a href="" uk-icon="warning"></a>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin productDetail__contentLeft__boxSale uk-padding-small uk-card uk-card-body uk-alert-warning uk-text-center">
                        You might be eligble for discounts of up to 35% on this product. Connect your wallet to find out if you are!
                    </div>
                    <div class="uk-margin">
                        <button class="productDetail__contentLeft__btn productDetail__contentLeft__btn--connect uk-button uk-button-large uk-background-secondary uk-width-1-1@l">Connect Wallet</button>
                    </div>
                    <ul class="productDetail__contentLeft__accordion" uk-accordion>
                        <li class="productDetail__contentLeft__accordion__li uk-open">
                            <a class="uk-accordion-title productDetail__contentLeft__accordion__title" href="#">DESCRIPTION</a>
                            <div class="uk-accordion-content productDetail__contentLeft__accordion__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </li>
                        <li class="productDetail__contentLeft__accordion__li">
                            <a class="uk-accordion-title productDetail__contentLeft__accordion__title" href="#">SHIPPING & RETURNS</a>
                            <div class="uk-accordion-content productDetail__contentLeft__accordion__content">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                            </div>
                        </li>
                        <li class="productDetail__contentLeft__accordion__li">
                            <a class="uk-accordion-title productDetail__contentLeft__accordion__title" href="#">REVIEWS</a>
                            <div class="uk-accordion-content productDetail__contentLeft__accordion__content">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>