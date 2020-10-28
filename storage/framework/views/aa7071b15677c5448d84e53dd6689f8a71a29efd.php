

<?php $__env->startSection('content'); ?>

<h1 class="text-center" style="color:rgb(246, 120, 58)" ;>Ajouter Référentiel Par Niveau</h1>

<div class=" container mb-10 mt-4 ">
 <form action=" <?php echo e(route('storeRef')); ?>" method="post" enctype="multipart/form-data" class="dropzone">
  <?php echo csrf_field(); ?>

  <div class="from-group">
   <label for="">Programme</label>
   <select name="programme_id" id="" class="form-control">
    <option value="">Choisir</option>
    <?php $__currentLoopData = $programme; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <option value="<?php echo e($pro->id); ?>"><?php echo e($pro->NOM); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </select>
  </div>


  <div class="from-group">
   <label for="">Réferentiel</label>
   <input type="file" name="NOMFICHE[]" class="form-control" multiple>
  </div>



  <div class="from-group mt-3">
   <label for="" class="">Niveau</label>
   <select name="niveau_id" id="" class="form-control">
    <option value="" disabled>choisir le Niveau</option>
    <?php $__currentLoopData = $programme; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $programmes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $programmes->niveau; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $niveaux): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($niveaux->id); ?>"><?php echo e($niveaux->TYPE); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

   </select>
  </div>

  <div class="from-group mt-4">
   <button type="submit" class="btn text-white" style="background-color:rgb(246, 120, 58)">Enregistrer</button>
  </div>

 </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme\resources\views/refe.blade.php ENDPATH**/ ?>