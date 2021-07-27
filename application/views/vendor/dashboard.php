<!doctype html>
<html>

<head>
    <title>Dashboard — Compare My Laundry</title>
    <?php require_once('../includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('../includes/header-vendor.php'); ?>
    <main dash account>
        <?php require_once('../includes/sidebar-vendor.php'); ?>


        <section id="account">
            <div class="contain-fluid">
                <div class="blk topBlk">
                    <div class="ico"><img src="<?= $base_url ?>images/users/7.jpg" alt=""></div>
                    <div class="txt">
                        <h3><span class="regular">Welcome,</span> Dear, Jennifer Kem!<span class="regular">Nice to see you again.</span></h3>
                    </div>
                    <div class="toggleBlk">
                        <div class="switchBtn">
                            <input type="checkbox" name="" id="" checked>
                            <em></em>
                            <small></small>
                        </div>
                    </div>
                </div>
                <div class="blk">
                    <form action="" method="post">
                        <div class="txtGrp upLoadDp">
                            <div class="ico">
                                <img src="<?= $base_url ?>images/users/7.jpg" alt="">
                            </div>
                            <div class="text-center">
                                <button type="button" class="webBtn smBtn uploadImg" data-upload="dp_image" data-text="Change Photo"></button>
                                <input type="file" name="" id="" class="uploadFile" data-upload="dp_image">
                            </div>
                            <div class="noHats text-center">(Please upload your photo)</div>
                        </div>
                        <div class="inside">
                            <h5>Company Information</h5>
                            <div class="row formRow">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="">Company Name</label>
                                        <input type="text" name="" id="" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="">Contact Email</label>
                                        <input type="text" name="" id="" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="">Phone Number</label>
                                        <input type="text" name="" id="" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="">Order Email</label>
                                        <input type="text" id="" name="" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="">Website URL</label>
                                        <input type="text" name="" id="" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="">Trustpilot or Google Review URL</label>
                                        <input type="text" name="" id="" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="" class="move">Provide pickup & drop off services?</label>
                                        <select name="" id="" class="txtBox">
                                            <option>Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="" class="move">Walk in facility?</label>
                                        <select name="" id="" class="txtBox">
                                            <option>Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5>Business Address</h5>
                            <div class="row formRow">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="" class="move">Country</label>
                                        <select name="" id="" class="txtBox">
                                            <option>Select</option>
                                            <option value="London">London</option>
                                            <option value="Birmingham">Birmingham</option>
                                            <option value="Leeds">Leeds</option>
                                            <option value="Glasgow">Glasgow</option>
                                            <option value="Sheffield">Sheffield</option>
                                            <option value="Bradford">Bradford</option>
                                            <option value="Liverpool">Liverpool</option>
                                            <option value="Edinburgh">Edinburgh</option>
                                            <option value="Manchester">Manchester</option>
                                            <option value="Bristol">Bristol</option>
                                            <option value="Kirklees">Kirklees</option>
                                            <option value="Fife">Fife</option>
                                            <option value="Wirral">Wirral</option>
                                            <option value="North Lanarkshire">North Lanarkshire</option>
                                            <option value="Wakefield">Wakefield</option>
                                            <option value="Cardiff">Cardiff</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="">City</label>
                                        <input type="text" name="" id="" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="" class="move">State</label>
                                        <select name="" id="" class="txtBox">
                                            <option>Select</option>
                                            <option value="AL">Alabama - AL</option>
                                            <option value="AK">Alaska - AK</option>
                                            <option value="AS">American Samoa - AS</option>
                                            <option value="AZ">Arizona - AZ</option>
                                            <option value="AR">Arkansas - AR</option>
                                            <option value="CA">California - CA</option>
                                            <option value="CO">Colorado - CO</option>
                                            <option value="CT">Connecticut - CT</option>
                                            <option value="DE">Delaware - DE</option>
                                            <option value="DC">District of Columbia - DC</option>
                                            <option value="FM">Federated States of Micronesia - FM</option>
                                            <option value="FL">Florida - FL</option>
                                            <option value="GA">Georgia - GA</option>
                                            <option value="GU">Guam - GU</option>
                                            <option value="HI">Hawaii - HI</option>
                                            <option value="ID">Idaho - ID</option>
                                            <option value="IL">Illinois - IL</option>
                                            <option value="IN">Indiana - IN</option>
                                            <option value="IA">Iowa - IA</option>
                                            <option value="KS">Kansas - KS</option>
                                            <option value="KY">Kentucky - KY</option>
                                            <option value="LA">Louisiana - LA</option>
                                            <option value="ME">Maine - ME</option>
                                            <option value="MH">Marshall Islands - MH</option>
                                            <option value="MD">Maryland - MD</option>
                                            <option value="MA">Massachusetts - MA</option>
                                            <option value="MI">Michigan - MI</option>
                                            <option value="MN">Minnesota - MN</option>
                                            <option value="MS">Mississippi - MS</option>
                                            <option value="MO">Missouri - MO</option>
                                            <option value="MT">Montana - MT</option>
                                            <option value="NE">Nebraska - NE</option>
                                            <option value="NV">Nevada - NV</option>
                                            <option value="NH">New Hampshire - NH</option>
                                            <option value="NJ">New Jersey - NJ</option>
                                            <option value="NM">New Mexico - NM</option>
                                            <option value="NY">New York - NY</option>
                                            <option value="NC">North Carolina - NC</option>
                                            <option value="ND">North Dakota - ND</option>
                                            <option value="MP">Northern Mariana Islands - MP</option>
                                            <option value="OH">Ohio - OH</option>
                                            <option value="OK">Oklahoma - OK</option>
                                            <option value="OR">Oregon - OR</option>
                                            <option value="PW">Palau - PW</option>
                                            <option value="PA">Pennsylvania - PA</option>
                                            <option value="PR">Puerto Rico - PR</option>
                                            <option value="RI">Rhode Island - RI</option>
                                            <option value="SC">South Carolina - SC</option>
                                            <option value="SD">South Dakota - SD</option>
                                            <option value="TN">Tennessee - TN</option>
                                            <option value="TX">Texas - TX</option>
                                            <option value="UT">Utah - UT</option>
                                            <option value="VT">Vermont - VT</option>
                                            <option value="VI">Virgin Islands - VI</option>
                                            <option value="VA">Virginia - VA</option>
                                            <option value="WA">Washington - WA</option>
                                            <option value="WV">West Virginia - WV</option>
                                            <option value="WI">Wisconsin - WI</option>
                                            <option value="WY">Wyoming - WY</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="">Zip Code</label>
                                        <input type="text" id="" name="" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                    <div class="txtGrp">
                                        <label for="">Address</label>
                                        <input type="text" id="" name="" class="txtBox">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5>Address Information</h5>
                            <div class="row formRow">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="" class="move">Country</label>
                                        <select name="" id="" class="txtBox">
                                            <option>Select</option>
                                            <option value="London">London</option>
                                            <option value="Birmingham">Birmingham</option>
                                            <option value="Leeds">Leeds</option>
                                            <option value="Glasgow">Glasgow</option>
                                            <option value="Sheffield">Sheffield</option>
                                            <option value="Bradford">Bradford</option>
                                            <option value="Liverpool">Liverpool</option>
                                            <option value="Edinburgh">Edinburgh</option>
                                            <option value="Manchester">Manchester</option>
                                            <option value="Bristol">Bristol</option>
                                            <option value="Kirklees">Kirklees</option>
                                            <option value="Fife">Fife</option>
                                            <option value="Wirral">Wirral</option>
                                            <option value="North Lanarkshire">North Lanarkshire</option>
                                            <option value="Wakefield">Wakefield</option>
                                            <option value="Cardiff">Cardiff</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="">City</label>
                                        <input type="text" name="" id="" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="" class="move">State</label>
                                        <select name="" id="" class="txtBox">
                                            <option>Select</option>
                                            <option value="AL">Alabama - AL</option>
                                            <option value="AK">Alaska - AK</option>
                                            <option value="AS">American Samoa - AS</option>
                                            <option value="AZ">Arizona - AZ</option>
                                            <option value="AR">Arkansas - AR</option>
                                            <option value="CA">California - CA</option>
                                            <option value="CO">Colorado - CO</option>
                                            <option value="CT">Connecticut - CT</option>
                                            <option value="DE">Delaware - DE</option>
                                            <option value="DC">District of Columbia - DC</option>
                                            <option value="FM">Federated States of Micronesia - FM</option>
                                            <option value="FL">Florida - FL</option>
                                            <option value="GA">Georgia - GA</option>
                                            <option value="GU">Guam - GU</option>
                                            <option value="HI">Hawaii - HI</option>
                                            <option value="ID">Idaho - ID</option>
                                            <option value="IL">Illinois - IL</option>
                                            <option value="IN">Indiana - IN</option>
                                            <option value="IA">Iowa - IA</option>
                                            <option value="KS">Kansas - KS</option>
                                            <option value="KY">Kentucky - KY</option>
                                            <option value="LA">Louisiana - LA</option>
                                            <option value="ME">Maine - ME</option>
                                            <option value="MH">Marshall Islands - MH</option>
                                            <option value="MD">Maryland - MD</option>
                                            <option value="MA">Massachusetts - MA</option>
                                            <option value="MI">Michigan - MI</option>
                                            <option value="MN">Minnesota - MN</option>
                                            <option value="MS">Mississippi - MS</option>
                                            <option value="MO">Missouri - MO</option>
                                            <option value="MT">Montana - MT</option>
                                            <option value="NE">Nebraska - NE</option>
                                            <option value="NV">Nevada - NV</option>
                                            <option value="NH">New Hampshire - NH</option>
                                            <option value="NJ">New Jersey - NJ</option>
                                            <option value="NM">New Mexico - NM</option>
                                            <option value="NY">New York - NY</option>
                                            <option value="NC">North Carolina - NC</option>
                                            <option value="ND">North Dakota - ND</option>
                                            <option value="MP">Northern Mariana Islands - MP</option>
                                            <option value="OH">Ohio - OH</option>
                                            <option value="OK">Oklahoma - OK</option>
                                            <option value="OR">Oregon - OR</option>
                                            <option value="PW">Palau - PW</option>
                                            <option value="PA">Pennsylvania - PA</option>
                                            <option value="PR">Puerto Rico - PR</option>
                                            <option value="RI">Rhode Island - RI</option>
                                            <option value="SC">South Carolina - SC</option>
                                            <option value="SD">South Dakota - SD</option>
                                            <option value="TN">Tennessee - TN</option>
                                            <option value="TX">Texas - TX</option>
                                            <option value="UT">Utah - UT</option>
                                            <option value="VT">Vermont - VT</option>
                                            <option value="VI">Virgin Islands - VI</option>
                                            <option value="VA">Virginia - VA</option>
                                            <option value="WA">Washington - WA</option>
                                            <option value="WV">West Virginia - WV</option>
                                            <option value="WI">Wisconsin - WI</option>
                                            <option value="WY">Wyoming - WY</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="">Zip Code</label>
                                        <input type="text" id="" name="" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                    <div class="txtGrp">
                                        <label for="">Address</label>
                                        <input type="text" id="" name="" class="txtBox">
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
                                        <label for="">Charges per mile for pickup & drop off?</label>
                                        <input type="text" name="" id="" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="">Free for over</label>
                                        <input type="text" name="" id="" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="">Minimum order value?</label>
                                        <input type="text" name="" id="" class="txtBox">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="" class="move">Show cancellation policy?</label>
                                        <select name="" id="" class="txtBox">
                                            <option>Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="bTn formBtn text-center">
                                <button type="submit" class="webBtn">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="blk">
                    <div class="_header">
                        <h4>Change Password</h4>
                        <div class="info">
                            <strong><em>Strong Password</em></strong>
                            <div class="infoIn ckEditor">
                                <p>Your password must contain the following:</p>
                                <ol>
                                    <li>At least 8 characters in length (a strong password has at least 14 characters)</li>
                                    <li>At least 1 letter and at least 1 number or symbol</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <form action="" method="post">
                        <div class="inside">
                            <div class="row formRow">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp pasDv">
                                        <label for="">Current password</label>
                                        <input type="password" name="" id="" class="txtBox">
                                        <i class="icon-eye" id="eye"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp pasDv">
                                        <label for="">New password</label>
                                        <input type="password" name="" id="" class="txtBox">
                                        <i class="icon-eye" id="eye"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp pasDv">
                                        <label for="">Confirm new password</label>
                                        <input type="password" name="" id="" class="txtBox">
                                        <i class="icon-eye" id="eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="bTn formBtn text-center">
                                <button type="submit" class="webBtn">Change</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- account -->


    </main>
    <?php require_once('../includes/footer.php'); ?>
</body>

</html>