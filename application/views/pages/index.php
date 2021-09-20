<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
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
                            <h1><?= $content['banner_heading'] ?></h1>
                            <p><?= $content['banner_detail'] ?></p>
                            <div class="bTn">
                                <a href="<?= base_url($content['banner_button_link']) ?>" class="webBtn"><?= $content['banner_button_text'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image"><img src="<?= getImageSrc(UPLOAD_PATH."images/", $content['image1']) ?>" alt=""></div>
        </section>
        <!-- banner -->

        <section id="query">
            <div class="contain">
                <div class="inBlk">
                    <?php echo showMsg(); ?>
                    <form action="" >
                        <?php if(empty($this->session->mem_type) || $this->session->mem_type == 'buyer'): ?>
                            <div class="flexBox">
                                <div class="txtGrp">
                                    <label for="zip">Type your Postcode</label>
                                    <input type="text" name="zip" id="zip" class="txtBox">
                                </div>
                                <div class="bTn"><button type="button" class="webBtn" id="searchZipForm"><i class="spinner hidden"></i><?= $content['search_btn_title'] ?></button></div>
                            </div>
                        <?php endif; ?>
                        <span style="color:red" id="invalidZip"></span>
                    </form>
                    <div class="flexRow flex">
                        <div class="col">
                            <ul class="lst">
                                <li>
                                    <img src="<?= base_url() ?>assets/images/icon-envelope-fill.svg" alt="">
                                    <strong><?= $content['general_label'] ?></strong>
                                    <a href="mailto:contactus@comparemylaundry.com"><?= $site_settings->site_general_email ?></a>
                                </li>
                                <li>
                                    <img src="<?= base_url() ?>assets/images/icon-envelope-fill.svg" alt="">
                                    <strong><?= $content['order_label'] ?></strong>
                                    <a href="mailto:<?= $site_settings->site_general_email ?>"><?= $site_settings->site_general_email ?></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="conect flex">
                                <li><strong><?= $content['social_label'] ?></strong></li>
                                <?php if ($site_settings->site_facebook): ?>
                                <li>
                                    <a href="<?=makeExternalUrl($site_settings->site_facebook)?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-facebook.svg" alt=""></a>
                                    <em>Facebook</em>
                                </li>
                                <?php endif ?>
                                <?php if ($site_settings->site_twitter): ?>
                                <li>
                                    <a href="<?=makeExternalUrl($site_settings->site_twitter)?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-twitter.svg" alt=""></a>
                                    <em>Twitter</em>
                                </li>
                                <?php endif ?>
                                <?php if ($site_settings->site_instagram): ?>
                                <li>
                                    <a href="<?=makeExternalUrl($site_settings->site_instagram)?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-instagram.svg" alt=""></a>
                                    <em>Instagram</em>
                                </li>
                                <?php endif ?>
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
                    <h1 class="heading"><?= $content['deals_headings'] ?></h1>
                    <p><?= $content['deals_tagline'] ?></p>
                </div>
                <div class="flexRow flex text-center">
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?=getImageSrc(UPLOAD_PATH."images/", $content['image10'])?>" alt=""></div>
                            <div class="txt">
                                <h4><?= $content['deal1_heading'] ?></h4>
                                <p><?= $content['deal1_details'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?=getImageSrc(UPLOAD_PATH."images/", $content['image11'])?>" alt=""></div>
                            <div class="txt">
                                <h4><?= $content['deal2_heading'] ?></h4>
                                <p><?= $content['deal2_details'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?=getImageSrc(UPLOAD_PATH."images/", $content['image12'])?>" alt=""></div>
                            <div class="txt">
                                <h4><?= $content['deal3_heading'] ?></h4>
                                <p><?= $content['deal3_details'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?=getImageSrc(UPLOAD_PATH."images/", $content['image13'])?>" alt=""></div>
                            <div class="txt">
                                <h4><?= $content['deal4_heading'] ?></h4>
                                <p><?= $content['deal4_details'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bTn formBtn text-center">
                    <a href="<?= base_url($content['deals_button_link']) ?>" class="webBtn"><?= $content['deals_button_text'] ?></a>
                </div>
            </div>
        </section>
        <!-- deals -->

        <section id="works">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="content">
                            <h1 class="heading"><?= $content['section3_heading'] ?></h1>
                            <p><?= $content['section3_desc'] ?></p>
                            <div class="bTn">
                                <a href="<?= base_url($content['section3_button_link']) ?>" class="webBtn"><?= $content['section3_button_text'] ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="image"><img src="<?=getImageSrc(UPLOAD_PATH."images/", $content['image2'])?>" alt=""></div>
                    </div>
                </div>
                <hr>
                <div class="itmRow flex text-center">
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?=getImageSrc(UPLOAD_PATH."images/", $content['image3'])?>" alt=""></div>
                            <div class="txt">
                                <h4><?= $content['card1_heading'] ?></h4>
                                <p><?= $content['card1_details'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?=getImageSrc(UPLOAD_PATH."images/", $content['image4'])?>" alt=""></div>
                            <div class="txt">
                                <h4><?= $content['card2_heading'] ?></h4>
                                <p><?= $content['card2_details'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?=getImageSrc(UPLOAD_PATH."images/", $content['image5'])?>" alt=""></div>
                            <div class="txt">
                                <h4><?= $content['card3_heading'] ?></h4>
                                <p><?= $content['card3_details'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bTn formBtn text-center">
                    <a href="<?= base_url($content['cards_button_link']) ?>" class="webBtn"><?= $content['cards_button_text'] ?></a>
                </div>
            </div>
        </section>
        <!-- works -->


        <section id="choose">
            <div class="contain">
                <h1 class="heading text-center"><?= $content['section4_heading'] ?></h1>
                <div class="flexRow flex">
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?=getImageSrc(UPLOAD_PATH."images/", $content['image6'])?>" alt=""></div>
                            <div class="txt">
                                <h4><?= $content['media1_heading'] ?></h4>
                                <p> <?= $content['media1_detail'] ?> </p>
                                <div class="bTn"><a href="<?= base_url($content['media1_button_link']) ?>" class="webBtn labelBtn"><i class="fi-arrow-right-long"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?=getImageSrc(UPLOAD_PATH."images/", $content['image7'])?>" alt=""></div>
                            <div class="txt">
                                <h4><?= $content['media2_heading'] ?></h4>
                                <p> <?= $content['media2_detail'] ?> </p>
                                <div class="bTn"><a href="<?= base_url($content['media2_button_link']) ?>" class="webBtn labelBtn"><i class="fi-arrow-right-long"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?=getImageSrc(UPLOAD_PATH."images/", $content['image8'])?>" alt=""></div>
                            <div class="txt">
                                <h4><?= $content['media3_heading'] ?></h4>
                                <p> <?= $content['media3_detail'] ?> </p>
                                <div class="bTn"><a href="<?= base_url($content['media3_button_link']) ?>" class="webBtn labelBtn"><i class="fi-arrow-right-long"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="icon"><img src="<?=getImageSrc(UPLOAD_PATH."images/", $content['image9'])?>" alt=""></div>
                            <div class="txt">
                                <h4><?= $content['media4_heading'] ?></h4>
                                <p> <?= $content['media4_detail'] ?> </p>
                                <div class="bTn"><a href="<?= base_url($content['media4_button_link']) ?>" class="webBtn labelBtn"><i class="fi-arrow-right-long"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- choose -->

        <?php if(!empty($testimonials)){ ?>
        <section id="folio">
            <div class="contain text-center">
                <h1 class="heading"><?= $content['testimonials_heading'] ?></h1>
                <div class="owlBlock">
                    <div id="owl-folio" class="owl-carousel owl-theme">
                        <?php foreach($testimonials as $testimonial){ ?>
                        <div class="inner">
                            <div class="content">
                                <p><?= $testimonial->detail ?></p>
                                <div class="icoBlk">
                                    <div class="ico"><img src="<?=getImageSrc(UPLOAD_PATH."testimonials/", $testimonial->image)?>" alt=""></div>
                                    <h5><?= $testimonial->name ?> <span><?= $testimonial->city ?></span></h5>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
        <!-- folio -->
        <section id="comfort">
            <div class="contain">
                <div class="content text-center">
                    <h1 class="heading"><?= $content['last_heading'] ?></h1>
                    <p><?= $content['last_desc'] ?></p>
                </div>
            </div>
        </section>
        <!-- comfort -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmqmsf3pVEVUoGAmwerePWzjUClvYUtwM&libraries=geometry,places&ext=.js"></script>
        <script>
            $(document).on('click', '#searchZipForm', () => {
                let frmIcon = $(this).find("i.spinner");
                frmIcon.removeClass("hidden");
                let zipcode = $.trim($('#zip').val());
                if(zipcode.length == 0)
                    return false;

                $('#invalidZip').html('');
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode(
                { 
                componentRestrictions: { 
                    country: 'gb', 
                    postalCode: zipcode
                } 
                }, function (results, status)
                {
                    if (status == google.maps.GeocoderStatus.OK)
                    {
                        $('#invalidZip').html('');
                        latitude = results[0].geometry.location.lat();
                        longitude = results[0].geometry.location.lng();
                        window.location = base_url + 'service-selection?zipcode=' + zipcode + '&lat=' + latitude + '&long=' + longitude;
                    }
                    else
                    {
                        frmIcon.addClass("hidden");
                        $('#invalidZip').html('Please enter a valid zip.');
                    }
                });
            });
        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>