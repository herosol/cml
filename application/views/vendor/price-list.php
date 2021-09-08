<!doctype html>
<html>

<head>
    <title>Price List — Compare My Laundry</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-vendor'); ?>
    <main dash pricing>
        <?php $this->load->view('includes/sidebar-vendor'); ?>


        <section id="pricing">
            <div class="contain-fluid">
                <div class="blk topBlk">
                    <div class="ico"><img src="<?= get_site_image_src("members", $mem_data->mem_image, ''); ?>" alt=""></div>
                    <div class="txt">
                        <h3><span class="regular">Welcome,</span> Dear, <?=$mem_data->mem_fname.' '.$mem_data->mem_lname?>!<span class="regular">Nice to see you again.</span></h3>
                    </div>
                    <div class="toggleBlk">
                        <div class="switchBtn hidden">
                            <input type="checkbox" name="" id="" checked>
                            <em></em>
                            <small></small>
                        </div>
                    </div>
                </div>
                <ul class="tabLst text-center">
                    <li class="active">
                        <a data-toggle="tab" href="#WashDry">
                            <img src="<?= get_site_image_src("services", $wash_and_dry->image, ''); ?>" alt="">
                            <em><?=$wash_and_dry->name?></em>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#WashIron">
                            <img src="<?= get_site_image_src("services", $wash_and_iron->image, ''); ?>" alt="">
                            <em><?=$wash_and_iron->name?></em>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#DryCleaning">
                            <img src="<?= get_site_image_src("services", $dry_cleaning->image, ''); ?>" alt="">
                            <em><?=$dry_cleaning->name?></em>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#IronOnly">
                            <img src="<?= get_site_image_src("services", $iron_only->image, ''); ?>" alt="">
                            <em><?=$iron_only->name?></em>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#BulkyItems">
                            <img src="<?= get_site_image_src("services", $buly_items->image, ''); ?>" alt="">
                            <em><?=$buly_items->name?></em>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#Deals">
                            <img src="<?= get_site_image_src("services", $deals->image, ''); ?>" alt="">
                            <em><?=$deals->name?></em>
                        </a>
                    </li>
                </ul>
                <form action="" method="post" id="vendorPriceList" class="frmAjax">
                    <div class="bTn text-right">
                        <button type="submit" class="webBtn"><i class="spinner hidden"></i>Save</button>
                    </div>
                    <br>
                    <div class="alertMsg" style="display:none"></div>
                    <div class="blk tab-content mt-1">
                        <div id="WashDry" class="tab-pane fade in active">
                            <div class="serveBlk">
                                <div class="icon"><img src="<?= get_site_image_src("services", $wash_and_dry->image, ''); ?>" alt=""></div>
                                <div class="txt">
                                    <h4><?=$wash_and_dry->name?></h4>
                                    <p><?=$wash_and_dry->details?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="serveBlk">
                                <div class="txt">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Item</th>
                                                <th>Price</th>
                                            </tr>
                                            <?php
                                            foreach(get_sub_services($wash_and_dry->id) as $key => $sub_service):
                                                $price = sub_service_price($sub_service->id, $this->session->mem_id);
                                            ?>
                                                <tr>
                                                    <td>
                                                        <div class="lblBtn">
                                                            <label for="washAndDry<?=$key?>"><?=$sub_service->name?></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="sub_service[<?=$sub_service->id?>][price]" class="txtBox" <?=count($price) > 0 ? 'value="'.$price->price.'"' : 'placeholder="0.00"'?>>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="DryCleaning" class="tab-pane fade">
                            <div class="serveBlk">
                                <div class="icon"><img src="<?= get_site_image_src("services", $dry_cleaning->image, ''); ?>" alt=""></div>
                                <div class="txt">
                                    <h4><?=$dry_cleaning->name?></h4>
                                    <p><?=$dry_cleaning->details?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="serveBlk">
                                <div class="txt">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Item</th>
                                                <th>Price</th>
                                            </tr>
                                            <?php
                                            foreach(get_sub_services($dry_cleaning->id) as $key => $sub_service):
                                                $price = sub_service_price($sub_service->id, $this->session->mem_id);
                                            ?>
                                                <tr>
                                                    <td><?=$sub_service->name?></td>
                                                    <td><input type="text" name="sub_service[<?=$sub_service->id?>][price]" class="txtBox" <?=count($price) > 0 ? 'value="'.$price->price.'"' : 'placeholder="0.00"'?>></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="WashIron" class="tab-pane fade">
                            <div class="serveBlk">
                                <div class="icon"><img src="<?= get_site_image_src("services", $wash_and_iron->image, ''); ?>" alt=""></div>
                                <div class="txt">
                                    <h4><?=$wash_and_iron->name?></h4>
                                    <p><?=$wash_and_iron->details?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="serveBlk">
                                <div class="txt">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Item</th>
                                                <th>Price</th>
                                            </tr>
                                            <?php
                                            foreach(get_sub_services($wash_and_iron->id) as $key => $sub_service):
                                                $price = sub_service_price($sub_service->id, $this->session->mem_id);
                                            ?>
                                                <tr>
                                                    <td><?=$sub_service->name?></td>
                                                    <td><input type="text" name="sub_service[<?=$sub_service->id?>][price]" class="txtBox" <?=count($price) > 0 ? 'value="'.$price->price.'"' : 'placeholder="0.00"'?>></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="IronOnly" class="tab-pane fade">
                            <div class="serveBlk">
                                <div class="icon"><img src="<?= get_site_image_src("services", $iron_only->image, ''); ?>" alt=""></div>
                                <div class="txt">
                                    <h4><?=$iron_only->name?></h4>
                                    <p><?=$iron_only->details?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="serveBlk">
                                <div class="txt">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Item</th>
                                                <th>Price</th>
                                            </tr>
                                            <?php
                                            foreach(get_sub_services($iron_only->id) as $key => $sub_service):
                                                $price = sub_service_price($sub_service->id, $this->session->mem_id);
                                            ?>
                                                <tr>
                                                    <td><?=$sub_service->name?></td>
                                                    <td><input type="text" name="sub_service[<?=$sub_service->id?>][price]" class="txtBox" <?=count($price) > 0 ? 'value="'.$price->price.'"' : 'placeholder="0.00"'?>></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="BulkyItems" class="tab-pane fade">
                            <div class="serveBlk">
                                <div class="icon"><img src="<?= get_site_image_src("services", $buly_items->image, ''); ?>" alt=""></div>
                                <div class="txt">
                                    <h4><?=$buly_items->name?></h4>
                                    <p><?=$buly_items->details?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="serveBlk">
                                <div class="txt">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Item</th>
                                                <th>Price</th>
                                            </tr>
                                            <?php
                                            foreach(get_sub_services($buly_items->id) as $key => $sub_service):
                                                $price = sub_service_price($sub_service->id, $this->session->mem_id);
                                            ?>
                                                <tr>
                                                    <td><?=$sub_service->name?></td>
                                                    <td><input type="text" name="sub_service[<?=$sub_service->id?>][price]" class="txtBox" <?=count($price) > 0 ? 'value="'.$price->price.'"' : 'placeholder="0.00"'?>></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="Deals" class="tab-pane fade">
                            <div class="serveBlk">
                                <div class="icon"><img src="<?= get_site_image_src("services", $deals->image, ''); ?>" alt=""></div>
                                <div class="txt">
                                    <h4><?=$deals->name?></h4>
                                    <p><?=$deals->details?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="serveBlk">
                                <div class="txt">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                            </tr>
                                            <?php
                                            foreach(get_sub_services($deals->id) as $key => $sub_service):
                                                $price = sub_service_price($sub_service->id, $this->session->mem_id);
                                            ?>
                                                <tr>
                                                    <td><?=$sub_service->name?></td>
                                                    <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                                    <td><input type="text" name="sub_service[<?=$sub_service->id?>][price]" class="txtBox" <?=count($price) > 0 ? 'value="'.$price->price.'"' : 'placeholder="0.00"'?>></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- pricing -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>