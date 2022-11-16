<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php $headerTransparent = true ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="home__slideshow uk-slideshow uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: false">

    <ul class="uk-slideshow-items" uk-height-viewport="min-height: 300">
        <li>
            <img class="uk-cover" src="images/lifestyle05-desktop_2100x.jpg" alt="" uk-cover>
            <div class="uk-position-cover uk-flex uk-flex-middle">
                <div class="uk-section-xsmall uk-width-1-1 uk-text-center">
                    <div class="uk-container">
                        <div class="home__slideshow__txt">READY-TO-WEAR</div>
                        <h2 class="uk-h2 home__slideshow__title">Winter Sale</h2>
                        <div class="uk-child-width-auto uk-flex-center uk-grid-10 uk-grid-40-m home__slideshow__item-60-35" uk-grid>
                            <div>
                                <a href="" class="home__slideshow__btn uk-button uk-button-large uk-button-secondary">SHOP MEN</a>
                            </div>
                            <div>
                                <a href="" class="home__slideshow__btn uk-button uk-button-large uk-button-secondary">SHOP WOMEN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <img class="uk-cover" src="images/Home_8060a3f8-beff-4f61-ba4b-6c4602cefc55.jpg" alt="" uk-cover>
            <div class="uk-position-cover uk-flex uk-flex-middle">
                <div class="uk-section-xsmall uk-width-1-1 uk-text-center">
                    <div class="uk-container">
                        <div class="home__slideshow__txt">Blvck Home</div>
                        <h2 class="uk-h2 home__slideshow__title">Bring the lifestyle home.</h2>
                        <div class="uk-child-width-auto uk-flex-center uk-grid-10 uk-grid-40-m home__slideshow__item-60-35" uk-grid>
                            <div>
                                <a href="" class="home__slideshow__btn uk-button uk-button-large uk-button-secondary">Shop the collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<div class="uk-height-viewport">

</div>
<?php require "template-parts/layouts/footer.php"; ?>