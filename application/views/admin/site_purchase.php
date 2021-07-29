<?php echo getBredcrum(ADMIN, array('#' => 'Products')); ?>
<?php echo showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Products</strong></h2>
    </div>
    <div class="col-md-6 text-right">
        <!--        <a href="<?php echo base_url('admin/products'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>-->
    </div>
</div>
<div>
    <hr>
    <div class="clearfix"></div>
    <div class="panel-body">
        <form role="form"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">
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
                                <label for="page_title" class="control-label"> Page Title <span class="symbol required">*</span></label>
                                <input type="text" name="page_title" id="page_title" value="<?= $row['page_title'] ?>" class="form-control" autofocus required>
                            </div>
                            <div class="col-md-6">
                                <label for="meta_description" class="control-label"> Meta Description <span class="symbol required">*</span></label>
                                <textarea name="meta_description" id="meta_description" class="form-control" rows="5" required=""><?= $row['meta_description'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="meta_keywords" class="control-label"> Meta Keywords <span class="symbol required">*</span></label>
                                <textarea name="meta_keywords" id="meta_keywords" class="form-control" rows="5" required=""><?= $row['meta_keywords'] ?></textarea>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <label for="banner_heading" class="control-label"> Banner Heading <span class="symbol required">*</span></label>
                                <input type="text" name="banner_heading" id="banner_heading" value="<?= $row['banner_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_button_link" class="control-label"> Button Link <span class="symbol required">*</span></label>
                                <input type="text" name="banner_button_link" id="banner_button_link" value="<?= $row['banner_button_link'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_button_text" class="control-label"> Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="banner_button_text" id="banner_button_text" value="<?= $row['banner_button_text'] ?>" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3>Map Section <input type="checkbox" name="map_section" id="map_section" value="true"<?= !$row || $row['map_section'] ? ' checked=""' : '' ?>></h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="map_left_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="map_heading" id="map_heading" value="<?= $row['map_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="map_button_link" class="control-label"> Button Link <span class="symbol required">*</span></label>
                                <input type="text" name="map_button_link" id="map_button_link" value="<?= $row['map_button_link'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="map_button_text" class="control-label"> Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="map_button_text" id="map_button_text" value="<?= $row['map_button_text'] ?>" class="form-control" required>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3>Video Section <input type="checkbox" name="video_section" id="video_section" value="true"<?= !$row || $row['video_section'] ? ' checked=""' : '' ?>></h3>
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
                                <label for="video_left_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="video_heading" id="video_heading" value="<?= $row['video_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="video_detail" class="control-label"> Short Detail <span class="symbol required">*</span></label>
                                <textarea name="video_detail" id="video_detail" rows="3" class="form-control" required=""><?= $row['video_detail'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="video_button_link" class="control-label"> Button Link <span class="symbol required">*</span></label>
                                <input type="text" name="video_button_link" id="video_button_link" value="<?= $row['video_button_link'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="video_button_text" class="control-label"> Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="video_button_text" id="video_button_text" value="<?= $row['video_button_text'] ?>" class="form-control" required>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <label for="video_code" class="control-label"> Video Code <span class="symbol required">*</span></label>
                                <input type="text" name="video_code" id="video_code" value="<?= $row['video_code'] ?>" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <h3>Last Section <input type="checkbox" name="last_section" id="last_section" value="true"<?= !$row || $row['last_section'] ? ' checked=""' : '' ?>></h3>
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
                                        <img src="<?= !empty($row['image3']) ? get_site_image_src("images/", $row['image3']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image3" accept="image/*" <?php if(empty($row['image3'])){echo 'required=""';}?>>
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
                                <label for="last_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="last_heading" value="<?= $row['last_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="last_detail" class="control-label"> Detail <span class="symbol required">*</span></label>
                                <textarea name="last_detail" rows="4" class="form-control ckeditor" required=""><?= $row['last_detail'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="last_button_link" class="control-label"> Button Link <span class="symbol required">*</span></label>
                                <input type="text" name="last_button_link" id="last_button_link" value="<?= $row['last_button_link'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="last_button_text" class="control-label"> Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="last_button_text" id="last_button_text" value="<?= $row['last_button_text'] ?>" class="form-control" required>
                            </div>
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
    <div class="clearfix"></div>
</div>