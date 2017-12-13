<?php
class Coop_emploi
{
	private $designationcoop;
	private $telephonecoop;
	private $email;

    public function __construct($designationcoop, $telephonecoop, $email){
    	$this->designationcoop = $designationcoop;
    	$this->telephonecoop = $telephonecoop;
    	$this->email = $email;
        
    }
       public function getDesignationCoop(){
    		return $this->designationcoop;
    }
    public function setDesignationCoop(){
    	
    }
       public function getTelephoneCoop(){
    		return $this->telephonecoop;
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