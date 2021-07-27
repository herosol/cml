<!doctype html>
<html>

<head>
    <title>Sign up as — Compare My Laundry</title>
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
                        <div class="image image2"><img src="<?= $base_url ?>images/illustration_logon3.svg" alt=""></div>
                    </div>
                    <div class="col col2">
                        <div class="logBlk">
                            <form action="dashboard.php" method="post">
                                <h2 class="heading">Sign up as</h2>
                                <p>Sign up as</p>
                                <div class="bTn formBtn text-center">
                                    <!-- <button type="submit" class="webBtn lgBtn blockBtn">Individual</button> -->
                                    <a href="<?= $base_url ?>buyer/dashboard.php" class="webBtn lgBtn blockBtn">Individual</a>
                                </div>
                                <div class="bTn formBtn text-center">
                                    <!-- <button type="submit" class="webBtn lgBtn blockBtn">Vendor</button> -->
                                    <a href="<?= $base_url ?>vendor/dashboard.php" class="webBtn lgBtn blockBtn">Vendor</a>
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