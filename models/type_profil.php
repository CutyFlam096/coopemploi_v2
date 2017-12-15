<?php
class Type_profil
{
    public $id_tupe_profil;
	public $designation_type_profil;
	
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