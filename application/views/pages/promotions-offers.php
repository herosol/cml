<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master');?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header');?>
    <main common promotion>


        <section id="sBanner">
            <div class="contain">
                <div class="content">
                    <h2><?= $content['heading'] ?></h2>
                    <p><?= $content['detail'] ?></p>
                    <form action="" method="post">
                        <div class="txtGrp flexGrp">
                            <label for="">Enter Postcode</label>
                            <input type="text" name="" id="" class="txtBox">
                            <button type="submit" class="webBtn"><?= $content['banner_button_text'] ?></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="image"><img src="<?= getImageSrc(UPLOAD_PATH."images/", $content['image1']) ?>" alt=""></div>
        </section>
        <!-- sBanner -->


        <section id="promotion">
            <div class="contain">
                <h2 class="heading text-center"><?= $content['second_heading'] ?></h2>
                <div class="promoBlk">
                    <div class="inside">
                        <div class="icon"><img src="<?=base_url()?>assets/images/iron_logo.svg" alt=""></div>
                        <div class="txt">
                            <h3>5x Shirt on Hanger Wash & Iron</h3>
                            <p>This offer will expire on: 07/25/2021</p>
                            <p>Offer exclusive to this vendor.</p>
                        </div>
                        <div class="side">
                            <div class="price">£20</div>
                            <div class="bTn"><a href="?" class="webBtn mdBtn blockBtn">Order Now</a></div>
                        </div>
                    </div>
                    <div class="btm">Added By: @IHATEIRONING</div>
                </div>
                <div class="promoBlk">
                    <div class="inside">
                        <div class="icon"><img src="<?=base_url()?>assets/images/iron_logo.svg" alt=""></div>
                        <div class="txt">
                            <h3>5x Shirt on Hanger Wash & Iron</h3>
                            <p>This offer will expire on: 07/25/2021</p>
                            <p>Offer exclusive to this vendor.</p>
                        </div>
                        <div class="side">
                            <div class="price">£20</div>
                            <div class="bTn"><a href="?" class="webBtn mdBtn blockBtn">Order Now</a></div>
                        </div>
                    </div>
                    <div class="btm">Added By: @IHATEIRONING</div>
                </div>
                <div class="promoBlk">
                    <div class="inside">
                        <div class="icon"><img src="<?=base_url()?>assets/images/iron_logo.svg" alt=""></div>
                        <div class="txt">
                            <h3>5x Shirt on Hanger Wash & Iron</h3>
                            <p>This offer will expire on: 07/25/2021</p>
                            <p>Offer exclusive to this vendor.</p>
                        </div>
                        <div class="side">
                            <div class="price">£20</div>
                            <div class="bTn"><a href="?" class="webBtn mdBtn blockBtn">Order Now</a></div>
                        </div>
                    </div>
                    <div class="btm">Added By: @IHATEIRONING</div>
                </div>
                <div class="promoBlk">
                    <div class="inside">
                        <div class="icon"><img src="<?=base_url()?>assets/images/iron_logo.svg" alt=""></div>
                        <div class="txt">
                            <h3>5x Shirt on Hanger Wash & Iron</h3>
                            <p>This offer will expire on: 07/25/2021</p>
                            <p>Offer exclusive to this vendor.</p>
                        </div>
                        <div class="side">
                            <div class="price">£20</div>
                            <div class="bTn"><a href="?" class="webBtn mdBtn blockBtn">Order Now</a></div>
                        </div>
                    </div>
                    <div class="btm">Added By: @IHATEIRONING</div>
                </div>
                <div class="promoBlk">
                    <div class="inside">
                        <div class="icon"><img src="<?=base_url()?>assets/images/iron_logo.svg" alt=""></div>
                        <div class="txt">
                            <h3>5x Shirt on Hanger Wash & Iron</h3>
                            <p>This offer will expire on: 07/25/2021</p>
                            <p>Offer exclusive to this vendor.</p>
                        </div>
                        <div class="side">
                            <div class="price">£20</div>
                            <div class="bTn"><a href="?" class="webBtn mdBtn blockBtn">Order Now</a></div>
                        </div>
                    </div>
                    <div class="btm">Added By: @IHATEIRONING</div>
                </div>
            </div>
        </section>
        <!-- promotion -->


    </main>
    <?php $this->load->view('includes/footer');?>
</body>

</html>