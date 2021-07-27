<!doctype html>
<html>

<head>
    <title>Contact us — Compare My Laundry</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('includes/header.php'); ?>
    <main contact>


        <section id="logon">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="content">
                            <h1 class="heading">Start a conversation</h1>
                            <p>Feel free to ask any questions over the contact form. Your message will be dispatched directly to our staff who will get back to you as soon as they can.</p>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="logBlk">
                            <form action="" method="post">
                                <h3 class="heading">Feel free to ask any question</h3>
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
                                <div class="bTn formBtn"><button type="submit" class="webBtn">Submit <i class="fi-arrow-right"></i></button></div>
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