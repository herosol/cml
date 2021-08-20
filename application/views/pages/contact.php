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
                            <h1 class="heading"><?= $content['heading'] ?></h1>
                            <p><?= $content['detail'] ?></p>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="logBlk">
                            <form action="<?= base_url('ajax/contact') ?>" class="frmAjax" method="post" id="frmContact">
                                <h3 class="heading"><?= $content['form_heading'] ?></h3>
                                <div class="alertMsg" style="display:none"></div>
                                <div class="txtGrp">
                                    <label for="">Name</label>
                                    <input type="text" name="name" id="name" class="txtBox">
                                </div>
                                <div class="txtGrp">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" id="phone" class="txtBox">
                                </div>
                                <div class="txtGrp">
                                    <label for="">Subject</label>
                                    <input type="text" name="subject" id="subject" class="txtBox">
                                </div>
                                <div class="txtGrp">
                                    <label for="">Email Address</label>
                                    <input type="text" name="email" id="email" class="txtBox">
                                </div>
                                <div class="txtGrp">
                                    <label for="">Comments</label>
                                    <textarea name="msg" id="msg" class="txtBox"></textarea>
                                </div>
                                <div class="bTn formBtn"><button type="submit" class="webBtn"><?= $content['btn_title'] ?> <i class="fi-arrow-right"></i></button></div>
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