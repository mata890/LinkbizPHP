<?php


include ("scripts/connecterBD.php");  
   

	
// les importations
require_once 'passwords.php';
require_once 'Emerginov.php';
echo "Bonjour, bienvenue à notre service d'envoi de sms <br>";
//création de l'objet d'authentification sur la plateforme
$em = new Emerginov($api_login, $api_password);

$_REQUEST['numero'] ='772251609';
$_REQUEST['message'] ='Test Emerginov';
if(!$_REQUEST['numero'] || !$_REQUEST['message']){
echo 'Ajouter les parametres "numero" et "message"';
exit;
}
//récupération du numéro et du message données en paramètre dans les

$numero = "+221".$_REQUEST['numero'];
$message = $_REQUEST['message'];
// appel de la fonction permettant l'envoi de sms
$resultat = $em->SendSMS($numero, $message);
//test pour l'exécution
if($resultat->Success) {
echo "Cool, sms bien envoyé <br>";
//stockage en base de données, voir fichier passwords.php
mysql_connect($mysql_db_server, $mysql_db_login, $mysql_db_password);
mysql_select_db($mysql_db_name);
$sql = "INSERT INTO Message VALUES ('', '".$numero."', '".$message."')";
mysql_query($sql);
} else {
echo "Oups, Veuillez reessayer !";
}
?>
