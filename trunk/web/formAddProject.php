<?php include("enteteConnect.php");
session_start (); // On relaye la session

?>
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
                                <!--<div class='panel-body'>
    								<h3 class='panel-title'><?php echo $_SESSION['prenom']." ".$_SESSION['nom'] ?></h3>
									<p align="left"><?php echo $_SESSION['profession']?></p>
									<p align="left">Dakar-Sénégal, BP 934</p>
									<p align="left"><?php echo $_SESSION['email']?></p>
								</div>-->
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
						<form action="scripts/projetform_post.php"
							class='form form-validation' method="POST">
							<div class='row'>
								<div class='col-sm-7 col-sm-offset-1'>
									<div class='form-group'>
										<label>Titre de l'annonce</label> <input class="form-control" name="projet"/>
									</div>
								</div>

								<div class='col-sm-3 col-sm-offset-0'>
									<div class="form-group">
										<label>Domaine d'activité</label> <select class="form-control" name="domaine"
											id="input-select">
                                            <option value="Tous les secteurs">Tous les secteurs</option> 
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
							</div>
							<div class="row">
								<div class='col-sm-3 col-sm-offset-1'>
									<div class="form-group">
										<label>Pays de l'annonce</label> <select class="form-control" name="pays"
											id="input-select">
											<option></option>
											 <option value="Senegal" selected="selected">Sénégal </option>
                                                <option value="Afghanistan">Afghanistan </option>
                                                <option value="Afrique_Centrale">Afrique_Centrale </option>
                                                <option value="Afrique_du_sud">Afrique_du_Sud </option> 
                                                <option value="Albanie">Albanie </option>
                                                <option value="Algerie">Algerie </option>
                                                <option value="Allemagne">Allemagne </option>
                                                <option value="Andorre">Andorre </option>
                                                <option value="Angola">Angola </option>
                                                <option value="Anguilla">Anguilla </option>
                                                <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                                                <option value="Argentine">Argentine </option>
                                                <option value="Armenie">Armenie </option> 
                                                <option value="Australie">Australie </option>
                                                <option value="Autriche">Autriche </option>
                                                <option value="Azerbaidjan">Azerbaidjan </option>
                                                <option value="Bahamas">Bahamas </option>
                                                <option value="Bangladesh">Bangladesh </option>
                                                <option value="Barbade">Barbade </option>
                                                <option value="Bahrein">Bahrein </option>
                                                <option value="Belgique">Belgique </option>
                                                <option value="Belize">Belize </option>
                                                <option value="Benin">Benin </option>
                                                <option value="Bermudes">Bermudes </option>
                                                <option value="Bielorussie">Bielorussie </option>
                                                <option value="Bolivie">Bolivie </option>
                                                <option value="Botswana">Botswana </option>
                                                <option value="Bhoutan">Bhoutan </option>
                                                <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                                                <option value="Bresil">Bresil </option>
                                                <option value="Brunei">Brunei </option>
                                                <option value="Bulgarie">Bulgarie </option>
                                                <option value="Burkina_Faso">Burkina_Faso </option>
                                                <option value="Burundi">Burundi </option>
                                                <option value="Caiman">Caiman </option>
                                                <option value="Cambodge">Cambodge </option>
                                                <option value="Cameroun">Cameroun </option>
                                                <option value="Canada">Canada </option>
                                                <option value="Canaries">Canaries </option>
                                                <option value="Cap_vert">Cap_Vert </option>
                                                <option value="Chili">Chili </option>
                                                <option value="Chine">Chine </option> 
                                                <option value="Chypre">Chypre </option> 
                                                <option value="Colombie">Colombie </option>
                                                <option value="Comores">Colombie </option>
                                                <option value="Congo">Congo </option>
                                                <option value="Congo_democratique">Congo_democratique </option>
                                                <option value="Cook">Cook </option>
                                                <option value="Coree_du_Nord">Coree_du_Nord </option>
                                                <option value="Coree_du_Sud">Coree_du_Sud </option>
                                                <option value="Costa_Rica">Costa_Rica </option>
                                                <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                                                <option value="Croatie">Croatie </option>
                                                <option value="Cuba">Cuba </option>
                                                <option value="Danemark">Danemark </option>
                                                <option value="Djibouti">Djibouti </option>
                                                <option value="Dominique">Dominique </option>
                                                <option value="Egypte">Egypte </option> 
                                                <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                                                <option value="Equateur">Equateur </option>
                                                <option value="Erythree">Erythree </option>
                                                <option value="Espagne">Espagne </option>
                                                <option value="Estonie">Estonie </option>
                                                <option value="Etats_Unis">Etats_Unis </option>
                                                <option value="Ethiopie">Ethiopie </option>
                                                <option value="Falkland">Falkland </option>
                                                <option value="Feroe">Feroe </option>
                                                <option value="Fidji">Fidji </option>
                                                <option value="Finlande">Finlande </option>
                                                <option value="France">France </option>
                                                <option value="Gabon">Gabon </option>
                                                <option value="Gambie">Gambie </option>
                                                <option value="Georgie">Georgie </option>
                                                <option value="Ghana">Ghana </option>
                                                <option value="Gibraltar">Gibraltar </option>
                                                <option value="Grece">Grece </option>
                                                <option value="Grenade">Grenade </option>
                                                <option value="Groenland">Groenland </option>
                                                <option value="Guadeloupe">Guadeloupe </option>
                                                <option value="Guam">Guam </option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernesey">Guernesey </option>
                                                <option value="Guinee">Guinee </option>
                                                <option value="Guinee_Bissau">Guinee_Bissau </option>
                                                <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                                                <option value="Guyana">Guyana </option>
                                                <option value="Guyane_Francaise ">Guyane_Francaise </option>
                                                <option value="Haiti">Haiti </option>
                                                <option value="Hawaii">Hawaii </option> 
                                                <option value="Honduras">Honduras </option>
                                                <option value="Hong_Kong">Hong_Kong </option>
                                                <option value="Hongrie">Hongrie </option>
                                                <option value="Inde">Inde </option>
                                                <option value="Indonesie">Indonesie </option>
                                                <option value="Iran">Iran </option>
                                                <option value="Iraq">Iraq </option>
                                                <option value="Irlande">Irlande </option>
                                                <option value="Islande">Islande </option>
                                                <option value="Israel">Israel </option>
                                                <option value="Italie">italie </option>
                                                <option value="Jamaique">Jamaique </option>
                                                <option value="Jan Mayen">Jan Mayen </option>
                                                <option value="Japon">Japon </option>
                                                <option value="Jersey">Jersey </option>
                                                <option value="Jordanie">Jordanie </option>
                                                <option value="Kazakhstan">Kazakhstan </option>
                                                <option value="Kenya">Kenya </option>
                                                <option value="Kirghizstan">Kirghizistan </option>
                                                <option value="Kiribati">Kiribati </option>
                                                <option value="Koweit">Koweit </option>
                                                <option value="Laos">Laos </option>
                                                <option value="Lesotho">Lesotho </option>
                                                <option value="Lettonie">Lettonie </option>
                                                <option value="Liban">Liban </option>
                                                <option value="Liberia">Liberia </option>
                                                <option value="Liechtenstein">Liechtenstein </option>
                                                <option value="Lituanie">Lituanie </option> 
                                                <option value="Luxembourg">Luxembourg </option>
                                                <option value="Lybie">Lybie </option>
                                                <option value="Macao">Macao </option>
                                                <option value="Macedoine">Macedoine </option>
                                                <option value="Madagascar">Madagascar </option>
                                                <option value="Madère">Madère </option>
                                                <option value="Malaisie">Malaisie </option>
                                                <option value="Malawi">Malawi </option>
                                                <option value="Maldives">Maldives </option>
                                                <option value="Mali">Mali </option>
                                                <option value="Malte">Malte </option>
                                                <option value="Man">Man </option>
                                                <option value="Mariannes du Nord">Mariannes du Nord </option>
                                                <option value="Maroc">Maroc </option>
                                                <option value="Marshall">Marshall </option>
                                                <option value="Martinique">Martinique </option>
                                                <option value="Maurice">Maurice </option>
                                                <option value="Mauritanie">Mauritanie </option>
                                                <option value="Mayotte">Mayotte </option>
                                                <option value="Mexique">Mexique </option>
                                                <option value="Micronesie">Micronesie </option>
                                                <option value="Midway">Midway </option>
                                                <option value="Moldavie">Moldavie </option>
                                                <option value="Monaco">Monaco </option>
                                                <option value="Mongolie">Mongolie </option>
                                                <option value="Montserrat">Montserrat </option>
                                                <option value="Mozambique">Mozambique </option>
                                                <option value="Namibie">Namibie </option>
                                                <option value="Nauru">Nauru </option>
                                                <option value="Nepal">Nepal </option>
                                                <option value="Nicaragua">Nicaragua </option>
                                                <option value="Niger">Niger </option>
                                                <option value="Nigeria">Nigeria </option>
                                                <option value="Niue">Niue </option>
                                                <option value="Norfolk">Norfolk </option>
                                                <option value="Norvege">Norvege </option>
                                                <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                                                <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>
                                                <option value="Oman">Oman </option>
                                                <option value="Ouganda">Ouganda </option>
                                                <option value="Ouzbekistan">Ouzbekistan </option>
                                                <option value="Pakistan">Pakistan </option>
                                                <option value="Palau">Palau </option>
                                                <option value="Palestine">Palestine </option>
                                                <option value="Panama">Panama </option>
                                                <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                                                <option value="Paraguay">Paraguay </option>
                                                <option value="Pays_Bas">Pays_Bas </option>
                                                <option value="Perou">Perou </option>
                                                <option value="Philippines">Philippines </option> 
                                                <option value="Pologne">Pologne </option>
                                                <option value="Polynesie">Polynesie </option>
                                                <option value="Porto_Rico">Porto_Rico </option>
                                                <option value="Portugal">Portugal </option>
                                                <option value="Qatar">Qatar </option>
                                                <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                                                <option value="Republique_Tcheque">Republique_Tcheque </option>
                                                <option value="Reunion">Reunion </option>
                                                <option value="Roumanie">Roumanie </option>
                                                <option value="Royaume_Uni">Royaume_Uni </option>
                                                <option value="Russie">Russie </option>
                                                <option value="Rwanda">Rwanda </option>
                                                <option value="Sahara Occidental">Sahara Occidental </option>
                                                <option value="Sainte_Lucie">Sainte_Lucie </option>
                                                <option value="Saint_Marin">Saint_Marin </option>
                                                <option value="Salomon">Salomon </option>
                                                <option value="Salvador">Salvador </option>
                                                <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                                                <option value="Samoa_Americaine">Samoa_Americaine </option>
                                                <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                                                <option value="Seychelles">Seychelles </option>
                                                <option value="Sierra Leone">Sierra Leone </option>
                                                <option value="Singapour">Singapour </option>
                                                <option value="Slovaquie">Slovaquie </option>
                                                <option value="Slovenie">Slovenie</option>
                                                <option value="Somalie">Somalie </option>
                                                <option value="Soudan">Soudan </option> 
                                                <option value="Sri_Lanka">Sri_Lanka </option> 
                                                <option value="Suede">Suede </option>
                                                <option value="Suisse">Suisse </option>
                                                <option value="Surinam">Surinam </option>
                                                <option value="Swaziland">Swaziland </option>
                                                <option value="Syrie">Syrie </option>
                                                <option value="Tadjikistan">Tadjikistan </option>
                                                <option value="Taiwan">Taiwan </option>
                                                <option value="Tonga">Tonga </option>
                                                <option value="Tanzanie">Tanzanie </option>
                                                <option value="Tchad">Tchad </option>
                                                <option value="Thailande">Thailande </option>
                                                <option value="Tibet">Tibet </option>
                                                <option value="Timor_Oriental">Timor_Oriental </option>
                                                <option value="Togo">Togo </option> 
                                                <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                                                <option value="Tristan da cunha">Tristan de cuncha </option>
                                                <option value="Tunisie">Tunisie </option>
                                                <option value="Turkmenistan">Turmenistan </option> 
                                                <option value="Turquie">Turquie </option>
                                                <option value="Ukraine">Ukraine </option>
                                                <option value="Uruguay">Uruguay </option>
                                                <option value="Vanuatu">Vanuatu </option>
                                                <option value="Vatican">Vatican </option>
                                                <option value="Venezuela">Venezuela </option>
                                                <option value="Vierges_Americaines">Vierges_Americaines </option>
                                                <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                                                <option value="Vietnam">Vietnam </option>
                                                <option value="Wake">Wake </option>
                                                <option value="Wallis et Futuma">Wallis et Futuma </option>
                                                <option value="Yemen">Yemen </option>
                                                <option value="Yougoslavie">Yougoslavie </option>
                                                <option value="Zambie">Zambie </option>
                                                <option value="Zimbabwe">Zimbabwe </option>
										</select>
									</div>
								</div>


								<div class='col-sm-3 col-sm-offset-0'>
									<div class="form-group">
										<label>Rôle de l'investisseur</label> <select name="roleinvestisseur"
											class="form-control" id="input-select">
											<option></option>
											<option value="N’importe lequel">N’importe lequel</option>
                            				<option value="Consultatif">Consultatif</option>
                                            <option value="Passif">Passif</option>
                                            <option value="Actif">Actif</option>
										</select>
									</div>
								</div>
								<div class='col-sm-3 col-sm-offset-1'>
									<div class="form-group">
										<label>Etape de l'entreprise</label> <select name="etapeentreprise"
											class="form-control" id="input-select">
											<option></option>
											<option value="Entreprise en cours de création">Entreprise en cours de création</option>
                            				<option value="Entreprise non créé">Entreprise non créé</option>
                                            <option value="Entreprise de moins de 3 ans">Entreprise de moins de 3 ans</option>
                                            <option value="Entreprise de plus de 3 ans">Entreprise de plus de 3 ans</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class='col-sm-3 col-sm-offset-1'>
									<div class="form-group">
										<label>Raison du financement</label> <select
											class="form-control" id="input-select" name="raisonfinancement">
											<option></option>
                                            <option value="Acquisition">Acquisition</option>  
                                            <option value="Ventes marketing">Ventes marketing</option>
                                            <option value="Immobilier">Immobilier</option>
                                            <option value="Achat équipement">Achat équipement</option>
                                            <option value="Augmentation du capital">Augmentation du capital</option>
                                            <option value="Refinancement de la dette">Refinancement de la dette</option>
										</select>
									</div>
								</div>
								<div class='col-sm-3 col-sm-offset-0'>
									<div class="form-group">
										<label>Phase du projet</label> <select class="form-control" name="phase"
											id="input-select">
											<option></option>
                        					<option value="Pré-démarrage">Pré-démarrage</option>
                                            <option value="Produit fini">Produit fini</option>
                                            <option value="Réalisation des ventes">Réalisation des ventes</option>
                                            <option value="Seuil de rentabilité">Seuil de rentabilité</option>
                                            <option value="Rentable">Rentable</option>
										</select>
									</div>
								</div>
								<div class='col-sm-3 col-sm-offset-1'>
									<div class='form-group'>
										<label>Investissement souhaité</label>
										<div class="input-group">
											<input class="form-control input-lg text-right" name="investissementsouhaite"
												id="input-money" type="text"> <span
												class="input-group-addon">en FCFA</span>
										</div>
									</div>
								</div>

                            
								<div class='col-sm-6 col-sm-offset-1'>
									<div class="form-group">
										<label>Description</label>
										<textarea class="form-control" id="input-textarea" name="description"
											placeholder="Ne dépasser pas 50 caractères" rows="4"></textarea>
									</div>
								</div>
                                <div class='col-sm-3 col-sm-offset-1'>
    								<div class='form-group'>
										<label>CA Prévisionnel</label>
										<div class="input-group">
											<input class="form-control input-lg text-right" name="caprevisionnel"
												id="input-money" type="text"> <span
												class="input-group-addon">FCFA</span>
										</div>
									</div>
								</div>

							<!--	<div class='col-sm-5 col-sm-offset-0'>
									<div class="form-group">
										<label>Présentation de l'offre Produits/Services</label>
										<textarea class="form-control" id="input-textarea"
											placeholder="Ne dépasser pas 50 caractères" rows="4"></textarea>
									</div>
								</div>-->
							</div>


							<div class="row">
                            
                            
                <div class="col-sm-2 panel-item">  
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
                        <p class="period"></p>
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
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 panel-item">
                    <div class="panel panel-circle-contrast panel-contrast pricing-table">
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
                        <p class="period"></p>
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
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 panel-item">
                        <div class="panel panel-circle-contrast panel-contrast pricing-table">
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
                            <p class="period"></p>
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
                           
                            
                            </div>
                              
                        </div>
                       </div>
                          <br/><br/>      
                     <div class="col-sm-2 panel-item">  
                  </div>
                   <div class='col-sm-2 col-sm-offset-1'>
                    				<div class="form-group">
									<label>Packs</label> 
                                        <select class="form-control"  name="pack"
    										id="input-select">
											<option>Choisir</option>
                                            <option value="1"> BASIC</option>
                                            <option value="2"> BUSINESS</option>
                                            <option value="3"> EXECUTIVE</option>
										</select>
									</div>
								</div>
                                

								
							    <!--	<div class='col-sm-5 col-sm-offset-0'>
									<div class="form-group">
										<label>Management RH</label>
										<textarea class="form-control" id="input-textarea"
											placeholder="Ne dépasser pas 50 caractères" rows="5"></textarea>
									</div>
								</div>

							</div>

							<div class="row">
								


							       <!--	<div class='col-sm-3 col-sm-offset-0'>
									<div class='form-group'>
										<label>CA Historique</label>
										<div class="input-group">
											<input class="form-control input-lg text-right"
												id="input-money" type="text"> <span
												class="input-group-addon">FCFA</span>
										</div>
									</div>
								</div>-->

								<div class='col-sm-3 col-sm-offset-1'>
									<div class='form-group'>
										<label>Ajouter une image ou un logo</label> <br /> <input
											class="" id="input-text" placeholder="" type="file" name="photo">

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