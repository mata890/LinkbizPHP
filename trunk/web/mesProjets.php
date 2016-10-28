<?php //include("enteteConnect.php");
session_start (); // On relaye la session
include('./scripts/Database.class.php');
//include('./EnvoiMail.class.php');
require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Projet.php");
if (isset($_SESSION['idUser'])){
 if($_SESSION['privilege']==1){
       include ("enteteConnect.php"); 
    }else if ($_SESSION['privilege']==2) {
        include ("enteteConnectIn.php"); 
    }else{
        include ("enteteConnectAD.php");
    }
}else{
  include ("entete_annonces.php");  
}

?>
<div id='main' role='main'>
    <div id='main-content-header'>
		<div class='container'>
			<div class='row'>
				<div class='col-sm-12'>
					<h1 class='title'>Mes projets</h1>
					<ol class='breadcrumb'>
						<li><i class='fa-icon-file-text'></i></li>
                         <?php if (isset($_SESSION['privilege']) & ($_SESSION['privilege']==1)){?>
						<li>Les projets que j'ai soumis</li>
                        <?php }  else {?> <li>Les projets que j'ai soutenus</li> <?php }?>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div id='main-content'>
		<div class='container'>
		 <!--	<div class='row'>
                               <div class='panel-body'>
    								<h3 class='panel-title'><?php echo $_SESSION['prenom']." ".$_SESSION['nom'] ?></h3>
									<p align="left"><?php echo $_SESSION['profession']?></p>
									<p align="left">Dakar-Sénégal, BP 934</p>
									<p align="left"><?php echo $_SESSION['email']?></p>
								</div>
				<div class="alert alert-info fade in">
				
				</div>-->
                <!--  <div class='row'>
        			<div class='col-sm-12'>
						<form method="post" name="domain_form" action="mesProjets.php">
							<fieldset>

								<div class="form-group">
									<label class="col-md-3 control-label"
										style="font-size: 21px; margin-top: 13px;">Domaine</label>
									<div class="col-md-5">
									<!--	<select class="form-control" name="domaine" id="input-select" onchange="document.domain_form.submit();">
											<option value="sante"></option>
                                            <option value="sante">Sante</option>
											<option value="agriculture">agriculture</option>
											<option value="elevage">elevage</option>
											<option value="business">business development</option>
										</select>-->
                                       <!-- <label>Domaine d'activité</label> -->
                                        <!--    <select class="form-control" name="domaine"	id="input-select" onchange="document.domain_form.submit();">
                                            <option value="All">Tous les domaines</option>
                                            <option value="Commerce de détail">Commerce de détail</option> 
                    		            	<option value="Administrations">Administrations</option> 
                                        	<option value="Agences de communication">Agences de communication</option> 
                                        	<option value="Agriculture">Agriculture</option> 
                                        	<option value="Alimentation">Alimentation</option> 
                                        	<option value="Architecture">Architecture</option> 
                                        	<option value="Art, Désign">Art, Désign</option> 
                                        	<option value="Audiovisuel, Spectacle">Audiovisuel, Spectacle</option> 
                                        	<option value="Audit, Gestion">Audit, Gestion</option> 
                                        	<option value="Automobile">Automobile</option> 
                                        	<option value="Batiment et travaux publics">Batiment et travaux publics</option> 
                                        	<option value="Biotechnologie">Biotechnologie</option> 
                                        	<option value="Chimie, Pharmacie">Chimie, Pharmacie</option> 
                                        	<option value="Commerce de détail">Commerce de détail</option> 
                                        	<option value="Construction Aéronautique, Férroviaire, Navale">Construction Aéronautique, Férroviaire, Navale</option> 
                                        	<option value="Culture, Artisanat d'Art">Culture, Artisanat d'Art</option> 
                                        	<option value="Distribution Spécialisée">Distribution Spécialisée</option> 
                                        	<option value="Droit, Justice">Droit, Justice</option> 
                                        	<option value="Electronique, Electricité">Electronique, Electricité</option> 
                                        	<option value="Energie">Energie</option> 
                                        	<option value="Enseignement, Formation">Enseignement, Formation</option> 
                                        	<option value="Environnement">Environnement</option> 
                                        	<option value="Grande distribution">Grande distribution</option> 
                                        	<option value="Hotellerie, Restauration">Hotellerie, Restauration</option> 
                                        	<option value="Immobilier">Immobilier</option> 
                                        	<option value="Industrie de la Sécurité">Industrie de la Sécurité</option> 
                                        	<option value="Industrie Mécanique">Industrie Mécanique</option> 
                                        	<option value="Informatique & Télécoms">Informatique & Télécoms</option> 
                                        	<option value="Maintenance, Entretien">Maintenance, Entretien</option> 
                                        	<option value="Mode, Industrie Textile">Mode, Industrie Textile</option> 
                                        	<option value="Presse et médias">Presse et médias</option> 
                                        	<option value="Recherche & Développement">Recherche & Développement</option> 
                                        	<option value="Santé">Santé</option> 
                                        	<option value="Services Financiers">Services Financiers</option> 
                                        	<option value="Social network">Social network</option> 
                                        	<option value="Sociale">Sociale</option> 
                                        	<option value="Sport, Loisirs">Sport, Loisirs</option> 
                                        	<option value="Tourisme">Tourisme</option> 
                                        	<option value="Transport et logistique">Transport et logistique</option> 
                                        	<option value="ecommerce">e-commerce</option>
										</select
									</div>
								</div>
							</fieldset>
						</form>
					</div>
                
					<div class='page-header page-header-with-icon'>
						<i class='fa-icon-list'></i>
					</div> -->
                   
					<div class='row panels'>
                        <?php
                        $projet=new Projet();
                        if(isset($_SESSION['privilege']) && $_SESSION['privilege']==1){
                        
                        $projets=$projet->selectProjetbyuser($_SESSION['idUser']);
                            if(isset($_POST['domaine'])) {
                                if($_POST['domaine']=="All"){
                                    $projets=$projet->selectProjetbyuser($_SESSION['idUser']);
                                    
                                }else{
                                  $projets=$projet->selectProjetbyuserbydomaine($_SESSION['idUser'],$_POST['domaine']);
                                   
                                }
                            }
                            
                        foreach($projets as $key => $proj) {?>
						<div class='col-sm-3 panel-item'>
							<div
								class='panel panel-circle-contrast panel-contrast pricing-table'>
								<div class='panel-icon'>
									<i class='fa-icon-user'></i>
								</div>
								<div class='panel-body'>
									<h3 class='panel-title'>Projet <?php echo $proj->Projet?></h3>
									<h5><?php echo $proj->Description?></h5>
                                    <!-- Passage des caractéristique du projet en paramétre-->
                                    <a href="lirelasuiteprojet.php?projet=<?php echo $proj->Projet?>&desc=<?php echo $proj->Description?>
                                    &dom=<?php echo $proj->Domaine?>&cap=<?php echo $proj->CaPrevision?>&phase=<?php echo $proj->Phase?>&ri=<?php echo $proj->RoleInvestisseur?>
                                    &etape=<?php echo $proj->EtapeEntreprise?>">lire la suite</a>

								<h6>Co�t: <?php  echo $proj->InvestSouhaite?> F CFA</h6> <br /> <br />
                                    
									
								</div>
							</div>
						</div>
                        <?php } }else{
                        
                        $projets=$projet->selectProjetSoutenu($_SESSION['idUser']);
                         //if($projets=!null) { 
                         foreach($projets as $key => $proj) {?>
                    <div class='col-sm-6 icon-box'>
                      <div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
                        <i class='fa-icon-chevron-sign-right text-white'></i>
                      </div>
                      <div class='content'>
                        <h3 class='title'>Projet <?php echo $proj->Projet?></h3>
                        <p><?php echo $proj->Description; ?></p>
                        <a href="lirelasuiteinvest.php?projet=<?php echo $proj->Projet?>&desc=<?php echo $proj->Description?>&user=<?php echo $proj->idUser?>&idproj=<?php echo $proj->idProjet?>
                                    &dom=<?php echo $proj->Domaine?>&cap=<?php echo $proj->CaPrevision?>&phase=<?php echo $proj->Phase?>&ri=<?php echo $proj->RoleInvestisseur?>
                                    &etape=<?php echo $proj->EtapeEntreprise?>&etat=<?php echo $proj->Etat?>">lire la suite</a>
                      </div>
                    </div>
						
                          <?php } } /*else {?>
                          <h3 class='title'>Vous ne soutenez encore aucun projet. Cliquer <a href="profileInvestisseur.php#projet">
                          ici</a> pour voir les projets</h3>
						<?php }}*/ ?>
						<br />
						<br />

						<div class='row'></div>
					</div>

					<div class='col-sm-12'>

						<!--<div class='form-actions mg-t-lg'>
							<div class='row'>
								<div class='col-md-9 col-md-offset-3'>
									<a class='btn btn-contrast' href='listeAnnonce.php'> <i
										class='icon-save'></i> Plus d'annonces, cliquez ici
									</a>
								</div>
							</div>
						</div>-->
					</div>
				</div>
				
			</div>
		</div>
	</div>
        <?php include("footer.php")?>