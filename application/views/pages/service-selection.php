<!doctype html>
<html>

<head>
    <title>Service Selection — Compare My Laundry</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('includes/header.php'); ?>
    <main common offer>


        <section id="sBanner">
            <div class="contain">
                <div class="content">
                    <h2 class="heading">Service Selection</h2>
                    <p>Deleniti iste earum sed est distinctio corporis dolore autem, omnis facere amet blanditiis velit!</p>
                </div>
            </div>
            <div class="image"><img src="<?= $base_url ?>images/illustration_promo.svg" alt=""></div>
        </section>
        <!-- sBanner -->


        <section id="offer">
            <div class="contain">
                <ul class="svcLst flex text-center">
                    <li class="active">
                        <a data-toggle="tab" href="#WashDry">
                            <img src="<?= $base_url ?>images/vector-washing.svg" alt="">
                            <em>Wash & Dry</em>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#WashIron">
                            <img src="<?= $base_url ?>images/vector-wash-iron.svg" alt="">
                            <em>Wash & Iron</em>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#DryCleaning">
                            <img src="<?= $base_url ?>images/vector-dry-cleaning.svg" alt="">
                            <em>Dry Cleaning</em>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#IronOnly">
                            <img src="<?= $base_url ?>images/vector-iron.svg" alt="">
                            <em>Iron Only</em>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#BulkyItems">
                            <img src="<?= $base_url ?>images/vector-pillow.svg" alt="">
                            <em>Bulky Items</em>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#Deals">
                            <img src="<?= $base_url ?>images/vector-deal.svg" alt="">
                            <em>Deals</em>
                        </a>
                    </li>
                </ul>
                <div class="blk tab-content">
                    <div id="WashDry" class="tab-pane fade in active">
                        <h4>Wash & Dry</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio animi a ex numquam inventore suscipit fuga exercitationem consequuntur eius! Saepe quasi fugit provident dolore a est omnis quos nihil itaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium sapiente itaque ad vitae! Eum alias, voluptate fuga corrupti beatae totam corporis asperiores maiores animi voluptatem modi itaque minus facilis deleniti!</p>
                        <hr>
                        <div class="serveBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/vector-washing.svg" alt=""></div>
                            <div class="txt">
                                <form action="<?= $base_url ?>quotes.php" method="post">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Item</th>
                                                <td></td>
                                                <th>Price</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="lblBtn">
                                                        <input type="checkbox" name="washType" id="mixedWash">
                                                        <label for="mixedWash">MIXED WASH & TUMBLE DRY - UP TO 6KG - All colours washed together.</label>
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td>£20.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="lblBtn">
                                                        <input type="checkbox" name="washType" id="seprateWash">
                                                        <label for="seprateWash">SEPARATE WASH & TUMBLE DRY - UP TO 12KG - Light and dark clothes washed separately. - Requires 2 washes of 6 kg each.</label>
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td>£20.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="bTn formBtn text-right">
                                        <button type="submit" class="webBtn blankBtn">Reset</button>
                                        <button type="submit" class="webBtn">Checkout</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="DryCleaning" class="tab-pane fade">
                        <h4>Dry Cleaning</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio animi a ex numquam inventore suscipit fuga exercitationem consequuntur eius! Saepe quasi fugit provident dolore a est omnis quos nihil itaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium sapiente itaque ad vitae! Eum alias, voluptate fuga corrupti beatae totam corporis asperiores maiores animi voluptatem modi itaque minus facilis deleniti!</p>
                        <hr>
                        <div class="serveBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/vector-dry-cleaning.svg" alt=""></div>
                            <div class="txt">
                                <form action="<?= $base_url ?>quotes.php" method="post">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Item</th>
                                                <th>Qty</th>
                                                <th>Price</th>
                                            </tr>
                                            <tr>
                                                <td>Shirt on Hanger</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Shirt Folded</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="5" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£5.00</td>
                                            </tr>
                                            <tr>
                                                <td>Delicate Shirt on Hanger</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="3" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£3.50</td>
                                            </tr>
                                            <tr>
                                                <td>T-Shirt on Hanger</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="3" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£3.00</td>
                                            </tr>
                                            <tr>
                                                <td>T-Shirt Folded</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Polo on Hanger</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Polo Shirt Folded</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>2-Piece Suit</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>3-Piece Suit</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Dinner / Linen Suit</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Jacket / Blazer</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Waistcoat</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Skirt</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Skirt - Delicate</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Jumper</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Cardigan</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Bed Sheet - Single</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Bed Sheet - Double</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Bed Sheet - King</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Bed Sheet - Super King</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Pillow Case</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Cushion Cover - Small</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Cushion Cover - Medium</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Cushion Cover - Large</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Tablecloth (up to 2 m)</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Tablecloth (up to 4m)</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Tea Towel</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Apron</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Top / Blouse</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Top / Blouse - Silk</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Trousers</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Trousers - Silk</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Shorts</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Dress</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Dress - Delicate</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Dress - Evening</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Jumpsuit</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Tie</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Scarf</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Socks / underwear</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Overcoat / Raincoat</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Overcoat - Full Length</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Puffer / Down Coat</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Duvet Cover - Single</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Duvet Cover - Double</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Duvet Cover - King</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Duvet Cover - Super King</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Bath Mat</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Bath Towel</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Hand Towel</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="bTn formBtn text-right">
                                        <button type="submit" class="webBtn blankBtn">Reset</button>
                                        <button type="submit" class="webBtn">Checkout</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="WashIron" class="tab-pane fade">
                        <h4>Wash & Iron</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio animi a ex numquam inventore suscipit fuga exercitationem consequuntur eius! Saepe quasi fugit provident dolore a est omnis quos nihil itaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium sapiente itaque ad vitae! Eum alias, voluptate fuga corrupti beatae totam corporis asperiores maiores animi voluptatem modi itaque minus facilis deleniti!</p>
                        <hr>
                        <div class="serveBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/vector-wash-iron.svg" alt=""></div>
                            <div class="txt">
                                <form action="<?= $base_url ?>quotes.php" method="post">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Item</th>
                                                <th>Qty</th>
                                                <th>Price</th>
                                            </tr>
                                            <tr>
                                                <td>Shirt on Hanger</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Shirt Folded</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="5" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£5.00</td>
                                            </tr>
                                            <tr>
                                                <td>Delicate Shirt on Hanger</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="3" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£3.50</td>
                                            </tr>
                                            <tr>
                                                <td>T-Shirt on Hanger</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="3" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£3.00</td>
                                            </tr>
                                            <tr>
                                                <td>T-Shirt Folded</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Polo on Hanger</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Polo Shirt Folded</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>2-Piece Suit</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>3-Piece Suit</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Dinner / Linen Suit</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Jacket / Blazer</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Waistcoat</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Skirt</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Skirt - Delicate</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Jumper</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Cardigan</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Bed Sheet - Single</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Bed Sheet - Double</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Bed Sheet - King</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Bed Sheet - Super King</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Pillow Case</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Cushion Cover - Small</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Cushion Cover - Medium</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Cushion Cover - Large</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Tablecloth (up to 2 m)</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Tablecloth (up to 4m)</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Tea Towel</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Apron</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Top / Blouse</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Top / Blouse - Silk</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Trousers</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Trousers - Silk</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Shorts</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Dress</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Dress - Delicate</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Dress - Evening</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Jumpsuit</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Tie</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Scarf</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Socks / underwear</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Overcoat / Raincoat</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Overcoat - Full Length</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Puffer / Down Coat</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Duvet Cover - Single</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Duvet Cover - Double</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Duvet Cover - King</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Duvet Cover - Super King</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Bath Mat</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Bath Towel</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                            <tr>
                                                <td>Hand Towel</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="1" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£1.50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="bTn formBtn text-right">
                                        <button type="submit" class="webBtn blankBtn">Reset</button>
                                        <button type="submit" class="webBtn">Checkout</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="IronOnly" class="tab-pane fade">
                        <h4>Iron Only</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio animi a ex numquam inventore suscipit fuga exercitationem consequuntur eius! Saepe quasi fugit provident dolore a est omnis quos nihil itaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium sapiente itaque ad vitae! Eum alias, voluptate fuga corrupti beatae totam corporis asperiores maiores animi voluptatem modi itaque minus facilis deleniti!</p>
                        <hr>
                        <div class="serveBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/vector-iron.svg" alt=""></div>
                            <div class="txt">
                                <form action="<?= $base_url ?>quotes.php" method="post">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Item</th>
                                                <th>Qty</th>
                                                <th>Price</th>
                                            </tr>
                                            <tr>
                                                <td>Shirt on Hanger</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Shirt Folded</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="5" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£5.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>T-Shirt on Hanger</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="3" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£3.50</td>
                                            </tr>
                                            <tr>
                                                <td>T-Shirt Folded</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="3" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£3.00</td>
                                            </tr>
                                            <tr>
                                                <td>Polo Shirt on Hanger</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Polo Shirt Folded</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Jeans</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="5" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£5.00</td>
                                            </tr>
                                            <tr>
                                                <td>Trousers</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="3" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£3.50</td>
                                            </tr>
                                            <tr>
                                                <td>Shorts</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="3" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£3.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Dress</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Dress - Delicate</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Dress - Evening</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Jumpsuit</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Jumper</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Cardigan</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Duvet Cover - Single</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Duvet Cover - Double</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Duvet Cover - King</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Duvet cover - Super King</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Tablecloth (up to 2m)</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Tablecloth (up to 4m)</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Apron</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Tea towel</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Top/Blouse</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Top / Blouse - Silk</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Jacket/Blazer</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Waistcoat</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Skirt</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Bed Sheet - Single</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Bed Sheet - Double</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Bed Sheet - King</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Bed Sheet - Super King</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Pillow Case</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="bTn formBtn text-right">
                                        <button type="submit" class="webBtn blankBtn">Reset</button>
                                        <button type="submit" class="webBtn">Checkout</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="BulkyItems" class="tab-pane fade">
                        <h4>Bulky Items</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio animi a ex numquam inventore suscipit fuga exercitationem consequuntur eius! Saepe quasi fugit provident dolore a est omnis quos nihil itaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium sapiente itaque ad vitae! Eum alias, voluptate fuga corrupti beatae totam corporis asperiores maiores animi voluptatem modi itaque minus facilis deleniti!</p>
                        <hr>
                        <div class="serveBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/vector-pillow.svg" alt=""></div>
                            <div class="txt">
                                <form action="<?= $base_url ?>quotes.php" method="post">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Item</th>
                                                <th>Qty</th>
                                                <th>Price</th>
                                            </tr>
                                            <tr>
                                                <td>Synthetic Duvet - Single</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Synthetic Duvet - Double</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="5" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£5.00</td>
                                            </tr>
                                            <tr>
                                                <td>Synthetic Duvet - King</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="3" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£3.50</td>
                                            </tr>
                                            <tr>
                                                <td>Synthetic Duvet - Super King</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="3" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£3.00</td>
                                            </tr>
                                            <tr>
                                                <td>Mattress Protector - Single</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Mattress Protector - Double</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Mattress Protector -King</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="5" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£5.00</td>
                                            </tr>
                                            <tr>
                                                <td>Mattress Protector - Double layer</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="3" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£3.50</td>
                                            </tr>
                                            <tr>
                                                <td>Feather Duvet - Single</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="3" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£3.00</td>
                                            </tr>
                                            <tr>
                                                <td>Feather Duvet - Double</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Feather Duvet - King</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Feather Duvet - Super King</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Pillow - Synthetic</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Pillow - Feather</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Blanket - Single - Washable</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Blanket - Double - Washable</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Blanket - King - Washable</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Bedspread - Single - Washable</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Bedspread - Double - Washable</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                            <tr>
                                                <td>Bedspread - King - Washable</td>
                                                <td>
                                                    <div class="qtyBtn">
                                                        <a class="qtyMinus"></a>
                                                        <input type="text" name="qty" value="2" class="qty">
                                                        <a class="qtyPlus"></a>
                                                    </div>
                                                </td>
                                                <td>£2.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="bTn formBtn text-right">
                                        <button type="submit" class="webBtn blankBtn">Reset</button>
                                        <button type="submit" class="webBtn">Checkout</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="Deals" class="tab-pane fade">
                        <h4>Deals</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio animi a ex numquam inventore suscipit fuga exercitationem consequuntur eius! Saepe quasi fugit provident dolore a est omnis quos nihil itaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium sapiente itaque ad vitae! Eum alias, voluptate fuga corrupti beatae totam corporis asperiores maiores animi voluptatem modi itaque minus facilis deleniti!</p>
                        <hr>
                        <div class="serveBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/vector-deal.svg" alt=""></div>
                            <div class="txt">
                                <form action="<?= $base_url ?>quotes.php" method="post">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Select</th>
                                            </tr>
                                            <tr>
                                                <td>Synthetic Duvet - Single</td>
                                                <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                                <td>£2.00</td>
                                                <td><input type="checkbox" name="" id=""></td>
                                            </tr>
                                            <tr>
                                                <td>Synthetic Duvet - Double</td>
                                                <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                                <td>£1.50</td>
                                                <td><input type="checkbox" name="" id=""></td>
                                            </tr>
                                            <tr>
                                                <td>Synthetic Duvet - King</td>
                                                <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                                <td>£1.00</td>
                                                <td><input type="checkbox" name="" id=""></td>
                                            </tr>
                                            <tr>
                                                <td>Synthetic Duvet - Super King</td>
                                                <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                                <td>£3.00</td>
                                                <td><input type="checkbox" name="" id=""></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="bTn formBtn text-right">
                                        <button type="submit" class="webBtn blankBtn">Reset</button>
                                        <button type="submit" class="webBtn">Checkout</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- offer -->


    </main>
    <?php require_once('includes/footer.php'); ?>
</body>

</html>