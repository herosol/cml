<header class="ease log">
    <div class="contain-fluid">
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
                    <li class="<?php if ($page == "place-order") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= base_url() ?>search.php" class="webBtn mdBtn simpleBtn"><i class="fi-plus fi-2x"></i> Place an Order</a>
                        <!-- <a href="<?= base_url() ?>buyer/place-order.php" class="webBtn mdBtn simpleBtn"><i class="fi-plus fi-2x"></i> Place an Order</a> -->
                    </li>
                </ul>
            </div>
            <div class="proIco dropDown">
                <div class="ico dropBtn"><img src="<?= get_site_image_src("members", $mem_data->mem_image, 'thumb_'); ?>" alt=""></div>
                <div class="proDrop dropCnt">
                    <ul class="dropLst">
                        <li><a href="<?= base_url() ?>buyer/dashboard">Dashboard <small>See and Manage Data</small></a></li>
                        <li><a href="<?= base_url() ?>buyer/orders">My Orders <small>View Order Details</small></a></li>
                        <li><a href="<?= base_url() ?>buyer/transactions">My Transactions <small>See & Mange Your Payouts</small></a></li>
                        <li><a href="<?= base_url() ?>index/logout">Sign out</a></li>
                    </ul>
                </div>
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