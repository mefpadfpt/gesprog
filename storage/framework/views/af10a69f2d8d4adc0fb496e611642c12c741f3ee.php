
<?php $__env->startSection('content'); ?>

   <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill h3 my-2 text-info">
                              Liste Utilisateurs
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
                                <table class="table table-bordered table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                           
                                            <th>Name</th>
                                            <th style="width: 30%;">Email</th>
                                            <th class="text-center" style="width: 100px;">Actions</th>
                                        </tr>
                                    </thead>
                                     <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tbody>
                                        <tr>
                                          
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_profile.html"><?php echo e($users->name); ?></a>
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_profile.html"><?php echo e($users->email); ?></a>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-fw fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                           
                                        </tr>
                                    </tbody>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END Full Table -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\GestionProgramme\resources\views/admin/user.blade.php ENDPATH**/ ?>