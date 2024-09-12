<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Site Title -->
    <title>Invoice</title>
    <link rel="stylesheet" href="<?php echo e(asset('invoice_assets')); ?>/css/style.css">

</head>

<body>
    <div class="tm_container">
        <div class="tm_invoice_wrap">
            <?php $__currentLoopData = $order_ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order_id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $order = App\Models\Order::find($order_id);
                    $billingdetails = App\Models\Billingdetails::where('order_id', $order->order_id)->first();
                    $orderproducts = App\Models\OrderProduct::where('order_id', $order->order_id)->get();
                ?>
                <div class="tm_invoice tm_style1 tm_type1 tm_invoice_in" style="height: 920px; page-break-after: always;">
                    <div class="tm_invoice_head tm_top_head tm_mb15 tm_align_center">
                        <div class="tm_invoice_left">
                            <div class="tm_logo">
                                <strong style="color: #fff"><?php echo e($setting->first()->name); ?></strong><br>
                                <span style="color: #fff">#<?php echo e($order->order_id); ?></span>
                            </div>
                        </div>
                        <div class="tm_invoice_right tm_text_right tm_mobile_hide">
                            <div class="tm_f50 tm_text_uppercase tm_white_color">
                                <img src="<?php echo e(asset('uploads/setting')); ?>/<?php echo e($setting->first()->white_logo); ?>" width="350px" alt="Logo">
                            </div>
                        </div>
                        <div class="tm_shape_bg tm_accent_bg tm_mobile_hide" style="width: 130%; z-index: -1"></div>
                        <div class="tm_shape_bg tm_accent_bg tm_mobile_hide" style="background: #fff"></div>
                    </div>
                    <div class="tm_invoice_head tm_mb10">
                        <div class="tm_invoice_left">
                            <p class="tm_mb2"><b class="tm_primary_color">From:</b></p>
                            <p>
                                <?php echo e($setting->first()->name); ?> <br>
                                <?php echo e($setting->first()->number_one); ?> <br>
                                <?php echo e($setting->first()->address); ?> <br>
                            </p>
                        </div>
                        <div class="tm_invoice_right tm_text_right">
                            <p class="tm_mb2"><b class="tm_primary_color">To:</b></p>
                            <p>
                                <?php echo e($billingdetails->name); ?> <br>
                                <?php echo e($billingdetails->mobile); ?><br>
                                <?php echo e($billingdetails->address); ?>

                            </p>
                        </div>
                    </div>
                    <div class="tm_table tm_style1">
                        <div class="">
                            <div class="tm_table_responsive">
                                <table>
                                    <thead>
                                        <tr class="tm_accent_bg">
                                            <th class="tm_width_3 tm_semi_bold tm_white_color">SL#</th>
                                            <th class="tm_width_4 tm_semi_bold tm_white_color">Product(s)</th>
                                            <th class="tm_width_2 tm_semi_bold tm_white_color">Description</th>
                                            <th class="tm_width_2 tm_semi_bold tm_white_color">Qty</th>
                                            <th class="tm_width_1 tm_semi_bold tm_white_color">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $orderproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl=>$orderpro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="tm_width_3"><?php echo e($sl+1); ?></td>
                                                <td class="tm_width_4"><?php echo e($orderpro->rel_to_pro->name); ?></td>
                                                <td>
                                                    <?php if($order->landing == 1): ?>
                                                        <?php if($order->color): ?>
                                                            <span>Color:<?php echo e($order->color); ?>, </span>
                                                        <?php endif; ?>
                                                        <?php if($order->size): ?>
                                                            <span>Size:<?php echo e($order->size); ?>, </span>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <?php if($orderpro->rel_to_attribute->weight): ?>
                                                            <span style="">Package:<?php echo e($orderpro->rel_to_attribute->weight); ?>, </span>
                                                        <?php else: ?>
                                                            <span style="">Color:<?php echo e($orderpro->rel_to_attribute->color_id); ?> <span>, Size:<?php echo e($orderpro->rel_to_attribute->size_id); ?>, </span></span>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="tm_width_2"><?php echo e($orderpro->quantity); ?></td>
                                                <td class="tm_width_1"><?php echo e($orderpro->rel_to_attribute->sell_price ?? $orderpro->rel_to_attribute->price); ?>Tk</td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tm_invoice_footer tm_border_top tm_mb15 tm_m0_md">
                            <div class="tm_left_footer">
                                <?php $__currentLoopData = $orderproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderpro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($orderpro->rel_to_attribute->image): ?>
                                        <img width="150px" src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($orderpro->rel_to_attribute->image); ?>" alt="">
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            <div class="tm_right_footer">
                                <table class="tm_mb15">
                                    <tbody>
                                        <tr class="tm_gray_bg ">
                                            <td class="tm_width_3 tm_primary_color tm_bold">Subtotal</td>
                                            <td class="tm_width_3 tm_primary_color tm_bold tm_text_right"><?php echo e($order->sub_total); ?>Tk</td>
                                        </tr>
                                        <tr class="tm_gray_bg">
                                            <td class="tm_width_3 tm_primary_color">Delivery Charge </td>
                                            <td class="tm_width_3 tm_primary_color tm_text_right"><?php echo e($order->delivery_charge); ?>Tk</td>
                                        </tr>
                                        <tr class="tm_accent_bg">
                                            <td class="tm_width_3 tm_border_top_0 tm_bold tm_f16 tm_white_color">Grand Total </td>
                                            <td class="tm_width_3 tm_border_top_0 tm_bold tm_f16 tm_white_color tm_text_right"><?php echo e($order->total); ?>Tk</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="tm_invoice_btns tm_hide_print">
            <a href="javascript:window.print()" class="tm_invoice_btn tm_color1">
                <span class="tm_btn_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                        <path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                        <rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                        <path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                        <circle cx="392" cy="184" r="24" fill='currentColor' />
                    </svg>
                </span>
                <span class="tm_btn_text">Print</span>
            </a>
            
        </div>
    </div>
    <script src="<?php echo e(asset('invoice_assets')); ?>/js/jquery.min.js"></script>
    <script src="<?php echo e(asset('invoice_assets')); ?>/js/jspdf.min.js"></script>
    <script src="<?php echo e(asset('invoice_assets')); ?>/js/html2canvas.min.js"></script>
    <script src="<?php echo e(asset('invoice_assets')); ?>/js/main.js"></script>
</body>

</html>
<?php /**PATH F:\all project\cottonbd\resources\views/backend/order/multi_view_invoice_print.blade.php ENDPATH**/ ?>