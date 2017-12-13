<?php
class Projet
{
	private $nomprojet;
	private $siren;
	private $nic;
	private $checkdigitsiret;
	private $descriptionprojet;
    public function __construct($nomprojet,$siren,$nic,$checkdigitsiret,$descriptionprojet){
    	$this->nomprojet = $nomprojet;
		$this->siren = $siren;
		$this->nic = $nic;
		$this->checkdigitsiret = $checkdigitsiret;
		$this->descriptionprojet = $descriptionprojet;
        
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