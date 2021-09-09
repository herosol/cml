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
                <div class="blk topBlk">
                    <div class="ico"><img src="<?= get_site_image_src("members", $mem_data->mem_image, '300p_'); ?>" alt=""></div>
                    <div class="txt">
                        <h3><span class="regular">Welcome,</span> Dear, <?=$mem_data->mem_fname.' '.$mem_data->mem_lname?>!<span class="regular">Nice to see you<?=$mem_data->mem_first_time_login == 'no' ? ' again.' : '.'?></span></h3>
                    </div>
                    <div class="toggleBlk">
                        <div class="switchBtn hidden">
                            <input type="checkbox" name="" id="" checked>
                            <em></em>
                            <small></small>
                        </div>
                    </div>
                </div>

                <div class="blk">
                    <form action="" method="post" id="vendorBankAccount" class="vendorBankAccount">
                        <div class="inside">
                            <div class="alertMsg" style="display:none"></div>
                            <h5>Bank Account Detail</h5>
                            <div id="form-bank-account">
                                <?= mem_bank_form() ?>
                            </div>
                            <div class="bTn formBtn text-center">
                                <button type="submit" class="webBtn submit"><i class="spinner hidden"></i>Save</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="blk blockLst">
                    <table>
                        <thead>
                            <tr>
                                <th>Bank Name</th>
                                <th>Account Number</th>
                                <th>Short Code</th>
                                <th>Beneficiary Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="bank-accounts-vendor">
                            <?= get_mem_banks($this->session->mem_id) ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- account -->
        <script>
            $(document).on("click", ".edit-bank-account", function(e) {
                e.preventDefault();
                let btn = $(this);
                let bank_id = btn.data('bank-id');
                $.ajax({
                        url: base_url + 'vendor/edit_bank_fetch',
                        data: {
                            'bank_id': bank_id
                        },
                        dataType: 'JSON',
                        method: 'POST',
                        success: function(rs) {
                            $('#form-bank-account').html(rs.html);
                        },
                        complete: function() {

                        }
                    })
            });

            $(document).on("click", ".delete-bank-account", function(e) {
                e.preventDefault();
                let btn = $(this);
                let bank_id = btn.data('bank-id');
                $.ajax({
                        url: base_url + 'vendor/delete_bank_fetch',
                        data: {
                            'bank_id': bank_id
                        },
                        dataType: 'JSON',
                        method: 'POST',
                        success: function(rs) {
                            $('#form-bank-account').html(rs.html);
                        },
                        complete: function() {

                        }
                    })
            });
        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>