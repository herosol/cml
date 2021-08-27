<!doctype html>
<html>

<head>
    <title>My Orders — Compare My Laundry</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-buyer'); ?>
    <main dash account>
        <?php $this->load->view('includes/sidebar-buyer'); ?>


        <section id="orders">
            <div class="contain-fluid">
                <div class="blk topBlk">
                    <div class="ico"><img src="<?= get_site_image_src("members", $mem_data->mem_image, ''); ?>" alt=""></div>
                    <div class="txt">
                        <h3><span class="regular">Welcome,</span> Dear, <?=$mem_data->mem_fname.' '.$mem_data->mem_lname?>!<span class="regular">Nice to see you again.</span></h3>
                    </div>
                    <div class="bTn">
                         <a href="<?= base_url()?>buyer/orders" class="webBtn mdBtn simpleBtn">Cancel Orders</a>
                    </div>
                </div>
                <?php if(!empty($orders)){ ?>
                <?php foreach($orders as $order){ ?>
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="orderBlk blk <?= $order->order_status == 'Completed' ? 'expire' :'' ?>">
                            <div class="inside">
                                <div class="lSide">
                                    <div class="_header">
                                        <h3> <?= $order->order_status == 'Completed' ? 'Previous Order' :'Current Order' ?></h3>
                                        <div class="cmpnyLogo icon"><img src="<?= get_site_image_src("members", $order->mem_image, 'thumb_'); ?>" alt=""></div>
                                    </div>
                                    <h5>Quantity</h5>
                                    <ul class="itmLst flex">
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="10">
                                                    <strong>01</strong>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="40">
                                                    <strong>04</strong>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="70">
                                                    <strong>07</strong>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="90">
                                                    <strong>09</strong>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="br"></div>
                                    <h5>Items</h5>
                                    <ul class="itmLst flex">
                                        <li>
                                            <span class="badge">Shirt</span>
                                        </li>
                                        <li>
                                            <span class="badge">On Hanger</span>
                                        </li>
                                        <li>
                                            <span class="badge">Bed Sheet</span>
                                        </li>
                                        <li>
                                            <span class="badge">Trouser</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="rSide">
                                    <ul class="list">
                                        <li class="semi">
                                            <div>Service</div>
                                            <div>Price</div>
                                        </li>
                                        <li>
                                            <div>Iron Only</div>
                                            <div>£3.20</div>
                                        </li>
                                        <li>
                                            <div>Duvets & Bulky Items</div>
                                            <div>£5.20</div>
                                        </li>
                                        <li>
                                            <div>Wash & Dry - Mixed</div>
                                            <div>£9.20</div>
                                        </li>
                                        <li>
                                            <hr>
                                        </li>
                                        <li>
                                            <div>Collection & Delivery Charges</div>
                                            <div>Free</div>
                                        </li>
                                        <li>
                                            <div>Minimum Order</div>
                                            <div>£20.00</div>
                                        </li>
                                        <li>
                                            <div>Minimum Order Fee</div>
                                            <div>£0.00</div>
                                        </li>
                                        <li>
                                            <hr>
                                        </li>
                                        <li class="semi">
                                            <div>Estimated Total</div>
                                            <div>£40.20</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btm">
                                <div class="status processed">Order Processing</div>
                                <span>Order placed: Fri, 25 Jun 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="otpBlk blk">
                            <h3>OTP: 47883</h3>
                            <ul class="pickDrop">
                                <li>
                                    <div class="inner">
                                        <h5>Pick Up</h5>
                                        <div class="icon"><img src="<?= base_url()?>assets/images/vector-briefcase.svg" alt=""></div>
                                        <span>Office</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <h5>Drop Off</h5>
                                        <div class="icon"><img src="<?= base_url()?>assets/images/vector-home.svg" alt=""></div>
                                        <span>Home</span>
                                    </div>
                                </li>
                            </ul>
                            <h6>Contact No. <em class="regular">074029845392</em></h6>
                            <h6>Delivery Option. <em class="regular">Driver drops, rings and waits</em></h6>
                            <div class="btm">
                                <!-- <div class="icon"><img src="<?= base_url()?>assets/images/vector-wait.svg" alt=""></div> -->
                                <div class="bTn text-center">
                                    <a href="<?= base_url('buyer/order_detail/').doEncode($order->order_id) ?>" class="webBtn mdBtn blankBtn borderBtn">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php   
                    }
                    }else{
                ?>
                    <div class="row">
                        <h1>No Orders Found.... !</h1>
                    </div>
                <?php } ?>
                <div class="flexRow flex">    
                    <div class="col col1">
                        <div class="orderBlk blk expire">
                            <div class="inside">
                                <div class="lSide">
                                    <div class="_header">
                                        <h3>Previous Order</h3>
                                        <div class="cmpnyLogo icon"><img src="<?= base_url()?>assets/images/iron_logo2.svg" alt=""></div>
                                    </div>
                                    <h5>Quantity</h5>
                                    <ul class="itmLst flex">
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="10">
                                                    <strong>01</strong>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="40">
                                                    <strong>04</strong>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="70">
                                                    <strong>07</strong>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="90">
                                                    <strong>09</strong>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="br"></div>
                                    <h5>Items</h5>
                                    <ul class="itmLst flex">
                                        <li>
                                            <span class="badge">Shirt</span>
                                        </li>
                                        <li>
                                            <span class="badge">On Hanger</span>
                                        </li>
                                        <li>
                                            <span class="badge">Bed Sheet</span>
                                        </li>
                                        <li>
                                            <span class="badge">Trouser</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="rSide">
                                    <ul class="list">
                                        <li class="semi">
                                            <div>Service</div>
                                            <div>Price</div>
                                        </li>
                                        <li>
                                            <div>Iron Only</div>
                                            <div>£3.20</div>
                                        </li>
                                        <li>
                                            <div>Duvets & Bulky Items</div>
                                            <div>£5.20</div>
                                        </li>
                                        <li>
                                            <div>Wash & Dry - Mixed</div>
                                            <div>£9.20</div>
                                        </li>
                                        <li>
                                            <hr>
                                        </li>
                                        <li>
                                            <div>Collection & Delivery Charges</div>
                                            <div>Free</div>
                                        </li>
                                        <li>
                                            <div>Minimum Order</div>
                                            <div>£20.00</div>
                                        </li>
                                        <li>
                                            <div>Minimum Order Fee</div>
                                            <div>£0.00</div>
                                        </li>
                                        <li>
                                            <hr>
                                        </li>
                                        <li class="semi">
                                            <div>Estimated Total</div>
                                            <div>£40.20</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="otpBlk blk expire">
                            <h3>Order Code</h3>
                            <h2>#BCY7095</h2>
                            <h5>Collected On:</h5>
                            <p>Friday, 25 Jun 2021 <br> 9am - 11am</p>
                            <h5>Delivery:</h5>
                            <p>Friday, 25 Jun 2021 <br> 9am - 11am</p>
                        </div>
                    </div>
                </div>
                <div class="flexRow flex">    
                    <div class="col col1">
                        <div class="orderBlk blk expire">
                            <div class="inside">
                                <div class="lSide">
                                    <div class="_header">
                                        <h3>Previous Order</h3>
                                        <div class="cmpnyLogo icon"><img src="<?= base_url()?>assets/images/iron_logo.svg" alt=""></div>
                                    </div>
                                    <h5>Quantity</h5>
                                    <ul class="itmLst flex">
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="10">
                                                    <strong>01</strong>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="40">
                                                    <strong>04</strong>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="70">
                                                    <strong>07</strong>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="90">
                                                    <strong>09</strong>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="br"></div>
                                    <h5>Items</h5>
                                    <ul class="itmLst flex">
                                        <li>
                                            <span class="badge">Shirt</span>
                                        </li>
                                        <li>
                                            <span class="badge">On Hanger</span>
                                        </li>
                                        <li>
                                            <span class="badge">Bed Sheet</span>
                                        </li>
                                        <li>
                                            <span class="badge">Trouser</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="rSide">
                                    <ul class="list">
                                        <li class="semi">
                                            <div>Service</div>
                                            <div>Price</div>
                                        </li>
                                        <li>
                                            <div>Iron Only</div>
                                            <div>£3.20</div>
                                        </li>
                                        <li>
                                            <div>Duvets & Bulky Items</div>
                                            <div>£5.20</div>
                                        </li>
                                        <li>
                                            <div>Wash & Dry - Mixed</div>
                                            <div>£9.20</div>
                                        </li>
                                        <li>
                                            <hr>
                                        </li>
                                        <li>
                                            <div>Collection & Delivery Charges</div>
                                            <div>Free</div>
                                        </li>
                                        <li>
                                            <div>Minimum Order</div>
                                            <div>£20.00</div>
                                        </li>
                                        <li>
                                            <div>Minimum Order Fee</div>
                                            <div>£0.00</div>
                                        </li>
                                        <li>
                                            <hr>
                                        </li>
                                        <li class="semi">
                                            <div>Estimated Total</div>
                                            <div>£40.20</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="otpBlk blk expire">
                            <h3>Order Code</h3>
                            <h2>#BCY7095</h2>
                            <h5>Collected On:</h5>
                            <p>Friday, 25 Jun 2021 <br> 9am - 11am</p>
                            <h5>Delivery:</h5>
                            <p>Friday, 25 Jun 2021 <br> 9am - 11am</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- orders -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>