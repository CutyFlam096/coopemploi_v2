<?php
class Coop_emploi
{
    public $id_coop;
	public $designation_coop;
	public $telephone_coop;
	public $email;
    public $id_adresse;
    
    public $une_adresse;
    
	public function __construct($telephone_coop, $telephonecoop, $email){
        $this->designation_coop = $designation_coop;
        $this->telephone_coop = $telephone_coop;
    	$this->email = $email;
        
    }
       public function getDesignationCoop(){
           return $this->designation_coop;
    }
    public function setDesignationCoop(){
    	
    }
       public function getTelephoneCoop(){
           return $this->telephone_coop;
    }
    public function setTelephoneCoop(){
    	
    }
        public function getEmail(){
    		return $this->email;
    }
    public function setEmail(){
    	
    }
}

?>