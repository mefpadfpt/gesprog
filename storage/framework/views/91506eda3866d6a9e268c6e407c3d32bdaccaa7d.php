
<?php $__env->startSection('content'); ?>
<h2 class="text-center mb-3" style="color:rgb(246, 120, 58);">RENSEIGNEMENT ETABLISSEMENT</h2>
<div class="container col-md-12 col-lg-9">
  <form action="<?php echo e(route('show.RE')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="form-group">
      <label for="NOM_ETA">Etablissement</label>
      <input type="text" class="form-control" id="NOM_ETA" name="NOM_ETA">
      <?php $__errorArgs = ['NOM_ETA'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
    </div>

    <div class="form-group">
      <label for="departement_id">Departement</label>
      <select name="departement_id" id="departement_id" class="form-control">
        <option value="">Choisir le departement</option>
        <?php $__currentLoopData = $departement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($departs->id); ?>"><?php echo e($departs->NOM_DEPT); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <?php $__errorArgs = ['departement_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
    </div>

    <div class="form-group">
      <label for="TEL_ETBLMT">Telephone</label>
      <input type="text" name="TEL_ETBLMT" id="TEL_ETBLMT" class="form-control">
      <?php $__errorArgs = ['TEL_ETBLMT'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
    </div>

    <div class="form-group">
      <label for="EMAIL_ETBLMT">Email</label>
      <input type="email" name="EMAIL_ETBLMT" id="EMAIL_ETBLMT" class="form-control">
      <?php $__errorArgs = ['EMAIL_ETBLMT'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
    </div>


    <div class="form-group">
      <label for="Adresse">Adresse</label>
      <input type="text" name="Adresse" id="Adresse" class="form-control">
      <?php $__errorArgs = ['Adresse'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
    </div>

    <div>
      <button type="submit" class="btn mb-3 col-md-12 col-lg-9 offset-1 text-white" style="background-color:rgb(246, 120, 58);">Enregistrer</button>
    </div>

  </form>
</div>
<!-- END Main Container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme\resources\views/user/home.blade.php ENDPATH**/ ?>