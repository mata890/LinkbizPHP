<?php
session_start();
if (isset($_SESSION['idUser'])){
 if($_SESSION['privilege']==1){
           include ("enteteConnect.php"); 
        }else if ($_SESSION['privilege']==2) {
            include ("enteteConnectIn.php"); 
        }else{
            include ("enteteConnectAD.php");
        }
}else{
  include ("entete_entrepreneur.php");  
}

?>
<div id='main' role='main'>
	<div id='main-content-header'>
		<div class='container'>
			<div class='row'>
				<div class='col-sm-12'>
					<h1 class='title'>Entrepreneur</h1>
					<ol class='breadcrumb'>
						<li><i class='fa-icon-info'></i></li>
						<li><a href='index.php'> En quoi ça consiste </a></li>

					</ol>
				</div>
			</div>
		</div>
	</div>
	<div id='main-content'>
		<div class='container'>

			<div class='row'>
				<div class='col-sm-12'>
					<div class='page-header page-header-with-icon no-mg-t'>
						<i class='fa-icon-th'></i>
						<h2>Vous etes entrepreneur</h2>
					</div>
					<div class='row'>
						<div class='col-sm-6'>

							<p class='lead lead-xs text-justify'>Vous êtes un entrepreneur.
								Chefs d'entreprise, porteurs de projets, vous avez une idée ou
								une entreprise à défendre. Vous souhaitez faire évoluer votre
								entreprise ou bien vous avez un projet que vous souhaitez mettre
								au grand jour. Le fonctionnement trouver le bon investisseur,
								monter un dossier attractif, bien négocier, entretenir de bonnes
								relations, voici les clés de votre succès. La recherche de
								partenariat est souvent compliquée lorsque l'on passe par le
								schéma classique. Les moyens de communication nous permettent de
								nos jours d'accélérer toutes nos démarches. Aujourd'hui, nous
								vous offrons la possibilité de mettre en ligne votre demande
								pour être consulté par un réseau d'investisseurs.</p>

						</div>
						<div class='col-sm-6'>

							<p>
								<img src="assets/images/entrepreneur.jpg"
									style="width: 547px; height: 177px; margin-bottom: 50px;"></img>
							</p>
						</div>
					</div>

					<div class='row'>
						<div class='col-sm-12'>
							<div class='page-header page-header-with-icon no-mg-t'>
								<i class='fa-icon-suitcase'></i>
								<h2>Nos services</h2>
							</div>
							<div class='row'>
								<div class='col-sm-12'>
									<p class='lead lead-xs text-justify'>Gestion personalisable de
										votre proposition, Optimisation de votre visibilité,Accès à
										une base de données d'investisseurs, Vous pouvez soit activer
										votre proposition gratuitement et elle sera mise en ligne
										pendant 90 jours ce qui vous permettra d’évaluer l’audience de
										votre projet ou bien, ajouter votre annonce en premium ou
										performance en payant « des droits de connexions ». Dans ces
										deux derniers comptes, vous rendez accessible vos coordonnées
										pour pouvoir échanger avec les investisseurs, et bien plus
										avec l’offre performance qui vous permet d’améliorer votre
										visibilité auprès de notre communauté. Dès lors, ce dialogue
										est exclusif et sécurisé, ce qui évite tout intermédiaire
										malveillant. Ces derniers mois, le nombre de transactions
										générés par notre mise en relation est en constante évolution</p>
								</div>
							</div>
						</div>
					</div>



					<div class='row'>
						<div class='col-sm-12'>
							<div class='page-header page-header-with-icon no-mg-t'>
								<i class='fa-icon-plus'></i>
								<h2>Vos avantages</h2>
							</div>
							<div class='row'>
								<div class='col-sm-12'>
									<p class='lead lead-xs text-justify'>Mise en relation avec un
										ou plusieurs investisseurs, Engagement de
										confidentialité,Sécurisation de vos données,Votre candidature
										ne prendra que quelques minutes à remplir. Vous pouvez
										également joindre un document pour améliorer votre
										présentation : schéma, texte, tableau, images photos… Lors de
										la validation, vous avez la possibilité de détailler votre
										proposition pour la rendre encore plus attrayante. Cette
										partie sera alors diffusée uniquement aux investisseurs
										intéressés par votre candidature ceux ci pour assurer une
										confidentialité de vos données..</p>
								</div>
							</div>
						</div>
					</div>
					<div class='form-actions mg-t-lg'>
						<div class='row'>
							<div class='col-md-9 col-md-offset-3'>
                            <?php
                                if (isset($_SESSION['idUser'])){}else{
								echo "<a class='btn btn-contrast' href='formEntrepreneur.php'
									style='margin-left: 75px;'> <i class='icon-save'></i> JE CREE
									MON COMPTE ET J'AJOUTE MON ANNONCE
								</a>";}
                                ?>
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
