
<?php $__env->startSection('content'); ?>

<!-- Hero -->
<div class="bg-body-light">
 <div class="content content-full">
  <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
   <h1 class="flex-sm-fill h3 my-2 text-center" style="color:  #020031;">
    <?php $__currentLoopData = $dep_et; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    Liste des établissements dans le département de <?php echo e($dep->NOM_DEPT); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </h1>
  </div>
 </div>
</div>
<!-- END Hero -->


<!-- Page Content -->
<div class="content mb-10 mt-4">
 <!-- Full Table -->

 <div class="block-content">
  <div class="table-responsive">
   <table class="table table-bordered table-striped table-vcenter ">

    <thead class="" style="background-color:  #020031;">
     <th class="text-white ">Nom Etablissement</th>
     <th class="text-white">Adresse</th>
     <th class="text-white">Email</th>
     <th class="text-white">Telephone</th>
     <th class="text-white">Statistiques Programmes</th>
     <th class="text-white">Statistiques Filiéres</th>
     <th class="text-white">Statistiques Secteurs</th>

    </thead>

    <tbody>
     <?php $__currentLoopData = $depart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <tr>
      <td class="text-center">
       <?php echo e($departs->NOM_ETA); ?>

      </td>

      <td class="text-center ">
       <?php echo e($departs->Adresse); ?>

      </td>

      <td class="text-center ">
       <?php echo e($departs->EMAIL_ETBLMT); ?>

      </td>

      <td class="text-center ">
       <?php echo e($departs->TEL_ETBLMT); ?>

      </td>

      <td class="text-center ">
       <a href="<?php echo e(route('prog.eta',$departs->id)); ?>" class="btn  text-white" style="background-color:rgb(246, 120, 58);">Consulter</a>
      </td>
      <td class="text-center ">
       <a href="<?php echo e(route('prog.eta1',$departs->id)); ?>" class="btn  text-white" style="background-color:rgb(246, 120, 58);">Consulter</a>
      </td>
      <td class="text-center ">
       <a href="<?php echo e(route('prog.eta2',$departs->id)); ?>" class="btn  text-white" style="background-color:rgb(246, 120, 58);">Consulter</a>
      </td>

     </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

   </table>
  </div>
 </div>

</div>

<!-- END Full Table -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme (8)\GestionProgramme\resources\views/EFPT/departInfo.blade.php ENDPATH**/ ?>