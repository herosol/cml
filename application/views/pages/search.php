<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master');?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header');?>
    <main common srch>


        <section id="sBanner">
            <div class="contain">
                <div class="content">
                    <h2 class="heading">Quotes</h2>
                    <p>Deleniti iste earum sed est distinctio corporis dolore autem, omnis facere amet blanditiis velit!</p>
                </div>
            </div>
            <div class="image"><img src="<?= base_url() ?>assets/images/illustration_promotion.svg" alt=""></div>
        </section>
        <!-- sBanner -->


        <section id="srch">
            <div class="contain">
                <h2 class="heading text-center">Best Deals in your Area</h2>
                <div class="srchBlk">
                    <form action="" method="post" id="formPlaceOrder" class="frmAjax" autocomplete="off">
                    <div class="inside">
                        <div class="icoBlk">
                            <div class="icon"><img src="<?= get_site_image_src("members", $vendor->mem_image, ''); ?>" alt=""></div>
                            <h6><?=$vendor->mem_fname.' '.$vendor->mem_lname?></h6>
                            <div class="rateYo" data-rateyo-rating="<?=get_mem_avg_rating($vendor->mem_id)?>"></div>
                            <small><?=$miles?> Miles Away</small>
                            <?php if($vendor->mem_company_pickdrop == 'yes'): ?>
                                <div class="fig"><img src="<?=base_url()?>assets/images/vector-wait.svg" alt=""></div>
                                <p class="small">Pickup & Delivery Service Available</p>    
                                <div class="toggleBlk">
                                    <strong>Use Service</strong>
                                    <div class="switchBtn">
                                        <input type="checkbox" name="use_pickdrop" id="usePickAndDropService">
                                        <em></em>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="txt">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Services</th>
                                        <th width="5%">Price</th>
                                    </tr>
                                    <?php
                                    $estimated_amount = 0; 
                                    foreach($services as $key => $value):
                                        $row = sub_service_price($value->id, $mem_id);
                                        $estimated_amount += $row->price;
                                    ?>
                                        <tr>
                                            <td><?= $value->name ?></td>
                                            <td>£<?= $row->price ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td></td>
                                        <td class="color">£<?=price_format($estimated_amount)?></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="hidden pickdrop_charges">
                                        <td class="color">Pickup & Delivery Charges (x2 of both sides)</td>
                                        <td>£<?= $vendor->mem_charges_per_miles .'x2 = £'.($vendor->mem_charges_per_miles*2) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Minimum Order</td>
                                        <td>£<?= price_format($vendor->mem_charges_min_order) ?></td>
                                    </tr>
                                    <tr class="hidden">
                                        <td class="color">Minimum Order Fee</td>
                                        <td>£0.50</td>
                                    </tr>
                                    <tr>
                                        <th class="color">Estimated Total</th>
                                        <th id="estimated-total" data-total="<?=price_format($estimated_amount)?>">£<?=price_format($estimated_amount)?></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="side">
                            
                                <?php if($vendor->mem_company_pickdrop == 'yes' && $vendor->mem_company_walkin_facility == 'yes'): ?>
                                    <div class="txtGrp" id="businessAdress">
                                        <p><?= $vendor->mem_business_address ?> <br> <?= $vendor->mem_business_city ?> <br> <?= $vendor->mem_business_zip ?></p>
                                    </div>
                                    <div id="collectionArea" class="hidden">
                                        <h6>Collection</h6>
                                        <div class="formRow row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                                <div class="txtGrp">
                                                    <label for="collection_date">Date</label>
                                                    <input type="text" name="collection_date" id="collection_date" class="txtBox datepickerWithDisabledDAys" readonly onchange="fetchTime(this.value, '<?=$mem_id?>', 'collection_time')">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                                <div class="txtGrp">
                                                    <label for="collection_time" class="move">Time</label>
                                                    <select name="collection_time" id="collection_time" class="txtBox">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php elseif($vendor->mem_company_pickdrop == 'yes'): ?>
                                    <div id="collectionArea" class="hidden">
                                        <h6>Collection</h6>
                                        <div class="formRow row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                                <div class="txtGrp">
                                                    <label for="collection_date">Date</label>
                                                    <input type="text" name="collection_date" id="collection_date" class="txtBox datepickerWithDisabledDAys" readonly onchange="fetchTime(this.value, '<?=$mem_id?>', 'collection_time')">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                                <div class="txtGrp">
                                                    <label for="collection_time" class="move">Time</label>
                                                    <select name="collection_time" id="collection_time" class="txtBox">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php elseif($vendor->mem_company_walkin_facility == 'yes'): ?>
                                    <div class="txtGrp" id="businessAdress">
                                        <p><?= $vendor->mem_business_address ?> <br> <?= $vendor->mem_business_city ?> <br> <?= $vendor->mem_business_zip ?></p>
                                    </div>
                                <?php endif; ?>
                                <h6>Drop off</h6>
                                <input type="hidden" name="dropoffAddress" value="<?= $vendor->mem_business_address.'@'.$vendor->mem_business_city.'@'.$vendor->mem_business_zip ?>" >
                                <div class="formRow row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="delivery_date">Date</label>
                                            <input type="text" name="delivery_date" id="delivery_date" class="txtBox datepickerWithDisabledDAys" readonly onchange="fetchTime(this.value, '<?=$mem_id?>', 'delivery_time')">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="delivery_time" class="move">Time</label>
                                            <select name="delivery_time" id="delivery_time" class="txtBox">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <?php if(empty($this->session->mem_id)): ?>
                                    <div class="bTn">
                                        <button type="submit" class="webBtn blockBtn"><i class="spinner hidden"></i>Place Order</button>
                                    </div>
                                <?php
                                else:
                                    if($this->session->mem_type == 'buyer'):
                                ?>
                                    <div class="bTn">
                                        <button type="submit" class="webBtn blockBtn"><i class="spinner hidden"></i>Place Order</button>
                                    </div>
                                <?php
                                    endif;
                                endif; ?>
                                <br>
                                <div class="alertMsg" style="display:none"></div>
                            </div>
                        </div>
                        <div class="btm">
                            <small class="red-color">Disclaimer: Price shown is the estimated cost I Hate Ironing has a minimum order value of $20 | $5 no show/cancellation fee.</small>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- srch -->
        <script>
            $(window).on('load', function() {
                let disableDays = <?php echo json_encode($cdays); ?>;
                console.log(disableDays);
                $('.datepickerWithDisabledDAys').datepicker({
                    format: 'mm-dd-yyyy',
                    todayHighlight: true,
                    multidateSeparator: ',  ',
                    templates: {
                        leftArrow: '<i class="fi-arrow-left"></i>',
                        rightArrow: '<i class="fi-arrow-right"></i>'
                    },
                    minDate: 0,
                    daysOfWeekDisabled: disableDays
                });
            });

            $(document).on('click', '#usePickAndDropService', (e) =>{
                let pickdrop_charges = $('.pickdrop_charges');
                let services_total = $('#estimated-total').data('total');
                let pcharges = '<?=$vendor->mem_charges_per_miles*2?>';
                if($(e.target).is(':checked'))
                {
                    $('#businessAdress').addClass('hidden');
                    $('#collectionArea').removeClass('hidden');
                    pickdrop_charges.removeClass('hidden');
                    $('#estimated-total').text(`£${(parseFloat(services_total)+parseFloat(pcharges)).toFixed(2)}`);
                }
                else
                {
                    $('#businessAdress').removeClass('hidden');
                    $('#collectionArea').addClass('hidden');
                    pickdrop_charges.addClass('hidden');
                    $('#estimated-total').text(`£${services_total}`);
                }
            });

        </script>
    </main>
    <?php $this->load->view('includes/footer');?></body>

</html>