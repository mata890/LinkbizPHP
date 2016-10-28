 <?php
 session_start();
  include ('scripts/connexionTest.php');
include('./scripts/Database.class.php');
//include('./EnvoiMail.class.php');
require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Projet.php");  
if (isset($_SESSION['idUser'])){
include ("enteteConnect.php");
}else{
  include ("entete.php");  
}
 //if(isset($_POST['projet']))
// unset($_POST['projet']);
	?>




<div id='main' role='main'>
	<div id='main-content-header'>
		<div class='container'>
			<div class='row'>
				<div class='col-sm-12'>
					<h1 class='title'>Paiement</h1>
					<ol class='breadcrumb'>
						<li><i class='fa-icon-money'></i></li>

						<li class='active'>Choisir un pack</li>
					</ol>

				</div>
			</div>
		</div>
	</div>
    <div id="main-content">
		<div class="container">
<div class="col-em-10 row">
              <?php
             
               if(isset($_SESSION['envoi']) && $_SESSION['envoi']=="ok"){?>
                    <div class="alert alert-info fade in">
                    <p>
						<i class="fa-icon-warning-sign">Merci de choisir notre plateforme LinkBiz. Un SMS vous sera envoyé.
                   Veuillez valider votre achat du pack   <?php echo $_SESSION['pack']; ?>  dès réception.</i>
					</p>
				</div>
               <?php }else{}?>
               
               <div class='row'>
    				<div class='col-sm-4 col-md-3'>
                    
						<form method="post" name="domain_form" action="paiement.php">
							<fieldset><label>Mes Projets</label>
                        <select class="form-control" name="projet"    id="input-select" onchange="document.domain_form.submit();">
                        <option  value=""> </option>
									<?php $projet=new Projet();
                        $projets=$projet->selectProjetbyuser($_SESSION['idUser']);
                             
                        foreach($projets as $key => $proj) {?>                                           
                                            <option  value="<?php echo $proj->idProjet;?>"><?php echo $proj->Projet ?><?php $_SESSION['idpack']= $proj->idPack; $_SESSION['idProjet']=$proj->idProjet; ?></option> 
                    		             <?php } ?>	
										</select>
                                       
								</fieldset>
						</form>
				</div>
                    
                </div>
                
                <?php if(isset($_POST['projet'])){?>
                <div class="row panels">
                  <div class="col-sm-3 panel-item">
                    <div class="panel panel-circle-contrast panel-light pricing-table">
                     <div class="panel-group accordion accordion-bordered" id="accordion2">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-parent="#accordion2" data-toggle="collapse" href="#accordion2-item-1">
                              Standard
                            </a>
                          </h4>
                        </div>
                        <div class="panel-collapse collapse" id="accordion2-item-1" style="height: 0px;">
                          <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu justo vitae odio rhoncus pulvinar. Morbi ac congue orci. Nulla tristique ultrices purus vel egestas. Aliquam viverra volutpat facilisis. Vestibulum ante ipsum primis dapibus.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-parent="#accordion2" data-toggle="collapse" href="#accordion2-item-2">
                              Premiun
                            </a>
                          </h4>
                        </div>
                        <div class="panel-collapse collapse" id="accordion2-item-2">
                          <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu justo vitae odio rhoncus pulvinar. Morbi ac congue orci. Nulla tristique ultrices purus vel egestas. Aliquam viverra volutpat facilisis. Vestibulum ante ipsum primis dapibus.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-parent="#accordion2" data-toggle="collapse" href="#accordion2-item-3">
                              Illimité
                            </a>
                          </h4>
                        </div>
                        <div class="panel-collapse collapse" id="accordion2-item-3">
                          <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu justo vitae odio rhoncus pulvinar. Morbi ac congue orci. Nulla tristique ultrices purus vel egestas. Aliquam viverra volutpat facilisis. Vestibulum ante ipsum primis dapibus.
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="col-sm-3 panel-item">
                    <div class="panel panel-circle-contrast panel-contrast pricing-table">
                      <div class="panel-icon">
                        <i class="fa-icon-star"></i>
                      </div>
                      <div class="panel-body">
                        <h3 class="panel-title">Basic</h3>
                        <h4 class="price">
                          <span class="currency">
                            FCFA
                          </span>
                          500
                        </h4>
                        <p class="period">/ par mois</p>
                        <ul class="list-unstyled">
                          <li>
                            <strong></strong>
                           MON ANNONCE EN LIGNE
                          </li>
                          <li>
                            <strong></strong>
                            STATISTIQUE DE VOTRE PROJET
                          </li>
                          <li>
                            <strong></strong>
                            
                          </li>
                          <li>
                            <strong></strong>
                            MON PROJET ACTIF 60 JOURS
                          </li>
                        </ul>
                        <form  action="scripts/paiement_post.php" method="POST">
                            <input type="hidden" name="idPack" value="1">
                            <input type="hidden" name="pack" value="standard">
                            <input type="hidden" name="duree" value="60">
                            <input type="hidden" name="prix" value="500">
                            <input type="submit" name="" value="Acheter" class="<?php if (isset( $_SESSION['idpack'])& $_SESSION['idpack']==1){ ?>
                                     btn btn-contrast no-mg-b <?php }else{ ?> btn btn-contrast enabled no-mg-b <?php } ?> ">
                        </form>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 panel-item">
                    <div class="panel panel-circle-contrast panel-light pricing-table">
                      <div class="panel-icon">
                        <i class="fa-icon-plane"></i>
                      </div>
                      <div class="panel-body">
                        <h3 class="panel-title">Business</h3>
                        <h4 class="price">
                          <span class="currency">
                            FCFA
                          </span>
                          1000
                        </h4>
                        <p class="period">/ par mois</p>
                        <ul class="list-unstyled">
                          <li>
                            <strong></strong>
                            MON ANNONCE EN LIGNE
                          </li>
                          <li>
                            <strong></strong>
                            ANNONCE ENVOYÉ PAR EMAIL AUX INVESTISSEURS
                          </li>
                          <li>
                            <strong></strong>
                            VOS COORDONNÉES DÉTAILLÉS À TOUS LES INVESTISSEURS
                          </li>
                          <li>
                            <strong></strong>
                            MON PROJET ACTIF 90 JOURS
                          </li>
                        </ul>
                        <form  action="scripts/paiement_post.php" method="POST">
                            <input type="hidden" name="idPack" value="2">
                            <input type="hidden" name="pack" value="premiun">
                            <input type="hidden" name="duree" value="90">
                            <input type="hidden" name="prix" value="1000">
                            <input type="submit" name="" value="Acheter" class="<?php if (isset( $_SESSION['idpack'])& $_SESSION['idpack']==1){ ?>
                                     btn btn-contrast no-mg-b <?php }else{ ?> btn btn-contrast enabled no-mg-b <?php } ?>">
                        </form>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-sm-3 panel-item">
                    <div class="panel panel-circle-contrast panel-light pricing-table">
                      <div class="panel-icon">
                        <i class="fa-icon-rocket"></i>
                      </div>
                      <div class="panel-body">
                        <h3 class="panel-title">Executive</h3>
                        <h4 class="price">
                          <span class="currency">
                            FCFA
                          </span>
                          1500
                        </h4>
                        <p class="period">/ par mois</p>
                        <ul class="list-unstyled">
                             <li>
                                <strong></strong>
                                MON ANNONCE EN LIGNE
                              </li>
                              <li>
                                <strong></strong>
                                ANNONCE ENVOYÉ PAR EMAIL AUX INVESTISSEURS
                              </li>
                              <li>
                                <strong></strong>
                                VOS COORDONNÉES DÉTAILLÉS À TOUS LES INVESTISSEURS
                              </li>
                              <li>
                                <strong></strong>
                                ANNONCE AFFICHÉE DANS LES COMPTES INVESTISSEURS
                              </li>
                              <li>
                                <strong></strong>
                                MON PROJET ACTIF 90 JOURS
                              </li>
                            </ul>
                        <form  action="scripts/paiement_post.php" method="POST">
                            <input type="hidden" name="idPack" value="3">
                            <input type="hidden" name="pack" value="illimite">
                            <input type="hidden" name="duree" value="120">
                            <input type="hidden" name="prix" value="1500">
                            <input type="submit" name="" value="Acheter" class="<?php if (isset( $_SESSION['idpack'])& $_SESSION['idpack']==1){ ?>
                                     btn btn-contrast no-mg-b <?php }else{ ?> btn btn-contrast enabled no-mg-b <?php } ?>">
                        </form>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <hr class="hr-half hr-invisible">
                  </div>
                </div>
              </div>
            </div>
            </div>
             <?php }else{}?> 
            </div>
          </div>
            </div>
            </div>
 <?php
 if(isset($_POST['projet']))
 unset($_POST['projet']);
 if (isset($_SESSION['envoi']))
 unset($_SESSION['envoi']);
	include ("footer.php");
	?>