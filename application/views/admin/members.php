<?php if ($this->uri->segment(3) == 'manage'): ?>
<?= showMsg(); ?>
<?= getBredcrum(ADMIN, array('#' => 'Add/Update Customers')); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-users"></i> Add/Update <strong>Customer</strong></h2>
    </div>
    <div class="col-md-6 text-right">
        <a href="<?= site_url(ADMIN . '/members'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>
    </div>
</div>
<div>
    <hr>
    <div class="row col-md-12">
        <form action=""  role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="form-group pull-right">
                <div class="col-md-12">
                    <label class="control-label"> Status</label>
                        <select name="mem_status" id="mem_status" class="form-control">
                            <option value="1" <?php
                                if (isset($row->mem_status) && '1' == $row->mem_status) {
                                echo 'selected';
                                }
                            ?>>Active</option>
                            <option value="0" <?php
                                if (isset($row->mem_status) && '0' == $row->mem_status) {
                                echo 'selected';
                                }
                            ?>>Inactive</option>
                        </select>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12">
                <h3><i class="fa fa-bars"></i> Profile Detail</h3>
                <hr class="hr-short">
                <div class="col-md-12">
                    <div class="">
                        <div class="picture-container" style="max-width:130px;margin:0 auto;">
                            <div class="picture">
                                <img src="<?= getImageSrc(UPLOADIMAGE, $row->mem_profile) ?>" style="width:100%;" class="picture-src" id="wizardPicturePreview" title="">
                                <input type="file" id="wizard-picture" name="mem_profile" class="">
                            </div>
                             <h6 class="">Choose Picture</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label"> First Name <span class="symbol required" style="color: red">*</span></label>
                            <input type="text" name="mem_fname" value="<?php if (isset($row->mem_fname)) echo $row->mem_fname; ?>" class="form-control" autofocus required>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label"> Last Name <span class="symbol required" style="color: red">*</span></label>
                            <input type="text" name="mem_lname" value="<?php if (isset($row->mem_lname)) echo $row->mem_lname; ?>" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label">Email <span class="symbol required" style="color: red">*</span></label>
                            <input type="text" name="mem_email" value="<?php if (isset($row->mem_email)) echo $row->mem_email; ?>"  class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Password <span class="symbol required" style="color: red">*</span></label>
                            <?php if ($row->mem_pass): ?>
                                <input type="text"  name="mem_pass" value="<?php  if (isset($row->mem_pass)) echo doDecode($row->mem_pass);  ?>" class="form-control" autocomplete="off" placeholder="password" required="" >
                            <?php else:?>    
                                <input type="password"  name="mem_pass" value="<?php  if (isset($row->mem_pass)) echo doDecode($row->mem_pass);  ?>" class="form-control" autocomplete="off" placeholder="password" required="" >
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label"> Phone Number</label>
                            <input type="text" name="mem_phone" value="<?php if (isset($row->mem_phone)) echo $row->mem_phone; ?>" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Customer City</label>
                            <input type="text" name="mem_city" value="<?php if (isset($row->mem_city)) echo $row->mem_city; ?>" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label">Customer Country</label>
                            <select name="mem_country" id="mem_country" class="form-control select2">
                                    <option value="0" selected="" readonly="">Country</option>
                                    <?php foreach(getCountries() as $key => $country ): ?>
                                        <option value="<?= $country->id ?>" <?= ($country->id==$row->mem_country)?'selected':'' ?>><?= $country->name ?></option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Postal Code</label>
                            <input type="text" name="mem_postal_code" value="<?php if (isset($row->mem_postal_code)) echo $row->mem_postal_code; ?>" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label">Customer Address 1</label>
                            <textarea name="mem_address" id="mem_address" cols="30" rows="3" class="form-control"><?php if (isset($row->mem_address)) echo $row->mem_address; ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Headline</label>
                            <textarea name="mem_headline" id="mem_headline" cols="32" rows="2" class="form-control"><?php if (isset($row->mem_headline)) echo $row->mem_headline; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">Member Bio</label>
                            <textarea name="mem_bio" id="mem_bio" cols="32" rows="3" class="form-control"><?php if (isset($row->mem_bio)) echo $row->mem_bio; ?></textarea>
                        </div>
                    </div>
                </div>
            <div class="clearfix"></div>
            <div class="col-md-12">
                <hr class="hr-short">
                <div class="form-group text-right">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                    </div>
                </div>
            </div>
            </div>
        </form>
        <div class="clearfix"></div>
    </div>
    <?php else: ?>
    <?= showMsg(); ?>
    <?= getBredcrum(ADMIN, array('#' => 'Manage Customers')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-users"></i> Manage <strong>Customers</strong></h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?= site_url(ADMIN . '/members/manage'); ?>" class="btn btn-lg btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
        </div>
    </div>
    <table class="table table-bordered datatable" id="table-1">
        <thead>
            <tr>
                <th width="5%" class="text-center">Sr#</th>
                <th width="10%">Photo</th>
                <th width="20%">Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th width="8%" class="text-center">Status</th>
                <th width="12%" class="text-center">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($rows) > 0): $count = 0; ?>
            <?php foreach ($rows as $row): ?>
            <tr class="odd gradeX">
                <td class="text-center"><?= ++$count; ?></td>
                <td class="text-center">
                    <div class="icoRound">
                        <img src = "<?= getImageSrc(UPLOADIMAGE , $row->mem_profile,'member'); ?>" height = "60">
                    </div>
                </td>
                <td><b><?= $row->mem_fname . ' ' . $row->mem_lname; ?></b></td>
                <td><?= $row->mem_email; ?></td>
                <td><?= $row->mem_phone; ?></td>
                <td class="text-center"><?= getStatus($row->mem_status); ?></td>
                <td class="text-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-primary" role="menu">
                            <?php if ($row->mem_status == '0'): ?>
                            <li><a href="<?= site_url(ADMIN); ?>/members/active/<?= $row->mem_id; ?>">Active</a></li>
                            <?php else: ?>
                            <li><a href="<?= site_url(ADMIN); ?>/members/inactive/<?= $row->mem_id; ?>">Inactive</a></li>
                            <?php endif; ?>
                            <li><a href="<?= site_url(ADMIN); ?>/members/manage/<?= $row->mem_id; ?>">Edit</a></li>
                            <li><a href="<?= site_url(ADMIN); ?>/members/delete/<?= $row->mem_id; ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <?php endif; ?>
    <script type="text/javascript">
        jQuery(document).ready(function(){
// Prepare the preview for profile picture
    jQuery("#wizard-picture").change(function(){
        readURL(this);
    });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            jQuery('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }}
    </script>