
  
  <?php $__env->startSection('content'); ?>
    
   
      <div class="content content-boxed">
      <a href="/programme.programmeProf" class="btn btn-secondary" >Retour</a>
                    <div class="row row-deck py-4">
                   <?php $__currentLoopData = $description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $des): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Course -->
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="block block-rounded block-link-pop">
                                <div class="block-content block-content-full text-center bg-amethyst">
                                    <div class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                                        <i class="si si-vector fa-2x text-white-75"></i>
                                    </div>
                                </div>
                             <p><?php echo e($des->description); ?></p>
                        </div>
                        </div>
                       
                        <!-- END Course -->
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>         
                    </div>
                </div>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.file', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\GestionProgramme\resources\views/programme/description.blade.php ENDPATH**/ ?>