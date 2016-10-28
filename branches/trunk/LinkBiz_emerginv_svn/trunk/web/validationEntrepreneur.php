<?php

include ("entete_entrepreneur.php");
?>
<div id='main' role='main'>
	<div id='main-content-header'>
		<div class='container'>
			<div class='row'>
				<div class='col-sm-12'>
					<h1 class='title'>
						Entrepreneur <small></small>
					</h1>
				</div>
			</div>
		</div>
	</div>
	<div id='main-content'>
		<div class='container'>
			<div class='row'>
				<div class='col-sm-12'>
					<div class='page-header page-header-with-icon no-mg-t'>
						<i class='fa-icon-code-fork'></i>
						<h2>Validation de l'inscription</h2>
					</div>
					<div class='row'>
						<a href="formAddProject.php">Ajouter projet</a><a
							href="detailprojet.php">Detail projet</a>
						<div class="alert alert-success fade in">
							<button aria-hidden="true" class="close" data-dismiss="alert"
								type="button">×</button>
							<strong>Enregitrement réussi!</strong> <a class="alert-link"
								href="index.php">Cliquez ici pour revenir à l'accueil...</a> Un
							mail de validation vient de vous être envoyé.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class='fade' id='scroll-to-top'>
		<i class='fa-icon-chevron-up'></i>
	</div>
</div>
<?php

include ("footer.php");
?>
