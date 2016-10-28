<?php
session_start();
include('./scripts/Database.class.php');
include('./scripts/EnvoiMail.class.php');
include('./scripts/EnvoiSMS.class.php');
require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Entrepeneur.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Projet.php");
/*
 * This file has automacally been created by Emerginov Project Creation mecanism.
 * The purpose of this file is to provide a sample SMS receiver management.
 * Please edit the file to handle properly your incoming SMS.
 * You might find many information on how to do so on Emerginov wiki.
 * http://emerginov.ow2.org/xwiki
 */

// Load required configuration & Emerginov Class
require_once ("passwords.php");
require_once ("Emerginov.php");
// Get a new Emerginov object
$e = new Emerginov($api_login, $api_password);
// Get SMS information
$sender = $_REQUEST ["SOA"];
$content = $_REQUEST ["Content"];

$entr=new Entrepeneur();
$projet=new Projet();
// Open a log file
$fh = fopen("log","a");

// Write SMS content to this log file
fwrite($fh, "---- On ".date("r").", I received a SMS from: $sender. Content is: $content\n");
$entr->message($sender,$content);
print_r($e->SendSMS($sender, "Merci d'avoir payer votre forfait.Toutes vos
    	 coordonnés sont envoyées à l'investisseur pour donner suite à votre projet"));
$projets=$projet->getProjetByNumero($sender);
foreach($projets as $key => $p){
$id=$p->idProjet;
$projet->updateEtatProjet($id); 
}
// Close the log file
fclose ( $fh );

/*$userSender=$entr->getUserByTel($sender);
//recuperer lid du projet Ã  partir du user telwhere role=1 (entr)
//$iduser=$userSender->idUser;*/
/*$invs=$projet->NumInvProjetSoutenu($sender);
foreach($invs as $key => $inv){
    $num=$inv->Tel;
    print_r($e->SendSMS(+$num, "Suite à  votre décision de financer Mangue du Senegal Toutes les coordonnées de l'entrepreneur sont disponible sur la plateform\nLinkBiz"));
    
     
}
*/
//joindre avec la table soutenir
//recuperer lid de linvest
//recuperer le l'invest
//envoyer sms
//Message de confirmation aprÃ©s paiement par OM


// Send the SMS

?>
