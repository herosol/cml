<!doctype html>
<html>

<head>
    <title>Forgot Password — Compare My Laundry</title>
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
                            <h2 class="heading">Welcome</h2>
                            <p>Debitis rem architecto veniam itaque, atque officia minima obcaecati numquam.</p>
                        </div>
                        <div class="image"><img src="<?= base_url() ?>assets/images/illustration_logon.svg" alt=""></div>
                    </div>
                    <div class="col col2">
                        <div class="logBlk">
                            <form action="" method="post" id="frmSignin" class="frmAjax">
                                <h2 class="heading">Forgot Password</h2>
                                <div class="alertMsg" style="display:none"></div>
                                <p>Don’t worry. Just enter the email address you registered with and we’ll email you instructions to reset your password.</p>
                                <h6>Email Address</h6>
                                <div class="txtGrp">
                                    <label for="email">eg: sample@gmail.com</label>
                                    <input type="text" name="email" id="email" class="txtBox">
                                </div>
                                <div class="bTn text-center">
                                    <button type="submit" class="webBtn lgBtn blockBtn"><i class="spinner hidden"></i>Reset Password</button>
                                </div>
                                <div class="haveAccount text-center">
                                    <span>Don’t have an account?</span>
                                    <a href="<?= base_url() ?>signup-as">Sign up</a>
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
        <script type="text/javascript" src="<?= base_url('assets/js/custom-validation.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/custom.js') ?>"></script>
    </main>
</body>

</html>