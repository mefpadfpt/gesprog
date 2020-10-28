 
 <?php $__env->startSection('content'); ?>

 <?php if(session('success')): ?>
 <div class="alert alert-success"><?php echo e(session('success')); ?></div>
 <?php endif; ?>

 <!-- Button trigger modal -->
 <button type="button" class="btn mt-7 col-sm-12" data-toggle="modal" style="background-color:rgb(246, 120, 58);" data-target="#exampleModal">
   <span style="color:  #020031;">Rechercher</span>
 </button>

 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <?php $__currentLoopData = $fil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fils): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="modal-body h-20">
         <a href="<?php echo e(route('show.programme',$fils->id)); ?>"><?php echo e($fils->NOM); ?></a>
       </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
       </div>
     </div>
   </div>
 </div>


 <div class="row mb-2 mt-5">
   <?php $__currentLoopData = $prog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $progs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

   <div class="col-md-4 col-lg-3 mb-3 ">
     <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
       <div class="col p-4 d-flex flex-column position-static">
         <strong class="d-inline-block mb-2 text-success"></strong>
         <h5 class="mb-0" style="color:rgb(246, 120, 58);"><?php echo e($progs->NOM); ?></h5>
         <hr style="background-color:green;">
         <div class="mb-auto">
           Niveau: <?php $__currentLoopData = $progs->programm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <?php echo e($p->niveau->TYPE); ?>

           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           <hr style="background-color:green;">
           Validation:<?php echo e($progs->validation->NOM); ?>

           <hr style="background-color:green;">
           Status:<?php echo e($progs->statu->TYPE); ?>

           <hr style="background-color:green;">
           Partenaire:<?php echo e($progs->partenaire->NOM); ?>

         </div>
         <a href="<?php echo e(route('show.description',$progs->description)); ?>" class="btn mt-2" style="background-color:rgb(246, 120, 58);"><span style="color:  #020031;">Voir description</span></a>
         <a href="<?php echo e(route('getidProgramme',$progs->id)); ?>" class=" btn mt-2"><span style="color:rgb(246, 120, 58);"> Demander le programme</span></a>
       </div>
     </div>
   </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </div>
 <?php echo e($prog->links()); ?>





 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme\resources\views//programme/programmeProf.blade.php ENDPATH**/ ?>