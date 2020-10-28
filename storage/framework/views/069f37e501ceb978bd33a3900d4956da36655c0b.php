
<?php $__env->startSection('content'); ?>



<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Striped Dark Table</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
 .bs-example {
  margin: 20px;
 }
</style>


<body>
 <div class="bs-example">
  <table class="table table-striped table-light table-bordered">
   <thead>
    <tr>

    </tr>
   </thead>
   <tbody>
    <tr>

    </tr>

   </tbody>
  </table>
 </div>

 <!-- Page Content -->
 <div class="content">
  <!-- Full Table -->
  <div class="block">
   <?php if(session('success')): ?>
   <div class="alert alert-success">
    <?php echo e(session('success')); ?>

   </div>
   <?php endif; ?>
   <h1 class="text-center" style="color:rgb(246, 120, 58);">Liste des projets</h1>

   <div>
    <form action="<?php echo e(route('projets.rechercher')); ?>" class="d-flex mb-2 mr-3">
     <div class="from-group mb-0 mr-1">
      <input type="search" class="form-control" id="recherche" placeholder="rechercher...." name="recherche">
     </div>
     <button href="" type="submit" class="btn" style="background-color:rgb(246, 120, 58);"><i class="fa fa-search text-white"></i></button>
    </form>
   </div>

   <div class="block-content">
    <div class="table-responsive">
     <table class="table table-bordered table-striped table-vcenter">
      <thead style="color:rgb(246, 120, 58);">
       <tr>
        <th>Projet</th>
        <th>Périodes</th>
        <th colspan="2" class="bordered">Sources de financement
         <table class="table">
          <tr>
           <th style="color:rgb(246, 120, 58);">PFT</th>
           <th style="color:rgb(246, 120, 58);">ETAT</th>
          </tr>
         </table>
        </th>
        <th>Zones d'intervention</th>
        <th>Types d'intervention/Activités</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td colspan="6">
         <h5 style="color:rgb(246, 120, 58);" class="text-center">Les programmes et projets intervenants directement au niveau du MFPAA</h5>
        </td>
       </tr>


       <?php $__currentLoopData = $projet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projets): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
        <td><?php echo e($projets->NOMProjet); ?></td>
        <td><?php echo e($projets->PERIODE); ?></td>
        <td><?php echo e($projets->PFT); ?></td>
        <td><?php echo e($projets->ETAT); ?></td>
        <td>
         <?php echo e($projets->ZONES); ?>

        </td>
        <td>
         <?php echo e($projets->ACTIVITE); ?>

        </td>
       </tr>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
     </TABle>
     <?php echo e($projet->links()); ?>

    </div>
   </div>
  </div>
 </div>






 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme\resources\views/admin/listProjet.blade.php ENDPATH**/ ?>