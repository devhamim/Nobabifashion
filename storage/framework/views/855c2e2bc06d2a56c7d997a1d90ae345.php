<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div>
            <h1>Setting</h1>
            <p class="breadcrumbs"><span><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Setting
            </p>
        </div>
    </div>
    <div class="card bg-white profile-content">
        <div class="row">
            <div class="col-lg-4 col-xl-3">
                <div class="profile-content-left profile-left-spacing">
                    <hr class="w-100">

                    <div class="contact-info pt-4">
                        <h5 class="text-dark">Contact Information</h5>
                        <p class="text-dark font-weight-medium pt-24px mb-2">Meta Title</p>
                        <p>
                            <?php if($setting->meta_title != null): ?>
                                <?php echo e($setting->meta_title); ?>

                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </p>
                        <p class="text-dark font-weight-medium pt-24px mb-2">Meta Tag</p>
                        <p>
                            <?php if($setting->meta_tag != null): ?>
                                <?php echo e($setting->meta_tag); ?>

                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </p>
                        <p class="text-dark font-weight-medium pt-24px mb-2">Meta Description</p>
                        <p>
                            <?php if($setting->meta_description != null): ?>
                                <?php echo e($setting->meta_description); ?>

                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-xl-9">
                <div class="profile-content-right profile-right-spacing py-5">
                    <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myProfileTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="settings-tab" data-bs-toggle="tab"
                                data-bs-target="#settings" type="button" role="tab"
                                aria-controls="settings" aria-selected="false">Setting</button>
                        </li>
                    </ul>
                    <div class="tab-content px-3 px-xl-5" id="myTabContent">
                        <div class="tab-pane fade show active" id="settings" role="tabpanel"
                            aria-labelledby="settings-tab">
                            <div class="tab-pane-content mt-5">
                                <form action="<?php echo e(route('markatingSetting.update', $setting->id)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <input type="hidden" name="id" value="<?php echo e($setting->id); ?>">
                                    <div class="form-group mb-4">
                                        <label for="meta_title">Meta Title <span class="text-secondary">(Optional)</span></label>
                                        <input type="text" class="form-control" id="meta_title" name="meta_title" value="<?php echo e($setting->meta_title); ?>">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="meta_tag">Meta Tag <span class="text-secondary">(Optional)</span></label>
                                        <input type="text" class="form-control" id="meta_tag" name="meta_tag" value="<?php echo e($setting->meta_tag); ?>">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="meta_description">Meta Description <span class="text-secondary">(Optional)</span></label>
                                        <textarea name="meta_description" class="form-control" id="meta_description" cols="30" rows="10"><?php echo e($setting->meta_description); ?></textarea>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="fb_pixel">Facebook Pixel <span class="text-secondary">(Optional)</span></label>
                                        <textarea name="fb_pixel" class="form-control" id="fb_pixel" cols="30" rows="10"><?php echo e($setting->fb_pixel); ?></textarea>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="google_tag">Google Tag <span class="text-secondary">(Optional)</span></label>
                                        <textarea name="google_tag" class="form-control" id="google_tag" cols="30" rows="10"><?php echo e($setting->google_tag); ?></textarea>
                                    </div>
                                    <div class="d-flex justify-content-end mt-5">
                                        <button type="submit" class="btn btn-primary mb-2 btn-pill">
                                            Update Setting
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\all project\cottonbd\resources\views/backend/markatingsetting.blade.php ENDPATH**/ ?>