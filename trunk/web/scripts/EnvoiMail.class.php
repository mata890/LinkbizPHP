<?php
// Load required configuration & Emerginov Class
require_once("passwords.php");
require_once("Emerginov.php");
 
class EnvoiMail {
    
    function envoyerMail($mail,$prenom,$nom,$iduser){
            
            // Envoi du courrier
        if ( mail ( $mail , "LinkBiz Emerginov" , "Bonjour ".$prenom." ".$nom." \n Bienvenue  notre  plateforme communautaire  LinkBiz,
        \nla prémiere plateforme de mise en relation Entrepreneur/Investisseur.
        \nMerci de cliquer sur ce lien pour activer votre compte <a href='http://projects.emerginov.orange.sn/LinkBiz/scripts/aqzsedrftgyh.php?identifiant=".$iduser."'>LinkBiz.com</a>
        \nSi vous n’avez pas déposer votre projet, faites le, nos investisseurs vous attendent!
        \nCordialement,
        \n\nl\'équipe LinkBiz" ))
        echo "Mail envoyé!" ;
        else echo "Erreur lors de l'envoi de courrier" ;
    }
    
   
}
?>