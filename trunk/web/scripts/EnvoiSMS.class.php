<?php
// Load required configuration & Emerginov Class
require_once("passwords.php");
require_once("Emerginov.php");
 
class EnvoiSMS {
    
    function envoyerSMS($tel,$prenom,$nom,$iduser){
       // Get a new Emerginov object
        $e = new Emerginov($api_login, $api_password);
        
        // Send the SMS
        print_r($e->SendSMS($tel, "Bonjour".$prenom." ".$nom));
    }
    
   
}
?>