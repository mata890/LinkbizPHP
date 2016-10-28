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
  include ("entete_apropos.php");  
}
    
	?>




<div id='main' role='main'>
	<div id='main-content-header'>
		<div class='container'>
			<div class='row'>
				<div class='col-sm-12'>
					<h1 class='title'>A propos</h1>
					<ol class='breadcrumb'>
						<li><a href='index.php'> <i class='fa-icon-home'></i>
						</a></li>

						<li class='active'>Info</li>
					</ol>

				</div>
			</div>
		</div>
	</div>
	<div id='main-content'>
		<div class='container'>
			<div class='row'>
          <?php include ("infoleft.php")?>
		  <div class="panel-heading">Panel heading</div>
			</div>
		</div>
	</div>
</div>

<?php
include ("footer.php");
?>