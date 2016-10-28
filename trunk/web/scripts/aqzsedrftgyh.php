<?php
session_start();
include('./Database.class.php');
include('./EnvoiMail.class.php');
require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Entrepeneur.php");
//ce fichier est utilisé pour activer le compte des utilisateur
if (isset($_GET["identifiant"])) {
    $id=$_GET["identifiant"];
    echo $id;
    
    //Activer le compte de l'utilisateur
    global $_db;
   // $_db->query( 'Update  Utilisateur SET Etat=1 WHERE idUser = "'.$id.'";' );
     $_db->query( 'Update  Utilisateur SET Etat=1 WHERE idUser =62;' );
     
     //creer un objet entrepreneur
  $entrepreneur1 = new Entrepeneur();

//selectionner l'utilisateur par id
    $entrepreneur1->selectUserById(62);
    
    //mettre les attributs de la personne en session/connecter l'utilisateur
$_SESSION['nom']=$entrepreneur1->getNom();
$_SESSION['prenom']=$entrepreneur1->getPrenom();
$_SESSION['email']=$entrepreneur1->getEmail();
$_SESSION['profession']=$entrepreneur1->getProfession();
$_SESSION['EntrepreneurId']=$entrepreneur1->getIdUser();

header('Location: ../profileEntrepreneur.php');
}

?>