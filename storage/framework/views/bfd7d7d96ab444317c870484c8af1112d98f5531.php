
<?php $__env->startSection('content'); ?>

<!-- Hero -->
<div class="bg-body-light mt-3">
 <div class="content content-full">
  <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
   <h1 class="flex-sm-fill h3 my-2 text-center" style="color:  #020031;">
    <?php $__currentLoopData = $pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pros): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    Statistiques du secteur <?php echo e($pros->TYPE); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </h1>
  </div>
 </div>
</div>
<!-- END Hero -->
<!-- Page Content -->
<div class=" content mb-6">
 <!-- Full Table -->

 <div class="block-content">
  <div class="table-responsive">
   <table class="table table-bordered table-striped table-vcenter ">

    <thead style="background-color:  #020031;">
     <th class="text-white ">Effectif Garçons</th>
     <th class="text-white ">Effectif Filles</th>
     <th class="text-white ">Année Academique</th>
     


    </thead>

    <tbody>
     <?php $__currentLoopData = $programme; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <tr>
      <td class="text-center">
       <?php echo e($info->Effectif_garcon); ?>

      </td>

      <td class="text-center ">
       <?php echo e($info->Effectif_fille); ?>

      </td>
      <td class="text-center">
       <?php echo e($info->anne_niv); ?>

      </td>
      
     </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

   </table>
  </div>
 </div>
</div>

<!-- Page Content -->
<div class="content content-narrow">
 <h1 class="text-center" style="color:rgb(246, 120, 58);">Statistiques Départementales</h1>
 <!-- Stats -->
 <div class="row">
  <div class="col-6 col-md-3 col-lg-6 col-xl-6">
   <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
    <div class="block-content block-content-full">
     <div class="font-size-sm font-w600 text-uppercase">Effectifs Garçons</div>
     <div class="font-size-h2 font-w400 text-dark"><?php echo e(($dep_eta_sGarcon)); ?></div>
    </div>
   </a>
  </div>

  <div class="col-6 col-md-3 col-lg-6 col-xl-6">
   <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
    <div class="block-content block-content-full">
     <div class="font-size-sm font-w600 text-uppercase">Effectifs Filles</div>
     <div class="font-size-h2 font-w400 text-dark"><?php echo e(($dep_eta_sFille)); ?></div>
    </div>
   </a>
  </div>
 </div>
 <!-- END Stats -->
</DIV>
<!-- END Full Table -->

<!-- Page Content -->

<div class="content content-narrow mb-10 mt-3">
 <h1 class="text-center" style="color:rgb(246, 120, 58);">Statistiques Régionales</h1>
 <!-- Stats -->
 <div class="row">
  <div class="col-6 col-md-3 col-lg-12 col-xl-6">
   <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
    <div class="block-content block-content-full">
     <div class="font-size-sm font-w600 text-uppercase">Effectifs Garçons</div>
     <div class="font-size-h2 font-w400 text-dark"><?php echo e(($sGarcon)); ?></div>
    </div>
   </a>
  </div>

  <div class="col-6 col-md-3 col-lg-12 col-xl-6">
   <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
    <div class="block-content block-content-full">
     <div class="font-size-sm font-w600 text-uppercase">Effectifs Filles</div>
     <div class="font-size-h2 font-w400 text-dark"><?php echo e(($sFille)); ?></div>
    </div>
   </a>
  </div>
 </div>

 <!-- END Stats -->

  <!-- Page Content -->
 <div class="content content-narrow mb-10 mt-3">
  <h1 class="text-center" style="color:rgb(246, 120, 58);">Statistiques Nationales</h1>
  <!-- Stats -->
  <div class="row">
   <div class="col-6 col-md-3 col-lg-12 col-xl-6">
    <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
     <div class="block-content block-content-full">
      <div class="font-size-sm font-w600 text-uppercase">Effectifs Garçons</div>
      <div class="font-size-h2 font-w400 text-dark"><?php echo e(($nationalGarcon)); ?></div>
     </div>
    </a>
   </div>

   <div class="col-6 col-md-3 col-lg-12 col-xl-6">
    <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
     <div class="block-content block-content-full">
      <div class="font-size-sm font-w600 text-uppercase">Effectifs Filles</div>
      <div class="font-size-h2 font-w400 text-dark"><?php echo e(($nationalFille)); ?></div>
     </div>
    </a>
   </div>
  </div>
  <!-- END Stats -->
 </DIV>

  <!-- END Stats -->
 </DIV>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme (8)\GestionProgramme\resources\views/EFPT/infoPro2.blade.php ENDPATH**/ ?>