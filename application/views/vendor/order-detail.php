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
                                    <tr>
                                        <td>Shirt</td>
                                        <td>Wash & Iron</td>
                                        <td>
                                            <input type="text" name="" id="" class="txtBox" placeholder="Qty">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="txtBox" placeholder="Price">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dress</td>
                                        <td>Dry Cleaning</td>
                                        <td>
                                            <input type="text" name="" id="" class="txtBox" placeholder="Qty">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="txtBox" placeholder="Price">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Trouser</td>
                                        <td>Wash</td>
                                        <td>
                                            <input type="text" name="" id="" class="txtBox" placeholder="Qty">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="txtBox" placeholder="Price">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Outwear</td>
                                        <td>Wash & Iron</td>
                                        <td>
                                            <input type="text" name="" id="" class="txtBox" placeholder="Qty">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="txtBox" placeholder="Price">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cardigan</td>
                                        <td>Ironing</td>
                                        <td>
                                            <input type="text" name="" id="" class="txtBox" placeholder="Qty">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="txtBox" placeholder="Price">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Shirt</td>
                                        <td>Wash & Iron</td>
                                        <td>
                                            <input type="text" name="" id="" class="txtBox" placeholder="Qty">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="txtBox" placeholder="Price">
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" class="color">Pickup & Delivery Charges</td>
                                        <td>£2.50</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Minimum Order</td>
                                        <td>£2.50</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="color">Minimum Order Fee</td>
                                        <td>£0.50</td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" class="color">Estimated Total</th>
                                        <th>£30.50</th>
                                    </tr>
                                </tfoot>
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
                                        <th>Delivery Date:</th>
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
                            <div class="br"></div>
                            <div class="icon deliverIcon"><img src="<?= $base_url ?>images/vector-wait.svg" alt=""></div>
                            <div class="bTn formBtn">
                                <button type="button" class="webBtn mdBtn icoBtn popBtn" data-popup="amend-invoice"><img src="<?= $base_url ?>images/icon-price-list.svg" alt=""> Amend Invoice</button>
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