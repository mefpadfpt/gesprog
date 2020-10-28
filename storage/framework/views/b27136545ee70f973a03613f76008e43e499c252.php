

<?php $__env->startSection('content'); ?>
    <!-- Hero -->
    <div class="bg-image">
        <div class="hero bg-white overflow-hidden">
            <div class="hero-inner">
                <div class="content content-full text-center">
                    <h1 class="display-4 font-w600 mb-3 invisible" data-toggle="appear" data-class="animated fadeInDown">
                        GESTION <span class="font-w300">PROG</span>
                    </h1>
                    <h2 class="h3 font-w400 text-muted mb-5 invisible" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
                        WELCOME 
                    </h2>
                    <span class="m-2 d-inline-block invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="600">
                        <a class="btn btn-alt-success px-4 py-2" href="/dashboard">
                            <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Enter Dashboard
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\Apps\resources\views/landing.blade.php ENDPATH**/ ?>