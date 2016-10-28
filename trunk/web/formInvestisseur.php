<?php


if (isset($_SESSION['idUser'])){
include ("enteteConnect.php");
}else{
   include ("entete_investisseur.php");
}

?>
<div id='main' role='main'>
	<div id='main-content-header'>
		<div class='container'>
			<div class='row'>
				<div class='col-sm-12'>
					<h1 class='title'>Investisseur</h1>
					<ol class='breadcrumb'>
						<li><i class='fa-icon-file-text'></i></li>
						<li>Remplissez le formulaire pour valider votre statut
							d'investisseur</li>

					</ol>
				</div>
			</div>
		</div>
	</div>
	<div id='main-content'>
		<div class='container'>
			<div class='row'>

				<div class="col-md-3 col-md-offset-0">
					<div class='page-header page-header-with-icon no-mg-t  '>
						<i class='fa-icon-question'></i>
						<h2>Fonctionnement</h2>
					</div>
					<div class="panel-group accordion accordion-bordered"
						id="accordion2">

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-parent="#accordion2"
										data-toggle="collapse" href="#accordion2-item-1">
										L'investisseur </a>
								</h4>
							</div>
							<div style="height: auto;" class="panel-collapse in"
								id="accordion2-item-1">
								<div class="panel-body">

									<p class=" dropcap-contrast text-justify">
										<span class="first-letter">V</span> ous recherchez de nouveaux
										projets, de nouveaux concepts rentables. Dès que vous vous
										inscrivez nous envoyons sur votre profil, des projets de votre
										domaine selectionné rigoureusement.
									</p>
									<p class=" dropcap-contrast text-justify">Vous pouvez aussi
										rechercher et visuliser des projets selon le domaine de votre
										choix. Et si vous voulez financer un projet, vous contacterz
										directement l'entrepreneur sans intermédaire</p>
									<p class="text-justify">Ainsi votre annonce sera visible pour
										tous visiteurs,particulièrement</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle collapsed" data-parent="#accordion2"
										data-toggle="collapse" href="#accordion2-item-2"> Les projets
									</a>
								</h4>
							</div>
							<div style="height: 0px;" class="panel-collapse collapse"
								id="accordion2-item-2">
								<div class="panel-body">
									<p class=" dropcap-contrast text-justify">
										<span class="first-letter">U</span>ne idée, un projet, une
										entreprise à développer, une reprise d’entreprise, une LBO, un
										OBO… ; vous recherchez un partenariat financier ou bien
										agrandir votre réseau.
									</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle collapsed" data-parent="#accordion2"
										data-toggle="collapse" href="#accordion2-item-3"> Notre
										plateforme </a>
								</h4>
							</div>
							<div style="height: 0px;" class="panel-collapse collapse"
								id="accordion2-item-3">
								<div class="panel-body">
									<p class=" dropcap-contrast text-justify">
										<span class="first-letter">L</span>'idée est de faciliter la
										communication entre les porteurs de projets et tout
										investisseur souhaitant financer un projet. En effet, faute de
										financement la plupart des projets tombent dans l'oublie.
									</p>
									<p class=" dropcap-contrast text-justify">De ce fait LinkBiz
										aide les entrepreneurs à la recherche de nouveaux capitaux et
										de nouveaux partenaires, mais aussi aide les investisseurs à
										trouver une opportunité d'affaire rentable et viable.</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle collapsed" data-parent="#accordion2"
										data-toggle="collapse" href="#accordion2-item-4"> Les
										entrepreneurs </a>
								</h4>
							</div>
							<div class="panel-collapse collapse" id="accordion2-item-4">
								<div class="panel-body">
									<p class=" dropcap-contrast text-justify">
										<span class="first-letter">I</span>nscrivez vous en quelques
										minutes et soumettez vos projets en précisant le domaine, le
										financement attendu, le chiffre d'affaire,le résumé du
										projet,etc. Ainsi votre annonce sera visible pour tous
										visiteurs,particulièrement les investisseurs inscrits sur la
										plateforme. Soyez précis et convaincant au moment de remplir
										le formulaire, pour augmenter vos chances qu'un investisseur
										entre en relation direct avec vous.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class='col-sm-9'>
					<div class='page-header page-header-with-icon no-mg-t  '>
						<i class='fa-icon-code-fork'></i>
						<h2>Formulaire de l'investisseur</h2>
					</div>

					<div class="panel panel-bordered panel-contrast mg-b ">
						<div class="panel-heading ">
							<i class="fa-icon-info"></i> Ce formulaire vous permettra aprés
							sa validation de visualiser les projets qui sont soumis et vous
							pourriez à votre tours les soutenir.
						</div>
						<div class="panel-body">
							<form class='form form-validation'
								action="scripts/investisseurform_post.php" method="POST">
								
								<div class='row'>
									<div class='col-sm-4 col-sm-offset-1'>
										<div class='form-group'>
											<label>Prénom</label> <input class='form-control'
												data-rule-required='true' id='entrepreneur_prenom'
												name="prenom" type='text'>
										</div>
									</div>
									<div class='col-md-3 .col-md-offset-3'>
										<div class='form-group'>
											<label>Nom</label> <input class='form-control'
												data-rule-required='true' id='entrepreneur_nom'
												name="nom"  type='text'>
										</div>
									</div>

								</div>


								<div class="row">
									<div class='col-sm-4 col-sm-offset-1'>
										<div class='form-group'>
											<label class='col-md-3 control-label'>Sexe</label>
											<div class='col-md-5'>
												<label class='radio'>
												 <input name="sexe" type='radio'value='Feminin'> 
												 <label> Féminin</label>
												</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label class='radio'>
													<input name="sexe" type='radio' value='Masculin'>
													 <label>Masculin</label>
												</label>
											</div>
										</div>
									</div>
									<div class='col-md-3 .col-md-offset-3'>
										<div class='form-group'>
											<label>Profession</label> <input class='form-control'
												id='profession' type='text' name="profession">
										</div>
									</div>
								</div>
                                    <div class="row">
									<div class='col-sm-4 col-sm-offset-1'>
										<div class='form-group'>
											<label>Pays</label> 
                                            <select 
												class='form-control' data-rule-required='true'
												id='entrepreneur_pays'
												name="pays" >
											
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
										<div class='form-group'>
											<label>Ville</label> <input class='form-control'
    											id='ville' type='text' name="ville"> 
                                            
										</div>
									</div>
								</div>
                                <div class="row">
    								<div class='col-sm-4 col-sm-offset-1'>
										<div class='form-group'>
											<label>Téléphone</label> <input class='form-control'
												data-rule-required='true' id='entrepreneur_tel'
												name="tel" type='text' placeholder='+000 000 000'>
										</div>
									</div>
									<div class='col-sm-3 col-sm-offset-0'>
										<div class='form-group'>
											<label>Nom d'utilisateur</label> <input class='form-control'
												data-rule-required='true' id='entrepreneur_login'
												name="login" type='text'>
										</div>
									</div>
								</div>
								<div class="row">
									<div class='col-sm-4 col-sm-offset-1'>
										<div class='form-group'>
											<label>E-mail</label> <input class='form-control'
												data-rule-required='true' id='entrepreneur_email'
                                                placeholder='nom@exemple.com'
												name="email" type='email'>
										</div>
									</div>
									<div class='col-sm-3 col-sm-offset-0'>
										<div class='form-group'>
											<label>Retapez votre email</label> <input class='form-control'
												data-rule-required='true' id='entrepreneur_emailbis'
                                                placeholder='nom@exemple.com'
												name="emailbis" type='email'>
										</div>
									</div>
								</div>
								<div class="row">
									<div class='col-sm-4 col-sm-offset-1'>
										<div class='form-group'>
											<label>Mot de passe</label> <input class='form-control'
												data-rule-required='true' id='entrepreneur_mdp'
												name="mdp" type='password' >
										</div>
									</div>
									<div class='col-sm-3 col-sm-offset-0'>
										<div class='form-group'>
											<label style="width: 184px;">Confirmer le mot de passe</label>
											<input class='form-control' data-rule-required='true'
												id='entrepreneur_mdp' name="mdp2" type='password' >
										</div>
									</div>

								</div>
							

								<div class="row">
									<div class='col-sm-8 col-sm-offset-1'>
										<div class='form-actions mg-t-lg'>
											<div class='col-md-9 col-md-offset-3'>
												<button class='btn btn-contrast' type='submit'>
													<i class='icon-save'></i> Soumettre
												</button>
												<button class='btn btn-very-light' type='submit'>Annuler</button>
											</div>
										</div>
									</div>
								</div>
						
						</div>
					</div>
					</form>
				</div>


			</div>
		</div>
	</div>
</div>
<div class='fade' id='scroll-to-top'>
	<i class='fa-icon-chevron-up'></i>
</div>
<?php

include ("footer.php");
?>
