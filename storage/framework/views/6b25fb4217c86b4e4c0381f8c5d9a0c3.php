<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div>
            <h1>Attribute List</h1>
            <p class="breadcrumbs"><span><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Attribute
            </p>
        </div>
        <div>
            <a href="<?php echo e(route('inventory.create')); ?>" class="btn btn-primary">Add Attribute</a>
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
                                    <th>Title</th>
                                    <th>SKU</th>
                                    <th>Brand</th>
                                    <th>Inventory</th>
                                    
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $inventorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php if($inventory->rel_to_attribute->isNotEmpty() && $inventory->rel_to_attribute->first()->image): ?>
                                            <img width="100" src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($inventory->rel_to_attribute->first()->image); ?>" alt="Image" />
                                            <?php else: ?>
                                                No image available
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($inventory->title); ?></td>
                                        <td><?php echo e($inventory->sku); ?></td>
                                        <td>
                                            <?php if($inventory->brand != null): ?>
                                                <?php echo e($inventory->brand); ?>

                                            <?php else: ?>
                                                N/A
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php $__currentLoopData = $inventory->rel_to_attribute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($attribute->color_id): ?>
                                                    color: <?php echo e($attribute->color_id); ?>,
                                                <?php endif; ?>
                                                <?php if($attribute->size_id): ?>
                                                    size: <?php echo e($attribute->size_id); ?>,
                                                <?php endif; ?>
                                                <?php if($attribute->weight): ?>
                                                    Package: <?php echo e($attribute->weight); ?>,
                                                <?php endif; ?>
                                                Price: <?php echo e($attribute->price); ?>, Sell Price: <?php echo e($attribute->sell_price); ?>, Quantity: <?php echo e($attribute->quantity); ?>,<br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <?php if($inventory->status == 1): ?>
                                                <div class="badge badge-success">Active</div>
                                            <?php else: ?>
                                                <div class="badge badge-danger">Deactive</div>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($inventory->created_at->format('d-m-Y')); ?></td>
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
                                                    <a class="dropdown-item" href="<?php echo e(route('inventory.edit', $inventory->id)); ?>">Edit</a>
                                                    <form action="<?php echo e(route('inventory.destroy',  $inventory->id)); ?>" method="POST">
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\all project\cottonbd\resources\views/backend/product/attributelist.blade.php ENDPATH**/ ?>