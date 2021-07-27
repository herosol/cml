<!doctype html>
<html>

<head>
    <title>Search Results — Compare My Laundry</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('includes/header.php'); ?>
    <main common srch>


        <section id="sBanner">
            <div class="contain">
                <div class="content">
                    <h2 class="heading">Quotes</h2>
                    <p>Deleniti iste earum sed est distinctio corporis dolore autem, omnis facere amet blanditiis velit!</p>
                </div>
            </div>
            <div class="image"><img src="<?= $base_url ?>images/illustration_promotion.svg" alt=""></div>
        </section>
        <!-- sBanner -->


        <section id="srch">
            <div class="contain">
                <h2 class="heading text-center">Best Deals in your Area</h2>
                <div class="srchBlk">
                    <div class="inside">
                        <div class="icoBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/iron_logo.svg" alt=""></div>
                            <h6>I Hate Ironing</h6>
                            <div class="rateYo"></div>
                            <small>0.43 Miles Away</small>
                            <div class="fig"><img src="<?= $base_url ?>images/vector-wait.svg" alt=""></div>
                            <p class="small">Pickup & Delivery Service Available</p>
                            <div class="toggleBlk">
                                <strong>Use Service</strong>
                                <div class="switchBtn">
                                    <input type="checkbox" name="" id="">
                                    <em></em>
                                </div>
                            </div>
                        </div>
                        <div class="txt">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Services</th>
                                        <th width="5%">Price</th>
                                    </tr>
                                    <tr>
                                        <td>Wash & Dry</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>Iron Only</td>
                                        <td>£5.00</td>
                                    </tr>
                                    <tr>
                                        <td>Dry Clean</td>
                                        <td>£3.50</td>
                                    </tr>
                                    <tr>
                                        <td>Delicate Shirt on Hanger</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>Jumper</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>T-shirt Folded</td>
                                        <td>£1.50</td>
                                    </tr>
                                    <tr>
                                        <td>Polo on Hanger</td>
                                        <td>£1.50</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="color">Pickup & Delivery Charges</td>
                                        <td>£2.50</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum Order</td>
                                        <td>£2.50</td>
                                    </tr>
                                    <tr>
                                        <td class="color">Minimum Order Fee</td>
                                        <td>£0.50</td>
                                    </tr>
                                    <tr>
                                        <th class="color">Estimated Total</th>
                                        <th>£30.50</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="side">
                            <form action="booking.php" method="post">
                                <h6>Collection</h6>
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
                                </div>
                                <h6>Drop off</h6>
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
                                </div>
                                <div class="bTn">
                                    <button type="submit" class="webBtn blockBtn">Place Order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="btm">
                        <small class="red-color">Disclaimer: Price shown is the estimated cost I Hate Ironing has a minimum order value of $20 | $5 no show/cancellation fee.</small>
                        <div class="bTn"><a href="?" class="webBtn smBtn lightBtn">Current Vendor Deals</a></div>
                    </div>
                </div>
                <!-- <div class="srchBlk">
                    <div class="inside">
                        <div class="icoBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/iron_logo2.svg" alt=""></div>
                            <h6>Laundryheap</h6>
                            <div class="rateYo"></div>
                            <small>0.43 Miles Away</small>
                            <div class="fig"><img src="<?= $base_url ?>images/vector-wait.svg" alt=""></div>
                            <p class="small">Pickup & Delivery Service Available</p>
                            <div class="toggleBlk">
                                <strong>Use Service</strong>
                                <div class="switchBtn">
                                    <input type="checkbox" name="" id="">
                                    <em></em>
                                </div>
                            </div>
                        </div>
                        <div class="txt">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Services</th>
                                        <th width="5%">Price</th>
                                    </tr>
                                    <tr>
                                        <td>Wash & Dry</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>Iron Only</td>
                                        <td>£5.00</td>
                                    </tr>
                                    <tr>
                                        <td>Dry Clean</td>
                                        <td>£3.50</td>
                                    </tr>
                                    <tr>
                                        <td>Delicate Shirt on Hanger</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>Jumper</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>T-shirt Folded</td>
                                        <td>£1.50</td>
                                    </tr>
                                    <tr>
                                        <td>Polo on Hanger</td>
                                        <td>£1.50</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="color">Pickup & Delivery Charges</td>
                                        <td>£2.50</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum Order</td>
                                        <td>£2.50</td>
                                    </tr>
                                    <tr>
                                        <td class="color">Minimum Order Fee</td>
                                        <td>£0.50</td>
                                    </tr>
                                    <tr>
                                        <th class="color">Estimated Total</th>
                                        <th>£30.50</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="side">
                            <form action="booking.php" method="post">
                                <h6>Collection</h6>
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
                                </div>
                                <h6>Drop off</h6>
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
                                </div>
                                <div class="bTn">
                                    <button type="submit" class="webBtn blockBtn">Place Order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="btm">
                        <small class="red-color">Disclaimer: Price shown is the estimated cost I Hate Ironing has a minimum order value of $20 | $5 no show/cancellation fee.</small>
                        <div class="bTn"><a href="?" class="webBtn smBtn lightBtn">Current Vendor Deals</a></div>
                    </div>
                </div> -->
                <div class="srchBlk">
                    <div class="inside">
                        <div class="icoBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/iron_logo2.svg" alt=""></div>
                            <h6>Laundry Heap</h6>
                            <div class="rateYo"></div>
                            <small>0.43 Miles Away</small>
                        </div>
                        <div class="txt">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Services</th>
                                        <th width="5%">Price</th>
                                    </tr>
                                    <tr>
                                        <td>Wash & Dry</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>Iron Only</td>
                                        <td>£5.00</td>
                                    </tr>
                                    <tr>
                                        <td>Dry Clean</td>
                                        <td>£3.50</td>
                                    </tr>
                                    <tr>
                                        <td>Delicate Shirt on Hanger</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>Jumper</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>T-shirt Folded</td>
                                        <td>£1.50</td>
                                    </tr>
                                    <tr>
                                        <td>Polo on Hanger</td>
                                        <td>£1.50</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="color">Pickup & Delivery Charges</td>
                                        <td>£2.50</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum Order</td>
                                        <td>£2.50</td>
                                    </tr>
                                    <tr>
                                        <td class="color">Minimum Order Fee</td>
                                        <td>£0.50</td>
                                    </tr>
                                    <tr>
                                        <th class="color">Estimated Total</th>
                                        <th>£30.50</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="side">
                            <form action="booking.php" method="post">
                                <div class="txtGrp">
                                    <p>Tip Top Drycleaners <br> 21 Frask Street <br> London <br> SE5 8EZ</p>
                                </div>
                                <h6>Drop off any time between</h6>
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
                                </div>
                                <div class="bTn">
                                    <button type="submit" class="webBtn blockBtn">Place Order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="btm">
                        <small class="red-color">Disclaimer: Price shown is the estimated cost I Hate Ironing has a minimum order value of $20 | $5 no show/cancellation fee.</small>
                        <div class="bTn"><a href="?" class="webBtn smBtn lightBtn">Current Vendor Deals</a></div>
                    </div>
                </div>
                <!-- <div class="srchBlk">
                    <div class="inside">
                        <div class="icoBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/iron_logo.svg" alt=""></div>
                            <h6>I Hate Ironing</h6>
                            <div class="rateYo"></div>
                            <small>0.43 Miles Away</small>
                            <div class="fig"><img src="<?= $base_url ?>images/vector-wait.svg" alt=""></div>
                            <p class="small">Pickup & Delivery Service Available</p>
                            <div class="toggleBlk">
                                <strong>Use Service</strong>
                                <div class="switchBtn">
                                    <input type="checkbox" name="" id="">
                                    <em></em>
                                </div>
                            </div>
                        </div>
                        <div class="txt">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Services</th>
                                        <th width="5%">Price</th>
                                    </tr>
                                    <tr>
                                        <td>Wash & Dry</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>Iron Only</td>
                                        <td>£5.00</td>
                                    </tr>
                                    <tr>
                                        <td>Dry Clean</td>
                                        <td>£3.50</td>
                                    </tr>
                                    <tr>
                                        <td>Delicate Shirt on Hanger</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>Jumper</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>T-shirt Folded</td>
                                        <td>£1.50</td>
                                    </tr>
                                    <tr>
                                        <td>Polo on Hanger</td>
                                        <td>£1.50</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="color">Pickup & Delivery Charges</td>
                                        <td>£2.50</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum Order</td>
                                        <td>£2.50</td>
                                    </tr>
                                    <tr>
                                        <td class="color">Minimum Order Fee</td>
                                        <td>£0.50</td>
                                    </tr>
                                    <tr>
                                        <th class="color">Estimated Total</th>
                                        <th>£30.50</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="side">
                            <form action="booking.php" method="post">
                                <h6>Collection</h6>
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
                                </div>
                                <h6>Drop off</h6>
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
                                </div>
                                <div class="bTn">
                                    <button type="submit" class="webBtn blockBtn">Place Order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="btm">
                        <small class="red-color">Disclaimer: Price shown is the estimated cost I Hate Ironing has a minimum order value of $20 | $5 no show/cancellation fee.</small>
                        <div class="bTn"><a href="?" class="webBtn smBtn lightBtn">Current Vendor Deals</a></div>
                    </div>
                </div>
                <div class="srchBlk">
                    <div class="inside">
                        <div class="icoBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/iron_logo2.svg" alt=""></div>
                            <h6>Laundryheap</h6>
                            <div class="rateYo"></div>
                            <small>0.43 Miles Away</small>
                            <div class="fig"><img src="<?= $base_url ?>images/vector-wait.svg" alt=""></div>
                            <p class="small">Pickup & Delivery Service Available</p>
                            <div class="toggleBlk">
                                <strong>Use Service</strong>
                                <div class="switchBtn">
                                    <input type="checkbox" name="" id="">
                                    <em></em>
                                </div>
                            </div>
                        </div>
                        <div class="txt">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Services</th>
                                        <th width="5%">Price</th>
                                    </tr>
                                    <tr>
                                        <td>Wash & Dry</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>Iron Only</td>
                                        <td>£5.00</td>
                                    </tr>
                                    <tr>
                                        <td>Dry Clean</td>
                                        <td>£3.50</td>
                                    </tr>
                                    <tr>
                                        <td>Delicate Shirt on Hanger</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>Jumper</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>T-shirt Folded</td>
                                        <td>£1.50</td>
                                    </tr>
                                    <tr>
                                        <td>Polo on Hanger</td>
                                        <td>£1.50</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="color">Pickup & Delivery Charges</td>
                                        <td>£2.50</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum Order</td>
                                        <td>£2.50</td>
                                    </tr>
                                    <tr>
                                        <td class="color">Minimum Order Fee</td>
                                        <td>£0.50</td>
                                    </tr>
                                    <tr>
                                        <th class="color">Estimated Total</th>
                                        <th>£30.50</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="side">
                            <form action="booking.php" method="post">
                                <h6>Collection</h6>
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
                                </div>
                                <h6>Drop off</h6>
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
                                </div>
                                <div class="bTn">
                                    <button type="submit" class="webBtn blockBtn">Place Order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="btm">
                        <small class="red-color">Disclaimer: Price shown is the estimated cost I Hate Ironing has a minimum order value of $20 | $5 no show/cancellation fee.</small>
                        <div class="bTn"><a href="?" class="webBtn smBtn lightBtn">Current Vendor Deals</a></div>
                    </div>
                </div>
                <div class="srchBlk">
                    <div class="inside">
                        <div class="icoBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/iron_logo.svg" alt=""></div>
                            <h6>I Hate Ironing</h6>
                            <div class="rateYo"></div>
                            <small>0.43 Miles Away</small>
                            <div class="fig"><img src="<?= $base_url ?>images/vector-wait.svg" alt=""></div>
                            <p class="small">Pickup & Delivery Service Available</p>
                            <div class="toggleBlk">
                                <strong>Use Service</strong>
                                <div class="switchBtn">
                                    <input type="checkbox" name="" id="">
                                    <em></em>
                                </div>
                            </div>
                        </div>
                        <div class="txt">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Services</th>
                                        <th width="5%">Price</th>
                                    </tr>
                                    <tr>
                                        <td>Wash & Dry</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>Iron Only</td>
                                        <td>£5.00</td>
                                    </tr>
                                    <tr>
                                        <td>Dry Clean</td>
                                        <td>£3.50</td>
                                    </tr>
                                    <tr>
                                        <td>Delicate Shirt on Hanger</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>Jumper</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>T-shirt Folded</td>
                                        <td>£1.50</td>
                                    </tr>
                                    <tr>
                                        <td>Polo on Hanger</td>
                                        <td>£1.50</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="color">Pickup & Delivery Charges</td>
                                        <td>£2.50</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum Order</td>
                                        <td>£2.50</td>
                                    </tr>
                                    <tr>
                                        <td class="color">Minimum Order Fee</td>
                                        <td>£0.50</td>
                                    </tr>
                                    <tr>
                                        <th class="color">Estimated Total</th>
                                        <th>£30.50</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="side">
                            <form action="booking.php" method="post">
                                <h6>Collection</h6>
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
                                </div>
                                <h6>Drop off</h6>
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
                                </div>
                                <div class="bTn">
                                    <button type="submit" class="webBtn blockBtn">Place Order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="btm">
                        <small class="red-color">Disclaimer: Price shown is the estimated cost I Hate Ironing has a minimum order value of $20 | $5 no show/cancellation fee.</small>
                        <div class="bTn"><a href="?" class="webBtn smBtn lightBtn">Current Vendor Deals</a></div>
                    </div>
                </div>
                <div class="srchBlk">
                    <div class="inside">
                        <div class="icoBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/iron_logo.svg" alt=""></div>
                            <h6>I Hate Ironing</h6>
                            <div class="rateYo"></div>
                            <small>0.43 Miles Away</small>
                            <div class="fig"><img src="<?= $base_url ?>images/vector-wait.svg" alt=""></div>
                            <p class="small">Pickup & Delivery Service Available</p>
                            <div class="toggleBlk">
                                <strong>Use Service</strong>
                                <div class="switchBtn">
                                    <input type="checkbox" name="" id="">
                                    <em></em>
                                </div>
                            </div>
                        </div>
                        <div class="txt">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Services</th>
                                        <th width="5%">Price</th>
                                    </tr>
                                    <tr>
                                        <td>Wash & Dry</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>Iron Only</td>
                                        <td>£5.00</td>
                                    </tr>
                                    <tr>
                                        <td>Dry Clean</td>
                                        <td>£3.50</td>
                                    </tr>
                                    <tr>
                                        <td>Delicate Shirt on Hanger</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>Jumper</td>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr>
                                        <td>T-shirt Folded</td>
                                        <td>£1.50</td>
                                    </tr>
                                    <tr>
                                        <td>Polo on Hanger</td>
                                        <td>£1.50</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="color">Pickup & Delivery Charges</td>
                                        <td>£2.50</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum Order</td>
                                        <td>£2.50</td>
                                    </tr>
                                    <tr>
                                        <td class="color">Minimum Order Fee</td>
                                        <td>£0.50</td>
                                    </tr>
                                    <tr>
                                        <th class="color">Estimated Total</th>
                                        <th>£30.50</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="side">
                            <form action="booking.php" method="post">
                                <h6>Collection</h6>
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
                                </div>
                                <h6>Drop off</h6>
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
                                </div>
                                <div class="bTn">
                                    <button type="submit" class="webBtn blockBtn">Place Order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="btm">
                        <small class="red-color">Disclaimer: Price shown is the estimated cost I Hate Ironing has a minimum order value of $20 | $5 no show/cancellation fee.</small>
                        <div class="bTn"><a href="?" class="webBtn smBtn lightBtn">Current Vendor Deals</a></div>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- srch -->


    </main>
    <?php require_once('includes/footer.php'); ?>
</body>

</html>