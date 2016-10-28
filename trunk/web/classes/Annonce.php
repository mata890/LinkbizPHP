<?php
class Annonce {
    private $idAnnonce;
    private $idPack;
    private $idProjet;
    private $dateDebut;
    private $dateFin;
    private $activation;
   
   function __construct($idAnnonce, $idPack, $idProjet, $dateDebut,$dateFin,$activation)
    {
       	$this->idAnnonce = $idAnnonce;
   		$this->idPack = $idPack;
 		$this->idProjet = $idProjet;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin; 
        $this->activation = $activation; 
        
    }
    
     /**
     * @return mixed
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }

    /**
     * @param mixed $idAnnonce
     */
    public function setIdAnnonce($idAnnonce)
    {
        $this->idAnnonce = $idAnnonce;
    }
     /**
     * @return mixed
     */
    public function getIdPack()
    {
        return $this->idPack;
    }

    /**
     * @param mixed $idPack
     */
    public function setIdPack($idPack)
    {
        $this->idPack = $idPack;
    }
     /**
     * @return mixed
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * @param mixed $idProjet
     */
    public function setIdProjet($idProjet)
    {
        $this->idProjet = $idProjet;
    }
     /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param mixed $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }
     /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param mixed $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }
    /**
     * @return mixed
     */
    public function getActivation()
    {
        return $this->activation;
    }

    /**
     * @param mixed $activation
     */
    public function setActivation($activation)
    {
        $this->activation = $activation;
    }
    /**
     * Store the annonce
     */
	function storeAnnonce() {
		global $_db;		
 
		if ( $this->idAnnonce == 0 ) {
			//$this->creationdate = date('Y-m-d H:i:s');
			$_db->query
			( "INSERT INTO `Annonce` 
			( `idAnnonce`, `idPack` , `idProjet` , `DateDebut` , `DateFin`, `Activation`) 
		    	VALUES ('', '".$this->idPack."', '".$this->idProjet."', '".$this->dateDebut."', '".$this->dateFin."', '".$this->activation."' );" );
			$this->idUser = $_db->getInsertId();
		}else {
			//this->lastmodificationdate = date('Y-m-d H:i:s');	
			$_db->query( 'UPDATE message SET idRole="1", idPays="'.$this->pays.'", Prenom="'.$this->prenom.'", Nom="'.$this->nom.'", Sexe="'.$this->sexe.'", Profession="'.$this->profession.'", Email="'.$this->email.'", Tel="'.$this->tel.'",Login="'.$this->login.'", Password="'.$this->mdp.'", Ville="'.$this->ville.'", Motivation="", PhotoUtilisateur="" WHERE idUser = "'.$this->idUser.'";' );
		}
	}



} 
    
    
    