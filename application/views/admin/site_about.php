<?php echo getBredcrum(ADMIN, array('#' => 'About Page')); ?>
<?php echo showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>About Page</strong></h2>
    </div>
    <div class="col-md-6 text-right">

    </div>
</div>
<div>
    <hr>
    <div class="clearfix"></div>
    <div class="panel-body">
        <form role="form"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">

            <div class="form-group">
                <div class="row">
                    <!-- <div class="col-md-3">
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
                    </div> -->
                    <div class="col-md-12">
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
                        </div>
                    </div>
                </div>
            </div>


            <h3>Main Section</h3>
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
                                <label for="heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="heading" id="heading" value="<?= $row['heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="detail" class="control-label"> Detail <span class="symbol required">*</span></label>
                                <textarea name="detail" id="detail" rows="5" class="form-control ckeditor" required=""><?= $row['detail'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Second Section</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="second_heading" class="control-label"> Heading <span class="symbol required"></span></label>
                                <input type="text" name="second_heading" id="second_heading" value="<?= $row['second_heading'] ?>" class="form-control" >
                            </div>
                            <div class="col-md-3">
                                <label for="second_btn_title" class="control-label"> Button Title <span class="symbol required"></span></label>
                                <input type="text" name="second_btn_title" id="second_btn_title" value="<?= $row['second_btn_title'] ?>" class="form-control" >
                            </div>
                            <div class="col-md-3">
                                <label for="second_btn_link" class="control-label"> Button Link <span class="symbol required"></span></label>
                                <select name="second_btn_link" id="second_btn_link" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach($pages as $page){?>
                                        <option value="<?=$page?>" <?=($row->second_btn_link==$page)?'selected':'' ?>> <?=$page?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <label for="second_detail" class="control-label"> Detail <span class="symbol required"></span></label>
                                <textarea name="second_detail" id="second_detail" rows="5" class="form-control ckeditor" required=""><?= $row['second_detail'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Quote Section</h3>
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
                                <label for="quote_name" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="quote_name" id="quote_name" value="<?= $row['quote_name'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="quote_text" class="control-label"> Detail <span class="symbol required">*</span></label>
                                <textarea name="quote_text" id="detail" rows="5" class="form-control" required=""><?= $row['quote_text'] ?></textarea>
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