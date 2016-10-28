<?php
class Projet {
    private $idProjet;
    private $idUser;
    private $Domaine;
    private $RaisonFin;
    private $Phase;
    private $RoleInvestisseur;
    private $Projet;
    private $Description;
    private $CaPrevision;
    private $InvestSouhaite;
    private $PhotoProjet;
    private $EtapeEntreprise;
    private $idPack;
    private $DateDebut;
    private $DateFin;
    private $Etat;
    
    
    
      public function __construct()
{
    switch (func_num_args())
    {
    case 0:
        // constructeur par défaut
        break;
    case 16:// constructeur qvec 16 arguments
        $this->idProjet = func_get_arg(0);
        $this->idUser = func_get_arg(1);
        $this->Domaine = func_get_arg(2);
        $this->RaisonFin = func_get_arg(3);
        $this->Phase = func_get_arg(4);
        $this->RoleInvestisseur = func_get_arg(5);
        $this->Projet = func_get_arg(6);
        $this->Description = func_get_arg(7);
        $this->CaPrevision = func_get_arg(8);
        $this->InvestSouhaite = func_get_arg(9);
         $this->PhotoProjet = func_get_arg(10);
         $this->EtapeEntreprise = func_get_arg(11);
         $this->idPack = func_get_arg(12);   
        $this->DateDebut = func_get_arg(13);
        $this->DateFin = func_get_arg(14);
         $this->Etat = func_get_arg(15);
        
        break;
    default:
        throw new Exception("pas de constructeur pour ce nombre d'arguments");
    }
}

   

    /**
     * @return mixed
     */
    public function getCaPrevision()
    {
        return $this->CaPrevision;
    }

