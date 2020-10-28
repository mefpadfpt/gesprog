 
<?php $__env->startSection('content'); ?>

  <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill h3 my-2 text-info">
                                DOCUMENTATION
                            </h1>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->
                <!-- Page Content -->
                <div class="content">
                    <!-- Full Table -->
                    
                        <div class="block-content mb-10">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-vcenter bg-info">
                                
                                    <thead>
                                        <th class="text-white">GUIDE FORMATEUR</th>             
                                        <th class="text-white">LOI D'ORIENTATION</th>
                                        <th class="text-white">GUIDE EVALUATION</th>     
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="files/guide_formateur.pdf" class="btn btn-success">Voir Document</a>   
                                            </td>
                                            <td>
                                                 <a href="files/loi-d-orientation.pdf" class="btn btn-success">Voir Document</a>
                                            </td>
                                            <td>
                                                  <a href="files/Guide EVALUATION.pdf" class="btn btn-success">Voir Document</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     
                    <!-- END Full Table -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\GestionProgramme\resources\views/documents/documents.blade.php ENDPATH**/ ?>