	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			<!--div class="nav-right"-->
			<div class="nav-right">


			</div>
			<ul class="main-menu">
				<li class="<?php echo e(Request::segment(1) === 'acceuil' ? 'active' : null); ?>"><a href="/acceuil">Accueil</a></li>


				<li class="<?php echo e(Request::segment(1) === 'programme.programmeProf' ? 'active' : null); ?>"><a href="/programme.programmeProf">Programmes</a></li>

				<li class="<?php echo e(Request::segment(1) === 'EFPT.show' ? 'active' : null); ?>"><a href="EFPT.show">EFPT</a></li>
				<li class="<?php echo e(Request::segment(1) === 'projetList' ? 'active' : null); ?>"><a href="<?php echo e(route('projets.list')); ?>">Projets</a></li>

				<li class="<?php echo e(Request::segment(1) === 'documents.documents' ? 'active' : null); ?>"><a href="/documents.documents">DOCUMENTATION</a></li>



				<?php if(Auth::guard('utilisateur')->user()): ?>;
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						<?php echo e(Auth::guard('utilisateur')->user()->nom); ?> <span class="caret"></span>
					</a>


					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item  text-dark" href="<?php echo e(route('UtilisateurProgramme')); ?>">
							<?php echo e(__('Mes programmes demandés')); ?>

						</a>
						<a class="dropdown-item  text-dark" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
							<?php echo e(__('Deconnexion')); ?>

						</a>
						<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
							<?php echo csrf_field(); ?>
						</form>
					</div>
				</li>
				<?php endif; ?>

				<!-- <?php if(auth()->guard()->check()): ?>
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						<?php echo e(Auth::user()->name); ?> <span class="caret"></span>
					</a>


					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item  text-dark" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
							<?php echo e(__('Deconnection')); ?>

						</a>
						<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
							<?php echo csrf_field(); ?>
						</form>
					</div>
				</li>
				<?php endif; ?> -->



			</ul>
		</div>
	</nav>
	<!-- Header section end --><?php /**PATH C:\wamp64\www\GestionProgramme (8)\GestionProgramme\resources\views/inc/navbar.blade.php ENDPATH**/ ?>