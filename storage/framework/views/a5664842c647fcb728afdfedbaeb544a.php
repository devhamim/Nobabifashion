<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Edit Inventory</h1>
            <p class="breadcrumbs"><span><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Inventory</p>
        </div>
        <div>
            <a href="<?php echo e(route('inventory.index')); ?>" class="btn btn-primary"> Inventory List
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Edit Inventory</h2>
                </div>

                <div class="card-body">
                    <form class="row g-3" action="<?php echo e(route('inventory.update', $inventory->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <input type="hidden" value="<?php echo e($inventory->id); ?>" name="inventory_id">
                        <div class="row ec-vendor-uploads my-3">
                            <div class="col-md-4">
                                <label for="title" class="col-12 col-form-label">Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control set-slug <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="title" id="title" value="<?php echo e(old('title', $inventory->title)); ?>" required>
                                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-4">
                                <label for="sku" class="col-12 col-form-label">SKU <span class="text-danger">*</span></label>
                                <div class="col-12">
                                    <input id="sku" name="sku" class="form-control here set-slug <?php $__errorArgs = ['sku'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" value="<?php echo e(old('sku', $inventory->sku)); ?>" required>
                                    <?php $__errorArgs = ['sku'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="brand" class="col-12 col-form-label">Brand <span class="text-secondary">(Optional)</span></label>
                                <div class="col-12">
                                    <input id="brand" name="brand" class="form-control here set-slug" type="text" value="<?php echo e(old('brand', $inventory->brand)); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-4">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1"<?php echo e($inventory->status == 1?'selected':''); ?>>Active</option>
                                        <option value="0"<?php echo e($inventory->status == 0?'selected':''); ?>>Deactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?php $__currentLoopData = $inventory->rel_to_attribute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row ec-vendor-uploads my-3">
                            <input type="hidden" name="detail_id[]" value="<?php echo e($detail->id); ?>">
                            <div class="col-lg-2">
                                <div class="ec-vendor-img-upload">
                                    <div class="ec-vendor-main-img">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type='file' id="imageUpload" name="image[]" class="ec-image-upload <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('image', $detail->image)); ?>" />
                                                <label for="imageUpload">
                                                    <img src="<?php echo e(asset('backend')); ?>/img/icons/edit.svg" class="svg_img header_svg" alt="edit" />
                                                </label>
                                            </div>
                                            <div class="avatar-preview ec-preview">
                                                <div class="imagePreview ec-div-preview">
                                                    <img class="ec-image-preview" src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($detail->image); ?>" alt="edit" />
                                                </div>
                                            </div>
                                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="ec-vendor-upload-detail">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-end">
                                                <a href="javascript:void(0);" class="remove-row btn btn-danger">remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 my-3">
                                            <label class="form-label">Quantity</label>
                                            <input type="number" class="form-control <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="quantity[]" value="<?php echo e(old('quantity', $detail->quantity)); ?>" required>
                                            <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-4 my-3">
                                            <label class="form-label">Price <span>( In BDT )</span></label>
                                            <input type="number" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="price[]" value="<?php echo e(old('price', $detail->price)); ?>" required>
                                            <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-4 my-3">
                                            <label class="form-label">Sell Price <span>( In BDT )</span></label>
                                            <input type="number" class="form-control" name="sell_price[]" value="<?php echo e(old('sell_price', $detail->sell_price)); ?>">
                                            <?php $__errorArgs = ['sell_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-4 my-3">
                                            <label class="form-label">Package <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="weight[]" value="<?php echo e(old('weight', $detail->weight)); ?>">
                                            <?php $__errorArgs = ['weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Color <span class="text-danger">*</span></label>
                                            <select name="color_id[]" class="form-select <?php $__errorArgs = ['color_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                <option value="">-- Select Color --</option>
                                                <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($color->id); ?>" <?php echo e($color->id == $detail->color_id ? 'selected' : ''); ?>><?php echo e($color->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['color_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Size <span class="text-danger">*</span></label>
                                            <select name="size_id[]" class="form-select <?php $__errorArgs = ['size_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                <option value="">-- Select Size --</option>
                                                <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($size->id); ?>" <?php echo e($size->id == $detail->size_id ? 'selected' : ''); ?>><?php echo e($size->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['size_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="row">
                            <div class="col-md-12 offset-sm-2 mt-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-success add-new-row">Add New</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
<script>
    $(document).ready(function() {
        var rowTemplate = `
            <div class="row ec-vendor-uploads my-3">
                <input type="hidden" name="detail_id[]" value="">
                <div class="col-lg-2">
                    <div class="ec-vendor-img-upload">
                        <div class="ec-vendor-main-img">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' name="image[]" class="ec-image-upload" />
                                    <label>
                                        <img src="<?php echo e(asset('backend')); ?>/img/icons/edit.svg" class="svg_img header_svg" alt="edit" />
                                    </label>
                                </div>
                                <div class="avatar-preview ec-preview">
                                    <div class="imagePreview ec-div-preview">

                                        <img class="ec-image-preview" src="<?php echo e(asset('backend')); ?>/img/products/vender-upload-preview.jpg" alt="edit" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="ec-vendor-upload-detail">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-end">
                                    <a href="javascript:void(0);" class="remove-row text-danger">remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 my-3">
                                <label class="form-label">Quantity</label>
                                <input type="number" class="form-control" name="quantity[]" required>
                            </div>
                            <div class="col-md-4 my-3">
                                <label class="form-label">Price <span>( In BDT )</span></label>
                                <input type="number" class="form-control" name="price[]" required>
                            </div>
                            <div class="col-md-4 my-3">
                                <label class="form-label">Sell Price <span>( In BDT )</span></label>
                                <input type="number" class="form-control" name="sell_price[]">
                            </div>
                            <div class="col-md-4 my-3">
                                <label class="form-label">Package <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="weight[]">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Color <span class="text-danger">*</span></label>
                                <select name="color_id[]" class="form-select">
                                    <option value="">-- Select Color --</option>
                                    <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($color->id); ?>"><?php echo e($color->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Size <span class="text-danger">*</span></label>
                                <select name="size_id[]" class="form-select">
                                    <option value="">-- Select Size --</option>
                                    <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($size->id); ?>"><?php echo e($size->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;

        $('.add-new-row').click(function() {
            $('.ec-vendor-uploads:last').after(rowTemplate);
        });

        $(document).on('click', '.remove-row', function() {
            var row = $(this).closest('.ec-vendor-uploads');
            var detailId = row.find('input[name="detail_id[]"]').val();

            if (detailId) {
                // Add the detail ID to a hidden field to handle deletion in the backend
                $('form').append('<input type="hidden" name="delete_detail_id[]" value="' + detailId + '">');
            }

            row.remove();
        });
    });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\all project\cottonbd\resources\views/backend/product/attributeEdit.blade.php ENDPATH**/ ?>