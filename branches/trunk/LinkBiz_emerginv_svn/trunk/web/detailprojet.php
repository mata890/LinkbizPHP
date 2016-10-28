 <?php
	include ("entete.php");
	?>




<div id='main' role='main'>
	<div id='main-content-header'>
		<div class='container'>
			<div class='row'>
				<div class='col-sm-12'>
					<h1 class='title'>Projet</h1>
					<ol class='breadcrumb'>
						<li><i class='fa-icon-eye-open'></i></li>

						<li class='active'>Détail du projet</li>
					</ol>

				</div>
			</div>
		</div>
	</div>
	<div id='main-content'>
		<div class='container'>
			<div class='row'>
          <?php include ("infoLeftProjectOwner.php")?>
		  
		  <div class="panel-heading">
					<div class="col-sm-6">
						<h1>Detail du projet</h1>
						<div class="tabbable">
							<ul class="nav nav-tabs" id="tab">
								<li class="active"><a data-toggle="tab" href="#tab-content-1">Description</a>
								</li>
								<li><a data-toggle="tab" href="#tab-content-2">Plan d'affaire</a>
								</li>
								<li><a data-toggle="tab" href="#tab-content-3">Suivi</a></li>
							</ul>
							<div class="tab-content" id="tab-content">
								<div class="tab-pane fade in active" id="tab-content-1">
									<p class="no-mg-b">Lorem ipsum dolor sit amet, instructior
										conclusionemque pri an, reque principes euripidis in pri. Id
										postea periculis mel. Nam at dicta voluptatum, movet mundi
										commune ea eam, vim te repudiare inciderint vituperatoribus.
										Ex modo mucius volutpat quo, eos erat voluptua at, ad.</p>
								</div>
								<div class="tab-pane fade" id="tab-content-2">
									<p class="no-mg-b">Causae perpetua partiendo id vis, eu
										accusamus disputando pri, dolore prodesset in his. Cetero
										feugait atomorum mel te, ut mel dolore eleifend. Eu ius
										utroque deleniti lobortis, quo ea facete virtute consequat.
										Vix ad tale splendide, id quem dolorem delicata sea sea.</p>
								</div>
								<div class="tab-pane fade" id="tab-content-3">
									<p class="no-mg-b">Eu magna mazim omnesque est, ignota lucilius
										ullamcorper ex usu. Cu sit altera vituperata, no sint
										conclusionemque has, altera nostro voluptatibus mei in. Nibh
										dicam ius ad, nusquam deleniti nominati ei quo. At eos prompta
										sententiae theophrastus, has ex dicant intellegat adipiscing.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6">
					<h1>Votre avis</h1>
					<div class="jumbotron">
						<h4 class="no-mg-t">Décidez-vous de soutenir le projet?</h4>
						<p>Donec porta mi vitae felis interdum congue. Sed vitae rhoncus
							massa, volutpat ultrices felis. Proin eu ullamcorper urna. Nullam
							eu mi vel metus faucibus mollis.</p>
						<a class="btn btn-contrast no-mg-b">Button</a>
					</div>
				</div>
			</div>
		</div>
	</div>
               
 <?php
	include ("footer.php");
	?>