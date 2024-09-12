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
                    <div class="text-center widget-profile px-0 border-0">
                        <div class="card-img mx-auto rounded-circle">
                            <?php if($setting->white_logo != null || $setting->black_logo != null): ?>
                                <?php if($setting->black_logo != null): ?>
                                    <img src="<?php echo e(asset('uploads/setting')); ?>/<?php echo e($setting->black_logo); ?>" alt="user image">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('uploads/setting')); ?>/<?php echo e($setting->white_logo); ?>" alt="user image">
                                <?php endif; ?>
                            <?php else: ?>
                                <img src="<?php echo e(Avatar::create($setting->name)->toBase64()); ?>" alt="user image">
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <h4 class="py-2 text-dark"><?php echo e($setting->name); ?></h4>
                            <p><?php echo e($setting->email); ?></p>
                        </div>
                    </div>

                    <hr class="w-100">

                    <div class="contact-info pt-4">
                        <h5 class="text-dark">Contact Information</h5>
                        <p class="text-dark font-weight-medium pt-24px mb-2">About</p>
                        <p><?php echo e($setting->about); ?></p>
                        <p class="text-dark font-weight-medium pt-24px mb-2">Email address</p>
                        <p><?php echo e($setting->email); ?></p>
                        <p class="text-dark font-weight-medium pt-24px mb-2">Address</p>
                        <p>
                            <?php if($setting->address != null): ?>
                                <?php echo e($setting->address); ?>

                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </p>
                        <p class="text-dark font-weight-medium pt-24px mb-2">Phone Number (One)</p>
                        <p>
                            <?php if($setting->number_one != null): ?>
                                <?php echo e($setting->number_one); ?>

                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </p>
                        <p class="text-dark font-weight-medium pt-24px mb-2">Phone Number (Two)</p>
                        <p>
                            <?php if($setting->number_two != null): ?>
                                <?php echo e($setting->number_two); ?>

                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </p>

                        <p class="text-dark font-weight-medium pt-24px mb-2">Title</p>
                        <p>
                            <?php if($setting->title != null): ?>
                                <?php echo e($setting->title); ?>

                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </p>
                        <p class="text-dark font-weight-medium pt-24px mb-2">Footer</p>
                        <p>
                            <?php if($setting->footer != null): ?>
                                <?php echo e($setting->footer); ?>

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
                                <form action="<?php echo e(route('setting.update', $setting->id)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <input type="hidden" name="id" value="<?php echo e($setting->id); ?>">
                                    <div class="form-group row mb-6">
                                        <label for="coverImage"
                                            class="col-sm-4 col-lg-2 col-form-label">White Logo <p style="font-size: 13px" class="text-danger">Size max 1MB *</p></label>
                                        <div class="col-sm-4 col-lg-6">
                                            <div class="custom-file mb-1">
                                                <input type="file" class="custom-file-input" name="white_logo" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                                <label class="custom-file-label" for="coverImage">Choose
                                                    file...</label>
                                                <div class="invalid-feedback">Example invalid custom
                                                    file feedback</div>
                                            </div>
                                            <?php $__errorArgs = ['white_logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-sm-4 col-lg-4" >
                                            <img width="100" src="<?php echo e(asset('uploads/setting')); ?>/<?php echo e($setting->white_logo); ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-6">
                                        <label for="coverImage"
                                            class="col-sm-4 col-lg-2 col-form-label">Black Logo <p style="font-size: 13px" class="text-danger">Size max 1MB *</p></label>
                                        <div class="col-sm-4 col-lg-6">
                                            <div class="custom-file mb-1">
                                                <input type="file" class="custom-file-input" name="black_logo" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                                <label class="custom-file-label" for="coverImage">Choose
                                                    file...</label>
                                                <div class="invalid-feedback">Example invalid custom
                                                    file feedback</div>
                                            </div>
                                            <?php $__errorArgs = ['black_logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-sm-4 col-lg-4" >
                                            <img width="100" src="<?php echo e(asset('uploads/setting')); ?>/<?php echo e($setting->black_logo); ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-6">
                                        <label for="coverImage"
                                            class="col-sm-4 col-lg-2 col-form-label">Faveicon <p style="font-size: 13px" class="text-danger">Size max 1MB *</p></label>
                                        <div class="col-sm-4 col-lg-6">
                                            <div class="custom-file mb-1">
                                                <input type="file" class="custom-file-input" name="favicon" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                                <label class="custom-file-label" for="coverImage">Choose
                                                    file...</label>
                                                <div class="invalid-feedback">Example invalid custom
                                                    file feedback</div>
                                            </div>
                                            <?php $__errorArgs = ['favicon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-sm-4 col-lg-4">
                                            <img width="100"  src="<?php echo e(asset('uploads/setting')); ?>/<?php echo e($setting->favicon); ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-6 m-auto">
                                        <div class="col-sm-8 col-lg-8 m-auto" class="text-center" style="height: 100px">
                                            <img width="100" id="blah" src="" alt="">
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="name">Name <span class="text-danger">*</span></label>
                                        <input ttype="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" name="name" required value="<?php echo e($setting->name); ?>">
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="email">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" name="email" required value="<?php echo e($setting->email); ?>">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="address">Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="address" required name="address" value="<?php echo e($setting->address); ?>">
                                        <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="number_one">Phone One <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control <?php $__errorArgs = ['number_one'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="number_one" required name="number_one" value="<?php echo e($setting->number_one); ?>">
                                        <?php $__errorArgs = ['number_one'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="number_two">Phone Two <span class="text-secondary">(Optional)</span></label>
                                        <input type="number" class="form-control" id="number_two" name="number_two" value="<?php echo e($setting->number_two); ?>">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="title">Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required id="title" name="title" value="<?php echo e($setting->title); ?>">
                                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="footer">Footer <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control <?php $__errorArgs = ['footer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required id="footer" name="footer" value="<?php echo e($setting->footer); ?>">
                                        <?php $__errorArgs = ['footer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="about">About <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control <?php $__errorArgs = ['about'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required id="about" name="about" value="<?php echo e($setting->about); ?>">
                                        <?php $__errorArgs = ['about'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <label for="google_map">Google Map <span class="text-secondary">(Optional)</span></label>
                                        <input type="text" class="form-control" id="google_map" name="google_map" value="<?php echo e($setting->google_map); ?>">
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


<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\all project\nobabi_fashion\resources\views/backend/setting.blade.php ENDPATH**/ ?>