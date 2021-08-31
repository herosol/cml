<!doctype html>
<html>

<head>
    <title>Order Detail — Compare My Laundry</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-buyer'); ?>
    <main dash account>
        <?php $this->load->view('includes/sidebar-buyer'); ?>


        <section id="orders">
            <div class="contain-fluid">
                <div class="blk topBlk">
                    <div class="ico"><img src="<?= get_site_image_src("members", $mem_data->mem_image, ''); ?>" alt=""></div>
                    <div class="txt">
                        <h3><span class="regular">Welcome,</span> Dear, <?=$mem_data->mem_fname.' '.$mem_data->mem_lname?>!<span class="regular">Nice to see you again.</span></h3>
                    </div>
                    <div class="bTn">
                        <a href="<?= base_url() ?>buyer/orders" class="webBtn mdBtn simpleBtn">View Orders</a>
                    </div>
                </div>
                <div class="blk jobBlk">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Order No:</strong>
                                    <em class="red-color">#<?= num_size($order->order_id) ?></em>
                                </td>
                                <td width="5%">
                                    <div class="bTn">
                                        <span class="webBtn mdBtn blockBtn processed">Process</span>
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
                                                <th>Name</th>
                                            </tr>
                                            <tr>
                                                <td>Franc Mathurin</td>
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
                                                <th>Phone</th>
                                            </tr>
                                            <tr>
                                                <td>+987542621475</td>
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
                                                    <th>Notes</th>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="sm">
                                        <tbody>
                                            <tr>
                                                <th>Email</th>
                                            </tr>
                                            <tr>
                                                <td>Red@email.com</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <?php if($order->pick_and_drop_service == '1'): ?>
                                                <tr>
                                                    <th>Notes</th>
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
                                        <th>Unit Price</th>
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
                                            <td>£<?=price_format($row->sub_service_price*$row->quantity)?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td class="color">£<?=price_format($services_total)?></td>
                                    </tr>
                                    <?php if($order->pick_and_drop_service == '1'): ?>
                                        <?php if($order->free_pick_and_drop_service == '0'): ?>
                                            <tr>
                                                <td colspan="4" class="color">Pickup & Delivery Charges (x2 of both sides)</td>
                                                <td>£<?=price_format($order->pick_and_drop_charges)?></td>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="4" class="color">Pickup & Delivery Charges (x2 of both sides)</td>
                                                <td>Free</td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endif; ?>
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
                            <div class="alertMsg" style="display:none"></div>
                        </div>
                    </div>
                    <!-- <hr>
                    <div class="txtGrp">
                        <label for="">Comments</label>
                        <textarea name="" id="" class="txtBox"></textarea>
                    </div> -->
                    <hr>
                    <?php if(!empty($delivery_proof)){ ?>
                        <div class="doneBlk">
                            <div class="image"><img src="<?= get_site_image_src("orders", $delivery_proof->proof_image); ?>" alt=""></div>
                            <div class="txt">
                                <h5>Comments</h5>
                                <p><?=$delivery_proof->proof_comment?></p>
                            </div>
                        </div>
                    </div>
                    <div class="blk text-center">
                        <p>You've received your order, please accept or decline.</p>
                        <div class="bTn">
                            <a href="<?= base_url('buyer/reject/').doEncode($delivery_proof->proof_id); ?>" type="button" class="webBtn lightBtn">Decline</a>
                            <button type="button" class="webBtn popBtn" data-popup="leave-review">Accept</button>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="popup" data-popup="leave-review">
                <div class="tableDv">
                    <div class="tableCell">
                        <div class="contain">
                            <div class="_inner">
                                <div class="crosBtn"></div>
                                <h4>Leave Review</h4>
                                <form action="<?= base_url('buyer/accept/').doEncode($delivery_proof->proof_id); ?>" method="post">
                                    <div class="txtGrp">
                                        <div class="rateYo" data-rateyo-star-width="20px" data-rateyo-read-only="false"></div>
                                    </div>
                                    <div class="txtGrp">
                                        <label for="">Write a little description</label>
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