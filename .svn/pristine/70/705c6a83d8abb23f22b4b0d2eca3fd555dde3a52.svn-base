 <?php
	include ("entete_connexion.php");
    
    include ("scripts/connexionform_post.php");
   // include ("scripts/session.php");

	?>




<div id='main' role='main'>
	<div id='main-content-header'>
		<div class='container'>
			<div class='row'>
				<div class='col-sm-12'>
					<h1 class='title'>Envoie SMS</h1>
					<ol class='breadcrumb'>
						<li><i class='fa-icon-unlock'></i></li>

						<li class='active'>Envoyer un sms</li>
					</ol>

				</div>
			</div>
		</div>
	</div>
	<div id='main-content'>
		<div class='container'>
			<div class='row'>
          <?php include ("infoleft.php")?>
		  
		  <div class="panel-heading">
		    <div class='col-md-6 col-md-offset-0 col-sm-0 col-sm-offset-0'>
            
                <div class='page-header page-header-with-icon'>
                  <i class='fa-icon-signin '></i>
                  <h2>Connexion</h2>
                </div>
               <?php
               if (isset($_SESSION['erreurCon'])==1){ // vérification sur la session authentification (la session est elle enregistrée ?)
                // ici les éventuelles actions en cas de réussite de la connexion
                echo  ' <div class="alert alert-danger fade in">
                      <strong>Error Message!</strong>
                      <button aria-hidden="true" class="close" data-dismiss="alert" type="button">×</button>
                      Attention le login ou le mot de passe n\'est pas correct
                    </div>';

}
                ?>
                <form action='scripts/connexionform_post.php' class='form form-validation' method='post'>
                  <div class='row'>
                    <div class='col-sm-8'>
                      <div class='form-group control-group'>
                        <input class='form-control' data-rule-required='true' id='tel' name='tel' placeholder="Téléphone" type='text'>
                      </div>
                    </div>
                    <div class='col-sm-8'>
                      <div class='form-group control-group'>
                        <input class='form-control'  data-rule-required='true' id='texte' name='texte' placeholder='Contenu sms' type='text'>
                      </div>
                    </div>
                  </div>
                  
                  <div class='row'>
                    <div class='col-sm-5'>
                      <button class='btn btn-contrast btn-block' type='submit'>
                        Envoyer
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
		  
		  
		  </div>
            </div>
                </div>
               
 <?php
	include ("footer.php");
	?>
