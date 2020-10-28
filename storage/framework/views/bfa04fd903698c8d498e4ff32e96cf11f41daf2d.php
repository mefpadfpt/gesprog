
<?php $__env->startSection('content'); ?>

  <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill h3 my-2">
                            
                                STATISTIQUES DES CENTRES DANS LES REGIONS
                            </h1>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                 <?php $__currentLoopData = $reg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $regs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Page Content -->
                <div class="content">
                    <!-- Full Table -->
                    
                        <div class="block-content">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-vcenter bg-info">
                                
                                    <thead>
                                             <th class="text-white">Centre de formation</th>             
                                            <th class="text-white"><?php echo e($regs->NOM_DEPT); ?></th>
                                        
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                 
                    </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- END Full Table -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\GestionProgramme\resources\views/EFPT/departement.blade.php ENDPATH**/ ?>