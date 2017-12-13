<?php
class Entretien
{
	private $dateentretient;
	private $rapportentretient;
    public function __construct($dateentretient, $rapportentretient){
    	$this->dateentretient = $dateentretient;
    	$this->rapportentretient = $rapportentretient;
        
    }


    public function getDateEntretient(){
    	return $this->dateentretient;
    }
    public function setDateEntretient(){
    	
    }


    public function getRapportEntretient(){
    	return $this->rapportentretient;
    }
    public function setRapportEntretient(){
    	
    }
}

?>