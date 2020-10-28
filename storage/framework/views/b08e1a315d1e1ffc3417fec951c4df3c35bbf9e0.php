 
 <?php $__env->startSection('content'); ?>

 <?php if(session('success')): ?>
 <div class="alert alert-success"><?php echo e(session('success')); ?></div>
 <?php endif; ?>

 <?php if(!Auth::guard('utilisateur')->user()): ?>
 <a href="/utilisateur/login" class="pt-2" style="color:#F37335">
   <span><i class="fa fa-shopping-basket"></i></span>Mon espace
 </a>
 <?php endif; ?>

 <!-- Button trigger modal -->
 <button type="button" class="btn mt-7 col-sm-12" data-toggle="modal" style="background-color:#F37335" data-target="#exampleModal">
   <span style="color:  #FFFF;">filtrer par filière</span>
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
 




 <div class="row mb-2 mt-5 card-group">
   <?php $__currentLoopData = $prog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $progs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

   <div class="col-md-4 col-lg-3 mb-3 card-group">
     <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative card-group">
       <div class="col p-4 d-flex flex-column position-static">
         <strong class="d-inline-block mb-2 text-success"></strong>
         <h5 class="mb-0" style="color:rgb(246, 120, 58);"><?php echo e($progs->NOM); ?></h5>
         <hr style="background-color: #020031;">
         <div class="mb-auto">
           <h5>
             Niveau: <?php $__currentLoopData = $progs->niveau; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <?php echo e($p->TYPE); ?> 
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <br><br>
             Modalité: <?php echo e($progs->modalite->TYPE); ?>

             <br><br>
             Validation: <?php echo e($progs->validation->NOM); ?>

             <br><br>
             Statut: <?php echo e($progs->statu->TYPE); ?>

             <br><br>
             Partenaire: <?php echo e($progs->partenaire->NOM); ?>

           </h5>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme (8)\GestionProgramme\resources\views/programme/programmeProf.blade.php ENDPATH**/ ?>