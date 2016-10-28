<?php
session_start();
include ("entete_investisseur.php");
?>
<div id='main' role='main'>
	<div id='main-content-header'>
		<div class='container'>
			<div class='row'>
				<div class='col-sm-12'>
					<h1 class='title'>
						Investisseur <small></small>
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
    					<div class="alert alert-success fade in">
							<button aria-hidden="true" class="close" data-dismiss="alert"
								type="button">×</button>
							<strong>Enregitrement réussi! 
								<p>Bonjour
								<?php
                                
                                echo $_SESSION['InvestisseurNom'];
                                ?>
                                <br\>
                                 <?php
                                echo $_SESSION['InvestisseurPrenom'];
                                //echo $_SESSION['EntrepreneurId'];
								?> 
							 	!</p></strong> <a class="alert-link"
								href="index.php">Cliquez ici pour revenir à l'accueil...</a> Un
							mail de validation vient de vous être envoyé.Veuillez consulter votre mail pour activer votre compte
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
