<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div>
            <h1>Visitor List</h1>
            <p class="breadcrumbs"><span><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Visitor
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-sm-6 p-b-15 lbl-card">
            <div class="card card-mini dash-card card-1">
                <div class="card-body">
                    <h2 class="mb-1"><?php echo e($mostVisitedCity->count); ?></h2>
                    <p>Total Visitor</p>
                    <span class="mdi mdi-account-arrow-left"></span>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-sm-6 p-b-15 lbl-card">
            <div class="card card-mini dash-card card-2">
                <div class="card-body">
                    <h2 class="mb-1"><?php echo e($mostVisitedCity->city); ?></h2>
                    <p>Most Visit City</p>
                    <span class="mdi mdi-account-clock"></span>
                </div>
            </div>
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
                                    <th>IP Address</th>
                                    <th>CountryCode</th>
                                    <th>City</th>
                                    <th>Timestamp</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $visitors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visitor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($visitor->ip); ?></td>
                                        <td><?php echo e($visitor->country); ?></td>
                                        <td><?php echo e($visitor->city); ?></td>
                                        <td><?php echo e($visitor->created_at); ?></td>
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
                                                    <a href="<?php echo e(route('visitors.destroy',  $visitor->id)); ?>" class="dropdown-item"  onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mb-3">
                    <?php echo e($visitors->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\all project\cottonbd\resources\views/backend/visitors.blade.php ENDPATH**/ ?>