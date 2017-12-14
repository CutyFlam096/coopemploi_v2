<?php
class Entretien
{
    public $id_entretien;
	public $date_entretient;
	public $rapport_entretient;
	public $id_porteur;
	public $id_conseiller;
	
	public $un_conseiller;
	public $un_porteur;
	
	public function __construct($date_entretient, $rapport_entretient){
	    $this->date_entretient = $date_entretient;
	    $this->rapport_entretient = $rapport_entretient;
        
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