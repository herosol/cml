<!doctype html>
<html>

<head>
    <title>Order Detail — Compare My Laundry</title>
    <?php require_once('../includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('../includes/header-buyer.php'); ?>
    <main dash orders>
        <?php require_once('../includes/sidebar-buyer.php'); ?>


        <section id="orders">
            <div class="contain-fluid">
                <div class="blk topBlk">
                    <div class="ico"><img src="<?= $base_url ?>images/users/6.jpg" alt=""></div>
                    <div class="txt">
                        <h3><span class="regular">Welcome,</span> Dear, Brent Phillips!<span class="regular">Nice to see you again.</span></h3>
                    </div>
                    <div class="bTn">
                        <a href="<?= $base_url ?>buyer/orders.php" class="webBtn mdBtn simpleBtn">Cancel Orders</a>
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
                                                <th>Phone</th>
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
                                                <th>Email</th>
                                            </tr>
                                            <tr>
                                                <td>johnwick87@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <th>Notes</th>
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
                        </div>
                    </div>
                    <!-- <hr>
                    <div class="txtGrp">
                        <label for="">Comments</label>
                        <textarea name="" id="" class="txtBox"></textarea>
                    </div> -->
                    <hr>
                    <div class="doneBlk">
                        <div class="image"><img src="<?= $base_url ?>images/bag.jpg" alt=""></div>
                        <div class="txt">
                            <h5>Comments</h5>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis aut deleniti repellendus odio voluptates corporis minima excepturi. Incidunt consectetur ipsa nulla pariatur distinctio, fuga temporibus adipisci, provident voluptatibus, sed obcaecati!</p>
                            <p>Inventore velit cumque ab expedita earum ex possimus modi ducimus, nisi, quia quos incidunt molestias, ut fugit repellendus! Temporibus aliquam adipisci aut!</p>
                        </div>
                    </div>
                </div>
                <div class="blk text-center">
                    <p>You've received your order, please accept or decline.</p>
                    <div class="bTn">
                        <button type="button" class="webBtn lightBtn">Decline</button>
                        <button type="button" class="webBtn popBtn" data-popup="leave-review">Accept</button>
                    </div>
                </div>
            </div>
            <div class="popup" data-popup="leave-review">
                <div class="tableDv">
                    <div class="tableCell">
                        <div class="contain">
                            <div class="_inner">
                                <div class="crosBtn"></div>
                                <h4>Leave Review</h4>
                                <form action="" method="post">
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
    <?php require_once('../includes/footer.php'); ?>
</body>

</html>