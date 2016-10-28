<?php
include('./Database.class.php');
session_start(); // début de session

require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Temoignage.php");
//--Creation et enregistrement d'un message
$_SESSION['tem']=$_POST['contenu'];
$temoignage = new Temoignage('',$_SESSION['idUser'],$_SESSION['tem']);
$temoignage->store();
header('Location: ../profileInvestisseur.php');
?>