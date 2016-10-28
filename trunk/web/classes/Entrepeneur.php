<?php


class Entrepeneur {
    private $idUser;
    private $idRole;
    private $Pays;
    private $prenom;
    private $nom;
    private $sexe;
    private $profession;
    private $email;
    private $tel;
    private $login;
    private $password;
    private $ville;
    private $motivation;
    private $photoUtilisateur;

  public function __construct()
{
    switch (func_num_args())
    {
    case 0:
        // constructeur par défaut
        break;
    case 10:
        // constructeur avec neuf argument
         $this->prenom =func_get_arg(0);
            $this->nom = func_get_arg(1);
 		$this->sexe = func_get_arg(2);
        $this->profession = func_get_arg(3);
        $this->email = func_get_arg(4); 
        $this->tel = func_get_arg(5); 
        $this->login = func_get_arg(6);   
        $this->mdp = func_get_arg(7);
        $this->pays = func_get_arg(8);
        $this->ville = func_get_arg(9);
       // $this->domaine = $domaine; 
        $this->idRole = 1; 
        break;
    default:
        throw new Exception("pas de constructeur pour ce nombre d'arguments");
    }
}
    
//constructeur
//function __construct($prenom, $nom, $sexe, $profession, $email,$tel, $login, $mdp, $pays,$ville)
  //  {
   	//	  $this->prenom = $prenom;
   	//	 $this->nom = $nom;
 	//	$this->sexe = $sexe;
      //  $this->profession = $profession;
        //$this->email = $email; 
       // $this->tel = $email; 
       // $this->login = $login;   
       // $this->mdp = $mdp;
       // $this->pays = $pays;
       // $this->ville = $ville;
       // $this->domaine = $domaine; 
       // $this->idRole = 1; 
        
   // }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPays()
    {
        return $this->Pays;
    }

    /**
     * @param mixed $idPays
     */
    public function setPays($Pays)
    {
        $this->Pays = $Pays;
    }
      /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $idPays
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * @param mixed $idRole
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getMotivation()
    {
        return $this->motivation;
    }

    /**
     * @param mixed $motivation
     */
    public function setMotivation($motivation)
    {
        $this->motivation = $motivation;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPhotoUtilisateur()
    {
        return $this->photoUtilisateur;
    }

    /**
     * @param mixed $photoUtilisateur
     */
    public function setPhotoUtilisateur($photoUtilisateur)
    {
        $this->photoUtilisateur = $photoUtilisateur;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @param mixed $profession
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }
/**
     * Store the message
	 */
	function store() {
		global $_db;		
 
		if ( $this->idUser == 0 ) {
			//$this->creationdate = date('Y-m-d H:i:s');
			$_db->query
			( "INSERT INTO `Utilisateur` 
			( `idUser`, `idRole` , `Pays` , `Prenom` , `Nom`, `Sexe`, `Profession`, `Email`, `Tel`, `Login`, `Password`,`ville`, `Motivation`,`PhotoUtilisateur`) 
		    	VALUES ('', '1', '".$this->pays."', '".$this->prenom."', '".$this->nom."', '".$this->sexe."', '".$this->profession."', '".$this->email."', '".$this->tel."', '".$this->login."', '".$this->mdp."','".$this->ville."','','' );" );
			$this->idUser = $_db->getInsertId();
		}else {
			//this->lastmodificationdate = date('Y-m-d H:i:s');	
			$_db->query( 'UPDATE message SET idRole="1", Pays="'.$this->pays.'", Prenom="'.$this->prenom.'", Nom="'.$this->nom.'", Sexe="'.$this->sexe.'", Profession="'.$this->profession.'", Email="'.$this->email.'", Tel="'.$this->tel.'",Login="'.$this->login.'", Password="'.$this->mdp.'", Ville="'.$this->ville.'", Motivation="", PhotoUtilisateur="" WHERE idUser = "'.$this->idUser.'";' );
		}
	}
      function getUserId($login,$mdp) {
    	global $_db;
			//this->lastmodificationdate = date('Y-m-d H:i:s');
			return $_db->query( 'SELECT idUser from Utilisateur  WHERE Login = "'.$login.'" and Password="'.$mdp.'";' );
		}
        
        function getUserById($iduser) {
        global $_db; 
        return $_db->getObject('SELECT idRole,Pays,Prenom,Nom,Sexe,Profession,Email,Tel,Login,Password,ville,Motivation,PhotoUtilisateur
        from Utilisateur WHERE idUser = "'.$iduser.'"LIMIT 1;' );
          
		}
        
        function getUserByTel($tel) {
        global $_db; 
        return $_db->getObject('SELECT idUser,idRole,Pays,Prenom,Nom,Sexe,Profession,Email,Tel,Login,Password,ville,Motivation,PhotoUtilisateur
        from Utilisateur WHERE idUser = "'.$tel.'"LIMIT 1;' );
          
    	}
        //insertion du message recu ds la base
		function message($tel,$contenu){
             global $_db; 
             $etat=0;
             $_db->query ( "INSERT INTO `Message` ( `id`,`tel`,`texte`) VALUES ( '','".$tel."', '".$contenu."');" );
         }
          //insertion du message recu ds la base
    	/*function message($tel,$contenu,$idProjet,$idUser,$dateEnvoi){
             global $_db; 
             $etat=0;
             $_db->query ( "INSERT INTO `Message` ( `id`,`tel`,`texte`,`idProjet`,`idUser`,`dateEnvoi`) VALUES ( '','".$tel."', '".$contenu."','".$idProjet."','".$idUser."','".$dateEnvoi."');" );
         }*/
                    //selectionner l'utilisateur
        function selectUser($login,$mdp ) {
    	if ( $login != null && $mdp!=null){
			
			$res = database::getInstance()->getObject( 'SELECT * FROM Utilisateur WHERE Login = "'.$this->login.'" and password = "'.$this->mdp.'" ;' );
			//Check if getObject doesn't return null
			if($res){
				$this->idUser		= $res->idUser;
				$this->idRole		= $res->idRole;
				$this->idPays			= $res->idPays;
				$this->prenom			= $res->Prenom;
				$this->nom			= $res->Nom;
				$this->sexe			= $res->Sexe;
				$this->profession			= $res->Profession;
				$this->email            	= $res->Email;
                $this->tel    = $res->Tel;
                $this->login    = $res->Login;
                $this->password    = $res->Password;
                $this->ville    = $res->Ville;
                $this->motivation    = $res->Motivation;
                $this->photoUtilisateur    = $res->PhotoUtilisateur;
			}
		}
	}
    
   

//selectionner l'utilisateur par Id
        function selectUserById($id ) {
            global $_db;
        if ( $id != null){
			
			$res = $_db->getObject( 'SELECT * FROM Utilisateur WHERE idUser = "'.$id.'";' );
			//Check if getObject doesn't return null
			if($res){
				$this->setIdUser		= $res->idUser;
				$this->setIdRole		= $res->idRole;
			
				$this->setPrenom			= $res->Prenom;
				$this->setNom			= $res->Nom;
				$this->setSexe			= $res->Sexe;
				$this->setProfession			= $res->Profession;
				$this->setEmail            	= $res->Email;
                $this->setTel    = $res->Tel;
                $this->setLogin    = $res->Login;
                $this->setPassword    = $res->Password;
                $this->setVille    = $res->Ville;
                $this->setMotivation    = $res->Motivation;
                $this->setPhotoUtilisateur    = $res->PhotoUtilisateur;
			}
		}
	}
    


} 