    /**
     * @param mixed $CaPrevision
     */
    public function setCaPrevision($CaPrevision)
    {
        $this->CaPrevision = $CaPrevision;
    }

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->DateDebut;
    }

    /**
     * @param mixed $DateDebut
     */
    public function setDateDebut($DateDebut)
    {
        $this->DateDebut = $DateDebut;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->DateFin;
    }

    /**
     * @param mixed $DateFin
     */
    public function setDateFin($DateFin)
    {
        $this->DateFin = $DateFin;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    /**
     * @return mixed
     */
    public function getDomaine()
    {
        return $this->Domaine;
    }

    /**
     * @param mixed $Domaine
     */
    public function setDomaine($Domaine)
    {
        $this->Domaine = $Domaine;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->Etat;
    }

    /**
     * @param mixed $Etat
     */
    public function setEtat($Etat)
    {
        $this->Etat = $Etat;
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
    public function getInvestSouhaite()
    {
        return $this->InvestSouhaite;
    }

    /**
     * @param mixed $InvestSouhaite
     */
    public function setInvestSouhaite($InvestSouhaite)
    {
        $this->InvestSouhaite = $InvestSouhaite;
    }

    /**
     * @return mixed
     */
    public function getPhase()
    {
        return $this->Phase;
    }

    /**
     * @param mixed $Phase
     */
    public function setPhase($Phase)
    {
        $this->Phase = $Phase;
    }

    /**
     * @return mixed
     */
    public function getPhotoProjet()
    {
        return $this->PhotoProjet;
    }

    /**
     * @param mixed $PhotoProjet
     */
    public function setPhotoProjet($PhotoProjet)
    {
        $this->PhotoProjet = $PhotoProjet;
    }

    /**
     * @return mixed
     */
    public function getProjet()
    {
        return $this->Projet;
    }

    /**
     * @param mixed $Projet
     */
    public function setProjet($Projet)
    {
        $this->Projet = $Projet;
    }

    /**
     * @return mixed
     */
    public function getRaisonFin()
    {
        return $this->RaisonFin;
    }

    /**
     * @param mixed $RaisonFin
     */
    public function setRaisonFin($RaisonFin)
    {
        $this->RaisonFin = $RaisonFin;
    }

    /**
     * @return mixed
     */
    public function getRoleInvestisseur()
    {
        return $this->RoleInvestisseur;
    }

    /**
     * @param mixed $RoleInvestisseur
     */
    public function setRoleInvestisseur($RoleInvestisseur)
    {
        $this->RoleInvestisseur = $RoleInvestisseur;
    }
    /**
     * @return mixed
     */
    public function getEtapeEntreprise()
    {
        return $this->EtapeEntreprise;
    }

    /**
     * @param mixed $EtapeEntreprise
     */
    public function setEtapeEntreprise($EtapeEntreprise)
    {
        $this->EtapeEntreprise = $EtapeEntreprise;
    }
    
    /**
     * Store the project
     */
	function storeProjet() {
		global $_db;		
 
		if ( $this->idProjet == 0 ) {
			//$this->creationdate = date('Y-m-d H:i:s');
			$_db->query
			( "INSERT INTO `Projet` 
			( `idProjet`, `idUser` , `Domaine` , `RaisonFinancement` , `Phase`, `RoleInvestisseur`, `Projet`,
                `Description`, `CaPrevision`, `InvestSouhaite`, `PhotoProjet`,`EtapeEntreprise`,`idPack`, `DateDebut`,`DateFin`,`Etat`) 
		    	VALUES ('".$this->idProjet."', '".$this->idUser."', '".$this->Domaine."', '".$this->RaisonFin."', '".$this->Phase."', '".$this->RoleInvestisseur."', '".$this->Projet."',
                '".$this->Description."', '".$this->CaPrevision."', '".$this->InvestSouhaite."', '".$this->PhotoProjet."','".$this->EtapeEntreprise."','".$this->idPack."','".$this->DateDebut."','".$this->DateFin."','".$this->Etat."' );" );
			$this->idProjet = $_db->getInsertId();
		}else {
			//this->lastmodificationdate = date('Y-m-d H:i:s');	
			$_db->query( 'UPDATE Projet SET idUser="'.$this->idUser.'", Domaine="'.$this->Domaine.'", RaisonFinancement="'.$this->RaisonFin.'", Phase="'.$this->Phase.'", RoleInvestisseur="'.$this->RoleInvestisseur.'", Projet="'.$this->Projet.'",
                Description="'.$this->Description.'",CaPrevision="'.$this->CaPrevision.'",InvestSouhaite="'.$this->InvestSouhaite.'", PhotoProjet="'.$this->PhotoProjet.'", EtapeEntreprise="'.$this->EtapeEntreprise.'", idPack="'.$this->idPack.'", DateDebut="'.$this->DateDebut.'", DateFin="'.$this->DateFin.'",Etat="'.$this->Etat.'"  WHERE idProjet = "'.$this->idProjet.'";' );
		}
	}
    
     /**
     * selectionner les  projets
     */
    function selectProjets() { 
        global $_db;
        $query="SELECT idProjet, idUser, Domaine, RaisonFinancement, Phase,
                                RoleInvestisseur,Projet,Description,CaPrevision,InvestSouhaite,
                                PhotoProjet,EtapeEntreprise,idPack,DateDebut,DateFin,Etat FROM Projet";
             
         return $_db->getObjects($query);
    } 
    
     /**
     * selectionner les  projets par domaine
     */
    function selectProjetbydomaine($domaine) { 
        global $_db;
        $query="SELECT idProjet, idUser, Domaine, RaisonFinancement, Phase,
                                RoleInvestisseur,Projet,Description,CaPrevision,InvestSouhaite,
                                PhotoProjet,EtapeEntreprise,idPack,DateDebut,DateFin,Etat FROM Projet where Domaine='".$domaine."'";
             
         return $_db->getObjects($query);
    } 
     /**
     * selectionner l'entrepreneur
     */
    function selectEntrbyUser($idUser) { 
        global $_db;
        $query="SELECT * FROM Utilisateur where IdUser='".$idUser."'";
             
         return $_db->getObjects($query);
    } 
    
    /**
     * selectionner les  projets par utilisateur
     */
    function selectProjetbyuser($user) { 
        global $_db;
        $query="SELECT idProjet, idUser, Domaine, RaisonFinancement, Phase,
                                RoleInvestisseur,Projet,Description,CaPrevision,InvestSouhaite,
                                PhotoProjet,EtapeEntreprise,idPack,DateDebut,DateFin,Etat FROM Projet where idUser='".$user."'";
             
         return $_db->getObjects($query);
    } 
    function selectUserbyProjet($idprojet) {
    	global $_db;
    	//$query = "SELECT distinct * FROM Utilisateur u join Projet p on u.idUser=p.idUser and p.idProjet='".$idprojet."'";
    	 
    	return $_db->getObject("SELECT idRole,Pays,Prenom,Nom,Sexe,Profession,Email,Tel,Login,Password,ville,Motivation,PhotoUtilisateur
    			 FROM Utilisateur u join Projet p on u.idUser=p.idUser and p.idProjet='".$idprojet."'");
        
    }
    function selectProjetSoutenu($user) { 
        global $_db;
        $query="SELECT distinct p.idProjet, p.idUser, p.Domaine, p.RaisonFinancement, p.Phase,
                                p.RoleInvestisseur,p.Projet,Description,p.CaPrevision,p.InvestSouhaite,
                                p.PhotoProjet,p.EtapeEntreprise,p.idPack,p.DateDebut,p.DateFin,p.Etat 
        						FROM Projet p JOIN Projet_Soutenu ps on ps.idProjet=p.idProjet 
        						JOIN Utilisateur u on ps.idUser='".$user."' and u.idRole=2";
             
         return $_db->getObjects($query);
    } 
   
   
    function updateEtatProjet($idProjet){
    	global $_db;
    	$_db->query("UPDATE `Projet` SET `Etat`=1 WHERE Etat=".$idProjet." ");
     }
     function getProjetByNumero($numeroEntr){
     	global $_db;
     	$query="SELECT distinct p.idProjet, p.idUser, p.Domaine, p.RaisonFinancement, p.Phase,
                                p.RoleInvestisseur,p.Projet,p.Description,p.CaPrevision,p.InvestSouhaite,
                                p.PhotoProjet,p.EtapeEntreprise,p.idPack,p.DateDebut,p.DateFin,p.Etat
        						FROM Projet p
        						JOIN Utilisateur u on p.idUser=u.idUser and u.idRole=1 and Tel='".$numeroEntr."'   ";
     	 
     	return $_db->getObjects($query);
     }
    
    function selectProjetbyIdProjet($idProjet) { 
        global $_db;
        $query="SELECT  idUser, Domaine, RaisonFinancement, Phase,
                                RoleInvestisseur,Projet,Description,CaPrevision,InvestSouhaite,
                                PhotoProjet,EtapeEntreprise,idPack,DateDebut,DateFin,Etat FROM Projet where idProjet='".$idProjet."'";
             
         return $_db->getObjects($query);
    }
    
     /**
     * selectionner les  projets par utilisateur par domaine
     */
    function selectProjetbyuserbydomaine($user,$domaine) { 
        global $_db;
        $query="SELECT idProjet, idUser, Domaine, RaisonFinancement, Phase,
                                RoleInvestisseur,Projet,Description,CaPrevision,InvestSouhaite,
                                PhotoProjet,EtapeEntreprise,idPack,DateDebut,DateFin,Etat FROM Projet where idUser='".$user."' and Domaine='".$domaine."'";
             
         return $_db->getObjects($query);
    } 
        
         /**
     * selectionner l'entrepreneur du projet
     */
    function selectEntrepreneurProjet($user,$projet) { 
        global $_db;
        $query="SELECT u.idUser,idRole,Pays,Prenom,Nom,Sexe,Profession,Email,Tel,Login,Password,ville,Motivation,PhotoUtilisateur,u.Etat
                 FROM Utilisateur u join Projet p on u.idUser=p.idUser where u.idUser='".$user."' and p.idProjet='".$projet."'";
                  //FROM Utilisateur u join Projet p on u.idUser=p.idUser where u.idUser='".$user."' and p.idProjet='".$projet."'";
             
         return $_db->getObject($query);
    } 
    
 
function soutenir($user,$projet){
 global $_db; 
 $etat=0;
 $_db->query ( "INSERT INTO `Projet_Soutenu` 
    		(`idUser` , `idprojet`,`etat`) 
		    	VALUES ( '".$user."', '".$projet."', '".$etat."');" );
}
function soutenuPar($projet,$user){
 global $_db; 
 $query = mysql_query("Select idPS from Projet_Soutenu ps where ps.idProjet='".$projet."'  and ps.idUser='".$user."' ");
if(mysql_num_rows($query)==1){
     return 1;
 }else{
     return 0;
 }
}
function soutenuParByProjet($projet){
 global $_db; 
 $query = mysql_query("Select idUser from Projet_Soutenu ps where ps.idProjet='".$projet."' ");
return $_db->getObject($query);
}
function retirerSoutien($projet,$user){
 global $_db; 
 $_db->query("delete from Projet_Soutenu  where idProjet='".$projet."' and idUser='".$user."' ");
}
function projetSoutenu($invest){
 global $_db; 
 $query = mysql_query("Select idProjet from Projet_Soutenu ps where ps.idProjet='".$invest."' ");
return $_db->getObject($query);
}
function store_comment($idUser, $contenu) {
     global $_db; 
    $_db->query("INSERT INTO `Temoignage` (`idUser`,`Contenu`) VALUES ('".$idUser."', '".$contenu."' ");
			
	}
    
    
    
    
    
    
    
    
    
    
    
    
    
}