<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: false">

    <ul class="uk-slideshow-items" uk-height-viewport="min-height: 300">
        <li>
            <img src="images/lifestyle05-desktop_2100x.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="images/Home_8060a3f8-beff-4f61-ba4b-6c4602cefc55.jpg" alt="" uk-cover>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<div class="uk-height-viewport">

</div>
<?php require "template-parts/layouts/footer.php"; ?>