<!doctype html>
<html>

<head>
    <title>Place Order — Compare My Laundry</title>
    <?php require_once('../includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('../includes/header.php'); ?>
    <main common place>


        <section id="sBanner">
            <div class="contain">
                <div class="content">
                    <h2 class="heading">Place Order</h2>
                    <p>Deleniti iste earum sed est distinctio corporis dolore autem, omnis facere amet blanditiis velit!</p>
                </div>
            </div>
            <div class="image"><img src="<?= $base_url ?>images/illustration_step1.svg" alt=""></div>
        </section>
        <!-- sBanner -->


        <section id="place">
            <div class="contain">
                <ul class="numLst semi">
                    <li class="active"><a href="<?= $base_url ?>buyer/place-order.php">1</a></li>
                    <li><a href="<?= $base_url ?>buyer/place-order-instruction.php">2</a></li>
                    <li><a href="<?= $base_url ?>buyer/place-order-confirmation.php">3</a></li>
                </ul>
                <h2 class="heading text-center">Step 1</h2>
                <div class="blk">
                    <div class="_header">
                        <h2>Select your Address</h2>
                    </div>
                    <ul class="selectLst flex">
                        <li>
                            <div class="radioBtn">
                                <input type="radio" name="address_type" id="address_type_home" checked="">
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
                    <div class="markerBlk">
                        <div class="icon"><img src="<?= $base_url ?>images/icon-map-marker.svg" alt=""></div>
                        <div class="txt">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque totam voluptate animi numquam nostrum, provident odit cupiditate impedit molestiae tenetur! Aspernatur quia aliquid, autem iste itaque modi impedit ipsa?</p>
                        </div>
                        <div class="bTn"><a href="<?= $base_url ?>buyer/place-order-instruction.php" class="webBtn">Next</a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- place -->


    </main>
    <?php require_once('../includes/footer.php'); ?>
</body>

</html>