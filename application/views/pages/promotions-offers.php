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
                    <form action="" method="post" class="frm_promo">
                        <div class="txtGrp flexGrp">
                            <label for="">Enter Postcode</label>
                            <input type="text" name="zip_promo" id="zip_promo" class="txtBox">
                            <button type="submit" class="webBtn"><?= $content['banner_button_text'] ?></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="image"><img src="<?= getImageSrc(UPLOAD_PATH."images/", $content['image1']) ?>" alt=""></div>
        </section>
        <!-- sBanner -->
        <?php if(!empty($promos)){ ?>
        <section id="promotion">
            <div class="contain filter_promos">
                <h2 class="heading text-center"><?= $content['second_heading'] ?></h2>
                <?php $count =0; 
                foreach($promos as $promo){ ?>

                <div class="promoBlk">
                    <div class="inside">
                        <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH."promos/", $promo->image) ?>" alt=""></div>
                        <div class="txt">
                            <h3><?= $promo->name ?></h3>
                            <p>This offer will expire on: <?= $promo->expiry_date ?></p>
                            <p><?= $promo->tagline ?></p>
                        </div>
                        <div class="side">
                            <div class="price">£<?= $promo->price ?></div>
                            <div class="bTn"><a href="<?=base_url()?>" class="webBtn mdBtn blockBtn">Order Now</a></div>
                        </div>
                    </div>
                    <div class="btm">Added By:<?= $promo->added_by ?></div>
                </div>
                <?php 
                    if(++$count == 5){
                        break;
                    } 
                } ?>
                
            </div>
        </section>
        <?php }else{ ?>
            <section id="promotion">
            <div class="contain">
                <h2 class="heading text-center">No Promotions Found</h2>
            </div>
        </section>
        <?php } ?>
        <!-- promotion -->


    </main>
    <?php $this->load->view('includes/footer');?>
</body>

</html>