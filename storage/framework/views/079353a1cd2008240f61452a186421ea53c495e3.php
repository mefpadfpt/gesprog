  
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
      <h1 class="text-center" style="color:rgb(246, 120, 58);">Liste Des Programmes</h1>
      <div class="block-content">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-vcenter">
            <thead style="color:rgb(246, 120, 58);">
              <tr>
                <th class="">Nom</th>
                <th class="">Filiere</th>
                <th>Niveau</th>
                <th class="">Status</th>
                <th class="">Modalite</th>
                <th class="">Validation</th>
                <th class="">Partenaire</th>
                <th>Action</th>
                <th>Referentiel</th>
              </tr>
            </thead>

            <tbody>
              <?php $__currentLoopData = $programme; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $programmes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($programmes->NOM); ?></td>
                <td><?php echo e($programmes->filiere->NOM); ?></td>

                <td>
                  <?php $__currentLoopData = $programmes->niveau; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $niv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php echo e($niv->TYPE); ?>,
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>

                <td><?php echo e($programmes->statu->TYPE); ?></td>
                <td><?php echo e($programmes->modalite->TYPE); ?></td>
                <td><?php echo e($programmes->validation->NOM); ?></td>
                <td><?php echo e($programmes->partenaire->NOM); ?></td>
                <td>
                  <a href="<?php echo e(route('edit.programme',$programmes->id)); ?>"><i class="fa fa-edit" style="color:rgb(246, 120, 58);"></i></a>
                  <a href="<?php echo e(route('delete.programme',$programmes->id)); ?>" onclick="return confirm('Vouler vous supprimez ce programme')"><i class="fa fa-trash-restore-alt" style="color:red;"></i></a>
                </td>
                <td>
                   <a href="<?php echo e(route('referentielProgramme',$programmes->id)); ?>" class="btn btn-dark">Ajouter Référentiel</i></a>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <?php echo e($programme->links()); ?>

          </table>
        </div>
      </div>
    </div>
  </div>
  <?php echo e($programme->links()); ?>

  <!-- END Full Table -->
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme\resources\views/programme/liste.blade.php ENDPATH**/ ?>