
<?php $__env->startSection('content'); ?>

  <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
            <form class="js-validation" action="be_forms_validation.html" method="POST">
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">Ajouter Programme</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <!-- Regular -->
                        <h2 class="content-heading border-bottom mb-4 pb-2">Ajouter Programme</h2>
                        <div class="row items-push">
                            <div class="col-lg-4">
                            </div>
                            <div class="col-lg-8 col-xl-5">
                                <div class="form-group">
                                    <label for="NOM">Nom du Progamme <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="NOM" name="NOM">
                                </div>
                    
                                <div class="form-group">
                                    <label for="ID_FIL">FILIERE <span class="text-danger">*</span></label>
                                    <select name="ID_FIL" id="ID_FIL" class="form-control">
                                      <option value="">SELECTIONNER UNE FILIERE</option>
                                    <?php $__currentLoopData = $filiere; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filieres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($filieres->ID_FIL); ?>"><?php echo e($filieres->NOM); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                               <div class="form-group">
                                    <label for="ID_FIL">FILIERE <span class="text-danger">*</span></label>
                                    <select name="ID_FIL" id="ID_FIL" class="form-control">
                                      <option value="">SELECTIONNER UNE FILIERE</option>
                                    <?php $__currentLoopData = $filiere; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filieres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($filieres->ID_FIL); ?>"><?php echo e($filieres->NOM); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                 <div class="form-group">
                                    <label for="ID_FIL">FILIERE <span class="text-danger">*</span></label>
                                    <select name="ID_FIL" id="ID_FIL" class="form-control">
                                      <option value="">SELECTIONNER UNE FILIERE</option>
                                    <?php $__currentLoopData = $filiere; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filieres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($filieres->ID_FIL); ?>"><?php echo e($filieres->NOM); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                 <div class="form-group">
                                    <label for="ID_FIL">FILIERE <span class="text-danger">*</span></label>
                                    <select name="ID_FIL" id="ID_FIL" class="form-control">
                                      <option value="">SELECTIONNER UNE FILIERE</option>
                                    <?php $__currentLoopData = $filiere; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filieres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($filieres->ID_FIL); ?>"><?php echo e($filieres->NOM); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                 <div class="form-group">
                                    <label for="ID_FIL">FILIERE <span class="text-danger">*</span></label>
                                    <select name="ID_FIL" id="ID_FIL" class="form-control">
                                      <option value="">SELECTIONNER UNE FILIERE</option>
                                    <?php $__currentLoopData = $filiere; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filieres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($filieres->ID_FIL); ?>"><?php echo e($filieres->NOM); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                
                                  <div class="form-group">
                                    <label for="description">DESCRIPTION DU PROGRAMME<span class="text-danger">*</span></label>
                                    <textarea type="text" class="form-control" id="description" name="description"></textarea>
                                  </div>

                            </div>
                        </div>
                          <!-- Submit -->
                                <div class="row items-push">
                                    <div class="col-lg-7 offset-lg-4">
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </div>
                                <!-- END Submit -->
                       
                        <!-- END Regular -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\Apps\resources\views/programme/show.blade.php ENDPATH**/ ?>