<!doctype html>
<html>

<head>
    <title>Dashboard — Compare My Laundry</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-vendor'); ?>
    <main dash account>
        <?php $this->load->view('includes/sidebar-vendor'); ?>


        <section id="account">
            <div class="contain-fluid">
            <?php echo showMsg(); ?>
            <?php if(empty($this->data['mem_data']->mem_verified) || $this->data['mem_data']->mem_verified == 0): ?>
            <div id="verify">
                <div class="inBlk blk">
                    <h3 class="heading">Email Verification</h3>
                    <div id="resndCntnt">
                        <p>Please verify your email address, We've sent a verify email to your email address. If you don't see the email, check your spam folder. If you didn't get email click on resend email link, or if you want to change email address click link below.</p>
                        <p><a href="javascript:void(0)" id="rsnd-email">Resend Email</a> OR <a href="javascript:void(0)" class="popBtn" data-popup="change-email">Change Email</a>
                        </p>
                    </div>
                    <div class="appLoad hide">
                        <div class="appLoader"><span class="spiner"></span></div>
                    </div>
                    <div class="popup small-popup" data-popup="change-email">
                        <div class="tableDv">
                            <div class="tableCell">
                                <div class="contain">
                                    <div class="_inner">
                                        <div class="crosBtn"></div>
                                        <h4>Change your Email</h4>
                                        <form action="<?= base_url().'index/change_email'?>" method="post" autocomplete="off" class="frmAjax" id="frmChangeEmail">
                                            <div class="alertMsg" style="display:none"></div>
                                            <div class="txtGrp">
                                                <label for="email">Email Address</label>
                                                <input type="email" id="email" name="email" class="txtBox">
                                            </div>
                                            <div class="bTn text-center mb-1">
                                                <button type="submit" class="webBtn"><i class="spinner hidden"></i>Change your Email</button>
                                            </div>
                                            <br>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="blk topBlk">
                    <div class="ico"><img src="<?= get_site_image_src("members", $mem_data->mem_image, ''); ?>" alt=""></div>
                    <div class="txt">
                        <h3><span class="regular">Welcome,</span> Dear, <?=$mem_data->mem_fname.' '.$mem_data->mem_lname?>!<span class="regular">Nice to see you again.</span></h3>
                    </div>
                    <div class="toggleBlk">
                        <div class="switchBtn">
                            <input type="checkbox" name="" id="" checked>
                            <em></em>
                            <small></small>
                        </div>
                    </div>
                </div>
                <?php if(!empty($this->data['mem_data']->mem_verified) && $this->data['mem_data']->mem_verified == 1): ?>
                <div class="blk">
                    <form action="" method="post" id="vendorProfileSettings" class="frmAjax">
                        <div class="txtGrp upLoadDp">
                            <div class="ico">
                                <img src="<?= get_site_image_src("members", $mem_data->mem_image, ''); ?>" alt="" id="uploadDpPreview">
                            </div>
                            <div class="text-center">
                                <button type="button" class="webBtn smBtn uploadImg" data-upload="dp_image" data-text="Change Photo"></button>
                                <input type="file" name="dp_image" id="dp_image" class="uploadFile" data-upload="dp_image" onchange="PreviewImage();">
                            </div>
                            <div class="noHats text-center">(Please upload your photo)</div>
                        </div>
                        <div class="inside">
                        <div class="alertMsg" style="display:none"></div>
                            <h5>Company Information</h5>
                            <div class="row formRow">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="mem_company_name">Company Name</label>
                                        <input type="text" name="mem_company_name" id="mem_company_name" value="<?=$mem_data->mem_company_name?>" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="mem_company_email">Contact Email</label>
                                        <input type="text" name="mem_company_email" id="mem_company_email" value="<?=$mem_data->mem_company_email?>" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="mem_company_phone">Phone Number</label>
                                        <input type="text" name="mem_company_phone" id="mem_company_phone" value="<?=$mem_data->mem_company_phone?>" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="mem_company_order_email">Order Email</label>
                                        <input type="text" id="mem_company_order_email" name="mem_company_order_email" value="<?=$mem_data->mem_company_order_email?>" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="mem_company_website">Website URL</label>
                                        <input type="text" name="mem_company_website" id="mem_company_website" value="<?=$mem_data->mem_company_website?>" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="mem_company_trustpilot">Trustpilot or Google Review URL</label>
                                        <input type="text" name="mem_company_trustpilot" id="mem_company_trustpilot" value="<?=$mem_data->mem_company_trustpilot?>" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="mem_company_pickdrop" class="move">Provide pickup & drop off services?</label>
                                        <select name="mem_company_pickdrop" id="mem_company_pickdrop" class="txtBox">
                                            <option value="">Select</option>
                                            <?php foreach (yes_no() as $val) : ?>
                                                <option value="<?= $val ?>" <?= $mem_data->mem_company_pickdrop == $val ? 'selected' : '' ?>><?= ucfirst($val) ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="mem_company_walkin_facility" class="move">Walk in facility?</label>
                                        <select name="mem_company_walkin_facility" id="mem_company_walkin_facility" class="txtBox">
                                            <option value="">Select</option>
                                            <?php foreach (yes_no() as $val) : ?>
                                                <option value="<?= $val ?>" <?= $mem_data->mem_company_walkin_facility == $val ? 'selected' : '' ?>><?= ucfirst($val) ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5>Business Address</h5>
                            <div class="row formRow">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_business_country" class="move">Country</label>
                                        <select name="mem_business_country" id="mem_business_country" class="txtBox" onchange="fetchStates(this.value, 'mem_business_state')">
                                            <option value="">Select</option>
                                            <?php foreach (countries() as $country) : ?>
                                                <option value="<?= $country->id ?>" <?= $mem_data->mem_business_country == $country->id ? 'selected' : '' ?>><?= $country->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_business_state" class="move">State</label>
                                        <select name="mem_business_state" id="mem_business_state" value="<?=$mem_data->mem_business_state?>" class="txtBox">
                                            <option value="">Select</option>
                                            <?php foreach (states_by_country($mem_data->mem_business_country) as $state) : ?>
                                                <option value="<?= $state->id ?>" <?= $mem_data->mem_business_state == $state->id ? 'selected' : '' ?>><?= $state->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_business_city">City</label>
                                        <input type="text" name="mem_business_city" id="mem_business_city" value="<?=$mem_data->mem_business_city?>" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_business_zip">Zip Code</label>
                                        <input type="text" id="mem_business_zip" name="mem_business_zip" value="<?=$mem_data->mem_business_zip?>" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                    <div class="txtGrp">
                                        <label for="mem_business_address">Address</label>
                                        <input type="text" id="mem_business_address" name="mem_business_address" value="<?=$mem_data->mem_business_address?>" class="txtBox">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5>Address Information</h5>
                            <div class="row formRow">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_country" class="move">Country</label>
                                        <select name="mem_country" id="mem_country" class="txtBox" onchange="fetchStates(this.value, 'mem_state')">
                                            <option value="">Select</option>
                                            <?php foreach (countries() as $country) : ?>
                                                <option value="<?= $country->id ?>" <?= $mem_data->mem_country == $country->id ? 'selected' : '' ?>><?= $country->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_state" class="move">State</label>
                                        <select name="mem_state" id="mem_state"  class="txtBox">
                                            <option value="">Select</option>
                                            <?php foreach (states_by_country($mem_data->mem_country) as $state) : ?>
                                                <option value="<?= $state->id ?>" <?= $mem_data->mem_state == $state->id ? 'selected' : '' ?>><?= $state->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_city">City</label>
                                        <input type="text" name="mem_city" id="mem_city" value="<?=$mem_data->mem_city?>" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_zip">Zip Code</label>
                                        <input type="text" id="mem_zip" name="mem_zip" value="<?=$mem_data->mem_zip?>" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                    <div class="txtGrp">
                                        <label for="mem_address">Address</label>
                                        <input type="text" id="mem_address" name="mem_address" value="<?=$mem_data->mem_address?>" class="txtBox">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5>Pickup & Collection Area</h5>
                            <div class="row formRow">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                    <div class="txtGrp">
                                        <label for="">Travel Distance?</label>
                                        <input type="text" id="" name="" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                    <div id="googleMap">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d392466.27610655467!2d-105.23035500000002!3d39.781351!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c7e3e2c6216a7%3A0xa4b85252d6ea23a1!2sDenver%2C%20CO%2080210!5e0!3m2!1sen!2sus!4v1624361016615!5m2!1sen!2sus" width="100" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5>Charges Information</h5>
                            <div class="row formRow">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="mem_charges_per_miles">Charges per mile for pickup & drop off?</label>
                                        <input type="text" name="mem_charges_per_miles" id="mem_charges_per_miles" value="<?=$mem_data->mem_charges_per_miles?>" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="mem_charges_free_over">Free for over</label>
                                        <input type="text" name="mem_charges_free_over" id="mem_charges_free_over" value="<?=$mem_data->mem_charges_free_over?>" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="mem_charges_min_order">Minimum order value?</label>
                                        <input type="text" name="mem_charges_min_order" id="mem_charges_min_order" value="<?=$mem_data->mem_charges_min_order?>" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="mem_show_cancellation" class="move">Show cancellation policy?</label>
                                        <select name="mem_show_cancellation" id="mem_show_cancellation" class="txtBox">
                                            <option value="">Select</option>
                                            <?php foreach (yes_no() as $val) : ?>
                                                <option value="<?= $val ?>" <?= $mem_data->mem_show_cancellation == $val ? 'selected' : '' ?>><?= ucfirst($val) ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="bTn formBtn text-center">
                                <button type="submit" class="webBtn"><i class="spinner hidden"></i>Save</button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php endif; ?>
                <div class="blk">
                    <div class="_header">
                        <h4>Change Password</h4>
                        <div class="info">
                            <strong><em>Strong Password</em></strong>
                            <div class="infoIn ckEditor">
                                <p>Your password must contain the following:</p>
                                <ol>
                                    <li>At least 8 characters in length (a strong password has at least 8 characters)</li>
                                    <li>At least 1 capital letter, 1 small letter, 1 number and 1 symbol.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <form action="<?=base_url()?>index/change_password" method="post" id="changePassword" class="frmAjax">
                        <div class="alertMsg" style="display:none"></div>
                        <div class="inside">
                            <div class="row formRow">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp pasDv">
                                        <label for="pswd">Current password</label>
                                        <input type="password" name="pswd" id="pswd" class="txtBox">
                                        <i class="icon-eye" id="eye"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp pasDv">
                                        <label for="npswd">New password</label>
                                        <input type="password" name="npswd" id="npswd" class="txtBox">
                                        <i class="icon-eye" id="eye"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp pasDv">
                                        <label for="cpswd">Confirm new password</label>
                                        <input type="password" name="cpswd" id="cpswd" class="txtBox">
                                        <i class="icon-eye" id="eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="bTn formBtn text-center">
                                <button type="submit" class="webBtn"><i class="spinner hidden"></i>Change</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- account -->
        <script>
            function PreviewImage() {
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("dp_image").files[0]);

                oFReader.onload = function(oFREvent) {
                    document.getElementById("uploadDpPreview").src = oFREvent.target.result;
                };
            };

            $(function() {
                $(document).on('click', '#rsnd-email', function(e) 
                {
                    e.preventDefault();

                    var btn = $(this);
                    if (btn.data("disabled"))
                        return false;

                    $("#resndCntnt").addClass('hide');
                    $('.appLoad').removeClass('hide');

                    btn.data("disabled", "disabled");
                    $.ajax({
                        url: base_url + 'resend-email',
                        data: {
                            'cmd': 'resend'
                        },
                        dataType: 'JSON',
                        method: 'POST',
                        success: function(rs) {
                            $('#resndCntnt').find('.alertMsg').remove().end().append(rs.msg);
                        },
                        complete: function() {
                            btn.removeData("disabled");
                            setTimeout(function() {
                                $('.appLoad').addClass('hide');
                                $('#resndCntnt').removeClass('hide');
                            }, 1500)
                        }
                    })
                })
            })
        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>