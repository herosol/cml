<?php if ($this->uri->segment(3) == 'manage'): ?>
    <?= showMsg(); ?>
    <?= getBredcrum(ADMIN, array('#' => $page_title.' Product')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-basket"></i> <?= $page_title?> <strong>Product</strong></h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?= site_url(ADMIN . '/products'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>
        </div>
    </div>
    <div>
        <hr>
        <div class="clearfix"></div>
        <div class="panel-body">
            <form action=""  role="form" class="form-horizontal form-groups-bordered frmAjax" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="title" class="control-label"> Title <span class="symbol required">*</span></label>
                            <input type="text" name="title" id="title" value="<?php if (isset($row->title)) echo $row->title; ?>" class="form-control" required autofocus>
                        </div>
                        <div class="col-md-3">
                            <label for="ref_code" class="control-label"> Reference Code <span class="symbol required">*</span></label>
                            <input type="text" name="ref_code" id="ref_code" value="<?php if (isset($row->ref_code)) echo $row->ref_code; ?>" class="form-control" required autofocus>
                        </div>
                        <div class="col-md-6">
                            <label for="whatsapp_link" class="control-label"> Whatsapp Link <span class="symbol required">*</span></label>
                            <input type="text" name="whatsapp_link" id="whatsapp_link" value="<?php if (isset($row->whatsapp_link)) echo $row->whatsapp_link; ?>" class="form-control" required autofocus>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="brand" class="control-label"> Brands <span class="symbol required">*</span></label>
                            <select id="brand" name="brand" class="form-control" required>
                                <option value=""  selected>---- Select Brand ----</option>
                                <?= $brands = get_brands()?>
                                <?php foreach($brands as $brand){ ?>
                                    <option value="<?=$brand->slug?>"<?= (isset($brand->slug) && $row->brand == $brand->slug ? ' selected' : '')?>><?=$brand->name?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="model" class="control-label"> Models <span class="symbol required">*</span></label>
                            <select id="model" name="model" class="form-control" required>
                                <option value=""  selected>---- Select Model ----</option>
                                <?= $models = get_models()?>
                                <?php foreach($models as $model){ ?>
                                    <option value="<?=$model->slug?>"<?= (isset($model->slug) && $row->model == $model->slug ? ' selected' : '')?>><?=$model->name?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="case_material" class="control-label"> Case material <span class="symbol required">*</span></label>
                            <select id="case_material" name="case_material" class="form-control" required>
                                <option value=""  selected>---- Select Case material ----</option>
                                <?= $cases = get_case_material()?>
                                <?php foreach($cases as $case){ ?>
                                    <option value="<?=$case->slug?>"<?= (isset($case->slug) && $row->case_material == $case->slug ? ' selected' : '')?>><?=$case->material?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="case_size" class="control-label">Case Size <span class="symbol required">*</span></label>
                            <select id="case_size" name="case_size" class="form-control" required>
                                <option value=""  selected>---- Select Case Size ----</option>
                                <?= $sizes = get_case_size()?>
                                <?php foreach($sizes as $size){ ?>
                                    <option value="<?=$size->slug?>"<?= (isset($size->slug) && $row->case_size == $size->slug ? ' selected' : '')?>><?=$size->size?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="band_material" class="control-label"> Band Material <span class="symbol required">*</span></label>
                            <select id="band_material" name="band_material" class="form-control" required>
                                <option value=""  selected>---- Select Band material----</option>
                                <?= $bands = get_band_material()?>
                                <?php foreach($bands as $band){ ?>
                                    <option value="<?=$band->slug?>"<?= (isset($band->slug) && $row->band_material == $band->slug ? ' selected' : '')?>><?=$band->material?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="type" class="control-label"> For <span class="symbol required">*</span></label>
                            <select id="type" name="type" class="form-control">
                                <option value="0"<?= (isset($row->type) && 0 == $row->type ? ' selected' : '')?>>Both</option>
                                <option value="1"<?= (isset($row->type) && 1 == $row->type ? ' selected' : '')?>>Men</option>
                                <option value="2"<?= (isset($row->type) && 2 == $row->type ? ' selected' : '')?>>Women</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="price" class="control-label"> Price <span class="symbol required">*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="number" min="0" step="any" name="price" id="price" value="<?php if (isset($row->price)) echo $row->price; ?>" class="form-control" placeholder="Price" required/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="status" class="control-label"> Status <span class="symbol required">*</span></label>
                            <select id="status" name="status" class="form-control">
                                <option value="1"<?= (isset($row->status) && 1 == $row->status ? ' selected' : '')?>>Active</option>
                                <option value="0"<?= (isset($row->status) && 0 == $row->status ? ' selected' : '')?>>Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="availability" class="control-label"> Availability <span class="symbol required">*</span></label>
                            <select id="availability" name="availability" class="form-control">
                                <option value="1"<?= (isset($row->availability) && 1 == $row->availability ? ' selected' : '')?>>Yes</option>
                                <option value="0"<?= (isset($row->availability) && 0 == $row->availability ? ' selected' : '')?>>No</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="featured" class="control-label"> Feature <span class="symbol required">*</span></label>
                            <select id="featured" name="featured" class="form-control">
                                <option value="1"<?= (isset($row->featured) && 1 == $row->featured ? ' selected' : '')?>>Yes</option>
                                <option value="0"<?= (isset($row->featured) && 0 == $row->featured ? ' selected' : '')?>>No</option>
                            </select>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-md-12">
                            <label for="short_desc" class="control-label"> Short Description</label>
                            <textarea name="short_desc" id="short_desc" rows="5" class="form-control"><?php if (isset($row->short_desc)) echo $row->short_desc; ?></textarea>
                        </div>
                    </div> -->

                    <div class="row">
                        <div class="col-md-12">
                            <label for="detail" class="control-label"> Description <span class="symbol required">*</span></label>
                            <textarea name="detail" id="detail" class="form-control ckeditor" required><?php if (isset($row->detail)) echo $row->detail; ?></textarea>
                        </div>
                    </div>
                </div>


                <h3>Images </h3>
                <div class="form-group">
                    <div class="row">
                        <div class = "col-md-6">
                            <label class="control-label">Main Thumbnail <span class="symbol required">*</span></label><br>
                            <?php if($row):?>
                                <img src = "<?=get_image_src($row->image, '150')?>" height = "80"><br>
                            <?php endif?>
                            <input type="file" name="image" id="image" class = "form-control file2 inline btn btn-primary" data-label = "<i class='fa fa-upload'></i> Browse" accept="image/*" />
                        </div>

                        <div class="col-md-6">
                            <label class="control-label">Upload Images </label><br>
                            <input type="file" name="upload_files[]" id="uplocamp_file" class="form-control file2 inline btn btn-primary" accept="image/*" multiple data-label="<i class='fa fa-upload'></i> Upload Multiple Images" />
                        </div>
                    </div>

                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php
                                if (count($row->images) > 0) :
                                    foreach ($row->images as $img) :
                                        ?>
                                        <div class="col-md-3 text-center margin-bottom-10 img-blk dy">
                                            <img src="<?= get_image_src($img->image, '150')?>" style="height:80px; margin-bottom: 10px;"><br>
                                            <button type="button" class="deletePic btn btn-danger btn-sm" data-image="<?= $img->image; ?>"><i class="fa fa-times"></i> Delete</button>
                                        </div>
                                        <?php
                                    endforeach;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin: 10px 0 10px;">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save <i class="fa fa-spinner fa-pulse fa-1x fa-fw hidden"></i></button>
                    </div>
                </div>
                <div class="alertMsg"></div>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>

    <script>
        (function($){
            $(function() {
                $(document).on('click', '.deletePic', function() {
                    let image = $(this).data('image');
                    $('form').append('<input type="hidden" name="dlt_images[]" value="'+image+'">');
                    $(this).parents('.img-blk').remove();
                });
            });
        }(jQuery));
    </script>
<?php else: ?>
    <?= showMsg(); ?>
    <?= getBredcrum(ADMIN, array('#' => 'Manage Products')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-basket"></i> Manage <strong>Products</strong></h2>
        </div>
        
        <div class="col-md-6 text-right">
            <a href="<?= site_url(ADMIN . '/products/manage'); ?>" class="btn btn-lg btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
        </div>
        
    </div>
    <table class="table table-bordered datatable" id="table-1">
        <thead>
            <tr>
                <th width="80" class="text-center">Sr#</th>
                <th width="10%">Photo</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Model</th>
                <th width="12%">Price</th>
                <th width="100" class="text-center">Availability</th>
                <th width="100" class="text-center">Status</th>
                <th width="120" class="text-center">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($rows) > 0): ?>
                <?php foreach ($rows as $key => $row): ?>
                    <tr class="odd gradeX">
                        <td class="text-center"><?= $key+1; ?></td>
                        <td><img src = "<?= get_image_src($row->image, 150); ?>" height = "60"></td>
                        <td><?= $row->title ?></td>
                        <td><?= get_brandname($row->brand) ?></td>
                        <td><?= $row->model ?></td>
                        <td><?= format_amount($row->price); ?></td>
                        <td class="text-center"><?= verified_status($row->availability); ?></td>
                        <td class="text-center"><?= getStatus($row->status); ?></td>
                        <td class="text-center">
                            <a href="<?= site_url(ADMIN.'/products/manage/'.$row->id); ?>">Edit</a><!--  |
                            <a href="<?= site_url(ADMIN.'/products/delete/'.$row->id); ?>" onclick="return confirm('Are you sure?');">Delete</a> -->
                        </td>
                        <!-- 
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                    <li><a href="<?= site_url(ADMIN.'/products/manage/'.$row->id); ?>">Edit</a></li>
                                    <?php if(access(10)):?>
                                        <li><a href="<?= site_url(ADMIN.'/products/delete/'.$row->id); ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                                    <?php endif?>
                                </ul>
                            </div>
                        </td>
                         -->
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
<?php endif; ?>