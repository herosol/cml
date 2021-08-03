<header class="ease">
    <div class="contain">
        <div class="logo">
            <a href="<?= base_url() ?>">
                <img src="<?= getImageSrc(UPLOADIMAGE.'images/',$site_settings->site_logo) ?>" alt="">
            </a>
        </div>
        <div class="toggle"><span></span></div>
        <nav class="ease">
            <div nav>
                <ul id="nav">
                    <li class="<?php if ($slug == "index") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= base_url()?>">Home</a>
                    </li>
                    <li class="<?php if ($slug == "promotions-offers") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= base_url('promotions-offers') ?>">Promotions & Offers</a>
                    </li>
                    <li class="<?php if ($slug == "contact") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= base_url('contact') ?>">Contact us</a>
                    </li>
                </ul>
                <ul id="cta">
                    <li class="<?php if ($slug == "signin") {
                                        echo 'active';
                                    } ?>">
                        <a href="<?= base_url() ?>signin">Sign in</a>
                    </li>
                    <li class="<?php if ($slug == "signup") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= base_url() ?>signup-as" class="webBtn mdBtn simpleBtn">Sign up</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="clearfix"></div>
    </div>
</header>
<!-- header -->


<div class="upperlay"></div>
<div id="pageloader">
    <span class="loader"></span>
</div>