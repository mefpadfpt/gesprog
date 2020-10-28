
<?php $__env->startSection('content'); ?>



<!-- Page Content -->
<div class="content mb-6">
   <!-- Full Table -->

   <div class="block-content">
      <div class="table-responsive">
         <table class="table table-bordered table-striped table-vcenter ">

            <thead style="background-color:  #020031;">
               <th class="text-white">Filieres</th>
               <th class="text-white">Programmes</th>
               <th class="text-white">Niveaux</th>
               <th class="text-white">Classe pédagoqigue</th>
               <th class="text-white">Statistiques</th>
            </thead>

            <tbody>
               <?php $__currentLoopData = $eta_pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php $__currentLoopData = $etablissement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td class="text-center ">
                     <?php echo e($prog->programme->filiere->NOM); ?>

                  </td>
                  <td class="text-center ">
                     <?php echo e($prog->programme->NOM); ?>

                  </td>
                  <td class="text-center ">
                     <?php echo e($prog->niveau->TYPE); ?>

                  </td>
                 <td class="text-center">
                <?php echo e($prog->anne_aca); ?>

               </td>
                  <td>
                     <a href="<?php echo e(route('prog.info',[$prog->programme->id ,$prog->etablissement_id,$eta->departement_id,$eta->departement->region_id,$prog->niveau_id,$prog->anne_aca])); ?>" class="btn text-white" style="background-color:rgb(246, 120, 58);">Voir</a>
                  </td>
               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

         </table>
      </div>
   </div>

</div>

<!-- END Full Table -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme (8)\GestionProgramme\resources\views/EFPT/showProg.blade.php ENDPATH**/ ?>