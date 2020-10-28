<?php $__currentLoopData = $statut; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statuts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <p><?php echo e($statuts->TYPE_STATUS); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\wamp\www\Apps\resources\views/statut/show.blade.php ENDPATH**/ ?>