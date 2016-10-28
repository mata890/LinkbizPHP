 <?php
 session_start();
include('./scripts/Database.class.php');
//include('./EnvoiMail.class.php');
require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Projet.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Entrepeneur.php");
//--Test si le projet est soutenu pas cet investisseur
$projet = new Projet();
$_SESSION['estSoutenu']=$projet->soutenuPar($_GET['idproj'],$_SESSION['idUser']);
/**echo 'estsoutenuss= '.$_SESSION['estSoutenu'];
echo 'projet= '.$_GET['idproj'];
echo 'user= '.$_SESSION['idUser'];*/
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

						<li class='active'>Detail du projet</li>
					</ol>

				</div>
			</div>
		</div>
	</div>
	<div id='main-content'>
		<div class='container'>
			<div class='row'>
          <?php if(isset($_SESSION['soutenu']) && $_SESSION['soutenu']=="soutenu"){?>
              <div class="alert alert-info fade in">
                    <p>
						<i class="fa-icon-warning-sign">Merci de choisir notre plateforme LinkBiz.Un message est envoye à l'entrepreneur.
                    Ses coordonnees  vous seront envoyees dans les plus bref delais pour donner suite à ce projet.</i>
					</p>
				</div>
                <?php }else if(isset($_SESSION['retirer']) && $_SESSION['retirer']=="ok"){?>
                    <div class="alert alert-warning fade in">
                    <p>
						<i class="fa-icon-warning-sign">Merci de choisir notre plateforme LinkBiz. Un message est envoye à l'entrepreneur.
                    Vous vevez de retirer votre soutien à ce projet. Vous pouvez toujours revenir sur cette decision.</i>
					</p>
				</div>
               <?php }else{}?>
		 
		  <div class="panel-heading">
					<div class="col-sm-10">
						<h1>Detail du projet :  <?php echo $_GET['projet']?></h1>
						<div class="tabbable">
							<ul class="nav nav-tabs" id="tab">
								<li class="active"><a data-toggle="tab" href="#tab-content-1">Description</a>
								</li>
								<li><a data-toggle="tab" href="#tab-content-2">Domaine</a>
								</li>
								<li><a data-toggle="tab" href="#tab-content-3">CA Previsionnel</a></li>
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
                     
                <?php 
                if ((isset($_SESSION['estSoutenu'])) & ($_SESSION['estSoutenu']==1)){ 
                  
                ?> 
                
               
                
                
                 <div class="col-sm-6">
    				<h1>Votre avis</h1>
					<div class="jumbotron">
						<h4 class="no-mg-t">Vous soutenez ce projet, decidez-vous de retirer votre soutien?</h4>
						<h1><?php echo $_GET['projet']?></h1>
                        <form  action="scripts/retirerSoutien_post.php" method="POST">
                            <input type="hidden" name="idprojet" value="<?php echo $_GET['idproj']?>">
                            <input type="hidden" name="iduser" value="<?php echo $_GET['user']?>">
                            <input type="hidden" name="projet" value="<?php echo $_GET['projet']?>">
                            <input type="hidden" name="description" value="<?php echo $_GET['desc']?>">
                            <input type="hidden" name="domaine" value="<?php echo $_GET['dom']?>">
                            <input type="hidden" name="caprevision" value="<?php echo $_GET['cap']?>">
                            <input type="hidden" name="roleinvest" value="<?php echo $_GET['ri']?>">
                            <input type="hidden" name="etape" value="<?php echo $_GET['etape']?>">
                            <input type="hidden" name="phase" value="<?php echo $_GET['phase']?>">
                            <input type="submit" name="" value="Retirer" class="btn btn-contrast no-mg-b">
                        </form>
					</div>
				</div>
				
                <?php } else {?>
               <div class="col-sm-6">
					<h1>Votre avis</h1>
					<div class="jumbotron">
						<h4 class="no-mg-t">Decidez-vous de soutenir le projet</h4>
						<h1><?php echo $_GET['projet']?>?</h1>
                        <form  action="scripts/lirelasuiteinvest_post.php" method="POST">
                            <input type="hidden" name="idprojet" value="<?php echo $_GET['idproj']?>">
                            <input type="hidden" name="iduser" value="<?php echo $_GET['user']?>">
                            <input type="hidden" name="projet" value="<?php echo $_GET['projet']?>">
                            <input type="hidden" name="description" value="<?php echo $_GET['desc']?>">
                            <input type="hidden" name="domaine" value="<?php echo $_GET['dom']?>">
                            <input type="hidden" name="caprevision" value="<?php echo $_GET['cap']?>">
                            <input type="hidden" name="roleinvest" value="<?php echo $_GET['ri']?>">
                            <input type="hidden" name="etape" value="<?php echo $_GET['etape']?>">
                            <input type="hidden" name="phase" value="<?php echo $_GET['phase']?>">
                            <input type="submit" name="" value="OUI" class="btn btn-contrast no-mg-b">
                        </form>
					</div>
				</div>
                <?php }?>
                
                
                
			</div>
		</div>
	</div>
               
 <?php
 if(isset($_SESSION['retirer'])){
   unset( $_SESSION['retirer']);   
 }else if(isset($_SESSION['soutenu'])){
    unset( $_SESSION['soutenu']); 
 }else{
     
 }


	include ("footer.php");
	?>