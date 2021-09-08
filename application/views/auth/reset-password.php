<!doctype html>
<html>

<head>
    <title>Reset Password — Compare My Laundry</title>
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
                            <form action="" method="post" id="frmReset" class="frmAjax">
                                <h2 class="heading">Reset Password</h2>
                                <div class="alertMsg" style="display:none"></div>
                                <p>Enter a new password for your account.</p>
                                <h6>Password</h6>
                                <div class="txtGrp pasDv">
                                    <label for="pswd">••••••••</label>
                                    <input type="password" name="pswd" id="password" class="txtBox pr-password">
                                    <i class="icon-eye" id="eye"></i>
                                </div>
                                <h6>Confirm Password</h6>
                                <div class="txtGrp pasDv">
                                    <label for="cpswd">••••••••</label>
                                    <input type="password" name="cpswd" id="cpassword" class="txtBox">
                                    <i class="icon-eye" id="eye"></i>
                                </div>
                                <div class="bTn text-center">
                                    <button type="submit" class="webBtn lgBtn blockBtn"><i class="spinner hidden"></i>Change my Password</button>
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