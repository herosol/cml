<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master');?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header');?>
    <main contact>


        <section id="logon">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="content">
                            <h1 class="heading"><?= $content{'heading'} ?></h1>
                            <p><?= $content{'detail'} ?></p>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="logBlk">
                            <form action="" method="post">
                                <h3 class="heading"><?= $content{'form_heading'} ?></h3>
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
                                <div class="bTn formBtn"><button type="submit" class="webBtn"><?= $content{'btn_title'} ?> <i class="fi-arrow-right"></i></button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- logon -->


        <!-- Main Js -->
    </main>
    <?php $this->load->view('includes/footer');?>
</body>

</html>