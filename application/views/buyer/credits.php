<!doctype html>
<html>

<head>
    <title>My Credits — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-buyer'); ?>
    <main dash account>
        <?php $this->load->view('includes/sidebar-buyer'); ?>


        <section id="credits">
            <div class="contain-fluid">
                <div class="blk topBlk">
                    <div class="ico"><img src="<?= get_site_image_src("members", $mem_data->mem_image, ''); ?>" alt=""></div>
                    <div class="txt">
                        <h3><span class="regular">Welcome,</span> Dear, <?=$mem_data->mem_fname.' '.$mem_data->mem_lname?>!<span class="regular">Nice to see you again.</span></h3>
                    </div>
                    <div class="bTn">
                        <a href="<?= $base_url ?>buyer/orders.php" class="webBtn mdBtn simpleBtn">View Orders</a>
                    </div>
                </div>
                <?php $count = count($orders);?>
                <div class="blk text-center">
                    <h2 class="heading">My Account Credit</h2>
                    <div class="chart relative">
                        <div id="pie"></div>
                        <h3 class="heading"><?=($count == '9') ? 'Congratulations!' :  9-$count.' More Orders to go' ?></h3>
                    </div>
                    <div class="br"></div>
                    <h4>You will have a <span class="color"><?= $site_settings->site_buyer_credit_percentage ?>% off </span>on every 10th order .</h4>
                    <!-- <h4>We make sure you save wishlist your spend!</h4> -->
                    <div class="br"></div>
                    <?php if($count == '9') { ?>
                    <h4 class="color regular">Your <?= $site_settings->site_buyer_credit_percentage ?>% off automatically be applied at checkout.</h4>
                    <?php } ?>
                    <div class="br"></div>
                    <?php if(!empty($orders)){?>
                        <h2 class="heading">Orders</h2>
                        <div class="itmRow flex">
                        <?php foreach($orders as $order){?>
                        <div class="col">
                            <div class="minOrderBlk">
                                <div class="_header">
                                    <h4>Order</h4>
                                    <em>#<?= num_size($order->order_id)?></em>
                                </div>
                                <ul>
                                    <?php if($order->pick_and_drop_service == '1'){ ?>
                                    <li>Collection Date & Time:</li>
                                    <li><?=date_picker_format_date($order->collection_date, 'D, d M Y', false)?> - <?=$order->collection_time?></li>
                                    <li>&nbsp;</li>
                                    <li>Delivery Date & Time:</li>
                                    <li><?=date_picker_format_date($order->delivery_date, 'D, d M Y', false)?> - <?=$order->delivery_time?></li>
                                    <?php }else if($order->pick_and_drop_service == '0'){ ?>
                                    <li>&nbsp;</li>
                                    <li>Drop Off Date and Time:</li>
                                    <li><?=date_picker_format_date($order->delivery_date, 'D, d M Y', false)?> - <?=$order->delivery_time?></li>
                                    <li>&nbsp;</li>
                                    <?php } ?>
                                </ul>
                                <p>You Paid:</p>
                                <div class="price">£<?= order_total_price($order->order_id) ?></div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php }else{ ?>
                    <br>
                    <br>
                    <br>
                    <h2 class="heading">No Orders Yet</h2>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- credits -->


        <script src="<?= base_url() ?>assets/js/highcharts.js"></script>
        <script src="<?= base_url() ?>assets/js/pie-chart.js"></script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>