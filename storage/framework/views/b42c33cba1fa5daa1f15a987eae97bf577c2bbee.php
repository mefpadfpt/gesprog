
<?php $__env->startSection('content'); ?>


<div>
  <?php if(session('success')): ?>
  <div class="alert alert-success col-md-6 offset-3">
    <?php echo e(session('success')); ?>

  </div>
  <?php endif; ?>

  <h4 class="text-center pt-2" style="color:rgb(246, 120, 58);">Remplisser les informations de votre etablissement</h4>
  <form action="<?php echo e(route('renseiger.etablissement')); ?>" method="post" class="col-md-10 offset-1 mt-4 mb-8">
    <?php echo csrf_field(); ?>
    <div class="form-group">
      <label for="etablissement_id">Choisir mon Etablissement</label>
      <select class="form-control" id="etablissement_id" name="etablissement_id">
        <option disabled>Choisir mon Etablissement</option>
        <?php $__currentLoopData = $etablissement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($eta->id); ?>"><?php echo e($eta->NOM_ETA); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <?php $__errorArgs = ['etablissement_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
    </div>

    <div class="form-group mt-3">
      <label for="niveau_id">Niveau</label>
      <select class="form-control" id="niveau_id" name="niveau_id">
        <option disabled>Choisir niveau</option>
        <?php $__currentLoopData = $niveau; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $niveaux): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($niveaux->id); ?>"><?php echo e($niveaux->TYPE); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <?php $__errorArgs = ['niveau_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
    </div>


    <div class="form-group">
      <label for="programme_id">Programme</label>
      <select class="form-control" id="programme_id" name="programme_id">
        <option disabled>Choisir programme</option>
        <?php $__currentLoopData = $programme; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($pro->id); ?>"><?php echo e($pro->NOM); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <?php $__errorArgs = ['programme_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
    </div>

    <div class="row mt-3">
      <div class="col">
        <label for="anne_aca">Année Programme</label>
        <input type="date" class="form-control" name="anne_aca">
        <?php $__errorArgs = ['anne_aca'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
      </div>

      <div class="col">
        <label for="anne_niv">Année Académique</label>
        <input type="number" class="form-control" name="anne_niv">
        <?php $__errorArgs = ['anne_niv'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <label for="Effectif_garcon">Effectifs Garçons</label>
        <input type="number" class="form-control" name="Effectif_garcon">
        <?php $__errorArgs = ['Effectif_garcon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
      </div>
      <div class="col">
        <label for="Effectif_fille">Effectifs filles</label>
        <input type="number" class="form-control" name="Effectif_fille">
        <?php $__errorArgs = ['Effectif_fille'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
      </div>
    </div>

    <div class="mt-3">
      <button class="btn text-white" style="background-color:rgb(246, 120, 58);">Enregistrer</button>
    </div>
</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme\resources\views/user/RenseignerEta.blade.php ENDPATH**/ ?>