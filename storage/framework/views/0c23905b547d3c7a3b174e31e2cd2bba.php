<?php $__env->startSection('content'); ?>
<div class="content">

    <div class="">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-6">
                        <div>
                            <h1>Orders List</h1>
                            <p class="breadcrumbs"><span><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Orders
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-6 d-flex">
                        <div class="mx-3">
                            <form action="<?php echo e(route('multi.order.status')); ?>" method="post" id="all_order_form">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="order_data" id="checked_order_value">
                                <div class="dropdown">
                                    <button class="border-0 bg-body" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="btn btn-success">Status</span>
                                    </button>
                                    <?php if($orders->first() != null): ?>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <li>
                                                <button name="status" value="<?php echo e($orders->first()->order_id .','. '0'); ?>" class="dropdown-item status">Pending</button>
                                            </li>
                                            <li>
                                                <button name="status" value="<?php echo e($orders->first()->order_id .','. '4'); ?>" class="dropdown-item status">Confirmed</button>
                                            </li>
                                            <li>
                                                <button name="status" value="<?php echo e($orders->first()->order_id .','. '5'); ?>" class="dropdown-item status">Cancel Order</button>
                                            </li>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </form>
                        </div>
                        <div >
                            <form action="<?php echo e(route('multi.view.invoice')); ?>" method="post" id="all_print_form">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="print_data" id="checked_value">
                                <div class="form-group">
                                    <button type="submit" id="bulk_print_btn" class="btn btn-info">Print Invoice</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="filter row">
                    <div class="col-lg-9 pt-1">
                        <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%;">
                            <i class="fa fa-calendar"></i>&nbsp;
                            <span></span> <i class="fa fa-caret-down"></i>
                         </div>
                    </div>
                    <div class="col-lg-3">
                        <form action="<?php echo e(route('orders.index')); ?>" method="GET">
                            <input type="hidden" name="start_date" id="start_date" value="<?php echo e($defaultStartDate); ?>">
                            <input type="hidden" name="end_date" id="end_date" value="<?php echo e($defaultEndDate); ?>">
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-xl-2 col-sm-6 p-b-15 lbl-card cursor-pointer">
                <div id="total-orders" class="card card-mini dash-card card-1">
                    <div class="card-body">
                        <h2 class="mb-1"><?php echo e($total_orders); ?></h2>
                        <p>Total Order</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-6 p-b-15 lbl-card cursor-pointer">
                <div id="pending-orders" class="card card-mini dash-card card-2">
                    <div class="card-body">
                        <h2 class="mb-1"><?php echo e($pending_orders); ?></h2>
                        <p>Total Pending</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-6 p-b-15 lbl-card cursor-pointer">
                <div id="confirm-orders" class="card card-mini dash-card card-3">
                    <div class="card-body">
                        <h2 class="mb-1"><?php echo e($confirm_orders); ?></h2>
                        <p>Total Confirm</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-6 p-b-15 lbl-card cursor-pointer">
                <div id="hold-orders" class="card card-mini dash-card card-3">
                    <div class="card-body">
                        <h2 class="mb-1"><?php echo e($hold_orders); ?></h2>
                        <p>Total Hold</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-6 p-b-15 lbl-card cursor-pointer">
                <div id="cancel-orders" class="card card-mini dash-card card-3">
                    <div class="card-body">
                        <h2 class="mb-1"><?php echo e($cancel_orders); ?></h2>
                        <p>Total Cancel</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-6 p-b-15 lbl-card">
                <div class="card card-mini dash-card card-4">
                    <div class="card-body">
                        <?php
                            $total_revineu = 0;
                            foreach ($total_completed as $completed) {
                                $total_revineu += $completed->total;
                            }
                        ?>
                        <h2 class="mb-1"><?php echo e(number_format($total_revineu)); ?> Tk</h2>
                        <p>Revenue</p>
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
                                    <th></th>
                                    <th>sl</th>
                                    <th>Image</th>
                                    <th>Invoice No.</th>
                                    <th>Customer Info</th>
                                    <th>Product</th>
                                    <th>Subtotal</th>
                                    <th>Charge</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl=>$order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr id="tr_<?php echo e($order->id); ?>">
                                        <td>
                                            <input type="checkbox" name="checkbox" class="sub_chk" data-id="<?php echo e($order->id); ?>">
                                        </td>
                                        <td><?php echo e($sl+1); ?></td>
                                        <td>
                                            <?php $__currentLoopData = $order->rel_to_orderpro->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $OrderProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($OrderProduct != null): ?>
                                                    <?php if($OrderProduct->rel_to_attribute != null): ?>
                                                        <img width="100" src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($OrderProduct->rel_to_attribute->image); ?>" alt="Image" />
                                                    <?php elseif($OrderProduct->rel_to_pro): ?>
                                                        <img width="100" src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($OrderProduct->rel_to_pro->image); ?>" alt="Image" />
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td><?php echo e($order->order_id); ?></td>
                                        <td>
                                            <span><?php echo e($order->rel_to_billing ? $order->rel_to_billing->name : 'No Billing Details'); ?></span>
                                            <br>
                                            <a href="tel: <?php echo e($order->rel_to_billing ? $order->rel_to_billing->mobile : 'No Billing Details'); ?>"><span><?php echo e($order->rel_to_billing ? $order->rel_to_billing->mobile : 'No Billing Details'); ?></span></a>
                                            <br>
                                            <span><?php echo e($order->rel_to_billing ? $order->rel_to_billing->address : 'No Billing Details'); ?></span>
                                            <br>
                                            <span><?php echo e($order->rel_to_billing ? $order->rel_to_billing->district : 'No Busines Name'); ?></span>
                                        </td>
                                        <td>
                                            <?php $__currentLoopData = $order->rel_to_orderpro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $OrderProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($OrderProduct != null): ?>
                                                    <?php if($order->landing == 1): ?>
                                                        <span><?php echo e($OrderProduct->rel_to_pro->name??''); ?> <br> <?php echo e($OrderProduct->quantity); ?> x <?php echo e($OrderProduct->price); ?>,
                                                            <?php if($order->color != null): ?>
                                                                Color: <?php echo e($order->color); ?>

                                                            <?php endif; ?>
                                                            <?php if($order->size): ?>
                                                                Size: <?php echo e($order->size); ?>

                                                            <?php endif; ?>
                                                        </span><hr>
                                                    <?php else: ?>
                                                        <?php if($OrderProduct->rel_to_attribute != null): ?>
                                                            <span><?php echo e($OrderProduct->rel_to_pro->name??''); ?> <br> <?php echo e($OrderProduct->quantity); ?> x <?php echo e($OrderProduct->price); ?>,
                                                                <?php if($OrderProduct->rel_to_attribute->weight != null): ?>
                                                                    Package: <?php echo e($OrderProduct->rel_to_attribute->weight); ?>

                                                                <?php else: ?>
                                                                    Color: <?php echo e($OrderProduct->rel_to_attribute->rel_to_color->name); ?>

                                                                    Size: <?php echo e($OrderProduct->rel_to_attribute->rel_to_size->name); ?>

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
                                                <div class="badge badge-info">On Hold</div>
                                            <?php elseif($order->status == 2): ?>
                                                <div class="badge badge-primary">Processing Order</div>
                                            <?php elseif($order->status == 3): ?>
                                                <div class="badge badge-warning">On Delivery</div>
                                            <?php elseif($order->status == 4): ?>
                                                <div class="badge badge-success">Confirmed</div>
                                            <?php else: ?>
                                                <div class="badge badge-danger">Cancel</div>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($order->created_at->format('d-m-Y H:i:s')); ?></td>
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
                                                    <a href="<?php echo e(route('orders.edit',  $order->id)); ?>" class="dropdown-item">Edit</a>
                                                    <form action="<?php echo e(route('orders.destroy',  $order->id)); ?>" method="POST">
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

