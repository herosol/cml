<!doctype html>
<html>

<head>
    <title>My Credits — Compare My Laundry</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-vendor'); ?>
    <main dash credits>
        <?php $this->load->view('includes/sidebar-vendor'); ?>


        <section id="credits">
            <div class="contain-fluid">
                <div class="blk topBlk">
                    <div class="ico"><img src="<?= get_site_image_src("members", $mem_data->mem_image, '300p_'); ?>" alt=""></div>
                    <div class="txt">
                        <h3><span class="regular">Welcome,</span> Dear, <?=$mem_data->mem_fname.' '.$mem_data->mem_lname?>!<span class="regular">Nice to see you<?=$mem_data->mem_first_time_login == 'no' ? ' again.' : '.'?></span></h3>
                    </div>
                    <div class="toggleBlk">
                        <div class="switchBtn hidden">
                            <input type="checkbox" name="" id="" checked>
                            <em></em>
                            <small></small>
                        </div>
                    </div>
                </div>
                <div class="flexRow flex">
                    <div class="col">
                        <div class="blk latestBlk">
                            <h4 class="heading text-center">Latest Order</h4>
                            <?php if(empty($latest_order)): ?>
                                <div class="alert alert-info alert-sm text-white">No order yet.</div>
                            <?php else: ?>
                                <div class="icoBlk">
                                    <div class="ico"><img src="<?= get_site_image_src("members", $latest_order->mem_image, 'thumb_'); ?>" alt=""></div>
                                    <div class="txt">
                                        <strong><?= implode(', ', $latest_order->services)?></strong>
                                    </div>
                                    <div class="price">£<?= order_total_price($latest_order->order_id) ?></div>
                                </div>
                                <ul class="keyLst">
                                    <?php if($latest_order->pick_and_drop_service == '1'): ?>
                                        <li>
                                            <div>Address:</div>
                                            <div><?=$latest_order->delivery_to?></div>
                                        </li>
                                        <li>
                                            <div>Collection:</div>
                                            <div>Collection from customer</div>
                                        </li>
                                        <li>
                                            <div>Drop off:</div>
                                            <div><?=$latest_order->drop_type?></div>
                                        </li>
                                    <?php else: ?>
                                        <li>
                                            <div>Address:</div>
                                            <div>
                                                <?php
                                                    foreach(explode('@', $latest_order->address) as $val):
                                                        echo $val;
                                                        echo '<br>';
                                                    endforeach;
                                                ?>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                                <?php if($latest_order->pick_and_drop_service == '1'): ?>
                                    <ul class="lst">
                                        <li>
                                            <strong>Collection Date:</strong>
                                            <em><?=date_picker_format_date($latest_order->collection_date, 'D, d M Y', false)?></em>
                                        </li>
                                        <li>
                                            <strong>Collection Time:</strong>
                                            <em><?=$latest_order->collection_time?></em>
                                        </li>
                                        <li>&nbsp;</li>
                                        <li>
                                            <strong>Delivery Date:</strong>
                                            <em><?=date_picker_format_date($latest_order->delivery_date, 'D, d M Y', false)?></em>
                                        </li>
                                        <li>
                                            <strong>Delivery Time:</strong>
                                            <em><?=$latest_order->delivery_time?></em>
                                        </li>
                                    </ul>
                                <?php else: ?>
                                    <ul class="lst">
                                        <li>
                                            <strong>Drop Off Date:</strong>
                                            <em><?=date_picker_format_date($latest_order->delivery_date, 'D, d M Y', false)?></em>
                                        </li>
                                        <li>
                                            <strong>Drop Off Time:</strong>
                                            <em><?=$latest_order->delivery_time?></em>
                                        </li>
                                    </ul>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="blk todayBlk">
                            <h4 class="heading text-center">Todays Sales</h4>
                            <div class="progressbar" data-animate="false">
                                <div class="circle" data-percent="100">
                                    <strong>£<?=price_format($today_sales)?></strong>
                                </div>
                            </div>
                            <div class="br"></div>
                            <h4 class="heading text-center">Todays Orders</h4>
                            <ul class="keyLst">
                                <li>
                                    <div>Deposit:</div>
                                    <div>£12345</div>
                                </li>
                                <li>
                                    <div>Expense:</div>
                                    <div>£1000</div>
                                </li>
                                <li>
                                    <div>Payable:</div>
                                    <div>£250</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="blk monthBlk text-center">
                            <h4 class="heading">Total Sales this Weak</h4>
                            <div class="progressbar" data-animate="false">
                                <div class="circle" data-percent="100">
                                    <strong><?=$week_sales->total_sales?></strong>
                                </div>
                            </div>
                            <strong class="color">£<?=price_format($week_sales->total)?></strong>
                            <hr>
                            <h4 class="heading">Total Order this Month</h4>
                            <div class="progressbar" data-animate="false">
                                <div class="circle" data-percent="100">
                                    <strong><?=$month_sales->total_sales?></strong>
                                </div>
                            </div>
                            <strong class="color">£<?=price_format($month_sales->total)?></strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- credits -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>