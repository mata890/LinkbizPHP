<?php

include ("entete_investisseur.php");
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
								action="validationEntrepreneur.php">
								<div class='row'>
									<div class='col-sm-4 col-sm-offset-1'>
										<div class='form-group'>
											<label>Prénom</label> <input class='form-control'
												data-rule-required='true' id='entrepreneur_prenom'
												name='entrepreneur[prenom] type='text'>
										</div>
									</div>
									<div class='col-sm-3 col-sm-offset-0'>
										<div class='form-group'>
											<label>Nom</label> <input class='form-control'
												data-rule-required='true' id='entrepreneur_nom'
												name='entrepreneur[nom]  type='text'>
										</div>
									</div>

								</div>


								<div class="row">
									<div class='col-sm-4 col-sm-offset-1'>
										<div class='form-group'>
											<label class='col-md-3 control-label'>Sexe</label>
											<div class='col-md-5'>
												<label class='radio'> <input name='radio' type='radio'
													value=''> <label> Féminin</label>
												</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label class='radio'>
													<input name='radio' type='radio' value=''> <label>Masculin</label>
												</label>
											</div>
										</div>
									</div>
									<div class='col-sm-3 col-sm-offset-0'>
										<div class='form-group'>
											<label>Profession</label> <input class='form-control'
												id='profession' type='text'>
										</div>
									</div>
								</div>
								<div class="row">
									<div class='col-sm-4 col-sm-offset-1'>
										<div class='form-group'>
											<label>E-mail</label> <input class='form-control'
												data-rule-required='true' id='entrepreneur_email'
												name='entrepreneur[email] type='text'>
										</div>
									</div>
									<div class='col-sm-3 col-sm-offset-0'>
										<div class='form-group'>
											<label>Nom d'utilisateur</label> <input class='form-control'
												data-rule-required='true' id='entrepreneur_login'
												name='entrepreneur[login] type='text'>
										</div>
									</div>
								</div>
								<div class="row">
									<div class='col-sm-4 col-sm-offset-1'>
										<div class='form-group'>
											<label>Mot de passe</label> <input class='form-control'
												data-rule-required='true' id='entrepreneur_mdp'
												name='entrepreneur[mdp] type='password' >
										</div>
									</div>
									<div class='col-sm-3 col-sm-offset-0'>
										<div class='form-group'>
											<label style="width: 184px;">Confirmer le mot de passe</label>
											<input class='form-control' data-rule-required='true'
												id='entrepreneur_mdp' name='entrepreneur[mdp] type='password' >
										</div>
									</div>

								</div>
								<div class="row">
									<div class='col-sm-4 col-sm-offset-1'>
										<div class='form-group'>
											<label>Pays</label> <select name="select"
												class='form-control' data-rule-required='true'
												id='entrepreneur_pays'
												name='entrepreneur[pays] placeholder=' Streetplaceholder'>
												<option value="value1">Sélectionner votre pays
												
												<option>
												
												<option value="value1">Sénégal</option>

											</select>

										</div>
									</div>
									<div class='col-sm-3 col-sm-offset-0'>
										<div class='form-group'>
											<label class=''>Domaine</label> <select name="select"
												class='form-control' id='domaine'
												placeholder='Votre domaine'>
												<option value="value1">Informatique
												
												<option>
												
												<option value="value2">Agriculture</option>
												<option value="value3">Transformation alimentaire</option>
												<option value="value4">Commerçant</option>
											</select>
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
