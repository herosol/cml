<!doctype html>
<html>

<head>
    <title>Reset Password — Compare My Laundry</title>
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
                        <div class="image"><img src="<?= $base_url ?>images/illustration_logon.svg" alt=""></div>
                    </div>
                    <div class="col col2">
                        <div class="logBlk">
                            <form action="dashboard.php" method="post">
                                <h2 class="heading">Reset Password</h2>
                                <p>Enter a new password for your account.</p>
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
                                <div class="bTn text-center">
                                    <button type="submit" class="webBtn lgBtn blockBtn">Change my Password</button>
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
        <script type="text/javascript" src="<?= $base_url ?>js/main.js"></script>
    </main>
</body>

</html>