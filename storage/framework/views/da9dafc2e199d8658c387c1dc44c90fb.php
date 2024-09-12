<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div>
            <h1>Product List</h1>
            <p class="breadcrumbs"><span><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Product
            </p>
        </div>
        <div>
            <a href="<?php echo e(route('product.create')); ?>" class="btn btn-primary">Add Product</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="ec-vendor-list card card-default">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="responsive-data-table" class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>SKU</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Subcategory</th>
                                    <th>Color</th>
                                    <th>Size</th>
                                    <th>Package</th>
                                    <th>Brand</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Sell Price</th>
                                    <th>Tag</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($product->inventorie_id != null): ?>
                                        <tr>
                                            <td>
                                                <?php if($product->rel_to_inventorie): ?>
                                                    <?php
                                                        $inventorie = $product->rel_to_inventorie
                                                    ?>
                                                    <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <img width="100" src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($attribute->image); ?>" alt="Image" />
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->rel_to_inventorie): ?>
                                                    <?php if($product->rel_to_inventorie->sku != null): ?>
                                                        <?php echo e($product->rel_to_inventorie->sku); ?>

                                                    <?php else: ?>
                                                        N/A
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->name != null): ?>
                                                    <?php echo e($product->name); ?>

                                                <?php else: ?>
                                                    N/A
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->category_id != null): ?>
                                                    <?php if($product->rel_to_cat != null): ?>
                                                        <?php echo e($product->rel_to_cat->name); ?>

                                                    <?php else: ?>
                                                        C/N/A
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    N/A
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->subcategory_id != null): ?>
                                                    <?php if($product->rel_to_subcat != null): ?>
                                                        <?php echo e($product->rel_to_subcat->name); ?>

                                                    <?php else: ?>
                                                        C/N/A
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    N/A
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->rel_to_inventorie): ?>
                                                    <?php
                                                        $inventorie = $product->rel_to_inventorie
                                                    ?>
                                                    <?php $__currentLoopData = $inventorie->rel_to_attribute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php echo e($attribute->color_id); ?>,
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->rel_to_inventorie): ?>
                                                    <?php
                                                        $inventorie = $product->rel_to_inventorie
                                                    ?>
                                                    <?php $__currentLoopData = $inventorie->rel_to_attribute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php echo e($attribute->size_id); ?>,
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->rel_to_inventorie): ?>
                                                    <?php
                                                        $inventorie = $product->rel_to_inventorie
                                                    ?>
                                                    <?php $__currentLoopData = $inventorie->rel_to_attribute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php echo e($attribute->weight); ?>,
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    N/A
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->brand != null): ?>
                                                    <?php echo e($product->brand); ?>

                                                <?php else: ?>
                                                    N/A
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->rel_to_inventorie): ?>
                                                        <?php
                                                            $inventorie = $product->rel_to_inventorie
                                                        ?>
                                                        <?php $__currentLoopData = $inventorie->rel_to_attribute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php echo e($attribute->quantity); ?>,
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                            </td>
                                            <td>
                                                <?php if($product->rel_to_inventorie): ?>
                                                    <?php
                                                        $inventorie = $product->rel_to_inventorie
                                                    ?>
                                                    <?php $__currentLoopData = $inventorie->rel_to_attribute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php echo e($attribute->price); ?> Tk,
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->rel_to_inventorie): ?>
                                                    <?php
                                                        $inventorie = $product->rel_to_inventorie
                                                    ?>
                                                    <?php $__currentLoopData = $inventorie->rel_to_attribute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php echo e($attribute->sell_price); ?> Tk,
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->tag != null): ?>
                                                    <?php echo e(Str::limit($product->tag, 10, '...')); ?>

                                                <?php else: ?>
                                                    N/A
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->status == 1): ?>
                                                    <div class="badge badge-success">Active</div>
                                                <?php else: ?>
                                                    <div class="badge badge-danger">Deactive</div>
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e($product->created_at->format('d-m-Y')); ?></td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a href="<?php echo e(route('product.edit',  $product->id)); ?>" class="dropdown-item">Edit</a>
                                                        <form action="<?php echo e(route('product.destroy',  $product->id)); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?')">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <td>
                                                <img width="100" src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($product->image); ?>" alt="Image" />
                                            </td>
                                            <td>
                                                <?php if($product->sku != null): ?>
                                                    <?php echo e($product->sku); ?>

                                                <?php else: ?>
                                                    N/A
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->name != null): ?>
                                                    <?php echo e($product->name); ?>

                                                <?php else: ?>
                                                    N/A
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->category_id != null): ?>
                                                    <?php if($product->rel_to_cat != null): ?>
                                                        <?php echo e($product->rel_to_cat->name); ?>

                                                    <?php else: ?>
                                                        C/N/A
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    N/A
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->subcategory_id != null): ?>
                                                    <?php if($product->rel_to_subcat != null): ?>
                                                        <?php echo e($product->rel_to_subcat->name); ?>

                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->color_id != null): ?>
                                                    <?php echo e($product->color_id); ?>

                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->size_id != null): ?>
                                                    <?php echo e($product->size_id); ?>

                                                <?php endif; ?>

                                            </td>
                                            <td>
                                                <?php if($product->weight != null): ?>
                                                    <?php echo e($product->weight); ?>

                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->brand != null): ?>
                                                    <?php echo e($product->brand); ?>

                                                <?php else: ?>
                                                    N/A
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->quantity != null): ?>
                                                    <?php echo e($product->quantity); ?>

                                                <?php else: ?>
                                                    N/A
                                                <?php endif; ?>

                                            </td>
                                            <td>
                                                <?php if($product->price != null): ?>
                                                    <?php echo e($product->price); ?> Tk
                                                <?php else: ?>
                                                    N/A
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->sell_price != null): ?>
                                                    <?php echo e($product->sell_price); ?> Tk
                                                <?php else: ?>
                                                    N/A
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->tag != null): ?>
                                                    <?php echo e($product->tag); ?>

                                                <?php else: ?>
                                                    N/A
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($product->status == 1): ?>
                                                    <div class="badge badge-success">Active</div>
                                                <?php else: ?>
                                                    <div class="badge badge-danger">Deactive</div>
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e($product->created_at->format('d-m-Y')); ?></td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a href="<?php echo e(route('product.edit', $product->id)); ?>" class="dropdown-item">Edit</a>
                                                        <form action="<?php echo e(route('product.destroy',  $product->id)); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?')">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\all project\nobabi_fashion\resources\views/backend/product/listproduct.blade.php ENDPATH**/ ?>