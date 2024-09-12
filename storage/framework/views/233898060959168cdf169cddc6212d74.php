<header class="ec-main-header" id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
        <!-- Sidebar toggle button -->
        <button id="sidebar-toggler" class="sidebar-toggle"></button>
        <!-- pos -->
        <div class="btn">
            <a href="<?php echo e(route('pos.index')); ?>" class="btn btn-success px-5">POS</a>
        </div>

        <!-- search form -->
        <div class="search-form d-lg-inline-block">

            <div id="search-results-container">
                <ul id="search-results"></ul>
            </div>
        </div>

        <!-- navbar right -->
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- User Account -->
                <li class="dropdown user-menu">
                    <button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <?php if(Auth::user()->image != null): ?>
                            <img src="<?php echo e(asset('uploads/user')); ?>/<?php echo e(Auth::user()->image); ?>" class="user-image" alt="User Image" />
                        <?php else: ?>
                            <img src="<?php echo e(Avatar::create(Auth::user()->name)->toBase64()); ?>" class="user-image" alt="User Image" />
                        <?php endif; ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
                        <!-- User image -->
                        <li class="dropdown-header">
                            <?php if(Auth::user()->image != null): ?>
                                <img src="<?php echo e(asset('uploads/user')); ?>/<?php echo e(Auth::user()->image); ?>" class="img-circle" alt="User Image" />
                            <?php else: ?>
                                <img src="<?php echo e(Avatar::create(Auth::user()->name)->toBase64()); ?>" class="img-circle" alt="User Image" />
                            <?php endif; ?>
                            <div class="d-inline-block">
                                <?php echo e(Auth::user()->name); ?> <small class="pt-1"><?php echo e(Auth::user()->email); ?></small>
                            </div>
                        </li>
                        <li>
                            <a href="<?php echo e(route('profile.index')); ?>">
                                <i class="mdi mdi-account"></i> My Profile
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('setting.index')); ?>"> <i class="mdi mdi-settings-outline"></i> Setting </a>
                        </li>
                        <li class="dropdown-footer">
                            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="mdi mdi-logout"></i> Log Out </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="right-sidebar-in right-sidebar-2-menu">
                    <i class="mdi mdi-settings-outline mdi-spin"></i>
                </li>
            </ul>
        </div>
    </nav>
</header>
<?php /**PATH F:\all project\cottonbd\resources\views/backend/layouts/header.blade.php ENDPATH**/ ?>