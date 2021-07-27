<!doctype html>
<html>

<head>
    <title>My Orders — Compare My Laundry</title>
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
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="orderBlk blk">
                            <div class="inside">
                                <div class="lSide">
                                    <div class="_header">
                                        <h3>Current Order</h3>
                                        <div class="cmpnyLogo icon"><img src="<?= $base_url ?>images/iron_logo.svg" alt=""></div>
                                    </div>
                                    <h5>Quantity</h5>
                                    <ul class="itmLst flex">
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="10">
                                                    <strong>01</strong>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="40">
                                                    <strong>04</strong>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="70">
                                                    <strong>07</strong>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="90">
                                                    <strong>09</strong>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="br"></div>
                                    <h5>Items</h5>
                                    <ul class="itmLst flex">
                                        <li>
                                            <span class="badge">Shirt</span>
                                        </li>
                                        <li>
                                            <span class="badge">On Hanger</span>
                                        </li>
                                        <li>
                                            <span class="badge">Bed Sheet</span>
                                        </li>
                                        <li>
                                            <span class="badge">Trouser</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="rSide">
                                    <ul class="list">
                                        <li class="semi">
                                            <div>Service</div>
                                            <div>Price</div>
                                        </li>
                                        <li>
                                            <div>Iron Only</div>
                                            <div>£3.20</div>
                                        </li>
                                        <li>
                                            <div>Duvets & Bulky Items</div>
                                            <div>£5.20</div>
                                        </li>
                                        <li>
                                            <div>Wash & Dry - Mixed</div>
                                            <div>£9.20</div>
                                        </li>
                                        <li>
                                            <hr>
                                        </li>
                                        <li>
                                            <div>Collection & Delivery Charges</div>
                                            <div>Free</div>
                                        </li>
                                        <li>
                                            <div>Minimum Order</div>
                                            <div>£20.00</div>
                                        </li>
                                        <li>
                                            <div>Minimum Order Fee</div>
                                            <div>£0.00</div>
                                        </li>
                                        <li>
                                            <hr>
                                        </li>
                                        <li class="semi">
                                            <div>Estimated Total</div>
                                            <div>£40.20</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btm">
                                <div class="status processed">Order Processing</div>
                                <span>Order placed: Fri, 25 Jun 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="otpBlk blk">
                            <h3>OTP: 47883</h3>
                            <ul class="pickDrop">
                                <li>
                                    <div class="inner">
                                        <h5>Pick Up</h5>
                                        <div class="icon"><img src="<?= $base_url ?>images/vector-briefcase.svg" alt=""></div>
                                        <span>Office</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <h5>Drop Off</h5>
                                        <div class="icon"><img src="<?= $base_url ?>images/vector-home.svg" alt=""></div>
                                        <span>Home</span>
                                    </div>
                                </li>
                            </ul>
                            <h6>Contact No. <em class="regular">074029845392</em></h6>
                            <h6>Delivery Option. <em class="regular">Driver drops, rings and waits</em></h6>
                            <div class="btm">
                                <!-- <div class="icon"><img src="<?= $base_url ?>images/vector-wait.svg" alt=""></div> -->
                                <div class="bTn text-center">
                                    <a href="<?= $base_url ?>buyer/order-detail.php" class="webBtn mdBtn blankBtn borderBtn">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col1">
                        <div class="orderBlk blk expire">
                            <div class="inside">
                                <div class="lSide">
                                    <div class="_header">
                                        <h3>Previous Order</h3>
                                        <div class="cmpnyLogo icon"><img src="<?= $base_url ?>images/iron_logo2.svg" alt=""></div>
                                    </div>
                                    <h5>Quantity</h5>
                                    <ul class="itmLst flex">
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="10">
                                                    <strong>01</strong>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="40">
                                                    <strong>04</strong>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="70">
                                                    <strong>07</strong>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="90">
                                                    <strong>09</strong>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="br"></div>
                                    <h5>Items</h5>
                                    <ul class="itmLst flex">
                                        <li>
                                            <span class="badge">Shirt</span>
                                        </li>
                                        <li>
                                            <span class="badge">On Hanger</span>
                                        </li>
                                        <li>
                                            <span class="badge">Bed Sheet</span>
                                        </li>
                                        <li>
                                            <span class="badge">Trouser</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="rSide">
                                    <ul class="list">
                                        <li class="semi">
                                            <div>Service</div>
                                            <div>Price</div>
                                        </li>
                                        <li>
                                            <div>Iron Only</div>
                                            <div>£3.20</div>
                                        </li>
                                        <li>
                                            <div>Duvets & Bulky Items</div>
                                            <div>£5.20</div>
                                        </li>
                                        <li>
                                            <div>Wash & Dry - Mixed</div>
                                            <div>£9.20</div>
                                        </li>
                                        <li>
                                            <hr>
                                        </li>
                                        <li>
                                            <div>Collection & Delivery Charges</div>
                                            <div>Free</div>
                                        </li>
                                        <li>
                                            <div>Minimum Order</div>
                                            <div>£20.00</div>
                                        </li>
                                        <li>
                                            <div>Minimum Order Fee</div>
                                            <div>£0.00</div>
                                        </li>
                                        <li>
                                            <hr>
                                        </li>
                                        <li class="semi">
                                            <div>Estimated Total</div>
                                            <div>£40.20</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="otpBlk blk expire">
                            <h3>Order Code</h3>
                            <h2>#BCY7095</h2>
                            <h5>Collected On:</h5>
                            <p>Friday, 25 Jun 2021 <br> 9am - 11am</p>
                            <h5>Delivery:</h5>
                            <p>Friday, 25 Jun 2021 <br> 9am - 11am</p>
                        </div>
                    </div>
                    <div class="col col1">
                        <div class="orderBlk blk expire">
                            <div class="inside">
                                <div class="lSide">
                                    <div class="_header">
                                        <h3>Previous Order</h3>
                                        <div class="cmpnyLogo icon"><img src="<?= $base_url ?>images/iron_logo.svg" alt=""></div>
                                    </div>
                                    <h5>Quantity</h5>
                                    <ul class="itmLst flex">
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="10">
                                                    <strong>01</strong>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="40">
                                                    <strong>04</strong>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="70">
                                                    <strong>07</strong>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="90">
                                                    <strong>09</strong>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="br"></div>
                                    <h5>Items</h5>
                                    <ul class="itmLst flex">
                                        <li>
                                            <span class="badge">Shirt</span>
                                        </li>
                                        <li>
                                            <span class="badge">On Hanger</span>
                                        </li>
                                        <li>
                                            <span class="badge">Bed Sheet</span>
                                        </li>
                                        <li>
                                            <span class="badge">Trouser</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="rSide">
                                    <ul class="list">
                                        <li class="semi">
                                            <div>Service</div>
                                            <div>Price</div>
                                        </li>
                                        <li>
                                            <div>Iron Only</div>
                                            <div>£3.20</div>
                                        </li>
                                        <li>
                                            <div>Duvets & Bulky Items</div>
                                            <div>£5.20</div>
                                        </li>
                                        <li>
                                            <div>Wash & Dry - Mixed</div>
                                            <div>£9.20</div>
                                        </li>
                                        <li>
                                            <hr>
                                        </li>
                                        <li>
                                            <div>Collection & Delivery Charges</div>
                                            <div>Free</div>
                                        </li>
                                        <li>
                                            <div>Minimum Order</div>
                                            <div>£20.00</div>
                                        </li>
                                        <li>
                                            <div>Minimum Order Fee</div>
                                            <div>£0.00</div>
                                        </li>
                                        <li>
                                            <hr>
                                        </li>
                                        <li class="semi">
                                            <div>Estimated Total</div>
                                            <div>£40.20</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="otpBlk blk expire">
                            <h3>Order Code</h3>
                            <h2>#BCY7095</h2>
                            <h5>Collected On:</h5>
                            <p>Friday, 25 Jun 2021 <br> 9am - 11am</p>
                            <h5>Delivery:</h5>
                            <p>Friday, 25 Jun 2021 <br> 9am - 11am</p>
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