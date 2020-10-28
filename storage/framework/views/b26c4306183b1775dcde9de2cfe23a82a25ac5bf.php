  
  <?php $__env->startSection('content'); ?>

  <!-- Page Content -->
  <div class="content mt-7 mb-10">

    <!-- Full Table -->
    <div class="block">

      <div class="block-content">

        <div class="table-responsive">

          <table class="table table-bordered table-striped table-vcenter">
            <thead>
              <tr>

                <th class="serie_show">SERIES</th>
                <th class="serie_show">MATIERES</th>

              </tr>
            </thead>

            <tbody>
              <?php $__currentLoopData = $serie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $series): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>

                <td class="serie_show"> <?php echo e($series->nomSerie); ?></td>

                <td class="class=" serie_show"">
                  <ul class="list-group">
                    <?php $__currentLoopData = $series->classe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="serie_show list-group-item text-d"><?php echo e($mat->nomClasse); ?></li>
                    <?php $__currentLoopData = $series->matiere; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="serie_show list-group-item text-d"><?php echo e($mat->nomMatiere); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- END Full Table -->
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.file1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme\resources\views/programme/showClasse.blade.php ENDPATH**/ ?>