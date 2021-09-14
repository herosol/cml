<!doctype html>
<html>

<head>
    <title>Order Confirmed — Compare My Laundry</title>
    <?php $this->load->view('includes/site-master');?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header');?>
    <main common terms>


        <section id="sBanner">
            <div class="contain">
                <div class="content">
                    <h2 class="heading">Order Confirmed</h2>
                    <p>Deleniti iste earum sed est distinctio corporis dolore autem, omnis facere amet blanditiis velit!</p>
                </div>
            </div>
            <div class="image"><img src="<?= base_url() ?>assets/images/illustration_terms.svg" alt=""></div>
        </section>
        <!-- sBanner -->


        <section id="place">
            <div class="contain text-center">
                <h2 class="heading">Order Cancelled</h2>
                <div class="blk">
                    <h3 class="color">Your order has been cancelled successfully.</h3>
                </div>
            </div>
        </section>
        <!-- place -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>