<?php $__env->startSection('footer_scripts'); ?>
<script type="text/javascript">
    $(document).ready(function () {
        var start_date = '<?php echo e($defaultStartDate); ?>';
        var end_date = '<?php echo e($defaultEndDate); ?>';

        if (start_date && end_date) {
            start_date = moment(start_date, 'YYYY-MM-DD');
            end_date = moment(end_date, 'YYYY-MM-DD');
        } else {
            start_date = moment().subtract(6, 'days');
            end_date = moment();
        }

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            $('#start_date').val(start.format('YYYY-MM-DD'));
            $('#end_date').val(end.format('YYYY-MM-DD'));
        }

        $('#reportrange').daterangepicker({
            startDate: start_date,
            endDate: end_date,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
        cb(start_date, end_date);
    });
</script>
<?php $__env->stopSection(); ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var checkboxes = document.querySelectorAll('.sub_chk');
        let checked_value = document.getElementById('checked_value');

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                var checkedIDs = [];
                var checkedCheckboxes = document.querySelectorAll('.sub_chk:checked');

                checkedCheckboxes.forEach(function(checkedCheckbox) {
                    checkedIDs.push(checkedCheckbox.getAttribute('data-id'));
                });

                checked_value.value = checkedIDs.join(', ');
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('total-orders').addEventListener('click', function() {
            window.location.href = '<?php echo e(url("admin/orders")); ?>';
        });

        document.getElementById('pending-orders').addEventListener('click', function() {
            window.location.href = '<?php echo e(url("admin/orders")); ?>?status=pending';
        });

        document.getElementById('confirm-orders').addEventListener('click', function() {
            window.location.href = '<?php echo e(url("admin/orders")); ?>?status=confirm';
        });

        document.getElementById('hold-orders').addEventListener('click', function() {
            window.location.href = '<?php echo e(url("admin/orders")); ?>?status=hold';
        });

        document.getElementById('cancel-orders').addEventListener('click', function() {
            window.location.href = '<?php echo e(url("admin/orders")); ?>?status=cancel';
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var checkboxes = document.querySelectorAll('.sub_chk');
        let checked_order_value = document.getElementById('checked_order_value');

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                var checkedIDs = [];
                var checkedCheckboxes = document.querySelectorAll('.sub_chk:checked');

                checkedCheckboxes.forEach(function(checkedCheckbox) {
                    checkedIDs.push(checkedCheckbox.getAttribute('data-id'));
                });

                checked_order_value.value = checkedIDs.join(',');
            });
        });
    });
</script>
<script>
    $('.print').on('click', function () {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN
            }
        });

        $.ajax({
            url: '/getprints',
            type: 'POST',
            data: {_token: CSRF_TOKEN, id: $(this).data('id')},
            success: function (data) {
                newWin = window.open("");
                newWin.document.write(data);
                newWin.document.close();
            }
        });
    });
</script>

<script>
    //courier export
    $('#steadfast_csv').on('click', function (e) {
        var allVals = [];
        $(".sub_chk:checked").each(function () {
            allVals.push($(this).attr('data-id'));
        });

        if (allVals.length <= 0) {
            alert("Please select row.");
        } else {
            $('#all_ord_id').val(allVals);
            $('#courier_status').val(1);
            $('#all_courier_csv').submit();
        }
    });

    $('#redex_csv').on('click', function (e) {
        var allVals = [];
        $(".sub_chk:checked").each(function () {
            allVals.push($(this).attr('data-id'));
        });

        if (allVals.length <= 0) {
            alert("Please select row.");
        } else {
            $('#all_ord_id').val(allVals);
            $('#courier_status').val(2);
            $('#all_courier_csv').submit();
        }
    });
</script>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\all project\cottonbd\resources\views/backend/order/listorder.blade.php ENDPATH**/ ?>