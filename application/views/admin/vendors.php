<?php if ($this->uri->segment(3) == 'manage'): ?>
<?= showMsg(); ?>
<?= getBredcrum(ADMIN, array('#' => 'Add/Update Vendors')); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-users"></i> Add/Update <strong>Vendors</strong></h2>
    </div>
    <div class="col-md-6 text-right">
        <a href="<?= site_url(ADMIN . '/vendors'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>
    </div>
</div>
<div>
    <hr>
    <div class="row col-md-12">
        <form action=""  role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
            
            <div class="col-md-12">
                <h3><i class="fa fa-bars"></i> Profile Detail</h3>
                <hr class="hr-short">
                <div class="col-md-6">
                    <div style="margin:15px 0px" class="">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Profile Image
                                </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <?php
                            get_site_image_src("members", $row->mem_image);
                        ?>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row->mem_image) ? get_site_image_src("members", $row->mem_image) : 'http://placehold.it/700x620' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                <span class="btn btn-black btn-file">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="mem_image" accept="image/*" <?php if(empty($row->image)){echo 'required=""';}?>>
                                </span>
                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
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
                        <div class="col-md-12">
                            <label class="control-label"> Verified</label>
                            <select name="mem_status" id="mem_status" class="form-control">
                                <option value="1" <?php
                                    if (isset($row->mem_verified) && '1' == $row->mem_verified) {
                                    echo 'selected';
                                    }
                                ?>>Yes</option>
                                <option value="0" <?php
                                    if (isset($row->mem_verified) && '0' == $row->mem_verified) {
                                    echo 'selected';
                                    }
                                ?>>No</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label class="control-label"> Featured</label>
                            <select name="mem_featured" id="mem_featured" class="form-control">
                                <option value="1" <?php
                                    if (isset($row->mem_featured) && '1' == $row->mem_featured) {
                                    echo 'selected';
                                    }
                                ?>>yes</option>
                                <option value="0" <?php
                                    if (isset($row->mem_featured) && '0' == $row->mem_featured) {
                                    echo 'selected';
                                    }
                                ?>>No</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="clearfix"></div>
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
                                <input type="text"  name="mem_pswd" value="<?php  if (isset($row->mem_pswd)) echo doDecode($row->mem_pswd);  ?>" class="form-control" autocomplete="off" placeholder="password" required="" >
                            <?php else:?>    
                                <input type="password"  name="mem_pswd" value="<?php  if (isset($row->mem_pswd)) echo doDecode($row->mem_pswd);  ?>" class="form-control" autocomplete="off" placeholder="password" required="" >
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <h3><i class="fa fa-bars"></i> Company Detail</h3>
                <hr class="hr-short">
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label class="control-label">Company Name</label>
                            <input type="text" name="mem_company_name" value="<?php if (isset($row->mem_company_name)) echo $row->mem_company_name; ?>" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label class="control-label"> Phone Number</label>
                            <input type="text" name="mem_company_phone" value="<?php if (isset($row->mem_company_phone)) echo $row->mem_company_phone; ?>" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label class="control-label"> Company Website URL</label>
                            <input type="text" name="mem_company_website" value="<?php if (isset($row->mem_company_website)) echo $row->mem_company_website; ?>" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label class="control-label"> Trust Pilot or Google Review URL</label>
                            <input type="text" name="mem_company_trustpilot" value="<?php if (isset($row->mem_company_trustpilot)) echo $row->mem_company_trustpilot; ?>" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label class="control-label">Contact Email</label>
                            <input type="email" name="mem_company_name" value="<?php if (isset($row->mem_company_name)) echo $row->mem_company_name; ?>" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Order Email</label>
                            <input type="email" name="mem_company_order_email" value="<?php if (isset($row->mem_company_order_email)) echo $row->mem_company_order_email; ?>" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Provide pickup & drop off services?</label>
                            <select name="mem_company_pickdrop" id="mem_company_pickdrop" class="form-control">
                                <option value="">Select</option>
                                <?php foreach (yes_no() as $val) : ?>
                                    <option value="<?= $val ?>" <?= $mem_data->mem_company_pickdrop == $val ? 'selected' : '' ?>><?= ucfirst($val) ?></option>
                                <?php endforeach; ?>
                            </select>                        
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Walk in facility?</label>
                            <select name="mem_company_walkin_facility" id="mem_company_walkin_facility" class="form-control" onchange="getFacilityHours(this.value)">
                                <option value="">Select</option>
                                <?php foreach (yes_no() as $val) : ?>
                                    <option value="<?= $val ?>" <?= $mem_data->mem_company_walkin_facility == $val ? 'selected' : '' ?>><?= ucfirst($val) ?></option>
                                <?php endforeach; ?>
                            </select>                       
                        </div>
                    </div>
                </div>
                <h3><i class="fa fa-bars"></i>Business Address Detail</h3>
                <hr class="hr-short">
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="control-label">Customer City</label>
                            <input type="text" name="mem_city" value="<?php if (isset($row->mem_city)) echo $row->mem_city; ?>" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="control-label">Customer Country</label>
                            <select name="mem_country" id="mem_country" class="form-control select2">
                                <option value="0" selected="" readonly="">Country</option>
                                <?php foreach (countries() as $country) : ?>
                                    <option value="<?= $country->id ?>" <?= $row->mem_country == $country->id ? 'selected' : '' ?>><?= $country->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="control-label">Postal Code</label>
                            <input type="text" name="mem_zip" value="<?php if (isset($row->mem_zip)) echo $row->mem_zip; ?>" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label">Vendor Address</label>
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
                        <img src = "<?= getImageSrc(UPLOADIMAGE.'members/' , $row->mem_image,'member'); ?>" height = "60">
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
                            <li><a href="<?= site_url(ADMIN); ?>/vendors/active/<?= $row->mem_id; ?>">Active</a></li>
                            <?php else: ?>
                            <li><a href="<?= site_url(ADMIN); ?>/vendors/inactive/<?= $row->mem_id; ?>">Inactive</a></li>
                            <?php endif; ?>
                            <li><a href="<?= site_url(ADMIN); ?>/vendors/manage/<?= $row->mem_id; ?>">Edit</a></li>
                            <li><a href="<?= site_url(ADMIN); ?>/vendors/delete/<?= $row->mem_id; ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
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