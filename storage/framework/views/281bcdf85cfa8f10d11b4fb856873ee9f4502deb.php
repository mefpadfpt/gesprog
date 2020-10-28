 
 <?php $__env->startSection('content'); ?>

 <h2 class="text-center mt-5" style="color:rgb(246, 120, 58);">Programmes techniques classés par série</h2>

 <!-- Page Content -->
 <div class="content">
     <div class="row mb-6">
         <?php $__currentLoopData = $serie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $series): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="col-md-6 col-xl-3">
             <!-- Default Position Primary -->
             <div class="block">
                 <div class="block-content block-content-full ribbon ribbon-primary">
                     <div class="text-center text-white py-4" style="background-color:rgb(246, 120, 58);">
                         <div class="block-content  mt-1 p-2  dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <h4 class=" mb-0">Série<?php echo e($series->nomSerie); ?></h4>
                             <span class="mt-2">Voir Matiéres</span>
                         </div>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                             <?php $__currentLoopData = $series->matieres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <h4 class="dropdown-item" style="color:  #020031;"><?php echo e($mat->nomMatiere); ?></h4>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </div>
                     </div>
                 </div>
             </div>


             <!-- END Default Position Primary -->
         </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>

 </div>



 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme\resources\views/programme/Technique.blade.php ENDPATH**/ ?>