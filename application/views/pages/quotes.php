<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master');?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header');?>
    <main common quotes>


        <section id="sBanner">
            <div class="contain">
                <div class="content">
                    <h2 class="heading">Quotes</h2>
                    <p>Deleniti iste earum sed est distinctio corporis dolore autem, omnis facere amet blanditiis velit!</p>
                </div>
            </div>
            <div class="image"><img src="<?= base_url() ?>assets/images/illustration_promotion.svg" alt=""></div>
        </section>
        <!-- sBanner -->


        <section id="quotes">
            <div class="contain">
                <h2 class="heading text-center">Best Deals in your Area</h2>
                <div class="flexRow flex">
                    <?php foreach($vendors as $key => $row): ?>
                        <div class="col">
                            <div class="srchBlk">
                                <div class="icoBlk">
                                    <div class="icon"><img src="<?= get_site_image_src("members", $row->mem_image, ''); ?>" alt=""></div>
                                    <h6><?=$row->mem_fname.' '.$row->mem_lname?></h6>
                                    <div class="rateYo"></div>
                                    <small><?=round($row->distance, 2)?> Miles Away</small>
                                    <?php if($row->mem_company_pickdrop == 'yes'): ?>
                                        <div class="fig"><img src="<?=base_url()?>assets/images/vector-wait.svg" alt=""></div>
                                        <p class="small">Pickup & Delivery Service Available</p>    
                                    <?php endif; ?>
                                    <div class="priceBlk">
                                        <strong>Estimated Price</strong>
                                        <div class="price">£<?=$row->estimated_price?></div>
                                        <div class="bTn">
                                            <a href="<?= base_url() ?>vendor-detail/<?=doEncode($row->mem_id)?>/<?=doEncode(round($row->distance, 2))?>" class="webBtn mdBtn blockBtn">View Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="bTn formBtn text-center">
                    <a href="?" class="webBtn lightBtn">More Quotes <i class="fi-arrow-right"></i></a>
                </div>
            </div>
        </section>
        <!-- quotes -->


    </main>
    <?php $this->load->view('includes/footer');?></body>

</html>