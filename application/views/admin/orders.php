<?php if ($this->uri->segment(3) == 'detail'): ?>
    <?= showMsg(); ?>
    <?= getBredcrum(ADMIN, array('#' => 'Product Orders Management')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="fa fa-bars"></i> Order <strong>Detail</strong></h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?= site_url(ADMIN . '/orders'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>
        </div>
    </div>
    <div>
        <hr>
        <div class="row col-md-12">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Order Number</th>
                        <td><?= num_size($row->id);?></td>
                        
                        <th>Status</th>
                        <td><?= get_order_status($row->status);?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><b><?= $row->fname.' '.$row->lname; ?></b></td>
                        <th>Date</th>
                        <td><?= format_date($row->date, 'M d, Y h:i:s a');?></td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td><?= $row->email?></td>
                        <th>Phone</th>
                        <td><?= $row->phone?></td>
                    <tr>
                        <th>City</th>
                        <td><?= $row->city?></td>
                        <th>Zip Code</th>
                        <td><?= $row->zip?></td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td><?= $row->country?></td>
                        <th>Company</th>
                        <td><?= $row->company?></td>
                    </tr>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td colspan="3"><?= $row->address?></td>
                    </tr>
                </tbody>
            </table>

            <hr>
            <h3><i class="fa fa-shopping-cart"></i> Order Products</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <!-- <th>Size</th>
                        <th>Color</th> -->
                        <th>Quantity</th>
                        <th class="text-right">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $gtotal = 0?>
                    <?php foreach ($row->products as $key => $pro): ?>
                        <?php
                        $total = floatval($pro->qty*$pro->price);
                        $gtotal += $total;
                        ?>
                        <tr>
                            <td><?= $key+1?></td>
                            <td>
                                <img src="<?= get_image_src($pro->image, 150); ?>" alt="" height="40">
                                <a href="<?= site_url(ADMIN.'/products/manage/'.$pro->p_id); ?>" target="_blank"><b><?= $pro->title; ?></b></a>

                            </td>
                            <!-- <td><?= ucfirst($pro->size)?></td>
                            <td><?= $pro->color?></td> -->
                            <td><?= $pro->qty?></td>
                            <td class="text-right"><?= format_amount($total)?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3" class="text-right bold"> Total</th>
                        <td class="text-right"><b><?= format_amount($gtotal)?></b></td>
                    </tr>
                    <?php if (!empty($row->discount_code)): ?>
                        <tr>
                            <th colspan="3" class="text-right bold">Discount code (<?= $row->discount_code?>)</th>
                            <td class="text-right"><b><?= format_amount($row->discount_amount)?></b></td>
                        </tr>
                    <?php endif ?>
                    <tr>
                        <th colspan="3" class="text-right bold">Shipping Fee</th>
                        <td class="text-right"><b><?= empty($adminsite_setting->site_shipping_fee) ? "Free" : format_amount( $adminsite_setting->site_shipping_fee)?></b></td>
                    </tr>
                    <tr>
                        <th colspan="3" class="text-right bold">Grand Total</th>
                        <td class="text-right"><b><?= format_amount($row->total_price)?></b></td>
                    </tr>
                </tfoot>
            </table>

            <hr>
            <h3><i class="fa fa-truck"></i> Shipping Detail</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Contact Person</th>
                        <td><?= $row->ship_name?></td>
                        <th>Contact Phone</th>
                        <td><?= $row->ship_phone?></td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td><?= $row->ship_country?></td>
                        <th>City</th>
                        <td><?= $row->ship_city?></td>
                    </tr>
                    <tr>
                        <th>Zip Code</th>
                        <td><?= $row->ship_zip?></td>
                        <th>Address</th>
                        <td><?= $row->ship_address?></td>
                    </tr>
                </tbody>
            </table>

            <form action=""  role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-md-3">
                        <label class="control-label"> Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="0" <?php
                            if (isset($row->status) && '0' == $row->status) {
                                echo 'selected';
                            }
                            ?>>Pending</option>
                            <option value="1" <?php
                            if (isset($row->status) && '1' == $row->status) {
                                echo 'selected';
                            }
                            ?>>Complete</option>
                            <option value="2" <?php
                            if (isset($row->status) && '2' == $row->status) {
                                echo 'selected';
                            }
                            ?>>Cancelled</option>
                        </select>
                    </div>
                    <!-- <div class="col-md-9">
                        <label class="control-label" for="shipping_msg"> Shipping Message</label>
                        <input type="text" name="shipping_msg" id="shipping_msg" value="<?php if (isset($row->shipping_msg)) echo $row->shipping_msg; ?>" class="form-control">
                    </div> -->
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">                
                    <hr class="hr-short">
                    <div class="form-group text-right">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php else: ?>
    <?= showMsg(); ?>
    <?= getBredcrum(ADMIN, array('#' => 'Product Orders Management')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-12">
            <h2 class="no-margin"><i class="entypo-list"></i> Manage <?php if ($this->uri->segment(4) > 0): ?><strong>" <?php echo ucwords($member_row->mem_fname.' '.$member_row->mem_lname); ?> "</strong> <?php endif; ?>Orders</h2>
        </div>
    </div>
    <table class="table table-bordered datatable" id="table-1">
        <thead>
            <tr>
                <th width="5%" class="text-center">Sr#</th>
                <th width="8%" class="text-center">Order ID</th>
                <th>Customer Name</th>
                <th>Amount</th>
                <th>Date</th>
                <th width="5%">Status</th>
                <th width="12%" class="text-center">Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($rows) > 0): $count = 0; ?>
                <?php foreach ($rows as $row): ?>
                    <tr class="odd gradeX">
                        <td class="text-center"><?= ++$count; ?></td>
                        <td class="text-center"><?= num_size($row->id); ?></td>
                        <td><b><?= format_name($row->fname, $row->lname) ?></b></td>
                        <td><?= format_amount($row->product_total-$row->discount_amount+$row->tax_amount+$row->shipping_fee)?></td>
                        <td><?= format_date($row->order_date,'M d, Y h:i:s a'); ?></td>
                        <td><?= get_order_status($row->status)?></td>
                        <td class="text-center">
                            <a href="<?= site_url(ADMIN.'/orders/detail/'.$row->id); ?>" class="btn btn-primary btn-sm">View</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
<?php endif; ?>
<script type="text/javascript">
    (function($){
        $(function(){

        })
    }(jQuery))
</script>