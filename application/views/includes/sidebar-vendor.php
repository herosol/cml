<aside>
    <ul>
        <li class="<?php if ($page == "dashboard") {
                        echo 'active';
                    } ?>">
            <a href="<?= base_url() ?>vendor/dashboard">
                <img src="<?= base_url() ?>assets/images/icon-cog-fill.svg" alt="">
                <em>Account</em>
            </a>
        </li>
        <li class="<?php if ($page == "orders") {
                        echo 'active';
                    } ?>">
            <a href="<?= $base_url ?>vendor/orders.php">
                <img src="<?= base_url() ?>assets/images/icon-list.svg" alt="">
                <em>Orders</em>
            </a>
        </li>
        <li class="<?php if ($page == "credits") {
                        echo 'active';
                    } ?>">
            <a href="<?= $base_url ?>vendor/credits.php">
                <img src="<?= base_url() ?>assets/images/icon-credit-card.svg" alt="">
                <em>Credits</em>
            </a>
        </li>
        <li class="<?php if ($page == "earnings") {
                        echo 'active';
                    } ?>">
            <a href="<?= $base_url ?>vendor/earnings.php">
                <img src="<?= base_url() ?>assets/images/icon-earnings.svg" alt="">
                <em>Wallet</em>
            </a>
        </li>
        <li class="<?php if ($page == "pickup-delivery") {
                        echo 'active';
                    } ?>">
            <a href="<?= $base_url ?>vendor/pickup-delivery.php">
                <img src="<?= base_url() ?>assets/images/icon-van.svg" alt="">
                <em>Pickup & Delivery</em>
            </a>
        </li>
        <li class="<?php if ($page == "facility-hours") {
                        echo 'active';
                    } ?>">
            <a href="<?= base_url() ?>vendor/facility-hours">
                <img src="<?= base_url() ?>assets/images/icon-calendar.svg" alt="">
                <em>Facility Hours</em>
            </a>
        </li>
        <li class="<?php if ($page == "price-list") {
                        echo 'active';
                    } ?>">
            <a href="<?= base_url() ?>vendor/price-list">
                <img src="<?= base_url() ?>assets/images/icon-price-list.svg" alt="">
                <em>Price List</em>
            </a>
        </li>
    </ul>
</aside>
<!-- aside -->