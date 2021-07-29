<?= getBredcrum(ADMIN, array('#' => 'Home Page')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Home Page</strong></h2>
    </div>
    <div class="col-md-6 text-right">
        <!--        <a href="<?= base_url('admin/services'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>-->
    </div>
</div>
<div>
    <hr>
    <div class="clearfix"></div>
    <div class="panel-body">
        <form role="form"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">
            <h3> Main Banner <!-- <input type="checkbox" name="banner_section" id="banner_section" value="true"<?= !$row || $row['banner_section'] ? ' checked=""' : '' ?>> --></h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Banner Image
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row['image1']) ? get_site_image_src("images/", $row['image1']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image1" accept="image/*" <?php if(empty($row['image1'])){echo 'required=""';}?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="banner_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="banner_heading" id="banner_heading" value="<?= $row['banner_heading'] ?>" class="form-control" required>
                            </div>
                            <!-- <div class="col-md-12">
                                <label for="banner_detail" class="control-label"> Short Detail <span class="symbol required">*</span></label>
                                <textarea name="banner_detail" rows="3" class="form-control" required=""><?= $row['banner_detail'] ?></textarea>
                            </div> -->
                            <div class="col-md-6">
                                <label for="banner_button_text" class="control-label"> Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="banner_button_text" id="banner_button_text" value="<?= $row['banner_button_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_button_link" class="control-label"> Button Link <span class="symbol required">*</span></label>
                                <select name="banner_button_link" id="banner_button_link" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach($pages as $page){?>
                                        <option value="<?=$page?>" <?=($row->banner_button_link==$page)?'selected':'' ?>> <?=$page?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <!-- <div class="col-md-6">
                                <label for="banner_link" class="control-label"> Link <span class="symbol required">*</span></label>
                                <input type="text" name="banner_link" id="banner_link" value="<?= $row['banner_link'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_link_text" class="control-label"> Link Text <span class="symbol required">*</span></label>
                                <input type="text" name="banner_link_text" id="banner_link_text" value="<?= $row['banner_link_text'] ?>" class="form-control" required>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <h3>Brands Section <!-- <input type="checkbox" name="second_section" id="second_section" value="true"<?= !$row || $row['second_section'] ? ' checked=""' : '' ?>> --></h3>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="brands_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                    <input type="text" name="brands_heading" value="<?= $row['brands_heading'] ?>" class="form-control">
                </div>
            </div>
            <h3>Latest Deals Section <!-- <input type="checkbox" name="second_section" id="second_section" value="true"<?= !$row || $row['second_section'] ? ' checked=""' : '' ?>> --></h3>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="latest_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                    <input type="text" name="latest_heading" value="<?= $row['latest_heading'] ?>" class="form-control">
                </div>
            </div>
            <h3>Subscribe Section <!-- <input type="checkbox" name="second_section" id="second_section" value="true"<?= !$row || $row['second_section'] ? ' checked=""' : '' ?>> --></h3>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="sub_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                    <input type="text" name="sub_heading" value="<?= $row['sub_heading'] ?>" class="form-control">
                </div>
            </div>
            <h3>Contact Section <!-- <input type="checkbox" name="second_section" id="second_section" value="true"<?= !$row || $row['second_section'] ? ' checked=""' : '' ?>> --></h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Image
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row['image2']) ? get_site_image_src("images/", $row['image2']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image2" accept="image/*" <?php if(empty($row['image2'])){echo 'required=""';}?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="contact_sub_heading" class="control-label"> Sub Heading <span class="symbol required">*</span></label>
                                <input type="text" name="contact_sub_heading" value="<?= $row['contact_sub_heading'] ?>" class="form-control" >
                            </div>
                            <div class="col-md-12">
                                <label for="contact_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="contact_heading" value="<?= $row['contact_heading'] ?>" class="form-control" >
                            </div>
                            <div class="col-md-6">
                                <label for="contact_button_text" class="control-label"> Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="contact_button_text" id="contact_button_text" value="<?= $row['contact_button_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contact_button_link" class="control-label"> Button Link <span class="symbol required">*</span></label>
                                <select name="contact_button_link" id="contact_button_link" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach($pages as $page){?>
                                        <option value="<?=$page?>" <?=($row->contact_button_link==$page)?'selected':'' ?>> <?=$page?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label "></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>
    </div>
</div>