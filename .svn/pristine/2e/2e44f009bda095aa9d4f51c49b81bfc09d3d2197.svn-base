<?php

require_once('connexionTest.php');
session_start(); // début de session

if (isset($_POST['login'])){ // execution apres envoi du formulaire
    $login = $_POST['login']; // mise en variable du nom d'utilisateur
    $pass = $_POST['mdp']; // mise en variable du mot de passe crypté
    $verif_query = "SELECT * FROM $tablename_dbprotect WHERE login='$login' AND Password='$pass'"; // requête sur la base administrateurs
    $q = $dbprotect->query($verif_query);
	$q->setFetchMode(PDO::FETCH_ASSOC);
	while ($row_verif = $q->fetch()){
	 $_SESSION['authentification'] = 1; // enregistrement de la session
		
		// déclaration des variables de session
		$_SESSION['privilege'] = $row_verif['idRole']; // le privilège de l'utilisateur (permet de définir des niveaux d'utilisateur)
		$_SESSION['nom'] = $row_verif['Nom']; // Son nom
		$_SESSION['prenom'] = $row_verif['Prenom']; // Son Prénom
		$_SESSION['login'] = $row_verif['Login']; // Son Login
		$_SESSION['pass'] = $row_verif['Password'];
                $_SESSION['email'] = $row_verif['Email'];
                $_SESSION['profession'] = $row_verif['Profession'];// Son mot de passe (à éviter)
                $_SESSION['pays'] = $row_verif['Pays'];
                $_SESSION['ville'] = $row_verif['Ville'];
       // echo htmlprint($row_verif['prenom']);
        if( $row_verif['idRole']==1){
            session_start();
            header("Location: ../profileEntrepreneur.php"); // redirection si OK
    	exit;
        }else if( $row_verif['idRole']==2){
            session_start();
            header("Location: ../profileInvestisseur.php"); // redirection si OK
        exit;
        }else if( $row_verif['idRole']==3){
            session_start();
            header("Location: ../profileAdministrateur.php"); // redirection si OK
        exit;
        }else{
          header("Location: ../index.php"); // redirection si OK
    	exit;  
        }
		
		
}}
/*	else {
        $_SESSION['erreurCon'] = 1;
		header("Location: ../connextion.php?erreur=login"); // redirection si utilisateur non reconnu
		exit;
	}*/


// GESTION DE LA Déconnexion
if (isset($_GET['erreur']) && $_GET['erreur'] == 'logout'){ // Test sur les paramètres d'URL qui permettront d'identifier un "contexte" de déconnexion
header("Location: ../connextion.php?erreur=login");
exit;
}
?>
<?php

require_once('connexionTest.php');
//session_start(); // début de session

if (isset($_POST['login'])){ // execution apres envoi du formulaire
    $login = $_POST['login']; // mise en variable du nom d'utilisateur
	$pass = sha1($_POST['mdp']); // mise en variable du mot de passe crypté
    $verif_query = "SELECT * FROM $tablename_dbprotect WHERE login='$login' AND Password='$pass'"; // requête sur la base administrateurs
    $q = $dbprotect->query($verif_query);
	$q->setFetchMode(PDO::FETCH_ASSOC);
	while ($row_verif = $q->fetch()){
	 $_SESSION['authentification'] = 1; // enregistrement de la session
		
		// déclaration des variables de session
        $_SESSION['idUser'] = $row_verif['idUser'];
		$_SESSION['privilege'] = $row_verif['idRole']; // le privilège de l'utilisateur (permet de définir des niveaux d'utilisateur)
		$_SESSION['nom'] = $row_verif['Nom']; // Son nom
		$_SESSION['prenom'] = $row_verif['Prenom']; // Son Prénom
		$_SESSION['login'] = $row_verif['Login']; // Son Login
		$_SESSION['pass'] = $row_verif['Password'];
        $_SESSION['email'] = $row_verif['Email'];
        $_SESSION['profession'] = $row_verif['Profession'];// Son mot de passe (à éviter)
         $_SESSION['pays'] = $row_verif['Pays'];
         $_SESSION['ville'] = $row_verif['Ville'];
    // $_SESSION['ville'] = $row_verif['Ville'];
       // echo htmlprint($row_verif['prenom']);
        if( $row_verif['idRole']==1){
            //session_start();
            header("Location: ../profileEntrepreneur.php"); // redirection si OK
    	exit;
        }else if( $row_verif['idRole']==2){
            header("Location: ../profileInvestisseur.php"); // redirection si OK
        exit;
        }else if( $row_verif['idRole']==3){
            header("Location: ../profileAdministrateur.php"); // redirection si OK
        exit;
        }else{
          header("Location: ../index.php"); // redirection si OK
    	exit;  
        }
		
		
}}
/*	else {
        $_SESSION['erreurCon'] = 1;
		header("Location: ../connextion.php?erreur=login"); // redirection si utilisateur non reconnu
		exit;
	}*/


// GESTION DE LA Déconnexion
if (isset($_GET['erreur']) && $_GET['erreur'] == 'logout'){ // Test sur les paramètres d'URL qui permettront d'identifier un "contexte" de déconnexion
header("Location: ../connextion.php?erreur=login");
exit;
}
?>
