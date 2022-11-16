<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php $headerTransparent = true ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-slideshow uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: false">

    <ul class="uk-slideshow-items" uk-height-viewport="min-height: 300">
        <li>
            <img class="uk-cover" src="images/lifestyle05-desktop_2100x.jpg" alt="" uk-cover>
            <div class="uk-position-cover">

            </div>
        </li>
        <li>
            <img class="uk-cover" src="images/Home_8060a3f8-beff-4f61-ba4b-6c4602cefc55.jpg" alt="" uk-cover>
            <div class="uk-position-cover">

            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<div class="uk-height-viewport">

</div>
<?php require "template-parts/layouts/footer.php"; ?>