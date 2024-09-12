<!DOCTYPE html>
<html lang="en">

    <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo e($setting->first()->name); ?></title>
    <?php if($setting->first()->favicon != null): ?>
        <link rel="shortcut icon" href="<?php echo e(asset('uploads/setting')); ?>/<?php echo e($setting->first()->favicon); ?>">
    <?php endif; ?>

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('invoice')); ?>/css/main-style.css">
</head>
<body class="section-bg-one">
    <main class="main-wrapper position-relative">
        <div class="modern-invoice2 w-100" id="download-section">
            <!-- invoice Top -->
            <div class="card-headers d-flex flex-wrap align-items-center justify-content-sm-between">
                <div class="left-invoice">
                    <a ><img width="350px" src="<?php echo e(asset('uploads/setting')); ?>/<?php echo e($setting->first()->white_logo); ?>"></a>
                </div>
                <div class="right-invoice">
                    <h5 class="text-25 mb-0 mt-0 text-white"><?php echo e($setting->first()->name); ?></h5>
                    <span class="status d-block text-capitalize text-white"><strong>#<?php echo e($orders->order_id); ?></strong></span>
                    
                    <div class="shape"></div>
                </div>
            </div>
            <div class="modern-invoice">
                <!-- invoice Description -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <div class="invoice-details mb-20">
                                <h5 class="mb-10 text-18 text-capitalize"> From:</h5>
                                <p><strong ><?php echo e($setting->first()->name); ?></strong></p>
                                <div class="invoice-details-inner mt-2">
                                    <p><strong>Address: </strong> <?php echo e($setting->first()->address); ?></p>
                                    <p><strong>Email: </strong> <?php echo e($setting->first()->email); ?></p>
                                    <p><strong>Phone: </strong> <?php echo e($setting->first()->number_one); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-6">
                            <div class="invoice-details mb-20">
                                <h5 class="mb-10 text-18 text-capitalize"> To:</h5>
                                <p><strong ><?php echo e($billingdetails->district); ?> </strong></p>
                                <div class="invoice-details-inner mt-2">
                                    <p><strong>Name: </strong> <?php echo e($billingdetails->name); ?></p>
                                    <p><strong>Address: </strong><?php echo e($billingdetails->address); ?></p>
                                    <p><strong>Phone: </strong> <?php echo e($billingdetails->mobile); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- invoice Table -->
                <div class="table-responsive invoice-table mb-4">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Item</th>
                                <th>Description</th>
                                <th class="black-bg">Unit Cost</th>
                                <th class="black-bg">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $subtotal = 0;
                            ?>
                            <?php $__currentLoopData = $order_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl=>$order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($sl+1); ?></td>
                                    <td><?php echo e($order->rel_to_pro->name); ?></td>
                                    <td>
                                        <?php if($orders->landing == 1): ?>
                                            <?php if($orders->color): ?>
                                                <span>Color:<?php echo e($orders->color); ?>, </span>
                                            <?php endif; ?>
                                            <?php if($orders->size): ?>
                                                <span>Size:<?php echo e($orders->size); ?>, </span>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <?php if($order->rel_to_attribute->weight): ?>
                                                <span style="">Package:<?php echo e($order->rel_to_attribute->weight); ?>, </span>
                                            <?php else: ?>
                                                <span style="">Color:<?php echo e($order->rel_to_attribute->color_id); ?> <span>, Size:<?php echo e($order->rel_to_attribute->size_id); ?>, </span></span>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e(number_format($order->rel_to_attribute->sell_price ?? $order->rel_to_attribute->price)); ?> X <?php echo e($order->quantity); ?></td>
                                    <td><?php echo e(number_format(($order->rel_to_attribute->sell_price ?? $order->rel_to_attribute->price) * $order->quantity)); ?></td>
                                </tr>
                                <?php
                                    $subtotal += ($order->rel_to_attribute->sell_price ?? $order->rel_to_attribute->price) * $order->quantity;
                                ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-4">
                        <?php if($order->rel_to_attribute->image): ?>
                            <img width="150px" src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($order->rel_to_attribute->image); ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-8 ms-auto">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <strong class="status">Subtotal</strong>
                                    </td>
                                    <td><?php echo e(number_format($subtotal)); ?> Tk</td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong class="status">Delivery Charge</strong>
                                    </td>
                                    <td><?php echo e($orders->delivery_charge); ?> Tk</td>
                                </tr>
                                <tr class="total-pay">
                                    <td class="border-bottom-0">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="border-bottom-0">
                                        <strong><?php echo e(number_format($orders->total)); ?> Tk</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End-of Table -->
                <!-- invoice address -->
                <div class="row">
                    <div class="col-sm-12 mb-10">
                        <span class="status d-block mb-20"> <strong>Date :</strong> <?php echo e($billingdetails->first()->created_at->format('d-M-Y')); ?></span>
                        <h5 class="mb-2 text-title font-700"> Important: </h5>
                        <p>This is an electronic generated invoice so doesn't require any signature. </p>
                    </div>
                </div>
                <div class="footer-shape">
                    <svg viewBox="0 0 500 200">
                        <path d="M 0 50 C 150 50 300 0 500 80 L 500 0 L 0 0" fill="#07657E"></path>
                        <path d="M 0 50 C 150 50 330 -30 500 50 L 500 0 L 0 0" fill="#000" ></path>
                    <path d="M 0 50 C 215 50 250 0 500 100 L 500 0 L 0 0" fill="#07657E" opacity="0.1"></path>
                    </svg>
                </div>
            </div>
        </div>
        <!-- invoice Bottom  -->
        <div class="text-center modern-bill-button">
            <div class="d-print-none d-flex flex-column justify-content-center flex-wrap gap-10 mt-5">
                
                <button id="bill-download" class="btn-primary-outline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M320 336h76c55 0 100-21.21 100-75.6s-53-73.47-96-75.6C391.11 99.74 329 48 256 48c-69 0-113.44 45.79-128 91.2-60 5.7-112 35.88-112 98.4S70 336 136 336h56M192 400.1l64 63.9 64-63.9M256 224v224.03" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                </button>
            </div>
        </div>
    </main>

    <!-- jquery-->
    <script src="<?php echo e(asset('invoice')); ?>/js/jquery-3.7.0.min.js"></script>
    <!-- Plugin -->
    <script src="<?php echo e(asset('invoice')); ?>/js/plugin.js"></script>
    <!-- Main js-->
    <script src="<?php echo e(asset('invoice')); ?>/js/mian.js"></script>
</body>
</html>
<?php /**PATH F:\all project\cottonbd\resources\views/invoice/print_invoice.blade.php ENDPATH**/ ?>