

<?php $__env->startSection('content'); ?>



<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-sm-fill h3 my-2 text-center" style="color:rgb(246, 120, 58);">
        Liste Des Programmes Demandés
      </h1>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">

  <!-- Full Table -->
  <div class="block">

    <div class="block-content">

      <div class="table-responsive">
        <?php if(session('success')): ?>
        <div class="alert alert-success">
          <?php echo e(session('success')); ?>

        </div>
        <?php endif; ?>
        <table class="table table-bordered table-striped table-vcenter mb-6" style="color:rgb(246, 120, 58);">
          <thead>
            <tr>
              <th>Programme</th>
              <th>Filiere</th>
              <th>Demandeur</th>
              <th>Appuis</th>
              <th>Ressource</th>
              <th>Motif</th>
              <th>etat</th>
              <th>Référentiels</th>
              <th>Action</th>
            </tr>
          </thead>
          <?php $__currentLoopData = $demande; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $demandes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tbody>
            <tr>
              <td class="font-w600 font-size-sm" style="color: #020031;">
                <a href=""><?php echo e($demandes->programme->NOM); ?></a>
              </td>

              <td class="font-w600 font-size-sm" style="color: #020031;">
                <a href=""><?php echo e($demandes->filiere->NOM); ?></a>
              </td>
              <td class="font-w600 font-size-sm" style="color: #020031;">
                <a href=""><?php echo e($demandes->utilisateur->type); ?></a>
              </td>
              <td class="font-w600 font-size-sm" style="color: #020031;">
                <a href=""><?php echo e($demandes->appui); ?></a>
              </td>
              <td class="font-w600 font-size-sm" style="color: #020031;">
                <a href=""><?php echo e($demandes->RessourceNecessaire); ?></a>
              </td>
              <td class="font-w600 font-size-sm" style="color: #020031;">
                <a href=""><?php echo e($demandes->motif); ?></a>
              </td>
              <td class="font-w600 font-size-sm" style="color: #020031;">
                <a href=""><?php echo e($demandes->etat); ?></a>
              </td>
              <td class="font-w600 font-size-sm" style="color: #020031;">
                <?php $__currentLoopData = $demandes->referentiel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $refe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href=""><?php echo e($refe->NOMFICHE); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </td>
              <td class="pb-2">
                <a href="<?php echo e(route('voirplus',$demandes->id)); ?>" class="btn mb-2 text-white" style="background-color:rgb(246, 120, 58);">Voir plus</a>
                <a href=" <?php echo e(route('validerProgramme',$demandes->id)); ?>" class="btn btn-success">Valider</a>
                <a href="<?php echo e(route('rejeterProgramme',$demandes->id)); ?>" class="btn btn-danger mt-1">Rejeter</a>
              </td>
            </tr>
          </tbody>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <?php echo e($demande->links()); ?>

      </div>
    </div>
  </div>
  <!-- END Full Table -->
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme\resources\views/admin/GetDemande.blade.php ENDPATH**/ ?>