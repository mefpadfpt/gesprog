


  <?php $__env->startSection('content'); ?>
    
     <div class="mt-5 mb-5">
        <?php $__currentLoopData = $serie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $series): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a class="btn btn-info btn-info">
            <a href="<?php echo e(route('show.classe',$series->idSerie)); ?>">Série<?php echo e($series->nomSerie); ?></a>
          </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>

   

    
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\GestionProgramme\resources\views/programme/Technique.blade.php ENDPATH**/ ?>