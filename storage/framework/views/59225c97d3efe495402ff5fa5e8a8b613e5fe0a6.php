<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>OneUI - Bootstrap 4 Admin Template &amp; UI Framework</title>

        <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <!-- Icons -->
        <link rel="shortcut icon" href="<?php echo e(asset('media/favicons/favicon.png')); ?>">
        <link rel="icon" sizes="192x192" type="image/png" href="<?php echo e(asset('media/favicons/favicon-192x192.png')); ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('media/favicons/apple-touch-icon-180x180.png')); ?>">

        <!-- Fonts and Styles -->
        <?php echo $__env->yieldContent('css_before'); ?>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="<?php echo e(asset('/css/oneui.css')); ?>">

       
        <?php echo $__env->yieldContent('css_after'); ?>

        <!-- Scripts -->
        <script>window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>;</script>
    </head>
    <body>
        
        <div id="page-container">
            <!-- Main Container -->
            <main id="main-container">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- OneUI Core JS -->
        <script src="<?php echo e(asset('js/oneui.app.js')); ?>"></script>

        

        <?php echo $__env->yieldContent('js_after'); ?>
    </body>
</html>
<?php /**PATH C:\wamp\www\Apps\resources\views/layouts/simple.blade.php ENDPATH**/ ?>