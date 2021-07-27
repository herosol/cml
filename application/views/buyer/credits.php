<!doctype html>
<html>

<head>
    <title>My Credits — Compare My Laundry</title>
    <?php require_once('../includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('../includes/header-buyer.php'); ?>
    <main dash credits>
        <?php require_once('../includes/sidebar-buyer.php'); ?>


        <section id="credits">
            <div class="contain-fluid">
                <div class="blk topBlk">
                    <div class="ico"><img src="<?= $base_url ?>images/users/6.jpg" alt=""></div>
                    <div class="txt">
                        <h3><span class="regular">Welcome,</span> Dear, Brent Phillips!<span class="regular">Nice to see you again.</span></h3>
                    </div>
                    <div class="bTn">
                        <a href="<?= $base_url ?>buyer/orders.php" class="webBtn mdBtn simpleBtn">View Orders</a>
                    </div>
                </div>
                <div class="blk text-center">
                    <h2 class="heading">My Account Credit</h2>
                    <div class="chart relative">
                        <div id="pie"></div>
                        <h3 class="heading">Congratulations!</h3>
                    </div>
                    <div class="br"></div>
                    <h4>You now have a <span class="color">15% off on your next order </span> worth ever $30.</h4>
                    <h4>We make sure you save wishlist your spend!</h4>
                    <div class="br"></div>
                    <h4 class="color regular">Your 15% off automatically be applied at checkout.</h4>
                    <div class="br"></div>
                    <h2 class="heading">Orders</h2>
                    <div class="itmRow flex">
                        <div class="col">
                            <div class="minOrderBlk">
                                <div class="_header">
                                    <h4>Order</h4>
                                    <em>#078954</em>
                                </div>
                                <ul>
                                    <li>Collection Date & Time:</li>
                                    <li>20-09-21 - 08:00pm</li>
                                    <li>&nbsp;</li>
                                    <li>Delivery Date & Time:</li>
                                    <li>20-09-21 - 08:00pm</li>
                                </ul>
                                <p>You Paid:</p>
                                <div class="price">£28.45</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="minOrderBlk">
                                <div class="_header">
                                    <h4>Order</h4>
                                    <em>#078954</em>
                                </div>
                                <ul>
                                    <li>Collection Date & Time:</li>
                                    <li>20-09-21 - 08:00pm</li>
                                    <li>&nbsp;</li>
                                    <li>Delivery Date & Time:</li>
                                    <li>20-09-21 - 08:00pm</li>
                                </ul>
                                <p>You Paid:</p>
                                <div class="price">£28.45</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="minOrderBlk">
                                <div class="_header">
                                    <h4>Order</h4>
                                    <em>#078954</em>
                                </div>
                                <ul>
                                    <li>Collection Date & Time:</li>
                                    <li>20-09-21 - 08:00pm</li>
                                    <li>&nbsp;</li>
                                    <li>Delivery Date & Time:</li>
                                    <li>20-09-21 - 08:00pm</li>
                                </ul>
                                <p>You Paid:</p>
                                <div class="price">£28.45</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- credits -->


        <script src="<?= $base_url ?>js/highcharts.js"></script>
        <script src="<?= $base_url ?>js/pie-chart.js"></script>
    </main>
    <?php require_once('../includes/footer.php'); ?>
</body>

</html>