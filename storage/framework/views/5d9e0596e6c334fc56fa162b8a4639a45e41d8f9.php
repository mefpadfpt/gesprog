


<?php $__env->startSection('content'); ?>
 <div>
  <h1 class="text-center text-info">Statistiques Nationales</h1>
 </div>
 
<div>
 <!-- Page Content -->
                <div class="content content-narrow">
                    <!-- Stats -->
                    <div class="row ml-5">
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Centre Formation</div>
                                    <div class="font-size-h2 font-w400 text-dark"><?php echo e(count($etablissement)); ?></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Effectif Garçons</div>
                                    <div class="font-size-h2 font-w400 text-dark"><?php echo e(($efGarcon)); ?></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Effectif Filles</div>
                                    <div class="font-size-h2 font-w400 text-dark"><?php echo e(($efFille)); ?></div>
                                </div>
                            </a>
                        </div>
                    </div>
         </div>
       <!-- END Stats -->

  <div class="ml-5">
   <img src="<?php echo e(asset('template/img/cartes/senegal.gif')); ?>" alt="dkr" usemap="#carte_senegal" class="ml-7 mb-5 mt-6" />
  </div>


  <map name="carte_senegal"  >
		<area shape="poly" name=area1 coords="0,159,11,148,43,149,67,180,30,202,3,201" title="23"alt="Dakar"href="/EFPT.departement/1" >
		<area shape="poly" name=area1 coords="47,127,97,131,101,151,74,186,55,188,38,154"   title="17"  alt="Thiés" href="/EFPT.departement/2" >
		<area shape="poly" name=area1 coords="157,73,263,71,286,113,240,179,153,164,122,120"  title="6"   alt="Louga" href="/EFPT.departement/3" >
		<area shape="rect" name=area1 coords="179,15,307,74"   title="7"   alt="Saint-Louis"  href="/EFPT.departement/5" >
		<area shape="rect" name=area1 coords="292,93,429,170"  title="6"   alt="Matam"    href="/EFPT.departement/11" >
		<area shape="rect" name=area1 coords="337,199,492,272" title="9"   alt="Tamba"    href="/EFPT.departement/12">
		<area shape="rect" name=area1 coords="387,305,518,382" title="3"   alt="Kédougou" href="/EFPT.departement/14" >
		<area shape="rect" name=area1 coords="230,291,354,357" title="7"   alt="Kolda"    href="/EFPT.departement/13" >
		<area shape="rect" name=area1 coords="152,316,219,371" title="3"   alt="Sedhiou"  href="/EFPT.departement/10" >
		<area shape="rect" name=area1 coords="66,315,151,376"  title="13"  alt="Ziguinchor"href="/EFPT.departement/9" >
		<area shape="rect" name=area1 coords="134,247,213,280" title="6"   alt="Kaolack"   href="/EFPT.departement/6" >
		<area shape="rect" name=area1 coords="189,190,318,249" title="4"   alt="Kaffrine"  href="/EFPT.departement/8" >
		<area shape="rect" name=area1 coords="75,188,169,228"  title="16"  alt="Fatick"   href="/EFPT.departement/7" >
  <area shape="rect" name=area1 coords="104,155,195,183" title="9"   alt="Diourbel" href="/EFPT.departement/4" >
</map>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\GestionProgramme\resources\views/EFPT/show.blade.php ENDPATH**/ ?>