<!doctype html>
<html>

<head>
    <title>Sign in — Compare My Laundry</title>
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
                            <form action="<?= $base_url ?>buyer/dashboard.php" method="post">
                                <h2 class="heading">Sign in</h2>
                                <h6>Email Address</h6>
                                <div class="txtGrp">
                                    <label for="">eg: sample@gmail.com</label>
                                    <input type="text" name="" id="" class="txtBox">
                                </div>
                                <h6>Password</h6>
                                <div class="txtGrp pasDv">
                                    <label for="">••••••••</label>
                                    <input type="password" name="" id="" class="txtBox">
                                    <i class="icon-eye" id="eye"></i>
                                </div>
                                <div class="txtGrp flex">
                                    <div class="lblBtn">
                                        <input type="checkbox" name="" id="remember" checked="">
                                        <label for="remember">Remember me</label>
                                    </div>
                                    <a href="<?= $base_url ?>forgot-password.php" id="pass">Forgot Password?</a>
                                </div>
                                <div class="bTn text-center">
                                    <button type="submit" class="webBtn lgBtn blockBtn">Sign in</button>
                                </div>
                                <div class="haveAccount text-center">
                                    <span>Don’t have an account?</span>
                                    <a href="<?= $base_url ?>signup.php">Sign up</a>
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