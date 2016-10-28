<?php
session_start();
include('Database.class.php');
include('EnvoiMail.class.php');
include('EnvoiSMS.class.php');
require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Entrepeneur.php");
//--Chargement des classes
//function __autoload($class_name) {
//    require_once $class_name . '.php';
//}



//--Creation et enregistrement d'un entrepreneur
$entrepreneur = new Entrepeneur($_POST['prenom'],$_POST['nom'],$_POST['sexe'],$_POST['profession'],$_POST['email'],$_POST['tel'],$_POST['login'],sha1($_POST['mdp']),$_POST['pays'],$_POST['ville']);
$entrepreneur->store();
//$entrepreneur->selectUser($_POST['login'],sha1($_POST['mdp']));

//appel de la fonction d'envoi de mail
//$mailer=new EnvoiMail();
//$mailer->envoyerMail($entrepreneur->getEmail(),$entrepreneur->getPrenom(),$entrepreneur->getNom(),$entrepreneur->getIdUser());

// Load required configuration & Emerginov Class
require_once("passwords.php");
require_once("Emerginov.php");
// Envoi du courrier
    if ( mail ( $mail , "LinkBiz Emerginov" , "Bonjour ".$prenom." ".$nom." \n Bienvenue  notre  plateforme communautaire  LinkBiz,
    \nla prémiere plateforme de mise en relation Entrepreneur/Investisseur.
    \nMerci de cliquer sur ce lien pour activer votre compte <a href='http://projects.emerginov.orange.sn/LinkBiz/scripts/aqzsedrftgyh.php?identifiant=".$iduser."'>LinkBiz.com</a>
    \nSi vous n’avez pas déposer votre projet, faites le, nos investisseurs vous attendent!
    \nCordialement,
    \n\nl\'équipe LinkBiz" ))
    echo "Mail envoyé!" ;
    else echo "Erreur lors de l'envoi de courrier" ;

//appel de la fonction d'envoi de sms
//$smser=new EnvoiSMS();
//$smser->envoyerSMS($entrepreneur->getTel(),$entrepreneur->getPrenom(),$entrepreneur->getNom(),$entrepreneur->getIdUser());




//recuperation des attributs de l'objet entrepreneur dans la variable session
$_SESSION['EntrepreneurNom']=$entrepreneur->getNom();
$_SESSION['EntrepreneurPrenom']=$entrepreneur->getPrenom();
$_SESSION['EntrepreneurId']=$entrepreneur->getIdUser();
header('Location: ../validationEntrepreneur.php');

?>