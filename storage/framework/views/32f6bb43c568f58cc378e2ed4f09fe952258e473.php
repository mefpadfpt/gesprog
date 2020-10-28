 
  
  <?php $__env->startSection('content'); ?>

  

  
 <!-- Page Content -->

                
               
                   <div class="content content-boxed">
                    <div class="row row-deck py-4">
                  <?php $__currentLoopData = $fil_prog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $progs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <!-- Course -->
                       <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="block block-rounded block-link-pop">
                                <div class="block-content block-content-full text-center bg-amethyst">
                                    <div class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                                        <i class="si si-vector fa-2x text-white-75"><?php echo e($progs->NOM); ?></i>
                                    </div>
                                </div>
                             <a href="<?php echo e(route('show.description',$progs->description)); ?>" type="button" class="btn btn-info ml-4 mt-2">Voir description</a>
                        </div>
                        </div>
                        <!-- END Course -->
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>         
                    </div>
                </div>
              
                
                <!-- END Page Content -->

                  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.file', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\GestionProgramme\resources\views/programme/show.blade.php ENDPATH**/ ?>