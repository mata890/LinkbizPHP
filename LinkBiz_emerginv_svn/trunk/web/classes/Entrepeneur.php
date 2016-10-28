<?php


class Entrepreneur {
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
    private $motivation;
    private $photoUtilisateur;

   /* function __construct($email, $idPays, $idRole, $idUser, $login, $motivation, $nom, $password, $photoUtilisateur, $prenom, $profession, $sexe, $tel)
    {
        $this->email = $email;
        $this->idPays = $idPays;
        $this->idRole = $idRole;
        $this->idUser = $idUser;
        $this->login = $login;
        $this->motivation = $motivation;
        $this->nom = $nom;
        $this->password = $password;
        $this->photoUtilisateur = $photoUtilisateur;
        $this->prenom = $prenom;
        $this->profession = $profession;
        $this->sexe = $sexe;
        $this->tel = $tel;
    }*/

function __construct($prenom, $nom, $sexe, $profession, $email, $login, $mdp, $pays, $domaine)
    {
   		  $this->prenom = $prenom;
   		 $this->nom = $nom;
 		$this->sexe = $sexe;
        $this->profession = $profession;
        $this->email = $email;       
        $this->login = $login;   
        $this->mdp = $mdp;
        $this->pays = $pays;
        $this->domaine = $domaine;       
        
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




} 