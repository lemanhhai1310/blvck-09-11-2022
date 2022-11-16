<?php $data["title"] = "Blog"; ?>
<?php $bodyClass = '' ?>
<?php $headerTransparent = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section-small uk-text-center blog__section1">
    <div class="uk-container uk-container-expand">
        <h1 class="uk-h1 blog__title">Blog</h1>
    </div>
</div>
<div class="uk-child-width-1-4@m home__blog__grid uk-child-width-auto uk-grid-collapse uk-overflow-auto" uk-grid>
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
        array(
            'img' => 'https://picsum.photos/573/573/?random',
            'title' => 'Blvck Genesis: Stake to Win',
            'desc' => 'Crypto Staking – What is it?  Many well-known cryptocurrencies like Bitcoin and Ethereum(before the merge) use Proof-of-Work(PoW) as their means of validating transactions. But what does this mean? For starters,...',
        ),
        array(
            'img' => 'https://picsum.photos/573/573/?random',
            'title' => 'Blvck Genesis: Stake to Win',
            'desc' => 'Crypto Staking – What is it?  Many well-known cryptocurrencies like Bitcoin and Ethereum(before the merge) use Proof-of-Work(PoW) as their means of validating transactions. But what does this mean? For starters,...',
        ),
        array(
            'img' => 'https://picsum.photos/573/573/?random',
            'title' => 'Blvck Genesis: Stake to Win',
            'desc' => 'Crypto Staking – What is it?  Many well-known cryptocurrencies like Bitcoin and Ethereum(before the merge) use Proof-of-Work(PoW) as their means of validating transactions. But what does this mean? For starters,...',
        ),
        array(
            'img' => 'https://picsum.photos/573/573/?random',
            'title' => 'Blvck Genesis: Stake to Win',
            'desc' => 'Crypto Staking – What is it?  Many well-known cryptocurrencies like Bitcoin and Ethereum(before the merge) use Proof-of-Work(PoW) as their means of validating transactions. But what does this mean? For starters,...',
        ),
        array(
            'img' => 'https://picsum.photos/573/573/?random',
            'title' => 'Blvck Genesis: Stake to Win',
            'desc' => 'Crypto Staking – What is it?  Many well-known cryptocurrencies like Bitcoin and Ethereum(before the merge) use Proof-of-Work(PoW) as their means of validating transactions. But what does this mean? For starters,...',
        ),
        array(
            'img' => 'https://picsum.photos/573/573/?random',
            'title' => 'Blvck Genesis: Stake to Win',
            'desc' => 'Crypto Staking – What is it?  Many well-known cryptocurrencies like Bitcoin and Ethereum(before the merge) use Proof-of-Work(PoW) as their means of validating transactions. But what does this mean? For starters,...',
        ),
        array(
            'img' => 'https://picsum.photos/573/573/?random',
            'title' => 'Blvck Genesis: Stake to Win',
            'desc' => 'Crypto Staking – What is it?  Many well-known cryptocurrencies like Bitcoin and Ethereum(before the merge) use Proof-of-Work(PoW) as their means of validating transactions. But what does this mean? For starters,...',
        ),
        array(
            'img' => 'https://picsum.photos/573/573/?random',
            'title' => 'Blvck Genesis: Stake to Win',
            'desc' => 'Crypto Staking – What is it?  Many well-known cryptocurrencies like Bitcoin and Ethereum(before the merge) use Proof-of-Work(PoW) as their means of validating transactions. But what does this mean? For starters,...',
        ),
        array(
            'img' => 'https://picsum.photos/573/573/?random',
            'title' => 'Blvck Genesis: Stake to Win',
            'desc' => 'Crypto Staking – What is it?  Many well-known cryptocurrencies like Bitcoin and Ethereum(before the merge) use Proof-of-Work(PoW) as their means of validating transactions. But what does this mean? For starters,...',
        ),
        array(
            'img' => 'https://picsum.photos/573/573/?random',
            'title' => 'Blvck Genesis: Stake to Win',
            'desc' => 'Crypto Staking – What is it?  Many well-known cryptocurrencies like Bitcoin and Ethereum(before the merge) use Proof-of-Work(PoW) as their means of validating transactions. But what does this mean? For starters,...',
        ),
        array(
            'img' => 'https://picsum.photos/573/573/?random',
            'title' => 'Blvck Genesis: Stake to Win',
            'desc' => 'Crypto Staking – What is it?  Many well-known cryptocurrencies like Bitcoin and Ethereum(before the merge) use Proof-of-Work(PoW) as their means of validating transactions. But what does this mean? For starters,...',
        ),
        array(
            'img' => 'https://picsum.photos/573/573/?random',
            'title' => 'Blvck Genesis: Stake to Win',
            'desc' => 'Crypto Staking – What is it?  Many well-known cryptocurrencies like Bitcoin and Ethereum(before the merge) use Proof-of-Work(PoW) as their means of validating transactions. But what does this mean? For starters,...',
        ),
        array(
            'img' => 'https://picsum.photos/573/573/?random',
            'title' => 'Blvck Genesis: Stake to Win',
            'desc' => 'Crypto Staking – What is it?  Many well-known cryptocurrencies like Bitcoin and Ethereum(before the merge) use Proof-of-Work(PoW) as their means of validating transactions. But what does this mean? For starters,...',
        ),
    );
    foreach ($data as $k=>$v): ?>
        <div>
            <div class="home__blog__width">
                <div class="uk-cover-container uk-background-muted">
                    <img src="<?= $v['img'] ?>?v=<?= $k ?>" alt="" uk-cover="">
                    <canvas width="573" height="573"></canvas>
                    <span class="uk-position-small uk-position-bottom-left blog__tag">WEB3</span>
                    <a href="" class="uk-position-cover"></a>
                </div>
                <div class="uk-padding-small home__blog__box">
                    <h4 class="uk-h4 home__blog__title"><a href="" class="uk-link-toggle"><?= $v['title'] ?></a></h4>
                    <div class="item__6"><time class="blog__time">October 03, 2022</time></div>
                    <div class="home__blog__desc item__15"><?= $v['desc'] ?></div>
                    <div class="item__15"><a href="" class="blog__link uk-link-toggle">READ MORE</a></div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php require "template-parts/layouts/footer.php"; ?>