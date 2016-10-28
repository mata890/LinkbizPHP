<?php
//include('./Database.class.php');
session_start();
include('Database.class.php');
include('EnvoiMail.class.php');
include('EnvoiSMS.class.php');

require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Investisseur.php");


echo $_POST['pays'];
echo $_POST['prenom'];
echo $_POST['nom'];
echo $_POST['sexe'];
echo $_POST['profession'];
echo $_POST['email'];
echo $_POST['tel'];
echo $_POST['login'];
echo $_POST['mdp'];
echo $_POST['ville'];

//--Creation et enregistrement d'un investisseur                              
$investisseur = new Investisseur('','2',$_POST['pays'],$_POST['prenom'],$_POST['nom'],$_POST['sexe'],$_POST['profession'],$_POST['email']
,$_POST['tel'],$_POST['login'],sha1($_POST['mdp']),$_POST['ville'],'','','1');
$investisseur->store();

//$investisseur->selectUser($_POST['login'],sha1($_POST['mdp']));

//appel de la fonction d'envoi de mail
$mailer=new EnvoiMail();
$mailer->envoyerMail($investisseur->getEmail(),$investisseur->getPrenom(),$investisseur->getNom(),$investisseur->getIdUser());


//recuperation des attributs de l'objet investisseur dans la variable session
$_SESSION['InvestisseurNom']=$investisseur->getNom();
$_SESSION['InvestisseurPrenom']=$investisseur->getPrenom();
$_SESSION['InvestisseurId']=$investisseur->getIdUser();



header('Location: ../validationInvestisseur.php');

?>