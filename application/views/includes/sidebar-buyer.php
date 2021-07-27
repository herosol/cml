<aside>
    <ul>
        <li class="<?php if ($page == "dashboard") {
                        echo 'active';
                    } ?>">
            <a href="<?= $base_url ?>buyer/dashboard.php">
                <img src="<?= base_url() ?>assets/images/icon-cog-fill.svg" alt="">
                <em>Account</em>
            </a>
        </li>
        <li class="<?php if ($page == "orders") {
                        echo 'active';
                    } ?>">
            <a href="<?= $base_url ?>buyer/orders.php">
                <img src="<?= base_url() ?>assets/images/icon-list.svg" alt="">
                <em>Orders</em>
            </a>
        </li>
        <li class="<?php if ($page == "credits") {
                        echo 'active';
                    } ?>">
            <a href="<?= $base_url ?>buyer/credits.php">
                <img src="<?= base_url() ?>assets/images/icon-credit-card.svg" alt="">
                <em>Credits</em>
            </a>
        </li>
        <li class="<?php if ($page == "transactions") {
                        echo 'active';
                    } ?>">
            <a href="<?= $base_url ?>buyer/transactions.php">
                <img src="<?= base_url() ?>assets/images/icon-transaction.svg" alt="">
                <em>Wallet</em>
            </a>
        </li>
    </ul>
</aside>
<!-- aside -->