<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master');?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header');?>
    <main common faq>


        <section id="sBanner">
            <div class="contain">
                <div class="content">
                    <h2 class="heading"><?= $content['heading'] ?></h2>
                    <p><?= $content['detail'] ?></p>
                </div>
            </div>
            <div class="image"><img src="<?= getImageSrc(UPLOAD_PATH."images/", $content['image1']) ?>" alt=""></div>
        </section>
        <!-- sBanner -->


        <section id="faq">
            <div class="contain">
                <div class="flexRow flex">
                    <?php if(!empty($general_faqs)){?>
                    <div class="col">
                        <h3 class="heading"><?= $content['left_heading'] ?></h3>
                        <div class="faqBox">
                            <div class="faqLst">
                                <?php foreach($general_faqs as $faq){?>
                                <div class="faqBlk">
                                    <h5><?= $faq->question ?></h5>
                                    <div class="txt">
                                        <p><?= $faq->answer ?></p>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php 
                    } 
                    if(!empty($most_faqs)){
                    ?>
                    <div class="col">
                        <h3 class="heading"><?= $content['right_heading'] ?></h3>
                        <div class="faqBox">
                            <div class="faqLst">
                            <?php foreach($most_faqs as $faq){?>
                                <div class="faqBlk">
                                    <h5><?= $faq->question ?></h5>
                                    <div class="txt">
                                        <p><?= $faq->answer ?></p>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <form action="" method="post">
                    <h3 class="heading text-center"><?= $content['form_heading'] ?></h3>
                    <div class="txtGrp">
                        <label for="">Name</label>
                        <input type="text" name="" id="" class="txtBox">
                    </div>
                    <div class="txtGrp">
                        <label for="">Phone</label>
                        <input type="text" name="" id="" class="txtBox">
                    </div>
                    <div class="txtGrp">
                        <label for="">Subject</label>
                        <input type="text" name="" id="" class="txtBox">
                    </div>
                    <div class="txtGrp">
                        <label for="">Email Address</label>
                        <input type="text" name="" id="" class="txtBox">
                    </div>
                    <div class="txtGrp">
                        <label for="">Comments</label>
                        <textarea name="" id="" class="txtBox"></textarea>
                    </div>
                    <div class="bTn formBtn"><button type="submit" class="webBtn blockBtn"><?= $content['form_btn_title'] ?></button></div>
                </form>
            </div>
        </section>
        <!-- faq -->


    </main>
    <?php $this->load->view('includes/footer');?>
</body>

</html>