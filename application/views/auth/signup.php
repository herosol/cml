<!doctype html>
<html>

<head>
    <title>Sign up — Compare My Laundry</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('includes/header.php'); ?>
    <main logon>


        <section id="logon">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="content">
                            <h2 class="heading">Welcome</h2>
                            <p>Debitis rem architecto veniam itaque, atque officia minima obcaecati numquam.</p>
                        </div>
                        <div class="image image2"><img src="<?= $base_url ?>images/illustration_logon2.svg" alt=""></div>
                    </div>
                    <div class="col col2">
                        <div class="logBlk">
                            <form action="<?= $base_url ?>vendor/dashboard.php" method="post">
                                <h2 class="heading">Sign up</h2>
                                <h6>First Name</h6>
                                <div class="txtGrp">
                                    <label for="">eg: John</label>
                                    <input type="text" name="" id="" class="txtBox">
                                </div>
                                <h6>Last Name</h6>
                                <div class="txtGrp">
                                    <label for="">eg: Wick</label>
                                    <input type="text" name="" id="" class="txtBox">
                                </div>
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
                                <h6>Confirm Password</h6>
                                <div class="txtGrp pasDv">
                                    <label for="">••••••••</label>
                                    <input type="password" name="" id="" class="txtBox">
                                    <i class="icon-eye" id="eye"></i>
                                </div>
                                <div class="txtGrp flex">
                                    <div class="lblBtn">
                                        <input type="checkbox" name="" id="confirm">
                                        <label for="confirm">I agree to CML's
                                            <a href="<?= $base_url ?>terms-and-conditions.php">Terms & Conditions</a>
                                            and
                                            <a href="<?= $base_url ?>privacy-policy.php">Privacy Policy.</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="bTn text-center">
                                    <button type="submit" class="webBtn lgBtn blockBtn">Sign up</button>
                                </div>
                                <div class="haveAccount text-center">
                                    <span>Already have an account?</span>
                                    <a href="<?= $base_url ?>signin.php">Sign in</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- logon -->


        <!-- Main Js -->
        <script type="text/javascript" src="<?= $base_url ?>js/main.js"></script>
    </main>
</body>

</html>