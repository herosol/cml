<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master');?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header');?>
    <main common quotes>


        <section id="sBanner">
            <div class="contain">
                <div class="content">
                    <h2 class="heading">Quotes</h2>
                    <p>Deleniti iste earum sed est distinctio corporis dolore autem, omnis facere amet blanditiis velit!</p>
                </div>
            </div>
            <div class="image"><img src="<?= base_url() ?>assets/images/illustration_promotion.svg" alt=""></div>
        </section>
        <!-- sBanner -->


        <section id="quotes">
            <div class="contain">
                <h2 class="heading text-center">Best Deals in your Area</h2>
                <div class="flexRow flex">
                    <div class="col">
                        <div class="srchBlk">
                            <div class="icoBlk">
                                <div class="icon"><img src="<?= base_url() ?>assets/images/iron_logo.svg" alt=""></div>
                                <h6>I Hate Ironing</h6>
                                <div class="rateYo"></div>
                                <small>0.43 Miles Away</small>
                                <div class="fig"><img src="images/vector-wait.svg" alt=""></div>
                                <p class="small">Pickup & Delivery Service Available</p>
                                <div class="priceBlk">
                                    <strong>Estimated Price</strong>
                                    <div class="price">£25.99</div>
                                    <div class="bTn">
                                        <a href="<?= $base_url ?>search.php" class="webBtn mdBtn blockBtn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="srchBlk">
                            <div class="icoBlk">
                                <div class="icon"><img src="<?= base_url() ?>assets/images/iron_logo.svg" alt=""></div>
                                <h6>I Hate Ironing</h6>
                                <div class="rateYo"></div>
                                <small>0.43 Miles Away</small>
                                <div class="priceBlk">
                                    <strong>Estimated Price</strong>
                                    <div class="price">£25.99</div>
                                    <div class="bTn">
                                        <a href="<?= $base_url ?>search.php" class="webBtn mdBtn blockBtn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="srchBlk">
                            <div class="icoBlk">
                                <div class="icon"><img src="<?= base_url() ?>assets/images/iron_logo2.svg" alt=""></div>
                                <h6>Laundry Heap</h6>
                                <div class="rateYo"></div>
                                <small>0.43 Miles Away</small>
                                <div class="fig"><img src="images/vector-wait.svg" alt=""></div>
                                <p class="small">Pickup & Delivery Service Available</p>
                                <div class="priceBlk">
                                    <strong>Estimated Price</strong>
                                    <div class="price">£25.99</div>
                                    <div class="bTn">
                                        <a href="<?= $base_url ?>search.php" class="webBtn mdBtn blockBtn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="srchBlk">
                            <div class="icoBlk">
                                <div class="icon"><img src="<?= base_url() ?>assets/images/iron_logo.svg" alt=""></div>
                                <h6>I Hate Ironing</h6>
                                <div class="rateYo"></div>
                                <small>0.43 Miles Away</small>
                                <div class="fig"><img src="images/vector-wait.svg" alt=""></div>
                                <p class="small">Pickup & Delivery Service Available</p>
                                <div class="priceBlk">
                                    <strong>Estimated Price</strong>
                                    <div class="price">£25.99</div>
                                    <div class="bTn">
                                        <a href="<?= $base_url ?>search.php" class="webBtn mdBtn blockBtn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bTn formBtn text-center">
                    <a href="?" class="webBtn lightBtn">More Quotes <i class="fi-arrow-right"></i></a>
                </div>
            </div>
        </section>
        <!-- quotes -->


    </main>
    <?php $this->load->view('includes/footer');?></body>

</html>