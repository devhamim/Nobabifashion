
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Ekka - Admin Dashboard HTML Template.">

		<?php if($setting->first()->title != null): ?>
            <title><?php echo e($setting->first()->title); ?></title>
        <?php endif; ?>

		<!-- GOOGLE FONTS -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

		

		<!-- Ekka CSS -->
		<link id="ekka-css" rel="stylesheet" href="<?php echo e(asset('backend')); ?>/css/ekka.css" />

		<!-- FAVICON -->
		<?php if($setting->first()->favicon != null): ?>
            <link rel="shortcut icon" href="<?php echo e(asset('uploads/setting')); ?>/<?php echo e($setting->first()->favicon); ?>">
        <?php endif; ?>
	</head>

	<body class="sign-inup" id="body">
		<div class="container d-flex align-items-center justify-content-center form-height-login pt-24px pb-24px">
			<?php echo $__env->yieldContent('login_content'); ?>
		</div>

		<!-- Javascript -->
		<script src="<?php echo e(asset('backend')); ?>/plugins/jquery/jquery-3.5.1.min.js"></script>
		<script src="<?php echo e(asset('backend')); ?>/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo e(asset('backend')); ?>/plugins/jquery-zoom/jquery.zoom.min.js"></script>
		<script src="<?php echo e(asset('backend')); ?>/plugins/slick/slick.min.js"></script>

		<!-- Ekka Custom -->
		<script src="<?php echo e(asset('backend')); ?>/js/ekka.js"></script>
	</body>
</html>
<?php /**PATH F:\all project\nobabi_fashion\resources\views/auth/app.blade.php ENDPATH**/ ?>