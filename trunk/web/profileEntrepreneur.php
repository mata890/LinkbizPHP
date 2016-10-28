<?php
include ("enteteConnect.php");
include ('scripts/connexionTest.php');
session_start (); // On relaye la session
?>
<div id='main' role='main'>
	<div id='main-content-header'>
		<div class='container'>
			<div class='row'>
				<div class='col-sm-12'>
					<h1 class='title'>Entrepreneur</h1>
					<ol class='breadcrumb'>
						<li><i class='fa-icon-user'></i></li>
						<li>Profile</li>

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

								<div class='panel-heading'>
									<img class="img-responsive-sm" alt="Project planning"
										width="768" height="300"
										src="assets/images/demo/panels/panel_bg_chess.jpg" />
								</div>
								<div class='panel-body'>
									<h3 class='panel-title'><?php echo $_SESSION['prenom']." ".$_SESSION['nom'] ?></h3>
									<p align="left"><?php echo $_SESSION['profession']?></p>
									<p align="left"><?php echo $_SESSION['ville']?>-<?php echo $_SESSION['pays']?>, BP 934</p>
									<p align="left"><?php echo $_SESSION['email']?></p>
								</div>
							</a>
						</div>

						<div class='col-sm-4   panel-item'>
							<a class='panel panel-image' href='formAddProject.php'>
								<div class='panel-icon'>
									<i class='fa-icon-plus'></i>
									<h3 class='panel-title'>Ajouter un projet</h3>
								</div>
							</a>
						</div>

					</div>

				</div>
			</div>

			<div class='row'>
				<!--<div class='col-sm-12'>
					<div class='page-header page-header-with-icon'>
						<i class='fa-icon-cloud'></i>
						<h2>Vous pourriez etre interesse</h2>
					</div>
					<div class='icon-boxes icon-boxes-lg'>
						<div class='row'>
							<div class='col-sm-6 icon-box'>
								<div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
									<i class='fa-icon-truck text-white'></i>
								</div>
								<div class='content'>
									<h3 class='title'>Shipping</h3>
									<p>Curabitur id ante at diam consectetur mattis. Donec
										tristique est turpis, et dapibus odio accumsan non. Donec
										rutrum sodales interdum.</p>
								</div>
							</div>
							<div class='col-sm-6 icon-box'>
								<div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
									<i class='fa-icon-wrench text-white'></i>
								</div>
								<div class='content'>
									<h3 class='title'>Technical support</h3>
									<p>Nulla consectetur turpis a ante tristique feugiat. In
										venenatis pellentesque leo vehicula consequat. Maecenas
										elementum velit ut leo imperdiet vehicula.</p>
								</div>
							</div>
						</div>
						<div class='row'>
							<div class='col-sm-6 icon-box'>
								<div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
									<i class='fa-icon-tag text-white'></i>
								</div>
								<div class='content'>
									<h3 class='title'>Warranty</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Nullam sed massa quis elit sagittis tempor. Ut rutrum sem vel
										augue rhoncus vestibulum.</p>
								</div>
							</div>
							<div class='col-sm-6 icon-box'>
								<div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
									<i class='fa-icon-shield text-white'></i>
								</div>
								<div class='content'>
									<h3 class='title'>Security</h3>
									<p>Cras aliquam accumsan lorem, ac cursus orci molestie eget.
										Ut nec ultricies augue. Vestibulum lobortis enim felis, non
										semper arcu convallis at.</p>
								</div>
							</div>
						</div>
						<div class='row'>
							<div class='col-sm-6 icon-box'>
								<div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
									<i class='fa-icon-group text-white'></i>
								</div>
								<div class='content'>
									<h3 class='title'>Customers</h3>
									<p>Pellentesque sit amet est sit amet eros consectetur
										elementum sed et mauris. Pellentesque interdum eu elit nec
										imperdiet.</p>
								</div>
							</div>
							<div class='col-sm-6 icon-box'>
								<div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
									<i class='fa-icon-trophy text-white'></i>
								</div>
								<div class='content'>
									<h3 class='title'>Great results</h3>
									<p>Nulla consectetur turpis a ante tristique feugiat. In
										venenatis pellentesque leo vehicula consequat. Maecenas
										elementum velit ut leo imperdiet vehicula.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col-sm-12'>
					<!--<div class='col-sm-12'>
						<div class='page-header page-header-with-icon'>
							<i class='fa-icon-star'></i>
							<h2>Projets les plus visites</h2>
						</div>
						<div class='row quotes'>
							<div class='carousel carousel-default slide carousel-auto'
								id='carousel-testimonials'>
								<div class='carousel-inner'>
									<div class='item active quote'>
										<div class='col-sm-12 text-center'>
											<div class='col-sm-6'>
												<img class="img-responsive center-block img-rounded"
													alt="Lorem ipsum dolor sit amet" width="340" height="188"
													src="assets/images/demo/common/devices.jpg" />
											</div>
											<p class='lead'>Lorem ipsum dolor sit amet, consectetur
												adipiscing elit. Praesent accumsan leo tellus. Nulla
												fringilla elementum nisl, vitae faucibus risus. Donec ut
												tristique eros. Curabitur mattis auctor turpis.</p>
											<div class='author-wrapper'>
												<p class='author'>
													<strong>John Doe</strong>, Company name
												</p>
											</div>
										</div>
									</div>
									<div class='item quote'>
										<div class='col-sm-12 text-center'>
											<p class='lead'>Lorem ipsum dolor sit amet, consectetur
												adipiscing elit. Praesent accumsan leo tellus. Nulla
												fringilla elementum nisl, vitae faucibus risus. Donec ut
												tristique eros. Curabitur mattis auctor turpis.</p>
											<div class='author-wrapper'>
												<p class='author'>
													<strong>Michal Marek</strong>, Bublina Studio
												</p>
											</div>
										</div>
									</div>
									<div class='item quote'>
										<div class='col-sm-12 text-center'>
											<p class='lead'>Aenean lorem quam, dapibus et enim vel,
												ultrices tincidunt tellus. Donec mattis massa et lacus
												interdum lobortis. Pellentesque habitant morbi tristique
												senectus. Curabitur mattis auctor turpis.</p>
											<div class='author-wrapper'>
												<p class='author'>
													<strong>Paľo Delinčák</strong>, Bublina Studio
												</p>
											</div>
										</div>
									</div>
									<div class='item quote'>
										<div class='col-sm-12 text-center'>
											<p class='lead'>Integer quis placerat leo, sit amet varius
												odio. Fusce sollicitudin metus eu eros egestas cursus ut
												ullamcorper augue. Integer blandit tellus a urna semper, sit
												amet tempor orci ornare. Mauris nec.</p>
											<div class='author-wrapper'>
												<p class='author'>
													<strong>Jane Doe</strong>, Company name
												</p>
											</div>
										</div>
									</div>
								</div>
								<ol class='carousel-indicators'>
									<li class='active' data-slide-to='0'
										data-target='#carousel-testimonials'></li>
									<li data-slide-to='1' data-target='#carousel-testimonials'></li>
									<li data-slide-to='2' data-target='#carousel-testimonials'></li>
									<li data-slide-to='3' data-target='#carousel-testimonials'></li>
								</ol>
							</div>
						</div>
					</div>-->
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
<?php

include ("footer.php");
?>
