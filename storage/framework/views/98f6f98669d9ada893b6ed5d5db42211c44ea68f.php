

<?php $__env->startSection('content'); ?>



<div class="content mb-6">
<div class="block-content col-md-3 col-lg-9">
  <h1 class="text-center" style="color:rgb(246, 120, 58);">Détails de la Demande </h1>

      <div class="table-responsive">
         <table class="table table-bordered table-striped table-vcenter " style="margin-left: 100px;">

            <thead style="background-color:  #020031;">
               <th class="text-white">Demandeur</th>
               <th class="text-white">Etablissement</th>
               <th class="text-white">Partenaire</th>
               <th class="text-white">Niveau</th>
               <th class="text-white">Motivation</th>
            </thead>

            <tbody>
               <?php $__currentLoopData = $utilisateur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $progra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td class="text-center ">
                    <?php echo e($progra->utilisateur->type); ?>

                  </td>
                  <td class="text-center ">
                     <?php echo e($progra->etablissement->NOM_ETA ??''); ?>

                  </td>
                  <td class="text-center ">
                      <?php if( $progra->utilisateur->type == "partenaire"): ?>
                      <?php echo e($progra->partenaire->NOM); ?>

                       <?php endif; ?>
                  </td>
                 <td class="text-center">
               <?php $__currentLoopData = $progra->niveau; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $niv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p style="color:  #020031;"><?php echo e($niv->TYPE); ?></p>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </td>
               <td class="text-center">
              <?php echo e($progra->motivation); ?>

               </td>
                  
               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </tbody>

         </table>
      </div>
   </div>
 </div>

<!--div class="text-center">

 <h5>
  Demandeur : <?php echo e($progra->utilisateur->type); ?>

 </h5>
 <h5>
  <?php if( $progra->utilisateur->type == "chef Etablissement"): ?>
  Etablissement :

  <?php echo e($progra->etablissement->NOM_ETA); ?>

  <?php endif; ?>

 </h5>
 <h5>

  <?php if( $progra->utilisateur->type == "partenaire"): ?>
  Partenaire :
  <?php endif; ?>
  <?php if( $progra->utilisateur->type == "partenaire"): ?>
  <?php echo e($progra->partenaire->NOM); ?>

  <?php endif; ?>

 </h5>

 <h5>
  Niveau : <?php $__currentLoopData = $progra->niveau; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $niv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <p style="color:  #020031;"><?php echo e($niv->TYPE); ?></p>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </h5>

 <H5>
  Motivation :
  <p><?php echo e($progra->motivation); ?></p>
 </H5>
</div-->

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme (8)\GestionProgramme\resources\views/admin/voirplus.blade.php ENDPATH**/ ?>