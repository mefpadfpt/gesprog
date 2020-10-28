
<?php $__env->startSection('content'); ?>


<h1 class="text-center" style="color:rgb(246, 120, 58);">Détails de la Demande </h1>
<?php $__currentLoopData = $utilisateur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $progra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



<div class="text-center">

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
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme\resources\views/admin/voirplus.blade.php ENDPATH**/ ?>