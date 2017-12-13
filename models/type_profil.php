<?php
class Type_profil
{
	private $designationtypeprofil;
    public function __construct($designationtypeprofil){
        $this->designationtypeprofil = $designationtypeprofil;
    }

    public function getDesignationTypeProfil(){
    	return $this->designationtypeprofil;
    }
    public function setDesignationTypeProfil(){
    	
    }

}

?>