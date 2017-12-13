<?php
class Secteur
{
	private $designationsecteruprojet;
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