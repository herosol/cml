<!doctype html>
<html>

<head>
    <title>My Credits — Compare My Laundry</title>
    <?php require_once('../includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('../includes/header-vendor.php'); ?>
    <main dash credits>
        <?php require_once('../includes/sidebar-vendor.php'); ?>


        <section id="credits">
            <div class="contain-fluid">
                <div class="blk topBlk">
                    <div class="ico"><img src="<?= $base_url ?>images/users/7.jpg" alt=""></div>
                    <div class="txt">
                        <h3><span class="regular">Welcome,</span> Dear, Jennifer Kem!<span class="regular">Nice to see you again.</span></h3>
                    </div>
                    <div class="toggleBlk">
                        <div class="switchBtn">
                            <input type="checkbox" name="" id="" checked>
                            <em></em>
                            <small></small>
                        </div>
                    </div>
                </div>
                <div class="flexRow flex">
                    <div class="col">
                        <div class="blk latestBlk">
                            <h4 class="heading text-center">Latest Order</h4>
                            <div class="icoBlk">
                                <div class="ico"><img src="<?= $base_url ?>images/users/8.jpg" alt=""></div>
                                <div class="txt">
                                    <strong>Wash Iron & Dry Cleaning</strong>
                                </div>
                                <div class="price">£32.00</div>
                            </div>
                            <ul class="keyLst">
                                <li>
                                    <div>Address:</div>
                                    <div>Scott H. Lewis, Director Hybrid House, LLC PO Box 48461.</div>
                                </li>
                                <li>
                                    <div>Collection:</div>
                                    <div>Collection from customer</div>
                                </li>
                                <li>
                                    <div>Drop off:</div>
                                    <div>Ring, doorbell and stand</div>
                                </li>
                            </ul>
                            <ul class="lst">
                                <li>
                                    <strong>Collection Date:</strong>
                                    <em>Tue, 21 Jan 2021</em>
                                </li>
                                <li>
                                    <strong>Collection Time:</strong>
                                    <em>11:00 am - 01:00 pm</em>
                                </li>
                                <li>&nbsp;</li>
                                <li>
                                    <strong>Delivery Date:</strong>
                                    <em>Wed, 21 Jan 2021</em>
                                </li>
                                <li>
                                    <strong>Delivery Time:</strong>
                                    <em>11:00 am - 01:00 pm</em>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="blk todayBlk">
                            <h4 class="heading text-center">Todays Sales</h4>
                            <div class="progressbar" data-animate="false">
                                <div class="circle" data-percent="100">
                                    <strong>£123.45</strong>
                                </div>
                            </div>
                            <div class="br"></div>
                            <h4 class="heading text-center">Todays Orders</h4>
                            <ul class="keyLst">
                                <li>
                                    <div>Deposit:</div>
                                    <div>£12345</div>
                                </li>
                                <li>
                                    <div>Expense:</div>
                                    <div>£1000</div>
                                </li>
                                <li>
                                    <div>Payable:</div>
                                    <div>£250</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="blk monthBlk text-center">
                            <h4 class="heading">Total Sales this Weak</h4>
                            <div class="progressbar" data-animate="false">
                                <div class="circle" data-percent="100">
                                    <strong>12</strong>
                                </div>
                            </div>
                            <strong class="color">£1246.00</strong>
                            <hr>
                            <h4 class="heading">Total Order this Month</h4>
                            <div class="progressbar" data-animate="false">
                                <div class="circle" data-percent="100">
                                    <strong>50</strong>
                                </div>
                            </div>
                            <strong class="color">£12546.00</strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- credits -->


    </main>
    <?php require_once('../includes/footer.php'); ?>
</body>

</html>