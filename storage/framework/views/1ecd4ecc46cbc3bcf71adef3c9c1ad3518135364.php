
<?php $__env->startSection('content'); ?>
<div class="container">
 <h1 class="text-center" style="color:rgb(246, 120, 58);">Modifier Le Programme</h1>
 <form class="col-md-6 col-lg-12" action="<?php echo e(route('update.programme',$programme->id)); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <div class="form-group">
   <label for="NOM">Nom Programme</label>
   <input type="text" class="form-control" id="NOM" name="NOM" value="<?php echo e($programme->NOM); ?>">
   <?php $__errorArgs = ['NOM'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
  </div>



  <div class="form-row">
   <div class="form-group col-md-4 col-lg-6">
    <label for="filiere">Filiere</label>
    <select name="filiere_id" id="filiere_id" class="form-control" value="<?php echo e($programme->filiere->NOM); ?>">
     <option value="" disabled>Choisir la filiére</option>
     <?php $__currentLoopData = $filiere; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filieres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <option value="<?php echo e($filieres->id); ?>"><?php echo e($filieres->NOM); ?></option>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php $__errorArgs = ['filiere_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>

   </div>

   <div class="form-group col-md-4 col-lg-6">
    <label for="status">Status</label>
    <select name="statu_id" id="statu_id" class="form-control" value="<?php echo e($programme->statu->TYPE); ?>">
     <option value="" disabled>Choisir Statut</option>
     <?php $__currentLoopData = $statut; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <option value="<?php echo e($stat->id); ?>"><?php echo e($stat->TYPE); ?></option>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php $__errorArgs = ['statu_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
   </div>
  </div>


  <div class="form-group">
   <label for="modalite">Modalité</label>
   <select name="modalite_id" id="modalite_id" class="form-control" value="<?php echo e($programme->modalite->TYPE); ?>">
    <option value="" disabled>Choisir Modalité</option>
    <?php $__currentLoopData = $modalite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($mod->id); ?>"><?php echo e($mod->TYPE); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </select>
   <?php $__errorArgs = ['modalite_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
  </div>

  <div class="form-group">
   <label for="validation">Validation</label>
   <select name="validation_id" id="validation_id" class="form-control" value="<?php echo e($programme->validation->NOM); ?>">
    <option value="" disabled>Validation</option>
    <?php $__currentLoopData = $validation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($val->id); ?>"><?php echo e($val->NOM); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </select>
   <?php $__errorArgs = ['validation_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
  </div>

  <div class="form-group">
   <label for="partenaire">Partenaire</label>
   <select name="partenaire_id" id="partenaire_id" class="form-control" value="<?php echo e($programme->partenaire->NOM); ?>">
    <option value="" disabled>Parteneaire</option>
    <?php $__currentLoopData = $partenaire; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $part): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($part->id); ?>"><?php echo e($part->NOM); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </select>
   <?php $__errorArgs = ['partenaire_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
  </div>

  <div class="form-group col-md-8">
   <button type="submit" class="btn col-lg-6 mt-3 btn-lg text-white" style="background-color:rgb(246, 120, 58);">Modifier</button>
  </div>
 </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme\resources\views/programme/edit.blade.php ENDPATH**/ ?>