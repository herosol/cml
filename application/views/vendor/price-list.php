<!doctype html>
<html>

<head>
    <title>Price List — Compare My Laundry</title>
    <?php require_once('../includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('../includes/header-vendor.php'); ?>
    <main dash pricing>
        <?php require_once('../includes/sidebar-vendor.php'); ?>


        <section id="pricing">
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
                <ul class="tabLst text-center">
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
                        <div class="serveBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/vector-washing.svg" alt=""></div>
                            <div class="txt">
                                <h4>Wash & Dry</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio animi a ex numquam inventore suscipit fuga exercitationem consequuntur eius! Saepe quasi fugit provident dolore a est omnis quos nihil itaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="serveBlk">
                            <div class="txt">
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="lblBtn">
                                                    <input type="checkbox" name="washType" id="seprateWash">
                                                    <label for="seprateWash">SEPARATE WASH & TUMBLE DRY - UP TO 12KG - Light and dark clothes washed separately. - Requires 2 washes of 6 kg each.</label>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="DryCleaning" class="tab-pane fade">
                        <div class="serveBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/vector-dry-cleaning.svg" alt=""></div>
                            <div class="txt">
                                <h4>Dry Cleaning</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio animi a ex numquam inventore suscipit fuga exercitationem consequuntur eius! Saepe quasi fugit provident dolore a est omnis quos nihil itaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="serveBlk">
                            <div class="txt">
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="WashIron" class="tab-pane fade">
                        <div class="serveBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/vector-wash-iron.svg" alt=""></div>
                            <div class="txt">
                                <h4>Wash & Iron</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio animi a ex numquam inventore suscipit fuga exercitationem consequuntur eius! Saepe quasi fugit provident dolore a est omnis quos nihil itaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="serveBlk">
                            <div class="txt">
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="IronOnly" class="tab-pane fade">
                        <div class="serveBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/vector-iron.svg" alt=""></div>
                            <div class="txt">
                                <h4>Iron Only</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio animi a ex numquam inventore suscipit fuga exercitationem consequuntur eius! Saepe quasi fugit provident dolore a est omnis quos nihil itaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="serveBlk">
                            <div class="txt">
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="BulkyItems" class="tab-pane fade">
                        <div class="serveBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/vector-pillow.svg" alt=""></div>
                            <div class="txt">
                                <h4>Bulky Items</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio animi a ex numquam inventore suscipit fuga exercitationem consequuntur eius! Saepe quasi fugit provident dolore a est omnis quos nihil itaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="serveBlk">
                            <div class="txt">
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
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
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="Deals" class="tab-pane fade">
                        <div class="serveBlk">
                            <div class="icon"><img src="<?= $base_url ?>images/vector-deal.svg" alt=""></div>
                            <div class="txt">
                                <h4>Deals</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio animi a ex numquam inventore suscipit fuga exercitationem consequuntur eius! Saepe quasi fugit provident dolore a est omnis quos nihil itaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="serveBlk">
                            <div class="txt">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                        </tr>
                                        <tr>
                                            <td>Synthetic Duvet - Single</td>
                                            <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                        </tr>
                                        <tr>
                                            <td>Synthetic Duvet - Double</td>
                                            <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                        </tr>
                                        <tr>
                                            <td>Synthetic Duvet - King</td>
                                            <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                        </tr>
                                        <tr>
                                            <td>Synthetic Duvet - Super King</td>
                                            <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                            <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="blk tab-content">
                    <div id="Wash" class="tab-pane fade in active">
                        <h3>Wash</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam delectus autem, similique eos aspernatur sit cumque iusto corrupti quisquam. Oomnis reprehenderit eum cupiditate hic itaque possimus ipsam sit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto porro quia excepturi aspernatur ipsum, alias accusantium voluptates explicabo magni perferendis repellat, optio sequi autem doloremque.</p>
                        <form action="">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Item</th>
                                        <th>Price</th>
                                    </tr>
                                    <tr>
                                        <td>MIXED WASH & TUMBLE DRY - UP TO 6KG - All colours washed together.</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>SEPARATE WASH & TUMBLE DRY - UP TO 12KG - Light and dark clothes washed separately. - Requires 2 washes of 6 kg each.</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="bTn formBtn text-center"><button type="submit" class="webBtn">Submit</button></div>
                        </form>
                    </div>
                    <div id="WashIron" class="tab-pane fade">
                        <h3>Wash & Iron</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam delectus autem, similique eos aspernatur sit cumque iusto corrupti quisquam. Oomnis reprehenderit eum cupiditate hic itaque possimus ipsam sit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto porro quia excepturi aspernatur ipsum, alias accusantium voluptates explicabo magni perferendis repellat, optio sequi autem doloremque.</p>
                        <form action="">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Item</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                    <tr>
                                        <td>Shirt on Hanger</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Shirt Folded</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Delicate Shirt on Hanger</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>T-Shirt on Hanger</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>T-Shirt Folded</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Polo on Hanger</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Polo Shirt Folded</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>2-Piece Suit</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>3-Piece Suit</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Dinner / Linen Suit</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Jacket / Blazer</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Waistcoat</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Skirt</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Skirt - Delicate</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumper</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Cardigan</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Bed Sheet - Single</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Bed Sheet - Double</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Bed Sheet - King</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Bed Sheet - Super King</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Pillow Case</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Cushion Cover - Small</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Cushion Cover - Medium</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Cushion Cover - Large</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Tablecloth (up to 2 m)</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Tablecloth (up to 4m)</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Tea Towel</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Apron</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Top / Blouse</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Top / Blouse - Silk</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Trousers</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Trousers - Silk</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Shorts</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Dress</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Dress - Delicate</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Dress - Evening</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumpsuit</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Tie</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Scarf</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Socks / underwear</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Overcoat / Raincoat</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Overcoat - Full Length</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Puffer / Down Coat</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Duvet Cover - Single</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Duvet Cover - Double</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Duvet Cover - King</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Duvet Cover - Super King</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Bath Mat</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Bath Towel</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Hand Towel</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="bTn formBtn text-center"><button type="submit" class="webBtn">Submit</button></div>
                        </form>
                    </div>
                    <div id="DryCleaning" class="tab-pane fade">
                        <h3>Dry Cleaning</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam delectus autem, similique eos aspernatur sit cumque iusto corrupti quisquam. Oomnis reprehenderit eum cupiditate hic itaque possimus ipsam sit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto porro quia excepturi aspernatur ipsum, alias accusantium voluptates explicabo magni perferendis repellat, optio sequi autem doloremque.</p>
                        <form action="">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Item</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                    <tr>
                                        <td>Shirt on Hanger</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Shirt Folded</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Delicate Shirt on Hanger</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>T-Shirt on Hanger</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>T-Shirt Folded</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Polo on Hanger</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Polo Shirt Folded</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>2-Piece Suit</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>3-Piece Suit</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Dinner / Linen Suit</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Jacket / Blazer</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Waistcoat</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Skirt</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Skirt - Delicate</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumper</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Cardigan</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Bed Sheet - Single</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Bed Sheet - Double</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Bed Sheet - King</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Bed Sheet - Super King</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Pillow Case</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Cushion Cover - Small</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Cushion Cover - Medium</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Cushion Cover - Large</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Tablecloth (up to 2 m)</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Tablecloth (up to 4m)</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Tea Towel</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Apron</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Top / Blouse</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Top / Blouse - Silk</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Trousers</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Trousers - Silk</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Shorts</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Dress</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Dress - Delicate</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Dress - Evening</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumpsuit</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Tie</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Scarf</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Socks / underwear</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Overcoat / Raincoat</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Overcoat - Full Length</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Puffer / Down Coat</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Duvet Cover - Single</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Duvet Cover - Double</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Duvet Cover - King</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Duvet Cover - Super King</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Bath Mat</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Bath Towel</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Hand Towel</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="bTn formBtn text-center"><button type="submit" class="webBtn">Submit</button></div>
                        </form>
                    </div>
                    <div id="IronOnly" class="tab-pane fade">
                        <h3>Iron Only</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam delectus autem, similique eos aspernatur sit cumque iusto corrupti quisquam. Oomnis reprehenderit eum cupiditate hic itaque possimus ipsam sit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto porro quia excepturi aspernatur ipsum, alias accusantium voluptates explicabo magni perferendis repellat, optio sequi autem doloremque.</p>
                        <form action="">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Item</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                    <tr>
                                        <td>Shirt on Hanger</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Shirt Folded</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>T-Shirt on Hanger</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>T-Shirt Folded</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Polo Shirt on Hanger</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Polo Shirt Folded</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Jeans</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Trousers</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Shorts</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Dress</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Dress - Delicate</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Dress - Evening</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumpsuit</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumper</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Cardigan</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Duvet Cover - Single</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Duvet Cover - Double</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Duvet Cover - King</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Duvet cover - Super King</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Tablecloth (up to 2m)</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Tablecloth (up to 4m)</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Apron</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Tea towel</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Top/Blouse</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Top / Blouse - Silk</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Jacket/Blazer</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Waistcoat</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Skirt</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Bed Sheet - Single</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Bed Sheet - Double</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Bed Sheet - King</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Bed Sheet - Super King</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Pillow Case</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="bTn formBtn text-center"><button type="submit" class="webBtn">Submit</button></div>
                        </form>
                    </div>
                    <div id="BulkyItems" class="tab-pane fade">
                        <h3>Bulky Items</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam delectus autem, similique eos aspernatur sit cumque iusto corrupti quisquam. Oomnis reprehenderit eum cupiditate hic itaque possimus ipsam sit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto porro quia excepturi aspernatur ipsum, alias accusantium voluptates explicabo magni perferendis repellat, optio sequi autem doloremque.</p>
                        <form action="">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Item</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                    <tr>
                                        <td>Synthetic Duvet - Single</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Synthetic Duvet - Double</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Synthetic Duvet - King</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Synthetic Duvet - Super King</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Mattress Protector - Single</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Mattress Protector - Double</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Mattress Protector -King</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Mattress Protector - Double layer</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Feather Duvet - Single</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Feather Duvet - Double</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Feather Duvet - King</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Feather Duvet - Super King</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Pillow - Synthetic</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Pillow - Feather</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Blanket - Single - Washable</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Blanket - Double - Washable</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Blanket - King - Washable</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Bedspread - Single - Washable</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Bedspread - Double - Washable</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Bedspread - King - Washable</td>
                                        <td>1</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="bTn formBtn text-center"><button type="submit" class="webBtn">Submit</button></div>
                        </form>
                    </div>
                    <div id="Deals" class="tab-pane fade">
                        <h3>Deals</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam delectus autem, similique eos aspernatur sit cumque iusto corrupti quisquam. Oomnis reprehenderit eum cupiditate hic itaque possimus ipsam sit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto porro quia excepturi aspernatur ipsum, alias accusantium voluptates explicabo magni perferendis repellat, optio sequi autem doloremque.</p>
                        <form action="">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Deal's Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                    </tr>
                                    <tr>
                                        <td>Synthetic Duvet - Single</td>
                                        <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Synthetic Duvet - Double</td>
                                        <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Synthetic Duvet - King</td>
                                        <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                    <tr>
                                        <td>Synthetic Duvet - Super King</td>
                                        <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                        <td><input type="text" name="" id="" class="txtBox" placeholder="Price"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="bTn formBtn"><button type="button" class="webBtn labelBtn"><i class="fi-plus fi-2x"></i> Add New</button></div>
                            <div class="bTn formBtn text-center"><button type="submit" class="webBtn">Submit</button></div>
                        </form>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- pricing -->


    </main>
    <?php require_once('../includes/footer.php'); ?>
</body>

</html>