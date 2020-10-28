 
  
  <?php $__env->startSection('content'); ?>

  <div class="mt-5 col-md-8 mb-3">
    <select class="browser-default custom-select">
         <option selected>Open this select menu</option>
         <?php $__currentLoopData = $fil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fils): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value=""><?php echo e($fils->NOM); ?></option>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </select>
  </div>


  
 <!-- Page Content -->

                
               
                   <div class="content content-boxed">
                    <div class="row row-deck py-4">
                  <?php $__currentLoopData = $prog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $progs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <!-- Course -->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <a class="block block-rounded block-link-pop">
                                <div class="block-content block-content-full text-center bg-amethyst">
                                    <div class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                                        <i class="si si-vector fa-2x text-white-75"></i>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                   <button class="btn btn-primary"><?php echo e($progs->NOM); ?></button>
                                   <P> <?php echo e($progs->description); ?></P>
                                   
                                </div>
                            </a>
                        </div>
                        <!-- END Course -->
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>         
                    </div>
                </div>
                <?php echo e($prog->links()); ?>

                
                <!-- END Page Content -->




<?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.file', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\Apps\resources\views/programme/programmeProf.blade.php ENDPATH**/ ?>