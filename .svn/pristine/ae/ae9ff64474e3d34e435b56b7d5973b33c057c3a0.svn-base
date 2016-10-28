<?php


class Investisseur {
    private $idUser;
    private $idRole;
    private $idPays;
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
    private $etat;

     public function __construct()
{
    switch (func_num_args())
    {
    case 0:
        // constructeur par défaut
        break;
    case 15:
        // constructeur avec neuf argument
         $this->idUser=func_get_arg(0);
         $this->idRole =func_get_arg(1);
         $this->pays = func_get_arg(2);
         $this->prenom =func_get_arg(3);
            $this->nom = func_get_arg(4);
 		$this->sexe = func_get_arg(5);
        $this->profession = func_get_arg(6);
        $this->email = func_get_arg(7); 
        $this->tel = func_get_arg(8); 
        $this->login = func_get_arg(9);   
        $this->password = func_get_arg(10);
        $this->ville = func_get_arg(11);
        $this->motivation = func_get_arg(12);
        $this->photoUtilisateur = func_get_arg(13);
        $this->etat = func_get_arg(14);
        break;
    default:
        throw new Exception("pas de constructeur pour ce nombre d'arguments");
    }
}

/**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }
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
    public function getIdPays()
    {
        return $this->idPays;
    }

    /**
     * @param mixed $idPays
     */
    public function setIdPays($idPays)
    {
        $this->idPays = $idPays;
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
     * Store the entrepreneur
     */
	function store() {
		global $_db;		
 
		if ( $this->idUser == 0 ) {
			//$this->creationdate = date('Y-m-d H:i:s');
			$_db->query
			( "INSERT INTO `Utilisateur` 
			( `idUser`, `idRole` , `Pays` , `Prenom` , `Nom`, `Sexe`, `Profession`, `Email`, `Tel`, `Login`, `Password`,`ville`, `Motivation`,`PhotoUtilisateur`) 
		    	VALUES ('', '2', '".$this->pays."', '".$this->prenom."', '".$this->nom."', '".$this->sexe."', '".$this->profession."', '".$this->email."', '".$this->tel."', '".$this->login."', '".$this->password."','".$this->ville."','','' );" );
			$this->idUser = $_db->getInsertId();
		}else {
			//this->lastmodificationdate = date('Y-m-d H:i:s');	
			$_db->query( 'UPDATE message SET idRole="2", Pays="'.$this->pays.'", Prenom="'.$this->prenom.'", Nom="'.$this->nom.'", Sexe="'.$this->sexe.'", Profession="'.$this->profession.'", Email="'.$this->email.'", Tel="'.$this->tel.'",Login="'.$this->login.'", Password="'.$this->password.'", Ville="'.$this->ville.'", Motivation="", PhotoUtilisateur="" WHERE idUser = "'.$this->idUser.'";' );
		}
	}
      function getUserId($login,$mdp) {
    	global $_db;
			//this->lastmodificationdate = date('Y-m-d H:i:s');
			return $_db->query( 'SELECT idUser from Utilisateur  WHERE Login = "'.$login.'" and Password="'.$mdp.'";' );
		}
        
    
    
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



} 