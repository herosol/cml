<header class="ease log">
    <div class="contain-fluid">
        <div class="logo">
            <a href="<?= base_url() ?>vendor/dashboard">
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
            </div>
            <div class="proIco dropDown">
                <div class="ico dropBtn"><img src="<?= get_site_image_src("members", $mem_data->mem_image, 'thumb_'); ?>" alt=""></div>
                <div class="proDrop dropCnt">
                    <ul class="dropLst">
                        <li><a href="<?= base_url() ?>vendor/dashboard">Dashboard <small>See and Manage Data</small></a></li>
                        <li><a href="<?= base_url() ?>vendor/orders">My Orders <small>View Order Details</small></a></li>
                        <li><a href="<?= base_url() ?>vendor/earnings">My Earnings <small>See & Mange Your Payouts</small></a></li>
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