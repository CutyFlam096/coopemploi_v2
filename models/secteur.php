<?php
class Secteur
{
	public $id_secteur_projet;
	public $designation_secteur_projet;
	
    public function __construct($designationsecteruprojet){
    	$this->designationsecteurprojet = $designationsecteurprojet;
        
    }
     public function getDesignationSecteurProjet(){
    	return $this->designationsecteurprojet;
    }
    public function setDesignationSecteurProjet(){
    	
    }
}

?>