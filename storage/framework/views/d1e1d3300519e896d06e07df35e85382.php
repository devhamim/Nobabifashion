
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Admin Dashboard">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<?php if($setting->first()->title != null): ?>
        <title><?php echo e($setting->first()->title); ?></title>
    <?php endif; ?>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

	<link href="<?php echo e(asset('backend')); ?>/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="<?php echo e(asset('backend')); ?>/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">
	<link href="<?php echo e(asset('backend')); ?>/plugins/simplebar/simplebar.css" rel="stylesheet" />

    <!-- Bootstrap -->
	<link id="ekka-css" href="<?php echo e(asset('backend/css/bootstrap.min.css')); ?>" rel="stylesheet" />
    

    
	
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- Data Tables -->
	<link href='<?php echo e(asset('backend')); ?>/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='<?php echo e(asset('backend')); ?>/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

	<!-- Ekka CSS -->
	<link id="ekka-css" href="<?php echo e(asset('backend')); ?>/css/ekka.css" rel="stylesheet" />

	<!-- FAVICON -->
    <?php if($setting->first()->favicon != null): ?>
        <link rel="shortcut icon" href="<?php echo e(asset('uploads/setting')); ?>/<?php echo e($setting->first()->favicon); ?>">
    <?php endif; ?>

    <style>
        .multiprint tr td{
    font-size: 12px !important;
    padding: 0 !important;
    margin: 0;
}

.cursor-pointer{
  cursor: pointer;
}
    </style>
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

	<!--  WRAPPER  -->
	<div class="wrapper">
        <?php if(session('success')): ?>
        <script>
            Swal.fire({
                icon: "success",
                title: "Successfully",
                text: "<?php echo e(session('success')); ?>",
            });
        </script>
    <?php endif; ?>
    <?php if(session('warning')): ?>
        <script>
            Swal.fire({
                icon: "warning",
                title: "warning",
                text: "<?php echo e(session('warning')); ?>",
            });
        </script>
    <?php endif; ?>
    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Opps..",
                    text: "<?php echo e($error); ?>",
                });
            </script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

		<!-- LEFT MAIN SIDEBAR -->
		<?php echo $__env->make('backend.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<!--  PAGE WRAPPER -->
		<div class="ec-page-wrapper">

			<!-- Header -->
			<?php echo $__env->make('backend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<?php echo $__env->yieldContent('content'); ?>
			</div> <!-- End Content Wrapper -->

			<!-- Footer -->
			<?php echo $__env->make('backend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script src="<?php echo e(asset('backend')); ?>/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo e(asset('backend')); ?>/plugins/simplebar/simplebar.min.js"></script>
	<script src="<?php echo e(asset('backend')); ?>/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    
	<script src="<?php echo e(asset('backend')); ?>/plugins/slick/slick.min.js"></script>

    
	
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

	<!-- Chart -->
	<script src="<?php echo e(asset('backend')); ?>/plugins/charts/Chart.min.js"></script>
	<script src="<?php echo e(asset('backend')); ?>/js/chart.js"></script>

	<!-- Google map chart -->
	
	

    <!-- Data Tables -->
	<script src='<?php echo e(asset('backend')); ?>/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='<?php echo e(asset('backend')); ?>/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='<?php echo e(asset('backend')); ?>/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Date Range Picker -->
	<script src="<?php echo e(asset('backend')); ?>/plugins/daterangepicker/moment.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo e(asset('backend')); ?>/js/date-range.js"></script>

	<!-- Option Switcher -->
	<script src="<?php echo e(asset('backend')); ?>/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="<?php echo e(asset('backend')); ?>/js/ekka.js"></script>

    <script>
        function previewImage(event) {
            var input = event.target;
            var preview = document.getElementById('preview');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 400
            });

        });
    </script>

<?php echo $__env->yieldContent('footer_scripts'); ?>

</body>
</html>
<?php /**PATH F:\all project\cottonbd\resources\views/backend/layouts/app.blade.php ENDPATH**/ ?>