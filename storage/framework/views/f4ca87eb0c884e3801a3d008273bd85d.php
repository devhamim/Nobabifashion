<?php $__env->startSection('content'); ?>
<div class="page-content mt-3">
        <div class="col-lg-6 m-auto mt-5">
            <div class="summary summary-cart text-center">
                <img style="display: inline-block" src="<?php echo e(asset('frontend/assets/check_mark.png')); ?>" alt="">
                <h3 class="pt-2">প্রিয় গ্রাহক অর্ডার কররা জন্য ধন্যবাদ </h3>
                <p>আপনার অর্ডার নম্বর #<span class="text-dark"><?php echo e(session('order_id')); ?></span> কিছুক্ষণের মধেই আমাদের একজন প্রতিনিধি ফোন করে আপনার অর্ডার টি কনফার্ম করবেন </p>
                <h5 class="">প্রয়োজনে ফোন করুন 01890309403</h5>
                <a class="btn btn-success mt-2 border-0" href="<?php echo e(url('/')); ?>">প্রোডাক্ট বাছাই করুন</a>
            </div><!-- End .summary -->
        </div>
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\all project\cottonbd\resources\views/frontend/order_success.blade.php ENDPATH**/ ?>