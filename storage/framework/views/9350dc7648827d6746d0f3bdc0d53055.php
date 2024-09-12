<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
            "nav": false,
            "responsive": {
                "992": {
                    "nav": true
                }
            }
        }'>
        <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e($banner->banner_link); ?>" target="_blank">
        <div class="intro-slide home_banner" style="background-image: url(<?php echo e(asset('uploads/banner')); ?>/<?php echo e($banner->image); ?>);">
                <div class="container intro-content">

                </div>
            </div>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <span class="slider-loader"></span>
</div>
<!-- End .intro-slider-container -->
<section class="mobile_search">
    <div class="container">
        <div class="row">
            <div class="col-12 m-auto">
                <div class="text-center">
                    <div class="header-search-extended header-search-no-radius" style="max-width: 100%; margin-bottom: 0">
                        <form id="search_form" action="<?php echo e(route('shop')); ?>" method="GET" class="header-search-wrapper search-wrapper-wide d-flex">
                            <label for="search_input" class="sr-only">সার্চ করুন</label>
                            <input type="search" class="form-control" style="border-radius: 8px 0 0 8px; margin-bottom: 0" name="q" id="search_input" placeholder="সার্চ করুন ..." required value="<?php echo e(@$_GET['q']); ?>">
                            <button id="search_btn" class="btn btn-primary" style="min-width: 0; border-radius: 0 8px 8px 0" type="submit"><i class="icon-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="reivew mt-3">
    <div class="container electronics">
        <div class="container electronics">
            <div class="heading heading-flex heading-border " style="display: block; text-align: center; padding: 10px 0">
                <div class="heading-left">
                    <h2 class="title">Customer Review</h2>
                </div>
        </div>
        <div class="tab-content tab-content-carousel">
                <div class="tab-pane p-0 fade show active" id="elec-new-tab" role="tabpanel" aria-labelledby="elec-new-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                        data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "margin": 15,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1280": {
                                    "items":4,
                                    "nav": true
                                }
                            }
                        }'>
                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product cartpage home_review">
                            <figure class="product-media">
                                <img src="<?php echo e(asset('uploads/review')); ?>/<?php echo e($review->image); ?>" alt="Product image" class="product-image">

                                <div class="product-action-vertical">
                                    <p style="background-image: url( '<?php echo e(asset('frontend/assets/images/discount.png')); ?>' )"></p>
                                </div>
                            </figure>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
        </div><!-- End .tab-content -->
    </div>
</section>

<?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $categoryproduct = $products->where('category_id', $category->id);
    ?>
    <?php if($categoryproduct->isNotEmpty()): ?>
            <div class="container electronics">
                <div class="heading heading-flex heading-border ">
                    <div class="heading-left">
                        <h2 class="title"><?php echo e($category->name); ?></h2>
                    </div>
                <div class="heading-right px-2">
                        <a href="<?php echo e(route('category.show', $category->id)); ?>" class="see_more"><h3 class="me-1">See More</h3></a>
                </div>
            </div>

            <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="elec-new-tab" role="tabpanel" aria-labelledby="elec-new-link">
                        <div class="row" >
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($product->category_id == $category->id): ?>
                                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                                        <div class="product cartpage home_product_shadwo" style="border-radius: 10px;">
                                            <figure class="product-media">
                                                
                                                <a href="<?php echo e(route('product.details', $product->slug)); ?>">
                                                    <?php if($product->inventorie_id != null): ?>
                                                        <?php if($product->rel_to_inventorie): ?>
                                                            <?php
                                                                $inventorie = $product->rel_to_inventorie
                                                            ?>
                                                            <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <img src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($attribute->image); ?>" alt="Product image" class="product-image">
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <img src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($product->image); ?>" alt="Product image" class="product-image">
                                                    <?php endif; ?>
                                                </a>
                                                <div class="product-action-vertical">
                                                    <p style="background-image: url( '<?php echo e(asset('frontend/assets/images/discount.png')); ?>' )"></p>
                                                </div>
                                            </figure>

                                            <div class="product-body">
                                                <h3 class="product-title pb-1"><a href="<?php echo e(route('product.details', $product->slug)); ?>"><?php echo e(Str::limit($product->name, '15', '')); ?></a></h3>
                                                <?php if($product->inventorie_id != null): ?>
                                                    <?php if($product->rel_to_inventorie): ?>
                                                        <?php
                                                            $inventorie = $product->rel_to_inventorie
                                                        ?>
                                                        <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($attribute->sell_price != null): ?>
                                                                <span class="new-price">Tk <?php echo e($attribute->sell_price); ?></span>
                                                                <del style="color: #cccccc">Tk <?php echo e($attribute->price); ?></del>
                                                            <?php else: ?>
                                                                <span class="product-price">Tk <?php echo e($attribute->price); ?></span>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <?php if($product->sell_price != null): ?>
                                                        <span class="new-price">Tk <?php echo e($product->sell_price); ?></span>
                                                        <del style="color: #cccccc">Tk <?php echo e($product->price); ?></del>
                                                    <?php else: ?>
                                                        <span class="product-price">Tk <?php echo e($product->price); ?></span>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="text-center">
                                                <form action="#" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <a href="<?php echo e(route('product.details', $product->slug)); ?>" class="btn-product btn-cart btn-buy mr-5 w-100" name="btn" value="2"><span>Order Now</span></a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <div class="load-more-container text-center">
                    
                </div>
            </div><!-- End .tab-content -->

        </div>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\all project\nobabi_fashion\resources\views/frontend/index.blade.php ENDPATH**/ ?>