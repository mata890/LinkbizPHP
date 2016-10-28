<?php



try
{
 
$bdd = new PDO('mysql:host=localhost;dbname=proj_LinkBiz_7isoybau', 'LinkBiz', 'fzg60n82hc');
}
catch(Exception $e)
{
        die('Erreur Connection : '.$e->getMessage());
}

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$sexe = $_POST['sexe'];
$profession = $_POST['profession'];
$email = $_POST['email'];
$login = $_POST['login'];
$mdp = $_POST['mdp'];
$pays = $_POST['pays'];
$domaine = $_POST['domaine'];

$bdd->exec('INSERT into Utilisateur(prenom,nom,sexe,profession,email,login,mdp,pays,domaine)
VALUES("'.mysql_escape_string($_POST['prenom']).'",
"'.mysql_escape_string($_POST['nom']).'",
"'.mysql_escape_string($_POST['sexe']).'",
"'.mysql_escape_string($_POST['profession']).'",
"'.mysql_escape_string($_POST['email']).'",
"'.mysql_escape_string($_POST['login']).'",
"'.mysql_escape_string($_POST['mdp']).'",
"'.mysql_escape_string($_POST['pays']).'",
"'.mysql_escape_string($_POST['domaine']).'")' ) 
or die('Erreur Insertion : '.$e->getMessage());
header('Location: index.php');
?>