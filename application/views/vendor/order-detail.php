<!doctype html>
<html>

<head>
    <title>Order Detail — Compare My Laundry</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-vendor'); ?>
    <main dash orders>
        <?php $this->load->view('includes/sidebar-vendor'); ?>


        <section id="orders">
            <div class="contain-fluid">
                <div class="blk topBlk">
                    <div class="ico"><img src="<?= get_site_image_src("members", $mem_data->mem_image, '300p_'); ?>" alt=""></div>
                    <div class="txt">
                        <h3><span class="regular">Welcome,</span> Dear, <?=$mem_data->mem_fname.' '.$mem_data->mem_lname?>!<span class="regular">Nice to see you again.</span></h3>
                    </div>
                    <div class="toggleBlk">
                        <div class="switchBtn">
                            <input type="checkbox" name="" id="" checked>
                            <em></em>
                            <small></small>
                        </div>
                    </div>
                </div>
                <div class="blk jobBlk">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Order No:</strong>
                                    <em class="red-color">#ABC8745</em>
                                </td>
                                <td width="5%">
                                    <div class="bTn dropDown">
                                        <span class="webBtn mdBtn blockBtn dropBtn processed"><em>Process</em> <i class="fi-chevron-down"></i></span>
                                        <ul class="dropCnt dropLst right">
                                            <li><span>Complete</span></li>
                                            <li><span>Cancel</span></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="br"></div>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <table class="sm">
                                        <tbody>
                                            <tr>
                                                <th>Customer Name</th>
                                            </tr>
                                            <tr>
                                                <td><?=$order->mem_fname.' '.$order->mem_lname?></td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <?php if($order->pick_and_drop_service == '1'): ?>
                                                <tr>
                                                    <th>Collection Address</th>
                                                </tr>
                                                <tr>
                                                    <td><?=$order->collection_from?></td>
                                                </tr>
                                            <?php else: ?>
                                                <tr>
                                                    <th>Walk-in Address</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php
                                                            foreach(explode('@', $order->address) as $val):
                                                                echo $val;
                                                                echo '<br>';
                                                            endforeach;
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="sm">
                                        <tbody>
                                            <tr>
                                                <th>Customer Phone</th>
                                            </tr>
                                            <tr>
                                                <td><?=$order->mem_phone?></td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <?php if($order->pick_and_drop_service == '1'): ?>
                                                <tr>
                                                    <th>Delivery Address</th>
                                                </tr>
                                                <tr>
                                                    <td><?=$order->delivery_to?></td>
                                                </tr>
                                            <?php else: ?>
                                                <tr>
                                                    <th>Customer Notes</th>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                            <?php endif;?>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="sm">
                                        <tbody>
                                            <tr>
                                                <th>Customer Email</th>
                                            </tr>
                                            <tr>
                                                <td><?=$order->mem_email?></td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <?php if($order->pick_and_drop_service == '1'): ?>
                                                <tr>
                                                    <th>Customer Notes</th>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <h4>Order Summary - Invoice</h4>
                    <div class="itemRow flex">
                        <div class="col col1">
                            <table class="sm pb data_list">
                                <thead>
                                    <tr>
                                        <th>Items</th>
                                        <th>Service</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $services_total = 0;
                                    foreach($order_detail as $key => $row):
                                        $service = get_sub_service($row->sub_service_id, $order->vendor_id);
                                        $services_total += $row->sub_service_price*$row->quantity;
                                    ?>
                                        <tr>
                                            <td><?=$service->name?></td>
                                            <td><?=$service->service_name?></td>
                                            <td><?=$row->quantity?></td>
                                            <td>£<?=price_format($row->sub_service_price)?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td class="color">£<?=price_format($services_total)?></td>
                                    </tr>
                                    <?php if($order->pick_and_drop_service == '1'): ?>
                                        <tr>
                                            <td colspan="3" class="color">Pickup & Delivery Charges (x2 of both sides)</td>
                                            <td>£<?=price_format($order->pick_and_drop_charges)?></td>
                                        </tr>
                                    <?php endif; ?>
                                    <tr>
                                        <th colspan="3" class="color">Estimated Total</th>
                                        <th>£<?=price_format($services_total+$order->pick_and_drop_charges)?></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="col col2">
                            <table class="sm">
                                <tbody>
                                    <?php if($order->pick_and_drop_service == '1'): ?>
                                        <tr>
                                            <th>Collection Date:</th>
                                            <td><?=date_picker_format_date($order->collection_date, 'D, d M Y', false)?></td>
                                        </tr>
                                        <tr>
                                            <th>Collection Time:</th>
                                            <td><?=$order->collection_time?></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <th>Delivery Date:</th>
                                            <td><?=date_picker_format_date($order->delivery_date, 'D, d M Y', false)?></td>
                                        </tr>
                                        <tr>
                                            <th>Delivery Time:</th>
                                            <td><?=$order->delivery_time?></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <th colspan="2"><?=$order->drop_type?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th>Drop Off Date:</th>
                                            <td><?=date_picker_format_date($order->delivery_date, 'D, d M Y', false)?></td>
                                        </tr>
                                        <tr>
                                            <th>Drop Off Time:</th>
                                            <td><?=$order->delivery_time?></td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <div class="br"></div>
                            <?php if($order->pick_and_drop_service == '1'): ?>
                                <div class="icon deliverIcon"><img src="<?= base_url() ?>assets/images/vector-wait.svg" alt=""></div>
                            <?php endif; ?>
                            <div class="bTn formBtn">
                                <button type="button" class="webBtn mdBtn icoBtn popBtn" data-popup="amend-invoice"><img src="<?= base_url() ?>assets/images/icon-price-list.svg" alt=""> Amend Invoice</button>
                            </div>
                            <div class="popup sm" data-popup="amend-invoice">
                                <div class="tableDv">
                                    <div class="tableCell">
                                        <div class="contain">
                                            <div class="_inner">
                                                <div class="crosBtn"></div>
                                                <h3>Amend Invoice</h3>
                                                <form action="" method="post">
                                                    <div class="txtGrp">
                                                        <label for="">Title</label>
                                                        <input type="text" name="" id="" class="txtBox">
                                                    </div>
                                                    <div class="txtGrp">
                                                        <label for="">Quantity</label>
                                                        <input type="text" name="" id="" class="txtBox">
                                                    </div>
                                                    <div class="txtGrp">
                                                        <label for="">Price</label>
                                                        <input type="text" name="" id="" class="txtBox">
                                                    </div>
                                                    <div class="bTn formBtn text-center">
                                                        <button type="submit" class="webBtn">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <hr>
                    <div class="txtGrp">
                        <label for="">Comments</label>
                        <textarea name="" id="" class="txtBox"></textarea>
                    </div> -->
                </div>
                <div class="blk text-center">
                    <p>When you have completed the job, please mark it as done.</p>
                    <div class="bTn">
                        <button type="button" class="webBtn popBtn" data-popup="mark-complete">Yes it's Done</button>
                    </div>
                </div>
            </div>
            <div class="popup" data-popup="mark-complete">
                <div class="tableDv">
                    <div class="tableCell">
                        <div class="contain">
                            <div class="_inner">
                                <div class="crosBtn"></div>
                                <h4>You have complete the job</h4>
                                <form action="" method="post">
                                    <div class="txtGrp">
                                        <label for="" class="move">Order Photo</label>
                                        <button type="button" class="txtBox uploadImg" data-upload="bag_pic" data-text="Choose file"></button>
                                        <input type="file" name="" id="" class="uploadFile" data-upload="bag_pic">
                                    </div>
                                    <div class="txtGrp">
                                        <label for="">Comments</label>
                                        <textarea name="" id="" class="txtBox"></textarea>
                                    </div>
                                    <div class="bTn text-center"><button type="submit" class="webBtn">Submit</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- orders -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>