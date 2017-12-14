<?php
class Reunion
{
    public $id_reunion; 
    public $date_heure_debut_reunion; 
    public $date_heure_fin_reunion;
    public $id_lieu; 
    public $nom_organisateur;
    
    public $un_organisateur;
    public $un_lieu;
    
	public function __construct($id_reunion, $dateheuredebutreunion,$dateheurefinreunion, $id_lieu, $id_utilisateur){
	    $this->id_reunion = $id_reunion;
	    $this->date_heure_debut_reunion = $dateheuredebutreunion;
	    $this->date_heure_fin_reunion = $dateheurefinreunion;
        $this->id_utilisateur = $id_lieu;
        $this->id_lieu = $id_utilisateur;
    }

     public function getDateHeureDebutReunion(){
         return $this->$date_heure_debut_reunion;
    }
    public function setDateHeureDebutReunion(){
    	
    }


    public function getDateHeureFinReunion(){
        return $this->$date_heure_fin_reunion;
    }
    public function setDateHeureFinReunion(){
    	
    }

}

?>