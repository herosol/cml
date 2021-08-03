<!doctype html>
<html>

<head>
    <title>Dashboard — Compare My Laundry</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-buyer'); ?>
    <main dash account>
        <?php $this->load->view('includes/sidebar-buyer'); ?>


        <section id="account">
            <div class="contain-fluid">
            <?php echo showMsg(); ?>
            <?php if(empty($mem_data->mem_verified) || $mem_data->mem_verified == 0): ?>
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
                    <div class="bTn">
                        <a href="<?= $base_url ?>buyer/orders.php" class="webBtn mdBtn simpleBtn">View Orders</a>
                    </div>
                </div>
                <?php if(!empty($mem_data->mem_verified) && $mem_data->mem_verified == 1): ?>
                <div class="blk">
                    <form action="" method="post" id="buyerProfileSettings" class="frmAjax">
                        <div class="alertMsg" style="display:none"></div>
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
                            <h5>Personal Information</h5>
                            <div class="row formRow">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_fname">First Name</label>
                                        <input type="text" name="mem_fname" id="mem_fname" value="<?=$mem_data->mem_fname?>" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_lname">Last Name</label>
                                        <input type="text" name="mem_lname" id="mem_lname" value="<?=$mem_data->mem_lname?>" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_phone">Phone Number</label>
                                        <input type="text" name="mem_phone" id="mem_phone" value="<?=$mem_data->mem_phone?>" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_email">Email Address</label>
                                        <input type="text" id="mem_email" name="mem_email" value="<?=$mem_data->mem_email?>" class="txtBox" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_dob">Date of birth</label>
                                        <input type="text" name="mem_dob" id="mem_dob" value="<?=format_date($mem_data->mem_dob, 'm-d-Y')?>" class="txtBox datepicker">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="mem_sex" class="move">Gender</label>
                                        <select name="mem_sex" id="mem_sex" class="txtBox">
                                            <option value="">Select</option>
                                            <?php foreach (gender() as $val) : ?>
                                                <option value="<?= $val ?>" <?= $mem_data->mem_sex == $val ? 'selected' : '' ?>><?= ucfirst($val) ?></option>
                                            <?php endforeach; ?>
                                        </select>
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
                                        <select name="mem_state" id="mem_state" class="txtBox">
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
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                    <div class="txtGrp">
                                        <ul class="selectLst flex">
                                            <li>
                                                <div class="radioBtn">
                                                    <input type="radio" name="address_type" id="address_type_home" checked="">
                                                    <div class="inner">
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/vector-home.svg" alt=""></div>
                                                        <div class="txt">
                                                            <p>Home</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radioBtn">
                                                    <input type="radio" name="address_type" id="address_type_office">
                                                    <div class="inner">
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/vector-briefcase.svg" alt=""></div>
                                                        <div class="txt">
                                                            <p>Office</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radioBtn">
                                                    <input type="radio" name="address_type" id="address_type_hotel">
                                                    <div class="inner">
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/vector-hotel.svg" alt=""></div>
                                                        <div class="txt">
                                                            <p>Hotel</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                    <div id="googleMap">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d392466.27610655467!2d-105.23035500000002!3d39.781351!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c7e3e2c6216a7%3A0xa4b85252d6ea23a1!2sDenver%2C%20CO%2080210!5e0!3m2!1sen!2sus!4v1624361016615!5m2!1sen!2sus" width="100" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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