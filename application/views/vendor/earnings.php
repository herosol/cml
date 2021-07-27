<!doctype html>
<html>

<head>
    <title>My Earnings — Compare My Laundry</title>
    <?php require_once('../includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('../includes/header-vendor.php'); ?>
    <main dash trans>
        <?php require_once('../includes/sidebar-vendor.php'); ?>


        <section id="trans">
            <div class="contain-fluid">
                <div class="blk blansBlk">
                    <ul class="blans">
                        <li>Deliveries: <span>50</span></li>
                        <li>Payouts: <span class="price">£1,258.5</span></li>
                        <li>Current Balance: <span class="price">£00.0</span></li>
                        <li><button type="button" class="webBtn smBtn simpleBtn popBtn" data-popup="withdraw-funds">Withdraw Funds</button></li>
                    </ul>
                </div>
                <div class="blk blockLst">
                    <table>
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th width="140">Amount</th>
                                <th>Date</th>
                                <th width="80">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Wick</td>
                                <td class="price">£250</td>
                                <td>September 25, 2018</td>
                                <td><span class="badge green">Complete</span></td>
                            </tr>
                            <tr>
                                <td>Abraham Adam</td>
                                <td class="price">£220</td>
                                <td>September 25, 2018</td>
                                <td><span class="badge yellow">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Jenifer Kem</td>
                                <td class="price">£150</td>
                                <td>September 25, 2018</td>
                                <td><span class="badge green">Complete</span></td>
                            </tr>
                            <tr>
                                <td>Samira Jones</td>
                                <td class="price">£140</td>
                                <td>September 25, 2018</td>
                                <td><span class="badge red">Canceled</span></td>
                            </tr>
                            <tr>
                                <td>Preety Zinta</td>
                                <td class="price">£180</td>
                                <td>September 25, 2018</td>
                                <td><span class="badge yellow">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Tai Chi</td>
                                <td class="price">£390</td>
                                <td>September 25, 2018</td>
                                <td><span class="badge green">Complete</span></td>
                            </tr>
                            <tr>
                                <td>Christoper Smith</td>
                                <td class="price">£280</td>
                                <td>September 25, 2018</td>
                                <td><span class="badge red">Canceled</span></td>
                            </tr>
                            <tr>
                                <td>Julian Adam</td>
                                <td class="price">£170</td>
                                <td>September 25, 2018</td>
                                <td><span class="badge yellow">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="popup" data-popup="withdraw-funds">
                <div class="tableDv">
                    <div class="tableCell">
                        <div class="contain">
                            <div class="_inner">
                                <div class="crosBtn"></div>
                                <h3>Add Payment method</h3>
                                <form action="" method="post">
                                    <div data-payment>
                                        <div class="lblBtn">
                                            <input type="radio" name="payment" id="bank" class="tglBlk" value="bank-account" checked="">
                                            <label for="bank">Bank Account</label>
                                        </div>
                                        <div class="insideBlk active">
                                            <div class="txtGrp">
                                                <label for="" class="move">Bank Account</label>
                                                <select name="" id="" class="txtBox">
                                                    <option value="">Select</option>
                                                    <option value="">Wells Fargo Checking Account</option>
                                                    <option value="">SunTrust Checking Account</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="lblBtn">
                                            <input type="radio" name="payment" id="paypal" class="tglBlk" value="paypal">
                                            <label for="paypal">Paypal</label>
                                        </div>
                                        <div class="insideBlk">
                                            <div class="txtGrp">
                                                <label for="">PayPal Address</label>
                                                <input type="email" name="" id="" class="txtBox">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bTn formBtn text-center">
                                        <button type="submit" class="webBtn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trans -->


    </main>
    <?php require_once('../includes/footer.php'); ?>
</body>

</html>