<?php if ($this->uri->segment(3) == 'manage'): ?>
    <?php echo showMsg(); ?>
    <?php echo getBredcrum(ADMIN, array('#' => 'Add/Update slider')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-users"></i> Add/Update <strong>slider</strong></h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?php echo base_url(ADMIN . '/slider'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>
        </div>
    </div>
    <div>
        <hr>
        <div class="row col-md-12">
            <form action=""  role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="tagline" class="control-label"> Slider tagline <span class="symbol required">*</span></label>
                        <input type="text" name="tagline" id="tagline" value="<?php if (isset($row->tagline)) echo $row->tagline; ?>" class="form-control" autofocus>
                    </div>
                    <div class="col-md-6">
                        <label for="title" class="control-label"> Slider title <span class="symbol required">*</span></label>
                        <input type="text" name="title" id="title" value="<?php if (isset($row->title)) echo $row->title; ?>" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="btn_title" class="control-label"> Button Title </label>
                        <input type="text" name="btn_title" id="btn_title" value="<?php if (isset($row->btn_title)) echo $row->btn_title; ?>" required class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="btn_title" class="control-label"> Button Link </label>
                        <select name="btn_link" id="btn_link" class="form-control" required>
                            <option value=''>-- Select --</option>
                            <?php $pages = get_pages();
                            foreach($pages as $page){?>
                                <option value="<?=$page?>" <?=($row->btn_link==$page)?'selected':'' ?>> <?=$page?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class = "col-md-8">
                        <img src = "<?=  get_site_image_src("slider", $row->image, 'thumb_'); ?>" height = "80"><br>
                        <input type = "file" name = "image" id = "image" class = "form-control file2 inline btn btn-primary" data-label = "<i class='fa fa-upload'></i> Browse" />
                        <div><br />
                            <small style = "color:#F00;">* Best resolution is <strong>600 x 600</strong>.</small><br />
                            <small style = " color:#F00;">* Allowed formats are <strong>JPG | JPEG | PNG</strong>.</small><br>
                            <small style = "color:#F00;">* Image size maximum <strong>2MB</strong> allowed.</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="status" class="control-label"> Status <span class="symbol required">*</span></label>
                        <select id="status" name="status" class="form-control">
                            <option value="0"<?= (isset($row->status) && 0 == $row->status ? ' selected' : '')?>>No</option>
                            <option value="1"<?= (isset($row->status) && 1 == $row->status ? ' selected' : '')?>>Yes</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="col-md-12">
                    <div class="form-group text-right">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="clearfix"></div>
        </div>
    </div>
<?php else: ?>
    <?php echo showMsg(); ?>
    <?php echo getBredcrum(ADMIN, array('#' => 'Manage slider')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-users"></i> Manage <strong>slider</strong></h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?php echo base_url(ADMIN . '/slider/manage'); ?>" class="btn btn-lg btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
        </div>
    </div>
    <table class="table table-bordered datatable" id="table-1">
        <thead>
            <tr>
                <th width="5%" class="text-center">Sr#</th>
                <th width="10%">Photo</th>
                <th>Title</th>
                <th width="12%" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($rows) > 0): ?>
                <?php foreach ($rows as $key => $row): ?>
                    <tr class="odd gradeX">
                        <td class="text-center"><?= $key+1; ?></td>
                        <td class="text-center"><img src = "<?=  get_site_image_src("slider", $row->image, 'thumb_'); ?>" width = "100"></td>
                        <td><?= $row->title ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                    <li><a href="<?= site_url(ADMIN.'/slider/manage/'.$row->id); ?>">Edit</a></li>
                                    <li><a href="<?= site_url(ADMIN.'/slider/delete/'.$row->id); ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
<?php endif; ?>