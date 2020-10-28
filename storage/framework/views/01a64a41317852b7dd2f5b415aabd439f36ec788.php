 
 <?php $__env->startSection('content'); ?>

 <?php $__currentLoopData = $fil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fils): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <h3 class="text-center pt-4" style="color:#F37335">Filiére <?php echo e($fils->NOM); ?></h3>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 <div class="row mb-2 mt-5 card-group">
   <?php $__currentLoopData = $fil_prog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $progs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

   <div class="col-md-4 col-lg-3 mb-3 card-group">
     <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative card-group">
       <div class="col p-4 d-flex flex-column position-static">
         <strong class="d-inline-block mb-2 text-success"></strong>
         <h5 class="mb-0" style="color:rgb(246, 120, 58);"><?php echo e($progs->NOM); ?></h5>
         <hr style="background-color: #020031;">
         <div class="mb-auto">
           <h5>
             Niveau: <?php $__currentLoopData = $progs->programm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <?php echo e($p->niveau->TYPE); ?>,
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <br><br>
             Validation:<?php echo e($progs->validation->NOM); ?>

             <br><br>
             Status:<?php echo e($progs->statu->TYPE); ?>

             <br><br>
             Partenaire:<?php echo e($progs->partenaire->NOM); ?>

           </h5>
         </div>

         <a href="<?php echo e(route('show.description',$progs->description)); ?>" class="btn mt-2" style="background-color:rgb(246, 120, 58);"><span style="color:  #020031;">Voir description</span></a>
         <a href="<?php echo e(route('getidProgramme',$progs->id)); ?>" class=" btn mt-2"><span style="color:rgb(246, 120, 58);"> Demander le programme</span></a>
       </div>
     </div>
   </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </div>
 <?php echo e($fil_prog->links()); ?>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme (8)\GestionProgramme\resources\views/programme/show.blade.php ENDPATH**/ ?>