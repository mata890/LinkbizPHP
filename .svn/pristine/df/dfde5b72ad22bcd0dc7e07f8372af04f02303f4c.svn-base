<?php
session_start();
include('./scripts/Database.class.php');
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
require_once('scripts/connexionTest.php');
//session_start(); // On relaye la session
if (isset($_SESSION['authentification'])){ // vérification sur la session authentification (la session est elle enregistrée ?)
// ici les éventuelles actions en cas de réussite de la connexion
}
//else {
//header("Location: index.php?erreur=intru"); // redirection en cas d'echec
//exit;
//}
?>


<div id="main" role="main">
	<div class="carousel-image flexslider" id="carousel-example-2">
		<ul class="slides">
			<li
				style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"
				class="item flex-active-slide">
				<div class="container">
					<div class="row pos-rel">
						<div class="col-sm-12 col-md-8 animate">
							<h1 class="big fadeInDownBig animated">LINKBIZ</h1>
							<p class="normal fadeInUpBig animated">Comment ça marche?</p>
							<a
								class="btn btn-bordered btn-white btn-lg fadeInRightBig animated"
								href="apropos.php"> Lire la suite </a>
						</div>
						<div class="col-sm-4 animate pos-sta hidden-xs hidden-sm">
							<img draggable="false"
								class="img-responsive fadeInUpBig animated"
								style="position: absolute; bottom: 0; right: 15px;" alt="iPhone"
								src="assets/images/demo/carousels/iphone1.png" width="331"
								height="370">
						</div>
					</div>
				</div>
			</li>
			<li
				style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"
				class="item">
				<div class="container">
					<div class="row pos-rel">
						<div class="col-sm-12 col-md-8 animate">
							<h2 class="big fadeInLeftBig animate">Miser &amp; gagner</h2>
							<p class="normal fadeInRightBig animate">Faites fructufier votre
								investissement.</p>
							<a class="btn btn-bordered btn-white btn-lg fadeInUpBig animate"
								href="apropos.php"> Lire la suite </a>
						</div>
						<div class="col-sm-4 animate pos-sta hidden-xs hidden-sm">
							<img draggable="false" class="img-responsive fadeInUpBig animate"
								style="position: absolute; bottom: 35px; right: 15px; width: 500px;"
								alt="Man" src="arg1.png">
						</div>
					</div>
				</div>
			</li>
			<li
				style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"
				class="item">
				<div class="container">
					<div class="row pos-rel">
						<div class="col-sm-12 col-md-8 animate">
							<h2 class="big fadeInUpBig animated">Réaliser son rêve</h2>
							<p class="normal fadeInDownBig animated">Soumettez votre projet
								et trouver rapidement un investisseur.</p>
							<a
								class="btn btn-bordered btn-white btn-lg fadeInLeftBig animated"
								href="apropos.php"> Lire la suite </a>
						</div>
						<div class="col-sm-4 animate pos-sta hidden-xs hidden-sm">
							<img draggable="false"
								class="img-responsive fadeInUpBig animated"
								style="position: absolute; bottom: 35px; right: 15px;"
								alt="Circle" src="assets/images/demo/carousels/circle.png"
								width="329" height="370">
						</div>
					</div>
				</div>
			</li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a class="flex-active">1</a></li>
			<li><a class="">2</a></li>
			<li><a class="">3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
		<ol class="flex-control-nav flex-control-paging">
			<li><a>1</a></li>
			<li><a>2</a></li>
			<li><a>3</a></li>
		</ol>
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#"></a></li>
			<li><a class="flex-next" href="#"></a></li>
		</ul>
	</div>
	<div id="main-content">
		<div class="container">	<div id="main-content">
		<div class="container">
			<div class='row'>
              <div class='col-sm-12'>
                <div class='page-header page-header-with-icon'>
                  <i class='fa-icon-cloud'></i>
                  <h2>
                  <?php
                   if (isset($_SESSION['idUser'])){
                    echo 'Projets à la une';
                    }else{
                       
                    }
                    ?>
                  </h2>
                </div>
                </div>
                <div class='icon-boxes icon-boxes-lg'>
                  <div class='row'>
            <?php
                                if (isset($_SESSION['idUser'])){
                                    $projet=new Projet();
                        $projets=$projet->selectProjets();
                            if(isset($_POST['domaine'])) {
                                if($_POST['domaine']=="All"){
                                    $projets=$projet->selectProjets();
                                    
                                }else{
                                  $projets=$projet->selectProjetbydomaine($_POST['domaine']);
                                   
                                }
                            }
                            
                        foreach($projets as $key => $proj) {
                            ?>
                            <div class='col-sm-6 icon-box'>
                      <div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
                        <i class='fa-icon-chevron-sign-right text-white'></i>
                      </div>
                      <div class='content'>
                        <h3 class='title'>Projet <?php echo $proj->Projet?></h3>
                        <p><?php echo $proj->Description?></p>
                        <a href="lirelasuiteinvest.php?projet=<?php echo $proj->Projet?>&desc=<?php echo $proj->Description?>&user=<?php echo $proj->idUser?>&idproj=<?php echo $proj->idProjet?>
                                    &dom=<?php echo $proj->Domaine?>&cap=<?php echo $proj->CaPrevision?>&phase=<?php echo $proj->Phase?>&ri=<?php echo $proj->RoleInvestisseur?>
                                    &etape=<?php echo $proj->EtapeEntreprise?>">lire la suite</a>
                      </div>
                    </div>
                     
                           <?php 
                        }
    				
                                           }else{
        						?>
				<div class="col-sm-4 panel-item">
					<a class="panel panel-big" href="formInvestisseur.php">
						<div class="panel-icon">
							<i class="fa-icon-edit"></i>
						</div>
						<div class="panel-body">
							<h3 class="panel-title">Je suis investisseur</h3>
							<p>Cliquez ici pour vous inscrire </p>
						</div>
					</a>
				</div>
				<div class="col-sm-4 panel-item">
					<a class="panel panel-big" href="formEntrepreneur.php">
						<div class="panel-icon">
							<i class="fa-icon-edit"></i>
						</div>
						<div class="panel-body">
							<h3 class="panel-title">Je suis entrepreneur</h3>
							<p>Cliquez ici pour vous inscrire</p>
						</div>
					</a>                
				</div> 
                <?php }?>
			</div>
            </div>
			<div class="row">
				<div class="col-sm-12">
					<div class="page-header page-header-with-icon">
						<i class="fa-icon-suitcase"></i>
						<h2>
							Entrepreneurs-Investisseurs <small>Vos rêves, votre réussite,
								notre souci de tous les jours.</small>
						</h2>
					</div>
					<div class="row portfolio-boxes">
						<div class="col-sm-3 col-xs-6 no-mb-t-xs portfolio-box">
							<a class="image-link" href="detailprojet.php"> <img
								class="img-responsive img-rounded center-block"
								alt="Etiam vestibulum"
								src="assets/images/demo/last_projects/gal1.png"
								style="height: 262px;" width="262">
							</a>
							<h3 class="title">Veudeuses de poissons</h3>
							<p class="category">Groupements féminins</p>
						</div>
						<div class="col-sm-3 col-xs-6 no-mb-t-xs portfolio-box">
							<a class="image-link" href="detailprojet.php"> <img
								class="img-responsive img-rounded center-block" alt="Malesuada"
								src="assets/images/demo/last_projects/gal2.png"
								style="height: 262px;" width="262">
							</a>
							<h3 class="title">Agriculture</h3>
							<p class="category">Particulier</p>
						</div>
						<div class="col-sm-3 col-xs-6 portfolio-box">
							<a href="detailprojet.php">
								<div class="image-link">

									<img class="img-responsive img-rounded center-block"
										alt="Dictum vulputate"
										src="assets/images/demo/last_projects/gal3.png"
										style="height: 262px;" width="262">
								</div>
								<h3 class="title">Légumes</h3>
								<p class="category">Transport</p>
							</a>
						</div>
						<div class="col-sm-3 col-xs-6 portfolio-box">
							<a href="detailprojet.php">
								<div class="image-link">

									<img class="img-responsive img-rounded center-block"
										alt="Semper massa"
										src="assets/images/demo/last_projects/gal4.png"
										style="height: 262px;" width="262">
								</div>
								<h3 class="title">Fruits</h3>
								<p class="category">Transformation</p>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="page-header page-header-with-icon">
						<i class="fa-icon-quote-right"></i>
						<h2>Temoignages</h2>
					</div>
					<div class="row quotes">
						<div class="carousel carousel-default slide carousel-auto"
							id="carousel-testimonials">
							<div class="carousel-inner">
								<div class="item quote active">
									<div class="col-sm-12 text-center">
										<p class="lead">Grâce à Linkbiz j'ai pu mettre sur pied mon
											projet en trouvant un investisseur qui n'a ménagé aucun
											effort pour que cela ce réalise. Je ne les remercierai jamais
											assez.</p>
										<div class="author-wrapper">
											<p class="author">
												<strong>Fatou THIAM</strong>, Vendeuse de poissons
											</p>
										</div>
									</div>
								</div>
								<div class="item quote">
									<div class="col-sm-12 text-center">
										<p class="lead">Linkbiz m'a permis d'élargir mon entreprise et
											de devenir ainsi l'un des premiers fournisseurs en matériels
											informatiques au Sénégal.</p>
										<div class="author-wrapper">
											<p class="author">
												<strong>Mansour Sarr</strong>, Commerçant
											</p>
										</div>
									</div>
								</div>
								<div class="item quote">
									<div class="col-sm-12 text-center">
										<p class="lead">Cette plateforme m'a permis de trouver un
											investisseur pour la concrétisation de mon projet à la fin de
											mes études. Une seule phrase : "Faites confiance à Linkbiz et
											vous ne le regretterez pas!!!"</p>
										<div class="author-wrapper">
											<p class="author">
												<strong>Hélène Faye</strong>, Etudiante
											</p>
										</div>
									</div>
								</div>
								<div class="item quote">
									<div class="col-sm-12 text-center">
										<p class="lead">Linkbiz est la solution de vos problèmes.J'ai
											obtenu un marché d'envergure grâce à Linkbiz. IL m'a permis
											de trouver un agriculteur qui voulait transporter ses fruits
											à l'intérieur du pays et qui avait des problèmes pour les
											acheminer dans les régions du pays et dans la sous-région.</p>
										<div class="author-wrapper">
											<p class="author">
												<strong>El Hadji Moustapha Sall</strong>, Transporteur
											</p>
										</div>
									</div>
								</div>
							</div>
							<ol class="carousel-indicators">
								<li class="active" data-slide-to="0"
									data-target="#carousel-testimonials"></li>
								<li class="" data-slide-to="1"
									data-target="#carousel-testimonials"></li>
								<li class="" data-slide-to="2"
									data-target="#carousel-testimonials"></li>
								<li class="" data-slide-to="3"
									data-target="#carousel-testimonials"></li>
							</ol>
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
?>
