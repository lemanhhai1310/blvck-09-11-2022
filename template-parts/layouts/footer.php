<footer id="footer" class="footer">
    <div class="uk-container uk-container-expand">
        <div class="footer__item-75-25 uk-text-center">
            <img src="images/logo_grey_MEDIUM_db13ddee-d6fd-410a-8f17-39f9c1b31714_85x.png.webp" alt="">
        </div>
        <div class="footer__item-75-25">
            <div class="uk-grid uk-child-width-1-4@m uk-visible@m" uk-grid>
                <div>
                    <h4 class="uk-h4 footer__title uk-margin-remove">COLLECTIONS</h4>
                    <?php require "template-parts/footer/widget_nav_1.php"; ?>
                </div>
                <div>
                    <h4 class="uk-h4 footer__title uk-margin-remove">INFORMATION</h4>
                    <?php require "template-parts/footer/widget_nav_2.php"; ?>
                </div>
                <div>
                    <h4 class="uk-h4 footer__title uk-margin-remove">MORE</h4>
                    <?php require "template-parts/footer/widget_nav_3.php"; ?>
                </div>
                <div>
                    <h4 class="uk-h4 footer__title uk-margin-remove">SOCIAL</h4>
                    <?php require "template-parts/footer/widget_social.php"; ?>
                </div>
            </div>
            <ul class="footer__accordion uk-hidden@m" uk-accordion="multiple: true">
                <li>
                    <a class="uk-accordion-title footer__accordion__title" href="#">COLLECTIONS</a>
                    <div class="uk-accordion-content">
                        <?php require "template-parts/footer/widget_nav_1.php"; ?>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title footer__accordion__title" href="#">INFORMATION</a>
                    <div class="uk-accordion-content">
                        <?php require "template-parts/footer/widget_nav_2.php"; ?>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title footer__accordion__title" href="#">MORE</a>
                    <div class="uk-accordion-content">
                        <?php require "template-parts/footer/widget_nav_3.php"; ?>
                    </div>
                </li>
                <li class="uk-open">
                    <a class="uk-accordion-title footer__accordion__title" href="#">SOCIAL</a>
                    <div class="uk-accordion-content">
                        <?php require "template-parts/footer/widget_social.php"; ?>
                    </div>
                </li>
            </ul>
        </div>
        <div class="footer__item-100-20 uk-text-center uk-text-left@m">
            <div uk-form-custom="target: > * > span:first-child">
                <select aria-label="Custom controls">
                    <option value="1">VND d</option>
                    <option value="2">Option 02</option>
                    <option value="3">Option 03</option>
                    <option value="4">Option 04</option>
                </select>
                <button class="footer__moneySelect uk-button uk-button-default" type="button" tabindex="-1">
                    <span></span>
                    <span uk-icon="icon: chevron-down"></span>
                </button>
            </div>
        </div>
    </div>
</footer>
</div>
<!--/app-->
</body>
</html>