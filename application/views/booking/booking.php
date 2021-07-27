<!doctype html>
<html>

<head>
    <title>Booking — Compare My Laundry</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('includes/header.php'); ?>
    <main common booking>


        <section id="sBanner">
            <div class="contain">
                <div class="content">
                    <!-- <div class="icoBlk">
                        <div class="icon"><img src="<?= $base_url ?>images/iron_logo.svg" alt=""></div>
                        <div class="rateYo"></div>
                    </div> -->
                    <h2 class="heading">I Hate Ironing</h2>
                    <p>Deleniti iste earum sed est distinctio corporis dolore autem, omnis facere amet blanditiis velit!</p>
                </div>
            </div>
            <div class="image"><img src="<?= $base_url ?>images/illustration_promo.svg" alt=""></div>
        </section>
        <!-- sBanner -->


        <section id="booking">
            <div class="contain">
                <ul class="smryLst flex text-center">
                    <li>
                        <div class="blk">
                            <div class="icon"><img src="<?= $base_url ?>images/icon-map-marker.svg" alt=""></div>
                            <div class="txt">
                                <h6>Address</h6>
                                <p class="small">The Broadway, 341-343 Bowes Road, LONDON, N11 1AA</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="blk">
                            <div class="icon"><img src="<?= $base_url ?>images/icon-van.svg" alt=""></div>
                            <div class="txt">
                                <h6>Collection & Delivery</h6>
                                <p class="small">Today 12:00-15:00</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="blk">
                            <div class="icon"><img src="<?= $base_url ?>images/icon-cog-fill.svg" alt=""></div>
                            <div class="txt">
                                <h6>Services</h6>
                                <p class="small">Dry Cleaning, Ironing</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="blk">
                            <div class="icon"><img src="<?= $base_url ?>images/icon-phone.svg" alt=""></div>
                            <div class="txt">
                                <h6>Contact</h6>
                                <p class="small">konimbonim7@gmail.com</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="blk">
                            <div class="icon"><img src="<?= $base_url ?>images/icon-info.svg" alt=""></div>
                            <div class="txt">
                                <h6>Instructions</h6>
                                <p class="small">Tag/Label the bags</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="blk">
                            <div class="icon"><img src="<?= $base_url ?>images/icon-credit-card.svg" alt=""></div>
                            <div class="txt">
                                <h6>Payment</h6>
                                <p class="small">Credit card</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <form action="" method="post">
                    <fieldset>
                        <h3 class="heading">Instructions</h3>
                        <ul class="stepLst flex text-center">
                            <li>
                                <div class="inner">
                                    <div class="icon"><img src="<?= $base_url ?>images/vector-bag.svg" alt=""></div>
                                    <div class="txt">
                                        <h5>Allow one service per bag</h5>
                                        <p>Unde ut, commodi inventore rerum magni deserunt atque veritatis architecto vel dolorum consequatur est voluptatem repudiandae qui tempora nobis maiores adipisci ipsa?</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="icon"><img src="<?= $base_url ?>images/vector-tag.svg" alt=""></div>
                                    <div class="txt">
                                        <h5>Tag or label the bags</h5>
                                        <p>Unde ut, commodi inventore rerum magni deserunt atque veritatis architecto vel dolorum consequatur est voluptatem repudiandae qui tempora nobis maiores adipisci ipsa?</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="icon"><img src="<?= $base_url ?>images/vector-secure.svg" alt=""></div>
                                    <div class="txt">
                                        <h5>Help Service providers avoid mistakes</h5>
                                        <p>Unde ut, commodi inventore rerum magni deserunt atque veritatis architecto vel dolorum consequatur est voluptatem repudiandae qui tempora nobis maiores adipisci ipsa?</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="bTn formBtn text-center">
                            <button type="button" class="webBtn nextBtn">Continue</button>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h3 class="heading">Address</h3>
                        <div class="blk">
                            <div class="_header">
                                <h4>Tell us about your location</h4>
                            </div>
                            <h6>Enter your Postcode</h6>
                            <div class="txtGrp">
                                <label for="">Enter Postcode</label>
                                <input type="text" name="" id="" class="txtBox">
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
                                                <div class="icon"><img src="<?= $base_url ?>images/vector-home.svg" alt=""></div>
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
                                                <div class="icon"><img src="<?= $base_url ?>images/vector-briefcase.svg" alt=""></div>
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
                                                <div class="icon"><img src="<?= $base_url ?>images/vector-hotel.svg" alt=""></div>
                                                <div class="txt">
                                                    <p>Hotel</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h4 class="heading">Location Map</h4>
                        <div id="googleMap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d392466.27610655467!2d-105.23035500000002!3d39.781351!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c7e3e2c6216a7%3A0xa4b85252d6ea23a1!2sDenver%2C%20CO%2080210!5e0!3m2!1sen!2sus!4v1624361016615!5m2!1sen!2sus" width="100" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="bTn formBtn text-center">
                            <button type="button" class="webBtn labelBtn prevBtn">Back</button>
                            <button type="button" class="webBtn nextBtn">Continue</button>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h3 class="heading">Collection & delivery</h3>
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
                        <h3 class="heading">What services do you need?</h3>
                        <ul class="svcLst flex text-center">
                            <li class="active">
                                <a data-toggle="tab" href="#WashDry">
                                    <img src="<?= $base_url ?>images/vector-washing.svg" alt="">
                                    <em>Wash & Dry</em>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#WashIron">
                                    <img src="<?= $base_url ?>images/vector-wash-iron.svg" alt="">
                                    <em>Wash & Iron</em>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#DryCleaning">
                                    <img src="<?= $base_url ?>images/vector-dry-cleaning.svg" alt="">
                                    <em>Dry Cleaning</em>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#IronOnly">
                                    <img src="<?= $base_url ?>images/vector-iron.svg" alt="">
                                    <em>Iron Only</em>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#BulkyItems">
                                    <img src="<?= $base_url ?>images/vector-pillow.svg" alt="">
                                    <em>Bulky Items</em>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#Deals">
                                    <img src="<?= $base_url ?>images/vector-deal.svg" alt="">
                                    <em>Deals</em>
                                </a>
                            </li>
                        </ul>
                        <div class="smryMainBlk">
                            <div class="blk tab-content">
                                <div id="WashDry" class="tab-pane fade in active">
                                    <div class="serveBlk">
                                        <div class="icon"><img src="<?= $base_url ?>images/vector-washing.svg" alt=""></div>
                                        <div class="txt">
                                            <h4>Wash & Dry</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio animi a ex numquam inventore suscipit fuga exercitationem consequuntur eius! Saepe quasi fugit provident dolore a est omnis quos nihil itaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="serveBlk">
                                        <div class="txt">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>Item</th>
                                                        <td></td>
                                                        <th>Price</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="lblBtn">
                                                                <input type="checkbox" name="washType" id="mixedWash">
                                                                <label for="mixedWash">MIXED WASH & TUMBLE DRY - UP TO 6KG - All colours washed together.</label>
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                        <td>£20.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="lblBtn">
                                                                <input type="checkbox" name="washType" id="seprateWash">
                                                                <label for="seprateWash">SEPARATE WASH & TUMBLE DRY - UP TO 12KG - Light and dark clothes washed separately. - Requires 2 washes of 6 kg each.</label>
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                        <td>£20.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="DryCleaning" class="tab-pane fade">
                                    <div class="serveBlk">
                                        <div class="icon"><img src="<?= $base_url ?>images/vector-dry-cleaning.svg" alt=""></div>
                                        <div class="txt">
                                            <h4>Dry Cleaning</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio animi a ex numquam inventore suscipit fuga exercitationem consequuntur eius! Saepe quasi fugit provident dolore a est omnis quos nihil itaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="serveBlk">
                                        <div class="txt">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Qty</th>
                                                        <th>Price</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Shirt on Hanger</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shirt Folded</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="5" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£5.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Delicate Shirt on Hanger</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="3" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£3.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>T-Shirt on Hanger</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="3" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£3.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>T-Shirt Folded</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Polo on Hanger</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Polo Shirt Folded</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2-Piece Suit</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3-Piece Suit</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dinner / Linen Suit</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jacket / Blazer</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Waistcoat</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Skirt</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Skirt - Delicate</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumper</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cardigan</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bed Sheet - Single</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bed Sheet - Double</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bed Sheet - King</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bed Sheet - Super King</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pillow Case</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cushion Cover - Small</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cushion Cover - Medium</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cushion Cover - Large</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tablecloth (up to 2 m)</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tablecloth (up to 4m)</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tea Towel</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apron</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Top / Blouse</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Top / Blouse - Silk</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trousers</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trousers - Silk</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shorts</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dress</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dress - Delicate</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dress - Evening</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumpsuit</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tie</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Scarf</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Socks / underwear</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Overcoat / Raincoat</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Overcoat - Full Length</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Puffer / Down Coat</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Duvet Cover - Single</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Duvet Cover - Double</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Duvet Cover - King</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Duvet Cover - Super King</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bath Mat</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bath Towel</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hand Towel</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="WashIron" class="tab-pane fade">
                                    <div class="serveBlk">
                                        <div class="icon"><img src="<?= $base_url ?>images/vector-wash-iron.svg" alt=""></div>
                                        <div class="txt">
                                            <h4>Wash & Iron</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio animi a ex numquam inventore suscipit fuga exercitationem consequuntur eius! Saepe quasi fugit provident dolore a est omnis quos nihil itaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="serveBlk">
                                        <div class="txt">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Qty</th>
                                                        <th>Price</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Shirt on Hanger</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shirt Folded</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="5" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£5.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Delicate Shirt on Hanger</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="3" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£3.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>T-Shirt on Hanger</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="3" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£3.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>T-Shirt Folded</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Polo on Hanger</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Polo Shirt Folded</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2-Piece Suit</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3-Piece Suit</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dinner / Linen Suit</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jacket / Blazer</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Waistcoat</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Skirt</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Skirt - Delicate</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumper</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cardigan</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bed Sheet - Single</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bed Sheet - Double</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bed Sheet - King</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bed Sheet - Super King</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pillow Case</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cushion Cover - Small</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cushion Cover - Medium</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cushion Cover - Large</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tablecloth (up to 2 m)</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tablecloth (up to 4m)</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tea Towel</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apron</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Top / Blouse</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Top / Blouse - Silk</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trousers</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trousers - Silk</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shorts</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dress</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dress - Delicate</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dress - Evening</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumpsuit</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tie</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Scarf</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Socks / underwear</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Overcoat / Raincoat</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Overcoat - Full Length</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Puffer / Down Coat</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Duvet Cover - Single</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Duvet Cover - Double</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Duvet Cover - King</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Duvet Cover - Super King</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bath Mat</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bath Towel</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hand Towel</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="1" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£1.50</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="IronOnly" class="tab-pane fade">
                                    <div class="serveBlk">
                                        <div class="icon"><img src="<?= $base_url ?>images/vector-iron.svg" alt=""></div>
                                        <div class="txt">
                                            <h4>Iron Only</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio animi a ex numquam inventore suscipit fuga exercitationem consequuntur eius! Saepe quasi fugit provident dolore a est omnis quos nihil itaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="serveBlk">
                                        <div class="txt">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Qty</th>
                                                        <th>Price</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Shirt on Hanger</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shirt Folded</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="5" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£5.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>T-Shirt on Hanger</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="3" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£3.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>T-Shirt Folded</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="3" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£3.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Polo Shirt on Hanger</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Polo Shirt Folded</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jeans</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="5" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£5.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trousers</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="3" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£3.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shorts</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="3" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£3.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dress</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dress - Delicate</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dress - Evening</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumpsuit</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumper</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cardigan</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Duvet Cover - Single</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Duvet Cover - Double</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Duvet Cover - King</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Duvet cover - Super King</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tablecloth (up to 2m)</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tablecloth (up to 4m)</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apron</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tea towel</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Top/Blouse</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Top / Blouse - Silk</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jacket/Blazer</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Waistcoat</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Skirt</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bed Sheet - Single</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bed Sheet - Double</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bed Sheet - King</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bed Sheet - Super King</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pillow Case</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="BulkyItems" class="tab-pane fade">
                                    <div class="serveBlk">
                                        <div class="icon"><img src="<?= $base_url ?>images/vector-pillow.svg" alt=""></div>
                                        <div class="txt">
                                            <h4>Bulky Items</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio animi a ex numquam inventore suscipit fuga exercitationem consequuntur eius! Saepe quasi fugit provident dolore a est omnis quos nihil itaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="serveBlk">
                                        <div class="txt">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Qty</th>
                                                        <th>Price</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Synthetic Duvet - Single</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Synthetic Duvet - Double</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="5" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£5.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Synthetic Duvet - King</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="3" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£3.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Synthetic Duvet - Super King</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="3" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£3.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mattress Protector - Single</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mattress Protector - Double</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mattress Protector -King</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="5" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£5.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mattress Protector - Double layer</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="3" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£3.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Feather Duvet - Single</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="3" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£3.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Feather Duvet - Double</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Feather Duvet - King</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Feather Duvet - Super King</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pillow - Synthetic</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pillow - Feather</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Blanket - Single - Washable</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Blanket - Double - Washable</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Blanket - King - Washable</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bedspread - Single - Washable</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bedspread - Double - Washable</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bedspread - King - Washable</td>
                                                        <td>
                                                            <div class="qtyBtn">
                                                                <a class="qtyMinus"></a>
                                                                <input type="text" name="qty" value="2" class="qty">
                                                                <a class="qtyPlus"></a>
                                                            </div>
                                                        </td>
                                                        <td>£2.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="Deals" class="tab-pane fade">
                                    <div class="serveBlk">
                                        <div class="icon"><img src="<?= $base_url ?>images/vector-deal.svg" alt=""></div>
                                        <div class="txt">
                                            <h4>Deals</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio animi a ex numquam inventore suscipit fuga exercitationem consequuntur eius! Saepe quasi fugit provident dolore a est omnis quos nihil itaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
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
                                                    <tr>
                                                        <td>Synthetic Duvet - Single</td>
                                                        <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                                        <td>£2.00</td>
                                                        <td><input type="checkbox" name="" id=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Synthetic Duvet - Double</td>
                                                        <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                                        <td>£1.50</td>
                                                        <td><input type="checkbox" name="" id=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Synthetic Duvet - King</td>
                                                        <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                                        <td>£1.00</td>
                                                        <td><input type="checkbox" name="" id=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Synthetic Duvet - Super King</td>
                                                        <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                                        <td>£3.00</td>
                                                        <td><input type="checkbox" name="" id=""></td>
                                                    </tr>
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
                                        <tbody>
                                            <tr>
                                                <td>Shirt - Wash & Iron</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <input type="text" name="qty" value="3" class="qty">
                                                    </div>
                                                </td>
                                                <td>£2.50</td>
                                            </tr>
                                            <tr>
                                                <td>Dress - Dry Cleaning</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <input type="text" name="qty" value="3" class="qty">
                                                    </div>
                                                </td>
                                                <td>£3.00</td>
                                            </tr>
                                            <tr>
                                                <td>Trouser - Wash</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <input type="text" name="qty" value="3" class="qty">
                                                    </div>
                                                </td>
                                                <td>£2.50</td>
                                            </tr>
                                            <tr>
                                                <td>Outwear - Wash & Iron</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <input type="text" name="qty" value="3" class="qty">
                                                    </div>
                                                </td>
                                                <td>£2.50</td>
                                            </tr>
                                            <tr>
                                                <td>Cardigan - Ironing</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <input type="text" name="qty" value="3" class="qty">
                                                    </div>
                                                </td>
                                                <td>£2.50</td>
                                            </tr>
                                            <tr>
                                                <td>Shirt - Wash & Iron</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <input type="text" name="qty" value="3" class="qty">
                                                    </div>
                                                </td>
                                                <td>£2.50</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2" class="color">Estimated Total</th>
                                                <th>£30.50</th>
                                            </tr>
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
                        <h3 class="heading">Contact and Payment</h3>
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


    </main>
    <?php require_once('includes/footer.php'); ?>
</body>

</html>