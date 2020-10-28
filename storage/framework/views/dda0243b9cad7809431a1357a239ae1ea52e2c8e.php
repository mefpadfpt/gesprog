
<?php $__env->startSection('content'); ?>
<div class="container">
 <h1 class="text-center" style="color:rgb(246, 120, 58);">Ajouter un nouveau projet</h1>
 <?php if(session('success')): ?>
 <div class="alert alert-success">
  <?php echo e(session('success')); ?>

 </div>
 <?php endif; ?>
 <form class="" action="<?php echo e(route('projets.save')); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <div class="row">

   <div class="form-group col-md-6">
    <label for="NOM">Projets</label>
    <input type="text" class="form-control" id="NOMProjet" name="NOMProjet">
    <?php $__errorArgs = ['NOMPROJET'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
   </div>

   <div class="form-group col-md-6">
    <label for="NOM">PFT</label>
    <input type="text" class="form-control" id="PFT" name="PFT">
    <?php $__errorArgs = ['PFT'];
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
   <div class="form-group col-md-6">
    <label for="NOM">ETAT</label>
    <input type="text" class="form-control" id="ETAT" name="ETAT">
    <?php $__errorArgs = ['ETAT'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
   </div>

   <div class="form-group col-md-6">
    <label for="NOM">Période</label>
    <input type="text" class="form-control" id="PERIODE" name="PERIODE">
    <?php $__errorArgs = ['PERIODE'];
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
   <label for="NOM">Zones d'intervation</label>
   <textarea class="form-control" id="ZONES" name="ZONES"></TEXtarea>
   <?php $__errorArgs = ['ZONES'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
  </div>


  <div class="form-group">
   <label for="NOM">Types d'inervation/Activités</label>
   <textarea type="text" class="form-control" id="ACTIVITE" name="ACTIVITE"></textarea>
   <?php $__errorArgs = ['ACTIVITE'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
  </div>





  <div class="form-group">
   <button type="submit" class="btn  mt-3 btn-lg btn-block text-white" style="background-color:rgb(246, 120, 58);">Enregister</button>
  </div>
 </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme\resources\views/admin/projets.blade.php ENDPATH**/ ?>