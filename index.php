<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php $headerTransparent = true ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="home__slideshow uk-slideshow uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: false">

    <ul class="uk-slideshow-items" uk-height-viewport="min-height: 300" uk-scrollspy="cls: uk-animation-scale-down; target: .animation; delay: 500; repeat: true">
        <li>
            <img class="uk-cover" src="images/lifestyle05-desktop_2100x.jpg" alt="" uk-cover>
            <div class="uk-position-cover uk-flex uk-flex-middle">
                <div class="uk-section-xsmall uk-width-1-1 uk-text-center">
                    <div class="uk-container uk-container-expand">
                        <div class="home__slideshow__txt animation">READY-TO-WEAR</div>
                        <h2 class="uk-h2 home__slideshow__title animation">Winter Sale</h2>
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
                    <div class="uk-container uk-container-expand">
                        <div class="home__slideshow__txt animation">Blvck Home</div>
                        <h2 class="uk-h2 home__slideshow__title animation">Bring the lifestyle home.</h2>
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
<!--BLVCK HOME-->
<div class="uk-height-viewport uk-flex uk-flex-middle uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/social_share_74_d4088aec-1ac0-4f07-a1b7-0ceb116e0577.jpg" uk-img>
    <div class="uk-section-xsmall uk-width-1-1 uk-text-center">
        <div class="uk-container uk-container-expand">
            <div class="home__slideshow__txt">BLVCK HOME</div>
            <h2 class="uk-h2 home__slideshow__title">All shades of black available.</h2>
            <div class="uk-child-width-auto uk-flex-center uk-grid-10 uk-grid-40-m home__slideshow__item-60-35" uk-grid>
                <div>
                    <a href="" class="home__slideshow__btn uk-button uk-button-large uk-button-secondary">SHOP THE COLLECTION</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/BLVCK HOME-->

<!--WHTE-->
<div class="uk-height-viewport uk-flex uk-flex-middle uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/whte.jpg" uk-img>
    <div class="uk-section-xsmall uk-width-1-1 uk-text-center">
        <div class="uk-container uk-container-expand">
            <div class="home__slideshow__txt">WHTE</div>
            <h2 class="uk-h2 home__slideshow__title">Welcome to the bright side.</h2>
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
<!--/WHTE-->

<!--BLVCK X CASETIFY-->
<div class="uk-height-viewport uk-flex uk-flex-middle uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/casetify_6f1d1ac2-f7b4-450c-9a99-ebe7a5e62b6b.jpg" uk-img>
    <div class="uk-section-xsmall uk-width-1-1 uk-text-center">
        <div class="uk-container uk-container-expand">
            <div class="home__slideshow__txt">BLVCK X CASETIFY</div>
            <h2 class="uk-h2 home__slideshow__title">Limited collab.</h2>
            <div class="uk-child-width-auto uk-flex-center uk-grid-10 uk-grid-40-m home__slideshow__item-60-35" uk-grid>
                <div>
                    <a href="" class="home__slideshow__btn uk-button uk-button-large uk-button-secondary">Shop The Collab</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/BLVCK X CASETIFY-->

<!--BLOG-->
<div class="uk-section-xsmall uk-text-center">
    <div class="uk-container uk-container-expand">
        <h2 class="uk-h2 uk-margin-remove home__title">Blog posts</h2>
    </div>
</div>
<div class="uk-child-width-1-3@m home__blog__grid uk-child-width-auto uk-grid-collapse uk-overflow-auto" uk-grid>
    <?php
    $data = array(
        array(
            'img' => 'images/web_01_720x.jpg',
            'title' => 'How to set up the Blvck Icons & Widgets on Android?',
            'desc' => "Here's a guide on how to set up the Blvck Icons on your Android!  Note: In this example, we are using a free app, so you can expect some ads...",
        ),
        array(
            'img' => 'images/hero_banner_darken_1296x.jpg',
            'title' => 'Blvck Paris: An Upgrade',
            'desc' => 'Introduction When Blvck Paris launched their NFT collection, Blvck Genesis, in May 2022, it was done with the idea to bridge the gap between WEB2 and WEB3 fully. Blvck needed...',
        ),
        array(
            'img' => 'images/Screenshot_2022-10-31_at_20.46.32_1080x.png',
            'title' => 'Blvck Genesis: Stake to Win',
            'desc' => 'Crypto Staking – What is it?  Many well-known cryptocurrencies like Bitcoin and Ethereum(before the merge) use Proof-of-Work(PoW) as their means of validating transactions. But what does this mean? For starters,...',
        ),
    );
    foreach ($data as $k=>$v): ?>
        <div>
            <div class="home__blog__width">
                <div class="uk-cover-container uk-background-muted">
                    <img src="<?= $v['img'] ?>" alt="" uk-cover="">
                    <canvas width="573" height="573"></canvas>
                    <a href="blog-detail.php" class="uk-position-cover"></a>
                </div>
                <div class="uk-padding-small home__blog__box">
                    <h4 class="uk-h4 home__blog__title"><a href="blog-detail.php" class="uk-link-toggle"><?= $v['title'] ?></a></h4>
                    <div class="home__blog__desc item__15"><?= $v['desc'] ?></div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!--/BLOG-->
<?php require "template-parts/layouts/footer.php"; ?>