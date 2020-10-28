
<?php $__env->startSection('content'); ?>



<div class="bs-example">
 <table class="table table-striped table-light table-bordered">
  <thead>
   <tr>

   </tr>
  </thead>
  <tbody>
   <tr>

   </tr>

  </tbody>
 </table>
</div>

<!-- Page Content -->
<div class="content">
 <!-- Full Table -->
 <div class="block">
  <?php if(session('success')): ?>
  <div class="alert alert-success">
   <?php echo e(session('success')); ?>

  </div>
  <?php endif; ?>
  <h1 class="text-center" style="color:rgb(246, 120, 58);">Les programmes et projets intervenants directement au niveau du MFPAA</h1>

  <div>
   <form action="<?php echo e(route('projets.rechercher')); ?>" class="d-flex mb-2 mr-3">
    <div class="from-group mb-0 mr-1">
     <input type="search" class="form-control" id="recherche" placeholder="rechercher...." name="recherche">
    </div>
    <button href="" type="submit" class="btn" style="background-color:rgb(246, 120, 58);"><i class="fa fa-search text-white"></i></button>
   </form>
  </div>
  <a href="<?php echo e(route('projets.list')); ?>" class="btn btn-success mb-2">Voir Tout</a>

  <?php if($projet->count() == 0): ?> <div class="alert alert-warning pb-5 text-center text-danger">
   <h1> 404 Aucun résultat pour cette recherche</h1>
  </div>
  <?php else: ?>
  <div class="block-content">
   <div class="table-responsive">
    <table class="table table-bordered table-striped table-vcenter">
     <thead style="color:rgb(246, 120, 58);">
      <tr>
       <th>Projet</th>
       <th>Périodes</th>
       <th colspan="2" class="bordered">Sources de financement
        <table class="table">
         <tr>
          <th style="color:rgb(246, 120, 58);">PTF</th>
          <th style="color:rgb(246, 120, 58);">ETAT</th>
         </tr>
        </table>
       </th>
       <th>Zones d'intervention</th>
       <th>Types d'intervention/Activités</th>
      </tr>
     </thead>
     <tbody>
      <tr>
       <!--td colspan="6">
        <h5 style="color:rgb(246, 120, 58);" class="text-center">Les programmes et projets intervenants directement au niveau du MFPAA</h5>
       </td-->
      </tr>
      <?php $__currentLoopData = $projet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projets): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
       <td><?php echo e($projets->NOMProjet); ?></td>
       <td><?php echo e($projets->PERIODE); ?></td>
       <td><?php echo e($projets->PFT); ?></td>
       <td><?php echo e($projets->ETAT); ?></td>
       <td>
        <?php echo e($projets->ZONES); ?>

       </td>
       <td>
        <?php echo e($projets->ACTIVITE); ?>

       </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </tbody>
    </table>
   </div>
   <?php endif; ?>
  </div>
 </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme (8)\GestionProgramme\resources\views/admin/rechercherProjet.blade.php ENDPATH**/ ?>