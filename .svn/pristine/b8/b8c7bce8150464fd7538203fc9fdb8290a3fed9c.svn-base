<?php
session_start();
include('Database.class.php');
include('EnvoiMail.class.php');
include('EnvoiSMS.class.php');
require_once($_SERVER["DOCUMENT_ROOT"] . "/classes/Entrepeneur.php");
/* 
 * This file has automacally been created by Emerginov Project Creation mecanism.
 * The purpose of this file is to provide a sample SMS receiver management.
 * Please edit the file to handle properly your incoming SMS.
 * You might find many information on how to do so on Emerginov wiki.
 * http://emerginov.ow2.org/xwiki
 */

// Load required configuration & Emerginov Class
require_once("passwords.php");
require_once("Emerginov.php");

// Get SMS information
$sender = $_REQUEST["SOA"];
$content = $_REQUEST["Content"];
$entr=new Entrepreneur();
// Open a log file
$fh = fopen("log","a");

// Write SMS content to this log file
fwrite($fh, "---- On ".date("r").", I received a SMS from: $sender. Content is: $content\n");
//$mess=$entr->message($sender,$content);

// Close the log file
fclose($fh);

//if($mess){
 
    //Envoi confirmation de paiement
// Send the SMS
$e = new Emerginov($api_login, $api_password);
$e->SendSMS($sender, "Merci,votre paiement est effectif\ntoutes vos coordonnées seront envoyer à l'investisseur pour donner suite à votre projet\nPlateforme LinkBiz");

//}


?>