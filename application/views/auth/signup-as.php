<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main logon>


        <section id="logon">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="content">
                            <h2 class="heading"><?= $content['heading'] ?></h2>
                            <p><?= $content['detail'] ?></p>
                        </div>
                        <div class="image image2"><img src="<?= getImageSrc(UPLOAD_PATH."images/", $content['image1']) ?>" alt=""></div>
                    </div>
                    <div class="col col2">
                        <div class="logBlk">
                            <form action="dashboard.php" method="post">
                                <h2 class="heading">Sign up as</h2>
                                <p>Sign up as</p>
                                <div class="bTn formBtn text-center">
                                    <!-- <button type="submit" class="webBtn lgBtn blockBtn">Individual</button> -->
                                    <a href="<?= base_url() ?>buyer/signup" class="webBtn lgBtn blockBtn">Individual</a>
                                </div>
                                <div class="bTn formBtn text-center">
                                    <!-- <button type="submit" class="webBtn lgBtn blockBtn">Vendor</button> -->
                                    <a href="<?= base_url() ?>vendor/signup" class="webBtn lgBtn blockBtn">Vendor</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- logon -->


        <!-- Main Js -->
        <script type="text/javascript" src="<?= base_url() ?>assets/js/main.js"></script>
    </main>
</body>

</html>