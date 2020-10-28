
<?php $__env->startSection('content'); ?>

<!-- Page Content -->
<div class="content">
 <!-- Full Table -->
 <div class="block">
  <?php if(session('success')): ?>
  <div class="alert alert-success">
   <?php echo e(session('success')); ?>

  </div>
  <?php endif; ?>
  <h1 class="text-center" style="color:rgb(246, 120, 58);">Liste Des REFERENTIELS</h1>
  <div class="block-content">
   <div class="table-responsive">
    <table class="table table-bordered table-striped table-vcenter">
     <thead style="color:rgb(246, 120, 58);">
      <tr>
       <th class="">REFERENTIEL</th>
       <th class="">NIVEAU</th>
       <th class="">PROGRAMME</th>
      </tr>
     </thead>

     <tbody>
      <?php $__currentLoopData = $referentiel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $referentiels): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
       <td><?php echo e($referentiels->NOMFICHE); ?></td>
       <td><?php echo e($referentiels->niveau->TYPE); ?></td>
       <td><?php echo e($referentiels->programme->NOM); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </tbody>
    </table>
   </div>
  </div>
 </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme\resources\views/admin/listRef.blade.php ENDPATH**/ ?>