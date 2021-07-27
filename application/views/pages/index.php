<!doctype html>
<html>

<head>
    <title>Home — Compare My Laundry</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main index>


        <section id="banner" class="flexBox">
            <div class="flexDv">
                <div class="contain">
                    <div class="outer">
                        <div class="content">
                            <h1>Laundry Comparison Service</h1>
                            <p>Proin gravida nibh vel velit auctor aliquet.</p>
                            <div class="bTn">
                                <a href="<?= $base_url ?>about.php" class="webBtn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image"><img src="<?= base_url() ?>assets/images/illustration_home.svg" alt=""></div>
        </section>
        <!-- banner -->


        <section id="query">
            <div class="contain">
                <div class="inBlk">
                    <form action="<?= $base_url ?>service-selection.php" method="post">
                        <div class="flexBox">
                            <div class="txtGrp">
                                <label for="">Type your Postcode</label>
                                <input type="text" class="txtBox">
                            </div>
                            <div class="bTn"><button type="submit" class="webBtn">Search</button></div>
                        </div>
                    </form>
                    <div class="flexRow flex">
                        <div class="col">
                            <ul class="lst">
                                <li>
                                    <img src="<?= base_url() ?>assets/images/icon-envelope-fill.svg" alt="">
                                    <strong>General Enquires</strong>
                                    <a href="mailto:contactus@comparemylaundry.com">contactus@comparemylaundry.com</a>
                                </li>
                                <li>
                                    <img src="<?= base_url() ?>assets/images/icon-envelope-fill.svg" alt="">
                                    <strong>Order Relarted Enquires</strong>
                                    <a href="mailto:orders@comparemylaundry.com">orders@comparemylaundry.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="conect flex">
                                <li><strong>Connect with us:</strong></li>
                                <li>
                                    <a href="?"><img src="<?= base_url() ?>assets/images/social-facebook.svg" alt=""></a>
                                    <em>Facebook</em>
                                </li>
                                <li>
                                    <a href="?"><img src="<?= base_url() ?>assets/images/social-twitter.svg" alt=""></a>
                                    <em>Twitter</em>
                                </li>
                                <li>
                                    <a href="?"><img src="<?= base_url() ?>assets/images/social-instagram.svg" alt=""></a>
                                    <em>Instagram</em>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- query -->


        <section id="deals">
            <div class="contain">
                <div class="content">
                    <h1 class="heading">Current Vendors Deals</h1>
                    <p>Deals featured are subject to area</p>
                </div>
                <div class="flexRow flex text-center">
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-dry.svg" alt=""></div>
                            <div class="txt">
                                <h4>Dry Cleaning Service</h4>
                                <p>Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-wash.svg" alt=""></div>
                            <div class="txt">
                                <h4>Wash & Iron Service</h4>
                                <p>Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-leather.svg" alt=""></div>
                            <div class="txt">
                                <h4>5% Off Leather Repair</h4>
                                <p>Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-ironing.svg" alt=""></div>
                            <div class="txt">
                                <h4>Free Ironing on Orders Over £40</h4>
                                <p>Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bTn formBtn text-center">
                    <a href="?" class="webBtn">Search for Deals</a>
                </div>
            </div>
        </section>
        <!-- deals -->


        <section id="works">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="content">
                            <h1 class="heading">How it works</h1>
                            <p>Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                            <div class="bTn">
                                <a href="<?= $base_url ?>about.php" class="webBtn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="image"><img src="<?= base_url() ?>assets/images/illustration_home2.svg" alt=""></div>
                    </div>
                </div>
                <hr>
                <div class="itmRow flex text-center">
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-searching.svg" alt=""></div>
                            <div class="txt">
                                <h4>1- You Search</h4>
                                <p>Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-compare.svg" alt=""></div>
                            <div class="txt">
                                <h4>2- We Compare</h4>
                                <p>Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-smile.svg" alt=""></div>
                            <div class="txt">
                                <h4>3- You Book</h4>
                                <p>Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bTn formBtn text-center">
                    <a href="?" class="webBtn">Compare Your Laundry now</a>
                </div>
            </div>
        </section>
        <!-- works -->


        <section id="choose">
            <div class="contain">
                <h1 class="heading text-center">Why to choose us?</h1>
                <div class="flexRow flex">
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-partner.svg" alt=""></div>
                            <div class="txt">
                                <h4>Professional Employees</h4>
                                <p>Accusantium veritatis delectus aliquam itaque illum odit similique numquam dolorem doloremque impedit, laudantium error!</p>
                                <div class="bTn"><a href="about.php" class="webBtn labelBtn"><i class="fi-arrow-right-long"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-bullhorn.svg" alt=""></div>
                            <div class="txt">
                                <h4>20 years Experience</h4>
                                <p>Accusantium veritatis delectus aliquam itaque illum odit similique numquam dolorem doloremque impedit, laudantium error!</p>
                                <div class="bTn"><a href="about.php" class="webBtn labelBtn"><i class="fi-arrow-right-long"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-reliable.svg" alt=""></div>
                            <div class="txt">
                                <h4>99% 5-Star Reviews</h4>
                                <p>Accusantium veritatis delectus aliquam itaque illum odit similique numquam dolorem doloremque impedit, laudantium error!</p>
                                <div class="bTn"><a href="about.php" class="webBtn labelBtn"><i class="fi-arrow-right-long"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-secure.svg" alt=""></div>
                            <div class="txt">
                                <h4>Full-Satisfaction Guarantee</h4>
                                <p>Accusantium veritatis delectus aliquam itaque illum odit similique numquam dolorem doloremque impedit, laudantium error!</p>
                                <div class="bTn"><a href="about.php" class="webBtn labelBtn"><i class="fi-arrow-right-long"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- choose -->


        <section id="folio">
            <div class="contain text-center">
                <h1 class="heading">What they’re saying</h1>
                <div class="owlBlock">
                    <div id="owl-folio" class="owl-carousel owl-theme">
                        <div class="inner">
                            <div class="content">
                                <p>Awesome experience! I will be using Hero for other products for sure. The response rate and communication has been the best I've experienced on this platform for sure.</p>
                                <div class="icoBlk">
                                    <div class="ico"><img src="<?= base_url() ?>assets/images/users/5.jpg" alt=""></div>
                                    <h5>Erika Zannie <span>Mountlake Terrace, WA</span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="inner">
                            <div class="content">
                                <p>Awesome experience! I will be using Hero for other products for sure. The response rate and communication has been the best I've experienced on this platform for sure.</p>
                                <div class="icoBlk">
                                    <div class="ico"><img src="<?= base_url() ?>assets/images/users/1.jpg" alt=""></div>
                                    <h5>Jennifer Kem <span>Seattle, WA</span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="inner">
                            <div class="content">
                                <p>Awesome experience! I will be using Hero for other products for sure. The response rate and communication has been the best I've experienced on this platform for sure.</p>
                                <div class="icoBlk">
                                    <div class="ico"><img src="<?= base_url() ?>assets/images/users/6.jpg" alt=""></div>
                                    <h5>Brent Phillips <span>Mountlake Terrace, WA</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- folio -->


        <section id="comfort">
            <div class="contain">
                <div class="content text-center">
                    <h1 class="heading">Conveniency</h1>
                    <p>Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                    <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
                </div>
            </div>
        </section>
        <!-- comfort -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>