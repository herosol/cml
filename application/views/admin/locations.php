<?php if ($this->uri->segment(3) == 'manage'): ?>
    <?= showMsg(); ?>
    <?= getBredcrum(ADMIN, array('#' => 'Add/Update Locations')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-list"></i> Add/Update <strong>Partner</strong></h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?= site_url(ADMIN . '/locations'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>
        </div>
    </div>
    <div>
        <hr>
        <div class="row col-md-12">
            <form action="" name="frmPartner" role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="control-label" for="title"> Title</label>
                        <textarea name="title" id="title" class="form-control" required autofocus><?php if (isset($row->title)) echo $row->title; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="control-label" for="address"> Address</label>
                        <textarea name="address" id="address" class="form-control" required><?php if (isset($row->address)) echo $row->address; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="control-label" for="map_code"> Map Code</label>
                        <textarea name="map_code" id="map_code" rows="5" class="form-control" required><?php if (isset($row->map_code)) echo $row->map_code; ?></textarea>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <div class="col-sm-12 ">
                        <img src = "<?=  get_site_image_src("locations",$row->image); ?>" height = "80"><br>
                        <input type = "file" name = "image" id = "image" class = "form-control file2 inline btn btn-primary" data-label = "<i class='fa fa-upload'></i> Browse" />
                    </div>
                </div> -->
                <div class="col-md-12">                
                    <hr class="hr-short">
                    <div class="form-group text-right">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
<?php else: ?>
    <?= showMsg(); ?>
    <?= getBredcrum(ADMIN, array('#' => 'Manage Locations')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-list"></i> Manage <strong>Locations</strong></h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?= site_url(ADMIN . '/locations/manage'); ?>" class="btn btn-lg btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
        </div>
    </div>
    <table class="table table-bordered datatable" id="table-1">
        <thead>
            <tr>
                <th width="5%" class="text-center">Sr#</th>
                <!-- <th>Image</th> -->
                <th>Title</th>
                <th>Address</th>
                <th width="12%" class="text-center">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($rows) > 0): $count = 0; ?>
                <?php foreach ($rows as $row): ?>
                    <tr class="odd gradeX">
                        <td class="text-center"><?= ++$count; ?></td>
                        <!-- <td><a href="<?=$row->link?>"><img src = "<?=  get_site_image_src("locations/",$row->image); ?>" height = "30"></a></td> -->
                        <td><b><?= nl2br($row->title); ?></b></td>
                        <td><?= nl2br($row->address); ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                    <!-- <?php if ($row->status == '0'): ?>
                                        <li><a href="<?= site_url(ADMIN.'/locations/active/'.$row->id); ?>">Active</a></li>
                                    <?php else: ?>
                                        <li><a href="<?= site_url(ADMIN.'/locations/inactive/'.$row->id); ?>">Inactive</a></li>
                                    <?php endif; ?> -->
                                    <li><a href="<?= site_url(ADMIN.'/locations/manage/'.$row->id); ?>">Edit</a></li>
                                    <li><a href="<?= site_url(ADMIN.'/locations/delete/'.$row->id); ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
<?php endif; ?>