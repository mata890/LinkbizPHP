<?php
//include('./Database.class.php');
session_start();
include('Database.class.php');
include('EnvoiMail.class.php');
include('EnvoiSMS.class.php');
require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Entrepeneur.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Projet.php");

//require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Investisseur.php");

$_SESSION['idprojet']=$_POST['idprojet'];
$_SESSION['iduser']=$_POST['iduser'];
$_SESSION['projet']=$_POST['projet'];
$_SESSION['description']=$_POST['description'];
$_SESSION['domaine']=$_POST['domaine'];
$_SESSION['caprevision']=$_POST['caprevision'];
$_SESSION['roleinvest']=$_POST['roleinvest'];
$_SESSION['etape']=$_POST['etape'];
$_SESSION['phase']=$_POST['phase'];

//--Creation et enregistrement d'un projet
$projet = new Projet();
$projet->soutenir($_SESSION['idUser'],$_POST['idprojet']);
$entrepreneur= $projet->selectEntrepreneurProjet($_POST['iduser'],$_POST['idprojet']);
if($entrepreneur){
// Load required configuration & Emerginov Class
require_once("passwords.php");
require_once("Emerginov.php");

// Get a new Emerginov object
$e = new Emerginov($api_login, $api_password);
$_SESSION['soutenu']="soutenu";
// Send the SMS
print_r($e->SendSMS($entrepreneur->Tel, "Bonjour ".$entrepreneur->Nom." ".$entrepreneur->Prenom." Votre projet ".$_POST['projet']." vient d'être choisi.Veuillez payer votre forfait par OM\nEnvoie linkbiz au 6001245 pour donner suite à votre projet\nPlateforme LinkBiz"));
}else{
    echo 'pas de retour';
}
$divers= 'projet='.$_SESSION['projet'].'&desc='.$_SESSION['description'].'&user='.$_SESSION['iduser'].'&idproj='.$_SESSION['idprojet'].'&dom='.$_SESSION['domaine']
.'&cap='.$_SESSION['caprevision'].'&phase='.$_SESSION['phase'].'&ri='.$_SESSION['roleinvest'].'&etape='.$_POST['etape'];

header('Location: ../lirelasuiteinvest.php?'.$divers);

?>