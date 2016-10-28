<?php
session_start();
include ('scripts/connexionTest.php');
include('./scripts/Database.class.php');
//include('./EnvoiMail.class.php');
require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Projet.php");
unset($_SESSION['estSoutenu']);
include("enteteConnectIn.php");
?>
      <div id='main' role='main'>
        <div id='main-content-header'>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-12'>
                <h1 class='title'>
                  Investisseur
                </h1>
				 <ol class='breadcrumb'>
                  <li>

                      <i class='fa-icon-user'></i>
                    
                  </li>
                  <li>
                    
                  Profile
                    
                  </li>
                  
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div id='main-content'>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-12'>
             
                <div class='row panels'>
                  <div class='col-sm-4 panel-item'>
                    <a class='panel panel-image'>
                      
                      <div class='panel-heading'><img class="img-responsive-sm" alt="Project planning" width="768" height="300" src="assets/images/demo/panels/panel_bg_compass1.jpg" /></div>
                      <div class='panel-body'>
                        <h3 class='panel-title'><?php echo $_SESSION['prenom']." ".$_SESSION['nom'] ?></h3>
    								<p align="left"><?php echo $_SESSION['profession']?></p>
									<p align="left"><?php echo $_SESSION['ville']?>-<?php echo $_SESSION['pays']?></p>
									<p align="left"><?php echo $_SESSION['email']?></p>
                      </div>
                    </a>
                  </div>
                  
                  <div class='col-sm-4 panel-item'>
                    <a class='panel panel-image' href='#'>
                      <div class='panel-icon'>
                        <i class='fa-icon-rocket'></i>
                      </div>
                      <div class='panel-heading'><img class="img-responsive-sm" alt="Fastest workers" width="768" height="300" src="assets/images/demo/panels/panel_bg_chess.jpg" /></div>
                      <div class='panel-body'>
                        <h3 class='panel-title'>Projets soutenus</h3>
						<p align="left">SenSO</p>
						<p align="left">LinkBiz</p>
						<p align="left">ProfADom</p>
                      </div>
                    </a>
                  </div>
                </div>
				
              </div>
            </div>
			
            <div class='row' id="projet">
              <div class='col-sm-12'>
                <div class='page-header page-header-with-icon'>
                  <i class='fa-icon-cloud'></i>
                  <h2>
                    Vous pourriez etre interesse
                  </h2>
                </div>
                <div class='icon-boxes icon-boxes-lg'>
                  <div class='row'>
                  <?php $projet=new Projet();
                        $projets=$projet->selectProjets();
                            
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
                                    &etape=<?php echo $proj->EtapeEntreprise?> &etat=<?php echo $proj->Etat?>">lire la suite</a>
                      </div>
                    </div>
                    <?php }?>
              </div>
            </div>
            <div class='row'>
              <div class='col-sm-12'>
               	<div class='col-sm-12'>
                <div class='page-header page-header-with-icon'>
                  <i class='fa-icon-star'></i>
                  <h2>Projets les plus visites</h2>
                </div>
                <div class='row quotes'>
                  <div class='carousel carousel-default slide carousel-auto' id='carousel-testimonials'>
                    <div class='carousel-inner'>
                      <div class='item active quote'>
                        <div class='col-sm-12 text-center'>
                           <div class='col-sm-6'><img class="img-responsive center-block img-rounded" alt="Lorem ipsum dolor sit amet" width="340" height="188" src="assets/images/demo/common/devices.jpg" /></div>
							<p class='lead'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan leo tellus. Nulla fringilla elementum nisl, vitae faucibus risus. Donec ut tristique eros. Curabitur mattis auctor turpis.</p>
                          	<div class='author-wrapper'>
                            <p class='author'>
                              <strong>John Doe</strong>,
                              Company name
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class='item quote'>
                        <div class='col-sm-12 text-center'>
                          <p class='lead'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan leo tellus. Nulla fringilla elementum nisl, vitae faucibus risus. Donec ut tristique eros. Curabitur mattis auctor turpis.</p>
                          <div class='author-wrapper'>
                            <p class='author'>
                              <strong>Michal Marek</strong>,
                              Bublina Studio
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class='item quote'>
                        <div class='col-sm-12 text-center'>
                          <p class='lead'>Aenean lorem quam, dapibus et enim vel, ultrices tincidunt tellus. Donec mattis massa et lacus interdum lobortis. Pellentesque habitant morbi tristique senectus. Curabitur mattis auctor turpis.</p>
                          <div class='author-wrapper'>
                            <p class='author'>
                              <strong>Aenean lorem</strong>,
                              Bublina Studio
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class='item quote'>
                        <div class='col-sm-12 text-center'>
                          <p class='lead'>Integer quis placerat leo, sit amet varius odio. Fusce sollicitudin metus eu eros egestas cursus ut ullamcorper augue. Integer blandit tellus a urna semper, sit amet tempor orci ornare. Mauris nec.</p>
                          <div class='author-wrapper'>
                            <p class='author'>
                              <strong>Jane Doe</strong>,
                              Company name
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <ol class='carousel-indicators'>
                      <li class='active' data-slide-to='0' data-target='#carousel-testimonials'></li>
                      <li data-slide-to='1' data-target='#carousel-testimonials'></li>
                      <li data-slide-to='2' data-target='#carousel-testimonials'></li>
                      <li data-slide-to='3' data-target='#carousel-testimonials'></li>
                    </ol>
                  </div>
                </div>
              </div>
                <!-- --temoignage -->
               
               <div class='form-actions mg-t-lg'>
                      <div class='row'>
                      <div class='col-sm-8 col-sm-offset-1'>
                               <div class="form-group">
                                <form  action="scripts/temoignageform_post.php" method="POST">
                                     <label id="temoignage">Témoignage</label>
                                        <textarea class="form-control" id="input-textarea" name="contenu" placeholder="Ajouter vos appréciations par rapport aux services de LinkBiz" rows="4"></textarea>
                               <input type="submit" name="valider" value="Ajouter un témoignage" class="btn btn-contrast no-mg-b">
                        </form>
                               </div>
                       </div>
                    </div> 
				<!-- fin temoignage -->
              </div>
            </div>
            
          </div>
        </div>
        <div class='fade' id='scroll-to-top'>
          <i class='fa-icon-chevron-up'></i>
        </div>
      </div>
      </div>
      </div>
      <?php include("footer.php");
?>
