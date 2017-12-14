<?php
class Projet
{
    public $id_projet;
    public $nom_projet;
    public $nic;
    public $check_digit_siret;
    public $description_projet;
    public $id_createur;
    public $id_secteur_projet;
    
    public $un_createur;
    public $un_secteur;
    
    public function __construct($nomprojet,$siren,$nic,$checkdigitsiret,$descriptionprojet){
        $this->nomprojet = $nom_projet;
		$this->siren = $siren;
		$this->nic = $nic;
		$this->checkdigitsiret = $check_digit_siret;
		$this->descriptionprojet = $description_projet;
        
    }
     public function getNomProjet(){
    	return $this->nomprojet;
    }
    public function setNomProjet(){
    	
    }


    public function getSiren(){
    	return $this->siren;
    }
    public function setSiren(){
    	
    }
     public function getCheckdigitSiren(){
    	return $this->checkdigitsirent;
    }
    public function setCheckdigitSiren(){
    	
    }


    public function getDescriptionProjet(){
    	return $this->descriptionprojet;
    }
    public function setDescriptionProjet(){
    	
    }

}

?>