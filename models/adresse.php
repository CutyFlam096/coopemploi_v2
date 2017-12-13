<?php
class Adresse
{

	private $rue1_adresse;
	private $rue2_adresse;
	private $code_commune_isee;

    public function __construct($rue1_adresse,$rue2_adresse,$code_commune_isee){
        		
        
        		$this->rue1_adresse = $rue1_adresse;
        		$this->rue2_adresse = $rue2_adresse;
        		$this->code_commune_isee = $code_commune_isee;
    }

//getter et setter pour la ligne 1 de l'adresse doit être obligatoire
    public function getRue1Adresse(){
    		return $this->rue1adresse;
    }
    public function setRue1Adresse(){
    	
    }

// getter et setter pour la ligne 2 de l'adresse ne doit pas être obligatoire
     public function getRue2Adresse(){
     		return $this->rue2adresse;
    }
    public function setRue2Adresse(){
    	
    }

// getter et setter pour récuperer la commune et le code postale 
    public function getCodeCommmune(){
    		return $this->codecommmune;
    }
    public function setCodeCommune(){
    	
    }

}

?>