<?php
class Reunion
{
	private $dateheuredebutreunion; 
	private $dateheurefinreunion;

    public function __construct($dateheuredebutreunion,$dateheurefinreunion){
        	$this->dateheuredebutreunion = $dateheuredebutreunion;
        	$this->dateheurefinreunion = $dateheurefinreunion;
    }

     public function getDateHeureDebutReunion(){
    	return $this->dateheuredebutreunion;
    }
    public function setDateHeureDebutReunion(){
    	
    }


    public function getDateHeureFinReunion(){
    	return $this->dateheurefinreunion;
    }
    public function setDateHeureFinReunion(){
    	
    }

}

?>