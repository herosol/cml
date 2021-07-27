<header class="ease">
    <div class="contain">
        <div class="logo">
            <a href="<?= base_url() ?>">
                <img src="<?= base_url() ?>assets/images/logo.svg" alt="">
            </a>
        </div>
        <div class="toggle"><span></span></div>
        <nav class="ease">
            <div nav>
                <ul id="nav">
                    <li class="<?php if ($page == "index") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= base_url() ?>index.php">Home</a>
                    </li>
                    <li class="<?php if ($page == "promotions-offers") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= base_url() ?>promotions-offers.php">Promotions & Offers</a>
                    </li>
                    <li class="<?php if ($page == "contact") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= base_url() ?>contact.php">Contact us</a>
                    </li>
                </ul>
                <ul id="cta">
                    <!-- <li class="<?php if ($page == "signin") {
                                        echo 'active';
                                    } ?>">
                        <a href="<?= base_url() ?>signin.php">Sign in</a>
                    </li> -->
                    <li class="<?php if ($page == "signup") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= base_url() ?>signup.php" class="webBtn mdBtn simpleBtn">Sign up</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="clearfix"></div>
    </div>
</header>
<!-- header -->


<div class="upperlay"></div>
<!-- <div id="pageloader">
    <span class="loader"></span>
</div> -->