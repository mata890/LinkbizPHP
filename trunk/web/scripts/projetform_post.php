<?php
session_start();
include('Database.class.php');
include('EnvoiMail.class.php');
require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Projet.php");
//--Chargement des classes
//function __autoload($class_name) {
//    require_once $class_name . '.php';
//}



//--Creation et enregistrement d'un projet
$projet = new Projet('', $_SESSION['idUser'] ,$_POST['domaine'],$_POST['raisonfinancement'],$_POST['phase'], $_POST['roleinvestisseur'],$_POST['projet'],$_POST['description'],$_POST['caprevisionnel'], 
                         $_POST['investissementsouhaite'], $_POST['photo'],$_POST['etapeentreprise'], $_POST['pack'],date('Y-m-d H:i:s'), '','1' );
$projet->storeProjet();


//appel de la fonction d'envoi de mail
//$mailer=new EnvoiMail();
//$mailer->envoyerMail($entrepreneur->getEmail(),$entrepreneur->getPrenom(),$entrepreneur->getNom(),$entrepreneur->getIdUser());

//recuperation des attributs de l'objet entrepreneur dans la variable session
//$_SESSION['EntrepreneurNom']=$entrepreneur->getNom();
//$_SESSION['EntrepreneurPrenom']=$entrepreneur->getPrenom();
//$_SESSION['EntrepreneurId']=$entrepreneur->getIdUser();
header('Location: ../mesProjets.php');

?>