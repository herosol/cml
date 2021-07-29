<div class="row">
    <?php if(access(2)):?>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a href="<?= site_url(ADMIN.'/products') ?>">
            <div class="tile-stats tile-green">
                <div class="icon"><i class="entypo-basket"></i></div>
                <div class="num" data-start="0" data-end="<?= $total_products?>" data-postfix="" data-duration="1500" data-delay="0"><?= $total_products?></div>
                <h3>Total Products </h3>
                <p>Total Products in our website </p>
            </div>
        </a>
    </div>
    <?php endif?>
    <?php if(is_admin()):?>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a href="<?= site_url(ADMIN.'/settings') ?>">
            <div class="tile-stats tile-black">
                <div class="icon"><i class="fa fa-cogs"></i></div>
                <div class="num" data-start="0" data-end="0" data-postfix="" data-duration="1500" data-delay="1800"> Settings</div>

                <h3>Change Settings</h3>
                <p>on our site right now.</p>
            </div>
        </a>		
    </div>
    <?php endif?>
</div>
