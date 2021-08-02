<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master');?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header');?>
    <main common terms>
        
        <section id="sBanner">
            <div class="contain">
                <div class="content">
                    <h2 class="heading"><?= $content['heading'] ?></h2>
                    <p><?= $content['header_detail'] ?></p>
                </div>
            </div>
            <div class="image"><img src="<?= getImageSrc(UPLOAD_PATH."images/", $content['image1']) ?>" alt=""></div>
        </section>
        <!-- sBanner -->


        <section id="terms">
            <div class="contain">
            <div class="ckEditor">
                    <?= $details ?>
                </div>
            </div>
        </section>
        <!-- terms -->


    </main>
    <?php $this->load->view('includes/footer');?>
</body>

</html>