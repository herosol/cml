<?= getBredcrum(ADMIN, array('#' => 'Trade Page')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Trade Page</strong></h2>
    </div>
    <div class="col-md-6 text-right">
       
    </div>
</div>
<div>
    <hr>
    <div class="clearfix"></div>
    <div class="panel-body">
        <form role="form"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">
                <div class="row">
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
                <h3>How It Works Section </h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="works_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="works_heading" id="works_heading" value="<?= $row['works_heading'] ?>" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php for($i = 1; $i <= 3; $i++):?>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="panel panel-primary" data-collapsed="0">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                Image <?= $i?>
                                            </div>
                                            <div class="panel-options">
                                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                    <img src="<?= !empty($row['second_image'.$i]) ? get_site_image_src("images/", $row['second_image'.$i]) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                                <div>
                                                    <span class="btn btn-white btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="second_image<?=$i?>" accept="image/*" <?php if(empty($row['second_image'.$i])){echo 'required=""';}?>>
                                                    </span>
                                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="second_heading<?=$i?>" class="control-label"> Heading <?= $i?> <span class="symbol required">*</span></label>
                                    <input type="text" name="second_heading<?=$i?>" id="second_heading<?=$i?>" value="<?= $row['second_heading'.$i] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="second_text<?=$i?>" class="control-label"> Detail <?= $i?><span class="symbol required">*</span></label>
                                    <textarea name="second_text<?=$i?>" for="second_text<?=$i?>" rows="4" class="form-control" ><?= $row['second_text'.$i] ?></textarea>
                                </div>
                            </div>
                        </div>
                    <?php endfor?>
                </div>
            </div>
            <h3>Form Section </h3>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="form_heading" class="control-label"> Heading <span class="symbol required"></span></label>
                    <input type="text" name="form_heading" value="<?= $row['form_heading'] ?>" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="form_sub_heading" class="control-label"> Inner Heading <span class="symbol required"></span></label>
                    <input type="text" name="form_sub_heading" value="<?= $row['form_sub_heading'] ?>" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="form_text" class="control-label">Inner Detail <?= $i?><span class="symbol required">*</span></label>
                    <textarea name="form_text" for="form_text" rows="4" class="form-control" ><?= $row['form_text'] ?></textarea>
                </div>
            </div>
            <h3>Faqs Section <!-- <input type="checkbox" name="second_section" id="second_section" value="true"<?= !$row || $row['second_section'] ? ' checked=""' : '' ?>> --></h3>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="faq_heading" class="control-label"> Heading <span class="symbol required"></span></label>
                    <input type="text" name="faq_heading" value="<?= $row['faq_heading'] ?>" class="form-control">
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