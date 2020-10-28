<?php $__env->startSection('content'); ?>
<div class="container">
    <H2 class="mt-6 text-center" style="color:rgb(246, 120, 58);">INSCRIPTION</H2>
    <div class="row mb-10">
        <div class="col-lg-6 col-md-6">
            <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/utilisateur/register')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <label for="">Vous êtes?</label>
                    <select id="" name="type" class="form-control">
                        <option value="">Vous êtes?</option>
                        <option id="" value="chef Etablissement">Chef d'etablissement</option>
                        <option value="partenaire">Partenaire</option>
                        <option value="autres">Autres</option>
                    </select>
                </div>

                <div class="form-group<?php echo e($errors->has('nom') ? ' has-error' : ''); ?>">
                    <label for="nom" class="col-md-4 control-label">Nom</label>

                    <div class="">
                        <input id="name" type="text" class="form-control" name="nom" value="<?php echo e(old('nom')); ?>" autofocus>
                        <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
                    </div>
                </div>

                <div class="form-group<?php echo e($errors->has('nom') ? ' has-error' : ''); ?>">
                    <label for="prenom" class="col-md-4 control-label">Prenom</label>

                    <div class="">
                        <input id="prenom" type="text" class="form-control" name="prenom" value="<?php echo e(old('prenom')); ?>" autofocus>
                        <?php $__errorArgs = ['prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
                    </div>
                </div>

                <div class="form-group<?php echo e($errors->has('fonction') ? ' has-error' : ''); ?>">
                    <label for="nom" class="col-md-4 control-label">Fonction</label>

                    <div class="">
                        <input id="fonction" type="text" class="form-control" name="fonction" value="<?php echo e(old('fonction')); ?>" autofocus>
                        <?php $__errorArgs = ['fonction'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
                    </div>
                </div>

                <div class="form-group<?php echo e($errors->has('structure') ? ' has-error' : ''); ?>">
                    <label for="structure" class="col-md-4 control-label">Structure</label>

                    <div class="">
                        <input id="structure" type="text" class="form-control" name="structure" value="<?php echo e(old('structure')); ?>" autofocus>
                        <?php $__errorArgs = ['structure'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
                    </div>
                </div>

                <div class="form-group<?php echo e($errors->has('structure') ? ' has-error' : ''); ?>">
                    <label for="telephone" class="col-md-4 control-label">Telephone</label>

                    <div class="">
                        <input id="telephone" type="number" class="form-control" name="telephone" value="<?php echo e(old('telephone')); ?>" autofocus>
                        <?php $__errorArgs = ['telephone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
                    </div>
                </div>


        </div>

        <div class="col-lg-6 col-md-6">


            <div class="form-group<?php echo e($errors->has('adresse') ? ' has-error' : ''); ?>">
                <label for="adresse" class="col-md-4 control-label">Adresse</label>

                <div class="">
                    <input id="adresse" type="text" class="form-control" name="adresse" value="<?php echo e(old('adresse')); ?>" autofocus>
                    <?php $__errorArgs = ['adresse'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
                </div>
            </div>


            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="">
                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
                </div>
            </div>

            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="">
                    <input id="password" type="password" class="form-control" name="password">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
                </div>
            </div>

            <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                <div class="">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                    <?php $__errorArgs = ['password-confirm'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
                </div>
            </div>
            <div class="form-group">
                <div class="">
                    <button type="submit" class="btn btn-block text-white" style="background-color:rgb(246, 120, 58);">
                        S'Inscrire
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme\resources\views/utilisateur/auth/register.blade.php ENDPATH**/ ?>