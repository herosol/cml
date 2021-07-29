<?php if ($this->uri->segment(3) == 'manage'): ?>
    <?php echo getBredcrum(ADMIN, array('#' => 'Add/Update trade')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-chat "></i> Message </h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?php echo base_url('admin/trade'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>
        </div>
    </div>
    <div>
        <div class="clearfix"></div>
        <div class="panel-body">

            <div class="row">
                <h1>Personal Information</h1>
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td><strong>Name : </strong></td>
                            <td><?php echo $row->name; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Email : </strong></td>
                            <td><?php echo $row->email; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Phone : </strong></td>
                            <td><?php echo $row->phone; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Country : </strong></td>
                            <td><?php echo $row->country; ?></td>
                        </tr>
                    </tbody>
                </table>
                <h1>Product Information</h1>
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td><strong>Model and Brand : </strong></td>
                            <td><?php echo $row->brand; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Condition : </strong></td>
                            <td><?php echo $row->conditions; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Detail : </strong></td>
                            <td><?php echo $row->details; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Stuff with watch : </strong></td>
                            <td><?php echo $row->stuff; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Image : </strong></td>
                            <td><img src = "<?=  get_site_image_src("images", $row->image, ''); ?>" height = "350"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <br>
            <br>
        </div>
        <div class="clearfix"></div>
    </div>
<?php else: ?>
    <?php echo showMsg(); ?>
    <?php echo getBredcrum(ADMIN, array("#" => "Messages")); ?>

    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-chat" aria-hidden="true"></i> Manage <strong> Trade Requests</strong></h2>
        </div>
        <div class="col-md-6 text-right">
        <!--<a href="<?php echo base_url('admin/what/manage'); ?>" class="btn btn-lg btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>-->
        </div>
    </div>
    <br>
    <form method="post" action="<?=base_url('admin/trade/deleteAll')?>">
        <table class="table table-bordered datatable" id="table-1">
            <thead>
                <tr>
                    <th width="" class="text-center no_order" style="">
                        <button type="submit" onclick="return confirm('Are you sure to delete?');" name="delete_selected" class="btn btn-sm btn-danger">Delete</button>
                    </th>
                    <th width="5%" class="text-center">Sr#</th>
                    <th width="" class="text-center">Image</th>
                    <th width="" class="text-center">Name</th>
                    <th width="" class="text-center">Email</th>
                    <th width="" class="text-center">Phone</th>
                    <th width="" class="text-center">Watch Brand/Model</th>
                    <th width="" class="text-center">Product Details</th>
                    <th width="" class="text-center">Status</th>
                    <th width="" class="text-center">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($rows) > 0): $count = 0; ?>
                    <?php foreach ($rows as $row): ?>
                        <?php $time = strtotime($row->created_date); ?>
                        <tr  class="odd gradeX status_tr">
                            <td class="text-center">
                                <input type="checkbox" name="checkbox_id[]" class="select_checkbox" value="<?= $row->id ?>">
                            </td>
                            <td class="text-center"><?php echo ++$count; ?></td>
                            <td class="text-center"><img src = "<?=  get_site_image_src("images", $row->image, ''); ?>" height = "80"></td>
                            <td class="text-center"><?= $row->name ?></td>
                            <td class="text-center"><?= $row->email ?></td>
                            <td class="text-center"><?= $row->phone ?></td>
                            <td class="text-center"><?= $row->brand ?></td>
                            <td class="text-center"><?= substr($row->details,0,70) ?>...</td>
                            <td class="text-center"><?= $row->status == '1' ? '<strong class="text-success">Read</strong>' : '<strong class="text-danger">UnRead</strong>'; ?></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-primary" role="menu" style="right:0 !important;left:inherit">
                                        <li><a href="<?php echo base_url(); ?>admin/trade/manage/<?php echo $row->id; ?>/<?php echo $row->slug; ?>">View</a></li>
                                        <li><a href="<?php echo base_url(); ?>admin/trade/delete/<?php echo $row->id; ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </form>
<?php endif; ?>