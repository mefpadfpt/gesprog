
<?php $__currentLoopData = $classe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php $__currentLoopData = $nClasse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nC): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p value="<?php echo e($n['idClasse']); ?>"><?php echo e($nC->nomClasse); ?></p>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php /**PATH C:\wamp\www\GestionProgramme\resources\views/programme/showClasse.blade.php ENDPATH**/ ?>