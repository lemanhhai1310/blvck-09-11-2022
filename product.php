<?php $data["title"] = "Product"; ?>
<?php $bodyClass = '' ?>
<?php $headerTransparent = true ?>
<?php require "template-parts/layouts/header.php"; ?>
<div uk-parallax="bgy: -30" class="uk-background-cover uk-background-norepeat uk-light uk-background-center-center uk-flex uk-flex-middle" uk-height-viewport="offset-bottom: 50" data-src="images/img_ph_collection-hero_1728x.jpg" uk-img>
    <div class="uk-section-small uk-width-1-1 uk-text-center">
        <div class="uk-container uk-container-expand">
            <h1 class="uk-h1 product__title">Ready-to-Wear</h1>
            <div class="home__slideshow__item-60-35"><span class="product__span">Limited quantity</span></div>
        </div>
    </div>
</div>

<!--fillter-->
<div id="offcanvas-overlay-fillter" class="product__offcanvas" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar product__offcanvas__bar uk-flex uk-flex-column">
        <div class="product__offcanvas__header">
            <h3 class="product__offcanvas__title">Title</h3>
            <button class="uk-offcanvas-close" type="button" uk-close></button>
        </div>
        <div class="product__offcanvas__body uk-flex-auto">
            1
        </div>
        <div class="product__offcanvas__footer">
            <button class="product__offcanvas__btnReset uk-button uk-button-default uk-width-1-1">Reset</button>
        </div>
    </div>
</div>
<!--/fillter-->

<div class="uk-height-viewport product__content">
    <nav class="uk-navbar uk-navbar-container uk-navbar-transparent product__content__fillter" uk-navbar>
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle product__content__fillter__navItem product__content__fillter__btn" href="#offcanvas-overlay-fillter" uk-toggle>
                <span class="">FILTER (2)</span>
            </a>
        </div>
        <div class="uk-navbar-right">
            <a href="" class="uk-navbar-toggle product__content__fillter__navItem product__content__fillter__sort">SORT BY</a>
            <div class="product__content__fillter__dropdown" uk-dropdown="mode: click">
                <ul class="uk-nav uk-nav-default">
                    <li><a href="">Best sellers</a></li>
                    <li><a href="">Price, low to high</a></li>
                    <li><a href="">Price, high to low</a></li>
                    <li><a href="">New arrivals</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-match uk-grid-collapse" uk-grid>
        <?php
        $data = array(
            array(
                'img' => 'images/DSC03839_540x.jpg',
                'img2' => 'images/DSC03835_540x.jpg',
                'name' => 'Blvck Oversize Blazer',
                'price' => '4.524.000₫',
                'price_old' => '5.655.000₫',
                'review' => false,
            ),
            array(
                'img' => 'images/3_9ffdb763-9804-44cc-b80b-e75da54f8be9_540x.jpg',
                'img2' => 'images/front_53fd5622-4fd4-441d-a1dc-59a706224d67_540x.jpg',
                'name' => 'Blvck Oversize Blazer',
                'price' => '4.524.000₫',
                'price_old' => '5.655.000₫',
                'review' => true,
            ),
            array(
                'img' => 'images/DSC03839_540x.jpg',
                'img2' => 'images/DSC03835_540x.jpg',
                'name' => 'Blvck Oversize Blazer',
                'price' => '4.524.000₫',
                'price_old' => '5.655.000₫',
                'review' => true,
            ),
            array(
                'img' => 'images/DSC03839_540x.jpg',
                'img2' => 'images/DSC03835_540x.jpg',
                'name' => 'Blvck Oversize Blazer',
                'price' => '4.524.000₫',
                'price_old' => '5.655.000₫',
                'review' => true,
            ),
            array(
                'img' => 'images/DSC03839_540x.jpg',
                'img2' => 'images/DSC03835_540x.jpg',
                'name' => 'Blvck Oversize Blazer',
                'price' => '4.524.000₫',
                'price_old' => '5.655.000₫',
                'review' => true,
            ),
            array(
                'img' => 'images/DSC03839_540x.jpg',
                'img2' => 'images/DSC03835_540x.jpg',
                'name' => 'Blvck Oversize Blazer',
                'price' => '4.524.000₫',
                'price_old' => '5.655.000₫',
                'review' => false,
            ),
            array(
                'img' => 'images/3_9ffdb763-9804-44cc-b80b-e75da54f8be9_540x.jpg',
                'img2' => 'images/front_53fd5622-4fd4-441d-a1dc-59a706224d67_540x.jpg',
                'name' => 'Blvck Oversize Blazer',
                'price' => '4.524.000₫',
                'price_old' => '5.655.000₫',
                'review' => true,
            ),
            array(
                'img' => 'images/DSC03839_540x.jpg',
                'img2' => 'images/DSC03835_540x.jpg',
                'name' => 'Blvck Oversize Blazer',
                'price' => '4.524.000₫',
                'price_old' => '5.655.000₫',
                'review' => true,
            ),
            array(
                'img' => 'images/DSC03839_540x.jpg',
                'img2' => 'images/DSC03835_540x.jpg',
                'name' => 'Blvck Oversize Blazer',
                'price' => '4.524.000₫',
                'price_old' => '5.655.000₫',
                'review' => true,
            ),
            array(
                'img' => 'images/DSC03839_540x.jpg',
                'img2' => 'images/DSC03835_540x.jpg',
                'name' => 'Blvck Oversize Blazer',
                'price' => '4.524.000₫',
                'price_old' => '5.655.000₫',
                'review' => true,
            ),
        );
        foreach ($data as $k=>$v): ?>
            <div>
                <?php require "template-parts/layouts/product_card.php"; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>