
<header class="header header-10 header-intro-clearance" >

    <div class="header-middle">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="<?php echo e(url('/')); ?>" class="mb-1">
                    <?php if($setting->first()->white_logo != null): ?>
                        <img src="<?php echo e(asset('uploads/setting')); ?>/<?php echo e($setting->first()->white_logo); ?>" height="43px" width="200px" alt="Logo">
                    <?php else: ?>
                        <img src="<?php echo e(asset('uploads/setting')); ?>/<?php echo e($setting->first()->black_logo); ?>" height="43px" width="200px" alt="Logo">
                    <?php endif; ?>
                </a>
            </div>

            <div class="header-center">
                <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form id="search_form" action="<?php echo e(route('shop')); ?>" method="GET" class="header-search-wrapper search-wrapper-wide d-flex">
                        <label for="search_input" class="sr-only">সার্চ করুন</label>
                        <input type="search" class="form-control" name="q"  id="search_input" placeholder="সার্চ করুন ..." required value="<?php echo e(@$_GET['q']); ?>">
                        <button id="search_btn" class="btn btn-primary" style="background: #000" type="button"><i class="icon-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="header-right">
                
            </div>
        </div>
    </div>


    <div class="header-bottom sticky-header">
        <div class="container">
            <div class="header-center nav-border">
                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="<?php echo e(Request::is('/') ? 'active' : ''); ?>">
                            <a class="px-4 py-2" href="<?php echo e(url('/')); ?>"><i class="icon-home" style="font-size: 24px"></i></a>
                        </li>
                        <?php $__currentLoopData = $categorys->take(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="">
                                <a class="px-4 py-2" href="<?php echo e(route('category.show', $category->id)); ?>"><?php echo e($category->name); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<?php /**PATH F:\all project\nobabi_fashion\resources\views/frontend/layouts/header.blade.php ENDPATH**/ ?>