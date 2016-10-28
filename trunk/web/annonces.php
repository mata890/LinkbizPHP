<?php
session_start();
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
					<h1 class='title'>Nos annonces</h1>
					<ol class='breadcrumb'>
						<li><i class='fa-icon-search'></i></li>

						<li class='active'>Rechercher des annonces</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div id='main-content'>
		<div class='container'>
			<div class='row'>

				<div class='row'>
					<div class='col-sm-12'>
						<form method="post" name="domain_form" action="annonces.php">
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
                                            <select class="form-control" name="domaine"	id="input-select" onchange="document.domain_form.submit();">
                                            <option value="All">Tous les domaines</option> 
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
                                        	<option value="ecommerce">ecommerce</option>
										</select>
									</div>
								</div>
							</fieldset>
						</form>


					</div>
					<div class='page-header page-header-with-icon'>
						<i class='fa-icon-list'></i>
					</div>
					<div class='row panels'>
                        <?php $projet=new Projet();
                        $projets=$projet->selectProjets();
                            if(isset($_POST['domaine'])) {
                                if($_POST['domaine']=="All"){
                                    $projets=$projet->selectProjets();
                                    
                                }else{
                                  $projets=$projet->selectProjetbydomaine($_POST['domaine']);
                                   
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
									<h3 class='panel-title'>Projet <?php $_SESSION['idUserProj']=$proj->idUser; echo $proj->Projet?></h3>
									<h5><?php echo $proj->Description?></h5>
                                    <!-- Passage des caractéristique du projet en paramétre-->
                                    <a href="lirelasuiteprojet.php?projet=<?php echo $proj->Projet?>&desc=<?php echo $proj->Description?>
                                    &dom=<?php echo $proj->Domaine?>&cap=<?php echo $proj->CaPrevision?>&phase=<?php echo $proj->Phase?>&ri=<?php echo $proj->RoleInvestisseur?>
                                    &etape=<?php echo $proj->EtapeEntreprise?>">lire la suite</a>

								<h6>Coût: <?php  echo $proj->InvestSouhaite?> F CFA</h6> <br /> <br />
                                    
									
								</div>
							</div>
						</div>
                        <?php }?>
						<!--<div class='col-sm-3 panel-item'>
							<div
								class='panel panel-circle-contrast panel-contrast pricing-table'>
								<div class='panel-icon'>
									<i class='fa-icon-user'></i>
								</div>
								<div class='panel-body'>
									<h3 class='panel-title'>Projet2</h3>
									<h4>Libellé: urgence</h4>
									Reprise entreprise transport Ambulances suite ...<br />
									<a href="#">lire la suite</a>
								</div>
							</div>
						</div>
						<div class='col-sm-3 panel-item'>
							<div
								class='panel panel-circle-contrast panel-contrast pricing-table'>
								<div class='panel-icon'>
									<i class='fa-icon-user'></i>
								</div>
								<div class='panel-body'>
									<h3 class='panel-title'>Projet 3</h3>
									<h4>Libellé: sama tol</h4>
									Mettre mon invention sur le marché pour les plantes...<br />
									<a href="#">lire la suite</a>
								</div>
							</div>
						</div>
						<div class='col-sm-3 panel-item'>
							<div
								class='panel panel-circle-contrast panel-contrast pricing-table'>
								<div class='panel-icon'>
									<i class='fa-icon-user'></i>
								</div>
								<div class='panel-body'>
									<h3 class='panel-title'>Projet4</h3>
									<h4>Libellé:</h4>
									Mettre mon invention sur le marcher pour les plantes...<br />
									<a href="#">lire la suite</a>
								</div>
							</div>
						</div>-->
					</div>

					<div class='col-sm-12'>

						<div class='form-actions mg-t-lg'>
							<div class='row'>
								<div class='col-md-9 col-md-offset-3'>
									<a class='btn btn-contrast' href='listeAnnonce.php'> <i
										class='icon-save'></i> Plus d'annonces, cliquez ici
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class='col-sm-4 panel-item'>
			<div
				class='panel panel-bordered panel-contrast pricing-table pricing-table-solid'>


			</div>
		</div>

	</div>

</div>
</div>

</div>

</div>
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
