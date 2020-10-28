
<?php $__env->startSection('content'); ?>


<!-- Hero -->
<div class="bg-body-light">
       <div class="content content-full">
              <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                     <h1 class="flex-sm-fill h3 my-2 text-center" style="color:rgb(246, 120, 58);">
                            Mes Programmes <span class="badge badge-info"></span>
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
                            <table class="table table-bordered table-striped table-vcenter">
                                   <thead>
                                          <tr>
                                                 <th>Filiere</th>
                                                 <th>Programme</th>
                                                 <?php if(Auth::guard('utilisateur')->user()->type == "chef Etablissement"): ?>
                                                 <th>Etablissement</th>
                                                 <?php endif; ?>
                                                 <th>Appuis</th>
                                                 <?php if(Auth::guard('utilisateur')->user()->type == "partenaire"): ?>
                                                 <th>Partenaire</th>
                                                 <?php endif; ?>
                                                 <th>Ressource</th>
                                                 <th>Niveau</th>
                                                 <th>Motif</th>
                                                 <th>Nom referentiel</th>
                                                 <th class="">etat</th>

                                          </tr>
                                   </thead>

                                   <tbody>
                                          <?php $__currentLoopData = $utilisateurProgramme; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $progra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr>

                                                 <td class=" font-w600 font-size-sm">
                                                        <p style="color:  #020031;"><?php echo e($progra->filiere->NOM); ?></p>
                                                 </td>

                                                 <td class="font-w600 font-size-sm">
                                                        <P style="color:  #020031;"><?php echo e($progra->programme->NOM); ?></P>
                                                 </td>


                                                 <?php if(Auth::guard('utilisateur')->user()->type == "chef Etablissement"): ?>
                                                 <td class="font-w600 font-size-sm">
                                                        <p style="color:  #020031;"><?php echo e($progra->etablissement->NOM_ETA); ?></p>
                                                 </td>
                                                 <?php endif; ?>

                                                 <td class="font-w600 font-size-sm">
                                                        <p style="color:  #020031;"><?php echo e($progra->appui); ?></p>
                                                 </td>

                                                 <?php if(Auth::guard('utilisateur')->user()->type == "partenaire"): ?>

                                                 <td class="font-w600 font-size-sm">
                                                        <p style="color:  #020031;"><?php echo e($progra->partenaire->NOM); ?></p>
                                                 </td>

                                                 <?php endif; ?>



                                                 <td class="font-w600 font-size-sm">
                                                        <p style="color:  #020031;"><?php echo e($progra->RessourceNecessaire); ?></p>
                                                 </td>

                                                 


                                                 <td class="font-w600 font-size-sm">
                                                        <?php $__currentLoopData = $progra->niveau; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $niv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <p style="color:  #020031;"><?php echo e($niv->TYPE); ?></p>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                 </td>

                                                 <td class="font-w600 font-size-sm">
                                                        <p style="color:  #020031;"><?php echo e($progra->motif); ?></p>
                                                 </td>





                                                 <td class="font-w600 font-size-sm">

                                                        <?php $__currentLoopData = $progra->referentiel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                        <p style="color:  #020031;"><?php echo e($ref->NOMFICHE); ?></p>


                                                        <?php if($progra->etat == 'validé'): ?>
                                                        <a href="<?php echo e(route('getReferentiel',$ref->File)); ?>" class="btn btn-success">Télécharger</a>
                                                        <?php else: ?>
                                                        <button class="btn btn-danger" disabled>Verrouiller</button>
                                                        <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                 </td>


                                                 <td class="font-w600 font-size-sm">
                                                        <button class="text-white btn" style="background-color:rgb(246, 120, 58); border-radius:4px"><?php echo e($progra->etat); ?></button>
                                                 </td>


                                          </tr>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </tbody>
                            </table>
                     </div>
              </div>
       </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme\resources\views/utilisateur/MesProgrammes.blade.php ENDPATH**/ ?>