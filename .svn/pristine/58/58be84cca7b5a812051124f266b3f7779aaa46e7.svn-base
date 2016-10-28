<?php
class Temoignage {
    private $idTemoignage;
	private $contenu;
	private $IdUser;
	
	function __construct($idTemoignage, $contenu, $IdUser)
	{
		$this->idTemoignage=$idTemoignage;
		$this->contenu=$contenu;
		$this->idUser=$IdUser;
		
	}
	public function getIdTemoignage() {
		return $this->idTemoignage;
	}
	public function getContenu() {
		return $this->contenu;
	}
	public function getIdUser() {
		return $this->idUser;
	}
	public function setIdTemoignage($idTemoignage) {
		$this->idTemoignage = $idTemoignage;
	}
	public function setIdUser($idUser) {
		$this->idUser =  $idUser;
	}
	public function setContenu($contenu) {
					$this->contenu = $contenu;
		
	}
	function store() {
	 global $_db; 
    $_db->query("INSERT INTO `Temoignage` (`idUser`,`Contenu`) VALUES ('".$this->idUser."', '".$this->contenu."' ");
			
	}
	
}

