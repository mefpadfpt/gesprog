
<?php $__env->startSection('content'); ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2 text-center" style="color:  #020031;">
                <?php $__currentLoopData = $region_dep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                STATISTIQUES DES CENTRES DANS LA REGION DE <?php echo e($rd->NOM); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </h1>
        </div>
    </div>
</div>
<!-- END Hero -->


<!-- Page Content -->
<div class="content mb-6">
    <!-- Full Table -->

    <div class="block-content">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-vcenter ">

                <thead style="background-color:  #020031;">
                    <th class="text-white ">Departement</th>
                    <th class="text-white">Centre de formation</th>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $reg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $regs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center">
                            <a href="<?php echo e(route('depart.eta',$regs->id)); ?>" style="color:  #020031;"><?php echo e($regs->NOM_DEPT); ?></a>
                        </td>

                        <td class="text-center ">

                            <h4 class="" style="color:rgb(246, 120, 58);"> <?php echo e($regs->etablissement_count); ?></h4>

                        </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
        </div>
    </div>

</div>

<!-- END Full Table -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme (8)\GestionProgramme\resources\views/EFPT/departement.blade.php ENDPATH**/ ?>