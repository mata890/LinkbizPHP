<?php include("enteteConnect.php")?>
<div id='main' role='main'>
	<div id='main-content-header'>
		<div class='container'>
			<div class='row'>
				<div class='col-sm-12'>
					<h1 class='title'>Ajouter un projet</h1>
					<ol class='breadcrumb'>
						<li><i class='fa-icon-file-text'></i></li>
						<li>Remplissez le formulaire pour ajouter un nouveau projet</li>

					</ol>
				</div>
			</div>
		</div>
	</div>
	<div id='main-content'>
		<div class='container'>
			<div class='row'>
				<div class="alert alert-info fade in">
					<p>
						<i class="fa-icon-warning-sign"> Ce formulaire vous permet de
							détaillez votre projet. Il est nécessaire que vous preniez un peu
							de votre temps pour définir votre projet pour permettre aux
							investisseurs d’avoir une vision globale de votre projet.</i>
					</p>
				</div>
				<div class="panel panel-bordered panel-contrast mg-b">
					<div class="panel-heading">
						<i class="fa-icon-info"></i> Détaillez votre annonce afin de
						fournir le maximum d’information aux investisseurs potentiels
					</div>
					<div class="panel-body">
						<form action='profileinvestisseur.php'
							class='form form-validation' method='get'>
							<div class='row'>
								<div class='col-sm-7 col-sm-offset-1'>
									<div class='form-group'>
										<label>Titre de l'annonce</label> <input class="form-control"
											id="input-text" placeholder="" type="text">
									</div>
								</div>

								<div class='col-sm-3 col-sm-offset-0'>
									<div class="form-group">
										<label>Domaine d'activité</label> <select class="form-control"
											id="input-select">
											<option></option>
											<option>Tous les secteurs</option>
											<option>Administration</option>
											<option>Informatique</option>
											<option>Commerce</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class='col-sm-3 col-sm-offset-1'>
									<div class="form-group">
										<label>Pays</label> <select class="form-control"
											id="input-select">
											<option></option>
											<option>Sénégal</option>
											<option>Mali</option>
											<option>Gambie</option>
											<option>Mauritanie</option>
										</select>
									</div>
								</div>


								<div class='col-sm-3 col-sm-offset-0'>
									<div class="form-group">
										<label>Rôle de l'investisseur</label> <select
											class="form-control" id="input-select">
											<option></option>
											<option>N'importe lequel</option>
											<option>Financement</option>
											<option>Actif</option>
											<option>Passif</option>
										</select>
									</div>
								</div>
								<div class='col-sm-3 col-sm-offset-1'>
									<div class="form-group">
										<label>Etape de l'entreprise</label> <select
											class="form-control" id="input-select">
											<option></option>
											<option>Création de l'entreprise</option>
											<option>Entreprise non créé</option>
											<option>Entreprise de moins de 3ans</option>
											<option>Entreprise de moins de 3ans</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class='col-sm-3 col-sm-offset-1'>
									<div class="form-group">
										<label>Raison du financement</label> <select
											class="form-control" id="input-select">
											<option></option>
											<option>Acquisition</option>
											<option>Ventes Marketing</option>
											<option>Immobilier</option>
											<option>Achat équipement</option>
											<option>Refinancement</option>
										</select>
									</div>
								</div>
								<div class='col-sm-3 col-sm-offset-0'>
									<div class="form-group">
										<label>Phase du projet</label> <select class="form-control"
											id="input-select">
											<option></option>
											<option>Pré-démarrage</option>
											<option>Produit fini</option>
											<option>Réalisation des ventes</option>
											<option>Mauritanie</option>
										</select>
									</div>
								</div>
								<div class='col-sm-3 col-sm-offset-1'>
									<div class='form-group'>
										<label>Investissement souhaité</label>
										<div class="input-group">
											<input class="form-control input-lg text-right"
												id="input-money" type="text"> <span
												class="input-group-addon">en FCFA</span>
										</div>
									</div>
								</div>

								<div class='col-sm-5 col-sm-offset-1'>
									<div class="form-group">
										<label>Description</label>
										<textarea class="form-control" id="input-textarea"
											placeholder="Ne dépasser pas 50 caractères" rows="4"></textarea>
									</div>
								</div>

								<div class='col-sm-5 col-sm-offset-0'>
									<div class="form-group">
										<label>Présentation de l'offre Produits/Services</label>
										<textarea class="form-control" id="input-textarea"
											placeholder="Ne dépasser pas 50 caractères" rows="4"></textarea>
									</div>
								</div>
							</div>


							<div class="row">

								<div class='col-sm-5 col-sm-offset-1'>
									<div class="form-group">
										<label>Marché/Concurrence/Stratégie</label>
										<textarea class="form-control" id="input-textarea"
											placeholder="Ne dépasser pas 50 caractères" rows="5"></textarea>
									</div>
								</div>
								<div class='col-sm-5 col-sm-offset-0'>
									<div class="form-group">
										<label>Management RH</label>
										<textarea class="form-control" id="input-textarea"
											placeholder="Ne dépasser pas 50 caractères" rows="5"></textarea>
									</div>
								</div>

							</div>

							<div class="row">
								<div class='col-sm-3 col-sm-offset-1'>
									<div class='form-group'>
										<label>CA Prévisionnel</label>
										<div class="input-group">
											<input class="form-control input-lg text-right"
												id="input-money" type="text"> <span
												class="input-group-addon">FCFA</span>
										</div>
									</div>
								</div>


								<div class='col-sm-3 col-sm-offset-0'>
									<div class='form-group'>
										<label>CA Historique</label>
										<div class="input-group">
											<input class="form-control input-lg text-right"
												id="input-money" type="text"> <span
												class="input-group-addon">FCFA</span>
										</div>
									</div>
								</div>

								<div class='col-sm-3 col-sm-offset-1'>
									<div class='form-group'>
										<label>Ajouter une image ou un logo</label> <br /> <input
											class="" id="input-text" placeholder="" type="file">

									</div>
								</div>
							</div>
							<br />
							<div class='row'>
								<div class='col-sm-2 col-sm-offset-5'>
									<button class='btn btn-contrast btn-block' type='submit'>
										Soumettre</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
        <?php include("footer.php")?>