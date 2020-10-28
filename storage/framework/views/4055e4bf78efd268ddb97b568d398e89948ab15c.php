 
 <?php $__env->startSection('content'); ?>


 <div class="content content-boxed">
     <div class="row row-deck py-4">
         <?php $__currentLoopData = $description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $des): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <!-- Course -->
         <div class="col-md-12">
            
                 <h4 class="mb-9"><?php echo e($des->description); ?></h4>
             </div>
     <a href="/programme.programmeProf" class="btn btn-secondary mb-4">Retour</a>
         
         <!-- END Course -->
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
 </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme\resources\views/programme/description.blade.php ENDPATH**/ ?>