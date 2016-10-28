<?php
//include('./Database.class.php');
session_start();
include('Database.class.php');
include('EnvoiMail.class.php');
include('EnvoiSMS.class.php');
require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Entrepeneur.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Projet.php");

//require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Investisseur.php");

$_SESSION['idpack']=$_POST['idPack'];
$_SESSION['pack']=$_POST['pack'];
$_SESSION['duree']=$_POST['duree'];
$_SESSION['prix']=$_POST['prix'];
echo 'user='.$_SESSION['idUser'];
$e = new Emerginov($api_login, $api_password); 
$entrepreneur1= new Entrepeneur();
$projet=new Projet();
$entrepreneur=$entrepreneur1->getUserById($_SESSION['idUser']);
if($entrepreneur){
$_SESSION['envoi']='ok';
echo 'tel='.$entrepreneur->Tel;
print_r($e->SendSMS($entrepreneur->Tel, "Bonjour ".$entrepreneur->Nom." ".$entrepreneur->Prenom." Vous venez de choisir le pack  ".$_POST['pack']."
     le cout est de ".$_POST['prix']." FCFA pour une duree de ".$_POST['duree']." jours. Tapez Linkbiz à envoyé au 6001245 pour valider. \nPlateforme LinkBiz"));
if(isset($_SESSION['idProjet'])){
$projet->updateEtatProjet($_SESSION['idProjet']);
}else{
    echo 'erreur';
}
} else
echo 'erreur';
$divers="paiement_en_cours";
header('Location: ../paiement.php?'.$divers);
?>