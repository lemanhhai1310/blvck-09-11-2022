<?php $data["title"] = "Blog Detail"; ?>
<?php $bodyClass = '' ?>
<?php $headerTransparent = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div uk-toggle="cls: uk-height-min-large; mode: media; media: @l" class="uk-height-min-large uk-height-min-medium uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/Screenshot_2022-10-31_at_20.46.32_1728x.png" uk-img>

</div>
<div class="uk-section">
    <div class="uk-container">
        <h1 class="uk-h1 blog__title1">Blvck Genesis: Stake to Win</h1>
        <div class="uk-grid-match" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-height-viewport">
                    <div class="blog__boxTime">
                        <span>October 31, 2022</span>
                        <span>By Gaanesh T</span>
                    </div>
                    <article class="uk-article uk-margin-medium blog__article">
                        <h2 class="uk-article-title">Crypto Staking – What is it? </h2>
                        <p>Many well-known cryptocurrencies like Bitcoin and Ethereum(before the merge) use Proof-of-Work(PoW) as their means of validating transactions. But what does this mean? For starters, to prevent someone from spending the same money twice and to ensure consensus and synergy throughout the network, people, called miners, use their computers to solve complex mathematical problems in hopes of adding their block of transactions to the blockchain and being rewarded in coins of the respective blockchain.</p>
                    </article>
                </div>
            </div>
            <div class="uk-width-1-3@m">
                <div>
                    <aside>
                        <h3 class="uk-h3 sidebar__title">Recent Articles</h3>

                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>