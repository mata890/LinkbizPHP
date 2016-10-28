<?php

include ('connecterBD.php');


try
{
   
$bdd->exec('INSERT into Utilisateur(idPays,Prenom,Nom,Sexe,Profession,Email,Login,Password)
VALUES(

"'.($_POST['pays']).'",
"'.mysql_escape_string($_POST['prenom']).'",
"'.mysql_escape_string($_POST['nom']).'",
"'.mysql_escape_string($_POST['sexe']).'",
"'.mysql_escape_string($_POST['profession']).'",
"'.mysql_escape_string($_POST['email']).'",
"'.mysql_escape_string($_POST['login']).'",
"'.mysql_escape_string($_POST['mdp']).'")' ) ;
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

/*header('Location:  /../LinkBiz/index.php');*/
?>