
<?php $__env->startSection('content'); ?>

<h1 class="text-center mt-4">Direction de la formation professionnelle et technique</h1>
<h4 class="text-center">Formulaire de demande de ressources pédagogiques et didactiques de formation professionnelle et technique</h4>
<div class="col-md-6 col-lg-12 mb-10">
  <form action="<?php echo e(route('store.DP')); ?>" method="post">
    <?php echo csrf_field(); ?>

    <div class="row">
      <?php if(Auth::guard('utilisateur')->user()->type == "chef Etablissement"): ?>
      <div class="col">
        <label for="">Etablissement</label>
        <select name="etablissement_id" id="etablissement_id" class="form-control">
          <option value="" disabled>Etablissement</option>
          <?php $__currentLoopData = $etablissement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $et): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($et->id); ?>"><?php echo e($et->NOM_ETA); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php $__errorArgs = ['etablissement_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
        </select>
      </div>
      <?php endif; ?>
      <div class="col">
        <label for="">Statut</label>
        <select id="" name="statut" class="form-control">
          <option value="prive">Privé</option>
          <option selected="" value="public">Public</option>
          <option value="mefpa">Agrée par le MEFPA</option>
          <option value="programme">Projet programme</option>
          <option value="autre">Autre</option>
        </select>
        <?php $__errorArgs = ['statut'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
      </div>

      <div class="col">
        <label for="">Programme/métier</label>
        <select id="" name="programme_id" class="form-control">
          <option value="<?php echo e($programme->id); ?>"><?php echo e($programme->NOM); ?></option>
        </select>
      </div>
    </div>

    <div class="row pt-4">
      <!--div class="col">
        <label for="">Domaine ou secteur d’activité</label>
        <select name="secteur_id" id="id_secteur" class="form-control">
          <option value="" disabled>Secteur</option>
           
          <option value="<?php echo e($programme->secteur->TYPE); ?>"><?php echo e($programme->secteur->TYPE ??''); ?>

             
          </option>
        </select>
        <?php $__errorArgs = ['id_secteur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
      </div-->

      <div class="col">
        <label for="">Filiére</label>
        <select name="filiere_id" id="" class="form-control">
          <option value="" disabled>Filiere</option>
          <option value="<?php echo e($programme->filiere->id); ?>"><?php echo e($programme->filiere->NOM); ?></option>
        </select>
        <?php $__errorArgs = ['filiere_id'];
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
      <label for="">Motifs de la demande</label>
      <select name="motif" id="" class="form-control">
        <option value="adaptation">Adaptation</option>
        <option value="revision">Révision</option>
        <option value="Implantation">Implantation</option>
        <option value="existante">Mise à jour d’une ressource existante</option>
        <option value="autre">Autre</option>
      </select>
      <?php $__errorArgs = ['motif'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
    </div>




    <?php if(Auth::guard('utilisateur')->user()->type == "partenaire"): ?>
    <div class="form-group partenaire">
      <label for="">Partenaire</label>
      <select name="partenaire_id" id="partenaire_id" class="form-control ">
        <option value="" disabled>Partenaire</option>
        <option value="<?php echo e($programme->partenaire->id); ?>"><?php echo e($programme->partenaire->NOM); ?></option>
      </select>
    </div>
    <?php endif; ?>



    <div class="form-group">
      <label for="">Niveau</label>
      <select name="niveau_id" id="" class="form-control">
        <option value="">Niveau</option>
        <?php $__currentLoopData = $programme->niveau; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $niv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($niv->id); ?>"><?php echo e($niv->TYPE); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <?php $__errorArgs = ['niveau_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
    </div>





    <div class="form-group">
      <label for="">Réferentiel (Veillez choisir les reférentiels que vous demandez)</label>
      <select name="referentiel_id[]" id="" class="form-control" multiple>
        <option value="" disabled>Réferentiel</option>
      </select>
      <?php $__errorArgs = ['referentiel_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e(('Veuillez choisir au moins un référentiel')); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
    </div>



    <div class="form-group tout">
      <label for="">Motivation de la demande</label>
      <textarea name="motivation" id="" class="form-control"></textarea>
      <?php $__errorArgs = ['motivation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
    </div>



    <h4>Disposez-vous des ressources nécessaires pour le déploiement?
      <input type="radio" name="RessourceNecessaire" value="oui" id="oui"><label for="">OUI</label>
      <input type="radio" name="RessourceNecessaire" id="non" value="non"><label for="">NON</label>
      <?php $__errorArgs = ['RessourceNecessaire'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
    </h4>

    <h4>
      Souhaitez-vous un appui?
      <input type="radio" name="appui" id="oui" value="oui"><label for="">OUI</label>
      <input type="radio" name="appui" id="non" value="non"><label for="">NON</label>
      <?php $__errorArgs = ['appui'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-danger"><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></p>
    </h4>

    <button type="submit" class="btn btn-success col-md-12">Enregistrer</button>
  </form>
</div>








<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
<script>
  $('document').ready(function() {
    $('select[name = "niveau_id"]').change(function() {
      $('select[name = "programme_id"]')
      var type = $('select[name = "niveau_id"]').val();
      var type1 = $('select[name = "programme_id"]').val();

      console.log(type1);

      if (type) {
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: "/getRefByNiveau/" + type + "/" + type1,
          Type: 'GET',
          dataType: 'json',
          success: function(data) {
            console.log(data);
            $('select[name="referentiel_id[]"]').show();
            var select = $('select[name="referentiel_id[]"]');

            select.empty();




            $.each(data, function(key, value) {
              select.append('<option value="' + value.id + '">' + value.NOMFICHE + '</option>');
            });

          }

        });
      } else {
        $('select[name="referentiel_id[]"]').hide();
        alert('vide');
      }
    });
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme (8)\GestionProgramme\resources\views/utilisateur/acceuil.blade.php ENDPATH**/ ?>