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
  include ("entete.php");  
}

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
          <!-- <?php include ("infoLeftProjectOwner.php")?> -->
		 
		  <div class="panel-heading">
					<div class="col-sm-10">
						<h1>Détail du projet :  <?php echo $_GET['projet']?></h1>
						<div class="tabbable">
							<ul class="nav nav-tabs" id="tab">
								<li class="active"><a data-toggle="tab" href="#tab-content-1">Description</a>
								</li>
								<li><a data-toggle="tab" href="#tab-content-2">Domaine</a>
								</li>
								<li><a data-toggle="tab" href="#tab-content-3">CA Prévisionnel</a></li>
                                <li><a data-toggle="tab" href="#tab-content-4">Role Investisseur</a></li>
                                <li><a data-toggle="tab" href="#tab-content-5">Etape de l'Entreprise</a></li>
                                <li><a data-toggle="tab" href="#tab-content-6">Phase du projet</a></li>
							</ul>
							<div class="tab-content" id="tab-content">
								<div class="tab-pane fade in active" id="tab-content-1">
									<p class="no-mg-b"><?php echo $_GET['desc']?></p>
								</div>
								<div class="tab-pane fade" id="tab-content-2">
									<p class="no-mg-b"><?php echo $_GET['dom']?></p>
								</div>
								<div class="tab-pane fade" id="tab-content-3">
									<p class="no-mg-b"><?php echo $_GET['cap']?> F CFA</p>
								</div>
                                <div class="tab-pane fade in active" id="tab-content-4">
    								<p class="no-mg-b"><?php echo $_GET['ri']?></p>
								</div>
								<div class="tab-pane fade" id="tab-content-5">
									<p class="no-mg-b"><?php echo $_GET['etape']?></p>
								</div>
								<div class="tab-pane fade" id="tab-content-6">
									<p class="no-mg-b"><?php echo $_GET['phase']?></p>
								</div>
							</div>
						</div>
					</div>
				</div>

				
			<!--	<div class="col-sm-6">
					<h1>Votre avis</h1>
					<div class="jumbotron">
						<h4 class="no-mg-t">Décidez-vous de soutenir le projet?</h4>
						<p>Donec porta mi vitae felis interdum congue. Sed vitae rhoncus
							massa, volutpat ultrices felis. Proin eu ullamcorper urna. Nullam
							eu mi vel metus faucibus mollis.</p>
						<a class="btn btn-contrast no-mg-b">Button</a>
					</div>
				</div>-->
			</div>
		</div>
	</div>
               
 <?php
	include ("footer.php");
	?>