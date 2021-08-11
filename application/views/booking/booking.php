<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master');?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header');?>
    <main common booking>


        <section id="sBanner">
            <div class="contain">
                <div class="content">
                    <!-- <div class="icoBlk">
                        <div class="icon"><img src="<?= $base_url ?>images/iron_logo.svg" alt=""></div>
                        <div class="rateYo"></div>
                    </div> -->
                    <h2 class="heading"><?= $content['heading'] ?></h2>
                    <p><?= $content['header_detail'] ?></p>
                </div>
            </div>
            <div class="image"><img src="<?= getImageSrc(UPLOAD_PATH."images/", $content['image1'] )?>" alt=""></div>
        </section>
        <!-- sBanner -->


        <section id="booking">
            <div class="contain">
                <ul class="smryLst flex text-center">
                    <li>
                        <div class="blk">
                            <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH."images/", $content['image2'] )?>" alt=""></div>
                            <div class="txt">
                                <h6><?= $content['step1_title'] ?></h6>
                                <p class="small"><?= $content['step1_desc'] ?></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="blk">
                            <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH."images/", $content['image3'] )?>" alt=""></div>
                            <div class="txt">
                                <h6><?= $content['step2_title'] ?></h6>
                                <p class="small">The Broadway, 341-343 Bowes Road, LONDON, N11 1AA</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="blk">
                            <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH."images/", $content['image4'] )?>" alt=""></div>
                            <div class="txt">
                                <h6><?= $content['step3_title'] ?></h6>
                                <p class="small">Today 12:00-15:00</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="blk">
                            <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH."images/", $content['image5'] )?>" alt=""></div>
                            <div class="txt">
                                <h6><?= $content['step4_title'] ?></h6>
                                <p class="small">Dry Cleaning, Ironing</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="blk">
                            <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH."images/", $content['image6'] )?>" alt=""></div>
                            <div class="txt">
                                <h6><?= $content['step5_title'] ?></h6>
                                <p class="small">Credit Card</p>
                            </div>
                        </div>
                    </li>
                    <li class="hidden">
                        <div class="blk">
                            <div class="icon"><img src="<?= $base_url ?>images/icon-credit-card.svg" alt=""></div>
                            <div class="txt">
                                <h6><?= $content['heading'] ?></h6>
                                <p class="small"><?= $content['instruction3_heading'] ?></p>
                            </div>
                        </div>
                    </li>
                </ul>
                <form action="" method="post">
                    <fieldset>
                        <h3 class="heading"><?= $content['step1_heading'] ?></h3>
                        <ul class="stepLst flex text-center">
                            <li>
                                <div class="inner">
                                    <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH."images/", $content['image7'] )?>" alt=""></div>
                                    <div class="txt">
                                        <h5><?= $content['instruction1_heading'] ?></h5>
                                        <p><?= $content['instruction1_detail'] ?></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH."images/", $content['image8'] )?>" alt=""></div>
                                    <div class="txt">
                                        <h5><?= $content['instruction2_heading'] ?></h5>
                                        <p><?= $content['instruction2_detail'] ?></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH."images/", $content['image9'] )?>" alt=""></div>
                                    <div class="txt">
                                        <h5><?= $content['instruction3_heading'] ?></h5>
                                        <p><?= $content['instruction3_detail'] ?></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="bTn formBtn text-center">
                            <button type="button" class="webBtn nextBtn">Continue</button>
                        </div>
                    </fieldset>

                    
                    <fieldset>
                        <?php if(empty($this->session->mem_id)): ?>
                            <h3 class="heading">Account Info</h3>
                            <div class="blk">
                                <p>Already have an account? <a href="javascript:void(0)" class="popBtn" data-popup="signin">Sign in here</a></p>
                                <div class="formRow row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="fname">First Name</label>
                                            <input type="text" name="" id="" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="lname">Last Name</label>
                                            <input type="text" name="" id="" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="email">Phone Number</label>
                                            <input type="email" name="" id="" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="email">Email Address</label>
                                            <input type="email" name="" id="" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp pasDv">
                                            <label for="">Password</label>
                                            <input type="password" name="" id="" class="txtBox">
                                            <i class="icon-eye" id="eye"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp pasDv">
                                            <label for="">Confirm Password</label>
                                            <input type="password" name="" id="" class="txtBox">
                                            <i class="icon-eye" id="eye"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                        <div class="txtGrp">
                                            <div class="lblBtn">
                                                <input type="checkbox" name="notified" id="notified">
                                                <label for="notified">Keep me up to date on news and exclusive offers</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <h3 class="heading"><?= $content['step2_heading'] ?></h3>
                        <div class="blk">
                            <div class="_header">
                                <h4>Tell us about your location</h4>
                            </div>
                            <h6>Enter your Postcode</h6>
                            <div class="txtGrp">
                                <label for="zipcode">Enter Postcode</label>
                                <input type="text" class="txtBox" id="zipcode" value="<?=$zipcode?>" readonly>
                            </div>
                            <h6>Select your address</h6>
                            <div class="txtGrp">
                                <label for="" class="move">Address</label>
                                <select name="" id="" class="txtBox">
                                    <option value="">Select</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                </select>
                            </div>
                            <h6>Specify any extra address details</h6>
                            <div class="txtGrp">
                                <label for="">Apartment name, number, floor</label>
                                <input type="text" name="" id="" class="txtBox">
                            </div>
                            <h6>Address type</h6>
                            <div class="txtGrp">
                                <ul class="selectLst flex">
                                    <li>
                                        <div class="radioBtn">
                                            <input type="radio" name="address_type" id="address_type_home" checked>
                                            <div class="inner">
                                                <div class="icon"><img src="<?= base_url() ?>assets/images/vector-home.svg" alt=""></div>
                                                <div class="txt">
                                                    <p>Home</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radioBtn">
                                            <input type="radio" name="address_type" id="address_type_office">
                                            <div class="inner">
                                                <div class="icon"><img src="<?= base_url() ?>assets/images/vector-briefcase.svg" alt=""></div>
                                                <div class="txt">
                                                    <p>Office</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radioBtn">
                                            <input type="radio" name="address_type" id="address_type_hotel">
                                            <div class="inner">
                                                <div class="icon"><img src="<?= base_url() ?>assets/images/vector-hotel.svg" alt=""></div>
                                                <div class="txt">
                                                    <p>Hotel</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h4 class="heading"><?= $content['step2_map_heading'] ?></h4>
                        <div id="googleMap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d392466.27610655467!2d-105.23035500000002!3d39.781351!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c7e3e2c6216a7%3A0xa4b85252d6ea23a1!2sDenver%2C%20CO%2080210!5e0!3m2!1sen!2sus!4v1624361016615!5m2!1sen!2sus" width="100" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="bTn formBtn text-center">
                            <button type="button" class="webBtn labelBtn prevBtn">Back</button>
                            <button type="button" class="webBtn nextBtn">Continue</button>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h3 class="heading"><?= $content['step3_heading'] ?></h3>
                        <div class="blk">
                            <h4>Collection</h4>
                            <div class="formRow row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="">Date</label>
                                        <input type="text" name="" id="" class="txtBox datepicker">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="" class="move">Time</label>
                                        <select name="" id="" class="txtBox">
                                            <option value="">Select</option>
                                            <option value="">13:00 - 16:00</option>
                                            <option value="">14:00 - 17:00</option>
                                            <option value="">17:00 - 20:00</option>
                                            <option value="">18:00 - 21:00</option>
                                            <option value="">19:00 - 22:00</option>
                                            <option value="">13:00 - 15:00</option>
                                            <option value="">14:00 - 16:00</option>
                                            <option value="">15:00 - 17:00</option>
                                            <option value="">17:00 - 19:00</option>
                                            <option value="">18:00 - 20:00</option>
                                            <option value="">19:00 - 21:00</option>
                                            <option value="">20:00 - 22:00</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                    <div class="txtGrp">
                                        <label for="" class="move">Collects From</label>
                                        <select name="" id="" class="txtBox">
                                            <option value="">Select</option>
                                            <option value="">Driver collects from you</option>
                                            <option value="">Driver collects from outside</option>
                                            <option value="">Driver collects from reception/porter</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h4>Delivery</h4>
                            <div class="formRow row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="">Date</label>
                                        <input type="text" name="" id="" class="txtBox datepicker">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="" class="move">Time</label>
                                        <select name="" id="" class="txtBox">
                                            <option value="">Select</option>
                                            <option value="">13:00 - 16:00</option>
                                            <option value="">14:00 - 17:00</option>
                                            <option value="">17:00 - 20:00</option>
                                            <option value="">18:00 - 21:00</option>
                                            <option value="">19:00 - 22:00</option>
                                            <option value="">13:00 - 15:00</option>
                                            <option value="">14:00 - 16:00</option>
                                            <option value="">15:00 - 17:00</option>
                                            <option value="">17:00 - 19:00</option>
                                            <option value="">18:00 - 20:00</option>
                                            <option value="">19:00 - 21:00</option>
                                            <option value="">20:00 - 22:00</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                    <div class="txtGrp">
                                        <label for="" class="move">Collects Drops</label>
                                        <select name="" id="" class="txtBox">
                                            <option value="">Select</option>
                                            <option value="">Driver drops, rings & waits</option>
                                            <option value="">Driver drops, rings and goes</option>
                                            <option value="">Driver leaves bags at reception/porter</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h6>Collection or delivery instructions (optional)</h6>
                            <div class="txtGrp">
                                <label for="">Any special instructions</label>
                                <input type="text" name="" id="" class="txtBox">
                            </div>
                        </div>
                        <div class="bTn formBtn text-center">
                            <button type="button" class="webBtn labelBtn prevBtn">Back</button>
                            <button type="button" class="webBtn nextBtn">Continue</button>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h3 class="heading"><?= $content['step4_heading'] ?></h3>
                        <ul class="svcLst flex text-center">
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
                        <div class="smryMainBlk">
                            <div class="blk tab-content">
                                <div id="WashDry" class="tab-pane fade in active">
                                    <div class="serveBlk">
                                        <div class="icon"><img src="git add .<?= get_site_image_src("services", $wash_and_dry->image, ''); ?>" alt=""></div>
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
                                                        <th>Select</th>
                                                    </tr>
                                                    <?php
                                                    foreach(get_sub_services($wash_and_dry->id) as $key => $sub_service):
                                                        $row = sub_service_price($sub_service->id, $vendor_id);
                                                        if($row->price != '' && $row->price != '0' && $row->price != '0.00'):
                                                    ?>
                                                            <tr id="<?=$sub_service->id?>">
                                                                <td><?=$sub_service->name?></td>
                                                                <td>£<?=$row->price?></td>
                                                                <td><button type="button" id="<?=$sub_service->id?>" class="actBtn <?=service_selected_status($services, $sub_service->id)?> left" data-subservice-id="<?=$sub_service->id?>" data-price="<?=$row->price?>" data-name="<?=$sub_service->name?>"></button></td>
                                                            </tr>
                                                    <?php
                                                        endif;
                                                    endforeach;
                                                    ?>
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
                                                        <th>Select</th>
                                                    </tr>
                                                    <?php
                                                    foreach(get_sub_services($dry_cleaning->id) as $key => $sub_service):
                                                        $row = sub_service_price($sub_service->id, $vendor_id);
                                                        if($row->price != '' && $row->price != '0' && $row->price != '0.00'):
                                                    ?>
                                                            <tr id="<?=$sub_service->id?>">
                                                                <td><?=$sub_service->name?></td>
                                                                <td>£<?=$row->price?></td>
                                                                <td><button type="button" id="<?=$sub_service->id?>" class="actBtn <?=service_selected_status($services, $sub_service->id)?> left" data-subservice-id="<?=$sub_service->id?>" data-price="<?=$row->price?>" data-name="<?=$sub_service->name?>"></button></td>
                                                            </tr>
                                                    <?php
                                                        endif;
                                                    endforeach;
                                                    ?>
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
                                                        <th>Select</th>
                                                    </tr>
                                                    <?php
                                                    foreach(get_sub_services($wash_and_iron->id) as $key => $sub_service):
                                                        $row = sub_service_price($sub_service->id, $vendor_id);
                                                        if($row->price != '' && $row->price != '0' && $row->price != '0.00'):
                                                    ?>
                                                            <tr id="<?=$sub_service->id?>">
                                                                <td><?=$sub_service->name?></td>
                                                                <td>£<?=$row->price?></td>
                                                                <td><button type="button" id="<?=$sub_service->id?>" class="actBtn <?=service_selected_status($services, $sub_service->id)?> left" data-subservice-id="<?=$sub_service->id?>" data-price="<?=$row->price?>" data-name="<?=$sub_service->name?>"></button></td>
                                                            </tr>
                                                    <?php
                                                        endif;
                                                    endforeach;
                                                    ?>
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
                                                        <th>Select</th>
                                                    </tr>
                                                    <?php
                                                    foreach(get_sub_services($iron_only->id) as $key => $sub_service):
                                                        $row = sub_service_price($sub_service->id, $vendor_id);
                                                        if($row->price != '' && $row->price != '0' && $row->price != '0.00'):
                                                    ?>
                                                            <tr id="<?=$sub_service->id?>">
                                                                <td><?=$sub_service->name?></td>
                                                                <td>£<?=$row->price?></td>
                                                                <td><button type="button" id="<?=$sub_service->id?>" class="actBtn <?=service_selected_status($services, $sub_service->id)?> left" data-subservice-id="<?=$sub_service->id?>" data-price="<?=$row->price?>" data-name="<?=$sub_service->name?>"></button></td>
                                                            </tr>
                                                    <?php
                                                        endif;
                                                    endforeach;
                                                    ?>
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
                                                        <th>Select</th>
                                                    </tr>
                                                    <?php
                                                    foreach(get_sub_services($buly_items->id) as $key => $sub_service):
                                                        $row = sub_service_price($sub_service->id, $vendor_id);
                                                        if($row->price != '' && $row->price != '0' && $row->price != '0.00'):
                                                    ?>
                                                            <tr id="<?=$sub_service->id?>">
                                                                <td><?=$sub_service->name?></td>
                                                                <td>£<?=$row->price?></td>
                                                                <td><button type="button" id="<?=$sub_service->id?>" class="actBtn <?=service_selected_status($services, $sub_service->id)?> left" data-subservice-id="<?=$sub_service->id?>" data-price="<?=$row->price?>" data-name="<?=$sub_service->name?>"></button></td>
                                                            </tr>
                                                    <?php
                                                        endif;
                                                    endforeach;
                                                    ?>
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
                                                        <th>Select</th>
                                                    </tr>
                                                    <?php
                                                    foreach(get_sub_services($buly_items->id) as $key => $sub_service):
                                                        $row = sub_service_price($sub_service->id, $vendor_id);
                                                        if($row->price != '' && $row->price != '0' && $row->price != '0.00'):
                                                    ?>
                                                            <tr id="<?=$sub_service->id?>">
                                                                <td><?=$sub_service->name?></td>
                                                                <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                                                <td>£<?=$row->price?></td>
                                                                <td><button type="button" id="<?=$sub_service->id?>" class="actBtn <?=service_selected_status($services, $sub_service->id)?> left" data-subservice-id="<?=$sub_service->id?>" data-price="<?=$row->price?>" data-name="<?=$sub_service->name?>"></button></td>
                                                            </tr>
                                                    <?php
                                                        endif;
                                                    endforeach;
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blk smryBlk">
                                <div class="_header">
                                    <h5>Price Estimator</h5>
                                    <div class="bTn">
                                        <button type="reset" class="webBtn labelBtn">Reset</button>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis quas libero totam illo hic.</p>
                                <div class="serveBlk">
                                    <table class="sm pb data_list">
                                        <tbody id="selected_services">
                                            <?php
                                            foreach($services as $id):
                                                $row = get_sub_service($id, $vendor_id);

                                            ?>
                                                <tr data-id="<?=$row->id?>">
                                                    <td><?=$row->name?></td>
                                                    <input type="hidden" name="selected_service[]" value="<?=$row->id?>">
                                                    <td>
                                                        <div class="qtyBtn">
                                                            <a class="qtyMinus"></a>
                                                            <input type="text" name="qty[]" value="1" class="qty" data-price="<?=$row->price?>" data-id="<?=$row->id?>" readonly>
                                                            <a class="qtyPlus"></a>
                                                        </div>
                                                    </td>
                                                    <td id="price-<?=$row->id?>" >£<?=$row->price?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <div class="bTn txtGrp">
                                    <button type="button" class="webBtn blockBtn nextBtn">Continue order</button>
                                </div>
                                <p class="small">Please note that final price may vary and it will be calculated after the cleaning process.</p>
                            </div>
                        </div>
                        <div class="bTn formBtn text-center">
                            <button type="button" class="webBtn labelBtn prevBtn">Back</button>
                            <button type="button" class="webBtn nextBtn">Continue</button>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h3 class="heading"><?= $content['step5_heading'] ?></h3>
                        <div class="blk jobBlk">
                            <table class="mainTbl">
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class="sm">
                                                <tbody>
                                                    <tr>
                                                        <th>Customer Name</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Franc Mathurin</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Collection Address</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Scott H. Lewis, Director Hybrid House, LLC PO Box 48461.</td>
                                                    </tr>
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
                                                        <td>+987542621475</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Delivery Address</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Scott H. Lewis, Director Hybrid House, LLC PO Box 48461.</td>
                                                    </tr>
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
                                                        <td>johnwick87@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Customer Notes</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Nulla iste hic voluptatem. Laborum eveniet cumque adipisci sint nisi totam aut velit, perferendis vitae accusamus.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <h4>Order Summary</h4>
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
                                            <tr>
                                                <td>Shirt</td>
                                                <td>Wash & Iron</td>
                                                <td>2</td>
                                                <td>£2.50</td>
                                            </tr>
                                            <tr>
                                                <td>Dress</td>
                                                <td>Dry Cleaning</td>
                                                <td>3</td>
                                                <td>£3.00</td>
                                            </tr>
                                            <tr>
                                                <td>Trouser</td>
                                                <td>Wash</td>
                                                <td>2</td>
                                                <td>£2.50</td>
                                            </tr>
                                            <tr>
                                                <td>Outwear</td>
                                                <td>Wash & Iron</td>
                                                <td>4</td>
                                                <td>£2.50</td>
                                            </tr>
                                            <tr>
                                                <td>Cardigan</td>
                                                <td>Ironing</td>
                                                <td>2</td>
                                                <td>£2.50</td>
                                            </tr>
                                            <tr>
                                                <td>Shirt</td>
                                                <td>Wash & Iron</td>
                                                <td>2</td>
                                                <td>£2.50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col col2">
                                    <table class="sm">
                                        <tbody>
                                            <tr>
                                                <th>Collection Date:</th>
                                                <td>Tue, 21 Jan 2021</td>
                                            </tr>
                                            <tr>
                                                <th>Collection Time:</th>
                                                <td>11:00 am - 01:00 pm</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <th>Detrvery Date:</th>
                                                <td>Wed, 21 Jan 2021</td>
                                            </tr>
                                            <tr>
                                                <th>Delivery Time:</th>
                                                <td>11:00 am - 01:00 pm</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Driver drops, rings and waits</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="br"></div>
                            <div class="blk">
                                <h4>Contact information</h4>
                                <p>Already have an account? <a href="javascript:void(0)" class="popBtn" data-popup="signin">Sign in here</a></p>
                                <div class="formRow row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="fname">First Name</label>
                                            <input type="text" name="" id="" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="lname">Last Name</label>
                                            <input type="text" name="" id="" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="email">Phone Number</label>
                                            <input type="email" name="" id="" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="email">Email Address</label>
                                            <input type="email" name="" id="" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp pasDv">
                                            <label for="">Password</label>
                                            <input type="password" name="" id="" class="txtBox">
                                            <i class="icon-eye" id="eye"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp pasDv">
                                            <label for="">Confirm Password</label>
                                            <input type="password" name="" id="" class="txtBox">
                                            <i class="icon-eye" id="eye"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                        <div class="txtGrp">
                                            <div class="lblBtn">
                                                <input type="checkbox" name="notified" id="notified">
                                                <label for="notified">Keep me up to date on news and exclusive offers</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blk">
                                <h4>Payment</h4>
                                <p>All transactions are secure and encrypted.</p>
                                <div data-payment>
                                    <div class="lblBtn">
                                        <input type="radio" name="payment" id="credit" class="tglBlk" value="credit-card" checked="">
                                        <label for="credit">Credit card</label>
                                    </div>
                                    <div class="insideBlk active">
                                        <div class="row formRow">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                                <div class="txtGrp">
                                                    <label for="">Card Number</label>
                                                    <input type="text" name="" id="" class="txtBox">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                                <div class="txtGrp">
                                                    <label for="">Card Holder</label>
                                                    <input type="text" name="" id="" class="txtBox">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                <div class="txtGrp">
                                                    <label for="" class="move">Month</label>
                                                    <select name="" id="" class="txtBox">
                                                        <option value="">Select</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                <div class="txtGrp">
                                                    <label for="" class="move">Year</label>
                                                    <select name="" id="" class="txtBox">
                                                        <option value="">Select</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                        <option value="2030">2030</option>
                                                        <option value="2031">2031</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                <div class="txtGrp">
                                                    <label for="">CVC?</label>
                                                    <input type="text" name="" id="" class="txtBox">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="lblBtn">
                                        <input type="radio" name="payment" id="paypal" class="tglBlk" value="paypal">
                                        <label for="paypal">Paypal</label>
                                    </div>
                                    <div class="insideBlk">
                                        <div class="txtGrp">
                                            <label for="">PayPal Address</label>
                                            <input type="email" name="" id="" class="txtBox">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bTn formBtn text-center">
                                <button type="button" class="webBtn labelBtn prevBtn">Back</button>
                                <button type="submit" class="webBtn">Place Order</button>
                            </div>
                    </fieldset>
                </form>
                <div class="popup sm" data-popup="signin">
                    <div class="tableDv">
                        <div class="tableCell">
                            <div class="contain">
                                <div class="_inner">
                                    <div class="crosBtn"></div>
                                    <h4>Sign in</h4>
                                    <form action="" method="post">
                                        <div class="txtGrp">
                                            <label for="">Email Address</label>
                                            <input type="text" name="" id="" class="txtBox">
                                        </div>
                                        <div class="txtGrp pasDv">
                                            <label for="">Password</label>
                                            <input type="password" name="" id="" class="txtBox">
                                            <i class="icon-eye" id="eye"></i>
                                        </div>
                                        <div class="bTn text-center">
                                            <button type="submit" class="webBtn blockBtn">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- booking -->
        <script>
            $(document).on("click", ".actBtn", function() {
                let selectedArea = $('#selected_services');
                $('.alertMsg').hide();
                if ($(this).hasClass("addBtn"))
                {
                    if($(this).hasClass('left'))
                    {
                        selectedArea.prepend(`<tr data-id="${$(this).data('subservice-id')}">
                                                    <td>${$(this).data('name')}</td>
                                                    <input type="hidden" name="selected_service[]" value="${$(this).data('subservice-id')}">
                                                    <td>
                                                        <div class="qtyBtn">
                                                            <a class="qtyMinus"></a>
                                                            <input type="text" name="qty[]" value="1" class="qty" data-price="${$(this).data('price')}" data-id="${$(this).data('subservice-id')}" readonly>
                                                            <a class="qtyPlus"></a>
                                                        </div>
                                                    </td>
                                                    <td id="price-${$(this).data('subservice-id')}">£${$(this).data('price')}</td>
                                                </tr>`);
                    }
                    $(this).removeClass("addBtn").addClass("delBtn");
                }
                else
                {
                    if($(this).hasClass('right'))
                    {
                        $("td button").filter("[data-subservice-id='" + $(this).data('subservice-id') + "']").removeClass('delBtn').addClass('addBtn');
                        $(this).parent().parent().remove();
                    }
                    else
                    {
                        $("tr").filter("[data-id='" + $(this).data('subservice-id') + "']").remove();
                        $(this).removeClass("delBtn").addClass("addBtn");
                    }
                    
                }
            });

            // This button will increment the value
            $(document).on("click", ".qtyPlus", function(e) {
                e.preventDefault();

                var parent = $(this).parent().children(".qty");
                var currentVal = parent.val();
                var price = parent.data('price');
                var service_id = parent.data('id');
                
                if (!isNaN(currentVal)) {
                    let incrementedVal = parseInt(currentVal) + 1; 
                    parent.val(incrementedVal);
                    $('#price-' + service_id).text(`£${price*incrementedVal}`);
                } else {
                    parent.val(1);
                    $('#price-' + service_id).text(`£${price*1}`);
                }
            });
            // This button will decrement the value till 0
            $(document).on("click", ".qtyMinus", function(e) {
                e.preventDefault();
                var parent = $(this).parent().children(".qty");
                var currentVal = parent.val();
                var price = parent.data('price');
                var service_id = parent.data('id');

                if (!isNaN(currentVal) && currentVal > 1) {
                    let decrementedVal = parseInt(currentVal) - 1; 
                    parent.val(decrementedVal);
                    $('#price-' + service_id).text(`£${price*decrementedVal}`);
                } else {
                    parent.val(1);
                    $('#price-' + service_id).text(`£${price*1}`);
                }
            });
        </script>
    </main>
    <?php $this->load->view('includes/footer');?>
</body>

</html>