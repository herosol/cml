<!doctype html>
<html>

<head>
    <title>Facility Hours — Compare My Laundry</title>
    <?php require_once('../includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('../includes/header-vendor.php'); ?>
    <main dash calendar>
        <?php require_once('../includes/sidebar-vendor.php'); ?>


        <section id="calendar">
            <div class="contain-fluid">
                <h3>Facility Information</h3>
                <p>Please specify your facility hours of operation and location.</p>
                <form action="" method="post">
                    <div class="blk">
                        <div class="flexRow flex">
                            <div class="col col1">
                                <h6>Facility Location</h6>
                                <div class="row formRow">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
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
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="">City</label>
                                            <input type="text" name="" id="" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
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
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="">Zip Code</label>
                                            <input type="text" id="" name="" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                        <div class="txtGrp">
                                            <label for="">Address</label>
                                            <input type="text" id="" name="" class="txtBox">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col2">
                                <div class="tblBlock">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Day</th>
                                                <th>Opening Time</th>
                                                <th>Closing Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Mon</td>
                                                <td>
                                                    <select name="" id="" class="txtBox">
                                                        <option value="0">Select</option>
                                                        <option value="0">12:00am</option>
                                                        <option value="0">12:00pm</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="" id="" class="txtBox">
                                                        <option value="0">Select</option>
                                                        <option value="0">12:00am</option>
                                                        <option value="0">12:00pm</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tue</td>
                                                <td>
                                                    <select name="" id="" class="txtBox">
                                                        <option value="0">Select</option>
                                                        <option value="0">12:00am</option>
                                                        <option value="0">12:00pm</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="" id="" class="txtBox">
                                                        <option value="0">Select</option>
                                                        <option value="0">12:00am</option>
                                                        <option value="0">12:00pm</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Wed</td>
                                                <td>
                                                    <select name="" id="" class="txtBox">
                                                        <option value="0">Select</option>
                                                        <option value="0">12:00am</option>
                                                        <option value="0">12:00pm</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="" id="" class="txtBox">
                                                        <option value="0">Select</option>
                                                        <option value="0">12:00am</option>
                                                        <option value="0">12:00pm</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Thu</td>
                                                <td>
                                                    <select name="" id="" class="txtBox">
                                                        <option value="0">Select</option>
                                                        <option value="0">12:00am</option>
                                                        <option value="0">12:00pm</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="" id="" class="txtBox">
                                                        <option value="0">Select</option>
                                                        <option value="0">12:00am</option>
                                                        <option value="0">12:00pm</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fri</td>
                                                <td>
                                                    <select name="" id="" class="txtBox">
                                                        <option value="0">Select</option>
                                                        <option value="0">12:00am</option>
                                                        <option value="0">12:00pm</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="" id="" class="txtBox">
                                                        <option value="0">Select</option>
                                                        <option value="0">12:00am</option>
                                                        <option value="0">12:00pm</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sat</td>
                                                <td>
                                                    <select name="" id="" class="txtBox">
                                                        <option value="0">Select</option>
                                                        <option value="0">12:00am</option>
                                                        <option value="0">12:00pm</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="" id="" class="txtBox">
                                                        <option value="0">Select</option>
                                                        <option value="0">12:00am</option>
                                                        <option value="0">12:00pm</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sun</td>
                                                <td>
                                                    <select name="" id="" class="txtBox">
                                                        <option value="0">Select</option>
                                                        <option value="0">12:00am</option>
                                                        <option value="0">12:00pm</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="" id="" class="txtBox">
                                                        <option value="0">Select</option>
                                                        <option value="0">12:00am</option>
                                                        <option value="0">12:00pm</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- calendar -->


    </main>
    <?php require_once('../includes/footer.php'); ?>
</body>

</html>