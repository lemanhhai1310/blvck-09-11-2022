<div class="uk-card home__product__card">
    <div class="uk-cover-container uk-inline-clip uk-transition-toggle">
        <img src="<?= $v['img'] ?>" alt="" uk-cover="">
        <img class="uk-transition-scale-up" src="<?= $v['img2'] ?>" alt="" uk-cover="">
        <span class="home__product__card__sale-box uk-label uk-label-danger uk-position-top-left uk-position-small">Sale</span>
        <a class="home__product__card__quickadd uk-visible@m uk-transition-slide-bottom uk-text-center uk-link-toggle uk-position-bottom uk-overlay uk-overlay-default">
            Quick add
        </a>
        <a href="" class="uk-position-bottom-right uk-position-small uk-hidden@m" uk-marker></a>
        <canvas width="524" height="524"></canvas>
    </div>
    <div class="home__product__card__body uk-text-center">
        <h3 class="uk-h3 uk-margin-remove home__product__card__title"><a href="" class="uk-link-toggle"><?= $v['name'] ?></a></h3>
        <div class="item__4">
            <?php if ($v['review']): ?>
                <div class="home__product__card__review uk-flex uk-flex-middle uk-flex-center">
                    <div class="uk-position-relative uk-margin-small-right">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <div class="uk-position-center-left uk-text-nowrap uk-overflow-hidden" style="width: 60%">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                    <span class="home__product__card__review__txt">2 reviews</span>
                </div>
            <?php endif; ?>
            <div>
                <span class="home__product__card__price home__product__card__price--new"><?= $v['price'] ?></span>
                <del class="home__product__card__price home__product__card__price--old"><?= $v['price_old'] ?></del>
            </div>
        </div>
    </div>
</div>