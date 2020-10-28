


  <?php $__env->startSection('content'); ?>
    <!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			<!--div class="nav-right"-->
			<div class="nav-right">
				<!--a class="main-menu" href="connexion.php">Se connecter?</a-->
				<!--a href=""><i class="fa fa-shopping-cart"></i></a-->

			</div>
			<ul class="main-menu">
				<li class="active"><a href="/acceuil">Accueil</a></li>
				<li class="nav-item dropdown" style="margin-left: 5px">
					<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Programmes
					</a>
					<div class="dropdown-menu" style="background-color: #020031;">
						<a class="dropdown-item" href="programme.Technique" style="max-height: 5px">Techniques</a>
						<hr style="background-color: orange;max-height: 2px">
						<a class="dropdown-item" href="programme.programmeProf" style="max-height: 5px">Professionnels</a>

					</div>
				</li>
				<li><a href="EFPT.departement">EFPT</a></li>
				<li><a href=""> Projets</a></li>
					<li><a href="documents.documents">DOCUMENTATION</a></li>
				<li class="nav-item dropdown" style="margin-left: 5px">
					<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Partenaires
					</a>
					<div class="dropdown-menu" style="background-color: #020031;">
						<a class="dropdown-item" href="" style="max-height: 5px">Collectivités</a>
						<hr style="background-color: orange;max-height: 2px">
						<a class="dropdown-item" href="" style="max-height: 5px">Ministéres</a>
						<hr style="background-color: orange;max-height: 2px">
						<a class="dropdown-item" href="" style="max-height: 5px">PTF</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	<!-- Header section end -->


  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionProgramme\resources\views/pages/aboutus.blade.php ENDPATH**/ ?>