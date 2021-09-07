<!doctype html>
<html>

<head>
    <title>My Transactions — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-buyer'); ?>
    <main dash account>
        <?php $this->load->view('includes/sidebar-buyer'); ?>


        <section id="trans">
            <div class="contain-fluid">
                <div class="blk blockLst">
                    <table>
                        <thead>
                            <tr>
                                <th>Order No.</th>
                                <th>Customer Name</th>
                                <th width="140">Amount</th>
                                <th>Date</th>
                                <th width="80">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($transactions) == 0): ?>
                                <tr>
                                    <td>No transaction yet.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <?php
                            else:
                                foreach($transactions as $index => $transaction):
                            ?>
                                <tr>
                                    <td><a href="<?=base_url()?>buyer/order-detail/<?=doEncode($transaction->order_id)?>"><?=num_size($transaction->order_id)?></a></td>
                                    <td><?=$transaction->vendor_name?></td>
                                    <td class="price">£<?=$transaction->amount?></td>
                                    <td><?=$transaction->date?></td>
                                    <td><span class="badge green">Completed</span></td>
                                </tr>
                            <?php
                                endforeach;
                            endif; ?>
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
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>