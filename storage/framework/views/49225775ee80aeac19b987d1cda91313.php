<?php $__env->startSection('content'); ?>
<div class="content">
    <!-- Top Statistics -->
    <div class="row">
        <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
            <div class="card card-mini dash-card card-1">
                <div class="card-body">
                    <h2 class="mb-1"><?php echo e($total_user); ?></h2>
                    <p>Total User</p>
                    <span class="mdi mdi-account-arrow-left"></span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
            <div class="card card-mini dash-card card-2">
                <div class="card-body">
                    <h2 class="mb-1"><?php echo e($total_product); ?></h2>
                    <p>Total Products</p>
                    <span class="mdi mdi-account-clock"></span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
            <div class="card card-mini dash-card card-3">
                <div class="card-body">
                    <h2 class="mb-1"><?php echo e($total_orders); ?></h2>
                    <p>Total Order</p>
                    <span class="mdi mdi-package-variant"></span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
            <div class="card card-mini dash-card card-4">
                <div class="card-body">
                    <?php
                        $total_revineu = 0;
                        foreach ($total_completed as $completed) {
                            $total_revineu += $completed->total;
                        }
                    ?>
                    <h2 class="mb-1"><?php echo e($total_revineu); ?> Tk</h2>
                    <p>Revenue</p>
                    <span class="mdi mdi-currency-usd"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-8 col-md-12 p-b-15">
            <!-- Sales Graph -->
            <div id="user-acquisition" class="card card-default">
                <div class="card-header">
                    <h2>Sales Report</h2>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs nav-style-border justify-content-between justify-content-lg-start border-bottom"
                        role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#todays" role="tab"
                                aria-selected="true">Today's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#monthly" role="tab"
                                aria-selected="false">Monthly </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#yearly" role="tab"
                                aria-selected="false">Yearly</a>
                        </li>
                    </ul>
                    <div class="tab-content pt-4" id="salesReport">
                        <div class="tab-pane fade show active" id="source-medium" role="tabpanel">
                            <div class="mb-6" style="max-height:247px">
                                <canvas id="acquisition" class="chartjs2"></canvas>
                                <div id="acqLegend" class="customLegend mb-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12 p-b-15">
            <!-- Doughnut Chart -->
            <div class="card card-default">
                <div class="card-header justify-content-center">
                    <h2>Orders Overview</h2>
                </div>
                <div class="card-body">
                    <canvas id="doChart"></canvas>
                </div>
                <div class="card-footer d-flex flex-wrap bg-white p-0">
                    <div class="col-6">
                        <div class="p-20">
                            <ul class="d-flex flex-column justify-content-between">
                                <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                        style="color: #4c84ff"></i>Order Completed</li>
                                <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                        style="color: #80e1c1 "></i>Order Unpaid</li>
                                <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                        style="color: #ff7b7b "></i>Order returned</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 border-left">
                        <div class="p-20">
                            <ul class="d-flex flex-column justify-content-between">
                                <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                        style="color: #8061ef"></i>Order Pending</li>
                                <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                        style="color: #ffa128"></i>Order Canceled</li>
                                <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                        style="color: #7be6ff"></i>Order Broken</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 p-b-15">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none card-default recent-orders" id="recent-orders">
                <div class="card-header justify-content-between">
                    <h2>Recent Orders</h2>
                    
                </div>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Product Name</th>
                                <th class="d-none d-lg-table-cell">Subtotal</th>
                                <th class="d-none d-lg-table-cell">Charge</th>
                                <th class="d-none d-lg-table-cell">Total</th>
                                <th>Data</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $orders->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($order->order_id); ?></td>
                                    <td>
                                        <?php $__currentLoopData = $order->rel_to_orderpro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $OrderProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($OrderProduct != null): ?>
                                                    <?php if($OrderProduct->rel_to_attribute != null): ?>
                                                        <span><?php echo e($OrderProduct->rel_to_pro->name??''); ?> <br> <?php echo e($OrderProduct->quantity); ?> x <?php echo e($OrderProduct->rel_to_attribute ? $OrderProduct->rel_to_attribute->sell_price : $OrderProduct->rel_to_attribute->price); ?>,
                                                            <?php if($OrderProduct->rel_to_attribute->weight != null): ?>
                                                                Package: <?php echo e($OrderProduct->rel_to_attribute->weight); ?>

                                                            <?php else: ?>
                                                                Color: <?php echo e($OrderProduct->rel_to_attribute->color_id); ?>

                                                                Size: <?php echo e($OrderProduct->rel_to_attribute->size_id); ?>

                                                            <?php endif; ?>
                                                        </span><hr>
                                                    <?php elseif($OrderProduct->rel_to_pro != null): ?>
                                                        <span><?php echo e($OrderProduct->rel_to_pro->name); ?> <br> <?php echo e($OrderProduct->quantity); ?> x <?php echo e($OrderProduct->rel_to_pro ? $OrderProduct->rel_to_pro->sell_price : $OrderProduct->rel_to_pro->price); ?>,
                                                            <?php if($OrderProduct->rel_to_pro->weight != null): ?>
                                                                Package: <?php echo e($OrderProduct->rel_to_pro->weight); ?>

                                                            <?php else: ?>
                                                                Color: <?php echo e($OrderProduct->rel_to_pro->color_id); ?>

                                                                Size: <?php echo e($OrderProduct->rel_to_pro->size_id); ?>

                                                            <?php endif; ?>
                                                        </span><hr>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td><?php echo e($order->sub_total); ?>Tk</td>
                                    <td><?php echo e($order->delivery_charge); ?>Tk</td>
                                    <td><?php echo e($order->total); ?>Tk</td>
                                    <td>
                                        <?php if($order->status == 0): ?>
                                            <div class="badge badge-secondary">Pending</div>
                                        <?php elseif($order->status == 1): ?>
                                            <div class="badge badge-info">Confirmed Order</div>
                                        <?php elseif($order->status == 2): ?>
                                            <div class="badge badge-primary">Processing Order</div>
                                        <?php elseif($order->status == 3): ?>
                                            <div class="badge badge-warning">On Delivery</div>
                                        <?php elseif($order->status == 4): ?>
                                            <div class="badge badge-success">Product Delivered</div>
                                        <?php else: ?>
                                            <div class="badge badge-danger">Cancel</div>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($order->created_at->format('d-m-Y')); ?></td>
                                    <td class="text-right">
                                        <a href="<?php echo e(route('orders.edit',  $order->id)); ?>" class="btn btn-primary">View</a>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\all project\nobabi_fashion\resources\views/backend/dashboard.blade.php ENDPATH**/ ?>